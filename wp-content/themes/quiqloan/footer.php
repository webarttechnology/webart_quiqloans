<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<!-- START FOOTER -->
            <footer class="section footer">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-10 text-center">  
                            <a href="javascript:void(0)"><h4 class="logo-light" style="color: #fff;"><?php echo get_bloginfo( 'name' ); ?></h4><p class="text-white">
								<?php echo get_bloginfo( 'description' ); ?>
								</p></a>
                            <p class="mx-auto mt-sm-4"><?php the_field('description','option'); ?></p>
							</div>
						</div>
							<div class="row justify-content-center">
                            <div class="col-lg-12">
                              <div class="text-center mt-3">
                                  <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mx-lg-3 m-2">
                                            <a class="text-white" href="https://ercspecialists.firstpromoter.com/?fpr=jack33?sref=c53naly" target="_blank">Become An Affiliate</a>
                                       </li>                                                                                                                  
                                    </ul>
                               </div>
                            </div>
								<div class="col-lg-12">
                              <div class="text-center ftrmenu mt-3">
								  <?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '', 'items_wrap' => ' <ul class="list-unstyled mb-0">%3$s</ul>' ));?>
<!--                                   <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mx-lg-3 m-2">
                                            <a class="text-white" href="https://ercspecialists.firstpromoter.com/?fpr=jack33?sref=c53naly" target="_blank">Become An Affiliate</a>
                                       </li>                                                                                                                  
                                    </ul> -->
                               </div>
                            </div>
                       </div>
					<div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                            <ul class="list-unstyled mb-0 mt-4 social-icon">
                                <li class="list-inline-item"><a href="<?php the_field('facebook','option'); ?>"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="<?php the_field('twitter','option'); ?>"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="<?php the_field('instagram','option'); ?>"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->                       
                </div><!--end container-->
            </footer>
            <!-- END FOOTER -->


            <!-- FOOTER-ALT -->
            <div class="footer-alt pt-3 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-white fs-15">©
                                    <script>document.write(new Date().getFullYear())</script> <?php the_field('copyright','option'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END FOOTER-ALT -->
        
        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!--Custom js-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/counter.js"></script>

        <!--Bootstrap Js-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

        <!-- animation -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>

        <!-- contact -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>

        <!-- Team particles-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>

        <!-- App Js -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
         <script type="text/javascript">
    jQuery("#abtcarousel").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 20,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1024: {
                items: 4
            },
            1366: {
                items: 4
            }
        }
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
