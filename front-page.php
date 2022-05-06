<?php get_header(); ?>
	
<div id="home-half" class="relative">
	<!-- Full Hero -->
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div id="hero" class="flex">

		<div class="content">
			<?php if( get_field('hero_text') ): the_field('hero_text'); 
			endif; ?>
		</div>
		<div id="hero-half-img" class="flex-1" style="background:url(<?php echo $url ?>) center/cover no-repeat;"></div>
	</div>

	<!-- Beaver Builder -->
	<div id="main-content">
		<?php 
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif; 
		?>
	</div>
</div>

<?php get_footer(); ?>