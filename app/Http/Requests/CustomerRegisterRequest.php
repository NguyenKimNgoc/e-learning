<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10-May-19
 * Time: 10:36 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
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
            'full_name' =>'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'city_id' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email Không được để trống',
            'address.required' => 'Địa chỉ Không được để trống',
            'phone.required' => 'Số điện thoại Không được để trống',
            'password.required' => 'Mật khẩu Không được để trống',
            'full_name.required' => 'Mật khẩu Không được để trống',
            'city_id.required' => 'Thành Phố Không được để trống',
        ];
    }
}