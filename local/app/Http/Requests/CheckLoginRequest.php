<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckLoginRequest extends FormRequest
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
            'name' => 'required|min:6|max:20',          
            'password' => 'required|min:6|max:20',
        
        ];
    }

    public function messages()
    {
    return [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Quá 20 Ký tự',
            'name.min'=>'Hơn 6 Ký tự',
            'password.required'=>'Password không được để trống',
            'password.max'=>'Quá 20 Ký tự',
            'password.min'=>'Hơn 6 Ký tự',   
            ];
    }
}
