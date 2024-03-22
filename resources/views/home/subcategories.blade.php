
@extends('layouts.frontbase')

     {{-- @foreach ($subcategory as $rs)
        @section('title' ,  $rs->subtitle)
        @section('keyword' ,  strip_tags($rs->keyword))
        @section('description' ,  strip_tags($rs->description))
    @endforeach --}}

    @section('title')
       {{ $category->subtitle }}
    @endsection

    @section('keyword')
        @foreach ($subcategory as $rs)
           {{ $rs->keyword }}
        @endforeach
    @endsection
    @section('description')
        @foreach ($subcategory as $rs)
        {{ strip_tags($rs->description)}}
        @endforeach
    @endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets') }}/front/img/banner-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-12 ftco-animate pb-5">

            <p class="breadcrumbs">
                <span class="mr-2">
                    <a href="index.html">{{ __('words.home') }}
                     <i class="fa fa-chevron-right"></i>
                    </a>
                </span>
            <span>  {{ $category->subtitle }} <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">{{ $category->subtitle }} </h1>


        </div>
      </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
<div class="row">
    @foreach ($subcategory as $subcategory)
    <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch justify-content-end">
                        <div class="img align-self-stretch" style="background-image: url({{ Storage::url($subcategory->image) }});"></div>
                    </div>
                    <div class="text d-flex align-items-center pt-3">

                        <div>
                            @if (count($subcategory->children))
                            <a href="{{ route('subcategory', ['id' => $subcategory->id, 'slug' => $subcategory->slug]) }}">
                                <h3 class="mb-2"> {{ $subcategory->slug }} <br>
                                </h3></a>
                            @else
                            <a href="{{ route('categoryproducts', ['id' => $subcategory->id, 'slug' => $subcategory->slug]) }}">
                                <h3 class="mb-2">{{ $subcategory->slug }} <br></h3></a>
                            @endif

                            <ul class="ftco-social">
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        </div>


                    </div>
                </div>
            </div>
    @endforeach
</div>
</div>
</div>
</section>


@endsection
