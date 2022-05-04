<?php get_header(); ?>

<!-- <body id="generic" class="left relative search-page search"> -->
	<main class="sticky">
		
		
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		
		
		
		<div id="hero"  style="background: #000 url(<?php the_field('default_hero_background_image', 18); ?>) center/cover no-repeat;">
			<div class="overlay"></div>
			
			
	<div class="wrapper-small content after">
				
			
			
					<h1>Search Results For <em><?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); ?><?php echo $key;  wp_reset_query(); ?></em></h1>
                
            <div class="search-form-box">
           <form id="search-form" class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
			    <label class="sr" for="s">Search for:</label>
        <input type="text" name="s" id="s" placeholder="Search..." class="search-input">
        <button type="submit" id="form-submit" class="flex align-c just-c">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"/></svg>	
        </button>
       
      </form>   
			</div>
                
           
			
			
			</div>
			
			
		</div>
		
		
		
		<div id="main-content" class="search before after">
            <div class="fl-row wrapper-small">

	<?php if (have_posts()) : ?>
                

                
                
 
                
                	
            

            
            
      
		<?php while (have_posts()) : the_post(); ?>               
		<div class="result-item">
            <div class="result-info">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php if ( ! has_excerpt() ) { ?>
 	<p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
<?php } else { ?>
				<?php the_excerpt();?>
<?php } ?>

                
               
                
                  <div class="fl-module-button green">
				<a class="fl-button" href="<?php the_permalink();?>"><span class="fl-button-text">Learn More</span><span class="sr"> about <?php the_title();?></span></a>
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
            
           
		</div>
		</div>
	</main>
	
	
	<script>
		
		 (function($) {
			
			 
			 
	})( jQuery );
	</script>
 
 <?php get_footer(); ?>