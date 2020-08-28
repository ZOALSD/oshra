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
								<a  href="{{aurl('causes')}}"
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
								
{!! Form::open(['url'=>aurl('/causes'),'id'=>'causes','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('causes_name_ar',trans('admin.causes_name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_name_ar',old('causes_name_ar'),['class'=>'form-control','placeholder'=>trans('admin.causes_name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_name_en',trans('admin.causes_name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_name_en',old('causes_name_en'),['class'=>'form-control','placeholder'=>trans('admin.causes_name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_dis_ar',trans('admin.causes_dis_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('causes_dis_ar',old('causes_dis_ar'),['class'=>'form-control ckeditor','placeholder'=>trans('admin.causes_dis_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_dis_en',trans('admin.causes_dis_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('causes_dis_en',old('causes_dis_en'),['class'=>'form-control ckeditor','placeholder'=>trans('admin.causes_dis_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_date',trans('admin.causes_date'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_date',old('causes_date'),['class'=>'form-control date-picker','placeholder'=>trans('admin.causes_date')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_img',trans('admin.causes_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('causes_img',['class'=>'form-control','placeholder'=>trans('admin.causes_img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_youtube_link',trans('admin.causes_youtube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_youtube_link',old('causes_youtube_link'),['class'=>'form-control','placeholder'=>trans('admin.causes_youtube_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_facebook_link',trans('admin.causes_facebook_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_facebook_link',old('causes_facebook_link'),['class'=>'form-control','placeholder'=>trans('admin.causes_facebook_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_twitter_link',trans('admin.causes_twitter_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_twitter_link',old('causes_twitter_link'),['class'=>'form-control','placeholder'=>trans('admin.causes_twitter_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_instgram_link',trans('admin.causes_instgram_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_instgram_link',old('causes_instgram_link'),['class'=>'form-control','placeholder'=>trans('admin.causes_instgram_link')]) !!}
    </div>
</div>
<br>

<div class="form-group">
    {!! Form::label('causes_plase',trans('admin.causes_plase'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_plase',old('causes_plase'),['class'=>'form-control','placeholder'=>trans('admin.causes_plase')]) !!}
    </div>
</div>

<br>
<div class="form-group">
    {!! Form::label('status',trans('admin.status'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::select('status',['done'=>trans('admin.done'),'soon'=>trans('admin.soon'),],old('status'),['class'=>'form-control','id' => '','placeholder'=>trans('admin.status')]) !!}
    </div>
</div>
<br>

<div class="form-group">
    {!! Form::label('key_word',trans('admin.key_word'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('key_word',old('key_word'),['class'=>'form-control','placeholder'=>trans('admin.key_word')]) !!}
    </div>
</div>

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
	
