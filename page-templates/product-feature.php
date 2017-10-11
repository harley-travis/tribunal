<?php 
/**
 * Template Name: Product Feature
*/
get_header(); ?>

<div class="container-fluid <?php the_field('banner_gradient_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('banner_title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php the_field('banner_left_link'); ?>" class="btn btn-width-lg btn-inverse-white"><?php the_field('banner_left_link_text'); ?></a> <a href="<?php the_field('banner_right_link'); ?>" class="btn btn-width-lg btn-inverse-white"><?php the_field('banner_right_link_text'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid product-feature wrap push">
	<div class="container product-feature-wrapper">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 pfw-left">
				<img src="<?php the_field('featured_image'); ?>" alt="" class="pfw-img">
			</div><!-- pfw-left -->
			<div class="col-md-8 col-sm-6 col-xs-12 pfw-right">
				<h2 class="green-text heading-2"><?php the_field('banner_title'); ?></h2>
				<h3 class="green-text heading-3"><?php the_field('product_feature_sub_heading'); ?></h3>
				<p><?php the_field('paragraph_text'); ?></p>
			</div><!-- pfw-right -->
		</div>
		
		<?php if( have_rows('add_video') ): ?>
			<?php while ( have_rows('add_video') ): the_row(); ?>
				<div class="row">
					<div class="pfw-video">
						<?php the_sub_field('video'); ?>
					</div><!-- pfw-video -->
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- product-feature-wrapper -->
</section>

<?php get_footer(); ?>
