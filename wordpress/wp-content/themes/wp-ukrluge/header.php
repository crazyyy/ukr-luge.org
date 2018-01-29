<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
  <link rel="dns-prefetch" href="http://s.w.org/">
  <link href="http://www.google-analytics.com/" rel="dns-prefetch">

  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C700%2C700italic%7CMontserrat%3A400%2C400italic%2C700%2C700italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.min.css" type="text/css" media="all" >

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<body class="home blog custom-background wp-custom-logo post-layout-two-columns infinite-scroll neverending infinity-success" data-gr-c-s-loaded="true">
  <div id="page" class="hfeed site">

    <div id="header-top" class="header-bar-wrap">
      <div id="header-bar" class="header-bar container clearfix">

        <div id="header-social-icons" class="header-social-icons social-icons-navigation clearfix">
          <?php wpeHeadSocNav(); ?>
        </div>

        <nav id="main-navigation" class="primary-navigation navigation clearfix" role="navigation">
          <div class="main-navigation-menu-wrap">
            <?php wpeHeadNav(); ?>
          </div>
        </nav><!-- #main-navigation -->

      </div>
    </div>

    <header id="masthead" class="site-header clearfix" role="banner">
      <div class="header-main container clearfix">
        <a href="<?php echo home_url(); ?>" id="logo" class="site-branding clearfix">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          <h1>Федерація санного спорту України</h1>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-second.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
        </a>
        <!-- .site-branding -->
      </div>
      <!-- .header-main -->
    </header>
    <!-- #masthead -->
    <div id="content" class="site-content container clearfix">

