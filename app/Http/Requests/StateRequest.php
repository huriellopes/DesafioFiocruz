<?php

namespace App\Http\Requests;

use App\Architecture\States\Validate\StateValidate;
use Illuminate\Foundation\Http\FormRequest;

class StateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules() : array
    {
        return (new StateValidate())->getRules();
    }
}
