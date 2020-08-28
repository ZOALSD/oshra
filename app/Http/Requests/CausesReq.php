<?php

namespace App\Http\Requests;//CausesReq

use Illuminate\Foundation\Http\FormRequest;

class CausesReq extends FormRequest
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
            'causes_name_ar'=>'required|string',
             'causes_name_en'=>'required|string',
             'causes_dis_ar'=>'nullable|sometimes|string',
             'causes_dis_en'=>'nullable|sometimes|string',
             'causes_date'=>'nullable|sometimes',
             'causes_img'=>''.it()->image().'|nullable|sometimes',
             'causes_youtube_link'=>'url|nullable|sometimes',
             'causes_facebook_link'=>'url|nullable|sometimes',
             'causes_twitter_link'=>'url|nullable|sometimes',
             'causes_instgram_link'=>'url|nullable|sometimes',
             'causes_plase'=>'nullable|sometimes|string',
             'status'=>'string|required',

        ];

    }

    public function messages()
    {
        return [
            'causes_name_ar.required'=>trans('admin.causes_name_ar')." ".trans('admin.required'),
            'causes_name_ar.string'=>trans('admin.causes_name_ar')." ".trans('admin.string'),
             'causes_name_en.required'=>trans('admin.causes_name_en')." ".trans('admin.required'),
             'causes_name_en.string'=>trans('admin.causes_name_en')." ".trans('admin.string'),
             'causes_dis_ar.string'=>trans('admin.causes_dis_ar')." ".trans('admin.string'),
             'causes_dis_en.string'=>trans('admin.causes_dis_en')." ".trans('admin.string'),
             'causes_date'=>trans('admin.causes_date'),
             'causes_img'=>trans('admin.causes_img'),
             'causes_youtube_link'=>trans('admin.causes_youtube_link'),
             'causes_facebook_link'=>trans('admin.causes_facebook_link'),
             'causes_twitter_link'=>trans('admin.causes_twitter_link'),
             'causes_instgram_link'=>trans('admin.causes_instgram_link'),
             'causes_plase'=>trans('admin.causes_plase'),
             'status.required'=>trans('admin.status')." ".trans('admin.required'),

        ];
    }
}
