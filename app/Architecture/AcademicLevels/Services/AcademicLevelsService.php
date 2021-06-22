<?php

namespace App\Architecture\AcademicLevels\Services;

use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsRepository;
use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsService;
use Illuminate\Database\Eloquent\Collection;

class AcademicLevelsService implements IAcademicLevelsService
{
    /**
     * @var IAcademicLevelsRepository
     */
    protected $IAcademicLevelsRepository;

    /**
     * AcademicLevelsService constructor.
     * @param IAcademicLevelsRepository $IAcademicLevelsRepository
     */
    public function __construct(IAcademicLevelsRepository $IAcademicLevelsRepository)
    {
        $this->IAcademicLevelsRepository = $IAcademicLevelsRepository;
    }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->IAcademicLevelsRepository->list();
    }
}
