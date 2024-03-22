@extends('layouts.frontbase')

@section('title')
{{ $setting->title}}
@endsection

@section('description')
        {{ strip_tags($setting->description)}}
@endsection



@section('content')

                    @section('sidebar')
                        @include('home.slider')
                        @include('home.underslider')
                        @include('home.about')
                        @include('home.category')
                        @include('home.news')
                        @include('home.gallery')
                    @show
@endsection
