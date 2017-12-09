<?php
/*
	Template Name: Landing Page | Demo Page 
*/
get_header(); ?>

<style>

.landing-logos {
	margin-top: 100px;
}

</style>

<section class="container-fluid">
	<div class="container landing-logo-wrapper">
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt="RizePoint" class="landing-logo"></a>
	</div>
</section>

<section class="container-fluid banner-strip green-bg">
	<div class="container banner-strip-wrapper">
		<h1 class="white-text heading-1"><?php the_field('banner-title'); ?></h1>
	</div>
</section>

<section class="container-fluid landing-content">
	<div class="container landing-content-wrapper">
		<div class="col-md-7 left-landing">
			<h2 class="green-text heading-2"><?php the_field('title'); ?></h2>
			<?php the_field('content'); ?>
			<div class="video-container">
				<?php the_field('video'); ?>
			</div>
		</div>
		<div class="col-md-5 extraGray-bg box-shadow right-landing">
			<h3 class="purple-text heading-3"><?php the_field('form-title'); ?></h3>
			<span class="landing-req purple-text"><?php the_field('form_info_text'); ?></span>
			<?php the_field('marketo-form'); ?>
		</div>		
	</div>
</section>

<section class="container-fluid landing-logos">
	<div class="container landing-logo-container">
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-1'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-2'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-3'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-4'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-5'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-6'); ?>" alt="" class="landing-logo-img">
		</div>
	</div>
</section>

<div class="container-fluid">
	<div class="container landing-footer-wrapper">
		<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com |  All Rights Reserved</span>
	</div>
</div>


<!-- js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>




<?php wp_footer(); ?>



</body>
</html>
