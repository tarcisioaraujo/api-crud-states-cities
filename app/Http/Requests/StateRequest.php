<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateRequest extends FormRequest
{    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {        
        return [
            'name' => 'required|string|unique:states',
        ];
    }
}
