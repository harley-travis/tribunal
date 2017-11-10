<?php 
/**
 * Template Name: Professional Services
*/
get_header(); ?>

<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<h2 class="heading-2"><?php the_field('sub_header'); ?></h2>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
		
<div class="container-fluid wrap push">
	<div class="container products-intro-copy">
		<?php the_field('intro_copy'); ?>
	</div>
</div><!--products-intro-copy-->

<div class="container-fluid products-video wrap push">
	<div class="container products-video-wrapper">
		<?php the_field('video'); ?>
	</div><!-- products-video-wrapper -->
</div><!-- products-video -->


<div id="ma" class="container-fluid management-bg wrap push" style="background-image: url(<?php echo ROOT; ?>/assets/img/gradients/pink-orange-decal.png);">
	<div class="container banner product-banner">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('section_1_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid aud-content2 lightGray-bg wrap push">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img">
				<img src="<?php the_field('section_1_part_1_image'); ?>" class="products-img">
			</div>
			<div class="col-md-7 col-sm-6 col-xs-12 aud-text">
				<h2 class="orangeOne-text heading-2"><?php the_field('section_1_part_1_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_1_part_1_subheader'); ?></h3>
					<?php the_field('section_1_part_1_content'); ?>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid aud-content wrap push">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 aud-text2">
				<h2 class="orangeOne-text heading-2"><?php the_field('section_1_part_2_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_1_part_2_subheader'); ?></h3>
					<?php the_field('section_1_part_2_content'); ?>
			</div>
			
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img2">
				<img src="<?php the_field('section_1_part_2_image'); ?>" class="products-img">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div id="mc" class="container-fluid management-bg wrap push" style="background-image: url(<?php echo ROOT; ?>/assets/img/gradients/green-teal-decal.png);">
	<div class="container banner product-banner">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('section_2_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 man-img">
				<img src="<?php the_field('section_2_part_1_image'); ?>" class="products-img">
			</div>
			<div class="col-md-7 col-sm-6 col-xs-12 man-text">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_1_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_1_subheader'); ?></h3>
					<?php the_field('section_2_part_1_content'); ?>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 lightGray-bg wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_2_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_2_subheader'); ?></h3>
					<?php the_field('section_2_part_2_content'); ?>
			</div>
			
			<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
				<img src="<?php the_field('section_2_part_2_image'); ?>" class="products-img">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->


<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 man-img">
				<img src="<?php the_field('section_2_part_3_image'); ?>" class="products-img">
			</div>
			<div class="col-md-7 col-sm-6 col-xs-12 man-text">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_3_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_3_subheader'); ?></h3>
					<?php the_field('section_2_part_3_content'); ?>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 lightGray-bg wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_4_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_4_subheader'); ?></h3>
					<?php the_field('section_2_part_4_content'); ?>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
				<img src="<?php the_field('section_2_part_4_image'); ?>" class="products-img">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
				<img src="<?php the_field('section_2_part_5_image'); ?>" class="products-img">
			</div>
			<div class="col-md-7 col-sm-6 col-xs-12 man-text">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_5_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_5_subheader'); ?></h3>
					<?php the_field('section_2_part_5_content'); ?>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 lightGray-bg wrap push">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
				<h2 class="green-text heading-2"><?php the_field('section_2_part_6_header'); ?></h2>
				<h3 class="heading-3"><?php the_field('section_2_part_6_subheader'); ?></h3>
					<?php the_field('section_2_part_6_content'); ?>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
				<img src="<?php the_field('section_2_part_6_image'); ?>" class="products-img">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid wrap push">
	<div class="container products-intro-copy">
		<?php the_field('contact_text'); ?>
	</div>
</div><!--contact-text-->


<?php get_footer(); ?>