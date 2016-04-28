@extends('public.base-inside')

@section('browser-title')
    {!! \Illuminate\Support\Facades\Lang::get('common.catra') !!}
    {!! $page_title !!}
@stop

@section('css')
    <style>
        .news-image {
            width: 100%;
            height: 300px;
            background: url('/vendor/vcms5/news/{!! $news_image !!}');
            /*background-position: center center;*/
            background-position: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .news-image h2 {
            -webkit-text-stroke: 1px black;
            color: white;
            text-shadow: 2px 2px 0 #000,
            -1px -1px 0 #000,
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;
            vertical-align: middle;
        }
    </style>
@stop

@section('image_banner')
    <div class="news-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="vertical-align: middle; height: 300px;">
                    <h2 style="position: relative; top: 40%">{!! $page_title !!}</h2>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="blog-post">

        <div class="clearfix"></div>
        <div class="divide40"></div>
        @include('vcms5::public.partials.edit-title')
        @include('vcms5::public.partials.edit-region')
    </div>
@stop

@section('bottom-js')
    <script>
        $(window).stellar({
            horizontalScrolling: false,
            responsive: true
        });
    </script>
@stop
