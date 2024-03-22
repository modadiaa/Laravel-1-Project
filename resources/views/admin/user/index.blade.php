@extends('layouts.adminbase')

@section('title')
{{ __('words.users') }}
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <a href="{{ route('dashboard.user.create') }}" class="btn btn-block bg-gradient-info"
                            style="width: 200px">  {{ __('words.add-user') }}</a>
                    </div>

                    <div class="col-sm-6">
                        <form method="GET" action="{{ route('dashboard.user.index') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="البحث" value="{{ request()->search }}">
                                <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                </div>
                            </div>
                            </form>
                    </div>


                    <div class="col-sm-3">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.users') }}</li>
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
                                <h3 class="card-title">{{ __('words.users') }} </h3>
                            </div>
                            <div class="col-lg-6 text-right" >
                                <a  href="" class="btn btn-danger " id="deleteAllSelectedRecord">{{ __('words.allDelete') }}</a>
                            </div>
                       </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><input type="checkbox"   id="select_all_ids"  /></th>
                                <th style="width: 10px">Id</th>
                                <th>{{ __('words.title') }}</th>
                                <th>{{ __('words.email') }}</th>
                                <th>{{ __('words.status') }}</th>
                                <th style="width: 40px"> {{ __('words.edit') }}</th>
                                <th style="width: 40px"> {{ __('words.delete') }}</th>
                                <th style="width: 40px"> {{ __('words.show') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user )
                            <tr id="user_ids{{ $user->id }}">
                                <th><input type="checkbox" class="checkbox_ids" name="ids" value="{{ $user->id }}" id="" /></th>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
                                <td>{{  $user->status == null ? __('words.not-activated') : __('words.' . $user->status) }}</td>
                                <td><a href="{{ route('dashboard.user.edit', ['id' => $user->id]) }}"
                                        class="btn btn-block btn-info btn-sm">{{ __('words.edit') }}</a> </td>
                                <td><a href="{{ route('dashboard.user.destroy', ['id' => $user->id]) }}"
                                        class="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('{{ __('words.sure-delete') }}')">{{ __('words.delete') }}</a> </td>
                                <td><a href="{{ route('dashboard.user.show', ['id' => $user->id]) }}"
                                        class="btn btn-block btn-success btn-sm">{{ __('words.show') }}</a> </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$data->links()}}
                    </ul>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection


    @section('js')
    <script>
        $(function(e){
          $("#select_all_ids").click(function(){
             $('.checkbox_ids').prop('checked',$(this).prop('checked'));
          });
          $('#deleteAllSelectedRecord').click(function(e){
             e.preventDefault();
             var all_ids=[];
             $('input:checkbox[name=ids]:checked').each(function(){
                 all_ids.push($(this).val());
             });
             $.ajax({
                 url:"{{ route('dashboard.user.deleteall') }}",
                 type:"DELETE",
                 data:{
                     ids:all_ids,
                     _token:'{{ csrf_token() }}'
                 },
                 success:function(response){
                  $.each(all_ids,function(key,val){
                     $('#user_ids'+val).remove();
                  })
                 }
                 });
             });
          });
     </script>
     @endsection
