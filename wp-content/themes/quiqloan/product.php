<?php
/**Template Name: Product
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

<section class="section cta">
            
            <div class="container">
                <div class="row justify-content-center text-center">
                   
                </div><!-- end row-->
            </div><!-- end container-->
        </section>

<section class="section team" style="z-index: 1;">
            <div id="particles-js" style="z-index: -1;">
            <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1349" height="684"></canvas></div>
            <!-- end particles -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Products</h2>
                            <p class="text-muted fs-17">Choose an option from the following and apply for a loan.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->
                <div class="row gy-4">
                    <?php
                    $args = array (
                    'post_type'              => 'product',
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
                    <div class="col-lg-4 col-sm-6">
                        <div class="team-card">
                            <div class="team-card-img">
                               <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="image">
                                
                            </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0"><?php the_title(); ?></h5>
                                <div class="feature">
                                <?php the_content(); ?>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="<?php the_field('add_link');?>" target="_blank">Apply Now</a>
                        </div>
                    </div><!-- End col -->
                    <?php $count++; } } wp_reset_postdata(); ?>
                    
                </div><!-- end row-->
            </div><!-- end cotainer-->
        </section>

<?php
get_footer();
