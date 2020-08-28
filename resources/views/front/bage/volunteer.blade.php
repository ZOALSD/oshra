@extends('front.layout.index')
@section('content')

@section('links')
<li><a href="{{ url('/') }}">{{ trans('front.home') }}</a></li>
<li><a class="active" href="#">{{ trans('front.volunteer') }}</a></li>
<li><a href="#contant-us">{{ trans('front.contact_us') }}</a></li>
@endsection

@section('OSHRA')
<div class="mt100"> 
    {{ trans('front.OSHRA') }}
<hr>
 {{ trans('front.wellcome') }}
</div>

@endsection

<div class="volunteer-us container bt-100 hide" id="volunteer-done">
    <div class="contact-form">
        <h3 class=" text-success">{{ trans('front.done-register') }}</h3>
        <hr>
        <h4>{{ trans('front.well-contactus-soon') }}</h4>
    </div>
</div>
<div class="volunteer-us container bt-100" id="volunteer-us">

{!! Form::open(['url'=>"{{ route('AddVolunteer') }}","method"=>"post",'files'=>true,'class'=>'contact-form' ,'id'=>'comment']) !!}
    <div class=" form-group">
    
    <label for="full_name">{{ trans('admin.full_name') }}</label>
    {!! Form::text('full_name',old('full_name'),['class'=>'form-control','id' => 'full_name','placeholder'=>trans('admin.full_name'),'require'=>'require']) !!}
      <small class=" form-text text-danger f22" id="full_name_error"></small>
</div>
<div class="row">
    
<div class=" form-group col-md-6">
    <label for="age">{{ trans('admin.age') }}</label>
        {!! Form::text('age',old('age'),['class'=>'form-control date-picker','id' => 'age','placeholder'=>trans('admin.age'),'readonly'=>'readonly','data-date'=>date("Y-m-d"),'data-date-format'=>'yyyy-mm-dd']) !!}
        <small class=" form-text text-danger f22" id="age_error"></small>

</div>
<div class=" form-group col-md-6">
<label for="">{{ trans('admin.sex') }}</label>
{!! Form::select('sex',['male'=>trans('admin.male'),'female'=>trans('admin.female'),],old('sex'),['class'=>'form-control','id' => 'sex','placeholder'=>trans('admin.sex')]) !!}
<small class=" form-text text-danger f22" id="sex_error"></small>

</div>

</div>
<div class="row">
    <div class="form-group col-md">
    <label for="age">{{ trans('admin.place') }}</label>
    {!! Form::text('place',old('place'),['class'=>'form-control','placeholder'=>trans('admin.place')]) !!}

</div>
</div>

<div class="row">
    
    <div class=" form-group col-md-6">
        {!! Form::label('phone',trans('admin.phone'),['class'=>'col-md-3 control-label']) !!}
        {!! Form::text('phone',old('phone'),['class'=>'form-control','id' => 'phone','placeholder'=>trans('admin.phone')]) !!}
         <small class=" form-text text-danger" id="phone_error"></small>
    </div>

    <div class=" form-group col-md-6">
        {!! Form::label('phone2',trans('admin.phone'),['class'=>'col-md-3 control-label']) !!}
        {!! Form::text('phone2',old('phone2'),['class'=>'form-control','placeholder'=>trans('admin.phone2')]) !!}

    </div>
</div>

<div class="row">
    <div class="form-group col-md">
    {!! Form::select('Volunteer_qu',['1'=>trans('admin.1'),'2'=>trans('admin.2'),],old('Volunteer_qu'),['class'=>'form-control','id' => 'Volunteer_qu','placeholder'=>trans('admin.Volunteer_qu')]) !!}
    <small class=" form-text text-danger f22" id="Volunteer_qu_error"></small>

</div>
</div>

<div class="row" id="name_collaction">
    <div class="form-group col-md">
        {!! Form::label('name_collaction',trans('admin.name_collaction'),['class'=>'col-md-3 control-label']) !!}
        {!! Form::text('name_collaction',old('name_collaction'),['class'=>'form-control','placeholder'=>trans('admin.name_collaction')]) !!}
    </div>
</div>

<div class="row">
    
<div class="form-group col-md">
    {!! Form::label('join_us_qu',trans('admin.join_us_qu'),['class'=>'col-md control-label']) !!}
        {!! Form::textarea('join_us_qu',old('join_us_qu'),['class'=>'form-control','id' => 'join_us_qu','placeholder'=>trans('admin.join_us_qu')]) !!}
        <small class=" form-text text-danger f22" id="join_us_qu_error"></small>
  
</div>
</div>

<div class="row">
    
<div class="form-group">
    {!! Form::label('cv_file',trans('admin.cv_file'),['class'=>'control-label']) !!}
    {!! Form::file('cv_file',['class'=>'form-control','placeholder'=>trans('admin.cv_file')]) !!}
    <small class=" form-text text-danger f22" id="cv_file_error"></small>

</div>
</div>
<div id="validation-errors"></div>
<button class="btn btn-outline-success" id="sendData" >
    <span id="register">{{ trans('front.register') }}</span>
    <div class="lds-facebook" id="load-btn"><div></div><div></div><div></div><div></div></div>
 
</button>
</div>
{!! Form::close() !!}

@section('js')
    
<script>
$("#volunteer-done").hide();//
$("#name_collaction").hide();
$("#load-btn").hide();
$("#Volunteer_qu").change(function (){
   var y = $(this).val();
    if(y == 1){
        $("#name_collaction").show();
    }else{
        $("#name_collaction").hide(); 
    }
});

$(document).ready(function(e) {
$("form").submit(function(e) {
  e.preventDefault();
  //$("#loadingimg").show();
  //var formData = new FormData();
     //  formData =$(this).serialize() ;
$("#full_name_error").text("");
$("#age_error").text("");
$("#sex_error").text("");
$("#phone_error").text("");
$("#Volunteer_qu_error").text("");
$("#join_us_qu_error").text("");
$("#cv_file_error").text("");
  $.ajax({
    url:"{{ route('AddVolunteer') }}", 
    type: 'POST',      
    dataType: "JSON",
    data: new FormData(this),
    processData: false,
    contentType: false,
    cache: false, 
    beforeSend:function(){
    $("#sendData").attr('disabled','disabled')
     $("#register").hide();
     $("#load-btn").show();
    },
    success: function (reject)
    {
       
            $("#volunteer-us").hide();
        $("#volunteer-done").show();//
        $('html, body').animate({scrollTop: $("#volunteer-done").offset().top}, 2000);


    }, error: function (reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });

     $("#register").show();
     $("#load-btn").hide();
     $("#sendData").attr('disabled',false)

                    $('html, body').animate({scrollTop: $("body").offset().top}, 1000);
                },

             }); 
        }); 
   });

</script>
@endsection

@endsection