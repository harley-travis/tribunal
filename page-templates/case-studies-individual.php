<?php 
/**
 * Template Name: Case Studies Individual
*/
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1><?php the_field('client-name'); ?>  |  Case Study</h1>
			<div class="banner-btns">
				<a href="<?php the_field('case-study-individual-banner_button_1_link'); ?>" class="btn btn-lg btn-inverse-white" download>
					<?php the_field('case-study-individual-banner-button-1-title'); ?>
				</a> 
				<a href="<?php the_field('case-study-individual-banner_button_2_link'); ?>" class="btn btn-lg btn-inverse-white">
					<?php the_field('case-study-individual-banner-button-2-title'); ?>
				</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid wrap push">
	<div class="container cs-container">
		
		<div class="col-md-9 col-sm-9 col-xs-12">		
			<div class="cs-testimonial-section">
				<div class="cs-testimonial-section-wrapper">			
					<div class="cs-video-center"><?php the_field('video'); ?></div>				
					<span class="cs-testimonial-text"><?php the_field('client-quote'); ?></span>
					<span class="cs-author-name orangeTwo-text"><?php the_field('quote-author'); ?></span><br>
					<span class="cs-author-title"><?php the_field('quote-authors-position'); ?></span>
				</div>
			</div>

			<div class="cs-content-wrapper cs-body-content">
				<?php the_field('the-content'); ?>
			</div>
				
			<div class="cs-btn-spacing">
				<a href="<?php echo ROOT_URL; ?><?php the_field('case-study-individual-bottom-button-link'); ?>" class="btn btn-lg btn-green" download>
					<?php the_field('case-study-individual-bottom-button-title'); ?>
				</a> 
			</div><!--bottom button-->
		</div>	
			
		<div class="cs-col-left col-md-3 col-sm-3 col-xs-12">
			<div class="case-study-individual-client-logo">
				<img src="<?php the_field('client-logo'); ?>" class="cs-logo-img" alt="">
			</div><!--unique client logo-->
				
			<div class="display-block cs-by-the-numbers">
				<h4 class="orangeThree-text"><i><?php the_field('by_the_numbers_header'); ?></i></h4>
							
				<div class="circles orangeOne-bg">
					<p class="case-study-circle-big-text"><?php the_field('bubble_1_top'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_1_bottom'); ?></p>
				</div>

				<div class="circles green-bg">
					<p class="case-study-circle-big-text"><?php the_field('bubble_2_top'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_2_bottom'); ?></p>
				</div>

				<div class="circles blue-bg">
					<p class="case-study-circle-big-text"><?php the_field('bubble_3_top'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_3_middle'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_3_bottom'); ?></p>
				</div>

				<div class="circles pink-bg">
					<p class="case-study-circle-big-text"><?php the_field('bubble_4_top'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_4_bottom'); ?></p>
				</div>

				<div class="circles purple-bg">
					<p class="case-study-circle-big-text"><?php the_field('bubble_5_top'); ?></p>
					<p class="circle-small-text"><?php the_field('bubble_5_bottom'); ?></p>
				</div>				
			</div><!--static RizePoint images-->		
		</div><!--right side logos-->
	</div>		
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>