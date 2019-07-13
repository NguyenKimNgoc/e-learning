<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26-May-19
 * Time: 11:14 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ContactsRequests extends FormRequest
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
            'email'=>'required',
            'phone'=>'required',
            'city_id' => 'required',
            'district_id'=>'required',
            'content_contacts'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Họ và tên không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'city_id.required' => 'Tỉnh/Thành không được bỏ trống',
            'district_id.required' => 'Quận/Huyện không được bỏ trống',
            'content_contacts.required' => 'Nội dung liên hệ không được bỏ trống',
        ];
    }
}