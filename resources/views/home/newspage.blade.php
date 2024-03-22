@extends('layouts.frontbase')

@section('title')
{{ __('words.news') }}
@endsection

 @section('keyword')
    @foreach ($newspage as $rs)
   {{ $rs->keyword }}
   @endforeach
@endsection

@section('description')
    @foreach ($newspage as $rs)
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
                <i class="fa fa-chevron-right"></i></a></span> <span> {{ __('words.news') }} <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread"> {{ __('words.news') }}</h1>
        </div>
      </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">{{ __('words.news') }}</span>
          <h2>{{ __('words.news') }} </h2>
        </div>
      </div>
      <div class="row d-flex">
        @foreach ($newspage as $rs)
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('{{ Storage::url($rs->image) }}');">
                    </a>
                    <h3 class="heading"><a href="{{ route('newsdesc', ['id' => $rs->id, 'slug' => $rs->slug]) }}"> {{ $rs->title }}</a></h3>
                </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>

  @endsection
