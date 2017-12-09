<?php
/*
	Template Name: Landing Page | Direct Mail 
*/
get_header(); ?>

<section class="container-fluid wrap push">
	<div class="container landing-logo-wrapper">
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt="RizePoint" class="landing-logo"></a>
	</div>
</section>

<section class="container-fluid banner-strip green-bg wrap push">
	<div class="container banner-strip-wrapper">
		<h1 class="white-text heading-1"><?php the_field('banner-title'); ?></h1>
	</div>
</section>

<section class="container-fluid landing-content wrap push">
	<div class="container landing-content-wrapper">
		<div class="col-md-6 ldr-left-landing">
			<h2 class="green-text heading-2"><?php the_field('title'); ?></h2>
			<?php the_field('content'); ?>
		</div>
		<div class="col-md-6 extraGray-bg box-shadow">
			<h3 class="purple-text heading-3"><?php the_field('form-title'); ?></h3>
			<span class="landing-req purple-text"><?php the_field('form_info_text'); ?></span>
			<?php the_field('marketo-form'); ?>
		</div>		
	</div>
</section>

<div class="container-fluid wrap push">
	<div class="container ldr-landing-footer-wrapper">
		<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com |  All Rights Reserved</span>
	</div>
</div>


<!-- js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php wp_footer(); ?>



</body>
</html>