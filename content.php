<?php $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>
<article>
	<div class="news-item">
		<div class="news-item-content">
      <div class="news-item-image" style="background-image: url(<?php echo $image ?>)"></div>
	    <p class="news-item-date"><?php echo get_the_date(); ?></p>
	    <h4><?php the_title(); ?></h4>
      <?php the_excerpt(); ?>
			<div class="news-btn">
      	<a href="<?php echo get_the_permalink(); ?>">Learn more <span><svg width="18.545" height="18.545" viewBox="0 0 18.545 18.545"><path style="fill:#fff;" d="M14.668,10.233a.864.864,0,0,1,1.217,0L20.138,14.5a.859.859,0,0,1,.027,1.186l-4.19,4.2a.859.859,0,1,1-1.217-1.213l3.562-3.615-3.651-3.615A.85.85,0,0,1,14.668,10.233Z" transform="translate(-7.415 -5.295)"/><path style="fill:#fff;" d="M3.375,12.648a9.273,9.273,0,1,0,9.273-9.273A9.271,9.271,0,0,0,3.375,12.648Zm1.427,0A7.843,7.843,0,0,1,18.193,7.1,7.843,7.843,0,1,1,7.1,18.193,7.779,7.779,0,0,1,4.8,12.648Z" transform="translate(-3.375 -3.375)"/></svg></span></a>
			</div>
		</div>
	</div>
</article>