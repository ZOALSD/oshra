<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\BlogDataTable;
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
class BlogController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(BlogDataTable $blog)
            {
               return $blog->render('admin.blog.index',['title'=>trans('admin.blog')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.blog.create',['title'=>trans('admin.create')]);
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
              $data = $this->validate(request(),$rules,[],[
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
		
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('blog_img')){
              $data['blog_img'] = it()->upload('blog_img','blog');
              }
              Blog::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('blog'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $blog =  Blog::find($id);
                return view('admin.blog.show',['title'=>trans('admin.show'),'blog'=>$blog]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $blog =  Blog::find($id);
                return view('admin.blog.edit',['title'=>trans('admin.edit'),'blog'=>$blog]);
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
             $data = $this->validate(request(),$rules,[],[
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
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('blog_img')){
              it()->delete(Blog::find($id)->blog_img);
              $data['blog_img'] = it()->upload('blog_img','blog');
               }
              Blog::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('blog'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
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
               session()->flash('success',trans('admin.deleted'));
               return back();
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
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $blog = Blog::find($data);
 
                    	it()->delete($blog->blog_img);
                    	it()->delete('blog',$data);

                    @$blog->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}