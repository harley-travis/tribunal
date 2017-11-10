<?php
/**
 * Template Name: Privacy Policy
 */
get_header(); ?>

<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_heading'); ?></h1>
			<div class="banner-btns">

			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container pp-content">
		<h3 class="heading-3 green-text"><?php the_field('content_heading'); ?></h3>
			<p><?php the_field('the_content'); ?></p>			
	</div>
</div>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>
	
<?php get_footer(); ?>