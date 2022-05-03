<header id="site">

<nav id="main" class="before">
    
<!--    Use .wrapper for wide wrapper, and .small-wrapper for a smaller wrapper-->
	<div class="wrapper flex align-c space-btwn">
		<a id="logo" href="<?php bloginfo('url'); ?>/">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg"/>
		</a>
		<div id="nav-items"  class="flex flex-col align-c">
            
         
            
            <div id="main-items" class="flex align-c">
				
				<div id="lang-switch">
			<?php echo do_shortcode('[language-switcher]');?>	
			</div>
            
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'my-custom-menu', 
					'container_class' => 'main-menu-container' ) ); 
			?>
				
				
			
				
			<div id="search-icon" class="search-toggle" aria-expanded="false" aria-haspopup="true" role="button" tabindex="0">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 250.313 250.313" width="20px" height="20px" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">
				<g id="Search">
					<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
						c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
						c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
						c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
						c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
						C170.146,140.044,140.043,170.146,102.911,170.146z"/>
				</g>
				</svg>
				
			</div>
				
						<div class="search-holder">
      <form id="search-form" class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
		  <label class="sr" for="s">Search for:</label>
        <input type="text" name="s" id="s" placeholder="Search..." class="search-input">
        <button type="submit" id="form-submit" class="search-toggle">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 250.313 250.313" width="20px" height="20px" style="enable-background:new 0 0 250.313 250.313;" xml:space="preserve">
				<g>
					<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
						c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
						c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
						c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
						c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
						C170.146,140.044,140.043,170.146,102.911,170.146z"/>
				</g>
				</svg>	
        </button>
        <button type="reset" id="form-close" class="search-close">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	  viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
	<g id="close">
		<polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 
			214.2,178.5 		"/>
	</g>

			</svg><span class="sr">Close Search</span>

        </button>
      </form>
    </div>
			<?php shiftnav_toggle( 'shiftnav-main' , '' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button') ); ?>
		</div>
        </div>
	</div>
</nav>
	
</header>

<!-- Search Modal -->
<div id="modal-container">
	<div id="search-container">
			<div id="modal-title">
				<h4>Search</h4>
				<div id="close-container">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"
					<g>
						<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
							c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
							C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
							s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
					</g>
					</svg>
				</div>
			</div>
			
	</div>
</div>