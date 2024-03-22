
<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach ($slider as $rs)

        <section class="hero-wrap" style="background-image: url('{{ Storage::url($rs->image) }}');" data-stellar-background-ratio="0.3">
        <div class="overlay"></div>
        <div class="container ">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-10 col-lg-12 ftco-animate d-flex align-items-end">
                    <div class="text">
                    <h1 class="mb-4"> <span> {{ $rs->title }}  </span>  </h1>
                    <p style="font-size: 18px;"> {{ $rs->content }}  </p>
                    <div class="d-flex meta">
                        <div class=""><p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">المزيد</a></p></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        @endforeach

</div>
