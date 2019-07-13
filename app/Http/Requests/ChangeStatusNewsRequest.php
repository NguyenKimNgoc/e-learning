<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19-May-19
 * Time: 10:52 AM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ChangeStatusNewsRequest extends FormRequest
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
            //
        ];
    }
}