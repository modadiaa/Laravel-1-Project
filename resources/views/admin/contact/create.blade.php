@extends('layouts.adminbase')

@section('title', 'Add Contact')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.add-contact') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.add-contact') }} </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.contact') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.contact.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="card-block">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach (config('app.languages') as $key => $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if ($loop->index == 0) active @endif"
                                            id="home-tab" data-toggle="tab" href="#{{ $key }}" role="tab"
                                            aria-controls="home" aria-selected="true">{{ $lang }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            @foreach (config('app.languages') as $key => $lang)
                                <div class="tab-pane mt-3 fade @if ($loop->index == 0) show active in @endif"
                                    id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                    <br>
                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.title') }} </label>
                                        <input type="text" name="{{ $key }}[title]" class="form-control"
                                            placeholder="{{ __('words.title') }}"  >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.location') }}</label>
                                        <textarea name="{{ $key }}[location]" class="form-control ckeditor" id="" cols="50" rows="10"></textarea>
                                    </div>
                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.slug') }} </label>
                                        <input type="text" name="{{ $key }}[slug]" class="form-control"
                                            placeholder="{{ __('words.slug') }}"  >
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr><hr><hr><hr><hr><hr>


                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.phone1') }} </label>
                            <input type="text" name="phone1" class="form-control"
                                placeholder="{{ __('words.phone1') }}"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.phone2') }} </label>
                            <input type="text" name="phone2" class="form-control"
                                placeholder="{{ __('words.phone2') }}"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.email1') }} </label>
                            <input type="email" name="email1" class="form-control"
                                placeholder="{{ __('words.email1') }}"  >
                        </div>

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.email2') }} </label>
                            <input type="email" name="email2" class="form-control"
                                placeholder="{{ __('words.email2') }}"  >
                        </div>

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.facebook') }} </label>
                            <input type="text" name="facebook" class="form-control"
                                placeholder="https://www.facebook.com/"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.twitter') }} </label>
                            <input type="text" name="twitter" class="form-control"
                                placeholder="https://twitter.com/"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.youtube') }} </label>
                            <input type="text" name="youtube" class="form-control"
                                placeholder="https://www.youtube.com/"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.instagram') }} </label>
                            <input type="text" name="instagram" class="form-control"
                                placeholder="https://www.instagram.com/"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.telegram') }} </label>
                            <input type="text" name="telegram" class="form-control"
                                placeholder="https://web.telegram.org/k/"  >
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.whatsapp') }} </label>
                            <input type="text" name="whatsapp" class="form-control"
                                placeholder="https://web.whatsapp.com/"  >
                        </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('words.save') }}</button>
                    </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
