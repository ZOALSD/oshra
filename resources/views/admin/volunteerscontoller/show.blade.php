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
                           data-toggle="tooltip" title="{{trans('admin.volunteerscontoller')}}">
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
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$volunteerscontoller->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/volunteerscontoller')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('admin.id')}} :</b> {{$volunteerscontoller->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.full_name')}} :</b>
 {!! $volunteerscontoller->full_name !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.sex')}} :</b>
 {!! $volunteerscontoller->sex !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.age')}} :</b>
 {!! $volunteerscontoller->age !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.place')}} :</b>
 {!! $volunteerscontoller->place !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.phone')}} :</b>
 {!! $volunteerscontoller->phone !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.phone2')}} :</b>
 {!! $volunteerscontoller->phone2 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.Volunteer_qu')}} :</b>
 {!! $volunteerscontoller->Volunteer_qu !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.name_collaction')}} :</b>
 {!! $volunteerscontoller->name_collaction !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.join_us_qu')}} :</b>
 {!! $volunteerscontoller->join_us_qu !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.cv_file')}} :</b>
 {!! $volunteerscontoller->cv_file !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop