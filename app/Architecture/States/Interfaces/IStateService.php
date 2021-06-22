<?php

namespace App\Architecture\States\Interfaces;

use App\Architecture\States\Models\State;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

interface IStateService
{
    /**
     * @return Collection
     */
    public function listSates() : Collection;

    /**
     * @param stdClass $params
     * @return mixed
     */
    public function searchCity(stdClass $params);

    /**
     * @param int $id
     * @return State|null
     */
    public function findState(int $id) :? State;
}
