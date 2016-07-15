@extends('public.base-inside')

@section('title')
    @include('vcms5::public.partials.edit-title')
@stop

@section('content')

    <div class="divide40"></div>
    <h3 class="red">{!! Lang::get('common.news') !!}</h3>
    <div class="row">
        @foreach($news as $item)
            @if((Session::has('lang')) && (Session::get('lang') == 'fr'))
                <div class="col-md-4">
                    <div class="thumbnail" style="min-height: 475px">
                        <img src="/vendor/vcms5/news/thumbs/{!! $item->image !!}" class="img img-responive" alt="Soccer turf">
                        <div class="caption">
                            <h3 class="text-center">{!! $item->title_fr !!}</h3>
                            <p class="text-center">
                                <small>{!! $item->news_date !!}</small>
                            </p>
                            <p class="text-center"><a href="/news/{!! $item->slug !!}" class="btn btn-primary" role="button">{!! Lang::get('common.learn_more') !!}</a></p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="/vendor/vcms5/news/thumbs/{!! $item->image !!}" class="img img-responive" alt="Soccer turf">
                        <div class="caption">
                            <h3 class="text-center">{!! $item->title !!}</h3>
                            <p class="text-center">
                                <small>{!! $item->news_date !!}</small>
                            </p>
                            <p class="text-center"><a href="/news/{!! $item->slug !!}" class="btn btn-primary" role="button">{!! Lang::get('common.learn_more') !!}</a></p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    {!! $news->render() !!}


@stop