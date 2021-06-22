<?php

namespace App\Architecture\States\Validate;

use App\Architecture\Validate;

class StateValidate extends Validate
{
    protected $rules = [
        'uf' => 'required|string'
    ];

    protected $messages = [];
}
