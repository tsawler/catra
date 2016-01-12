@extends('vcms5::public.base-inside')

@section('title')
    @include('vcms5::public.partials.edit-title')
@stop

@section('content')
    
        <div class="blog-post">
            <h2>{!! $news_title !!}</h2>

            @if ($news_image != null)
                <div class="item-img-wrap">
                    <img src="/vendor/vcms5/news/{!! $news_image !!}" class="img-responsive" alt="">
                    <div class="">
                        <span></span>
                    </div>
                </div>
            @endif

            <ul class="list-inline post-detail">
                <li><i class="fa fa-calendar"></i> {!! $news_date !!}</li>
            </ul>

            <p>
                {!! $news_text !!}
            </p>

        </div>
@stop