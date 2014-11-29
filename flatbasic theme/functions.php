<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>

<?php function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>

<?php function custom_query_shortcode($atts) {

   // EXAMPLE USAGE:
   // [loop_shortcode the_query="showposts=100&post_type=page&post_parent=453"]

   // Defaults
   extract(shortcode_atts(array(
      "the_query" => ''
   ), $atts));

   // de-funkify query
   $the_query = preg_replace('~&#x0*([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $the_query);
   $the_query = preg_replace('~&#0*([0-9]+);~e', 'chr(\\1)', $the_query);

   // query is made               
   query_posts($the_query);

   // Reset and setup variables
   $output = '';
   $temp_title = '';
   $temp_link = '';
   $temp_ex = '';
   $temp_content = '';
   $temp_thumb = '';
   $temp_id = '';

   // the loop
   if (have_posts()) : while (have_posts()) : the_post();
      $temp_id = $post->ID;
      $temp_title = get_the_title($post->ID);
      $temp_link = get_permalink($post->ID);
      $temp_content = get_the_content($post->ID);
      //$temp_ex = get_the_excerpt();
        if ( has_post_thumbnail() ) {
        $temp_thumb = get_the_post_thumbnail($post->ID);
        } else {
        $temp_thumb = "" ;
        }

      // output all findings -
     $output .= "<div class='post-$temp_id' id='post-$temp_id'>
                <h3 class='entry-title'>
                    <a title='$temp_title' rel='bookmark' href='$temp_link'>$temp_title</a>
                </h3><!--BEGIN .entry-content-->
                <div class='entry-content'>
                    <div class='theExrp'>
                    <p>
                        <a href='$temp_link'>
                            $temp_thumb
                        </a>
                    </p>
                    <p>$temp_content

                    </p>
                    </div>
                    <div><a class='more-link' href='$temp_link'>read more...</a></div><!--END .entry-content-->
                </div><!--END .hentry-->
            </div>";
    endwhile; else:
      $output .= "not found.";
   endif;
   wp_reset_query();
   return $output;
}
add_shortcode("loop_shortcode", "custom_query_shortcode"); ?>

<?php 
	function register_my_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));
}
	add_action( 'init', 'register_my_menu' ); ?>