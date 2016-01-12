<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CATRA - Canadian Association of Tire Recycling Agencies</title>

    <!-- Bootstrap -->
    <link href="/vendor/vcms5/public-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <link href="/vendor/vcms5/public-assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/vendor/vcms5/public-assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- flex slider css -->
    <link href="/vendor/vcms5/public-assets/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="/vendor/vcms5/css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!--google fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <!--owl carousel css-->
    <link href="/vendor/vcms5/public-assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/vendor/vcms5/public-assets/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--mega menu -->
    <link href="/vendor/vcms5/public-assets/css/yamm.css" rel="stylesheet" type="text/css">
    <!--popups css-->
    <link href="/vendor/vcms5/public-assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
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

<div class="divide80"></div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="red">MISSION &amp; VISION</h3>
            <p>
                <em>The membership of CATRA (Canadian Association of Tire Recycling Agencies) is made up of tire recycling agencies in the provinces and territories of Canada. The association’s mission is to continually enhance the effectiveness of scrap tire diversion and recycling across Canada thought the sharing of information, expertise and resources. CATRA's vision is to be the reference authority for scrap tire management in Canada.</em>
            </p>
            <p><a href="#">Learn More About Catra</a></p>
        </div>
        <div class="col-md-6">
            <h3 class="red">RECYCLING IN YOUR REGION</h3>
            <div id="map"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>

<div class="container">
    @include('vcms5::public.partials.edit-title')
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
</footer><!--default footer end here-->
<!--scripts and plugins -->
<!--must need plugin jquery-->
<script src="/vendor/vcms5/public-assets/js/jquery.min.js"></script>
<!--bootstrap js plugin-->
<script src="/vendor/vcms5/public-assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<!--
<script src="/vendor/vcms5/public-assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
-->
<!--sticky header-->
<script type="text/javascript" src="/vendor/vcms5/public-assets/js/jquery.sticky.js"></script>
<!--flex slider plugin-->
<script src="/vendor/vcms5/public-assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
<!--parallax background plugin-->
<script src="/vendor/vcms5/public-assets/js/jquery.stellar.min.js" type="text/javascript"></script>
<!--very easy to use portfolio filter plugin -->
<script src="/vendor/vcms5/public-assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<!-- waypoint -->
<!--
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
-->
<!--on scroll animation-->
<script src="/vendor/vcms5/public-assets/js/wow.min.js" type="text/javascript"></script>
<!--owl carousel slider-->
<script src="/vendor/vcms5/public-assets/js/owl.carousel.min.js" type="text/javascript"></script>
<!--popup js-->
<script src="/vendor/vcms5/public-assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!--you tube player-->
<!-- <script src="/vendor/vcms5/public-assets/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script> -->
<!--text rotator-->
<script src="/vendor/vcms5/public-assets/js/jquery.simple-text-rotator.js" type="text/javascript"></script>
<!--customizable plugin edit according to your needs-->
<script src="/vendor/vcms5/public-assets/js/custom.js" type="text/javascript"></script>
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


