<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

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
class MemberControllerApi extends Controller
{

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Display a listing of the resource. Api
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
               return response()->json([
               "status"=>true,
               "data"=>Member::orderBy('id','desc')->paginate(15)
               ]);
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Store a newly created resource in storage. Api
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
        $data = Validator::make(request()->all(),$rules,[],[
                         'member_name_ar'=>trans('admin.member_name_ar'),
             'member_name_en'=>trans('admin.member_name_en'),
             'member_about_ar'=>trans('admin.member_about_ar'),
             'member_about_en'=>trans('admin.member_about_en'),
             'member_face'=>trans('admin.member_face'),
             'member_twitter'=>trans('admin.member_twitter'),
             'member_instgram'=>trans('admin.member_instgram'),
             'member_image'=>trans('admin.member_image'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('member_image')){
              $data['member_image'] = it()->upload('member_image','member');
              }
        $create = Member::create($data); 

        return response()->json([
            "status"=>true,
            "message"=>trans('admin.added'),
            "data"=>$create
        ]);
    }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $show =  Member::find($id);
                 return response()->json([
              "status"=>true,
              "data"=> $show
              ]);  ;
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
             $data = Validator::make(request()->all(),$rules,[],[
             'member_name_ar'=>trans('admin.member_name_ar'),
             'member_name_en'=>trans('admin.member_name_en'),
             'member_about_ar'=>trans('admin.member_about_ar'),
             'member_about_en'=>trans('admin.member_about_en'),
             'member_face'=>trans('admin.member_face'),
             'member_twitter'=>trans('admin.member_twitter'),
             'member_instgram'=>trans('admin.member_instgram'),
             'member_image'=>trans('admin.member_image'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('member_image')){
              it()->delete(Member::find($id)->member_image);
              $data['member_image'] = it()->upload('member_image','member');
               }
              Member::where('id',$id)->update($data);

              $Member = Member::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Member
               ]);
            }

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
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
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $member = Member::find($data);
 
                    	it()->delete($member->member_image);
                    	it()->delete('member',$data);

                    @$member->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}