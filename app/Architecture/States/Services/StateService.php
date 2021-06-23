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
     * StateService constructor.
     * @param IStateRepository $IStateRepository
     * @param StateValidate $StateValidate
     */
    public function __construct(IStateRepository $IStateRepository, StateValidate $StateValidate)
    {
        $this->IStatesRepository = $IStateRepository;
        $this->StateValidate = $StateValidate;
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
        $this->getStateValidate()->validaParametros($params);

        $response = Http::get(
            config('services.county.url')."{$params->uf}/municipios"
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
    private function getStateValidate() : StateValidate
    {
        return $this->StateValidate;
    }
}
