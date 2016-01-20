@extends('public.base-inside')

@section('browser-title')
    {!! \Illuminate\Support\Facades\Lang::get('common.catra') !!}
    {!! $page_title !!}
@stop

@section('content')
    <div class="clearfix"></div>
    <div class="divide40"></div>
    @include('vcms5::public.partials.edit-title')
    @include('vcms5::public.partials.edit-region')
@stop

