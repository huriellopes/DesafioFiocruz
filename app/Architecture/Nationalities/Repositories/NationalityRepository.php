<?php

namespace App\Architecture\Nationalities\Repositories;

use App\Architecture\Nationalities\Interfaces\INationalityRepository;
use App\Architecture\Nationalities\Models\Nationality;
use Illuminate\Database\Eloquent\Collection;

class NationalityRepository implements INationalityRepository
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return Nationality::all();
    }
}
