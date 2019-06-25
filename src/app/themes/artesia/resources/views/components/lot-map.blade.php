<section class="lot-map">
  <div class="wrapper">
    <h2>Available Lots.</h2>
    <ul class="lot-legend-status">
      <li class="lot-status status-available">Available</li>
      <li class="lot-status status-quick-possession">Quick Possession</li>
      <li class="lot-status status-sold">Sold</li>
      <li class="lot-status status-showhomes">Showhomes</li>
      <li class="lot-status status-coming-soon">Coming Soon</li>
    </ul>
    <div class="inline-svg-wrapper lot-map-svg">
      {!! $lot_map !!}
    </div>
    <div class="lot-map-overlay" id="lotMapOverlay"></div>
    <div id="lotMapDetails" class="lot-map-details">
      @foreach ($lots as $lot)
        @include('components.lot-details', $lot->componentLotDetails())
      @endforeach
    </div>
    <hr>
    <ul class="lot-legend-style">
      <li>
        <h3>Level Transitional</h3>
        {!! $level_trans !!}
      </li>
      <li>
        <h3>Walkout Lot</h3>
        {!! $walkout_lot !!}
      </li>
      <li>
        <h3>Walkout Transitional</h3>
        {!! $walkout_trans !!}
      </li>
      <li>
        <h3>Sunshine Basement</h3>
        {!! $sunshine !!}
      </li> 
    </ul>
  </div>
</section>