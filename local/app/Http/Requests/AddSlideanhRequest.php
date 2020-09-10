<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSlideanhRequest extends FormRequest
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
            'pic_name' => 'required',
            'pic_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',           
        ];
    }

    public function messages()
    {
            return [
            'pic_name.required'=>'Tên không được để trống',
            'pic_img.required'=>'Ảnh không được để trống',
            'pic_img.image'=>'Không phải là ảnh',
            'pic_img.mimes'=>'Sai định dạng ảnh',
            'pic_img.max'=>'Dung Lượng quá lớn',
            ];
    }
}
