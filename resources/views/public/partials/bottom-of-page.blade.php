<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/logo-en.png" class="img img-responsive">
            </div>
            <div class="col-md-8">
                <div class="alert alert-info fade in margin-bottom-40 fact">
                    <p>
                        <i class="fa fa-info-circle"></i> <strong>Did You Know:</strong> CATRA changes host provinces every 2 years. Ontario is the current host for 2015.
                        <br><br>
                        <a class="btn btn-info" href="/catra-operations">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><small>Copyright &copy; {!! date("Y") !!} CATRA. All rights reserved.</small></p>
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


    });

    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });

</script>

@yield('bottom-js')
</body>
</html>