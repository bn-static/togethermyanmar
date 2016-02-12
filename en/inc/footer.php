<!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About Together Decoration</h3>
               
            <p>We are Together Decoration located in Yangon and Naypyidaw. We offers wide range of interior and exterior decoration including teak funiture, stainless steel, painting, iron works, aluminium and glass.
            </p>

            <div class="fb-page" data-href="https://www.facebook.com/Together-Myanmar-1645903575685450/" data-height="72" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Yangon</h3>
                  <p>
                  <a href="/en/contact.php#maps">No (132), Corner of Ywarma Kyaung Street &amp; Baho Road, (1) Quarter, (Htun Thitsa Car Servicing Compound) Hlaing Tsp, Yangon</a>
                  </p>

                  <ul>
                    <li><a href="tel:095088123">095088123</a></li>
                    <li><a href="tel:098620123">098620123</a></li>
                    <li><a href="mailto:info2002@togetherdecoration.com">info2002@togetherdecoration.com</a></li>
                  </ul>                   
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Naypyitaw</h3>
                  <p><a href="/en/contact.php#maps">No.(117), Pyinmanar Taungnyo Road, Thapyaygone Qtr, Zabuthiri Tsp, Naypyidaw</a></p>
                  <ul>
                    <li><a href="tel:067414014">067414014</a></li>
                    <li><a href="tel:095182651">09 5182651, 0949330123</a></li>
                    <li><a href="mailto:info2002@togetherdecoration.com">info2002@togetherdecoration.com</a></li>
                  </ul> 
                  <img src="https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Ftogetherdecoration.com&chs=80x80&choe=UTF-8&chld=L|2">
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright 2016 Together Myanmar. Powered by <a href="http://www.biznet.com.mm/">Biznet.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#fb-root"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->

   <div class="social-buttons">
      
   </div>
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

      if ($('#hero-slider').length == 0) {
         $('.social-buttons').html('<div class="fb-like" data-href="'+ window.location.href +'" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><a href="https://twitter.com/share" class="twitter-share-button"{count} data-hashtags="togetherdecoration">Tweet</a>');
         !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
      };

    </script>

</body>

</html>