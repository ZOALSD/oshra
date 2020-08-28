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
								<a  href="{{aurl('volunteerscontoller')}}"
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
								
{!! Form::open(['url'=>aurl('/volunteerscontoller'),'id'=>'volunteerscontoller','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('full_name',trans('admin.full_name'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('full_name',old('full_name'),['class'=>'form-control','placeholder'=>trans('admin.full_name')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('sex',trans('admin.sex'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('sex',['male'=>trans('admin.male'),'female'=>trans('admin.female'),],old('sex'),['class'=>'form-control','placeholder'=>trans('admin.sex')]) !!}
		</div>
</div>
<br>
<div class="form-group">
    {!! Form::label('age',trans('admin.age'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('age',old('age'),['class'=>'form-control date-picker','placeholder'=>trans('admin.age'),'readonly'=>'readonly','data-date'=>date("Y-m-d"),'data-date-format'=>'yyyy-mm-dd']) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('place',trans('admin.place'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('place',old('place'),['class'=>'form-control','placeholder'=>trans('admin.place')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('phone',trans('admin.phone'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>trans('admin.phone')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('phone2',trans('admin.phone2'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('phone2',old('phone2'),['class'=>'form-control','placeholder'=>trans('admin.phone2')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('Volunteer_qu',trans('admin.Volunteer_qu'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('Volunteer_qu',['1'=>trans('admin.1'),'2'=>trans('admin.2'),],old('Volunteer_qu'),['class'=>'form-control','placeholder'=>trans('admin.Volunteer_qu')]) !!}
		</div>
</div>
<br>
<div class="form-group">
    {!! Form::label('name_collaction',trans('admin.name_collaction'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_collaction',old('name_collaction'),['class'=>'form-control','placeholder'=>trans('admin.name_collaction')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('join_us_qu',trans('admin.join_us_qu'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('join_us_qu',old('join_us_qu'),['class'=>'form-control','placeholder'=>trans('admin.join_us_qu')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('cv_file',trans('admin.cv_file'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('cv_file',['class'=>'form-control','placeholder'=>trans('admin.cv_file')]) !!}
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
	
