{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
    <section class="content">
      <div class="wrapper">
        <h2>You're A Natural (But You Worked For It)</h2>
        <h3>H3 header</h3>
        <h4>H4 header</h4>
        <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <ul>
            <li>Lorem ipsum</li>
            <li>Dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Sed do eiusmod tempor</li>
            <li>Incididunt ut labore et dolore magna</li>
        </ul>
        <ol>
            <li>Lorem ipsum</li>
            <li>Dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Sed do eiusmod tempor</li>
            <li>Incididunt ut labore et dolore magna</li>
        </ol>
        <h3>Your Everyday <em>masterpiece</em></h3>
      </div>
    </section>

    <section class="featured-panel featured-panel-right-align">
      <div class="wrapper">
        <a href="">
          <div class="image" style="background-image: url(http://via.placeholder.com/600x360/d23dff/9142a9a);">
          </div>
          <div class="content">
            <h2>Your Estate | Your Way</h2>
            <p>Towering windows that catch the morning light. Stairs with a sensuous curve. In Artesia, you can personalize your home from artful finishes to ceiling height to indoor-outdoor flow.</p>
            <span class="button">Explore homes</span>
          </div>
        </a>
      </div>
    </section>

    <section class="featured-panel featured-panel-left-align">
      <div class="wrapper">
        <a href="">
          <div class="image" style="background-image: url(http://via.placeholder.com/600x360/d23dff/9142a9a);">
          </div>
          <div class="content">
            <h2>Your Estate | Your Way</h2>
            <p>Towering and so forth</p>
            <span class="button">Explore homes</span>
          </div>
        </a>
      </div>
    </section>

    <section class="featured-panel featured-panel-left-align">
      <div class="wrapper">
        <div class="image" style="background-image: url(http://via.placeholder.com/600x360/d23dff/9142a9a);">
        </div>
        <div class="content">
          <h2>Best-in-class.</h2>
          <p>Four exemplary builders are entrusted with building Artesia at Heritage Pointe luxury homes — Albi Homes, Homes By Avi, Augusta Fine Homes and Calbridge Homes.  All four are multiple award-winners for their quality work, but more importantly, each reflects the same commitment to value, craftsmanship, and design that is fundamental at Artesia.</p>
        </div>
      </div>
    </section>

    <section class="panel-menu">
      <div class="wrapper">
        <ul class="menu">
          <li>
            <a href="">
              <span class="title">Shop, Dine, Thrive</span>
              <span class="button">Lifestyle</span>
              <div class="image" style="background-image: url(http://via.placeholder.com/600x300/d23dff/9142a9a);">
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <span class="title">Find Us</span>
              <span class="button">Location</span>
              <div class="image" style="background-image: url(http://via.placeholder.com/300x300/d23dff/9142a9a);">
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <span class="title">For The Greater Good</span>
              <span class="button">Sustainability</span>
              <div class="image" style="background-image: url(http://via.placeholder.com/300x600/d23dff/9142a9a);">
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="full-width-panel gallery" style="background-image: url(http://via.placeholder.com/1000x1000/d23dff/9142a9a);">
      <div class="wrapper">
        <div class="content">
          <h2>Picture Yourself</h2>
          <p>Catch a glimpse of our open spaces, pathways and trails, ponds, tennis courts, and more</p>
          <button id="gallery-open-1" class="button">Gallery</button>
        </div>
      </div>
      <script>
        document.getElementById('gallery-open-1').addEventListener('click', function() {
            lightGallery(document.getElementById('gallery-open-1'), {
                counter: false,
                download: false,
                dynamic: true,
                hideControlOnEnd: true,
                loop: false,
                dynamicEl: [{
                    "src": 'http://via.placeholder.com/1000x1000/d23dff/9142a9a'
                }, {
                    'src': 'http://via.placeholder.com/700x500/d23dff/9142a9a'
                }, {
                    'src': 'http://via.placeholder.com/4000x2000/d23dff/9142a9a'
                }]
            })
        });
      </script>
    </section>

    <section class="featured-panel featured-panel-right-align">
      <div class="wrapper">
        <div id="carousel-1" class="carousel" data-slick='{"autoplay": true, "autoplaySpeed": 3000, "fade": true, "cssEase": "linear", "dots": true, "arrows": false, "slidesToShow": 1, "slidesToScroll": 1}'>
          <div class="carousel-image" style="background-image: url(http://via.placeholder.com/600x360/d23dff/9142a9a);"></div>
          <div class="carousel-image" style="background-image: url(http://via.placeholder.com/600x360/ff0000/9142a9a);"></div>
          <div class="carousel-image" style="background-image: url(http://via.placeholder.com/600x360/00ff00/9142a9a);"></div>
        </div>
        <div class="content">
          <h2>Your Connection To South Calgary</h2>
          <p>Towering windows that catch the morning light. Stairs with a sensuous curve. In Artesia, you can personalize your home from artful finishes to ceiling height to indoor-outdoor flow.</p>
        </div>
      </div>
    </section>

    <section class="home-tiles">
      <div class="wrapper">
        <ul class="tiles" >
          <li>
            <a href="">
              <div class="image lazyload" data-bgset="http://via.placeholder.com/600x300/d23dff/9142a9a" data-sizes="auto"></div>
              <div class="panel">
                <img src="http://via.placeholder.com/600x400/d23dff/9142a9a" alt="Augusta Fine Homes">
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="image" style="background-image: url(http://via.placeholder.com/600x300/d23dff/9142a9a);"></div>
              <div class="panel">
                <img src="http://via.placeholder.com/500x600/d23dff/9142a9a" alt="Homes by AVI">
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="image" style="background-image: url(http://via.placeholder.com/600x300/d23dff/9142a9a);"></div>
              <div class="panel">
                <img src="http://via.placeholder.com/600x200/d23dff/9142a9a" alt="Brookfield Residential">
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="logos">
        <div class="wrapper">
            <ul class="logos">
                <li>
                    <a href=""><picture><img src="http://via.placeholder.com/1000x1000" alt=""></picture></a>
                </li>
                <li>
                    <a href=""><picture><img src="http://via.placeholder.com/2000x1000" alt=""></picture></a>
                </li>
                <li>
                    <a href=""><picture><img src="http://via.placeholder.com/1000x500" alt=""></picture></a>
                </li>
                <li>
                    <a href=""><picture><img src="http://via.placeholder.com/1500x1000" alt=""></picture></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="iframe">
      <div class="wrapper">
        <iframe title="map" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCaghYEhyyjwEFWq4GJ_I6-aRPpbw4BqIY&q=Artesia+at+Heritage+Pointe&zoom=12" allowfullscreen></iframe>
      </div>
    </section>

    <section class="content">
      <div class="wrapper">
        <h2>We want to hear from you.</h2>
        <p>Register to learn more about this exclusive estate-only community.</p>
        <!-- Hubspot form code -->
        <div class="hbspt-form" id="hbspt-form-1536779651040-8614978300" data-gtm-vis-first-on-screen-1116388_1158="1243" data-gtm-vis-total-visible-time-1116388_1158="58900" data-gtm-vis-recent-on-screen-1116388_1284="1244" data-gtm-vis-first-on-screen-1116388_1284="1244" data-gtm-vis-total-visible-time-1116388_1284="29900" data-gtm-vis-has-fired-1116388_1284="1" data-gtm-vis-recent-on-screen-1116388_1158="84353" data-gtm-vis-has-fired-1116388_1158="1"><form novalidate="" accept-charset="UTF-8" action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/3390596/c11ffedf-36e8-4562-8edd-653a6ad1a547" enctype="multipart/form-data" id="hsForm_c11ffedf-36e8-4562-8edd-653a6ad1a547" method="POST" class="hs-form stacked hs-form-private hs-form-c11ffedf-36e8-4562-8edd-653a6ad1a547_cdd05b55-ba57-44f6-9a80-61e7f95d19ef" data-form-id="c11ffedf-36e8-4562-8edd-653a6ad1a547" data-portal-id="3390596" target="target_iframe_c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0"><div data-reactid=".hbspt-forms-0.0:$0"><div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.0:$0.$firstname"><label id="label-firstname-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your First Name" for="firstname-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$0.$firstname.0"><span data-reactid=".hbspt-forms-0.0:$0.$firstname.0.0">First Name</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$0.$firstname.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$0.$firstname.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$0.$firstname.$firstname"><input id="firstname-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input invalid error" type="text" name="firstname" required="" value="" placeholder="" autocomplete="given-name" data-reactid=".hbspt-forms-0.0:$0.$firstname.$firstname.0"></div><ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-0.0:$0.$firstname.3"><li data-reactid=".hbspt-forms-0.0:$0.$firstname.3.$0"><label data-reactid=".hbspt-forms-0.0:$0.$firstname.3.$0.0">Please complete this required field.</label></li></ul></div></div><div data-reactid=".hbspt-forms-0.0:$1"><div class="hs_lastname hs-lastname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.0:$1.$lastname"><label id="label-lastname-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Last Name" for="lastname-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$1.$lastname.0"><span data-reactid=".hbspt-forms-0.0:$1.$lastname.0.0">Last Name</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$1.$lastname.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$1.$lastname.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$1.$lastname.$lastname"><input id="lastname-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="text" name="lastname" required="" value="" placeholder="" autocomplete="family-name" data-reactid=".hbspt-forms-0.0:$1.$lastname.$lastname.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$2"><div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.0:$2.$email"><label id="label-email-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Email" for="email-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$2.$email.0"><span data-reactid=".hbspt-forms-0.0:$2.$email.0.0">Email</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$2.$email.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$2.$email.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$2.$email.$email"><input id="email-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="email" name="email" required="" placeholder="" value="" autocomplete="email" data-reactid=".hbspt-forms-0.0:$2.$email.$email.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$3"><div class="hs_timeframe_to_move_in hs-timeframe_to_move_in hs-fieldtype-select field hs-form-field" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in"><label id="label-timeframe_to_move_in-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your My timeframe to move:" for="timeframe_to_move_in-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.0"><span data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.0.0">My timeframe to move:</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in"><select id="timeframe_to_move_in-c11ffedf-36e8-4562-8edd-653a6ad1a547" required="" class="hs-input invalid error" name="timeframe_to_move_in" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0"><option value="" disabled="" selected="" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.0">- Please Select -</option><option value="Winter 2018" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Winter 2018">Winter 2018</option><option value="Spring 2018" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Spring 2018">Spring 2018</option><option value="Summer 2018" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Summer 2018">Summer 2018</option><option value="Fall 2018" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Fall 2018">Fall 2018</option><option value="Winter 2019" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Winter 2019">Winter 2019</option><option value="Spring 2019" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Spring 2019">Spring 2019</option><option value="Summer 2019" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Summer 2019">Summer 2019</option><option value="Fall 2019" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Fall 2019">Fall 2019</option><option value="Beyond 2019" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$Beyond 2019">Beyond 2019</option><option value="I'm a Realtor" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.$timeframe_to_move_in.0.1:$I'm a Realtor">I'm a Realtor</option></select></div><ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.3"><li data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.3.$0"><label data-reactid=".hbspt-forms-0.0:$3.$timeframe_to_move_in.3.$0.0">Please select an option from the dropdown menu.</label></li></ul></div></div><div data-reactid=".hbspt-forms-0.0:$4"><div class="hs-dependent-field" data-reactid=".hbspt-forms-0.0:$4.$buyer_age"><div class="hs_buyer_age hs-buyer_age hs-fieldtype-select field hs-form-field" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age"><label id="label-buyer_age-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your My age range:" for="buyer_age-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.0"><span data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.0.0">My age range:</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age"><select id="buyer_age-c11ffedf-36e8-4562-8edd-653a6ad1a547" required="" class="hs-input" name="buyer_age" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0"><option value="" disabled="" selected="" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.0">- Please Select -</option><option value="20-29" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$20-29">20-29</option><option value="30-39" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$30-39">30-39</option><option value="40-49" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$40-49">40-49</option><option value="50-59" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$50-59">50-59</option><option value="60-69" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$60-69">60-69</option><option value="70+" data-reactid=".hbspt-forms-0.0:$4.$buyer_age.$buyer_age.$buyer_age.0.1:$70+">70+</option></select></div></div></div></div><div data-reactid=".hbspt-forms-0.0:$5"><div class="hs_builder_partners hs-builder_partners hs-fieldtype-checkbox field hs-form-field" data-reactid=".hbspt-forms-0.0:$5.$builder_partners"><label id="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your I am interested in the following home builders: " for="builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.0.0">I am interested in the following home builders: </span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners"><ul class="inputs-list multi-container" required="" role="listbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0"><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Avalon Master Builder"><label for="builder_partners0-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Avalon Master Builder.0"><input id="builder_partners0-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Avalon Master Builder" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Avalon Master Builder.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Avalon Master Builder.0.1">Avalon Master Builder</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Brookfield Residential"><label for="builder_partners1-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Brookfield Residential.0"><input id="builder_partners1-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Brookfield Residential" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Brookfield Residential.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Brookfield Residential.0.1">Brookfield Residential</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Homes"><label for="builder_partners2-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Homes.0"><input id="builder_partners2-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Cedarglen Homes" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Homes.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Homes.0.1">Cedarglen Homes</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Living"><label for="builder_partners3-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Living.0"><input id="builder_partners3-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Cedarglen Living" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Living.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Cedarglen Living.0.1">Cedarglen Living</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Golden Life"><label for="builder_partners4-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Golden Life.0"><input id="builder_partners4-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Golden Life" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Golden Life.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Golden Life.0.1">Golden Life</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Jayman Built"><label for="builder_partners5-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Jayman Built.0"><input id="builder_partners5-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Jayman Built" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Jayman Built.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Jayman Built.0.1">Jayman Built</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Rohit"><label for="builder_partners6-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Rohit.0"><input id="builder_partners6-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Rohit" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Rohit.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Rohit.0.1">Rohit</span></label></li><li class="hs-form-checkbox" role="checkbox" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Trico Homes"><label for="builder_partners7-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-checkbox-display" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Trico Homes.0"><input id="builder_partners7-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="builder_partners" value="Trico Homes" aria-labelledby="label-builder_partners-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Trico Homes.0.0"><span data-reactid=".hbspt-forms-0.0:$5.$builder_partners.$builder_partners.0.$Trico Homes.0.1">Trico Homes</span></label></li></ul></div></div></div><div data-reactid=".hbspt-forms-0.0:$6"><div class="hs_additional_notes__c hs-additional_notes__c hs-fieldtype-textarea field hs-form-field" data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c"><label id="label-additional_notes__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Additional Notes" for="additional_notes__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c.0"><span data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c.0.0">Additional Notes</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c.$additional_notes__c"><textarea id="additional_notes__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" name="additional_notes__c" placeholder="" data-reactid=".hbspt-forms-0.0:$6.$additional_notes__c.$additional_notes__c.0"></textarea></div></div></div><div data-reactid=".hbspt-forms-0.0:$7"><div class="hs-richtext" data-reactid=".hbspt-forms-0.0:$7.0"><p>* I consent to receive electronic messages from Brookfield Residential, including event invitations, newsletters, reports, community updates and other notifications. You may withdraw your consent to receive electronic messages from Brookfield Residential at any time. Refer to our&nbsp;<a href="http://www.brookfieldresidential.com/privacy-policy">privacy policy</a>&nbsp;or&nbsp;<a href="https://alberta.brookfieldresidential.com/calgary-homes/contact-us" target="_blank">contact us</a>&nbsp;if you have any questions.</p>
        <p>By selecting a builder partner named in the list above, you consent to Brookfield referring your contact information to your selected home builder(s) in the community of Seton.&nbsp;</p></div><div class="hs_consent_to_follow_up__c hs-consent_to_follow_up__c hs-fieldtype-booleancheckbox field hs-form-field" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c"><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c"><ul class="inputs-list" required="" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0"><li class="hs-form-booleancheckbox" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0.0"><label for="consent_to_follow_up__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-form-booleancheckbox-display" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0.0.0"><input id="consent_to_follow_up__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="hs-input" type="checkbox" name="consent_to_follow_up__c" value="true" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0.0.0.0"><span data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0.0.0.1">Yes, I consent</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.0:$7.$consent_to_follow_up__c.$consent_to_follow_up__c.0.0.0.2">*</span></label></li></ul></div></div></div><div data-reactid=".hbspt-forms-0.0:$8"><div class="hs_region_text__c hs-region_text__c hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$8.$region_text__c"><label id="label-region_text__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Calgary" for="region_text__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$8.$region_text__c.0"><span data-reactid=".hbspt-forms-0.0:$8.$region_text__c.0.0">Calgary</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$8.$region_text__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$8.$region_text__c.$region_text__c"><input name="region_text__c" class="hs-input" type="hidden" value="Calgary" data-reactid=".hbspt-forms-0.0:$8.$region_text__c.$region_text__c.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$9"><div class="hs_leadsource hs-leadsource hs-fieldtype-select field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$9.$leadsource"><label id="label-leadsource-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Lead Source" for="leadsource-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$9.$leadsource.0"><span data-reactid=".hbspt-forms-0.0:$9.$leadsource.0.0">Lead Source</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$9.$leadsource.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$9.$leadsource.$leadsource"><input name="leadsource" class="hs-input" type="hidden" value="Website" data-reactid=".hbspt-forms-0.0:$9.$leadsource.$leadsource.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$10"><div class="hs_consent_type__c hs-consent_type__c hs-fieldtype-select field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$10.$consent_type__c"><label id="label-consent_type__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Consent Type" for="consent_type__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$10.$consent_type__c.0"><span data-reactid=".hbspt-forms-0.0:$10.$consent_type__c.0.0">Consent Type</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$10.$consent_type__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$10.$consent_type__c.$consent_type__c"><input name="consent_type__c" class="hs-input" type="hidden" value="Express" data-reactid=".hbspt-forms-0.0:$10.$consent_type__c.$consent_type__c.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$11"><div class="hs_community_text__c hs-community_text__c hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$11.$community_text__c"><label id="label-community_text__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Seton" for="community_text__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$11.$community_text__c.0"><span data-reactid=".hbspt-forms-0.0:$11.$community_text__c.0.0">Seton</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$11.$community_text__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$11.$community_text__c.$community_text__c"><input name="community_text__c" class="hs-input" type="hidden" value="Seton" data-reactid=".hbspt-forms-0.0:$11.$community_text__c.$community_text__c.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$12"><div class="hs_how_was_consent_received__c hs-how_was_consent_received__c hs-fieldtype-select field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c"><label id="label-how_was_consent_received__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your How Was Consent Received" for="how_was_consent_received__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c.0"><span data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c.0.0">How Was Consent Received</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c.$how_was_consent_received__c"><input name="how_was_consent_received__c" class="hs-input" type="hidden" value="Web Form" data-reactid=".hbspt-forms-0.0:$12.$how_was_consent_received__c.$how_was_consent_received__c.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$13"><div class="hs_is_web_lead__c hs-is_web_lead__c hs-fieldtype-booleancheckbox field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$13.$is_web_lead__c"><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$13.$is_web_lead__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$13.$is_web_lead__c.$is_web_lead__c"><input name="is_web_lead__c" class="hs-input" type="hidden" value="true" data-reactid=".hbspt-forms-0.0:$13.$is_web_lead__c.$is_web_lead__c.0"></div></div></div><div data-reactid=".hbspt-forms-0.0:$14"><div class="hs_source__c hs-source__c hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$14.$source__c"><label id="label-source__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" class="" placeholder="Enter your Source" for="source__c-c11ffedf-36e8-4562-8edd-653a6ad1a547" data-reactid=".hbspt-forms-0.0:$14.$source__c.0"><span data-reactid=".hbspt-forms-0.0:$14.$source__c.0.0">Source</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$14.$source__c.1"></legend><div class="input" data-reactid=".hbspt-forms-0.0:$14.$source__c.$source__c"><input name="source__c" class="hs-input" type="hidden" value="Seton Community contact us page" data-reactid=".hbspt-forms-0.0:$14.$source__c.$source__c.0"></div></div></div><noscript data-reactid=".hbspt-forms-0.1"></noscript><div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.4"><div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.4.0"></div><div class="actions" data-reactid=".hbspt-forms-0.4.1"><input type="submit" value="Learn more about Seton" class="hs-button primary large" data-reactid=".hbspt-forms-0.4.1.0"></div></div><input name="hs_context" type="hidden" value="{&quot;rumScriptExecuteTime&quot;:697.0000000000001,&quot;rumServiceResponseTime&quot;:1299,&quot;rumFormRenderTime&quot;:0,&quot;rumTotalRenderTime&quot;:2367,&quot;rumTotalRequestTime&quot;:600.9999999999999,&quot;lang&quot;:&quot;en&quot;,&quot;pageUrl&quot;:&quot;https://alberta.brookfieldresidential.com/calgary/seton/contact-us&quot;,&quot;pageTitle&quot;:&quot;Send Us Your Seton Urban District Questions | Brookfield Residential Alberta&quot;,&quot;source&quot;:&quot;FormsNext-static-2.164&quot;,&quot;timestamp&quot;:1536779651174,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1.1 Safari/605.1.15&quot;,&quot;referrer&quot;:&quot;https://alberta.brookfieldresidential.com/calgary/seton/&quot;,&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;3390596&quot;,&quot;formId&quot;:&quot;c11ffedf-36e8-4562-8edd-653a6ad1a547&quot;,&quot;target&quot;:&quot;#hbspt-form-1536779651040-8614978300&quot;,&quot;hutk&quot;:&quot;16bd8050c00164a170f7af1ff22575dd&quot;,&quot;redirectUrl&quot;:&quot;https://alberta.brookfieldresidential.com/calgary/seton/seton-contact-us-confirmation&quot;},&quot;boolCheckBoxFields&quot;:&quot;consent_to_follow_up__c,is_web_lead__c&quot;,&quot;redirectUrl&quot;:&quot;https://alberta.brookfieldresidential.com/calgary/seton/seton-contact-us-confirmation&quot;,&quot;formValidity&quot;:{&quot;timeframe_to_move_in&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please select an option from the dropdown menu.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]},&quot;firstname&quot;:{&quot;valid&quot;:false,&quot;errors&quot;:[&quot;Please complete this required field.&quot;],&quot;errorTypes&quot;:[&quot;REQUIRED_FIELD&quot;]}},&quot;formTarget&quot;:&quot;#hbspt-form-1536779651040-8614978300&quot;,&quot;correlationId&quot;:&quot;569f897c-7ca2-4d04-bae8-5d25b0036148&quot;,&quot;hutk&quot;:&quot;16bd8050c00164a170f7af1ff22575dd&quot;}" data-reactid=".hbspt-forms-0.5"><iframe name="target_iframe_c11ffedf-36e8-4562-8edd-653a6ad1a547" style="display:none;" data-reactid=".hbspt-forms-0.6"></iframe></form></div>
        <!-- End of Hubspot form code -->
      </div>
    </section>

    <section class="full-width-panel" style="background-image: url(http://via.placeholder.com/1000x1000/d23dff/9142a9a);">
      <div class="wrapper">
        <div class="content">
          <h2>Show Homes Open Daily</h2>
          <p>Monday-Thursday | 12-6pm<br/>Friday, Weekends & Holidays | 12-5pm</p>
          <a href="" class="button">Explore homes</a>
        </div>
      </div>
    </section>
@endsection
