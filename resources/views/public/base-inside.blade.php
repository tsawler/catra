@include('public.partials.top-of-page')

@include('public.partials.top-menu')

<div class="container">
    @if ($page_category_id  == 1)
        <ul id="children">
            @if(Request::segment(1) == "catra-operations")
                <li class="here first overview"><a href="/catra-operations">CATRA Operations</a></li>
            @else
                <li><a href="/catra-operations">CATRA Operations</a></li>
            @endif

            @if(Request::segment(1) == "history")
                <li class="here first overview"><a href="/history">History</a></li>
            @else
                <li><a href="/history">History</a></li>
            @endif

            @if(Request::segment(1) == "goals")
                <li class="here first overview"><a href="/goals">Goals</a></li>
            @else
                <li><a href="/goals">Goals</a></li>
            @endif

            @if(Request::segment(1) == "members")
                <li class="here first overview"><a href="/members">Members</a></li>
            @else
                <li><a href="/members">Members</a></li>
            @endif

            @if(Request::segment(1) == "epr-extended-producer-responsibility")
                <li class="here first overview"><a href="/epr-extended-producer-responsibility">EPR (Extended Producer Responsibility)</a></li>
            @else
                <li><a href="/epr-extended-producer-responsibility">EPR (Extended Producer Responsibility)</a></li>
            @endif

        </ul>
    @elseif ($page_category_id  == 2)
        <ul id="children">
            @if(Request::segment(1) == "national-data")
                <li class="here first overview"><a href="/national-data">National Data</a></li>
            @else
                <li><a href="/national-data">National Data</a></li>
            @endif

            @if(Request::segment(1) == "provincial-data")
                <li class="here first overview"><a href="/provincial-data">Provincial Data</a></li>
            @else
                <li><a href="/provincial-data">Provincial Data</a></li>
            @endif

            @if(Request::segment(1) == "tire-businesses")
                <li class="here first overview"><a href="/provincial-data">Tire Businesses</a></li>
            @else
                <li><a href="/provincial-data">Tire Businesses</a></li>
            @endif
        </ul>
    @endif

    @yield('content')
</div>

<div class="divide60"></div>



@include('public.partials.bottom-of-page')
