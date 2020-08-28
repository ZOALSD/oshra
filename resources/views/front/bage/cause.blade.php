@extends('front.layout.index')
@section('content')

    @foreach ($causes as $i)

@section('links')
    <li><a href="{{ url('/') }}">{{ trans('front.home') }}</a></li>
    <li><a class="" href="{{ route('allcauses') }}">{{ trans('front.causes') }}</a></li>
    <li><a href="#contant-us">{{ trans('front.contact_us') }}</a></li>
@endsection

@section('OSHRA')
    <div class="mt100">
        {{ trans('front.OSHRA') }}
        <hr>

        @if (app('l') == 'ar')
            {{ $i->causes_name_ar }}
        @else
            {{ $i->causes_name_en }}
        @endif

    </div>
@endsection
<style>
    .single-popular-course img{
        height:auto !important;
        max-height: 400px;
    }
</style>
<section class="popular-courses-area section-padding-100-0" style="background-image: url({{ url('') }}/front/img/core-img/texture.png);">
    <div class="container">

        <!-- Single Popular Course -->
        <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
            @if(!empty($i->causes_img))
                <img src="{{ it()->url($i->causes_img) }}" alt="">
            @else
                <img src="{{ url('/front/img/bg-img/bg1.jpg') }}">
        @endif             <!-- Course Content -->
            <div class="course-content">
                <h4>
                    @if (app('l') == 'ar')
                        {{ $i->causes_name_ar }}
                    @else
                        {{ $i->causes_name_en }}
                    @endif
                </h4>
                @if (app('l') == 'ar')
                    @php
                        echo $i->causes_dis_ar;
                    @endphp
                @else
                    @php
                        echo $i->causes_dis_en;
                    @endphp
                @endif
            </div>
            <!-- Seat Rating Fee -->
            <div class="btn">

            </div>
        </div>
    </div>
</section>
@endforeach

@endsection

