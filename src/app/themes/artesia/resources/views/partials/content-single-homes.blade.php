@include('components.banner', $component_banner)
{{--
<a href="{{ $back_url }}" class="button back-button">See All Homes</a>
@include('components.content-block')
@include('components.home-details', $component_home_details)
@include('components.gallery', $component_gallery)
@include('components.secondary-content-block', $component_secondary_content_block)
@include('components.panel-menu', $component_panel_menu)
@include('components.full-width-panel', $component_full_width_panel)
--}}
@include('components.home-details')