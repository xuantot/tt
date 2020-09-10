<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTintucRequest extends FormRequest
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
            'blog_title' => 'required',
            'blog_slug' => 'required|unique:tintuc,blog_slug',
            'blog_des' => 'required',
            'blog_content' => 'required',
            'blog_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ];
    }

    public function messages()
    {
    return [
            'blog_title.required'=>'Tên không được để trống',
            'blog_slug.required'=>'URL name không được để trống',
            'blog_des.required'=>'Mô tả ngắn không được để trống',
            'blog_content.required'=>'Mô tả không được để trống',
            'blog_pic.required'=>'Ảnh Không được để trống',
            'blog_pic.image'=>'Không phải là ảnh',
            'blog_pic.mimes'=>'Sai định dạng ảnh',
            'blog_pic.max'=>'Dung Lượng quá lớn',
            ];
    }
}
