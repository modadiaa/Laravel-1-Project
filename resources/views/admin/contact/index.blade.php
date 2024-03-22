@extends('layouts.adminbase')

@section('title')
 {{ __('words.contact') }}
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('dashboard.contact.create') }}" class="btn btn-block bg-gradient-info"
                            style="width: 200px">  {{ __('words.add-contact') }}</a>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.contact') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="card-title">{{ __('words.contact') }} </h3>
                            </div>
                       </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th> {{ __('words.title') }}</th>
                                <th> {{ __('words.phone') }}</th>
                                <th> {{ __('words.email1') }}</th>
                                <th> {{ __('words.location') }}</th>
                                <th style="width: 40px"> {{ __('words.edit') }}</th>
                                <th style="width: 40px"> {{ __('words.show') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $contact )
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->title }}</td>
                                <td>{{ $contact->phone1 }} </td>
                                <td>{{ $contact->email1 }} </td>
                                <td>{!! $contact->location !!} </td>
                                <td><a href="{{ route('dashboard.contact.edit', ['id' => $contact->id]) }}"
                                        class="btn btn-block btn-info btn-sm">{{ __('words.edit') }}</a> </td>
                                {{-- <td><a href="{{ route('dashboard.contact.destroy', ['id' => $contact->id]) }}"
                                        class="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('{{ __('words.sure-delete') }}')">{{ __('words.delete') }}</a> </td> --}}
                                <td><a href="{{ route('dashboard.contact.show', ['id' => $contact->id]) }}"
                                        class="btn btn-block btn-success btn-sm">{{ __('words.show') }}</a> </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">

                    </ul>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
