<?php
/*
	Template Name: About Us Page
 */

get_header();
?>

<div class="hero-wrapper-sub" style="overflow:hidden">
     <div class="hero-logo-container"></div>
     <nav class="navbar navbar-expand-lg navbar-dark w-80 text-uppercase">
          <a class="navbar-brand" href="#">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-Main.png" alt="Logo">
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
          <h1 class="px-4 text-uppercase">About Us</h1>
          <p class="text-white mt-4">Home / About Us</p>
     </div>
</div>
<div class="main-body py-5">
     <div class="w-80 py-5">
          <div class="pb-5 mb-3 px-4 text-center">
               <div class="container text-justify">
                    <p>Established as a start-up, Vimanam is an aerial photography and filming company based in
                         India that has been nurtured by emerging aeronautical engineers and professional drone
                         pilots. We make use of Digital Surface Models(DSM), topography data, 3D digital elevation
                         models, to enable pertinent decisions relating to inspection, maintenance, survey and
                         planning of any space. Our professional and detail-oriented approach to drone photography
                         lets you have a bird’s eye view of anywhere, anything and anyone that you wish to! We
                         carve to offer highly creative content and unmatched service through powerful blend of
                         technology and expertise. Our experienced and talented team of technicians, operators and
                         project managers treat each project as unique and tailor our approach to meet the
                         specific needs of our clients.We currently operate in the Chennai area. Businesses outside of a
                         20 mile radius may require travel expenses. Please contact for more details.</p>
               </div>
          </div>
          <div class="pb-5 mb-3 px-4 text-center">
               <h1 class="text-uppercase">Reaching for the SKY</h1>
               <div class="container text-justify">
                    <p>Each client is different from the other and has different needs, and we personalise each
                         package according to their requirements.
                         Our clienteles come from different backgrounds and have completely different operations
                         required from our end. Some maybe one time project while some may require our services
                         for longer periods of time.
                         With a diverse experience through our prestigious clienteles, we have got hands on
                         knowledge for every kind of project. We strive for the best and believe that quality is
                         key!
                         Do have a look at our prestigious clientele listed below, hoping to see you on it soon!</p>
                    <h3 class=" text-center text-uppercase d-inline">Vision</h3>
                    <p class="d-inline"> - "To work incessantly to offer the customers the most impeccable aerial
                         filming experience that can be."</p>
                    <h3 class=" text-center text-uppercase d-inline">Mission</h3>
                    <p class="d-inline "> - "To work incessantly to offer the customers the most impeccable aerial
                         filming experience that can be."</p>
               </div>
          </div>
          <div class="pb-5 mb-3 px-4 text-center">
               <h1 class="text-uppercase">get in touch</h1>
               <div class="container">
                    <p class="text-center">We're here to help! If you have any questions regarding our services or
                         anything else drone related please send us an email via the contact form.</p>
                    
                    <?php while( have_posts()) : the_post(); ?>

                    <?php the_content(); ?>
                    
                    <?php endwhile; ?>

                    <div class="alert alert-primary mt-5">
                         <h3 class="text-left text-uppercase">Contact</h3>
                         <address class="text-left">
                              Kodambakkam, Chennai
                              <a href="mailto:info@vimanam.com , support@vimanam.in">info@vimanam.com ,
                                   support@vimanam.in</a>
                              <a href="tel:+918248147552+919941419490" class="contacts_phone">+91-8248147552
                                   , +91 9941419490</a>
                         </address>
                    </div>
               </div>
          </div>
     </div>
</div>

<?php
get_footer();