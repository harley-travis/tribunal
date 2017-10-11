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
				<a href="<?php the_field('case-study-individual-banner_button_2_link'); ?>/case-studies/" class="btn btn-lg btn-inverse-white">
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
					<span class="cs-testimonial-text"><?php the_field('client-quote'); ?></span>
					<span class="cs-author-name orangeTwo-text"><?php the_field('quote-author'); ?></span><br>
					<span class="cs-author-title"><?php the_field('quote-authors-position'); ?></span>
				</div>
			</div>

			<div class="cs-content-wrapper">
				<?php the_field('the-content'); ?>
			</div>
				
			<div class="cs-btn-spacing">
				<a href="<?php the_field('case-study-individual-bottom-button-link'); ?>" class="btn btn-lg btn-green" download>
					<?php the_field('case-study-individual-bottom-button-title'); ?>
				</a> 
			</div><!--bottom button-->
		</div>	
			
		<div class="cs-col-left col-md-3 col-sm-3 col-xs-12">
			<div class="case-study-individual-client-logo">
				<img src="<?php the_field('client-logo'); ?>" class="cs-logo-img" alt="">
			</div><!--case-study-individual-client-logo-->
				
			<div class="display-block">
				<div class="circles orangeOne-bg">
					<p class="case-study-circle-big-text">1.67 Million</p>
					<p class="circle-small-text">Audits Per Year</p>
				</div>

				<div class="circles green-bg">
					<p class="case-study-circle-big-text">285,000</p>
					<p class="circle-small-text">Users</p>
				</div>

				<div class="circles blue-bg">
					<p class="case-study-circle-big-text">27,000</p>
					<p class="circle-small-text">Hotel and</p>
					<p class="circle-small-text">Resort Properties</p>
				</div>

				<div class="circles pink-bg">
					<p class="case-study-circle-big-text">120</p>
					<p class="circle-small-text">Countries and Territories</p>
				</div>

				<div class="circles purple-bg">
					<p class="case-study-circle-big-text">39</p>
					<p class="circle-small-text">Languages Supported</p>
				</div>				
			</div><!--static RizePoint images-->		
		</div><!--right side logos-->
	</div>		
</section>

<?php get_footer(); ?>