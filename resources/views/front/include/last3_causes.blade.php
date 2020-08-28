<section class="popular-courses-area section-padding-100-0" style="background-image: url({{ url('') }}/front/img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>{{ trans('front.last_causes') }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Popular Course -->
            @foreach ($causes as $cause)

            <div class="col-12 col-md-6 col-lg-4 bt-10-sm                                                                                                                                                                                                 ">
                <div class="single-popular-course wow fadeInUp" data-wow-delay="250ms">
                    @if(!empty($cause->causes_img))
                        <img src="{{ it()->url("app/public/".$cause->causes_img) }}" alt="">
                    @else
                        <img src="{{ url('/front/img/bg-img/bg1.jpg') }}">
                @endif                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>
                             @if (app('l') == 'ar')
                                 {{ $cause->causes_name_ar }}
                             @else
                                 {{ $cause->causes_name_en }}
                             @endif
                        </h4>

                        @if (app('l') == 'ar')
                        @php
                            echo $cause->causes_dis_ar ;
                        @endphp
                        @else
                        @php
                        echo $cause->causes_dis_en ;
                        @endphp

                    @endif

                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="btn">
                        <a href="{{route('allcauses')}}">
                            <button class="btn btn-outline-success">{{ trans('front.view_all') }}</button>
                        </a>
                        <a href="{{ url('cause/'.$cause->id) }}">
                            <button class="btn btn-outline-success">{{ trans('front.read_more') }}</button>
                        </a>
                </div>
                </div>
            </div>

           @endforeach

        </div>

    </div>
</section>
