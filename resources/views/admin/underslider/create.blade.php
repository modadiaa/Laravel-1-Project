@extends('layouts.adminbase')

@section('title')
 {{ __('words.add-underslider') }}
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.add-underslider') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.add-underslider') }} </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.underslider') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.underslider.store') }}" method="post">
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
                                        <textarea name="{{ $key }}[description]" class="form-control ckeditor" id="" cols="50" rows="10"></textarea>
                                    </div>


                                </div>
                            @endforeach
                        </div>

                        <hr><hr><hr>


                        <div class="form-group">
                            <label>{{ __('words.bgcolor') }}</label>
                            <select class="form-control" name="bgcolor">
                                <option>red</option>
                                <option>black</option>
                            </select>
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
