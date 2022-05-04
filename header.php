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