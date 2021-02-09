<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

    <!-- header -->
    <header id="header" class="" role="banner">
      <div class="header-wrapper">

        <div class="header-main">
          <div class="header-main-inner container">

            <div class="head-logo">
              <a class="head-logo-text" href="<?php echo esc_url( home_url() ); ?>">
                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                <!-- <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
                마음수련 명상센터
              </a>
            </div><!-- /logo -->

            <nav class="mmc-head-nav" role="navigation">
              <?php MMC_nav('mmc-nav-lists'); ?>
            </nav><!-- /nav -->

            <a class="head-cta">
              <div class="head-cta-btn">
                <span class="cta-text">
                  방문예약
                </span>
              </div>
            </a>

          </div>
        </div>
      </div>
    </header>
    <!-- /header -->

    <!-- wrapper -->
		<div class="wrapper">

