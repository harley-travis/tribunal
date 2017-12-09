<?php
/**
 * Template Name: What We Do
 */
get_header(); ?>

<style>

.do-intro {
    padding-top: 100px;
    padding-bottom: 0px;
}
	
.aud-vid {
    margin: auto;
	margin-top: 50px;
    text-align: center;
    padding-bottom: 110px;
    padding-left: 50px;
    padding-right: 50px;
    width: 100%;
    max-width: 1000px;
}	

</style>

<div class="container-fluid purple-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('left_button_title'); ?></a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container do-text">
		<div class="do-intro">
			<?php the_field('introduction_content'); ?>
		</div><!--do-text-->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container avengers-cta center">
				<a href="<?php the_field('fast_facts_source'); ?>" class="btn btn-lg btn-width-lg btn-green"><?php the_field('fast_facts_header'); ?></a>
		</div>
	</div><!--do-intro-->
</div><!--container-fluid-->

<div class="container-fluid wrap push">
	<div class="container lightGray-bg do-video">
		<div class="aud-vid orangeOne-text">
			<h2 class="heading-2"><?php the_field('video_section_header'); ?></h2>
				<?php the_field('video'); ?>
		</div><!--aud-vid-->
	</div><!--do-video-->
</div><!--container-fluid-->


<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="col-md-5 col-sm-6 col-xs-12 man-img">
			<img src="<?php the_field('info_section_1_image'); ?>" class="solution-screenshots">
		</div>
		<div class="col-md-7 col-sm-6 col-xs-12 man-text">
			<h2 class="green-text heading-2"><?php the_field('info_section_1_header'); ?></h2>
				<?php the_field('info_section_1_content'); ?>
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 lightGray-bg wrap push">
	<div class="man-wrapper">
		<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
			<h2 class="green-text heading-2"><?php the_field('info_section_2_header'); ?></h2>
				<?php the_field('info_section_2_content'); ?>
		</div>

		<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
			<img src="<?php the_field('info_section_2_image'); ?>" class="solution-screenshots">
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="col-md-5 col-sm-6 col-xs-12 man-img">
			<img src="<?php the_field('info_section_3_image'); ?>" class="solution-screenshots">
		</div>
		<div class="col-md-7 col-sm-6 col-xs-12 man-text">
			<h2 class="green-text heading-2"><?php the_field('info_section_3_header'); ?></h2>
				<?php the_field('info_section_3_content'); ?>
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->


	<section class="container-fluid section-four wrap push">
		<div class="section-four-wrapper">
			<h2 class="green-text heading-2"><?php the_field('brand_section_header'); ?></h2>
				<?php include __DIR__ . "/../includes/client-logos.php"; ?>
			<div class="brag-btn-wrapper">
				<a href="<?php echo ROOT_URL; ?><?php the_field('bottom_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('bottom_button_title'); ?></a>
			</div><!-- brag-btn-wrapper -->
		</div><!-- section-four-wrapper -->
	</section><!-- section-four -->
	
	<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>