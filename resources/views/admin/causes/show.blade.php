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
                           data-toggle="tooltip" title="{{trans('admin.causes')}}">
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
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$causes->id}} ؟

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

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/causes')}}"
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
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('admin.id')}} :</b> {{$causes->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.admin_id')}} :</b>
 {{ App\Admin::find($causes->admin_id)->name }}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_catgo_id')}} :</b>
 {!! $causes->causes_catgo_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_name_ar')}} :</b>
 {!! $causes->causes_name_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_name_en')}} :</b>
 {!! $causes->causes_name_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_dis_ar')}} :</b>
 {!! $causes->causes_dis_ar !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_dis_en')}} :</b>
 {!! $causes->causes_dis_en !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_date')}} :</b>
 {!! $causes->causes_date !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_img')}} :</b>
 {!! $causes->causes_img !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_youtube_link')}} :</b>
 {!! $causes->causes_youtube_link !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_facebook_link')}} :</b>
 {!! $causes->causes_facebook_link !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_twitter_link')}} :</b>
 {!! $causes->causes_twitter_link !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_instgram_link')}} :</b>
 {!! $causes->causes_instgram_link !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_plase')}} :</b>
 {!! $causes->causes_plase !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.causes_catgo_id')}} :</b>
 {!! $causes->causes_catgo_id !!}
</div>

			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop