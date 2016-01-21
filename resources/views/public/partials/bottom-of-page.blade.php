<footer id="footer">
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
<script src="/vendor/vcms5/public-assets/js/jquery.stellar.min.js"></script>
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