<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLienheRequest extends FormRequest
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
            'ct_name' => 'required',
            'ct_phone' => 'required',
            'ct_email' => 'required|email',
            'ct_title' => 'required',
            'ct_content' => 'required',
        ];
    }
    public function messages()
    {
    return [
            'ct_name.required'=>'Tên không được để trống',
            'ct_phone.required'=>'Số Điện Thoại không được để trống',
            'ct_email.required'=>'Email không được để trống',
            'ct_email.email'=>'Email sai định dạng',
            'ct_title.required'=>'Nội Dung không được để trống',
            'ct_content.required'=>'Nội Dung không được để trống',
            ];
    }

    
}
