<?php

namespace App\Architecture\AcademicLevels\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface IAcademicLevelsRepository
{
    /**
     * @return Collection
     */
    public function list() : Collection;
}
