<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPayRequest extends FormRequest
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
            'ghedat'=>'unique:thanhtoan,ghedadat',
            'madatcho'=>'unique:thanhtoan,madatcho'
        
        ];
    }
    public function messages(){
        return [
            'ghedat.unique'=>'Ghế đã tồn tại',
            'madatcho.unique'=>'Mã đặt chỗ đã tồn tại'
        ];
    }
}
