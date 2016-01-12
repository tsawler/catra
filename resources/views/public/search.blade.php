@extends('vcms5::public.base-inside')

@section('bg-class') breadcrumb-1 @stop


@section('content')
    <ul class="list-unstyled">
        @foreach($results as $item)

            <li>
                <h4><a href="/{!! $item->slug !!}">{!! $item->page_title !!}</a></h4>

                <p>
                    {!! str_limit($item->page_content, 200) !!}
                </p>
            </li>

        @endforeach
    </ul>
@stop