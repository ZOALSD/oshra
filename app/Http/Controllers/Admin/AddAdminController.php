<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AddAdminDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\AddAdmin;
use Validator;
use Set;
use Up;
use Form;
use Hash;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class AddAdminController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(AddAdminDataTable $addadmin)
            {
               return $addadmin->render('admin.addadmin.index',['title'=>trans('admin.addadmin')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.addadmin.create',['title'=>trans('admin.create')]);
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
             'name'=>'required|string',
             'email'=>'required|string|email|unique:admins',
             'password_check'=>'required|string|min:6',

                   ];
              $data = $this->validate(request(),$rules,
              [ ],[
             'name'=>trans('admin.name'),
             'email'=>trans('admin.email'),
             'password_check'=>trans('admin.password'),

              ]);
		
              $data['password'] = Hash::make($data['password_check']); 
              AddAdmin::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('addadmin'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $addadmin =  AddAdmin::find($id);
                return view('admin.addadmin.show',['title'=>trans('admin.show'),'addadmin'=>$addadmin]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $addadmin =  AddAdmin::find($id);
                return view('admin.addadmin.edit',['title'=>trans('admin.edit'),'addadmin'=>$addadmin]);
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
             'name'=>'required|string',
             'email'=>'required|string',
             'password'=>'required|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
             'email'=>trans('admin.email'),
             'password'=>trans('admin.password'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
              AddAdmin::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('addadmin'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $addadmin = AddAdmin::find($id);


               @$addadmin->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$addadmin = AddAdmin::find($id);

                    	@$addadmin->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $addadmin = AddAdmin::find($data);
 

                    @$addadmin->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}