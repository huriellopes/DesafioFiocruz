<?php

namespace App\Http\Controllers\Api;

use App\Enum\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\CpfRequest;
use Illuminate\Http\JsonResponse;
use Exception;
use Throwable;

class CpfController extends Controller
{

    /**
     * @param CpfRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(CpfRequest $request) : JsonResponse
    {
        try {
            $cpf = $this->clearTags($this->clearMask($request->input('cpf')));

            $this->IPeopleService->getPeopleInCPF($cpf);

            return response()->json([
                'message' => true,
            ], 200);
        } catch (Exception $err) {
            report($err);

            $this->shootExeception($err, StatusEnum::BAD_REQUEST);
        }
    }
}
