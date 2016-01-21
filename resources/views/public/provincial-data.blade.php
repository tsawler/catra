@extends('public.base-inside')

@section('browser-title')
    {!! \Illuminate\Support\Facades\Lang::get('common.catra') !!}
@stop

@section('content')
    <div class="clearfix"></div>
    <div class="divide40"></div>
    @include('vcms5::public.partials.edit-title')
    @include('vcms5::public.partials.edit-region')

    <hr>

    <div class="row">
        <div class="col-md-6">
            <div id="map"></div>
        </div>

        <div class="col-md-6" id="region">


        </div>
    </div>

@stop

@section('bg-class') breadcrumb-1 @stop

@section('bottom-js')
    <input type="hidden" name="current_province" id="current_province" value="ON">
    <script>

        $(document).ready(function () {

            // set on as default

            $.ajax({
                url: '/province',
                type: 'get',
                data: 'province=ON',
                dataType: 'html',
                success: function (theresult) {
                    $("#region").html(theresult);
                    return false;
                },
                error: function () {
                    alert('error');
                }
            });

            $('#map').vectorMap({
                map: 'ca_lcc_en',
                backgroundColor: "#f2f2f0",
                selectedRegions: 'CA-ON',
                regionsSelectable: true,
                regionsSelectableOne: true,
                zoomOnScroll: false,
                regionStyle: {
                    initial: {
                        fill: '#404041'
                    },
                    hover: {
                        fill: "#000000",
                        "fill-opacity": 0.9
                    },
                    selected: {
                        fill: "#c22426"
                    }
                },
                onRegionClick: function (element, code, region) {
                    var exploded = code.split("-");
                    var provincecode = exploded[1];
                    $.ajax({
                        url: '/province',
                        type: 'get',
                        data: 'province=' + provincecode,
                        dataType: 'html',
                        success: function (theresult) {
                            $("#region").html(theresult);
                            return false;
                        },
                        error: function () {
                            alert('error');
                        },
                        complete: function () {
                            $("#current_province").val(provincecode);
                        }
                    });
                }
            });
        });


    </script>
@stop