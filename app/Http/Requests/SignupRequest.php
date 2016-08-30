<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupRequest extends Request
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
            'email'     => 'required|email|unique:users',
            'user_name' => 'required|max:100',
            'pass'      => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Ban chua nhap email',
            'pass.required' => 'Ban chua nhap mat khau',
            'user_name.required' => 'Ban chua nhap ten hien thi',
            'email.unique' => 'Dia chi email da ton tai',
        ];
    }
}
