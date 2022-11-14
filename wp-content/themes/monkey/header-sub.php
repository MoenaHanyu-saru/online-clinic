<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.1.0/dist/simpleParallax.min.js"></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
    <?php if ( get_theme_mod('site_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
    <?php endif; ?>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body>
<div id="pagetop" class="page-top" style="display:block;" data-scroll="">
      <a href="#" class="page-top-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop.jpg" alt="topへ戻る"></a>
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
  <div class="openbtn">
    <span></span>
    <span></span>
  </div>

</header>

<div class="header-menu">
  <?php
    wp_nav_menu( array(
      'theme_location' => 'sub-menu'
    ) );
  ?>
</div>



