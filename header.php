<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vimanam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>					

	    <!-- SEO -->
    <meta name="title" content="Vimanam - The One Stop Drone Solution">
    <meta name="description" content="Vimanam is an Aerospace Company established to build design and operate UAV systems. Customized drone solutions to cater various industrial needs.">
    <meta name="keywords" content="Drone Services in India, Drone Survey in India, Aerial Survey in India, Aerial Inspection in India, Aerial Mapping in India, Infrastructure Drone Survey, Wind Turbine Inspection, Solar Panel Inspection, Aerial Photography & Videography">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="TenZero - Web Solutions">


    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <!-- Google Font Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <!-- lightgallery -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightgallery.min.css">
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css"> -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bundle.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">	
	<div id="content" class="site-content">
	<div class=preloader>
	    <div class=loader>
	        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.svg">
	    </div>
	</div>
	<nav class="navbar-dark bg-dark py-2">
	    <!-- Navbar content -->
	    <div class="w-80">
	        <div class="row">
	            <div class="col-12">
	                <div class="contact float-left">
	                    <span class="sm-contact">
	                        <a href="tel:+918248147552+919941419490">
	                            <i class="fas fa-phone mr-1"></i>
	                            +(91) 824 814 7552
	                        </a>
	                    </span>
	                    <span class="sm-contact ml-3">
	                        <a href="mailto:info@vimanam.com , support@vimanam.in">
	                            <i class="fas fa-envelope mr-1"></i>
	                            info@vimanam.in
	                        </a>
	                    </span>
	                </div>
	                <div class="social-media float-right">
	                    <span class="icon-wrapper">
	                        <a href="https://www.facebook.com/vimanamaerospace/"><i class="fab fa-facebook-f"></i></a>
	                    </span>
	                    <span class="icon-wrapper">
	                        <a href="https://www.instagram.com/vimanam_aerospace/?hl=en"><i class="fab fa-instagram"></i></a>
	                    </span>
	                    <span class="icon-wrapper">
	                        <a href="https://twitter.com/Vimanamaerospac/"><i class="fab fa-twitter"></i></a>
	                    </span>
	                    <span class="icon-wrapper">
	                        <a href="https://in.linkedin.com/in/vimanam-aerospace-1b968a157"><i class="fab fa-linkedin-in"></i></a>
	                    </span>
	                </div>
	            </div>
	        </div>
	    </div>
	</nav>
