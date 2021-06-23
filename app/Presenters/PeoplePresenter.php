<?php

namespace App\Presenters;

use App\Traits\Utils;
use Carbon\Carbon;
use Laracasts\Presenter\Presenter;

class PeoplePresenter extends Presenter
{
    use Utils;

    /**
     * @return array
     */
    public function formatData() : array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->getFirstName($this->name),
            'fullName' => $this->name,
            'cpf' => $this->cpf ? $this->maskCpfCnpj($this->cpf) : '-',
            'uf' => $this->states ? $this->states->name : '-',
            'city' => $this->city ? $this->city : '-',
            'birth' => $this->dateFormat($this->birth),
            'age' => $this->Age($this->birth),
            'academic_level' => $this->academicLevels->name,
            'created_at' => $this->dateTimeFormat($this->created_at)
        ];

        return $data;
    }

    /**
     * @param string $date
     * @return int
     */
    private function Age(string $date) : int
    {
        $date = Carbon::createFromFormat('Y-m-d', $date);
        return $date->diffInYears();
    }

    /**
     * @return string
     */
    public function nationality() : string
    {
        return $this->nationalities->name;
    }
}
