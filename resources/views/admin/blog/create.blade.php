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
								<a  href="{{aurl('blog')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('admin.show_all')}}"
										title="{{trans('admin.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('admin.fullscreen')}}"
										title="{{trans('admin.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/blog'),'id'=>'blog','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('blog_title_ar',trans('admin.blog_title_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_ar',old('blog_title_ar'),['class'=>'form-control','placeholder'=>trans('admin.blog_title_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_title_en',trans('admin.blog_title_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_title_en',old('blog_title_en'),['class'=>'form-control','placeholder'=>trans('admin.blog_title_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_ar',trans('admin.blog_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_ar',old('blog_ar'),['class'=>'form-control','placeholder'=>trans('admin.blog_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_en',trans('admin.blog_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_en',old('blog_en'),['class'=>'form-control','placeholder'=>trans('admin.blog_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_img',trans('admin.blog_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('blog_img',['class'=>'form-control','placeholder'=>trans('admin.blog_img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_url_video',trans('admin.blog_url_video'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('blog_url_video',old('blog_url_video'),['class'=>'form-control','placeholder'=>trans('admin.blog_url_video')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_write_ar',trans('admin.blog_write_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_write_ar',old('blog_write_ar'),['class'=>'form-control','placeholder'=>trans('admin.blog_write_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_write_en',trans('admin.blog_write_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('blog_write_en',old('blog_write_en'),['class'=>'form-control','placeholder'=>trans('admin.blog_write_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('blog_key',trans('admin.blog_key'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('blog_key',old('blog_key'),['class'=>'form-control','placeholder'=>trans('admin.blog_key')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.add'),['class'=>'btn btn-success']) !!}
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
	
