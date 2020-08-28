
<section class="hero-area bg-img bg-overlay-2by5" id="home" style="background-image: url({{ url('') }}/front/img/bg-img/bg1.jpg);">

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">
                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}">
                        OSHRA
                        <!---img src="/fornt/img/core-img/logo.png" alt=""-->
                    </a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                @yield('links')
                                @if(app('l')=='ar')
                                <li><a href="{{aurl('lang/en')}}">English</a></li>
                                @else
                                <li><a href="{{aurl('lang/ar')}}">عربي</a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Hero Area Start ##### -->
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>
                            @yield('OSHRA')
                        </h2>
                    </div>
                </div>
            </div>
           @yield('arrow')
        </div>

</section>
