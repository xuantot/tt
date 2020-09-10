<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCamnhanhvRequest extends FormRequest
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
            'hv_name' => 'required',   
            'hv_job' => 'required',
            'hv_feel' => 'required',
            'hv_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  
        ];
    }
    public function messages()
    {
    return [
    'hv_name.required'=>'Tên không được để trống',
    'hv_job.required'=>'Công việc không được để trống',
    'hv_feel.required'=>'Cảm Nhận không được để trống',
    'hv_pic.required'=>'Ảnh Không Được Để Trống',
    'hv_pic.image'=>'Không phải là ảnh',
    'hv_pic.mimes'=>'Sai định dạng ảnh',
    'hv_pic.max'=>'Dung Lượng quá lớn',
    ];
    }
}
