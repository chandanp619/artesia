<!--
<section class="home-details">
  <div class="wrapper">
    <dl class="home-details-list">
      <div class="home-detail-group home-detail-area">
        <dd>Area (sq ft)</dd>
        <dt>{{ $area }}</dt>
      </div>
      <div class="home-detail-group home-detail-beds">
        <dd>Beds</dd>
        <dt>{{ $beds }}</dt>
      </div>
      <div class="home-detail-group home-detail-baths">
        <dd>Baths</dd>
        <dt>{{ $baths }}</dt>
      </div>
    </dl>
  </div>
</section>
-->

<section class="home-details">
  <div class="wrapper">
    <div class="showhome-n-details">
      <div class="showhome-n-details-left">
        <div class="sec-1" >
          <h2>Template Name</h2>
          <strong class="title">{!! SingleHomes::Hometitle() !!}</strong>
        </div>
        <div class="sec-2" >
          <div class="col-1">
            {!! SingleHomes::area() !!} Sq ft.<br>{!! SingleHomes::bedrooms() !!} Bedrooms<br>{!! SingleHomes::bathrooms() !!} Bathrooms
            <div class="seperator">&nbsp;</div>
          </div>
          <div class="col-2">
            Starting From<br>
            <span class="price">$ {!! SingleHomes::price_start() !!}</span>
          </div>
          <div class="features">
            {!! SingleHomes::features() !!}
          </div>
        </div>
      </div>
      <div class="showhome-n-details-right">
        <div class="builder-logo">
          <svg class="icon {!! SingleHomes::BuilderLogo() !!}"><use xlink:href="#{!! SingleHomes::BuilderLogo() !!}"></use></svg>
        </div>
        <div class="sec-3">
          <div class="col-1">
            <p class="visit-show-homes">Visit Show Home</p>
            <p class="shownome-n-address">{!! SingleHomes::address() !!}</p>
            <p>{!! SingleHomes::timeings() !!}<br>
              Phone: {!! SingleHomes::phone() !!}<br>
              Email: {!! SingleHomes::email() !!}<br><br></p>

            <span class="shownome-n-floor-plan" ><a href="{!! SingleHomes::contactLink() !!}#form">Request an Appointment &raquo;</a></span>
          </div>
          <div class="col-2">
            <div class="icon builder-icon icon-brookfield_grey"></div>

          </div>
        </div>
      </div>
      <div class="showhome-n-details-floor-plans">
        <p class="floor-plan-title">Floor Plans</p>
        <p class="floor-plan-subtitle">Estate Home</p>

        <div class="plan-images home-floor-plans-slider">
          {!! SingleHomes::thickbox() !!}
          @if($images = SingleHomes::planImages())
            @foreach($images as $im)
              <div>
                <a href="{!! $im['image']; !!}" class="thickbox">
                  <img src="{!! $im['image']; !!}" title="{!! $im['caption']; !!}" alt="{!! $im['caption']; !!}" width="10" />
                  <br/><span class="caption">{!! $im['caption']; !!}</span>
                </a>
              </div>
            @endforeach
          @endif()
        </div>
      </div>
    </div>
  </div>
</section>
