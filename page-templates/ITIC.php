<?php
/*
	Template Name: 3rd party analysis - ITIC analysis
*/
get_header();
?>

<div class="container-fluid yellow-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<h3 class="heading-3"><?php the_field('page_sub_header'); ?></h3>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container divider-sections wrap push">
	<div class="">
		<div class="col-lg-7 col-md-6 col-sm-12 pa-left">		
			<div class="pg-left-wrapper">
				<?php the_field('report_content'); ?>	
			</div><!-- pg-left-wrapper -->
		</div><!-- left -->
		
		<div class="col-lg-5 col-md-6 col-sm-12 pa-right lightGray-bg box-shadow">
			<div class="pg-right-wrapper">
				<h4 class="green-text heading-4"><?php the_field('report_header'); ?></h4>
				<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
				<form id="mktoForm_380"></form>
				<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 380);</script>
			</div><!-- pg-right-wrapper -->
		</div><!-- right -->
	</div><!-- row -->
</section>


<section class="container-fluid lightGray-bg logo-wrapper wrap push">
	<div class="container">
	<h3 class="green-text trust-logo-header heading-3"><?php the_field('brands_header'); ?></h3>
		<div class="logo-ap-wrapper">
			<div class="">

				<div class="col-lg-3 col-md-6 col-sm-12 white-p-logo">
					<img src="<?php the_field('brand_image_1'); ?>" alt="" class="wp-logo-img">
				</div><!-- white-p-logo -->
				<div class="col-lg-3 col-md-6 col-sm-12 white-p-logo">
					<img src="<?php the_field('brand_image_2'); ?>" alt="" class="wp-logo-img">
				</div><!-- white-p-logo -->
				<div class="col-lg-3 col-md-6 col-sm-12 white-p-logo">
					<img src="<?php the_field('brand_image_3'); ?>" alt="" class="wp-logo-img">
				</div><!-- white-p-logo -->
				<div class="col-lg-3 col-md-6 col-sm-12 white-p-logo">
					<img src="<?php the_field('brand_image_4'); ?>" alt="" class="wp-logo-img">
				</div><!-- white-p-logo -->
						
			</div><!-- row -->
		</div><!-- logo-white-paper-wrapper -->
	</div><!-- row -->
</section>


<section class="container pg-content wrap push">
	<div class="">
		<h3 class="heading-3"><?php the_field('about_itic_header'); ?></h3>
			<?php the_field('about_itic_content'); ?>
		<br>
		<h3 class="heading-3"><?php the_field('about_rizepoint_header'); ?></h3>
		<?php the_field('about_rizepoint_content'); ?>
	</div><!-- row -->
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>