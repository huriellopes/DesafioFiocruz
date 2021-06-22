<?php

namespace App\Architecture\AcademicLevels\Repositories;

use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsRepository;
use App\Architecture\AcademicLevels\Models\AcademicLevel;
use Illuminate\Database\Eloquent\Collection;

class AcademicLevelsRepository implements IAcademicLevelsRepository
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return AcademicLevel::all();
    }
}
