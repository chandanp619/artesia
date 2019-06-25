@if (!$is_tab_page)
    <aside class="sticky-tab">
        <a href="{{ $tab_link_url }}">{{ $text }}</a>
    </aside>
@endif