<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddGiangvienRequest extends FormRequest
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
            'gv_name' => 'required',   
            'gv_major' => 'required',    
            'gv_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',        
        ];
    }

    public function messages()
    {
            return [
            'gv_name.required'=>'Tên không được để trống',
            'gv_pic.required'=>'Ảnh không được để trống',
            'gv_major.required'=>'Công việc không được để trống',
            'gv_pic.image'=>'Không phải là ảnh',
            'gv_pic.mimes'=>'Sai định dạng ảnh',
            'gv_pic.max'=>'Dung Lượng quá lớn',
            ];
    }

}
