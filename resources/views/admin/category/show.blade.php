@extends('layouts.adminbase')

@section('title', 'Show Category :' . $category->title)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <a href="{{ route('dashboard.category.edit', ['id' => $category->id]) }}"
                            class="btn btn-block bg-gradient-info" style="width: 200px">{{ __('words.edit') }}</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('dashboard.category.destroy', ['id' => $category->id]) }}"
                            onclick="return confirm('{{ __('words.sure-delete') }}')" class="btn btn-block bg-gradient-danger"
                            style="width: 200px">{{ __('words.delete') }}</a>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.show-category') }}</li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('words.detail-data') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 150px">Id</th>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.title') }}</th>
                            <td>{{ $category->title }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.subtitle') }}</th>
                            <td>{{ $category->subtitle }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.description') }}</th>
                            <td>{!! $category->description !!}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.keyword') }}</th>
                            <td>{{ $category->keyword }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.image') }}</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>Cerated Date</th>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{ $category->updated_at }}</td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
