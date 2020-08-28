<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerRequest;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Volunteers;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class VolunteersContollerApi extends Controller
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
               "data"=>Volunteers::orderBy('id','desc')->paginate(15)
               ]);
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Store a newly created resource in storage. Api
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
    public function store(VolunteerRequest $request)
    {
       /* $data = Validator::make(request()->all());*/
       $date =request()->all();
         /*  $data = Validator::make(request()->all(),$rules,[],[
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
        ]);*/
        $data = request()->except(["_token"]);
        if(request()->hasFile('cv_file')){
       $data['cv_file'] = it()->upload('cv_file','volunteerscontoller');
       }

        $create = Volunteers::create($data); 

        if(!$create){
            return response()->json([
               "status"=>false,"
               messages"=>"fials send"
            ]);
             }
       

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
                $show =  Volunteers::find($id);
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
               /* $rules = [
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
             $data = Validator::make(request()->all(),$rules,[],[
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
                   ]);*/
             if($data->fails()){
                //return response()->json();//
                return response()->json(["status"=>false,"messages"=>"NotSeved"])->toArray();
             }
             $data = request()->except(["_token"]);
               if(request()->hasFile('cv_file')){
              it()->delete(Volunteers::find($id)->cv_file);
              $data['cv_file'] = it()->upload('cv_file','volunteerscontoller');
               }
              Volunteers::where('id',$id)->update($data);

              $Volunteers = Volunteers::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Volunteers
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
               $volunteerscontoller = Volunteers::find($id);

               it()->delete($volunteerscontoller->cv_file);
               it()->delete('volunteers',$id);

               @$volunteerscontoller->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
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
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $volunteerscontoller = Volunteers::find($data);
 
                    	it()->delete($volunteerscontoller->cv_file);
                    	it()->delete('volunteers',$data);

                    @$volunteerscontoller->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}