@extends('layouts.adminbase')

@section('title', 'Add Slider')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.add-slider') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.add-slider') }} </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.slider') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.slider.store') }}" method="post" enctype="multipart/form-data" >
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
                                        <label>{{ __('words.title') }} - {{ $lang }}</label>
                                        <input type="text" name="{{ $key }}[title]" class="form-control"
                                            placeholder="{{ __('words.title') }}" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.description') }}</label>
                                        <input type="text" name="{{ $key }}[description]" class="form-control"
                                        placeholder="{{ __('words.description') }}" required>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr><hr><hr>

                        <div class="form-group">
                            <label for="exampleInputFile">{{ __('words.image') }}</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" required>
                                    <label class="custom-file-label" for="exampleInputFile" >{{ __('words.choose-image') }}</label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <label>{{ __('words.link') }}</label>
                            <input type="text" name="link" class="form-control">
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
