<?php

namespace App\Architecture\People\Validate;

use App\Architecture\Validate;

class PeopleValidate extends Validate
{
    protected $rules = [
        'nationality_id' => 'required|in:1,2',
        'name' => 'required|string|max:200',
        'cpf' => 'required_if:nationality_id,2',
        'birth' => 'required',
        'state_id' => 'required_if:nationality_id,2',
        'city' => 'required_if:nationality_id,2',
        'academic_id' => 'required|integer'
    ];
}
