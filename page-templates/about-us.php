<?php 
/**
 * Template Name: About Us
*/
get_header(); ?>

<style>

	@media screen and (min-width: 1700px) {	
		.fast-facts-btn1 {
			display: none;
		}
		.fast-facts-btn2 {
			display: block;
		}
	}

	@media screen and (max-width: 1699px) {
		.fast-bacts-btn1 {
			display: block;			
		}
		.fast-facts-btn2 {
			display: none;
		}
	}	

</style>

<div class="container-fluid green-blue-purple">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text"><?php the_field('left_button_title'); ?></a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid about-videos lightGray-bg wrap push">
	<div class="container about-videos-wrapper">
		<div class="col-md-6 col-sm-6 col-xs-12 about-video-container">
			<p><?php the_field('the_content'); ?></p>
		</div><!-- about-video-container -->
		<div class="col-md-6 col-sm-6 col-xs-12 about-video-container">
			<script src="https://fast.wistia.com/embed/medias/in3fdjpcii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_in3fdjpcii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container avengers-cta center fast-facts-btn1">
				<a href="<?php the_field('fast_facts_source'); ?>" class="btn btn-lg btn-width-lg btn-green"><?php the_field('fast_facts_header'); ?></a>
			</div>
		</div><!-- about-video-container -->
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container avengers-cta center fast-facts-btn2">
				<a href="<?php the_field('fast_facts_source'); ?>" class="btn btn-lg btn-width-lg btn-green"><?php the_field('fast_facts_header'); ?></a>
		</div>
	</div><!-- about-videos-wrapper -->
</section><!-- about-videos -->

<section class="container-fluid timeline wrap push">
	<div class="container center timeline-heading">
		<h2 class="green-text heading-2">Our History</h2>
	</div><!-- container -->
	<div class="timeline-wrapper">
		<section class="timeline">
			<div class="container">
				
				<?php 
					$index = 0;
					if( have_rows('timeline_content') ):
					while ( have_rows('timeline_content') ) : the_row();
				?>
				
				<div class="timeline-item">
					<div class="timeline-img"></div>
				<?php if ($index % 2 === 0) :?>
					<div class="timeline-content js--fadeInLeft box-shadow">
						<div class="date"><?php the_sub_field('date'); ?></div>
						<p><?php the_sub_field('text'); ?></p>
						<div class="timeline-pic">
							<img src="<?php the_sub_field('image'); ?>" class="time-img" alt="">
						</div>						
					</div>
				
				<?php else: ?>
					<div class="timeline-content js--fadeInRight box-shadow">
						<div class="date"><?php the_sub_field('date'); ?></div>
						<p><?php the_sub_field('text'); ?></p>
						<div class="timeline-pic">
							<img src="<?php the_sub_field('image'); ?>" class="time-img" alt="">
						</div>
					</div>
				<?php endif; ?>
						
				</div>
				
				<?php
					$index++;
					endwhile;
					endif;
				?>
							
			</div>
		</section>
	</div>	
</section>			

<section class="container-fluid avengers wrap push">
	<div class="container avengers-wrapper">
		<h2 class="purple-text center heading-2">Meet The Team</h2>
	</div><!-- container -->
	<div class="avengers-fluid">
	
		<?php if( have_rows('thumbnail_repeater') ): ?>
			<?php while( have_rows('thumbnail_repeater') ): the_row(); ?>
				<div class="avenger">
					<img src="<?php the_sub_field('portrait_thumbnail'); ?>" class="avenger-img" alt="">
				</div>	
			<?php endwhile; ?>
		<?php endif; ?>
	
	</div><!-- avengers-fluid -->

	<div class="container avengers-cta center">
		<a href="<?php echo ROOT_URL; ?><?php the_field('bottom_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('bottom_button_title'); ?></a> 
	</div><!-- avengers-cta -->
</section><!-- avengers -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>




