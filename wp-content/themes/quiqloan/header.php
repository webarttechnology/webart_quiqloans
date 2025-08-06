<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quiqloans | By CountryWide Capital</title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	
	
	
    <!-- fevicon -->
    <!--<link rel="shortcut icon" href="images/favicon.ico">-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" />

    <!-- slider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.min.css" />

    <!-- animation -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/materialdesignicons.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" type="text/css" />
	<?php wp_head(); ?>
	
	
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3104620526453185');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3104620526453185&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-230006187-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-230006187-1');
</script> 

	
</head>
<body  <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

        <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
            <div class="container position-relative">

                <!-- LOGO -->
                <a class="navbar-brand text-uppercase text-center" href="<?php echo get_site_url();?>">
                    <h3 class="logo-light" style="color: #ffffff;"><?php echo get_bloginfo( 'name' ); ?></h3>
					<p class="text-white text-center">
						<?php echo get_bloginfo( 'description' ); ?>
					</p>
                    <h3 class="logo-dark" style="color: #333333;"><?php echo get_bloginfo( 'name' ); ?></h3>
					
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
				
				<a href="<?php echo get_site_url();?>/products
" class="our-prod">Our Products</a>

                <!--<div class="collapse navbar-collapse" id="navbarCollapse">-->
                <!--    <ul class="navbar-nav mx-auto" id="navbar-navlist">-->
                <!--        <li class="nav-item">-->
                <!--            <a class="nav-link active" href="#home">Home</a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a class="nav-link" href="#features">Features</a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a class="nav-link" href="#review">Review</a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a class="nav-link mb-3 mb-lg-0" href="#contact">Contact</a>-->
                <!--        </li>-->
                <!--    </ul>-->
                    
                <!--</div>-->
            </div>
        </nav>
        <!-- End Navbar -->
          <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-close">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body p-5">
                            <div class="text-center mb-5">
                                <h4 class="modal-title" id="exampleModalLongTitle">Sing Up</h4>
                                <p class="fs-14">Already have an account? <a href="javascript:void(0)">Log in here</a></p>
                            </div>
                            <div class="d-grid gap-3">
                                <a class="btn btn-outline-dark btn-lg" href="javascript:void(0)">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xs me-2" src="images/google.jpg" alt="Image Description">
                                    Sign up with Google
                                </span>
                                </a>
                                <a class="btn btn-primary btn-lg" href="javascript:void(0)">Sign up with Email</a>
                                <div class="text-center">
                                    <p class="mb-0 fs-13">By continuing you agree to our <a class="text-primary" href="javascript:void(0)">Terms and Conditions</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-block text-center px-5 pb-5">
                            <p class="footer-text mb-4">Trusted by the world's best teams</p>
                            <div class="mx-auto">
                              <div class="row justify-content-between">
                                <div class="col">
                                  <img class="img-fluid" src="images/github.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/gitlab.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/linkedin.svg" alt="Logo">
                                </div>
                                <div class="col">
                                    <img class="img-fluid" src="images/instagram.svg" alt="Logo">
                                </div>
                              </div>
                            </div>
                            <!-- End Row -->
                          </div>
                    </div>
                </div>
            </div>
        <!-- End modal -->
