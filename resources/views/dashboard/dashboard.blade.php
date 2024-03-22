<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title")</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield("head")
</head>
<body class="hold-transition sidebar-mini">
@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('words.dashboard') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">{{ __('words.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('words.dashboard') }}</li>
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

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.user') }}</p>
                                            <h4>{{  \App\Models\User::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.slider') }}</p>
                                            <h4>{{  \App\Models\Slider::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.underslider') }}</p>
                                            <h4>{{  \App\Models\Underslider::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.about') }}</p>
                                            <h4>{{  \App\Models\About::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.categories') }}</p>
                                            <h4>{{  \App\Models\Category::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.products') }}</p>
                                            <h4>{{  \App\Models\Product::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.gallery') }}</p>
                                            <h4>{{  \App\Models\Gallery::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.news') }}</p>
                                            <h4>{{  \App\Models\News::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 mb-5 ">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <span class="text-danger">
                                                <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="float-right text-right">
                                            <p class="card-text text-dark">{{ __('words.contact') }}</p>
                                            <h4>{{  \App\Models\Contact::count() }}</h4>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<@include("admin.footer")
@yield('foot')

</body>
</html>
