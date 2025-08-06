<?php
/** Template Name: Home
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="overflow-hidden-x">
            <!-- Start Home -->
            <section class="section home home-5" id="home">
                <!-- <div class="bg-overlay"></div> -->
                <div class="container">
                    <div class="row gap-lg-0 gap-5 align-items-center">
                        <div class="col-lg-7">
                            <div class="home-heading">
                                <h1 class="mb-3 text-white"><?php the_field('banner_title'); ?> <span class="typewrite text-warning d-none d-sm-inline-block" data-period="2000" data-type='[ "<?php the_field('banner_title_2'); ?>" ]'>
                                    <span class="wrap"></span> </span>
                                </h1>
                            </div>
                                <p class="text-white-50 fs-20"><?php the_field('banner_content'); ?></p>
                            <div class="home-btn hstack gap-2 flex-column d-sm-block">
                                <a class="btn btn-white me-1" href="#contact">Request Free Demo</a>
<!--                                 <a class="modal-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                                    <span class="avatar-sm">
                                        <span class="avatar-title rounded-circle btn-icon bg-white">
                                            <i class="mdi mdi-play text-primary"></i>
                                        </span>
                                    </span>
                                </a> -->
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content home-modal p-1">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <video id="VisaChipCardVideo" class="video-box" controls="">
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                            </div>
                        </div><!-- end col-->
                        <div class="col-lg-5">
                            <div data-aos="fade-left" data-aos-duration="1800">
                                <?php echo do_shortcode('[contact-form-7 id="85" title="Home Contact"]'); ?>  
                                <!--end form-->
                            </div>
                        </div><!--end col-->
                    </div><!-- end row-->
                </div><!--end container-->
                <div class="container">
                    <div class="row">
                        <div class="home-shape">
                            <img src="images/sh01.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div><!--end row-->
                </div>
            </section>
            <!-- End Home -->

            <!-- Start features -->
            <section class="section feature" id="features">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="text-center mb-4">
                                <h2 class="heading"><?php the_field('business_eligible_heading'); ?></h2>
                                <p class="text-muted fs-17">Even if your business did not have a revenue reduction or was deemed essential... You can still qualify for ERC!</p>
                            </div>
                        </div><!-- end col-->
                    </div><!-- end row-->
                    <div class="row justify-content-center">
						<?php if( have_rows('business_eligible') ): ?>									
                       <?php while ( have_rows('business_eligible') ) : the_row(); ?>						
                        <div class="col-lg-4 col-md-7 mt-sm-4">
                            <div data-aos="fade-right" data-aos-duration="1800">
                                <div class="feature-card p-3 py-sm-4 rounded d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                            <div class="content">
                                                <h5 class="title"><?php the_sub_field('title'); ?></h5>
                                                <p class="text-muted"><?php the_sub_field('contents'); ?></p>
<!--                                                 <a href="javascipt:void(0)" class="text-dark">Read More <i class="mdi mdi-chevron-right"></i></a> -->
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <?php endwhile; ?>
		               <?php endif; ?>
                    </div><!-- end row -->
                    <div class="row my-sm-5 py-5 align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div data-aos="fade-right" data-aos-duration="1800">
                                <div class="card bg-transparent border-0 mb-3 mb-lg-0">
									<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
                                    <img src="<?php echo $image[0]; ?>" class="img-fluid rounded-3" alt="">
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-lg-5">
                            <div data-aos="fade-left" data-aos-duration="1800">
                                <h3 class="feature-heading mb-2"><?php the_field('necessary_heading'); ?></h3>
                                <p class="text-muted"><?php the_field('necessary_content'); ?></p>
                                
                                <ul class="feature-list">
                                    <?php the_field('necessary_points'); ?>
                                </ul>
                                <a class="btn btn-primary" href="<?php echo get_site_url();?>/products/)">Our Products</a> 
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    
                </div><!-- end container -->
            </section>
            <!-- end Features -->

            <!-- Start cta -->
            <section class="section cta">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div data-aos="fade-down" data-aos-duration="1800">
                                <!--<h3 class="fw-bold">Stay Connected</h3>-->
                               <?php the_field('home_section_1'); ?>
<!--                                 <a class="btn btn-primary" href="javascript:void(0)">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End cta -->

            <!-- Start Reviews -->
            <section class="section reviews" id="review">
                
            </section>
            <!-- End Reviews -->


         

<!-- Start Team -->
<section class="section team" style="z-index: 1;">
    <div id="particles-js" style="z-index: -1;">
    </div>
    <!-- end particles -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h2 class="heading">Our Funding and Success</h2>
                    <p class="text-muted fs-17">Even if your business did not have a revenue reduction or was deemed essential... You can still qualify for ERC!</p>
                </div>
                </div><!-- end col-->
                </div><!-- end row -->
               
                    <div class="owl-slider">
                        <div id="abtcarousel" class="owl-carousel">   
                        <?php
                    $args = array (
                    'post_type'              => 'gallery',
                    'post_status'            => 'publish',
                    'order'                  => 'ASC',
                    'posts_per_page'=>-1
                    );
                    $count=1;
                    $banner = new WP_Query( $args );
                    if ( $banner->have_posts() ) {
                    while ( $banner->have_posts() ) {
                    $banner->the_post();
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                ?>                      
                            <div class="item">
                                <div class="team-card">
 

                                    <div class="team-card-img">
										<a href="<?php echo $image[0]; ?>" data-fancybox="images" data-caption="Gallery Image"><img class="img-fluid" src="<?php echo $image[0]; ?>" alt="image"></a>
                                        <div class="team-social-icons">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0)" target="">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0)" target="">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0)" target="">
                                                        <i class="mdi mdi-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0)" target="">
                                                        <i class="mdi mdi-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                                                     
                                </div>
                            </div>   
                            <?php $count++; } } wp_reset_postdata(); ?>                                                                                                                   
                        </div>
                    </div>               
                </div><!-- end cotainer-->
            </section>
                <!-- End Team -->
                
                   <!-- Start cta -->
            <section class="section cta">
                <marquee behavior="" direction="left"><p class="mb-0"><?php the_field('home_section_heading_2'); ?> </p></marquee>
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div data-aos="fade-down" data-aos-duration="1800">
                                <div class="cta-heading"><?php the_field('home_subheading'); ?>
                              </div>
                                    <p><?php the_field('home_section_2'); ?></p>
                                    <!-- <p class="fs-18">Limited signup only. Order today before the discount period end.</p> -->
<!--                                     <a class="btn btn-primary" href="javascript:void(0)">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End cta -->

            <!-- Start contact -->
            <section class="section contact" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-5">
                                <h2 class="heading">Contact Us</h2>
                                <p class="text-muted mt-2 fs-17">Even if your business did not have a revenue reduction or was deemed essential... You can still qualify for ERC!</p>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-6">
                            <div data-aos="fade-right" data-aos-duration="1800">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="map">  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" 
                                            width="100%" height="325" style="border: 0" allowfullscreen></iframe>  </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-duration="1800">
                                <?php echo do_shortcode('[contact-form-7 id="84" title="Contact"]'); ?>
                                <!--end form-->
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </section>
            <!-- End contect -->

<?php 
get_footer();

?>