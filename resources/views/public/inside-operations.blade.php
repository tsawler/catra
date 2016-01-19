@extends('public.base-inside')

@section('content')
    <ul id="children">
        @if(Request::segment(1) == "catra-operations")
            <li class="here first overview"><a href="/catra-operations">CATRA Operations</a></li>
        @else
            <li><a href="/catra-operations">CATRA Operations</a></li>
        @endif

        @if(Request::segment(1) == "history")
            <li class="here first overview"><a href="/history">History</a></li>
        @else
            <li><a href="/history">History</a></li>
        @endif

        @if(Request::segment(1) == "goals")
            <li class="here first overview"><a href="/goals">Goals</a></li>
        @else
            <li><a href="/goals">Goals</a></li>
        @endif

        @if(Request::segment(1) == "members")
            <li class="here first overview"><a href="/members">Members</a></li>
        @else
            <li><a href="/members">Members</a></li>
        @endif

        @if(Request::segment(1) == "epr-extended-producer-responsibility")
            <li class="here first overview"><a href="/epr-extended-producer-responsibility">EPR (Extended Producer Responsibility)</a></li>
        @else
            <li><a href="/epr-extended-producer-responsibility">EPR (Extended Producer Responsibility)</a></li>
        @endif

    </ul>
    <div class="clearfix"></div>
    <div class="divide40"></div>
    @include('vcms5::public.partials.edit-title')
    @include('vcms5::public.partials.edit-region')
@stop

@section('bg-class') breadcrumb-1 @stop

