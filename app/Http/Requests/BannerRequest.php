<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27-Apr-19
 * Time: 9:29 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'name' => 'required',
            'images'=>'required',
            'banner_type'=>'required',
            'point'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên quảng cáo không được bỏ trống',
            'images.required' => 'Hình ảnh không được bỏ trống',
            'banner_type.required' => 'Thể Loại không được bỏ trống',
            'point.required' => 'Vị Trí không được bỏ trống',
        ];
    }
}