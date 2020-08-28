<div id="contant-us">
    <!-- ##### Google Maps ##### -->
    <div class="map-area">
      <div id="conact">
.<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d960.7301571632402!2d32.520911488009276!3d15.595888999320113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDM1JzQ1LjIiTiAzMsKwMzEnMTcuMyJF!5e0!3m2!1sen!2s!4v1598439653060!5m2!1sen!2s" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
  </div>

  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area">
      <div class="container">
          <div class="row">
              <!-- Contact Info -->
              <div class="col-12 col-lg-6">
                  <div class="contact--info mt-50 mb-100">
                      <h4>بيانات التواصل</h4>

                              @php
                                Share::page('http://jorenvanhocht.be')->facebook();
                              @endphp
                      <ul class="contact-list">
                          <li>
                              <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Business Hours</h6>
                              <h6>9:00 AM - 18:00 PM</h6>
                          </li>
                          <li>
                              <h6><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                              <h6>+44 300 303 0266</h6>
                          </li>
                          <li>
                              <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                              <h6>info@clever.com</h6>
                          </li>
                          <li>
                              <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                              <h6>10 Suffolk st Soho, London, UK</h6>
                          </li>
                      </ul>
                      <hr>
                      <div class="social-links_us">
                          @php
                              echo Share::currentPage()->facebook();
                              echo Share::page('http://jorenvanhocht.be')->whatsapp();
                              echo Share::page('http://jorenvanhocht.be', 'Your share text can be placed here')->twitter() ;
                              echo Share::page('http://jorenvanhocht.be', 'Your share text can be placed here')->facebook() ;
                          @endphp
                          <a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
                          <a href="#"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a>
                      </div>
                  </div>
              </div>

              <!-- Contact Form -->
              <div class="col-12 col-lg-6">
                  <div class="contact-form">
                      <h4>تواصــل معــنا</h4>

                      <form action="#" method="post">
                          <div class="row">
                              <div class="col-12 col-lg-6">
                                  <div class="form-group">
                                      <input name="name" type="text" class="form-control" id="text" placeholder="Name">
                                      <small class=" form-text text-danger" id="name_error"></small>

                                  </div>
                              </div>
                              <div class="col-12 col-lg-6">
                                  <div class="form-group">
                                      <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                      <small class=" form-text text-danger" id="email_error"></small>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-group">
                                      <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                      <small class=" form-text text-danger" id="message_error"></small>

                                  </div>
                              </div>
                              <div class="col-12">
                              </div>
                          </div>
                          @csrf
                          <button class="btn clever-btn w-100" id="alerter">Post A Comment</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ##### Contact Area End ##### -->
</div>
@push('js')
    <script>

        $(document).ready(function(e) {
            $("form").submit(function(e) {
                e.preventDefault();
                //$("#loadingimg").show();
                //var formData = new FormData();
                //  formData =$(this).serialize() ;
                //$("#full_name_error").text("");

                $.ajax({
                    url:"{{ route('message') }}",
                    type: 'POST',
                    dataType: "JSON",
                    data: $(this).serialize(),
                    processData: false,
                    cache: false,
                    beforeSend:function(){

                    },
                    success: function (reject)
                    {


                    }, error: function (reject) {
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });

                    },

                });
            });
        });

    </script>
@endpush
