
@extends('layouts.frontbase')
@section('title')
    @foreach ($contactpage as $rs)
    {{ $rs->title}}
    @endforeach
@endsection

@section('description')
     @foreach ($contactpage as $rs)
    {{ strip_tags($rs->location)}}
    @endforeach
@endsection

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets') }}/front/img/banner-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end">
        <div class="col-md-12 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}"> {{ __('words.home') }}
                <i class="fa fa-chevron-right"></i></a></span> <span>{{ __('words.contact') }}  <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-3 bread">{{ __('words.contact') }} </h1>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container-fluid">
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-8 mb-md-5">
          <form action="{{ url('/') }}" method="POST" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="الاسم" name ="name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="البريد الإلكترونى" name ="email" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="الموضوع" name ="subject" required>
            </div>
            <div class="form-group">
              <textarea  id="" cols="30" rows="7" class="form-control" placeholder="رسالتك" name ="message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="ارسل رسالتك" class="btn btn-primary py-3 px-5" name="submit">
            </div>
          </form>
        </div>
      </div>
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-12">
              <div class="row mb-5">
                @foreach ($contact as $rs)

                <div class="col-md-4 text-center py-4">
                    <div class="icon">
                        <span class="fa fa-map"></span>
                    </div>
                  <p><span>العنوان:</span>  {!! $rs->location !!}
                  </p>
                </div>
                <div class="col-md-4 text-center border-height py-4">
                    <div class="icon">
                        <span class="fa fa-phone"></span>
                    </div>
                  <p><span>الهاتف:</span> <a href="tel:01000251345"> {{ $rs->phone1 }} </a></p>
                </div>
                <div class="col-md-4 text-center py-4">
                    <div class="icon">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                  <p><span>البريد الالكترونى:</span> <a href="mailto:info@germanmachine.net">{{ $rs->email1 }}</a></p>
                </div>
                @endforeach

              </div>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div id="" class="bg-white" style="position: relative; overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3447.380425990083!2d31.74364388488052!3d30.226226181816475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDEzJzM0LjQiTiAzMcKwNDQnMjkuMiJF!5e0!3m2!1sar!2seg!4v1705773369942!5m2!1sar!2seg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </div>
      </div>
    </div>
  </section>


@endsection
