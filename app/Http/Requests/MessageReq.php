<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageReq extends FormRequest
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

            'name'=>'required|string',
            'email'=>'required|string',
            'message'=>'required|string',
            'see'=>'nullable|sometimes',
        ];
    }
    public function messages()
    {
        return [
            'name'=>trans('admin.name'),
            'email'=>trans('admin.email'),
            'message.required'=>trans('admin.message_body'),
            'see'=>trans('admin.see'),
        ];
    }
}
