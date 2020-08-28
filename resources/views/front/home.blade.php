@extends('front.layout.index')
@section('content')
    @foreach ($abouts as $about)
@section('desc'){{$about->keyword}}@endsection
@section('title')
    {{ trans('front.OSHRA') }}
@endsection
@section('links')
    <li><a href="#home">{{ trans('front.home') }}</a></li>
    <li><a href="#about">{{ trans('front.about') }}</a>
    <li><a href="#causes">{{ trans('front.causes') }}</a></li>
    <li><a href="#blog">{{ trans('front.blog') }}</a></li>
    <li><a href="#contant-us">{{ trans('front.contact_us') }}</a></li>
@endsection
@section('OSHRA')
    {{ trans('front.OSHRA') }}
@endsection
@section('arrow')
    <div class="arrow hero-content text-center">
        <i class="fa fa-chevron-down fa-lg"></i>
    </div>
@endsection

<!-- ##### Hero Area End ##### -->

<!--star About us ----------------------------->
<div id="about">
    <div class="about">
        <div class="container ">
            <div class="about-title wow fadeInUp" data-wow-delay="250ms">{{ trans('front.about') }}</div>
            <div class="about-content wow fadeInUp" data-wow-delay="250ms">
                @if (app('l') == 'ar')
                    {{ $about->about_ar }}
                @else
                    {{ $about->about_en }}
                @endif
            </div>
            <div class="about-title wow fadeInUp" data-wow-delay="250ms">{{ trans('front.how_help_us') }}</div>
            <br>

            <div class="about-content wow fadeInUp" data-wow-delay="250ms">
                <div class="row">
                    <!-- Single Popular Course -->
                    <div class="col-12 col-md-6">
                        <div class="single-popular-course wow fadeInUp" data-wow-delay="500ms">
                            <!-- Course Content -->
                            <div class="course-content">
                                <h4>{{ trans('front.tabara') }}</h4>
                                <hr>
                                <h3>
                                    @if (app('l') == 'ar')
                                        <p>{{ $about->tabara_ar }}</p>
                                    @else
                                        <p>{{ $about->tabara_en }}</p>
                                    @endif
                                </h3>
                            </div>
                            <!-- Seat Rating Fee -->

                            <button class="btn btn-outline-success">{{ trans('front.read_more') }}</button>

                            <hr>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single-popular-course wow fadeInUp" data-wow-delay="500ms">
                            <!-- Course Content -->
                            <div class="course-content">
                                <h4>{{ trans('front.volunteer') }}</h4>
                                <hr>
                                <h5>
                                    @if (app('l') == 'ar')
                                        <p>{{ $about->volunteer_ar }}</p>
                                    @else
                                        <p>{{ $about->volunteer_en }}</p>
                                    @endif
                                </h5>
                            </div>
                            <!-- Seat Rating Fee -->
                            <a href="{{route('volunteer')}}">
                                <button class="btn btn-outline-success">{{ trans('front.read_more') }}</button>
                            </a>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach


            <br>
            <!-- Follow Us -->
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>
            <br>

        </div>
    </div>
</div>
<!--end About us ----------------------------->
<div id="causes">
    <!-- ##### Popular Courses Start ##### -->
    {{-- last our causes start her via ZOALS3D  --}}
    @include('front.include.last3_causes')
    {{-- last our causes end her via ZOALS3D  --}}

    {{--well last our causes start her via ZOALS3D  --}}
    @if($WellCausesCount !== 0)
    @include('front.include.well_last3_causes')
    @endif
    {{--well last our causes end her via ZOALS3D  --}}

<!-- ##### Popular Courses End ##### -->

    <!-- ##### Best Tutors Start ##### -->
         @include('front.include.OurMember')
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Blog Area Start ##### -->
      @include('front.include.blog')
    <!-- ##### Blog Area End ##### -->
    <!--contact us area start 33333333##########-->


    <!--contact us area start 33333333##########- div #id-->
    @section('js')
        <script src="{{ url('') }}/front/js/herosize.js"></script>
@endsection
@endsection
