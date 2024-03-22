@extends('layouts.frontbase')

{{-- @section('title', $newspage->title) --}}



@section('title')
        @foreach ($newsfinal as $rs)
            {{ $rs->title }}
        @endforeach
@endsection

@section('keyword')
        @foreach ($newsfinal as $rs)
            {{ $rs->keyword }}
        @endforeach
@endsection


@section('description')
 @foreach ($newsfinal as $rs)
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
                <i class="fa fa-chevron-right"></i>
            </a>
        </span>
        @foreach ($newsfinal as $rs)
        {{ $rs->title }}
        @endforeach

        <span> <i class="fa fa-chevron-right"></i></span></p>
        @foreach ($newsfinal as $rs)
          <h1 class="mb-3 bread"> {{ $rs->title }}</h1>
          @endforeach

        </div>
      </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
      <div class="row">
        @foreach ($newsfinal as $rs)

        <div class="col-md-8 ftco-animate">
            <p>
            <img src="{{ Storage::url($rs->image) }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3 newsh2"> {{ $rs->title }}</h2>
          <p class="newsp">{!! $rs->description !!}</p>

        </div> <!-- .col-md-8 -->
        @endforeach

        <div class="col-md-4 sidebar ftco-animate">

          <div class="sidebar-box ftco-animate">
            <div class="categories">
              <h3>{{ __('words.categories') }}</h3>
              @foreach ($category as $rs)
                <li><a href=""> {{ $rs->subtitle }}<span> {{  \App\Models\Category::count() }} </span></a></li>
             @endforeach

            </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
