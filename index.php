<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vimanam
 */

get_header();
?>

<div class="hero-wrapper-sub" style="overflow:hidden">
          <div class="hero-logo-container"></div>
          <nav class="navbar navbar-expand-lg navbar-dark w-80 text-uppercase">
               <a class="navbar-brand" href="#">
                    <img src="assets/img/logo-Main.png" alt="">
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
               <h1 class="px-4 text-uppercase">Blog</h1>
               <p class="text-white mt-4">Home / Blog</p>
          </div>
     </div>
     <div class="main-body py-5">
          <div class="py-5 my-5">
               <div class="container blog-container">
                    <div class="row">

                    	   	<?php
							if ( have_posts() ) :


								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );


								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
                    </div>
       
                    <nav aria-label="Page navigation example" class="mt-5">
                         <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                   <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item">
                                   <a class="page-link" href="#">Next</a>
                              </li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>


<?php
get_footer();
