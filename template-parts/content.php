<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vimanam
 */

?>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testtheme
 */

?>


<div class="col-6 col-md-4 mb-3">
      <div class="card">
           <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
           <div class="card-body">

           			<?php
		if ( is_singular() ) :
			the_title( '<h2 class="card-title text-uppercase">', '</h2>' );
		else :
			the_title( '<h2 class="card-title text-uppercase"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		endif;
			?>
                <p class="card-text"><?php the_excerpt() ?></p>
           </div>
           <div class="card-footer">
                <small class="text-muted"><?php the_author(); ?>, <?php the_date(); ?>, <?php the_category(', ') ?>, <?php the_tags() ?></small>
           </div>
      </div>
 </div>


