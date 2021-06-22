<?php

namespace App\Architecture\Nationalities\Services;

use App\Architecture\Nationalities\Interfaces\INationalityRepository;
use App\Architecture\Nationalities\Interfaces\INationalityService;
use Illuminate\Database\Eloquent\Collection;

class NationalityService implements INationalityService
{
    /**
     * @var INationalityRepository
     */
    protected $INationalityRepository;

    /**
     * NationalityService constructor.
     * @param INationalityRepository $INationalityRepository
     */
    public function __construct(INationalityRepository $INationalityRepository)
    {
        $this->INationalityRepository = $INationalityRepository;
    }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->INationalityRepository->list();
    }
}
