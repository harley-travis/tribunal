<?php 
/**
 * Template Name: Resources Individual
 * Template Post Type: Resources
*/
get_header(); ?>

<div class="container-fluid <?php the_field('banner_background_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>"><?php the_field('left_button_title'); ?></button> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/resources-nav.php"; ?>

<div class="container-fluid wrap push">
	<div class="container res-loop-wrapper">
		<h2 class="green-text heading-2 res-heading"><?php the_field('page_name'); ?></h2>
			
		<?php if( have_rows('the_repeater') ): ?>
			<?php while( have_rows('the_repeater') ): the_row(); ?>
			
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 res-individual-wrapper">
					<div>
						<a class="" target="<?php the_sub_field('new_window'); ?>" href="<?php echo ROOT_URL; ?><?php the_sub_field('entry_link'); ?>">
							<img src="<?php the_sub_field('entry_image'); ?>" alt="">
						</a>
					</div><!-- case study image -->
					<div class="res-title">
						<p><a target="<?php the_sub_field('new_window'); ?>" href="<?php echo ROOT_URL; ?><?php the_sub_field('entry_link'); ?>"><?php the_sub_field('entry_title'); ?></a></p>
					</div><!-- case study name -->
				</div><!-- client box wrapper -->	
				
			<?php endwhile; ?>
		<?php endif; ?>	
				
	</div>
</div>

<?php get_footer(); ?>