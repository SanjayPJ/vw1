<?php
/*
	Template Name: Home Page
 */

get_header();
?>

<section class="hero-wrapper">
    <div class="hero-image"></div>
    <div class="hero-logo-container"></div>
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase w-80">
        <a class="navbar-brand" href="<?php echo esc_url( get_permalink(7) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-main.png" alt="Logo">
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
    <div class="w-80">
        <div class="hero-text">
            <h1>DRONE SERVICES <br>
                FOR ALL INDUSTRIES</h1>
            <h6>Temporally and Financially Favourable Cutting<br>
                Edge State of The Art Drone technology<br>
                At Your Service.</h6>
            <a href="<?php echo get_home_url(); ?>/services" class="btn ghostbtn mt-4"><span class="">LEARN MORE</span></a>
        </div>
    </div>
</section>
<section class="features py-4">
    <div class="w-80 py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drone.svg" alt="AERIAL PHOTOGRAPHY SERVICES">
                    </div>
                    <div class="col-10 text-white">
                        <h3>AERIAL PHOTOGRAPHY SERVICES</h3>
                        <p class="mt-2">Our experienced pilots are capable of flying our agile drones close to
                            difficult locations, day or night while maintaining the highest standards in safety and
                            operation. Drone Photography Services are pioneering commercial drone photography
                            flying up to 400ft, turning new ideas for aerial imagery into stunning reality.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 spacer-md">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drone1.svg" alt="AERIAL MAPPING">
                    </div>
                    <div class="col-10 text-white">
                        <h3>AERIAL MAPPING</h3>
                        <p class="mt-2">We specialize in producing sophisticated 3D digital elevation models and
                            topographical maps.Our aerial data capture and data processing solutions enable you to
                            deliver imaging data more quickly than ever before, ultimately saving time and cutting
                            project costs.We use the latest data acquisition and processing technologies.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row spacer">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smart-farm.svg" alt="REPAIR, SERVICE OF DRONES">
                    </div>
                    <div class="col-10 text-white">
                        <h3>REPAIR, SERVICE OF DRONES</h3>
                        <p class="mt-2">Our skilled repair engineers can help get your drone back in the air. We
                            thoroughly inspect and test fly every repaired aircraft for improved performance.
                            Services include: Property Tours, Drone Course & more. We ensure our customers with
                            excellent customer service, impeccable product quality, and innovative thinking.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 spacer-md">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/remote-control.svg" alt="INSPECTIONS/ MONITORING">
                    </div>
                    <div class="col-10 text-white">
                        <h3>INSPECTIONS/ MONITORING</h3>
                        <p class="mt-2">Drone inspection solutions are at least 4x faster than traditional climbing
                            and inspection methods.High definition drone videos make way for real-time
                            identification of potential problems through cost-effective automated surveillance and
                            monitoring of areas that are difficult to reach like drilling rigs, oil pipe-lines etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about bg-light py-4">
    <div class="w-80 py-5">
        <div class="row">
            <div class="tenp">
                <div class="rotate">
                    <h2>ABOUT US</h2>
                </div>
            </div>
            <div class="ninp">
                <div class="row pr-5 pl-3">
                    <div class="newspaper px-3">
                        <h3 class="colored">WHO WE ARE</h3>
                        <p class="my-3">Established as a start-up, Vimanam is an aerial photography and filming
                            company based in India that has been nurtured by emerging aeronautical engineers and
                            professional drone pilots. We ensure captivating and impressive images and videos
                            consistently. Currently operating in Chennai,We make use of Digital Surface Models
                            (DSM), topography data, 3D and 2D digital elevation models, to enable pertinent
                            decisions relating to inspection, maintenance, survey and planning of any space.</p>
                        <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/t1.jpg" alt="Our CEO Arveen Raj">
                        <h3 class="colored mt-4">ARVEEN RAJ (CEO)</h3>
                        <p class="mt-3">
                            Vimanam, is Arveen’s brain child which was established as a start-up to capture the
                            niche market of aerial photography and filming. Having completed his aeronautical
                            Engineering from Anna University along with certifications in Drone pilot of aerial
                            vehicles,
                            Arveen from the beginning has been focused and very passionate about this industry and
                            his profession. This is how the idea of Vimanam – a company specializing in drone
                            photography was born!
                            The professional aerial photographers make use of ready-to-fly aerial drones to capture
                            mind-blowing shots by combining GPS programmed flight paths with automatic camera
                            targeting.The possibilities with a drone does not limit to just videotaping or taking
                            magnificent pictures but are extended to many more options.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery py-4">
    <div class="w-80 py-5">
        <div class="row">
            <div class="tenp">
                <div class="rotate">
                    <h2>GALLERY</h2>
                </div>
            </div>
            <div class="ninp">
                <div class="row no-gutters">
                    <div class="col-12 col-md-8">
                        <div class="row back-b no-gutters">
                            <div class="col-6" id="lightgallery">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/1g.jpg">
                                    <img style="width: 100%; height: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/1g.jpg" alt="Gallery Image 1">
                                </a>
                            </div>
                            <div class="col-6">
                                <div id="video-gallery">
                                    <a href="https://youtu.be/HCx6zyKUkjA" data-poster="<?php echo get_template_directory_uri(); ?>/assets/img/2ge.jpg">
                                        <img style="width: 100%; height: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/2ge.jpg" alt="Gallery Image 2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="video-gallery1" class="back-b">
                                    <a href="https://youtu.be/Ds2PYdTX4cs" data-poster="<?php echo get_template_directory_uri(); ?>/assets/img/3ge.jpg">
                                        <img style="width: 100%; height: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/3ge.jpg" alt="Gallery Image 3">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row no-gutters back-b">
                            <div class="col-6 col-md-12" id="lightgallery1">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/5g-f.jpg">
                                    <img class="gf" style="width: 99%; height: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/5g.jpg" alt="Gallery Image 4">
                                </a>
                            </div>
                            <div class="col-6 col-md-12" id="lightgallery2">
                                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/4g.jpg">
                                    <img style="width: 98%; height: 100%" src="<?php echo get_template_directory_uri(); ?>/assets/img/4g.jpg" alt="Gallery Image 5">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="testimonials py-4 bg-light">
    <div class="w-80 py-5">
        <div class="row">
            <div class="tenp">
                <div class="rotate">
                    <h2>TESTIMONIALS</h2>
                </div>
            </div>
            <div class="ninp mt-5">
                <?php 
                    query_posts(array( 
                        'post_type' => 'testimonials',
                    ) );  
                ?>
                <div class="owl-carousel owl-theme mt-5">

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="item">
                            <h4><?php the_content(); ?></h4>
                            <h3 class="mt-5">- <?php the_title(); ?></h3>
                        </div>
                    <?php endwhile; wp_reset_query();?>
                </div>
                <div class="row my-5 pt-3 text-center">
                    <div class="col-4 col-md-2">
                        <img src="<?php the_field('logo_1'); ?>" alt="Company Logo 1">
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="<?php the_field('logo_2'); ?>" alt="Company Logo 2">
                    </div>
                    <div class="col-4 col-md-2 spacer-md">
                        <img src="<?php the_field('logo_3'); ?>" alt="Company Logo 3">
                    </div>
                    <div class="col-4 col-md-2 spacer-md">
                        <img src="<?php the_field('logo_4'); ?>" alt="Company Logo 4">
                    </div>
                    <div class="col-4 col-md-2 spacer-md">
                        <img src="<?php the_field('logo_5'); ?>" alt="Company Logo 5">
                    </div>
                    <div class="col-4 col-md-2 spacer-md">
                        <img src="<?php the_field('logo_6'); ?>" alt="Company Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services py-4">
    <div class="w-80 py-5">
        <div class="row pr-5 pl-3">
            <div class="tenp">
                <div class="rotate">
                    <h2>FEATURED SERVICES</h2>
                </div>
            </div>
            <div class="ninp mt-3">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/1f.jpg" alt="Featured Services 1">
                        <h3 class="colored text-uppercase mt-5">Events & Sports Coverage</h3>
                        <ul class="mt-4 p-0">
                            <li>Corporate Events</li>
                            <li>Sports</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/2f.jpg" alt="Featured Services 2">
                        <h3 class="colored text-uppercase mt-5">Property Tours</h3>
                        <ul class="mt-4 p-0">
                            <li>Commercial Real Estate</li>
                            <li>High-End Residential <span class="sec">Flyovers/Walkthroughs</span></li>
                            <li>Country Clubs/Golf Courses</li>
                            <li>Schools/Universities</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 spacer-md">
                        <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/3f.jpg" alt="Featured Services 3">
                        <h3 class="colored text-uppercase mt-5">Drone Course</h3>
                        <ul class="mt-4 p-0">
                            <li>Drone Engineering</li>
                            <li>UAV Pilot Training</li>
                            <li>Drone Repair</li>
                            <li>Aerial Mapping</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 spacer-md">
                        <img class="rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/4f.jpg" alt="Featured Services 4">
                        <h3 class="colored text-uppercase mt-5">PANORAMA 360°</h3>
                        <ul class="mt-4 p-0">
                            <li>Construction</li>
                            <li>Real Estate</li>
                            <li>Landmarks and Cityscapes</li>
                            <li>Residential/Landscape</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news bg-light py-4">
    <div class="w-80 py-5">
        <div class="row pr-5 pl-3">
            <div class="tenp">
                <div class="rotate">
                    <h2>NEWS</h2>
                </div>
            </div>
            <div class="ninp">
                <h3 class="colored">BE THE FIRST ONE TO KNOW</h3>
                <p class="mt-4 mb-4">Sign up for our special offers and referral program.</p>
                <input class="form-control w-75" type="text">
                <a href="" class="btn ghostbtn-green"><span class="">SUBSCRIBE</span></a>
                <h3 class="colored mt-5">DRONE ENGINEERING & PILOT TRAINING COURSE</h3>
                <p class="mt-4">We offer training on how to operate the latest technology drones and how to pilot
                    them, right from the basic level. With our drone camera technology, we will teach them how to
                    make the best use of aerial photography along with filming using the equipment.</p>
                <a href="<?php echo get_home_url(); ?>/drone-courses" class="btn ghostbtn-green mt-2"><span class="">LEARN MORE</span></a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
