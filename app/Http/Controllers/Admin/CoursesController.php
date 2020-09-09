<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\CoursesDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Courses;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class CoursesController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(CoursesDataTable $courses)
            {
               return $courses->render('admin.courses.index',['title'=>trans('admin.courses')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.courses.create',['title'=>trans('admin.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function store()
            {
              $rules = [
             'corse_name_ar'=>'required|string',
             'corse_name_en'=>'required|string',
             'corse_img'=>''.it()->image().'|nullable|sometimes',
             'about_corse_ar'=>'nullable|sometimes|string',
             'about_corse_en'=>'nullable|sometimes|string',
             'corse_level'=>'numeric|nullable|sometimes',
             'course_houre'=>'numeric|nullable|sometimes',
             'lacture_weaky'=>'numeric|nullable|sometimes',
             'coures_teacher'=>'numeric|nullable|sometimes',
             'course_price'=>'numeric|nullable|sometimes',
             'course_cirtifcation_img'=>''.it()->image().'|nullable|sometimes',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'corse_name_ar'=>trans('admin.corse_name_ar'),
             'corse_name_en'=>trans('admin.corse_name_en'),
             'corse_img'=>trans('admin.corse_img'),
             'about_corse_ar'=>trans('admin.about_corse_ar'),
             'about_corse_en'=>trans('admin.about_corse_en'),
             'corse_level'=>trans('admin.corse_level'),
             'course_houre'=>trans('admin.course_houre'),
             'lacture_weaky'=>trans('admin.lacture_weaky'),
             'coures_teacher'=>trans('admin.coures_teacher'),
             'course_price'=>trans('admin.course_price'),
             'course_cirtifcation_img'=>trans('admin.course_cirtifcation_img'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('corse_img')){
              $data['corse_img'] = it()->upload('corse_img','courses');
              }
               if(request()->hasFile('course_cirtifcation_img')){
              $data['course_cirtifcation_img'] = it()->upload('course_cirtifcation_img','courses');
              }
              Courses::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('courses'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $courses =  Courses::find($id);
                return view('admin.courses.show',['title'=>trans('admin.show'),'courses'=>$courses]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $courses =  Courses::find($id);
                return view('admin.courses.edit',['title'=>trans('admin.edit'),'courses'=>$courses]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id)
            {
                $rules = [
             'corse_name_ar'=>'required|string',
             'corse_name_en'=>'required|string',
             'corse_img'=>''.it()->image().'|nullable|sometimes',
             'about_corse_ar'=>'nullable|sometimes|string',
             'about_corse_en'=>'nullable|sometimes|string',
             'corse_level'=>'numeric|nullable|sometimes',
             'course_houre'=>'numeric|nullable|sometimes',
             'lacture_weaky'=>'numeric|nullable|sometimes',
             'coures_teacher'=>'numeric|nullable|sometimes',
             'course_price'=>'numeric|nullable|sometimes',
             'course_cirtifcation_img'=>''.it()->image().'|nullable|sometimes',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'corse_name_ar'=>trans('admin.corse_name_ar'),
             'corse_name_en'=>trans('admin.corse_name_en'),
             'corse_img'=>trans('admin.corse_img'),
             'about_corse_ar'=>trans('admin.about_corse_ar'),
             'about_corse_en'=>trans('admin.about_corse_en'),
             'corse_level'=>trans('admin.corse_level'),
             'course_houre'=>trans('admin.course_houre'),
             'lacture_weaky'=>trans('admin.lacture_weaky'),
             'coures_teacher'=>trans('admin.coures_teacher'),
             'course_price'=>trans('admin.course_price'),
             'course_cirtifcation_img'=>trans('admin.course_cirtifcation_img'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('corse_img')){
              it()->delete(Courses::find($id)->corse_img);
              $data['corse_img'] = it()->upload('corse_img','courses');
               }
               if(request()->hasFile('course_cirtifcation_img')){
              it()->delete(Courses::find($id)->course_cirtifcation_img);
              $data['course_cirtifcation_img'] = it()->upload('course_cirtifcation_img','courses');
               }
              Courses::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('courses'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $courses = Courses::find($id);

               it()->delete($courses->corse_img);
               it()->delete('courses',$id);
               it()->delete($courses->course_cirtifcation_img);
               it()->delete('courses',$id);

               @$courses->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$courses = Courses::find($id);

                    	it()->delete($courses->corse_img);
                    	it()->delete('courses',$id);
                    	it()->delete($courses->course_cirtifcation_img);
                    	it()->delete('courses',$id);
                    	@$courses->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $courses = Courses::find($data);
 
                    	it()->delete($courses->corse_img);
                    	it()->delete('courses',$data);
                    	it()->delete($courses->course_cirtifcation_img);
                    	it()->delete('courses',$data);

                    @$courses->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}