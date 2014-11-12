<!doctype html>
<!--[if IE 8]> <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/structure/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/library/img/touch/chrome-touch-icon-196x196.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Hidden Pineapple">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet" type="text/css">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

    <header>
      <div class="container">

        <div class="row">
          <div class="span12">
            <a href="<?php echo home_url(); ?>" class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/hidden-pineapple.svg" alt="Hidden Pineapple" width="48" height="48">
            </a>
            <nav class="nav nav-main">
              <?php wp_nav_menu(array(
                'container' => false,
                'container_class' => '',
                'menu' => __( 'The Main Menu', 'bonestheme' ),
                'menu_class' => '',
                'theme_location' => 'main-nav',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0
              )); ?>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <?php if ( is_home() ) : ?>
            <h1>Check in for some news.</h1>
            <?php elseif ( is_single() ) : ?>
            <h1><?php the_title(); ?></h1>
            <?php else : ?>
            <h1><?php the_field('headline'); ?></h1>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </header>