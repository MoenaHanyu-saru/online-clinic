<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <?php if ( get_theme_mod('site_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
    <?php endif; ?>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>


<body class="body" id="body">
<div class="cvr">
	<a href="https://lin.ee/jGac2rz"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fv/arrow.png" class="cvr-arrow" alt="">診療予約はこちら</a>
</div>
<header class="header" id="">
  <h1 class="logo">
    <?php
    the_custom_logo();
    if (!has_custom_logo()) {
      bloginfo('name');
    }
    ?>
  </h1>

  <div class="contact-btn">
    <ul>
      <li class="mail"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
      <li class="line"><a href="https://lin.ee/jGac2rz"><i class="fa-brands fa-line"></i></a></li>
    </ul>
  </div>

</header>

<!-- <div class="header-menu">
  <?php
    wp_nav_menu( array(
      'theme_location' => 'main-menu'
    ) );
  ?>
</div> -->



