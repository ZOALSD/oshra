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
								<a  href="{{aurl('member')}}"
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
								
{!! Form::open(['url'=>aurl('/member'),'id'=>'member','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('member_name_ar',trans('admin.member_name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('member_name_ar',old('member_name_ar'),['class'=>'form-control','placeholder'=>trans('admin.member_name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_name_en',trans('admin.member_name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('member_name_en',old('member_name_en'),['class'=>'form-control','placeholder'=>trans('admin.member_name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_about_ar',trans('admin.member_about_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('member_about_ar',old('member_about_ar'),['class'=>'form-control','placeholder'=>trans('admin.member_about_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_about_en',trans('admin.member_about_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('member_about_en',old('member_about_en'),['class'=>'form-control','placeholder'=>trans('admin.member_about_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_face',trans('admin.member_face'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_face',old('member_face'),['class'=>'form-control','placeholder'=>trans('admin.member_face')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_twitter',trans('admin.member_twitter'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_twitter',old('member_twitter'),['class'=>'form-control','placeholder'=>trans('admin.member_twitter')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_instgram',trans('admin.member_instgram'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_instgram',old('member_instgram'),['class'=>'form-control','placeholder'=>trans('admin.member_instgram')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_image',trans('admin.member_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('member_image',['class'=>'form-control','placeholder'=>trans('admin.member_image')]) !!}
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
	
