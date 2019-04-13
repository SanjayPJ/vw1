<?php
/*
	Template Name: Drone Courses Page
 */

get_header();
?>

<div class="hero-wrapper-sub" style="overflow:hidden">
          <div class="hero-logo-container"></div>
          <nav class="navbar navbar-expand-lg navbar-dark w-80 text-uppercase">
               <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-Main.png" alt="">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-3 text-right">
                         <?php get_template_part( 'template-parts/content', 'nav' ); ?>
                    </ul>
               </div>
          </nav>
          <div class="text-center h1-wrapp">
               <h1 class="px-4 text-uppercase">DRONE COURSES</h1>
               <p class="text-white mt-4">Home / Drone Courses</p>
          </div>
     </div>
     <div class="main-body">
          <div class="">
               <div class="bg-light py-5">
                    <div class="text-center py-5">
                         <h1 class="text-uppercase">About our courses</h1>
                         <div class="container">
                              <p>We offer training on how to operate the latest technology drones and how to pilot
                                   them,
                                   right from the basic level. With our drone camera technology, we will teach them how
                                   to
                                   make the best use of aerial photography along with filming using the equipment.</p>
                         </div>
                    </div>
               </div>
               <div class="container my-5 py-5">
                    <div class="row">
                         <div class="col-12 col-sm-6 mb-3">

                              <?php 
                                   query_posts(array( 
                                       'post_type' => 'courses',
                                   ) );  
                               ?>
                               <?php while (have_posts()) : the_post(); ?>

                                   <div class="card">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h2 class="card-title text-uppercase"><?php the_title(); ?></h2>
                                             <p class="card-text"><?php the_content(); ?></p>
                                        </div>
                                   </div>
                              <?php endwhile; wp_reset_query();?>

                         </div>
                    </div>
               </div>
          </div>
     </div>

<?php
get_footer();
