@extends('layouts.adminbase')

@section('title', 'Edit Product :' . $data->title)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.edit-product') }} : {{ $data->title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active"> {{ __('words.edit-product') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.products') }} </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.product.update', ['id' => $data->id]) }}" method="post"
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
                                            placeholder="{{ __('words.title') }}" value="{{$data->translate($key)->title}}">
                                    </div>

                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.smalldesc') }} - {{ $lang }}</label>
                                        <input type="text" name="{{$key}}[smalldesc]" class="form-control"
                                            placeholder="{{ __('words.smalldesc') }}" value="{{$data->translate($key)->smalldesc}}">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.description') }}</label>
                                        <textarea name="{{$key}}[description]" class="form-control ckeditor" id="" cols="30" rows="10">{{$data->translate($key)->description}}</textarea>
                                    </div>

                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.keyword') }} - {{ $lang }}</label>
                                        <input type="text" name="{{$key}}[keyword]" class="form-control"
                                            placeholder="{{ __('words.keyword') }}" value="{{$data->translate($key)->keyword}}">
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-body">


                        <div class="form-group">
                            <label> {{ __('words.main-category') }}</label>

                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach ($datalist as $rs)
                                    <option value="{{ $rs->id }}"
                                        @if ($rs->id == $data->category_id) selected="selected" @endif>
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"> {{ __('words.image') }}</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
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
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
