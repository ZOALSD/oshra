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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('volunteerscontoller/create')}}"
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.volunteerscontoller')}}">
												<i class="fa fa-plus"></i>
										</a>
										<span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.volunteerscontoller')}}">
												<a data-toggle="modal" data-target="#myModal{{$volunteerscontoller->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
														<i class="fa fa-trash"></i>
												</a>
										</span>
										<div class="modal fade" id="myModal{{$volunteerscontoller->id}}">
												<div class="modal-dialog">
														<div class="modal-content">
																<div class="modal-header">
																		<button class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
																</div>
																<div class="modal-body">
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$volunteerscontoller->id}}) ؟
																</div>
																<div class="modal-footer">
																		{!! Form::open([
																		'method' => 'DELETE',
																		'route' => ['volunteerscontoller.destroy', $volunteerscontoller->id]
																		]) !!}
																		{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
																		<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
																		{!! Form::close() !!}
																</div>
														</div>
												</div>
										</div>
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('volunteerscontoller')}}"
												data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.volunteerscontoller')}}">
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
										
{!! Form::open(['url'=>aurl('/volunteerscontoller/'.$volunteerscontoller->id),'method'=>'put','id'=>'volunteerscontoller','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('full_name',trans('admin.full_name'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('full_name', $volunteerscontoller->full_name ,['class'=>'form-control','placeholder'=>trans('admin.full_name')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('sex',trans('admin.sex'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('sex',['male'=>trans('admin.male'),'female'=>trans('admin.female'),], $volunteerscontoller->sex ,['class'=>'form-control','placeholder'=>trans('admin.sex')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('age',trans('admin.age'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('age', $volunteerscontoller->age ,['class'=>'form-control date-picker','placeholder'=>trans('admin.age'),'readonly'=>'readonly','data-date'=>date("Y-m-d"),'data-date-format'=>'yyyy-mm-dd']) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('place',trans('admin.place'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('place', $volunteerscontoller->place ,['class'=>'form-control','placeholder'=>trans('admin.place')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('phone',trans('admin.phone'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('phone', $volunteerscontoller->phone ,['class'=>'form-control','placeholder'=>trans('admin.phone')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('phone2',trans('admin.phone2'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('phone2', $volunteerscontoller->phone2 ,['class'=>'form-control','placeholder'=>trans('admin.phone2')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('Volunteer_qu',trans('admin.Volunteer_qu'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('Volunteer_qu',['1'=>trans('admin.1'),'2'=>trans('admin.2'),], $volunteerscontoller->Volunteer_qu ,['class'=>'form-control','placeholder'=>trans('admin.Volunteer_qu')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_collaction',trans('admin.name_collaction'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_collaction', $volunteerscontoller->name_collaction ,['class'=>'form-control','placeholder'=>trans('admin.name_collaction')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('join_us_qu',trans('admin.join_us_qu'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('join_us_qu', $volunteerscontoller->join_us_qu ,['class'=>'form-control','placeholder'=>trans('admin.join_us_qu')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('cv_file',trans('admin.cv_file'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('cv_file',['class'=>'form-control','placeholder'=>trans('admin.cv_file')]) !!}
        @if(!empty($volunteerscontoller->cv_file))
        <img src="{{it()->url($volunteerscontoller->cv_file)}}" style="width:150px;height:150px;" />
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
		
