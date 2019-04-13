<?php
/*
	Template Name: Gallery Page
 */

get_header();
?>

<div class="hero-wrapper-sub" style="overflow: hidden">
        <div class="hero-logo-container"></div>
        <nav class="navbar navbar-expand-lg navbar-dark w-80 text-uppercase" style="z-index: 98">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-main.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-3 text-right">
                        <?php get_template_part( 'template-parts/content', 'nav' ); ?>
                    </ul>
                </div>
        </nav>
        <div class="text-center h1-wrapp">
            <h1 class="px-4 text-uppercase">GALLERY</h1>
            <p class="text-white mt-4">Home / Gallery</p>
        </div>
    </div>
    <div class="main-body pb-5 bg-light">
        <div class="w-80 pb-5">
            <h2 class="mt-5 pt-5 mb-5 text-uppercase">vidoes</h2>
            <div class="row owl-carousel owl-theme" id="video-gallery">
                <a class="col-4 mt-5 col-md-2 item" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="video-poster1.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2 item" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="video-poster1.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1p.png" />
                </a>
                <a class=" col-4 mt-5 col-md-2 item" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="video-poster1.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png" />
                </a>
                <a class=" col-4 mt-5 col-md-2 item" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="video-poster1.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4p.png" />
                </a>
                <a class=" col-4 mt-5 col-md-2 item" href="https://www.youtube.com/watch?v=meBbDqAXago" data-poster="video-poster1.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6p.png" />
                </a>
            </div>
        </div>
    </div>
    <div class="main-body py-5">
        <div class="w-80 pb-5">
            <h2>PHOTOS</h2>
            <div class="row" id="lightgallery3">

                <?php 
                   query_posts(array( 
                       'post_type' => 'photos',
                   ) );  
               ?>
               <?php while (have_posts()) : the_post(); ?>

                    <a class="col-4 mt-5 col-md-2" href="<?php the_field('image'); ?>">
                        <img src="<?php the_field('thumb') ?>" />
                    </a>

              <?php endwhile; wp_reset_query();?>

                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/4p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/5p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/6p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/1p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/4p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/5p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/6p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/5p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png" />
                </a>
                <a class="col-4 mt-5 col-md-2" href="<?php echo get_template_directory_uri(); ?>/assets/img/2p.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1p.png" />
                </a>
            </div>
        </div>
    </div>

<?php
get_footer();
