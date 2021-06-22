<?php

namespace App\Architecture\Nationalities\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface INationalityService
{
    /**
     * @return Collection
     */
    public function list() : Collection;
}
