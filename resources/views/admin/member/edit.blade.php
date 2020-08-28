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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('member/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.member')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.member')}}">
												<a data-toggle="modal" data-target="#myModal{{$member->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$member->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$member->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['member.destroy', $member->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('member')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.member')}}">
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
										
{!! Form::open(['url'=>aurl('/member/'.$member->id),'method'=>'put','id'=>'member','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('member_name_ar',trans('admin.member_name_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('member_name_ar', $member->member_name_ar ,['class'=>'form-control','placeholder'=>trans('admin.member_name_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_name_en',trans('admin.member_name_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('member_name_en', $member->member_name_en ,['class'=>'form-control','placeholder'=>trans('admin.member_name_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_about_ar',trans('admin.member_about_ar'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('member_about_ar', $member->member_about_ar ,['class'=>'form-control','placeholder'=>trans('admin.member_about_ar')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_about_en',trans('admin.member_about_en'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('member_about_en', $member->member_about_en ,['class'=>'form-control','placeholder'=>trans('admin.member_about_en')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_face',trans('admin.member_face'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_face', $member->member_face ,['class'=>'form-control','placeholder'=>trans('admin.member_face')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_twitter',trans('admin.member_twitter'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_twitter', $member->member_twitter ,['class'=>'form-control','placeholder'=>trans('admin.member_twitter')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_instgram',trans('admin.member_instgram'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::url('member_instgram', $member->member_instgram ,['class'=>'form-control','placeholder'=>trans('admin.member_instgram')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('member_image',trans('admin.member_image'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('member_image',['class'=>'form-control','placeholder'=>trans('admin.member_image')]) !!}
        @if(!empty($member->member_image))
        <img src="{{it()->url($member->member_image)}}" style="width:150px;height:150px;" />
        @endif
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
		
