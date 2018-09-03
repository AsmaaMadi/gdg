<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStoreRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:doctors',
            'clinicName' => 'required',
            'certificate_file' => 'nullable',
            'gender'=>'required',
            'city' =>'required',
            'degree'=>'nullable',
            'graduationYear'=>'nullable',
            'universityName'=>'nullable',
            'age'=>'required',
        ];
    }

    public function messages()
    {
        return [
        'email.required' => 'email unique'
            ];
    }

}
