<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\MemberDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Member;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class MemberController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(MemberDataTable $member)
            {
               return $member->render('admin.member.index',['title'=>trans('admin.member')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.member.create',['title'=>trans('admin.create')]);
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
             'member_name_ar'=>'required|string',
             'member_name_en'=>'nullable|sometimes|string',
             'member_about_ar'=>'nullable|sometimes|string',
             'member_about_en'=>'nullable|sometimes|string',
             'member_face'=>'url|nullable|sometimes',
             'member_twitter'=>'',
             'member_instgram'=>'nullable|sometimes|string',
             'member_image'=>''.it()->image().'|nullable|sometimes',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'member_name_ar'=>trans('admin.member_name_ar'),
             'member_name_en'=>trans('admin.member_name_en'),
             'member_about_ar'=>trans('admin.member_about_ar'),
             'member_about_en'=>trans('admin.member_about_en'),
             'member_face'=>trans('admin.member_face'),
             'member_twitter'=>trans('admin.member_twitter'),
             'member_instgram'=>trans('admin.member_instgram'),
             'member_image'=>trans('admin.member_image'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('member_image')){
              $data['member_image'] = it()->upload('member_image','member');
              }
              Member::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('member'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $member =  Member::find($id);
                return view('admin.member.show',['title'=>trans('admin.show'),'member'=>$member]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $member =  Member::find($id);
                return view('admin.member.edit',['title'=>trans('admin.edit'),'member'=>$member]);
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
             'member_name_ar'=>'required|string',
             'member_name_en'=>'nullable|sometimes|string',
             'member_about_ar'=>'nullable|sometimes|string',
             'member_about_en'=>'nullable|sometimes|string',
             'member_face'=>'url|nullable|sometimes',
             'member_twitter'=>'',
             'member_instgram'=>'nullable|sometimes|string',
             'member_image'=>''.it()->image().'|nullable|sometimes',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'member_name_ar'=>trans('admin.member_name_ar'),
             'member_name_en'=>trans('admin.member_name_en'),
             'member_about_ar'=>trans('admin.member_about_ar'),
             'member_about_en'=>trans('admin.member_about_en'),
             'member_face'=>trans('admin.member_face'),
             'member_twitter'=>trans('admin.member_twitter'),
             'member_instgram'=>trans('admin.member_instgram'),
             'member_image'=>trans('admin.member_image'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('member_image')){
              it()->delete(Member::find($id)->member_image);
              $data['member_image'] = it()->upload('member_image','member');
               }
              Member::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('member'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $member = Member::find($id);

               it()->delete($member->member_image);
               it()->delete('member',$id);

               @$member->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$member = Member::find($id);

                    	it()->delete($member->member_image);
                    	it()->delete('member',$id);
                    	@$member->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $member = Member::find($data);
 
                    	it()->delete($member->member_image);
                    	it()->delete('member',$data);

                    @$member->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}