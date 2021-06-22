<?php

namespace App\Architecture\People\Validate;

use App\Architecture\Validate;

class PeopleValidate extends Validate
{
    protected $rules = [
        'nationality_id' => 'required|integer',
        'name' => 'required|string|max:200',
        'cpf' => 'string|max:14|validacpf|required_if:nationality_id,2',
        'birth' => 'required',
        'state_id' => 'integer|required_if:nationality_id,2',
        'city' => 'string|required_if:nationality_id,2',
        'academic_id' => 'required|integer'
    ];
}
