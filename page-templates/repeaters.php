<?php
/*
Template Name: Repeaters Test 
*/

get_header();
?>
<div class="container">

	<?php if( have_rows('repeater') ): ?>
		<?php while( have_rows('repeater') ): the_row(); ?>
			<div class="repater-wrapper">
				<div class="title">
					<a href="<?php the_sub_field('link'); ?>"><h1><?php the_sub_field('title'); ?></h1></a>
				</div>
				<div class="image">
					<img src="<?php the_sub_field('image'); ?>">
				</div>
			</div>	
		<?php endwhile; ?>
	<?php endif; ?>

</div>