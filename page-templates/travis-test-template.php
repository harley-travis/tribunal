<?php 
/**
 * Template Name: Travis Test Template
*/
get_header(); ?>

<style>
	.backgroujd{
		color: #fafafa; 
	}
</style>

<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Travis Testing Template</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">Meet The Executives</a> <a href="<?php echo ROOT_URL; ?>/careers" class="btn btn-lg btn-width-lg btn-inverse-white">Join RizePoint</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid travis-wrapper">
	<div class="container travis-container">
		<img src="<?php the_field('welcome-msg'); ?>" class="" alt="">
	</div>
</section>



<?php get_footer(); ?>
