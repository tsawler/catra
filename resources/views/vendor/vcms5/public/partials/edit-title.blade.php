@if ((Auth::user()) && (Auth::user()->hasRole('pages')))
    <h3 class="red">
        <article style='width: 100%; display: inline'>
            <span id="editablecontenttitle" class="editablecontenttitle">{!! $page_title or ' ' !!}</span>
        </article>
    </h3>
@else
    <h3 class="red">{!! $page_title or ' ' !!}</h3>
@endif