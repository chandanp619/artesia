<!doctype html>
<html {!! $language_attributes !!}>
  @include('partials.head')
  <body class="{{ $body_class }}">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF3LK3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {!! $svg_spritesheet !!}
    @include('partials.header')
    <main class="main">
      @yield('content')
    </main>
    @include('partials.sticky-tab', $component_sticky_tab)
    @include('partials.footer')
    {!! $wp_footer !!}d
  </body>
</html>