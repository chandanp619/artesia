<header class="banner">
  {!! App::imageMarkup($left_image_id, [
    'sizes'     => '50vw',
    'class'     => 'banner-image',
    'wp_size'   => 'thumbnail'
  ]) !!}

  {!! App::imageMarkup($right_image_id, [
    'sizes'     => '50vw',
    'class'     => 'banner-image',
    'wp_size'   => 'thumbnail'
  ]) !!}

  <h1>
    @if ($has_banner_title_image)
      {!! App::imageMarkup($title_image_id, [
        'sizes'     => '25vw',
        'class'     => 'banner-title-image',
        'wp_size'   => 'banner-image-small'
      ]) !!}
    @else
      <span class="banner-title">{{ $text }}</span>
    @endif
  </h1>

  @if ($has_builder_logo)
    <div class="builder-logo-wrapper">
      <svg class="icon builder-logo {{ $banner_logo_class }}">
        <use xlink:href="#{{ $banner_logo_class }}"></use>
      </svg>
    </div>
  @endif
</header>
