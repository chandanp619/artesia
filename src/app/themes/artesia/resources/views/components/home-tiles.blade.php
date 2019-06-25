<section class="home-tiles">
  <div class="wrapper">
    <div class="heading">
      {!! $heading !!}
    </div>
    <ul class="tiles">
      @foreach ($homes as $home)
        <li>
          {!! App::linkMarkup($home->homeUrl(), '', ['closingTag' => false]) !!}
            <div {!!
              App::bgAttributes(
                $home->featuredImageId(),
                [
                  'class' => 'image',
                  'wp_size' => 'thumbnail',
                  'sizes' => '(min-width: 720px) 33vw, 100vw'
                ]
              ) !!} ></div>
            <div class="panel">
              <svg class="icon builder-logo {{ $home->logoClass() }}"><use xlink:href="#{{ $home->logoClass() }}"></use></svg>
            </div>
          </a> {{-- /App::linkMarkup() --}}
        </li>
      @endforeach
    </ul>
  </div>
</section>
