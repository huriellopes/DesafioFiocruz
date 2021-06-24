<?php

namespace App\Http\Resources\People;

use App\Traits\Utils;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
{
    use Utils;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        if ($this->nationality_id === 1) {
            $date = $this->dateFormat($this->birth, 'm/d/Y');
        } else {
            $date = $this->dateFormat($this->birth);
        }

        return [
            'id' => $this->id,
            'name' => $this->getFirstName($this->name),
            'cpf' => $this->cpf ? $this->maskCpfCnpj($this->cpf) : '-',
            'uf' => $this->states ? $this->states->uf : '-',
            'city' => $this->city ? $this->city : '-',
            'birth' => $date,
            'academic_level' => $this->academicLevels->name,
            'created_at' => $this->dateTimeFormat($this->created_at)
        ];
    }
}
