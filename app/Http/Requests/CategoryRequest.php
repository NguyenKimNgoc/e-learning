<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04-May-19
 * Time: 10:52 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'cate_name' => 'required',
            'cate_group_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'cate_name.required' => 'Tên danh mục không được bỏ trống',
            'cate_group_id.required' => 'Nhóm danh mục không được bỏ trống',
        ];
    }

}