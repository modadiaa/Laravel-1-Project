<footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">

          <div class="col-md-4">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">عنوانا</h2>
                  <div class="block-23 mb-3 text-md-right">
                    @foreach ($contact as $rs)

                    <ul>
                      <li><span class="icon fa fa-map"></span><span class="text">{!! $rs->location !!}</span></li>
                      <li><a href="#"><span class="icon fa fa-phone"></span><span class="text"> {{ $rs->phone1 }} </span></a></li>
                      <li><a href="#"><span class="icon fa fa-envelope "></span><span class="text">{{ $rs->email1 }}

                      </span></a></li>
                    </ul>
                    @endforeach

                  </div>

                  <ul class="ftco-footer-social list-unstyled mt-5">
                    @foreach ($contact as $rs)

                      <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="{{  $rs->facebook }}"><span class="fa fa-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                      @endforeach

                    </ul>

              </div>
            </div>


        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">لينكات سريعه</h2>
            <ul class="list-unstyled text-md-right">
              <li><a href="#"><span class="fa fa-chevron-right ml-2"></span>الرئيسية</a></li>
              <li><a href="#"><span class="fa fa-chevron-right ml-2"></span>عن شركتنا </a></li>
              <li><a href="#"><span class="fa fa-chevron-right ml-2"></span>منتجاتنا</a></li>
              <li><a href="#"><span class="fa fa-chevron-right ml-2"></span>عملائنا</a></li>
              <li><a href="#"><span class="fa fa-chevron-right ml-2"></span>اتصل بنا</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-5">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">موقعنا</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3447.380425990083!2d31.74364388488052!3d30.226226181816475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDEzJzM0LjQiTiAzMcKwNDQnMjkuMiJF!5e0!3m2!1sar!2seg!4v1705773369942!5m2!1sar!2seg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p> <script>document.write(new Date().getFullYear());</script>
              <i class="icon-heart color-danger" aria-hidden="true"></i> Powered by <a href="" target="_blank">ITTSOFT</a>
</p>
        </div>
      </div>
    </div>
  </footer>
