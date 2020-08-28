<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
             'about_ar'=>'required|string',
             'about_en'=>'required|string',
             'volunteer_ar' =>'required|string',
             'volunteer_en'=>'required|string',
             'tabara_ar'=>'required|string',
             'tabara_en'=>'required|string',
             'keyword'=>'required|string'
        ];
    }

    public function message()
    {
        return [
            'about_ar'=>trans('admin.about_ar'),
             'about_en'=>trans('admin.about_en'),
             'keyword'=>trans('admin.keyword'),
             'volunteer_ar' =>trans('admin.Volunteer_ar'),
             'volunteer_en'=>trans('admin.Volunteer_en'),
             'tabara_ar'=>trans('admin.tabara_ar'),
             'tabara_en'=>trans('admin.tabara_en')
        ];
    }

}
