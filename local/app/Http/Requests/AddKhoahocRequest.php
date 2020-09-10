<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class AddKhoahocRequest extends FormRequest
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
            'kh_name' => 'required',
            'kh_slug' => 'required|unique:khoahoc,kh_slug',
            'kh_des' => 'required',
            'kh_content' => 'required',
            'kh_time' => 'required',
            'kh_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ];
    }

    public function messages()
    {
    return [
            'kh_name.required'=>'Tên không được để trống',
            'kh_slug.required'=>'URL name không được để trống',
            'kh_des.required'=>'Mô tả ngắn không được để trống',
            'kh_content.required'=>'Mô tả không được để trống',
            'kh_time.required'=>'Thời gian học không được để trống',
            'kh_pic.required'=>'Ảnh không được để trống',
            'kh_pic.image'=>'Không phải là ảnh',
            'kh_pic.mimes'=>'Sai định dạng ảnh',
            'kh_pic.max'=>'Dung Lượng quá lớn',
            ];
    }
}
