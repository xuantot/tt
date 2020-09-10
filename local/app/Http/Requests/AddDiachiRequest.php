<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDiachiRequest extends FormRequest
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
            'ad_here' => 'required',   
            'ad_phone' => 'required',
            'ad_email' => 'required|email',         
                ];
    }

    public function messages()
    {
    return [
            'ad_email.required'=>'Email không được để trống',
            'ad_email.email'=>'Email không đúng định dạng',
            'ad_here.required'=>'Địa Chỉ không được để trống',
            'ad_phone.required'=>'Phone không được để trống',  
            ];
    }
}
