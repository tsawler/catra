<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! \Illuminate\Support\Facades\Lang::get('common.catra') !!} -
        {!! \Illuminate\Support\Facades\Lang::get('common.title_blurb') !!}</title>

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

<div id="header-top" class="">
    <div class="container">
        <div class="top-bar">
            <div class="pull-left sample-1right">
                @include('vcms5::public.partials.language-menu')
            </div>
            <div class="pull-right hidden-xs">
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
            <img src="/img/slider/{!! Lang::get('common.slide-1') !!}" alt="Slide1">
            <div class="container">

            </div>
        </div>
        <div class="item">
            <img src="/img/slider/{!! Lang::get('common.slide-2') !!}" alt="Slide2">
            <div class="container">

            </div>
        </div>
        <div class="item">
            <img src="/img/slider/{!! Lang::get('common.slide-3') !!}" alt="Slide3">
            <div class="container">

            </div>
        </div>
    </div>
</div>

<div class="divide40"></div>

<div class="container">

    <div class="row">
        <div class="col-md-1">
            @if ((Auth::user()) && (Auth::user()->hasRole('pages')))
                <h4 class="hidden">
                    <article style='width: 100%; display: none'>
                        <span id="editablecontenttitle" class="editablecontenttitle">{!! $page_title or ' ' !!}</span>
                    </article>
                </h4>
            @else
                <h4 class="hidden">{!! $page_title or ' ' !!}</h4>
            @endif
        </div>

        <div class="col-md-5">

            @if(Auth::check())
                @if(Auth::user()->access_level == 3)
                    {!! Form::open(array('url' => '/admin/page/savefragment', 'id' => 'savefrag1', 'name' => 'savefrag1')) !!}
                        <h3 class="red hidden"><span class="editablecontenttitle" id="thetitle1">{!! $fragment_title !!}</span></h3>
                        <article class="editablefragment" id="f1" data-id="1">
                            {!! $fragment_text !!}
                        </article>
                        <article class="admin-hidden">
                            <a class="btn btn-primary" href="javascript:void(0)" onclick="saveEditedFragment(1)">Save</a>
                            <a class="btn btn-info" href="javascript:void(0)" onclick="turnOffEditing()">Cancel</a>
                            &nbsp;&nbsp;&nbsp;
                        </article>
                        <input type="hidden" name="fid" value="1">
                        <input type="hidden" name="thedata" id="thedata1">
                        <input type="hidden" name="thetitle" id="thetitledata1">
                        {!! Form::close() !!}
                    <p>&nbsp;</p>
                @endif
            @endif

            @if(Auth::check())
                @if(Auth::user()->access_level == 1)
                        <h3 class="red hidden">{!! $fragment_title !!}</h3>
                        {!! $fragment_text !!}
                    <p>&nbsp;</p>
                @endif
            @endif

            @if(! Auth::check())
                    <h3 class="red hidden">{!! $fragment_title !!}</h3>
                    {!! $fragment_text !!}
                <p>&nbsp;</p>
            @endif


        </div>
        <div class="col-md-5">
            <h3 class="red">{{ Lang::get('home.in_your_region') }}</h3>
            <div id="map"></div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            @include('vcms5::public.partials.edit-region')
        </div>
        <div class="col-md-1"></div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="red">News</h1>
            <div class="row">
            @foreach($news as $item)
                    @if((Session::has('lang')) && (Session::get('lang') == 'fr'))
                    <div class="col-md-4">
                        <div class="thumbnail" style="min-height: 475px">
                            <img src="/vendor/vcms5/news/thumbs/{!! $item->image !!}" class="img img-responive" alt="Soccer turf">
                            <div class="caption">
                                <h3 class="text-center">{!! $item->title_fr !!}</h3>
                                <p class="text-center">
                                    <small>{!! $item->news_date !!}</small>
                                </p>
                                <p class="text-center"><a href="/news/{!! $item->slug !!}" class="btn btn-primary" role="button">{!! Lang::get('common.learn_more') !!}</a></p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="/vendor/vcms5/news/thumbs/{!! $item->image !!}" class="img img-responive" alt="Soccer turf">
                            <div class="caption">
                                <h3 class="text-center">{!! $item->title !!}</h3>
                                <p class="text-center">
                                    <small>{!! $item->news_date !!}</small>
                                </p>
                                <p class="text-center"><a href="/news/{!! $item->slug !!}" class="btn btn-primary" role="button">{!! Lang::get('common.learn_more') !!}</a></p>
                            </div>
                        </div>
                    </div>
                    @endif
            @endforeach
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

<div class="divide20"></div>

<foo<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center larger-text">
                    <?php
                    $results = \App\DidYouKnow::orderByRaw("RAND()")->limit(1)->get();
                    foreach($results as $item){
                        if ((\Illuminate\Support\Facades\Session::has('lang')) &&
                                (\Illuminate\Support\Facades\Session::get('lang') == 'fr')) {
                            $blurb = $item->item_text_fr;
                        } else {
                            $blurb = $item->item_text_en;
                        }
                    }
                    ?>
                    <i class="fa fa-info-circle"></i> <strong>{!! \Illuminate\Support\Facades\Lang::get('common.did_you_know') !!}:</strong> {!! strip_tags($blurb) !!}
                    <br><br>
                    <a class="btn btn-info" href="/catra-operations">{!! \Illuminate\Support\Facades\Lang::get('common.learn_more') !!}</a>
                </div>
                <div class="col-md-1"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><small>Copyright &copy; {!! date("Y") !!} {!! \Illuminate\Support\Facades\Lang::get('common.catra') !!}.
                            {!! \Illuminate\Support\Facades\Lang::get('common.all_rights_reserved') !!}.</small></p>
                </div>
            </div>
        </div>
    </footer>

<div class="divide20"></div>

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
            onRegionClick: function (element, code, region) {
                window.location = '/provincial-data?region=' + code.toUpperCase();
            }
        });
    });

    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });

</script>

@yield('bottom-js')
</body>
</html>


