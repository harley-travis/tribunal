<?php
/**
 * Template Name: Partners
 */
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-width btn-inverse-white"><?php the_field('left_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->


<div class="container partners-content wrap push">
	<div class="col-md-7 col-sm-6 col-xs-12 partners-text">
		<?php the_field('the_content'); ?>
	</div><!--partners-text-->
	
	<div class="col-md-5 col-sm-6 col-xs-12 partner-form purple-text box-shadow">
		<h2 class="heading-2"><?php the_field('form_header'); ?></h2>
		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_101"></form>
		<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 101);</script>

	</div><!--partners-forms-->
</div><!--partners-content-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>