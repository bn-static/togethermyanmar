<?php include 'inc/header.php'; ?>

   <!-- Page Title
   ================================================== -->
   <section id="page-title">	
   	  
		<div class="row">

			<div class="twelve columns">

				<h1>ဆက်သွယ်ရန်<span>.</span></h1>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->


   <!-- Content
   ================================================== -->
   <section id="content">

   	<div class="row portfolio-content">

	   	<div class="entry tab-whole nine columns centered">

				<div class="entry-content">
          <h1 class="entry-title">ရန်ကုန်</h1>
          <address>အမှတ် ၁၃၂ ၊ ရွာမကျောင်းလမ်း နှင့် ဗဟိုလမ်းထောင့် ၊ ထွန်းသစ္စာကားဝန်ဆောင်မှုဝန်း ၊ လှိုင်မြို့နယ် ၊ ရန်ကုန်မြို့</address>
          <ul>
                    <li><a href="tel:0931240260">0931240260</a></li>
                    <li><a href="tel:09450041352">09450041352</a></li>
                    <li><a href="mailto:info2002@togetherdecoration.com">info2002@togetherdecoration.com</a></li>
                  </ul>                  

                  <h1 class="entry-title">ရန်ကုန်</h1>
          <address>အမှတ် (၁၁၇) ၊ ပျဉ်းမနား တောင်ညိုလမ်း ၊ သဗြေကုန်း ၊ ဇဘူသီရိမြို့နယ် ၊ နေပြည်တော်</address>
          <ul>
                    <li><a href="tel:067414014">067 414014</a></li>
                    <li><a href="tel:095182651">09 5182651, 09 49330123</a></li>
                    <li><a href="mailto:info2002@togetherdecoration.com">info2002@togetherdecoration.com</a></li>
                  </ul>                  
				</div>
				<hr>
	         
	      </div> <!-- /entry -->	      

	   </div> <!-- /portfolio-content -->
	   <section id="contact">

   	<div class="row section-head">

   		<div class="twelve columns">

	         <h1>ကျွန်တော်တို့နှင့် တိုက်ရိုက်ဆက်သွယ်ပါ<span>.</span></h1>

	         <hr />

	         <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
	         eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
	         voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         </p> -->

	      </div>

      </div>

      <div class="row form-section">
      	
      	<div id="contact-form" class="twelve columns">

            <form name="contactForm" id="contactForm" method="post" action="">

      			<fieldset>

                  <div class="row">

	                  <div class="twelve columns mob-whole">
	                  	<label for="contactFname">နာမည် <span class="required">*</span></label>	      						   
	      					<input name="contactFname" type="text" id="contactFname" placeholder="နာမည်" value="" />	      					
	                  </div>                        

                  </div>

                  <div class="row">

	                  <div class="six columns mob-whole">	
	                  	<label for="contactEmail">အီးမေလ်း <span class="required">*</span></label>      						   
	      					<input name="contactEmail" type="text" id="contactEmail" placeholder="အီးမေလ်း" value="" />	      					
	                  </div>

	                  <div class="six columns mob-whole">	 
	                  	<label for="contactSubject">ခေါင်းစဉ်</label>     						   
	      					<input name="contactSubject" type="text" id="contactSubject" placeholder="ခေါင်းစဉ်"  value="" />	      					
	                  </div>

                  </div>

                  <div class="row">

	                  <div class="twelve columns">
	                     <label  for="contactMessage">အကြောင်းအရာ <span class="required">*</span></label>
	                     <textarea name="contactMessage"  id="contactMessage" placeholder="အကြောင်းအရာ" rows="10" cols="50" ></textarea>
	                  </div>

                  </div>

                  <div>
                     <button class="submit full-width">ပို့ရနျ</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

      			</fieldset>
      				
      		</form> <!-- /contactForm -->

            <!-- message box -->
            <div id="message-warning"></div>
            <div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br />
    			</div>

         </div> <!-- /contact-form -->      	

      </div> <!-- /form-section -->     

   </section>  <!-- /contact-->
   <div id="map-canvas" style="width: 100%; height: 400px"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 17,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(16.834223, 96.123436), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#ffdfa6"} ] }, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#b52127"} ] }, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#c5531b"} ] }, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#74001b"}, {"lightness": -10 } ] }, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#da3c3c"} ] }, {"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#74001b"} ] }, {"featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{"color": "#da3c3c"} ] }, {"featureType": "road.local", "elementType": "geometry.fill", "stylers": [{"color": "#990c19"} ] }, {"elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"} ] }, {"elementType": "labels.text.stroke", "stylers": [{"color": "#74001b"}, {"lightness": -8 } ] }, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#6a0d10"}, {"visibility": "on"} ] }, {"featureType": "administrative", "elementType": "geometry", "stylers": [{"color": "#ffdfa6"}, {"weight": 0.4 } ] }, {"featureType": "road.local", "elementType": "geometry.stroke", "stylers": [{"visibility": "off"} ] } ] };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map-canvas');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(16.834223, 96.123436),
                map: map,
                title: 'Biznet',
                icon: '../images/map-pointer.png'
            });
        }
    </script>
	   


   </section> <!-- /content -->  
<?php include 'inc/footer.php'; ?>