<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CitieRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {        
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('cities', 'name')
                   ->where('state_id', $this->get('state_id')),
            ],
            'state_id' => [
                'required',
                'integer',
                'exists:states,id',
            ],
        ];
    }
}
