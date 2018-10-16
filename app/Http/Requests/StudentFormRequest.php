<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rollNum' => 'required|unique:students',
            'fullnames'=> 'required',
            'email' => 'required|email|unique:students',
            'state'=> 'required',
            'lga'=> 'required',
            'class' => 'required',
            'dob' => 'required|date_format:Y-m-d',
        ];
    }
}
