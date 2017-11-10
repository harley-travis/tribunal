<?php
/**
 * Template Name: Rize and Shine
 */
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-width btn-inverse-white"><?php the_field('left_button_title'); ?></a>

			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container rize-content">
		<?php the_field('introduction'); ?>
	</div><!--rize-content-->
</div><!--container-fluid-->

<div class="container-fliud lightGray-bg rize-video-section wrap push">
	<div class="container rize-video-wrapper">
		<?php the_field('rize_shine_video'); ?>
	</div>
</div>

<div class="wrap push">
	<div class="container rize-stories">
		<div class="col-md-6 col-sm-12 col-xs-12 rize-img-wrapper">
			<img src="<?php the_field('photo_1'); ?>" alt="" class="rize-img">
		</div><!--rize-img-->
		<div class="col-md-6 col-sm-12 col-xs-12 rize-text">
			<div class="rize-text-title">
				<h4 class="heading-4"><?php the_field('headline_1'); ?></h4>
			</div><!--rize-text-title-->
			<div class="rize-text-content">
				<?php the_field('content_1'); ?>
			</div><!--rize-text-content-->
		</div><!--rize-text-->
		
	</div><!--rize-stories-->
	
<div class="container-fluid lightGray-bg">
	<div class="container rize-stories">
		<div class="col-md-6 col-sm-12 col-xs-12 rize-img-wrapper">
			<img src="<?php the_field('photo_2'); ?>" class="rize-img">
		</div><!--rize-img-->
		<div class="col-md-6 col-sm-12 col-xs-12 rize-text">
			<div class="rize-text-title">
				<h4 class="heading-4"><?php the_field('headline_2'); ?></h4>
			</div><!--rize-text-title-->
			<div class="rize-text-content">
				<?php the_field('content_2'); ?>
			</div><!--rize-text-content-->
		</div><!--rize-text-->
	</div><!--rize-stories-2-->
</div>
	
	<div class="container rize-stories">
		<div class="col-md-6 col-sm-12 col-xs-12 rize-img-wrapper">
			<img src="<?php the_field('photo_3'); ?>" alt="" class="rize-img">
		</div><!--rize-img--> 
		<div class="col-md-6 col-sm-12 col-xs-12 rize-text">
			<div class="rize-text-title">
				<h4 class="heading-4"><?php the_field('headline_3'); ?></h4>
			</div><!--rize-text-title-->
			<div class="rize-text-content">
				<?php the_field('content_3'); ?>
			</div><!--rize-text-content-->
		</div><!--rize-text-->
	</div><!--rize-stories-->
</div><!--container-fluid-->

<div class="container-fluid lightGray-bg wrap push">
	<div class="container copy-wrapper">
		<div class="col-md-6 col-sm-6 col-xs-12 rize-copy">
			<?php the_field('stats_left_side'); ?>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 rize-copy">
			<?php the_field('stats_right_side'); ?>
		</div>
	</div>
</div>

<div class="container-fluid wrap push">
	<div class="container award-partner-wrapper">
		<div class="rize-csr">
			<h2 class="green-text heading-2"><?php the_field('award_section_header'); ?></h2>
		</div><!--our-partners-->

		<div class="rize-csr-logo">
		
			<?php if( have_rows('awards_repeater') ): ?>
				<?php while( have_rows('awards_repeater') ): the_row(); ?>
					<div class="col-md-6 col-sm-12 col-xs-12 award-wrapper">
						<img src="<?php the_sub_field('award_image'); ?>" class="award-partner">
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
				
		</div>
	</div>
</div>

<div class="container-fluid lightGray-bg end-partners-wrapper wrap push">
	<div class="container our-partner">
		<h2 class="green-text heading-2">Our Partners</h2>
	</div><!--our-partners-->

	<div class="container partners-logos">
	
		<?php if( have_rows('partners_repeater') ): ?>
			<?php while( have_rows('partners_repeater') ): the_row(); ?>
				<div class="col-md-4 col-sm-12 col-xs-12 rize-logos">
					<div class="customer-logo client-box-pic box-shadow ap-fix">
					<img src="<?php the_sub_field('partner_image'); ?>" class="customerLogo-img raq-logo-fix">
					</div>
				</div><!--rize-logos-->
			<?php endwhile; ?>
		<?php endif; ?>

	</div><!--partners-logos-->
	
	<div class="container inquiry">
		<h3 class="heading-3"><?php the_field('sponsorship_header'); ?></h3>
		<?php the_field('sponsorship_content'); ?>
	</div><!--inquiry-->
	
</div><!--container-fluid-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>