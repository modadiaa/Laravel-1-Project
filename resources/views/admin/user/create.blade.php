@extends('layouts.adminbase')

@section('title', 'Add User')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('words.add-category') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.add-user') }} </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('words.users') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('dashboard.user.store') }}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.title') }} </label>
                            <input type="text" name="name" class="form-control"
                                placeholder="{{ __('words.title') }}" required>
                        </div>

                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.email') }} </label>
                            <input type="email" name="email" class="form-control"
                                placeholder="{{ __('words.email') }}" required>
                        </div>
                        <div class="form-group mt-3 col-md-12">
                            <label>{{ __('words.password') }} </label>
                            <input type="password" name="password" class="form-control"
                                placeholder="{{ __('words.password') }}" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label>{{ __('words.status') }}</label>
                            <select name="status" id="" class="form-control">

                                <option value="admin"> {{ __('words.admin') }}</option>
                                <option value="user" > {{ __('words.user') }}</option>
                                <option value="">  {{ __('words.null') }}</option>
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
