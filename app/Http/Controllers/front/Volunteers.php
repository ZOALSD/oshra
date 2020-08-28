<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Volunteers extends Controller
{
    public function index(){
        return view('front.bage.volunteer');
       
    }

    public function store()
    {
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
      $data = $this->validate(request(),$rules,[],[
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
      ]);

       if(request()->hasFile('cv_file')){
      $data['cv_file'] = it()->upload('cv_file','volunteer');
      }
      Volunteers::create($data); 

      session()->flash('success',trans('admin.added'));
      return redirect(route('volunteer'));
    }
}
