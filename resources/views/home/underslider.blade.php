
{{-- @php
$underSlider->bgcolor === 'أسود';
@endphp --}}

<section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
    <div class="container-fluid">
      <div class="row d-flex no-gutters">

        @foreach ($underSlider as $rs)
        {{-- @if ($rs->bgcolor === 'أسود') --}}
        <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services   {{ $rs->bgcolor==='black' ? 'services-bg services-darken' : ' services-bg' }}   d-block text-center px-4 py-5 ">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-system"></span></div>
                      <div class="media-body py-md-4">
                          <h3>{{ $rs->title }} </h3>
                          <p>{!! $rs->description !!}</p>
                      </div>
                </div>
            </div>
             {{-- @else
            <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-bg  services-darken d-block text-center px-4 py-5 ">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-system"></span></div>
                      <div class="media-body py-md-4">
                          <h3>{{ $rs->title }} </h3>
                          <p>{!! $rs->content !!}</p>
                      </div>
                </div>
            </div> --}}
            {{-- @endif --}}
        @endforeach


        {{-- <div class="col-md-6 d-flex align-items-stretch ftco-animate">
          <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
              <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-supervised"></span></div>
            <div class="media-body py-md-4">
              <h3>مهمتنا </h3>
              <p>الوصول الى اطول عمر لمنتجاتنا من خلال التزامنا بالجوده وخدمه العملاء والابتكار , نحن على ثقه من ان ماكينات التعبئه والتغليف لدينا يمكن ان تساعد الشركات من جميع الاحجام والصناعات لى تبسيط عملياتها وتحقيق اهدافها</p>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </section>
