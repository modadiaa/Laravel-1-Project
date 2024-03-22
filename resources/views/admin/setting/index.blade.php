@extends('layouts.adminbase')

@section('title')
 {{ __('words.setting') }}
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    {{-- <div class="col-sm-3">
                        <a href="{{ route('dashboard.setting.update', $setting) }}" class="btn btn-block bg-gradient-info"
                            style="width: 200px">  {{ __('words.add-about') }}</a>

                    </div>
                    <div class="col-sm-6">
                        <form method="GET" action="{{ route('dashboard.about.index') }}">
                            <div class="input-group">
                              <input type="text" class="form-control" name="search" placeholder="البحث" value="{{ request()->search }}">
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                  <i class="fa fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </form>
                    </div> --}}

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.settings') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form role="form" action="{{ route('dashboard.setting.update', $setting ) }}" method="post"
            enctype="multipart/form-data">
            @csrf

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
                <div class="tab-content" id="myTabContent">
                    @foreach (config('app.languages') as $key => $lang)
                        <div class="tab-pane mt-3 fade @if ($loop->index == 0) show active in @endif"
                            id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                            <br>
                            <div class="form-group mt-3 col-md-12">
                                <label>{{ __('words.title') }} - {{ $lang }}</label>
                                <input type="text" name="{{$key}}[title]" class="form-control"
                                    placeholder="{{ __('words.title') }}" required value="{{$setting->translate($key)->title}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label>{{ __('words.description') }}</label>
                                <textarea name="{{$key}}[description]" class="form-control ckeditor" id="" cols="30" rows="10"> {!! strip_tags($setting->translate($key)->description) !!}
                                    {{-- {{ strip_tags($post->content)}}
                                    strip_tags(htmlspecialchars_decode($desc))

                                    --}}

                                </textarea>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile"> {{ __('words.image') }}</label>
                    <img width="60" src="{{ asset($setting->logo) }}" alt="">

                </div>

                <div class="form-group">
                    <label for="exampleInputFile"> {{ __('words.image') }}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="logo">
                            <label class="custom-file-label" for="exampleInputFile">{{ __('words.choose-image') }}</label>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> {{ __('words.update-data') }}</button>
            </div>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection

    @section('js')

    @endsection
