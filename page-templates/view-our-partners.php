<?php
/**
 * Template Name: View Our Partners
 */
get_header(); ?>

<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container view-partners">
	
	<h2 class="view-title orangeTwo-text heading-2"><?php the_field('sub_header'); ?></h2>
	
		<?php if( have_rows('the_partners') ): ?>
			<?php while( have_rows('the_partners') ): the_row(); ?>
				<div class="view-img">
					<img src="<?php the_sub_field('partner_image'); ?>">
				</div><!--view-img-->
				<div class="view-content1">
					<?php the_sub_field('the_content'); ?>
				</div><!--view-content-->
			<?php endwhile; ?>
		<?php endif; ?>
	
	</div><!--view-partners-->
</div><!--container-fluid-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>