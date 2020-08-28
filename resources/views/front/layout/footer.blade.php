
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a class="Osa" href="#home">
                                {{ trans('front.OSHRA') }}
                            </a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
 All rights reserved <br>
 created by <a href="https://facebook.com/ZOALS3D" target="_blank">ZOALS3D</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    {{--  --}<script src="{{ url('') }}/front/js/jquery/jquery-2.2.4.min.js"></script>{{--  --}}
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        @stack('js')
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ url('') }}/front/js/load.js"></script>
    <script src="{{url('design/admin_panel')}}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

    <!-- Popper js -->
    <script src="{{ url('') }}/front/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('') }}/front/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ url('') }}/front/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ url('') }}/front/js/active.js"></script>
    @yield('js')
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="{{ url('') }}/front/js/google-map/map-active.js"></script>

    <script>
         $(document).ready(function(){
                        $('.date-picker').datepicker();
                     //   $.fn.dataTable.ext.errMode = 'none';
                        });


    </script>

</body>

</html>
