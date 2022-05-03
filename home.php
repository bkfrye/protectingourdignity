<?php
get_header(); 
?>

<section class="news-hero">
	<div class="news-hero-container">
		<div class="news-hero-image" style="background-image: url('')"></div>
		<div class="news-hero-content" style="width: 43.295%">
			<h1>News</h1>
			<!-- add in loop -->
			<h3>title</h3>
			<p>excerpt</p>

			<button>link</button>
			<!-- end add in loop -->
		</div>
	</div>
</section>

<div id="main-content" class="news">
	<h2>Check out our latest news</h2>
	<?php if (have_posts()) : ?>
		<ul>
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<?php the_time('F j, Y'); ?>
					<?php the_title('<h3>', '</h3>'); ?>
					<?php the_excerpt(); ?>

					<button>
						<?php the_shortlink(); ?>
					</button>
			
				</li>
			
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>

<?php get_footer(); ?>