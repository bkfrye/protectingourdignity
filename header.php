<!doctype html>
<html>

<head profile="http://gmpg.org/xfn/11">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-218191101-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-218191101-1');
  </script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />

  <?php
  if (is_front_page()) { ?>
    <title><?php bloginfo('name'); ?></title>
  <?php  } ?>

  <?php
  if (!is_front_page()) { ?>
    <title><?php wp_title(' | ', true, 'right')  . bloginfo('name'); ?></title>
  <?php  } ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php include("includes/main-nav.php"); ?>

	<div class="sticky">
		<div id="social-share" class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_linkedin"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
	</div>