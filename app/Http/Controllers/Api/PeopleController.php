<?php

namespace App\Http\Controllers\Api;

use App\Architecture\People\Enum\PeopleEnum;
use App\Architecture\People\Models\People;
use App\Enum\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleRequest;
use App\Http\Resources\People\PeopleResourceCollection;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use stdClass;
use Throwable;
use Exception;

class PeopleController extends Controller
{
    /**
     * @return JsonResponse
     * @throws Throwable
     */
    public function index() : JsonResponse
    {
        try {
            $people = $this->IPeopleService->list();
            return response()->json(new PeopleResourceCollection($people), StatusEnum::OK);
        } catch (Exception $err) {
            report($err);

            $this->shootExeception($err, StatusEnum::BAD_REQUEST);
        }
    }

    /**
     * @param PeopleRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(PeopleRequest $request) : JsonResponse
    {
        try {
            DB::beginTransaction();
                $nationality_id = $this->clearTags($request->input('nationality_id'));

                if ($nationality_id === '1') {
                    $birth = Carbon::createFromFormat('m/d/Y', $this->clearTags($request->input('birth')))->toDateString();
                } else {
                    $birth = Carbon::createFromFormat('d/m/Y', $this->clearTags($request->input('birth')))->toDateString();
                }

                $params = new stdClass();
                $params->nationality_id = $nationality_id;
                $params->name = $this->clearTags(Str::upper($request->input('name')));
                $params->cpf = $this->clearTags($this->clearMask($request->input('cpf')));
                $params->birth = $birth;
                $params->state_id = $this->clearTags($request->input('state_id'));
                $params->city = $this->clearTags($request->input('city'));
                $params->academic_id = $this->clearTags($request->input('academic_id'));

                $this->IPeopleService->store($params);
            DB::commit();

            return response()->json([
                'message' => PeopleEnum::CREATED
            ], StatusEnum::CREATED);
        } catch (Exception $err) {
            DB::rollBack();
            report($err);

            $this->shootExeception($err, StatusEnum::BAD_REQUEST);
        }
    }

    public function show(People $people)
    {
        return view('People.show', compact('people'));
    }
}
