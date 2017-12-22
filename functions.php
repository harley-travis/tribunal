<?php 

// rewrite permalink rule for custom post type
 flush_rewrite_rules();

//enable post thumbnails
add_theme_support( 'post-thumbnails' ); 
the_post_thumbnail('medium');
the_post_thumbnail('large');
the_post_thumbnail('full');


if(function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' ); 
    // set_post_thumbnail_size(150, 150, true);
    the_post_thumbnail_url( 'thumbnail' );       // Thumbnail (default 150px x 150px max)
	the_post_thumbnail_url( 'medium' );          // Medium resolution (default 300px x 300px max)
	the_post_thumbnail_url( 'large' );           // Large resolution (default 640px x 640px max)
	the_post_thumbnail_url( 'full' );            // Full resolution (original size uploaded)
    add_image_size('category-thumb', 300, 9999);
}


function get_excerpt($count, $id){
  $permalink = get_permalink($id);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <a href="'.$permalink.'" class="read-more-link"> Read more <i class="fa fa-angle-right"></i></a>';
  echo $excerpt;
}


// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');



// CREATE CUSTOM POST TYPES
add_action('init', 'create_posttype');
function create_posttype(){
	register_post_type('Test_Post', 
		array(
				'labels' => array(
									'name' =>__('TESTS'),
									'singular_name' => __('TEST')
							),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'test-permalink')

		)
	);
}

add_action('init', 'create_posttype_test');
function create_posttype_test(){
	register_post_type('Test_Post', 
		array(
				
				'rewrite' => array('slug' => 'test-permalink', 'with_front' => false)

		)
	);
}


//NOINDEX ATTACHMENT PAGES
function attachmentpages_noindex() {
if(is_attachment()) {
echo '<meta name="robots" content="noindex" />';
}
}
add_action('wp_head', 'attachmentpages_noindex');

//REDIRECT ATTACHMENT PAGES
function redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'redirect_attachment_page' );


//REDIRECT UPPERCASE URLS TO LOWERCASE	
function force_lowercase_urls() {
  // Grab requested URL
  $url = $_SERVER['REQUEST_URI'];
  // If URL contains a period, halt
  if ( preg_match('/[\.]/', $url) ) {
    return;
  }
  // If URL contains a question mark, halt
  if ( preg_match('/[\?]/', $url) ) {
    return;
  }
  if ( preg_match('/[A-Z]/', $url) ) {
    // Convert URL to lowercase
    $lc_url = strtolower($url);
    // 301 redirect to new lowercase URL
    header('Location: ' . $lc_url, TRUE, 301);
    exit();
  }
}
add_action( 'template_redirect', 'force_lowercase_urls' );

// AJAX for blogs





?>