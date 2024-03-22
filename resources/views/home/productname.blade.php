

@extends('layouts.frontbase')
@section('title')
{{ __('words.productname') }}
@endsection

 @section('keyword')
    @foreach ($productname as $rs)
   {{ $rs->keyword }}
   @endforeach
@endsection


@section('description')
    @foreach ($productname as $rs)
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
                <i class="fa fa-chevron-right"></i></a></span> <span> {{ __('words.productname') }} <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread"> {{ __('words.productname') }}</h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid">
        <div class="row">

        <div class="col-lg-12 wrap-about py-md-5 ftco-animate">
            <div class="heading-section pl-md-5">
                <h2 class="mb-4 text-md-right"> {{ __('words.productname') }}
                </h2>

    <div style="overflow-x: auto;">

        @foreach ($productname as $rs)
           <table class="table table-striped" >
            <thead>
                <tr>
                    {!! $rs->description !!}
                </tr>
            </thead>

        @endforeach



            </div>
</div>
        </div>
        </div>
    </div>
</section>

@endsection
