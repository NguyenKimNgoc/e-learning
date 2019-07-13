<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04-May-19
 * Time: 10:32 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CategoryGroupRequest extends FormRequest
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

    ];
}

    public function messages()
{
    return [
        'name.required' => 'Tên Nhóm danh mục không được bỏ trống',

    ];
}
}