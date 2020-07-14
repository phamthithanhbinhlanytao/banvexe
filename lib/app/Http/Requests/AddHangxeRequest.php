<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddHangxeRequest extends FormRequest
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
            'name'=>'unique:hangxe,tenhang'
        ];
    }
    public function messages(){
        return [
            'name.unique'=>'Tên Danh mục trùng'
        ];
    }
}
