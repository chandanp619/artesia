<section class="featured-panel featured-panel-{{ $orientation }}-align">
  <div class="wrapper">
    @if ($has_link)
      {!! App::linkMarkup($url, '', ['closingTag' => false]) !!}
    @endif
        @if ($is_carousel)
          <div class="carousel" data-slick='{"autoplay": true, "autoplaySpeed": 3000, "fade": true, "cssEase": "linear", "dots": true, "arrows": false, "slidesToShow": 1, "slidesToScroll": 1}'>
            @foreach ($carousel as $image_id)
              <div {!! App::bgAttributes(
              $image_id,
              [
                'class' => 'carousel-image',
                'wp_size' => 'feature-small',
                'sizes' => '(min-width: 720px) 50vw, 100vw'
              ]
            ) !!}></div>    
            @endforeach
          </div>
        @else
          <div {!! App::bgAttributes(
            $image_id,
            [
              'class' => 'image',
              'wp_size' => 'feature-small',
              'sizes' => '(min-width: 720px) 50vw, 100vw'
            ]
          ) !!}></div>
        @endif
        <div class="content">
          <h2>{{ $title }}</h2>
          {!! $feature_body !!}
          @if ($has_link)
            <span class="button">{{ $button_text }}</span>
          @endif
        </div>   
    @if ($has_link)
      </a> {{-- /App::linkMarkup() --}}
    @endif
  </div>
</section>
