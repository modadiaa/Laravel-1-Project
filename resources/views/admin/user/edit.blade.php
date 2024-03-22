@extends('layouts.adminbase')

@section('title', 'Edit User : ' .  $data->name)

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.edit-user') }} : {{ $data->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active"> {{ __('words.edit') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> {{ __('words.users') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.user.update', ['id' => $data->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.user') }} </label>
                            <input type="text" name="name" class="form-control"
                                 value="{{ $data->name }}">
                        </div>

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.email') }} </label>
                            <input type="email" name="email" class="form-control"
                            value="{{ $data->email }}">
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.password') }} </label>
                            <input type="password" name="password" class="form-control"
                                 value="{{ $data->password }}">
                        </div>

                        <div class="form-group col-md-12">
                            <label>{{ __('words.status') }}</label>
                            <select name="status" id="" class="form-control">

                                <option value="admin" @if ($data->status == 'admin')
                                    selected
                                @endif> {{ __('words.admin') }}</option>
                                <option value="user" @if ($data->status == 'user')
                                    selected
                                @endif> {{ __('words.user') }}</option>
                                <option value="" @if ($data->status == '')
                                    selected
                                @endif>  {{ __('words.not-activated') }}</option>
                            </select>

                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('words.update-data') }} </button>
                    </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
