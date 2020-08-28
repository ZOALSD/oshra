<section class="blog-area section-padding-100-0" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>{{ trans('front.last_news') }}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            @foreach($blogs as $blog)
            <div class="col-12 col-md-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                @if(!empty($blog->blog_img))
                    <img src="{{ it()->url("app/public/".$blog->blog_img) }}" alt="">
                @else
                        <img src="{{url("/front/img/bg-img/bg3.jpg")}}" alt="">
                @endif
                        <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="blog-headline">
                            <h4>
                                @if(app('l') == 'ar')
                                    {{ $blog->blog_title_ar }}
                                @else
                                    {{ $blog->blog_title_en }}
                                @endif
                            </h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Sarah Parker</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Art &amp; Design</a>
                        </div>
                        <p>
                            @if(app('l') == 'ar')
                                {{ $blog->blog_ar }}
                            @else
                                {{ $blog->blog_en }}
                            @endif
                        </p>
                    </div>
                    <div class="btn">
                        <a href="{{ route('allnews') }}">
                            <button class="btn btn-outline-success">{{ trans('front.view_all') }}</button>
                        </a>
                        <a href="{{ url('blog/'.$blog->id) }}">
                        <button class="btn btn-outline-success">{{ trans('front.read_more') }}</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
            <!-- Single Blog Area -->

        </div>
    </div>
</section>
