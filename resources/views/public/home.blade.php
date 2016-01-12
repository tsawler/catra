<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CATRA - Canadian Association of Tire Recycling Agencies</title>

    <link href="/vendor/vcms5/public-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/vcms5/public-assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/vendor/vcms5/public-assets/css/style-red.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/vendor/vcms5/public-assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <!-- custom css -->
    @include("vcms5::public.partials.vcms-css")
    <link href="/css/custom.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>

<div id="header-top" class="hidden-xs">
    <div class="container">
        <div class="top-bar">
            <div class="pull-left sample-1right">
                @include('vcms5::public.partials.language-menu')
            </div>
            <div class="pull-right">
                <ul class="list-inline top-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


@include('public.partials.top-menu')


<div id="carousel-slider" class="carousel slide carousel-fade hidden-xs" data-pause="hover" data-ride="carousel"
     data-interval="4500">

    <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/img/slider/slide-1.jpg" alt="Slide1">
            <div class="container">

            </div>
        </div>
        <div class="item">
            <img src="/img/slider/slide-2.jpg" alt="Slide2">
            <div class="container">

            </div>
        </div>
        <div class="item">
            <img src="/img/slider/slide-3.jpg" alt="Slide3">
            <div class="container">

            </div>
        </div>
    </div>
</div>

<div class="divide40"></div>

<div class="container">
    @if ((Auth::user()) && (Auth::user()->hasRole('pages')))
        <h4>
            <article style='width: 100%; display: none'>
                <span id="editablecontenttitle" class="editablecontenttitle">{!! $page_title or ' ' !!}</span>
            </article>
        </h4>
    @else
        <h4>{!! $page_title or ' ' !!}</h4>
    @endif
    @include('vcms5::public.partials.edit-region')
</div>

<div class="divide60"></div>

<footer id="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>{!! Lang::get('vcms5::vcms5.about_us') !!}</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                    </p>
                    <ul class="list-inline social-1">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>{!! Lang::get('vcms5::vcms5.contact_us') !!}</h3>

                    <ul class="list-unstyled contact">
                        <li><p><strong><i class="fa fa-fw fa-map-marker"></i> {!! Lang::get('vcms5::vcms5.address') !!}:</strong> Some Street</p></li>
                        <li><p><strong><i class="fa fa-fw fa-envelope"></i> {!! Lang::get('vcms5::vcms5.email') !!}:</strong> <a href="#">info@sample.com</a></p></li>
                        <li> <p><strong><i class="fa fa-fw fa-phone"></i> {!! Lang::get('vcms5::vcms5.phone') !!}:</strong> +1 506 555-1212</p></li>
                        <li> <p><strong><i class="fa fa-fw fa-print"></i> {!! Lang::get('vcms5::vcms5.fax') !!}</strong> 1 800 555 1212</p></li>
                    </ul>
                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">

                </div>
            </div><!--footer col-->
            <div class="col-md-3 col-sm-6 margin30">
                <div class="footer-col">
                    <h3>{!! Lang::get('vcms5::vcms5.newsletter') !!}</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam,
                    </p>
                    <form role="form" class="subscribe-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                        </div>
                    </form>
                </div>
            </div><!--footer col-->

        </div>
    </div>
</footer>

<script src="/vendor/vcms5/public-assets/js/jquery.min.js"></script>
<script src="/vendor/vcms5/public-assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/vcms5/public-assets/js/jquery.sticky.js"></script>
<script src="/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/jquery.vmap.canada.js"></script>

@include("vcms5::public.partials.vcms-js")

<script>
    $(document).ready(function () {
        @if (Session::get('lang') == 'fr')
        bootbox.setDefaults({
            locale: "fr"
        });
        @endif
        @if (Session::get('lang') == 'es')
        bootbox.setDefaults({
            locale: "es"
        });
        @endif

        $('#map').vectorMap({
            map: 'ca_lcc_en',
            backgroundColor: "#f2f2f0",
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: '#404041'
                },
                hover: {
                    fill: "#c22426",
                    "fill-opacity": 1
                },
                selected: {
                    fill: "#c22426"
                }
            },
            onRegionClick: function(element, code, region)
            {
                window.location = '/en/programs/provincial-data/?' + code.toUpperCase();
            }
        });
    });

</script>

@yield('bottom-js')
</body>
</html>


