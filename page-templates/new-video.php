<?php
/*
Template Name: New Video
*/

get_header(); ?>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-inverse-white">
					<?php the_field('left_button_title'); ?>
				</a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
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
<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>