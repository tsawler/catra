@include('public.partials.top-of-page')

@include('public.partials.top-menu')

<div class="container">
    @yield('content')
</div>

<div class="divide60"></div>

@include('public.partials.bottom-of-page')
