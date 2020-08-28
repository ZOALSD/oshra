<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\AboutDataTable;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use Carbon\Carbon;
use App\Model\About;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class AboutController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(AboutDataTable $about)
            {
               return $about->render('admin.about.index',['title'=>trans('admin.about')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.about.create',['title'=>trans('admin.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function store(AboutRequest $req)
            {
              
              /*$data = $this->validate(request(),$rules,[],[
             'about_ar'=>trans('admin.about_ar'),
             'about_en'=>trans('admin.about_en'),
             'keyword'=>trans('admin.keyword'),
             'volunteer_ar' =>trans('admin.volunteer_ar'),
             'volunteer_en'=>trans('admin.volunteer_en'),
             'tabara_ar'=>trans('admin.tabara_ar'),
             'tabara_en'=>trans('admin.tabara_en'),

              ]);*/
           
              $data =req()->all();
              $data['admin_id'] = admin()->user()->id; 
              About::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('about'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $about =  About::find($id);
                return view('admin.about.show',['title'=>trans('admin.show'),'about'=>$about]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $about =  About::find($id);
                return view('admin.about.edit',['title'=>trans('admin.edit'),'about'=>$about]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id,AboutRequest $req)
            {
              $data =$req->all();
              $data =$req->except(["_token","_method"]);
              $data['admin_id'] = admin()->user()->id; 
              About::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
               return \back();
              // return redirect(aurl('about'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $about = About::find($id);


               @$about->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$about = About::find($id);

                    	@$about->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $about = About::find($data);
 

                    @$about->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}