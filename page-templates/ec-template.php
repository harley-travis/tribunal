<?php 
/**
 * Template Name: EC-Template
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

<div class="container-fluid <?php the_field('test_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1><?php the_field('ec_name'); ?></h1>
			<h3><?php the_field('ec_title'); ?></h3>
			<div class="banner-btns">
				<a href="<?php the_field('ec_btn_1'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text"><?php the_field('ec_btn_2'); ?></a> 
				<a href="<?php the_field('ec_btn_3'); ?>" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white"><?php the_field('ec_btn_4'); ?></a>
		</div><!--banner-btns-->
		
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec wrap push">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php the_field('left_side_img'); ?>" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<?php the_field('right_side_copy'); ?>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>
