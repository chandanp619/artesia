<section class="content">
    <div class="wrapper">
        <div class="intro-section">
            {!! $content !!}

        </div>


        <div class="showhomes-n-container">

            @if($homes = ArchiveHomesNew::ShowHomesNew())
                @php
                $count = 1;
                @endphp
            @foreach($homes as $home)

            <div class="showhome-n @if(($count % 2) == 0)even @else odd @endif()" id="showhome-{!! $home->ID !!}">
                <div class="featured-image">
                    <div class="static">
                        <img src="{!! ArchiveHomesNew::featuredImageUrl($home->ID) !!}" alt="featured-image" />
                    </div>
                    <div class="owl-carousel-home">
                        @if($imgs = ArchiveHomesNew::galleryImages($home->ID))
                        @foreach($imgs as $img )
                        <div><img src="{!! $img !!}" alt="" /></div>
                        @endforeach
                        @endif()
                    </div>

                </div>
                <div class="showhome-n-details">
                    <div class="sec-1">
                        <h2>Template Name</h2>
                        <strong>{!! ArchiveHomesNew::title($home->ID) !!}</strong>
                    </div>
                    <div class="sec-2">
                        <div class="col-1">
                            {!! ArchiveHomesNew::area($home->ID) !!} Sq ft.<br/>{!! ArchiveHomesNew::bedrooms($home->ID) !!} Bedrooms<br/>{!! ArchiveHomesNew::bathrooms($home->ID) !!} Bathrooms
                            <div class="seperator">&nbsp;</div>
                        </div>
                        <div class="col-2">
                            Starting From<br/>
                            <span class="price">$ {!! ArchiveHomesNew::price_start($home->ID) !!}</span>
                        </div>
                        <div class="col-3">
                            <div class="builder-logo">

                                <svg class="icon {!! ArchiveHomesNew::BuilderLogo($home->ID) !!}"><use xlink:href="#{!! ArchiveHomesNew::BuilderLogo($home->ID) !!}"></use></svg>
                            </div>

                        </div>
                    </div>
                    <div class="sec-3">
                        <div class="col-1">
                            <p class="visit-show-homes">Visit Show Home</p>
                            <p class="shownome-n-address">{!! ArchiveHomesNew::address($home->ID) !!}</p>
                            <p>{!! ArchiveHomesNew::timeings($home->ID) !!}<br/>
                            Phone: {!! ArchiveHomesNew::phone($home->ID) !!}<br/>
                            Email: {!! ArchiveHomesNew::email($home->ID) !!}<br/></p>
                            <br/>
                            <span class="shownome-n-floor-plan"><a href="{!! ArchiveHomesNew::homeURL($home->ID) !!}">View Floor Plans &raquo;</a></span>
                        </div>

                    </div>
                </div>
            </div>
                    @php
                        $count++;
                    @endphp
            @endforeach
            @endif()




        </div>
    </div>
</section>