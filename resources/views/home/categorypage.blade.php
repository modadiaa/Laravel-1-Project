@extends('layouts.frontbase')

 @section('title')
 {{ __('words.categories') }}
 @endsection


@section('keyword')
     @foreach ($categorypage as $rs)
    {{ strip_tags($rs->keyword)}}
    @endforeach
@endsection

@section('description')
     @foreach ($categorypage as $rs)
    {{ strip_tags($rs->description)}}
    @endforeach
@endsection



@php
$mainCategories = \App\Http\Controllers\HomeController::maincategoryList();
@endphp

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets') }}/front/img/banner-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-12 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">{{ __('words.home') }}
                <i class="fa fa-chevron-right"></i></a></span> <span>{{ __('words.categories') }}  <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread"> {{ __('words.categories') }}</h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-portfolio">
    <div class="row justify-content-center no-gutters">
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">{{ __('words.categories') }}</span>
      <h2 class="mb-2">{{ __('words.categories') }}</h2>
    </div>
  </div>


  @foreach ($categorypage as $subcategory)

    <div class="container">
        <div class="row no-gutters">

              <div class="col-md-12 portfolio-wrap">
                  <div class="row no-gutters align-items-center">
                      <div class="col-md-5  {{ $subcategory->direction==='right' ? '' : ' order-md-last' }} img js-fullheight"
                        style="background-image: url({{ Storage::url($subcategory->image) }});">
                      </div>
                      <div class="col-md-7">
                          <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                              <div class="px-4 pr-lg-4">
                                  <div class="desc {{ $subcategory->direction==='right' ? 'text-md-right' : 'text-md-left' }} ">
                                      <div class="top">
                                          <span class="subheading "> {{ $subcategory->title }}</span>
                                          <h2 class="mb-4 "><a href=""> {{ $subcategory->subtitle }} </a></h2>

                                      </div>
                                      <div class="absolute ">
                                          <p>{!! $subcategory->content !!}
                                          </p>
                                          @if (count($subcategory->children))
                                          <p><a href="{{ route('subcategory', ['id' => $subcategory->id, 'slug' => $subcategory->slug]) }}"
                                            class="custom-btn">المزيد</a></p>
                                            @else
                                            <a href="{{ route('categoryproducts', ['id' => $subcategory->id, 'slug' => $subcategory->slug]) }}">
                                                <h3 class="mb-2">{{ $subcategory->slug }} <br></h3></a>
                                            @endif


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


@endsection
