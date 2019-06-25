<section class="logos">
  <div class="wrapper">
    <ul class="logos">
      @foreach ($logos as $logo)
        <li>
          {!! App::linkMarkup(
            $logo['link'],
            App::imageMarkup(
              $logo['image_id'], 
              [
                  'inline_svg'=> true,
                  'sizes'     => '(min-width: 992px) 16.66vw, (min-width: 720px) 20vw, 50vw',
                  'wp_size'   => 'full'
              ]
            ),
            [ 'newTab' => true]
          ) !!}
        </li>
      @endforeach
    </ul>
  </div>
</section>
