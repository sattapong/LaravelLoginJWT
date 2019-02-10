<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed',
           // 'password_confirmation' => 'required|min:3'
            
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'มีผู้ใช้ email นี้แล้ว',
 
        ];
    }

}
