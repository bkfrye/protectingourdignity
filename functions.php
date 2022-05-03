<?php

function foundation_widgets_init() {

	register_sidebar( array(

    'name' => __( 'Footer Column #1', 'twentytwelve' ),

    'id' => 'footer1',

    'description' => __( '', '' ),

    'before_widget' => '',

    'after_widget' => '',

    'before_title' => '<span class="hidden">',

    'after_title' => '</span>'

  ) );
    
   

}

add_action( 'widgets_init', 'foundation_widgets_init' );


function add_resources() {
	// wp_deregister_script('jquery');
	// wp_enqueue_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'add_resources');

add_theme_support( 'menus' );	
	
add_theme_support( 'post-thumbnails' ); 

// Use Single Template
// add_filter(
//   'single_template', 
//   create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' )
// );

add_filter(
  'single_template',
  function ($t) {
    foreach( get_the_category() as $cat ) { 
      if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } 
      return $t;
  }
);

// Menu
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'Main Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// Shorter Excerpt
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
}

// Pagination
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {

    $pagerange = 2;

  }

  /**

   * This first part of our function is a fallback

   * for custom pagination inside a regular loop that

   * uses the global $paged and global $wp_query variables.

   * 

   * It's good because we can now override default pagination

   * in our theme, and use this function in default quries

   * and custom queries.

   */

  global $paged;

  if (empty($paged)) {

    $paged = 1;

  }

  if ($numpages == '') {

    global $wp_query;

    $numpages = $wp_query->max_num_pages;

    if(!$numpages) {

        $numpages = 1;

    }

  }


  /** 

   * We construct the pagination arguments to enter into our paginate_links

   * function. 

   */

  $pagination_args = array(

    'base'            => get_pagenum_link(1) . '%_%',

    'format'          => 'page/%#%',

    'total'           => $numpages,

    'current'         => $paged,

    'show_all'        => False,

    'end_size'        => 1,

    'mid_size'        => $pagerange,

    'prev_next'       => True,

    'prev_text'       => __('Previous Page'),

    'next_text'       => __('Next Page'),

    'type'            => 'plain',

    'add_args'        => false,

    'add_fragment'    => ''

  );


  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {

    echo "<div class='custom-pagination'>";

      echo $paginate_links;

    echo "</div>";

  }



}
function my_excerpt_length($length) {
return 30;
}

add_filter('excerpt_length', 'my_excerpt_length');

 function custom_excerpt_more( $more ) {
    return '...';//you can change this to whatever you want
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


add_image_size('large-square', 500, 500, true);
//add_image_size('full-panoramica', 1920, 650, true);
function insert_custom_image_sizes($sizes) {
  global $_wp_additional_image_sizes;
  if (empty($_wp_additional_image_sizes)) {
    return $sizes;
  }
  foreach ($_wp_additional_image_sizes as $id => $data) {
    if (!isset($sizes[$id])) {
      $sizes[$id] = ucfirst(str_replace('-', ' ', $id));
    }
  }
  return $sizes;
}
add_filter('image_size_names_choose', 'insert_custom_image_sizes');
?>

