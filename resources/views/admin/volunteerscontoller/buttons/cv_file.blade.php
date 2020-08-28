<style>
.lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: #9E9E9E;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}

</style>
@if(!empty($cv_file))
{!! Form::open(['url' => route('ViewPdf') , 'method' => 'post' , 'id' => 'FormIds']) !!}
{!! Form::hidden('pdffile',$cv_file) !!}
<button class="btn btn-outline-info btn-download" >
  <i class="fa fa-file-pdf-o fa-2x m-5"></i>
</button>
{!! Form::close() !!}
<div class="lds-facebook hide" id="{{$cv_file}}"><div></div><div></div><div></div><div></div></div>


@section('js')    
<script>
$(document).ready(function(e) {
$("#FormIds").submit(function(e) {
  e.preventDefault();
  /*$.ajax({
    url:"{{ route('ViewPdf') }}", 
    type: 'POST',      
    dataType: "JSON",
    data: $(this).serialize(),
    processData: false,
    contentType: false,
    cache: false, 
    beforeSend:function(){
        alert('will send');
    },
    success: function (data, status)
    {

    },
    error: function (xhr, desc, err)
    {
        

    }

             });*/ 
        }); 
   });

</script>
@endsection 

@else
no foundid
@endif


{{--
<a href="{{ url('ViewPdf/'.$cv_file)}}" target="_blank" rel="noopener noreferrer">
</a>
@if(!empty($cv_file))
                <a href="#" data-toggle="modal" data-target="#img{{ $id }}"><img src="{{ it()->url($cv_file) }}" style="width:32px;height:32px" /></a>
<div id="img{{ $id }}" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="{{ it()->url($cv_file) }}" style="width:100%;height:500px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans("admin.close") }}</button>
      </div>
    </div>
  </div>
</div>
@endif--}}
                