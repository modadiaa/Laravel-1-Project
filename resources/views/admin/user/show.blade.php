@extends('layouts.adminbase')

@section('title', 'Show User : ' . $data->name)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <a href="{{ route('dashboard.user.edit', ['id' => $data->id]) }}"
                            class="btn btn-block bg-gradient-info" style="width: 200px">{{ __('words.edit-user') }}</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('dashboard.user.destroy', ['id' => $data->id]) }}"
                            onclick="return confirm('{{ __('words.sure-delete') }}')" class="btn btn-block bg-gradient-danger"
                            style="width: 200px">{{ __('words.delete') }}</a>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active"> {{ __('words.show-user') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.detail-data-user') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 150px">Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.title') }}</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('words.email') }}</th>
                            <td>{{ $data->email }}</td>
                        </tr>

                        <tr>
                            <th>{{ __('words.status') }}</th>
                            <td>{{ $data->status }}</td>
                        </tr>
                        <tr>
                            <th>Cerated Date</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{ $data->updated_at }}</td>
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
