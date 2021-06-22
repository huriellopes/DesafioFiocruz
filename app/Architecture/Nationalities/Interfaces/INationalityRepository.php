<?php

namespace App\Architecture\Nationalities\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface INationalityRepository
{
    /**
     * @return Collection
     */
    public function list() : Collection;
}
