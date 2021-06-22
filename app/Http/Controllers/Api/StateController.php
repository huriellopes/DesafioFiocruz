<?php

namespace App\Http\Controllers\Api;

use App\Architecture\People\Interfaces\IPeopleService;
use App\Architecture\States\Interfaces\IStateService;
use App\Enum\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\Http\Resources\States\StateResourceCollection;
use Illuminate\Http\JsonResponse;
use stdClass;
use Exception;
use Throwable;

class StateController extends Controller
{
    /**
     * @var IStateService
     */
    protected $IStateService;

    /**
     * StateController constructor.
     * @param IPeopleService $IPeopleService
     * @param IStateService $IStateService
     */
    public function __construct(IPeopleService $IPeopleService, IStateService $IStateService)
    {
        parent::__construct($IPeopleService);
        $this->IStateService = $IStateService;
    }

    /**
     * @param StateRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(StateRequest $request) : JsonResponse
    {
        try {

            $state = $this->IStateService->findState((int) $this->limpa_tags($request->input('uf')));

            $params = new stdClass();
            $params->uf = $state->uf;

            $states = $this->IStateService->searchCity($params);

            return response()->json(new StateResourceCollection($states), StatusEnum::OK);
        } catch (Exception $err) {
            report($err);

            $this->shootExeception($err, StatusEnum::BAD_REQUEST);
        }
    }
}
