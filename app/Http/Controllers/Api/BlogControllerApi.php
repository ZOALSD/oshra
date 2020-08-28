<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Blog;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class BlogControllerApi extends Controller
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
               "data"=>Blog::orderBy('id','desc')->paginate(15)
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
                         'blog_title_ar'=>'required|string',
             'blog_title_en'=>'nullable|sometimes|string',
             'blog_ar'=>'nullable|sometimes|string',
             'blog_en'=>'nullable|sometimes|string',
             'blog_img'=>''.it()->image().'',
             'blog_url_video'=>'url|nullable|sometimes',
             'blog_write_ar'=>'nullable|sometimes|string',
             'blog_write_en'=>'nullable|sometimes|string',
             'blog_key'=>'',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
                         'blog_title_ar'=>trans('admin.blog_title_ar'),
             'blog_title_en'=>trans('admin.blog_title_en'),
             'blog_ar'=>trans('admin.blog_ar'),
             'blog_en'=>trans('admin.blog_en'),
             'blog_img'=>trans('admin.blog_img'),
             'blog_url_video'=>trans('admin.blog_url_video'),
             'blog_write_ar'=>trans('admin.blog_write_ar'),
             'blog_write_en'=>trans('admin.blog_write_en'),
             'blog_key'=>trans('admin.blog_key'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('blog_img')){
              $data['blog_img'] = it()->upload('blog_img','blog');
              }
        $create = Blog::create($data); 

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
                $show =  Blog::find($id);
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
             'blog_title_ar'=>'required|string',
             'blog_title_en'=>'nullable|sometimes|string',
             'blog_ar'=>'nullable|sometimes|string',
             'blog_en'=>'nullable|sometimes|string',
             'blog_img'=>''.it()->image().'',
             'blog_url_video'=>'url|nullable|sometimes',
             'blog_write_ar'=>'nullable|sometimes|string',
             'blog_write_en'=>'nullable|sometimes|string',
             'blog_key'=>'',

                         ];
             $data = Validator::make(request()->all(),$rules,[],[
             'blog_title_ar'=>trans('admin.blog_title_ar'),
             'blog_title_en'=>trans('admin.blog_title_en'),
             'blog_ar'=>trans('admin.blog_ar'),
             'blog_en'=>trans('admin.blog_en'),
             'blog_img'=>trans('admin.blog_img'),
             'blog_url_video'=>trans('admin.blog_url_video'),
             'blog_write_ar'=>trans('admin.blog_write_ar'),
             'blog_write_en'=>trans('admin.blog_write_en'),
             'blog_key'=>trans('admin.blog_key'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('blog_img')){
              it()->delete(Blog::find($id)->blog_img);
              $data['blog_img'] = it()->upload('blog_img','blog');
               }
              Blog::where('id',$id)->update($data);

              $Blog = Blog::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Blog
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
               $blog = Blog::find($id);

               it()->delete($blog->blog_img);
               it()->delete('blog',$id);

               @$blog->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$blog = Blog::find($id);

                    	it()->delete($blog->blog_img);
                    	it()->delete('blog',$id);
                    	@$blog->delete();
                    }
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $blog = Blog::find($data);
 
                    	it()->delete($blog->blog_img);
                    	it()->delete('blog',$data);

                    @$blog->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}