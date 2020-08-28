<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>{{ trans('front.our_member') }}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">

                    @foreach($member as $m)
                    <!-- Single Tutors Slide -->
                    <div class="single-tutors-slides">
                        <!-- Tutor Thumbnail -->
                        <div class="tutor-thumbnail">
                            @if(!empty($m->member_image))
                            <img src="{{ it()->url("app/public/".$m->member_image)}}" alt="">
                            @else
                                <img src="{{ url('') }}/front/img/bg-img/t1.png" alt="">
                            @endif
                        </div>
                        <!-- Tutor Information -->
                        <div class="tutor-information text-center">
                            <h5>
                                @if(app('l') == 'ar')
                                    {{ $m->member_name_ar }}
                                @else
                                    {{ $m->member_name_en }}
                                @endif
                            </h5>
                            <span>{{ $m->id }}</span>
                        <p>
                            @if(app('l') == 'ar')
                                {{ $m->member_about_ar }}
                            @else
                                {{ $m->member_about_en }}
                            @endif
                        </p>
                            <div class="social-info">
                                <a href="{{$m->member_face}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="{{$m->member_instgram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="{{$m->member_twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
