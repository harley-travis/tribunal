<?php
/*
Template Name: New Video
*/

get_header(); ?>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1><?php the_field('video-title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-inverse-white">
					Resources
				</a> <a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-inverse-white">RizePoint Blog</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-medium video-container">
    <div class="container video-wrapper">
        <?php the_field('video-embed'); ?>
        <div class="indivdual-video-text">
            <?php the_field('video-text'); ?>
        </div><!-- video text -->
    </div><!-- video-wrapper -->
</div><!-- video-container -->

<?php get_footer(); ?>