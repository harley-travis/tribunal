<?php 
/**
 * Template Name: Media
*/
get_header(); ?>

<style>
	.media-wrapper{
		padding: 100px;
	}
</style>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Media</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/newsroom" class="btn btn-lg btn-inverse-white">Newsroom</a> <a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-inverse-white">RizePoint Blog</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid media-container">
	<div class="container media-wrapper">
		<p>If you are interested in contacting us, you can reach us by email or phone. We will respond within 24 hours.</p>
		<p>Email us at <a href="mailto:pr@rizepoint.com">pr@rizepoint.com</a> or call us at 801-285-9827</p>
	</div><!-- media-wrapper -->
</section>

<?php get_footer(); ?>
