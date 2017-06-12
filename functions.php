<?php 

//enable post thumbnails
add_theme_support( 'post-thumbnails' ); 
the_post_thumbnail('medium');
the_post_thumbnail('large');
the_post_thumbnail('full');


if(function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' ); 
    set_post_thumbnail_size(150, 150, true);
    
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
?>