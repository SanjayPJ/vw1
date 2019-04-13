<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vimanam
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

    <footer class="pt-5">
        <div class="w-80 pt-4">
            <div class="img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-main.png" alt="Logo">
            </div>
            <div class="row pb-4">
                <div class="col-12 col-sm-4">
                    <div class="base-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-main.png" alt="logo">
                    </div>
                </div>
                <div class="col-12 col-sm-5">
                    <h4 class="">OUR BLOG</h4>

                    <?php $my_query = new WP_Query(array(
                        'post_type' => 'post',
                        'order'     => 'DESC',
                        'posts_per_page' => 2,
                    )); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="row pt-3 mt-4 blog-section">
                            <div class="col-3 col-md-4 back-b">
                                <img class="border border-1 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/1b.jpg" alt="Blog Image 1" style="width: 98%">
                            </div>
                            <div class="col-9 col-md-8">
                                <h5 class="text-uppercase text-white"><a class="text-white" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                    <hr>
                    <a href="<?php echo get_home_url(); ?>/blog" class="btn btn-sm ghostbtn mt-1"><span class="">SHOW ALL</span></a>
                </div>
                <div class="col-12 col-sm-3 spacer-md">
                    <h4>SUPPORT CENTER</h4>
                    <p class="mt-4">Have a question about Vimanam services for your property or asset? Or want to learn
                        more about becoming a Vimanam pilot? Visit our FAQ. </p>
                    <hr>
                    <a href="<?php echo get_home_url(); ?>/faq" class="btn btn-sm ghostbtn mt-1"><span class="">FAQ'S</span></a>
                </div>
            </div>

        </div>
        <div class="last py-3 mt-5">
            <div class="w-80">
                <small>Copyright &copy;<span>2016</span>-<span class="year"></span> www.vimanam.in All Rights Reserved.</small>
                <small class="float-right">Made with <i class="fas fa-heart px-1 text-danger"></i> by <a href=""><b><i><span
                                    class="text-light">tenzero</span>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightgallery-all.min.js"></script>
    <!-- <script src="assets/js/script.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
