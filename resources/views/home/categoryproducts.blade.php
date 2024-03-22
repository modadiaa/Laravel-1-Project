@extends('layouts.frontbase')
@section('title', $category->title)

@section('keyword')
        @foreach ($category->products as $rs)
            {{ $rs->keyword }}
        @endforeach
@endsection

@section('description')
 @foreach ($category->products as $rs)
 {{ strip_tags($rs->description)}}
 @endforeach
@endsection




@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Storage::url($category->banner)}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-12 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">{{ __('words.home') }}
                <i class="fa fa-chevron-right"></i></a></span> <span>{{ $category->title }}  <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread"> {{ $category->title }} </h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
      <div class="row">
        @foreach ($category->products as $rs)

        <div class="col-md-4 ftco-animate">
            <a href="{{ Storage::url($rs->image)}}" data-fancybox="gallery">
            <img src="{{ Storage::url($rs->image)}}" alt="" class="img-fluid">
            </a>
          <h2 class="mb-3 newsh2"> {{$rs->title  }}</h2>
          <p class="newsp"> {!! $rs->description  !!}  </p>

        </div>
        @endforeach

    </div>
  </section>
@endsection
