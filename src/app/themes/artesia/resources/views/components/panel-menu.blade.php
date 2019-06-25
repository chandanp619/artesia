<section class="panel-menu">
  <div class="wrapper">
    <ul class="menu">
      @foreach ($panels as $panel)
        <li>
          {!! App::linkMarkup($panel['url'], '', ['closingTag' => false]) !!}
            <span class="title">{{ $panel['title'] }}</span>
            <span class="button">{{ $panel['button_text'] }}</span>
            <div {!! 
              App::bgAttributes(
                $panel['image_id'],
                [
                  'class' => 'image',
                  'wp_size' => 'thumbnail',
                  'sizes' => '(min-width: 720px) 33vw, 100vw'
                ]
              ) !!} ></div>
          </a> {{-- /App::linkMarkup() --}}
        </li>
      @endforeach
    </ul>
  </div>
</section>
