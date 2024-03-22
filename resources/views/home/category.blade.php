<section class="ftco-section ftco-portfolio">
    <div class="row justify-content-center no-gutters">
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">{{ __('words.categories') }}</span>
      <h2 class="mb-2">{{ __('words.categories') }}</h2>
    </div>
  </div>


  @foreach ($category as $rs)

    <div class="container">
        <div class="row no-gutters">

              <div class="col-md-12 portfolio-wrap">
                  <div class="row no-gutters align-items-center">
                      <div class="col-md-5  {{ $rs->direction==='right' ? '' : ' order-md-last' }} img js-fullheight"
                        style="background-image: url({{ Storage::url($rs->image) }});">
                      </div>
                      <div class="col-md-7">
                          <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                              <div class="px-4 pr-lg-4">
                                  <div class="desc {{ $rs->direction==='right' ? 'text-md-right' : 'text-md-left' }} ">
                                      <div class="top">
                                          <span class="subheading "> {{ $rs->title }}</span>
                                          <h2 class="mb-4 "><a href=""> {{ $rs->subtitle }} </a></h2>

                                      </div>
                                      <div class="absolute ">
                                          <p>{!! $rs->description !!}
                                          </p>
                                          <p><a href="#" class="custom-btn">المزيد</a></p>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>


          </div>
    </div>
    @endforeach

</section>
