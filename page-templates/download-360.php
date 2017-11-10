<?php
/*
Template Name: Download 360
*/

get_header(); ?>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_heading'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT; ?><?php the_field('banner_button_path'); ?>" class="btn btn-lg btn-white" download><?php the_field('banner_button_title'); ?></a> 
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>
