<section {!! 
  App::bgAttributes(
    $image_id,
    [
      'class' => 'full-width-panel',
      'wp_size' => 'full',
      'sizes' => '100vw'
    ]
  ) !!} >
  <div class="wrapper">
    <div class="content">
      <h2>{{ $title }}</h2>
      {!! $panel_body !!}
      @if (count(array_filter($button)))
        @include('partials.button', $button)
      @endif
    </div>
  </div>
</section>
