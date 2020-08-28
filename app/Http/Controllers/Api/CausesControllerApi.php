<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Causes;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class CausesControllerApi extends Controller
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
               "data"=>Causes::orderBy('id','desc')->paginate(15)
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
                         'causes_name_ar'=>'nullable|sometimes|string',
             'causes_name_en'=>'nullable|sometimes|string',
             'causes_dis_ar'=>'nullable|sometimes|string',
             'causes_dis_en'=>'nullable|sometimes|string',
             'causes_date'=>'nullable|sometimes|date',
             'causes_img'=>''.it()->image().'|nullable|sometimes',
             'causes_youtube_link'=>'url|nullable|sometimes',
             'causes_facebook_link'=>'url|nullable|sometimes',
             'causes_twitter_link'=>'url|nullable|sometimes',
             'causes_instgram_link'=>'url|nullable|sometimes',
             'causes_plase'=>'nullable|sometimes|string',
             'causes_catgo_id'=>'numeric|nullable|sometimes',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
                         'causes_name_ar'=>trans('admin.causes_name_ar'),
             'causes_name_en'=>trans('admin.causes_name_en'),
             'causes_dis_ar'=>trans('admin.causes_dis_ar'),
             'causes_dis_en'=>trans('admin.causes_dis_en'),
             'causes_date'=>trans('admin.causes_date'),
             'causes_img'=>trans('admin.causes_img'),
             'causes_youtube_link'=>trans('admin.causes_youtube_link'),
             'causes_facebook_link'=>trans('admin.causes_facebook_link'),
             'causes_twitter_link'=>trans('admin.causes_twitter_link'),
             'causes_instgram_link'=>trans('admin.causes_instgram_link'),
             'causes_plase'=>trans('admin.causes_plase'),
             'causes_catgo_id'=>trans('admin.causes_catgo_id'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('causes_img')){
              $data['causes_img'] = it()->upload('causes_img','causes');
              }
        $create = Causes::create($data); 

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
                $show =  Causes::find($id);
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
             'causes_name_ar'=>'nullable|sometimes|string',
             'causes_name_en'=>'nullable|sometimes|string',
             'causes_dis_ar'=>'nullable|sometimes|string',
             'causes_dis_en'=>'nullable|sometimes|string',
             'causes_date'=>'nullable|sometimes|date',
             'causes_img'=>''.it()->image().'|nullable|sometimes',
             'causes_youtube_link'=>'url|nullable|sometimes',
             'causes_facebook_link'=>'url|nullable|sometimes',
             'causes_twitter_link'=>'url|nullable|sometimes',
             'causes_instgram_link'=>'url|nullable|sometimes',
             'causes_plase'=>'nullable|sometimes|string',
             'causes_catgo_id'=>'numeric|nullable|sometimes',

                         ];
             $data = Validator::make(request()->all(),$rules,[],[
             'causes_name_ar'=>trans('admin.causes_name_ar'),
             'causes_name_en'=>trans('admin.causes_name_en'),
             'causes_dis_ar'=>trans('admin.causes_dis_ar'),
             'causes_dis_en'=>trans('admin.causes_dis_en'),
             'causes_date'=>trans('admin.causes_date'),
             'causes_img'=>trans('admin.causes_img'),
             'causes_youtube_link'=>trans('admin.causes_youtube_link'),
             'causes_facebook_link'=>trans('admin.causes_facebook_link'),
             'causes_twitter_link'=>trans('admin.causes_twitter_link'),
             'causes_instgram_link'=>trans('admin.causes_instgram_link'),
             'causes_plase'=>trans('admin.causes_plase'),
             'causes_catgo_id'=>trans('admin.causes_catgo_id'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('causes_img')){
              it()->delete(Causes::find($id)->causes_img);
              $data['causes_img'] = it()->upload('causes_img','causes');
               }
              Causes::where('id',$id)->update($data);

              $Causes = Causes::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Causes
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
               $causes = Causes::find($id);

               it()->delete($causes->causes_img);
               it()->delete('causes',$id);

               @$causes->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$causes = Causes::find($id);

                    	it()->delete($causes->causes_img);
                    	it()->delete('causes',$id);
                    	@$causes->delete();
                    }
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $causes = Causes::find($data);
 
                    	it()->delete($causes->causes_img);
                    	it()->delete('causes',$data);

                    @$causes->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}