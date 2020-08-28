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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('causes/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.causes')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.causes')}}">
												<a data-toggle="modal" data-target="#myModal{{$causes->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$causes->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$causes->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['causes.destroy', $causes->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('causes')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.causes')}}">
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
										
{!! Form::open(['url'=>aurl('/causes/'.$causes->id),'method'=>'put','id'=>'causes','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('causes_name_ar',trans('admin.causes_name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_name_ar', $causes->causes_name_ar ,['class'=>'form-control','placeholder'=>trans('admin.causes_name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_name_en',trans('admin.causes_name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_name_en', $causes->causes_name_en ,['class'=>'form-control','placeholder'=>trans('admin.causes_name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_dis_ar',trans('admin.causes_dis_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('causes_dis_ar', $causes->causes_dis_ar ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.causes_dis_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_dis_en',trans('admin.causes_dis_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('causes_dis_en', $causes->causes_dis_en ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.causes_dis_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_date',trans('admin.causes_date'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_date', $causes->causes_date ,['class'=>'form-control date-picker','placeholder'=>trans('admin.causes_date')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_img',trans('admin.causes_img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('causes_img',['class'=>'form-control','placeholder'=>trans('admin.causes_img')]) !!}
        @if(!empty($causes->causes_img))
        <img src="{{it()->url($causes->causes_img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_youtube_link',trans('admin.causes_youtube_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_youtube_link', $causes->causes_youtube_link ,['class'=>'form-control','placeholder'=>trans('admin.causes_youtube_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_facebook_link',trans('admin.causes_facebook_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_facebook_link', $causes->causes_facebook_link ,['class'=>'form-control','placeholder'=>trans('admin.causes_facebook_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_twitter_link',trans('admin.causes_twitter_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_twitter_link', $causes->causes_twitter_link ,['class'=>'form-control','placeholder'=>trans('admin.causes_twitter_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_instgram_link',trans('admin.causes_instgram_link'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('causes_instgram_link', $causes->causes_instgram_link ,['class'=>'form-control','placeholder'=>trans('admin.causes_instgram_link')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('causes_plase',trans('admin.causes_plase'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('causes_plase', $causes->causes_plase ,['class'=>'form-control','placeholder'=>trans('admin.causes_plase')]) !!}
    </div>
</div>
<br>

<div class="form-group">
    {!! Form::label('status',trans('admin.status'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::select('status',['done'=>trans('admin.done'),'soon'=>trans('admin.soon')],$causes->status,['class'=>'form-control']) !!}
    </div>
</div>


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
		
