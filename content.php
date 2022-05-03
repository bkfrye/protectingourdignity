<?php $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>

<article>
	<div class="news-item">
		<div class="news-item-content">
      <div class="news-item-image" style="background-image: url(<?php echo $image ?>)"></div>
	    <p class="news-item-date"><?php echo get_the_date(); ?></p>
	    <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a href="<?php echo get_the_permalink(); ?>">Learn more</a>
		</div>
	</div>
</article>