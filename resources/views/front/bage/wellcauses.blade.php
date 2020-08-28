@extends('front.layout.index')
@section('content')

@section('links')
<li><a href="{{ url('/') }}">{{ trans('front.home') }}</a></li>
<li><a class="active" href="#">{{ trans('front.causes') }}</a></li>
<li><a href="#contant-us">{{ trans('front.contact_us') }}</a></li>
@endsection

@section('OSHRA')
<div class="mt100"> 
    {{ trans('front.OSHRA') }}
<hr>
فعالیتنا الـقادمة
</div>

@endsection
<section class="popular-courses-area section-padding-100-0" style="background-image: url({{ url('') }}/front/img/core-img/texture.png);">
    <div class="container">
  
        <div class="row">
            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ url('') }}/front/img/bg-img/c1.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>English Grammar</h4>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="btn">
                        <a href="{{route('allcauses')}}">
                                </a>
                   <button class="btn btn-outline-success">قراءة المذيد</button>
                </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ url('') }}/front/img/bg-img/c1.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>English Grammar</h4>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="btn">
                   <button class="btn btn-outline-success">قراءة المذيد</button>
                </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ url('') }}/front/img/bg-img/c1.jpg" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>English Grammar</h4>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="btn">
                   <button class="btn btn-outline-success">قراءة المذيد</button>
                </div>
                </div>
            </div>


        </div>
    </div>

</section>









@endsection