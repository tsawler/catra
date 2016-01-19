@extends('public.base-inside')

@section('breadcrumb')

@stop

@section('content')
    <div class="clearfix"></div>
    <div class="divide40"></div>
    @include('vcms5::public.partials.edit-title')
    @include('vcms5::public.partials.edit-region')
@stop

@section('bottom-js')
    <script>
        $("#yearpicker").change(function () {
            $(".table").addClass('hidden');
            $('#' + $("#yearpicker").val()).removeClass('hidden');
        });
    </script>
@stop