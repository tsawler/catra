<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('browser-title')
    </title>

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
    @yield('css')
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
