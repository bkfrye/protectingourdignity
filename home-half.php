<?php



/*



Template Name: Home- Half Hero



*/?>


<?php get_header(); ?>


<body id="home-half" class="relative">
    <?php include("includes/main-nav.php"); ?>
	<div class="sticky">
		
		
		<div id="social-share" class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_linkedin"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
		
		

		<!-- Full Hero -->
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div id="hero" class="flex">
		
			<div class="content">
				<?php if( get_field('hero_text') ): ?>
				<?php the_field('hero_text'); ?>
                <?php endif; ?>
			</div>
			<div id="hero-half-img" class="flex-1" style="background:url(<?php echo $url ?>) center/cover no-repeat;"></div>
		</div>

		<!-- Beaver Builder -->
		<div id="main-content">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
		
	</div>

<?php get_footer(); ?>