<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\VolunteersContollerDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Volunteers;
use Validator;
use Set;
use Up;
use Storage;
use Form;
use Response;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class VolunteersContoller extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(VolunteersContollerDataTable $volunteerscontoller)
            {
               return $volunteerscontoller->render('admin.volunteerscontoller.index',['title'=>trans('admin.volunteerscontoller')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.volunteerscontoller.create',['title'=>trans('admin.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
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
              $data['cv_file'] = it()->upload('cv_file','volunteerscontoller');
              }
              Volunteers::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('volunteerscontoller'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $volunteerscontoller =  Volunteers::find($id);
                return view('admin.volunteerscontoller.show',['title'=>trans('admin.show'),'volunteerscontoller'=>$volunteerscontoller]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $volunteerscontoller =  Volunteers::find($id);
                return view('admin.volunteerscontoller.edit',['title'=>trans('admin.edit'),'volunteerscontoller'=>$volunteerscontoller]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id)
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
              it()->delete(Volunteers::find($id)->cv_file);
              $data['cv_file'] = it()->upload('cv_file','volunteerscontoller');
               }
              Volunteers::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('volunteerscontoller'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $volunteerscontoller = Volunteers::find($id);

               it()->delete($volunteerscontoller->cv_file);
               it()->delete('volunteers',$id);

               @$volunteerscontoller->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }
          public function ViewPdf(Request $Req){
              return Storage::download($Req->pdffile);
              return redirect()->back();
              
            }


 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$volunteerscontoller = Volunteers::find($id);

                    	it()->delete($volunteerscontoller->cv_file);
                    	it()->delete('volunteers',$id);
                    	@$volunteerscontoller->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $volunteerscontoller = Volunteers::find($data);
 
                    	it()->delete($volunteerscontoller->cv_file);
                    	it()->delete('volunteers',$data);

                    @$volunteerscontoller->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}