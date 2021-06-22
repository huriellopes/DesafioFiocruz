<?php

namespace App\Architecture\AcademicLevels\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface IAcademicLevelsService
{
    /**
     * @return Collection
     */
    public function list() : Collection;
}
