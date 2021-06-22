<?php

namespace App\Architecture\States\Interfaces;

use App\Architecture\States\Models\State;
use Illuminate\Database\Eloquent\Collection;

interface IStateRepository
{
    /**
     * @return Collection
     */
    public function listSates() : Collection;

    /**
     * @param int $id
     * @return State|null
     */
    public function findState(int $id) :? State;
}
