<?php
/*
	Template Name: White Papers
*/
get_header(); ?>

<?php if (get_field('show_nav_bar') == 'no') : ?>
<style>
	nav.top-bar section.top-bar-section,
	footer ul.inline-list.right,
	div.secondary-nav ul li:not(.nav-search):not(.nav-phone-number),
	.menu-icon { display: none !important; }
</style>
<?php endif ; ?>	

<div class="container-fluid blue-green wrap push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('left_side_title') ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container white-papers wrap push">

	<div class="">
		<div class="col-md-12 col-lg-6">
			<div class="left-side-content hide-list">
				<h4 class="heading-4"><?php the_field('left_side_pre_title') ?></h4>
				<h2 class="heading-2"><?php the_field('left_side_title') ?></h2>
				<hr>
				<?php the_field('left_side_content_block') ?>
			</div>
		</div>
		
		<div class="col-md-12 col-lg-6">
			<div class="right-side-content">
				<div class="form-box lightGray-bg box-shadow">
					<h4 class="text-center heading-4"><?php the_field('right_side_form_title') ?></h4>
					<?php the_field('right_side_form') ?>
				</div>
				<div class="right-side-text"> 
				</div>
			</div>
		</div>
	</div>

</section>

<section class="logo-white-paper">
<h3 class="customers-wp heading-3">Our Customers</h3>
	<div class="logo-white-paper-wrapper">
		<div class="row">
			
			<div class="large-3 medium-6 small-12 columns white-p-logo">
				<img src="<?php the_field('image_1'); ?>" alt="" class="wp-logo-img">
			</div><!-- white-p-logo -->
			<div class="large-3 medium-6 small-12 columns white-p-logo">
				<img src="<?php the_field('image_2'); ?>" alt="" class="wp-logo-img">
			</div><!-- white-p-logo -->
			<div class="large-3 medium-6 small-12 columns white-p-logo">
				<img src="<?php the_field('image_3'); ?>" alt="" class="wp-logo-img">
			</div><!-- white-p-logo -->
			<div class="large-3 medium-6 small-12 columns white-p-logo">
				<img src="<?php the_field('image_4'); ?>" alt="" class="wp-logo-img">
			</div><!-- white-p-logo -->
		</div><!-- row -->
	</div><!-- logo-white-paper-wrapper -->
</section>

<?php get_footer(); ?>