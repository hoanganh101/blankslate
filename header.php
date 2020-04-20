<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="<?php bloginfo('template_directory') ?>Assets/App/images/favicon.png" type="image/x-icon" >
<link href="<?php bloginfo('template_directory') ?>Assets/Lib/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>Assets/Lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>Assets/Lib/OwlCarousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>Assets/Lib/OwlCarousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>Assets/Lib/animate.css" rel="stylesheet" type="text/css"/>
<link href="<?php bloginfo('template_directory') ?>Assets/App/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>Assets/App/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory') ?>/Assets/App/css/home-page.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">
<div id="site-title">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu">
<div id="search"><?php get_search_form(); ?></div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">