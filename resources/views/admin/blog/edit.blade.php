@extends('admin.index')
	@section('content')
	<div class="row">
		<div class="col-md-12">
				<div class="widget-extra body-req portlet light bordered">
						<div class="portlet-title">
								<div class="caption">
										<span class="caption-subject bold uppercase font-dark">{{$title}}</span>
								</div>
								<div class="actions">
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blog/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.blog')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.blog')}}">
												<a data-toggle="modal" data-target="#myModal{{$blog->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$blog->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$blog->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['blog.destroy', $blog->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('blog')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.blog')}}">
												<i class="fa fa-list"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
												data-original-title="{{trans('admin.fullscreen')}}"
												title="{{trans('admin.fullscreen')}}">
										</a>
								</div>
						</div>
						<div class="portlet-body form">
								<div class="col-md-12">
										
{!! Form::open(['url'=>aurl('/blog/'.$blog->id),'method'=>'put','id'=>'blog','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('blog_title_ar',trans('admin.blog_title_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_ar', $blog->blog_title_ar ,['class'=>'form-control','placeholder'=>trans('admin.blog_title_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_title_en',trans('admin.blog_title_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_en', $blog->blog_title_en ,['class'=>'form-control','placeholder'=>trans('admin.blog_title_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_ar',trans('admin.blog_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_ar', $blog->blog_ar ,['class'=>'form-control','placeholder'=>trans('admin.blog_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_en',trans('admin.blog_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_en', $blog->blog_en ,['class'=>'form-control','placeholder'=>trans('admin.blog_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_img',trans('admin.blog_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('blog_img',['class'=>'form-control','placeholder'=>trans('admin.blog_img')]) !!}
        @if(!empty($blog->blog_img))
        <img src="{{it()->url($blog->blog_img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_url_video',trans('admin.blog_url_video'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('blog_url_video', $blog->blog_url_video ,['class'=>'form-control','placeholder'=>trans('admin.blog_url_video')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_write_ar',trans('admin.blog_write_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_write_ar', $blog->blog_write_ar ,['class'=>'form-control','placeholder'=>trans('admin.blog_write_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_write_en',trans('admin.blog_write_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_write_en', $blog->blog_write_en ,['class'=>'form-control','placeholder'=>trans('admin.blog_write_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_key',trans('admin.blog_key'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_key', $blog->blog_key ,['class'=>'form-control','placeholder'=>trans('admin.blog_key')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
