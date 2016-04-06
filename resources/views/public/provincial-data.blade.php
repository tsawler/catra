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
                    @if(\Illuminate\Support\Facades\Input::has('region'))
            var regioncode = getUrlParameter('region')
            var exploded = regioncode.split("-");
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
                }
            });

            $('#map').vectorMap({
                map: 'ca_lcc_en',
                backgroundColor: "#f2f2f0",
                selectedRegions: regioncode,
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
            @else
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

            var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);

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
                },
                onRegionLabelShow: function (e, code, region) {
                    if (iOs) {
                        e.preventDefault();
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
                }
            });
            @endif
        });

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
    </script>
@stop
