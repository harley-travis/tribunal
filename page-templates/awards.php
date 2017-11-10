<?php
/**
 * Template Name: Awards
 */
get_header(); ?>

<div class="container-fluid purple-pink">
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

<section class="container-fluid clients-loop lightGray-bg wrap push">	
	<div class="container clients-loop-wrapper">
		<div class="awards-copy">
			<?php the_field('the_paragraph'); ?>
		</div>
		
		<?php if( have_rows('the_awards') ): ?>
			<?php while( have_rows('the_awards') ): the_row(); ?>
				<div class="col-md-3 col-sm-6 col-xs-12 awards-box-wrapper">
					<div class="award-sec-wrapper customer-logo box-shadow">
						<img src="<?php the_sub_field('award_image'); ?>" class="customerLogo-img awards-img" alt="">
					</div><!-- award image -->
					<div class="client-name">
						<h4 class="heading-4"><a href="<?php the_sub_field('award_link'); ?>"><?php the_sub_field('award_name'); ?></h4>
					</div><!-- client name -->
					<p><?php the_sub_field('award_date');?></p>
				</div><!-- client box wrapper -->	
			<?php endwhile; ?>
		<?php endif; ?>
	
	</div><!-- clients-loop-wrapper -->
</section><!-- clients-loop -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>