<?php get_header(); ?>

<div id="generic" class="left relative">
	<!-- Full Hero -->
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		if ( has_post_thumbnail() ) { ?>
			<div id="hero" style="background: #000 url(<?php echo $url ?>) center/cover no-repeat;">
		<?php } else { ?>
			<div id="hero" style="background: #000 url(<?php the_field('default_hero_background_image', 18); ?>) center/cover no-repeat;">
		<?php } ?>
			<div class="overlay"></div>
				<div class="wrapper-small content">
					<?php the_title('<h1>', '</h1>'); ?>
				</div>
			</div>

			<!-- Beaver Builder -->
			<div id="main-content" class="before after">
				<?php if (have_posts()) :
					while (have_posts()) : the_post();
						the_content();
					endwhile;
				endif; ?>
			</div>
</div>

<?php get_footer(); ?>