<?php

namespace App\Http\Controllers\Api;

use App\Architecture\People\Enum\PeopleEnum;
use App\Enum\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleRequest;
use App\Http\Resources\People\PeopleResourceCollection;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
                $params = new stdClass();
                $params->nationality_id = $this->limpa_tags($request->input('nationality_id'));
                $params->name = $this->limpa_tags(Str::upper($request->input('name')));
                $params->cpf = $this->limpa_tags($this->limpar_mascara($request->input('cpf')));
                $params->birth = Carbon::createFromFormat('d/m/Y', $this->limpa_tags($request->input('birth')));
                $params->state_id = $this->limpa_tags($request->input('state_id'));
                $params->city = $this->limpa_tags($request->input('city'));
                $params->academic_id = $this->limpa_tags($request->input('academic_id'));

                $this->IPeopleService->store($params);
            DB::commit();

            return response()->json(PeopleEnum::CREATED, StatusEnum::CREATED);
        } catch (Exception $err) {
            DB::rollBack();
            report($err);

            $this->shootExeception($err, StatusEnum::BAD_REQUEST);
        }
    }
}
