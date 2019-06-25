<section {!! App::bgAttributes(
  $background_image_id,
  [
    'class' => 'full-width-panel gallery image',
    'src_size' => 'feature-small',
    'srcset_size' => 'full',
    'sizes' => '100vw'
  ]
) !!}>
  <div class="wrapper">
    <div class="content">
      <h2>{{ $title }}</h2>
      {!! $body !!}
      <button class="button gallery-open" data-dynamic-el='{!! $gallery_image_json !!}'>Gallery</button>
    </div>
  </div>
</section>
