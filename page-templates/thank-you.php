<?php
/*
	Template Name: Thank you
*/
get_header(); ?>

<div class="container-fluid pink-yellow wrap push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_title() ?>!</h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container thank-you wrap push">

	<div class="">
		<div class="col-sm-12 text-center columns">
			<?php the_content() ?>
		</div>
	</div>
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>