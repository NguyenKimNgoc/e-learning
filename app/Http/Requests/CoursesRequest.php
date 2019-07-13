<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28-Apr-19
 * Time: 1:47 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
            'c_title' => 'required',
            'c_type_course'=>'required',
            'cate_id'=>'required',
            'c_price'=>'required',
            'c_description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'c_title.required' => 'Tên Khóa Học không được bỏ trống',
            'c_price.required' => 'Giá Khóa Học không được bỏ trống',
            'c_type_course.required' => 'Lĩnh Vực không được bỏ trống',
            'cate_id.required' => 'Danh Mục không được bỏ trống',
            'c_description.required' =>'Mô Tả không được bỏ trống'
        ];
    }
}