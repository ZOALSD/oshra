<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
        $Y =date('Y-m-d', strtotime('-17 year, +0 days', strtotime(date('Y-m-d'))));
        return [
            'full_name'=>'required|string',
             'sex'=>'required|string',
             'age'=>'required|date|before:'.$Y,
             'place'=>'required|string',
             'phone'=>'required|numeric',
             'phone2'=>'numeric|nullable|sometimes',
             'Volunteer_qu'=>'required|numeric',
             'name_collaction'=>'nullable|sometimes|string',
             'join_us_qu'=>'required|string',
             'cv_file'=>''.it()->office('pdf').'|nullable|sometimes',
        ];
    }
    public function messages(){
        return[
            'full_name'=>trans('admin.full_name'),
            'sex'=>trans('admin.sex'),
            'age'=>trans('admin.age'),
            'place'=>trans('admin.place'),
            'phone'=>trans('admin.phone'),
            'phone2'=>trans('admin.phone2'),
            'Volunteer_qu'=>trans('admin.Volunteer_qu'),
            'name_collaction'=>trans('admin.name_collaction'),
            'join_us_qu'=>trans('admin.join_us_qu'),
            'cv_file'=>trans('admin.cv_file'),
        ];
    }
    /*
        $Y =date('Y-m-d', strtotime('-17 year, +0 days', strtotime(date('Y-m-d'))));

        $rules = [
             'full_name'=>'required|string',
             'sex'=>'required|string',
             'age'=>'required|date|before:'.$Y,
             'place'=>'required|string',
             'phone'=>'required|numeric',
             'phone2'=>'numeric|nullable|sometimes',
             'Volunteer_qu'=>'required|numeric',
             'name_collaction'=>'nullable|sometimes|string',
             'join_us_qu'=>'required|string',
             'cv_file'=>''.it()->office('pdf').'|nullable|sometimes',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
            'full_name'=>trans('admin.full_name'),
             'sex'=>trans('admin.sex'),
             'age'=>trans('admin.age'),
             'place'=>trans('admin.place'),
             'phone'=>trans('admin.phone'),
             'phone2'=>trans('admin.phone2'),
             'Volunteer_qu'=>trans('admin.Volunteer_qu'),
             'name_collaction'=>trans('admin.name_collaction'),
             'join_us_qu'=>trans('admin.join_us_qu'),
             'cv_file'=>trans('admin.cv_file'),
        ]);*/
}
