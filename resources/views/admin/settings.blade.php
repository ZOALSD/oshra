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
                    <a  href="{{aurl('settings')}}"
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
                    {!! Form::open(['url'=>aurl('/settings'),'id'=>'settings','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
                    <div class="form-group">
                        {!! Form::label('sitename_ar',trans('admin.sitename_ar'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('sitename_ar',setting()->sitename_ar,['class'=>'form-control','word_enholder'=>trans('admin.sitename_ar')]) !!}
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        {!! Form::label('sitename_en',trans('admin.sitename_en'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('sitename_en',setting()->sitename_en,['class'=>'form-control','word_enholder'=>trans('admin.sitename_en')]) !!}
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        {!! Form::label('place_ar',trans('admin.place_ar'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('place_ar',setting()->place_ar,['class'=>'form-control','place_arholder'=>trans('admin.place_ar')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('place_en',trans('admin.place_en'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('place_en',setting()->place_en,['class'=>'form-control','place_enholder'=>trans('admin.place_en')]) !!}
                        </div>
                    </div>
                   
                    

                    <br>
                     
                    <div class="form-group">
                        {!! Form::label('email',trans('admin.email'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('email',setting()->email,['class'=>'form-control','word_enholder'=>trans('admin.email')]) !!}
                        </div>
                    </div>


                    
                    <div class="form-group col-md-6">
                        {!! Form::label('phone1',trans('admin.phone1'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::number('phone1',setting()->phone1,['class'=>'form-control','word_enholder'=>trans('admin.phone1')]) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('phone2',trans('admin.phone2'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::number('phone2',setting()->phone2,['class'=>'form-control','word_enholder'=>trans('admin.phone2')]) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('twitter',trans('admin.twitter'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::url('twitter',setting()->twitter,['class'=>'form-control','word_enholder'=>trans('admin.twitter')]) !!}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('facebook',trans('admin.facebook'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::url('facebook',setting()->facebook,['class'=>'form-control','word_enholder'=>trans('admin.facebook')]) !!}
                        </div>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        {!! Form::label('youtube',trans('admin.youtube'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::url('youtube',setting()->youtube,['class'=>'form-control','word_enholder'=>trans('admin.youtube')]) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('instgram',trans('admin.instgram'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::url('instgram',setting()->instgram,['class'=>'form-control','word_enholder'=>trans('admin.instgram')]) !!}
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group col-md-6 col-lg-6">
                        {!! Form::label('logo',trans('admin.logo'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::file('logo',['class'=>'form-control','word_enholder'=>trans('admin.logo')]) !!}
                            @if(!empty(setting()->logo))
                             <img src="{{ it()->url(setting()->logo) }}" style="width:50px;height:50px" />
                            @endif
                        </div>
                    </div>

                     <div class="form-group col-md-6 col-lg-6">
                        {!! Form::label('icon',trans('admin.icon'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::file('icon',['class'=>'form-control','word_enholder'=>trans('admin.icon')]) !!}
                            @if(!empty(setting()->icon))
                             <img src="{{ it()->url(setting()->icon) }}" style="width:50px;height:50px" />
                            @endif
                        </div>
                    </div>
                     
                    <div class="form-group">
                        {!! Form::label('word_ar',trans('admin.word_ar'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('word_ar',setting()->word_ar,['class'=>'form-control','word_arholder'=>trans('admin.word_ar')]) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('word_en',trans('admin.word_en'),['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('word_en',setting()->word_en,['class'=>'form-control','word_enholder'=>trans('admin.word_en')]) !!}
                        </div>
                    </div>
                    

                    <div class="clearfix"></div>
                 
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