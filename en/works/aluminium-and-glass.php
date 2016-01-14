<?php require('../inc/header.php') ?>


   <!-- Page Title
   ================================================== -->
   <section id="page-title">	
   	  
		<div class="row">

			<div class="twelve columns">

				<h1>Aluminium and Glass<span>.</span></h1>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->


   <!-- Content
   ================================================== -->
   <section id="content" style="padding-top:0;">

   	<div class="portfolio-content">
				<div class="entry-content">
					<div id="freewall">
               <?php for ($i=1; $i < 20 ; $i++) { ?>
                  <div class="brick brooklyn">
                     <img src="<?php site_url() ?>/data/aluminium-and-glass/<?php echo $i; ?>.jpg">
                  </div>
               <?php } ?>
               </div>
				</div>

	   </div> <!-- /portfolio-content -->

   </section> <!-- /content -->  

<?php require('../inc/footer.php') ?>