<?php

namespace App\Architecture\People\Repositories;

use App\Architecture\People\Interfaces\IPeopleRepository;
use App\Architecture\People\Models\People;
use App\Exceptions\SystemException;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

class PeopleRepository implements IPeopleRepository
{
    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return People::with(['nationalities', 'states', 'academicLevels'])
            ->orderBy('created_at')
            ->get();
    }

    /**
     * @param string $cpf
     * @return People|null
     */
    public function getPeopleInCPF(string $cpf) :? People
    {
        return People::where('cpf', '=', $cpf)->first();
    }

    /**
     * @param stdClass $params
     * @return People
     * @throws SystemException
     */
    public function store(stdClass $params): People
    {
        if (!empty($params->cpf) && $this->getPeopleInCPF($params->cpf)) {
            throw new SystemException('O cpf informado, já é existente no sistema.',400);
        }

        $people = new People();
        $people->nationality_id = $params->nationality_id;
        $people->name = $params->name;
        $people->cpf = !empty($params->cpf) ? $params->cpf : NULL;
        $people->birth = $params->birth;
        $people->state_id = !empty($params->state_id) ? $params->state_id : NULL;
        $people->city = !empty($params->city) ? $params->city : NULL;
        $people->academic_id = $params->academic_id;
        $people->save();

        return $people;
    }
}
