<?php

namespace App\Architecture\States\Repositories;

use App\Architecture\States\Interfaces\IStateRepository;
use App\Architecture\States\Models\State;
use Illuminate\Database\Eloquent\Collection;

class StateRepository implements IStateRepository
{
    /**
     * @return Collection
     */
    public function listSates(): Collection
    {
        return State::all();
    }

    /**
     * @param int $id
     * @return State|null
     */
    public function findState(int $id) :? State
    {
        return State::find($id);
    }
}
