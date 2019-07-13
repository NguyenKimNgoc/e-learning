<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 3:20 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
            'blog_title' => 'required',
            'sub_title'=>'required',
            'content_blog'=>'required',
            'images_blog'=>'required',
            'cate_group_id'=>'required',
            'tagID'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'blog_title.required' => 'Tên tin tức không được bỏ trống',
            'sub_title.required' => 'Mô tả tin tức không được bỏ trống',
            'content_blog.required' => 'Nội dung không được bỏ trống',
            'images_blog.required' => 'Hình ảnh không được bỏ trống',
            'cate_group_id.required' =>'Lĩnh vực không được bỏ trống',
            'tagID.required' =>'Gắn không được bỏ trống'
        ];
    }
}