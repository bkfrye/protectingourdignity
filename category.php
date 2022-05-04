<?php get_header(); ?>


<body id="generic" class="left relative category">
    <?php include("includes/main-nav.php"); ?>
	<div class="sticky">
		<div id="social-share" class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_linkedin"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
		
		<?php $arc = get_queried_object();
				$arcimage = get_field('background_hero_image', $arc); 
		?>
		<?php if( $arcimage ): ?>
		<div id="hero" style="background:url(<?php echo $arcimage ?>) center/cover no-repeat;">
		<?php else: ?>
			<div id="hero" style="background:url(<?php the_field('default_hero_background_image', 18); ?>) center/cover no-repeat;">	
		<?php endif; ?>
		
			<div class="overlay"></div>
			<div class="wrapper-small content">
				<h1><?php echo get_category_parents( $cat, false, '' ); ?></h1>
			
			</div>
		</div>

		<!-- Beaver Builder -->
		<div id="main-content" class="before after">
            <div class="wrapper-small">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
            
            <div class="news-post fl-rich-text">
						<div class="news-content">
							<h6><?php echo get_the_date();?></h6>
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							 <?php the_excerpt(); ?>
							<div class="fl-module-button green">
							<a class="btn fl-button" title="Navigate to <?php the_title();?>" href="<?php the_permalink();?>"><span class="fl-button-text">Read More</span></a>	
								</div>
						</div>
						</div>

		

			<?php endwhile; ?>
				
				<div id="pagination" class="rel">
				  	<div class="next abs"><?php next_posts_link('<span>Next</span>') ?></div>
			<div class="prev abs"><?php previous_posts_link('<span>Prev</span>') ?></div>
				  </div>
            <?php else : ?>
				<?php echo '<h4 class="no-results">No Results Found</h4>'; ?>
			<?php endif; ?>
                
            

		

				<?php wp_reset_query(); ?>
				<?php wp_reset_postdata(); ?>
			
		</div>

	</div></div>

<?php get_footer(); ?>