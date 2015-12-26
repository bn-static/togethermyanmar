<!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About Together Myanmar</h3>
               
            <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            	incididunt ut labore et dolore magna aliqua.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  No (132), Corner of Ywarma Kyaung Street &amp; Baho Road, (1) Quarter, (Htun Thitsa Car Servicing Compound) Hlaing Tsp, Yangon
                  </p>

                  <ul>
                    <li><a href="tel:0931240260">0931240260</a></li>
                    <li><a href="tel:09450041352">09450041352</a></li>
                    <li><a href="mailto:info2012@togetherdecoration.com">info2012@togetherdecoration.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Our Facebook</h3>
                  <div class="fb-page" data-href="https://www.facebook.com/Together-Myanmar-1645903575685450/" data-width="220" data-height="72" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright 2016 Together Myanmar. Powered by <a href="http://www.biznet.com.mm/">Biznet.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#main-header"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php site_url(); ?>/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php site_url(); ?>/js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="<?php site_url(); ?>/js/jquery.flexslider.js"></script>
   <script src="<?php site_url(); ?>/js/jquery.fittext.js"></script>
   <script src="<?php site_url(); ?>/js/backstretch.js"></script> 
   <!-- <script src="<?php site_url(); ?>/js/waypoints.js"></script>  -->
   <script src="<?php site_url(); ?>/js/freewall.min.js"></script>  
   <script src="<?php site_url(); ?>/js/jquery.justifiedGallery.min.js"></script>  
   <script src="<?php site_url(); ?>/js/jquery.swipebox.min.js"></script>  
   <script src="<?php site_url(); ?>/js/main.js"></script>

   <script type="text/javascript">
      // var wall = new freewall("#freewall");
      // wall.reset({
      //   selector: '.brick',
      //   animate: true,
      //   cellW: 350,
      //   cellH: 'auto',
      //   gutterX: 0,
      //   gutterY: 0,
      //   onResize: function() {
      //     wall.fitWidth();
      //   }
      // });
      
      // wall.container.find('.brick img').load(function() {
      //   wall.fitWidth();
      // });
      // wall.fitWidth();

      // $("#freewall").justifiedGallery({
      //   margins: 0,
      //   rowHeight : 200,
      //   lastRow: 'justify',
      // });

      // $(window).scroll(function() {
      //     if($(window).scrollTop() + $(window).height() == $(document).height()) {
      //         for (var i = 0; i < 40; i++) {
      //             $('#freewall').append('<a>' +
      //                 '<img src="<?php site_url() ?>/data/aluminium-and-glass/'+ i +'.jpg" />' + 
      //                 '</a>');
      //         }
      //         $('#freewall').justifiedGallery('norewind');
      //     }
      // });

      

      // function addSomeImages(limit) {
      //    for (var i = 0; i < limit; i++) {
      //       //var imgIdx = Math.floor(Math.random() * availableImgs.length);
      //       $('#freewall').append('<a>' +
      //          //'<img src="' + availableImgs[imgIdx].src + '" />' + 
      //          '<img src="<?php site_url() ?>/data/aluminium-and-glass/'+ i +'.jpg" />' +
      //       '</a>');
      //    }
      //    $('#freewall').justifiedGallery('norewind');
      // }

      // $('#freewall').justifiedGallery({
      //    rowHeight : 120
      // });

      // addSomeImages(10);
      // $(window).scroll(function() {
      //    if($(window).scrollTop() + $(window).height() == $(document).height()) {
      //       addSomeImages(5);
      //    }
      // });

      $('#freewall').justifiedGallery({
          lastRow : 'justify', 
          rowHeight : 200, 
          rel : 'gallery2',
          margins : 0
      }).on('jg.complete', function () {
          $('#freewall a').swipebox();
      });


    </script>

</body>

</html>