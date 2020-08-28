<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\CausesTypeDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Causestype;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class CausesTypeController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(CausesTypeDataTable $causestype)
            {
               return $causestype->render('admin.causestype.index',['title'=>trans('admin.causestype')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.causestype.create',['title'=>trans('admin.create')]);
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
             'causes_catgorase_ar'=>'required|string',
             'causes_catgorase_en'=>'required|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'causes_catgorase_ar'=>trans('admin.causes_catgorase_ar'),
             'causes_catgorase_en'=>trans('admin.causes_catgorase_en'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
              Causestype::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('causestype'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $causestype =  Causestype::find($id);
                return view('admin.causestype.show',['title'=>trans('admin.show'),'causestype'=>$causestype]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $causestype =  Causestype::find($id);
                return view('admin.causestype.edit',['title'=>trans('admin.edit'),'causestype'=>$causestype]);
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
             'causes_catgorase_ar'=>'required|string',
             'causes_catgorase_en'=>'required|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'causes_catgorase_ar'=>trans('admin.causes_catgorase_ar'),
             'causes_catgorase_en'=>trans('admin.causes_catgorase_en'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
              Causestype::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('causestype'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $causestype = Causestype::find($id);


               @$causestype->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$causestype = Causestype::find($id);

                    	@$causestype->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $causestype = Causestype::find($data);
 

                    @$causestype->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}