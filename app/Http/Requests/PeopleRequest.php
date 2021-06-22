<?php

namespace App\Http\Requests;

use App\Architecture\People\Validate\PeopleValidate;
use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules() : array
    {
        return (new PeopleValidate())->getRules();
    }
}
