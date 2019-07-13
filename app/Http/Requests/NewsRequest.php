<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29-Apr-19
 * Time: 9:27 AM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'news_name' => 'required',
            'content_news'=>'required',
            'cate_id'=>'required',
            'course_id'=>'required',
            'cate_group_id'=>'required',
            'tagID' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'news_name.required' => 'Tên bài viết không được bỏ trống',
            'content_news.required' => 'Nội dung không được bỏ trống',
            'cate_id.required' => 'Lĩnh vực không được bỏ trống',
            'course_id.required' => 'Khóa học không được bỏ trống',
            'cate_group_id.required' =>'Chuyên ngành không được bỏ trống',
            'tagID.required' =>'Tag không được bỏ trống'
        ];
    }
}