<?php 
/**
 * Template Name: WE ARE GROOT
 * Template Post Type: Resources
*/
get_header(); ?>

<?php
if(have_posts()) : while(have_posts()) : the_post();
    the_title();
    echo '<div class="entry-content">';
    the_content();
    echo '</div>';
endwhile; endif; ?>

i am a big fat fart - karina

<?php
get_footer();
?>
 


