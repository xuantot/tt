<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDktheodoiRequest extends FormRequest
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
            'dkth_email' => 'required|email',            
        ];
    }

    public function messages()
    {
    return [
    'dkth_email.required'=>'Xin Hãy Điền Thông Tin Của Bạn',
    'dkth_email.email'=>'Không Đúng Định Dạng Email',
    ];
    }
}
