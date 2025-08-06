<?php
/**Template Name: Basic
 *
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
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <?php the_content(); ?>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->
               
            </div><!-- end cotainer-->
        </section>

<?php
get_footer();