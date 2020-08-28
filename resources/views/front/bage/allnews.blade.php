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
        {{ trans('front.blog') }}
    </div>

@endsection
<section class="popular-courses-area section-padding-100-0" style="background-image: url({{ url('') }}/front/img/core-img/texture.png);">
    <div class="container">

        <div class="row">
            <!-- Single Popular Course -->
            @foreach($blogs as $cause)
                <div class="col-12 col-md-6 mb-3">
                    <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
                        @if(!empty($cause->blog_img))
                            <img src="{{ it()->url("app/public/".$cause->blog_img) }}" alt="">
                        @else
                            <img src="{{ url('/front/img/bg-img/bg1.jpg') }}">
                    @endif                             <!-- Course Content -->
                        <div class="course-content">
                            <h4>
                                @if(app('l') == 'ar')
                                    {{$cause->blog_title_ar}}
                                @else
                                    {{$cause->blog_title_en}}
                                @endif
                            </h4>

                            @if(app('l') == 'ar')
                                @php
                                    echo $cause->blog_ar;
                                @endphp
                            @else
                                @php
                                    echo $cause->blog_en;
                                @endphp
                            @endif

                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="btn">
                            <a href="{{url('blog/'.$cause->id)}}">
                                <button class="btn btn-outline-success">قراءة المذيد</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</section>

@endsection
