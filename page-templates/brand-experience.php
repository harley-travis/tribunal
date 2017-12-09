<?php
/*
	Template Name: Brand Experience
*/
get_header(); ?>

<style>

	.vot {
		text-align: center;
	}
	
	.circle-mask {
		margin: auto;
	}

</style>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<h3 class="heading-3"><?php the_field('sub_header'); ?></h3>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="brand-body wrap push">

	<div class="container brand-content-wrapper">
		<div class="brand-img-wrapper">
			<img src="https://rizepoint.com/wp-content/uploads/2017/05/rizepoint-bx-logo-transparent.png" class="brand-img" alt="RizePoint Brand Experience">
		</div><!-- brand-img-wrapper -->
	</div><!-- brand-content-wrapper -->
	
	<div class="container-fluid brand-intro-wrapper">
		<div class="container">
			<div class="brand-intro">
				<?php the_field('intro_text'); ?>
			</div><!-- brand-intro -->
		</div><!-- row -->
	</div><!-- brand-intro-wrapper -->
	
	<div class="container-fluid brand-bx-wrapper">
		<div class="container">
			<div class="brand-bx">
				<div class="col-lg-4 col-md-12 col-sm-12 bx-left">
					<img src="<?php the_field('bx_image'); ?>" class="bx-logo" alt="">
				</div><!-- bx-left -->
				<div class="col-lg-8 col-md-12 col-sm-12 bx-left">
					<?php the_field('bx_text'); ?>
				</div><!-- bx-left -->
			</div><!-- brand-bx -->
		</div><!-- row -->
	</div><!-- brand-bx-wrapper -->
	
	<div class="container-fluid arby-brand">
		<div class="container arby-brand-container">
			<div class="">
			<img src="<?php the_field('case_study_image'); ?>" class="arby-brand-img" alt="">
				<p><?php the_field('case_study_headline'); ?></p>
				<div class="arby-cs-btn-wrapper">
					<a href="<?php echo ROOT_URL; ?><?php the_field('case_study_button_path'); ?>" target="_blank" class="brand-try-btn"><?php the_field('case_study_button_title'); ?></a>
				</div><!-- arby-cs-btn-wrapper -->
			</div><!-- row -->
		</div><!-- arby-brand-container -->
	</div><!-- arby-brand -->
	
	<div class="container-fluid bx-infographic">
		<div class="container bx-infographic-wrapper">
			<div class="">
				<img src="<?php the_field('infographic'); ?>" class="bx-info-img" alt="">
			</div><!-- row -->
		</div><!-- bx-infographic-wrapper -->
	</div><!-- bx-infograpnic -->
	
	<div class="container-fluid flood">
		<div class="container flood-wrapper">
			<div class="">
				<div class="bx-msg">
					<h2 class="heading-2"><?php the_field('bx_intelligence_header'); ?></h2>
				</div><!-- bx-msg -->
			</div><!-- row -->
		</div><!-- flood-wrapper -->
	</div><!-- flood -->
	
	<div class="container-fluid brand-info">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot heading-3"><?php the_field('voq_header'); ?><img src="<?php the_field('voq_image'); ?>" class="bx-icon" alt=""></h3>
				<?php the_field('voq_content'); ?>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-one"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->

	<!-- show when large -->
	<div class="container-fluid brand-info large-brand">
		<div class="container">
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-two"></div>
			</div>
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot heading-3"><?php the_field('voe_header'); ?><img src="<?php the_field('voe_image'); ?>" class="bx-icon" alt=""></h3>
				<?php the_field('voe_content'); ?>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<!-- show when small -->
	<div class="container-fluid brand-info small-brand">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot heading-3"><?php the_field('voe_header'); ?><img src="<?php the_field('voe_image'); ?>" class="bx-icon" alt=""></h3>
				<?php the_field('voe_content'); ?>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-two"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<div class="container-fluid brand-info">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot heading-3"><?php the_field('voc_header'); ?><img src="<?php the_field('voc_image'); ?>" class="bx-icon" alt=""></h3>
				<?php the_field('voc_content'); ?>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-three"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<div class="container-fluid datasheet-bx">
		<div class="container datasheet-bx-wrapper">
			<div class="">
			
				<div class="col-lg-6 col-sm-12 final-brand-msg-left">
					<h3 class="heading-3"><?php the_field('whitepaper_dl_header'); ?></h3>
					<p><?php the_field('whitepaper_dl_content'); ?></p>
				</div><!-- final-brand-msg-left -->
				<div class="col-lg-6 col-sm-12 final-brand-msg-right">
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_488"></form>
					<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 488);</script>
				</div><!-- final-brand-msg-right -->

			</div><!-- row -->
		</div><!-- datasheet-bx-wrapper -->
	</div><!-- datasheet-bx -->

	<div class="container-fluid final-brand-msg green-blue">
		<div class="container">
			<div class="">
			
				<div class="ds-bx-content">
					<h3 class="heading-3" style="color: white; font-weight: bold;"><?php the_field('bx_datasheet_header'); ?></h3>
					<p><?php the_field('bx_datasheet_content'); ?></p>
				</div><!-- ds-bx-content -->
				<div class="bx-brand-btn-side">
					<a href="<?php the_field('datasheet_dl'); ?>" class="brand-ds-btn" download><?php the_field('dl_datasheet_button_title'); ?></a>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->

		<!-- <div class="icon-position">
			<i class="fi-page wp-foundation-icon"></i>
		</div> -->

	</div><!-- final-brand-msg -->
</div><!-- brand-boddy -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>
