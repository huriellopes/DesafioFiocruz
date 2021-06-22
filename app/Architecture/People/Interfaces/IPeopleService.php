<?php

namespace App\Architecture\People\Interfaces;

use App\Architecture\People\Models\People;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

interface IPeopleService
{
    /**
     * @return Collection
     */
    public function list() : Collection;

    /**
     * @param stdClass $params
     * @return People
     */
    public function store(stdClass $params) : People;
}
