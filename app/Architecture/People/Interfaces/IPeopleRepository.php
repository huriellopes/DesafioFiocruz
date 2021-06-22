<?php

namespace App\Architecture\People\Interfaces;

use App\Architecture\People\Models\People;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

interface IPeopleRepository
{
    /**
     * @return Collection
     */
    public function list() : Collection;

    /**
     * @param string $cpf
     * @return People|null
     */
    public function getPeopleInCPF(string $cpf) :? People;

    /**
     * @param stdClass $params
     * @return People
     */
    public function store(stdClass $params) : People;
}
