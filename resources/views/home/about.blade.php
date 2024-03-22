<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            @foreach ($about as $rs)
            @if($rs->id === 2)


            <div class="col-lg-6 order-md-last d-md-flex align-items-stretch">
                <div class="img w-100 img-2 mr-md-2" style="background-image: url({{ Storage::url($rs->image) }});"></div>

            </div>
        <div class="col-lg-6 wrap-about py-md-5 ftco-animate">
            <div class="heading-section pl-md-5">

                <h2 class="mb-4 text-md-right">{{ $rs->title }}</h2>
                <p>{!! $rs->description !!}</p>

                {{-- <ul class="pricing-text mb-2" style="text-align: right;">
                    <li> {!! $rs->content !!}
                    </li>
                </ul> --}}


            </div>
        </div>
        @endif

        @endforeach

        </div>
    </div>
</section>
