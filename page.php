<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
               <h1 class="px-4 text-uppercase">Blog</h1>
               <p class="text-white mt-4">Home / Blog</p>
          </div>
     </div>
     <div class="main-body py-5">
          <div class="py-5 my-5">
               <div class="container blog-container">
                    <div class="row">
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dc1.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase"><a href="single.html">Types of drones</a></h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s1.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase">The new Drone Policy In India(2018)</h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s2.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase">The future of drones</h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s3.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase">Types of drones</h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s4.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase">The new Drone Policy In India(2018)</h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-4 mb-3">
                              <div class="card">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/s5.jpg" class="card-img-top" alt="...">
                                   <div class="card-body">
                                        <h2 class="card-title text-uppercase">The future of drones</h2>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                             natural lead-in to additional content. This content is a little bit
                                             longer.</p>
                                   </div>
                                   <div class="card-footer">
                                        <small class="text-muted">May 11, 2018</small>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <nav aria-label="Page navigation example" class="mt-5">
                         <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                   <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
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
