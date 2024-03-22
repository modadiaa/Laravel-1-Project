@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.add-product') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.add-product') }} </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.products') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data" >
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

                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.slug') }} </label>
                                        <input type="text" name="{{ $key }}[slug]" class="form-control"
                                            placeholder="{{ __('words.slug') }}"  >
                                    </div>

                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.smalldesc') }} </label>
                                        <input type="text" name="{{ $key }}[smalldesc]" class="form-control"
                                            placeholder="{{ __('words.smalldesc') }}">
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.description') }}</label>
                                        <textarea name="{{ $key }}[description]" class="form-control ckeditor" id="" cols="50" rows="10"></textarea>
                                    </div>

                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.keyword') }} </label>
                                        <input type="text" name="{{ $key }}[keyword]" class="form-control"
                                            placeholder="{{ __('words.keyword') }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr><hr><hr>

                        <div class="form-group">
                            <label>{{ __('words.parent-category') }}</label>

                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach ($data as $rs)
                                    <option value="{{ $rs->id }}">
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->subtitle) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">{{ __('words.image') }}</label>
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
                        <button type="submit" class="btn btn-primary">{{ __('words.save') }}</button>
                    </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

