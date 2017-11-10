<?php 
/**
 * Template Name: Case Studies Landing
*/
get_header(); ?>

<style>
	.read-case-study {
		text-align: center;
		display: block;
	}
	.read-case-study span {
		padding-top: 15px;
	}
</style>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Case Studies</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/clients" class="btn btn-lg btn-width btn-inverse-white orange-text">View Clients</a> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->












<?php get_footer(); ?>