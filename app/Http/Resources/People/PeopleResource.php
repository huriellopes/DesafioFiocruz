<?php

namespace App\Http\Resources\People;

use App\Traits\Utils;
use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
{
    use Utils;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => strtoupper($this->name),
            'cpf' => $this->cpf ? $this->pontuacao_cpf_cnpj($this->cpf) : '-',
            'uf' => $this->states ? $this->states->uf : '-',
            'city' => $this->city ? $this->city : '-',
            'birth' => $this->formata_data($this->birth),
            'academic_level' => $this->academicLevels->name,
            'created_at' => $this->formata_data_hora($this->created_at)
        ];
    }
}
