<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDoitacRequest extends FormRequest
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
            'vd_name' => 'required',            
            'vd_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',           
        ];
    }

    public function messages()
    {
    return [
        'vd_name.required'=>'Xin Hãy Điền Thông Tin Của Bạn',
        'vd_pic.required'=>'Ảnh Không được để trống',
        'vd_pic.image'=>'Không phải là ảnh',
        'vd_pic.mimes'=>'Sai định dạng ảnh',
        'vd_pic.max'=>'Dung Lượng quá lớn',
        ];
    }
}
