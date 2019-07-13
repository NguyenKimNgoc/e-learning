<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Apr-19
 * Time: 8:04 PM
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
            'birthday' => 'required',
            'industries' => 'required',
            'user_group_id' => 'required',
            'major' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'full_name.required' => 'Họ và tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.max' => 'Số điện thoại không được quá 11 ký tự',
            'birthday.required' => 'Ngày sinh không được để trống',
            'industries.required' => 'Lĩnh vực không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'user_group_id.required' => 'Nhóm quyền không được để trống',
            'major.required' => 'Chuyên Ngành không được để trống'
        ];
    }
}