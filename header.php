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
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
  <!-- Css -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-half.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/generic-left.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/generic-center.css">
  <link rel="stylesheet" href="https://use.typekit.net/oqv2skg.css">


  <?php
  if (is_front_page()) { ?>
    <title><?php echo '';
            bloginfo('name'); ?></title>
  <?php  } ?>

  <?php
  if (!is_front_page()) { ?>
    <title><?php wp_title('');
            echo ' | ';
            bloginfo('name'); ?></title>
  <?php  } ?>


  <?php wp_head(); ?>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      if (window.location.href == "https://protectingourdignity.org/news/") {
        $('#hero').remove();

        $('.fl-post-grid-title').css("color", "white");
        $('.fl-post-grid-more').css("color", "white");
        $('.fl-post-grid-more').css("background-color", "#005A39");
        $('.fl-post-grid-more').css("display", "inline-flex");
        $('.fl-post-grid-more').css("align-items", "center");
        $('.fl-post-grid-more').css("border-radius", "33px");
        $('.fl-post-grid-more').css("padding", "9px 26px");
        $('.fl-post-grid-more').append("&nbsp;");
        $('.fl-post-grid-more').append("&nbsp;");
        $('.fl-post-grid-more').append(" " + "<i class='fl-button-icon fl-button-icon-after ua-icon ua-icon-chevron-right-circle' aria-hidden='true'></i>");
        $('.fl-post-grid-more').hover(function() {
          $(this).css("background-color", "#F0562E");
        }, function() {
          $(this).css("background-color", "#005A39");
        });


      }
    });
  </script>


</head>