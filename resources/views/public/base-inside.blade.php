@include('public.partials.top-of-page')

@include('public.partials.top-menu')

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">

            @if ($page_category_id  == 1)
                <ul id="children" class="hidden-xs">
                    @if(Request::segment(1) == "catra-operations")
                        <li class="here first overview"><a href="/catra-operations">{!! \Illuminate\Support\Facades\Lang::get('common.catra_operations') !!}</a></li>
                    @else
                        <li><a href="/catra-operations">{!! \Illuminate\Support\Facades\Lang::get('common.catra_operations') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "history")
                        <li class="here first overview"><a href="/history">{!! \Illuminate\Support\Facades\Lang::get('common.history') !!}</a></li>
                    @else
                        <li><a href="/history">{!! \Illuminate\Support\Facades\Lang::get('common.history') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "goals")
                        <li class="here first overview"><a href="/goals">{!! \Illuminate\Support\Facades\Lang::get('common.goals') !!}</a></li>
                    @else
                        <li><a href="/goals">{!! \Illuminate\Support\Facades\Lang::get('common.goals') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "members")
                        <li class="here first overview"><a href="/members">{!! \Illuminate\Support\Facades\Lang::get('common.members') !!}</a></li>
                    @else
                        <li><a href="/members">{!! \Illuminate\Support\Facades\Lang::get('common.members') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "epr-extended-producer-responsibility")
                        <li class="here first overview"><a href="/epr-extended-producer-responsibility">{!! \Illuminate\Support\Facades\Lang::get('common.epr') !!}</a></li>
                    @else
                        <li><a href="/epr-extended-producer-responsibility">{!! \Illuminate\Support\Facades\Lang::get('common.epr') !!}</a></li>
                    @endif

                </ul>
            @elseif ($page_category_id  == 2)
                <ul id="children" class="hidden-xs">
                    @if(Request::segment(1) == "national-data")
                        <li class="here first overview"><a href="/national-data">{!! \Illuminate\Support\Facades\Lang::get('common.national_data') !!}</a></li>
                    @else
                        <li><a href="/national-data">{!! \Illuminate\Support\Facades\Lang::get('common.national_data') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "provincial-data")
                        <li class="here first overview"><a href="/provincial-data">{!! \Illuminate\Support\Facades\Lang::get('common.provincial_data') !!}</a></li>
                    @else
                        <li><a href="/provincial-data">{!! \Illuminate\Support\Facades\Lang::get('common.provincial_data') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "tire-businesses")
                        <li class="here first overview"><a href="/tire-businesses">{!! \Illuminate\Support\Facades\Lang::get('common.tire_businesses') !!}</a></li>
                    @else
                        <li><a href="/tire-businesses">{!! \Illuminate\Support\Facades\Lang::get('common.tire_businesses') !!}</a></li>
                    @endif
                </ul>
            @elseif($page_category_id == 3)
                <ul id="children">
                    @if(Request::segment(1) == "research")
                        <li class="here first overview"><a href="/research">{!! \Illuminate\Support\Facades\Lang::get('common.research') !!}</a></li>
                    @else
                        <li><a href="/research">{!! \Illuminate\Support\Facades\Lang::get('common.research') !!}</a></li>
                    @endif

                    @if(Request::segment(1) == "publications")
                        <li class="here first overview"><a href="/publications">{!! \Illuminate\Support\Facades\Lang::get('common.publications') !!}</a></li>
                    @else
                        <li><a href="/publications">{!! \Illuminate\Support\Facades\Lang::get('common.publications') !!}</a></li>
                    @endif
                </ul>
            @endif

            @yield('content')

        </div>
        <div class="col-md-1"></div>
    </div>

</div>

<div class="divide60"></div>


@include('public.partials.bottom-of-page')
