@extends('vcms5::public.base-inside')

@section('title')
    @include('vcms5::public.partials.edit-title')
@stop

@section('content')

    @foreach($news as $item)
        <div class="blog-post">
            <h2><a href="/news/{!! $item->slug !!}">{!! $item->title !!}</a></h2>

            @if ($item->image != null)
                <a href="#">
                    <div class="item-img-wrap">
                        <img src="/vendor/vcms5/news/{!! $item->image !!}" class="img-responsive" alt="">
                        <div class="">
                            <span></span>
                        </div>
                    </div>
                </a>
            @endif

            <ul class="list-inline post-detail">
                <li><i class="fa fa-calendar"></i> {!! $item->news_date !!}</li>
            </ul>

            <p>
                {!! str_limit($item->news_text, 200) !!}
            </p>

            <p><a href="/news/{!! $item->slug !!}" class="btn btn-theme-dark">{!! Lang::get('vcms5::vcms5.read_more') !!}</a></p>
        </div>
    @endforeach



@stop