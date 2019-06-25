<section class="home-details">
    <div class="wrapper">
        <div class="showhome-n-details">
            <div class="showhome-n-details-left">
                <div class="sec-1" >
                    <h2>Template Name</h2>
                    <strong class="title">{!! SingleHomeNew::Hometitle() !!}</strong>
                </div>
                <div class="sec-2" >
                    <div class="col-1">
                        {!! SingleHomeNew::area() !!} Sq ft.<br>{!! SingleHomeNew::bedrooms() !!} Bedrooms<br>{!! SingleHomeNew::bathrooms() !!} Bathrooms
                        <div class="seperator">&nbsp;</div>
                    </div>
                    <div class="col-2">
                        Starting From<br>
                        <span class="price">$ {!! SingleHomeNew::price_start() !!}</span>
                    </div>
                    <div class="features">
                        {!! SingleHomeNew::features() !!}
                    </div>
                </div>
            </div>
            <div class="showhome-n-details-right">
                <div class="builder-logo">
                    <svg class="icon {!! SingleHomeNew::BuilderLogo() !!}"><use xlink:href="#{!! SingleHomeNew::BuilderLogo() !!}"></use></svg>
                </div>
                <div class="sec-3">
                    <div class="col-1">
                        <p class="visit-show-homes">Visit Show Home</p>
                        <p class="shownome-n-address">{!! SingleHomeNew::address() !!}</p>
                        <p>{!! SingleHomeNew::timeings() !!}<br>
                            Phone: {!! SingleHomeNew::phone() !!}<br>
                            Email: {!! SingleHomeNew::email() !!}<br><br></p>

                        <span class="shownome-n-floor-plan" ><a href="{!! SingleHomeNew::contactLink() !!}#form">Request an Appointment &raquo;</a></span>
                    </div>
                    <div class="col-2">
                        <div class="icon">

                        </div>

                    </div>
                </div>
            </div>
            <div class="showhome-n-details-floor-plans">
                <p class="floor-plan-title">Floor Plans</p>
                <p class="floor-plan-subtitle">Estate Home</p>

                <div class="plan-images home-floor-plans-slider">
                {!! SingleHomeNew::thickbox() !!}
                    @if($images = SingleHomeNew::planImages())
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
