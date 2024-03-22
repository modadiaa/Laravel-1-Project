<div class="row mx-0 justify-content-center text-center">
    <div class="col-lg-6">
        <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">{{ __('words.gallery') }} </h6>
        <h1>{{ __('words.gallery') }}</h1>
    </div>
</div>
<div class="owl-carousel service-carousel" style="direction: ltr;">

    @foreach ($gallery as $rs)
        <div class="service-item position-relative">
            <a href="{{ Storage::url($rs->image) }}" data-fancybox="gallery"><img class="img-fluid" src="{{ Storage::url($rs->image) }}" alt=""></a>
        </div>
    @endforeach


</div>
