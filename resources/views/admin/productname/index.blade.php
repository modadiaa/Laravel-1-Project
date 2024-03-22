@extends('layouts.adminbase')

@section('title')
 {{ __('words.productname') }}
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('dashboard.productname.create') }}" class="btn btn-block bg-gradient-info"
                            style="width: 200px">  {{ __('words.add-productname') }}</a>

                    </div>


                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}"> {{ __('words.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('words.productname') }}</li>
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
                                <h3 class="card-title">{{ __('words.productname') }} </h3>
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
                                <th> {{ __('words.title') }}</th>
                                <th> {{ __('words.description') }}</th>
                                <th> {{ __('words.slug') }}</th>
                                <th style="width: 40px"> {{ __('words.edit') }}</th>
                                <th style="width: 40px"> {{ __('words.delete') }}</th>
                                <th style="width: 40px"> {{ __('words.show') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $productname )
                            <tr id="productname_ids{{ $productname->id }}">
                                <th><input type="checkbox" class="checkbox_ids" name="ids" value="{{ $productname->id }}" id="" /></th>
                                <td>{{ $productname->id }}</td>
                                <td>{{ $productname->title }} </td>
                                <td>{!! $productname->description !!} </td>
                                <td>{{ $productname->slug }} </td>

                                <td><a href="{{ route('dashboard.productname.edit', ['id' => $productname->id]) }}"
                                        class="btn btn-block btn-info btn-sm">{{ __('words.edit') }}</a> </td>
                                <td><a href="{{ route('dashboard.productname.destroy', ['id' => $productname->id]) }}"
                                        class="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('{{ __('words.sure-delete') }}')">{{ __('words.delete') }}</a> </td>
                                <td><a href="{{ route('dashboard.productname.show', ['id' => $productname->id]) }}"
                                        class="btn btn-block btn-success btn-sm">{{ __('words.show') }}</a> </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
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
                 url:"{{ route('dashboard.news.deleteall') }}",
                 type:"DELETE",
                 data:{
                     ids:all_ids,
                     _token:'{{ csrf_token() }}'
                 },
                 success:function(response){
                  $.each(all_ids,function(key,val){
                     $('#news_ids'+val).remove();
                  })
                 }
                 });
             });
          });
     </script>
    @endsection
