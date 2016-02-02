@extends('public.base-inside')

@section('browser-title')
    {!! \Illuminate\Support\Facades\Lang::get('common.catra') !!}
    {!! $page_title !!}
@stop

@section('content')
    <p>&nbsp;</p>
    <div class="col-md-12">
        <!-- Form -->
        {!! Form::open(array(
        'url' => '/search',
        'role' => 'form',
        'name' => 'bookform',
        'id' => 'bookform',
        'method' => 'post',
        'class' => 'form-inline'
        ))
        !!}
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount"></label>
            <div class="input-group">
                <input type="text" value='{!! $searchterm !!}' class="form-control" name="q" placeholder="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        {!! Form::close() !!}
        <br/>
    </div>
    <ul class="list-unstyled">
        @foreach($results as $item)

            <li>
                <h4><a href="/{!! $item->slug !!}">{!! $item->page_title !!}</a></h4>

                <p>
                    {!! str_limit(strip_tags($item->page_content, 200)) !!}
                </p>
            </li>

        @endforeach
    </ul>
@stop