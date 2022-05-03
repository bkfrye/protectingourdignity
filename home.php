<?php
get_header();

$sticky = get_option( 'sticky_posts' );
	$args = array(
			'posts_per_page' => 1,
			'post__in' => $sticky,
			'ignore_sticky_posts' => 1
	);
	$query = new WP_Query( $args );

	if ( isset( $sticky[0] ) ) :
?>
<body>
	<?php include("includes/main-nav.php"); ?>
	<div id="news">
		<?php if (is_paged()) : ''; else :?>
		<section class="news-hero">
			<div class="news-hero-container">
				<div class="news-hero-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>)"></div>
				<div class="news-hero-content">
					<h1>News</h1>
					<?php
						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
							echo '<h3>' . get_the_title() . '</h3>';

							the_excerpt();

							echo '<div class="btn"><a href="' . get_the_permalink() . '">Learn More</a></div>';
						endwhile;
						endif;
						wp_reset_postdata();
					?>
					<!-- end add in loop -->
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endif; ?>

	<div id="main-content" class="news">
		<h2>Check out our latest news</h2>
		<?php 

			$current_page = get_query_var('paged');
			$current_page = max( 1, $current_page );

			$per_page = 9;
			$offset_start = 0;
			$offset = ( $current_page - 1 ) * $per_page + $offset_start;

			$post_list = new WP_Query(array(
					'post_status' => 'publish',
					'orderby' => 'publish_date',
					'posts_per_page' => $per_page,
					'paged'          => $current_page,
					'offset'         => $offset,
					'ignore_sticky_posts' => 1
			));

			$total_rows = max( 0, $post_list->found_posts - $offset_start );
			$total_pages = ceil( $total_rows / $per_page );


			if ( $post_list->have_posts() ) :
				echo '<div class="news-list">';
				while ( $post_list->have_posts() ):
					$post_list->the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				echo '</div>';
			endif;
		?>
	</div>



	<div class="pagination">
		<?php echo paginate_links( array(
			'total'   => $total_pages,
			'current' => $current_page,
		)); 
		wp_reset_postdata();
		?>
	</div>
</body>
<?php get_footer(); ?>