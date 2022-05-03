<?php
/**
 * Template Name: News Page
 */
  
get_header(); ?>


<body id="generic" class="left relative">
    <?php include("includes/main-nav.php"); ?>
	<div class="sticky">
		
		<div id="social-share" class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_linkedin"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
		
		

		<!-- Beaver Builder -->
		<div id="main-content" class="before after">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>

	</div>

<?php get_footer(); ?>