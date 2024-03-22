
@extends('layouts.frontbase')
@section('title')
     @foreach ($aboutpage as $rs)
     {{ $rs->title}}
    @endforeach
@endsection

@section('description')
     @foreach ($aboutpage as $rs)
    {{ strip_tags($rs->description)}}
    @endforeach
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets') }}/front/img/banner-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-12 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}"> {{ __('words.home') }}
                <i class="fa fa-chevron-right"></i></a></span> <span> {{ __('words.about') }}  <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread"> {{ __('words.about') }} </h1>
        </div>
      </div>
    </div>
</section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                @foreach ($aboutpage as $rs)

                @if($rs->id === 1)

                <div class="col-lg-5 order-md-last d-md-flex align-items-stretch">
                    <div class="img w-100 img-2 mr-md-2" style="background-image: url({{ Storage::url($rs->image) }});"></div>

                </div>
            <div class="col-lg-7 wrap-about py-md-5 ftco-animate">
                <div class="heading-section pl-md-5">
                    <h2 class="mb-4 text-md-right">{{ $rs->title }}</h2>
                    <p>{!! $rs->description !!}</p>
                </div>
            </div>
            @endif

            @endforeach

            </div>
        </div>
    </section>


@endsection
