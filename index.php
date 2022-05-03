<?php get_header(); ?>


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
		
		<!-- Full Hero -->
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<?php
		
		if ( has_post_thumbnail() ) { ?>
<div id="hero" style="background: #000 url(<?php echo $url ?>) center/cover no-repeat;">
		<?php } else { ?>
<div id="hero" style="background: #000 url(<?php the_field('default_hero_background_image', 18); ?>) center/cover no-repeat;">
		<?php } ?>
			<div class="overlay"></div>
			<div class="wrapper-small content">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

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