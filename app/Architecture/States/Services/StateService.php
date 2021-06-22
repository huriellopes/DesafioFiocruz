<?php

namespace App\Architecture\States\Services;

use App\Architecture\States\Interfaces\IStateRepository;
use App\Architecture\States\Interfaces\IStateService;
use App\Architecture\States\Models\State;
use App\Architecture\States\Validate\StateValidate;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use App\Exceptions\SystemException;
use stdClass;
use Throwable;

class StateService implements IStateService
{
    /**
     * @var IStateRepository
     * @var StateValidate
     */
    protected $IStatesRepository;
    protected $StateValidate;

    /**
     * StatesService constructor.
     * @param IStateRepository $IStateRepository
     */
    public function __construct(IStateRepository $IStateRepository)
    {
        $this->IStatesRepository = $IStateRepository;
    }

    /**
     * @return Collection
     */
    public function listSates(): Collection
    {
        return $this->IStatesRepository->listSates();
    }

    /**
     * @param stdClass $params
     * @return array|mixed
     * @throws Throwable
     */
    public function searchCity(stdClass $params)
    {
//        $this->getStateValidate()->validaParametros($params);

        $response = Http::get(
            "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$params->uf}/municipios"
        );

        return $response->json();
    }

    /**
     * @param int $id
     * @return State|null
     */
    public function findState(int $id) :? State
    {
        return $this->IStatesRepository->findState($id);
    }

    /**
     * @return StateValidate
     */
    private function getStateValidate()
    {
        return $this->StateValidate;
    }
}
