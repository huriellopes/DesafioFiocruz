<?php

namespace App\Architecture\People\Services;

use App\Architecture\People\Interfaces\IPeopleRepository;
use App\Architecture\People\Interfaces\IPeopleService;
use App\Architecture\People\Models\People;
use App\Architecture\People\Validate\PeopleValidate;
use Illuminate\Database\Eloquent\Collection;
use stdClass;
use Throwable;

class PeopleService implements IPeopleService
{
    /**
     * @var IPeopleRepository
     * @var PeopleValidate
     */
    protected $IPeopleRepository;
    protected $PeopleValidate;

    /**
     * PeopleService constructor.
     * @param IPeopleRepository $IPeopleRepository
     */
    public function __construct(IPeopleRepository $IPeopleRepository)
    {
        $this->IPeopleRepository = $IPeopleRepository;
    }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->IPeopleRepository->list();
    }

    /**
     * @param stdClass $params
     * @return People
     * @throws Throwable
     */
    public function store(stdClass $params): People
    {
//        $this->getPeopleValidate()->validaParametros($params);
        return $this->IPeopleRepository->store($params);
    }

    /**
     * @return PeopleValidate
     */
    private function getPeopleValidate() : PeopleValidate
    {
        return $this->PeopleValidate;
    }
}
