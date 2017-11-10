<?php 
/**
 * Template Name: Case Studies New
*/
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('client-name'); ?>  |  Case Study</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>" class="btn btn-lg btn-inverse-white">Download Case Study</a> 
				<a href="<?php echo ROOT_URL; ?>/case-studies/" class="btn btn-lg btn-inverse-white">View Case Studies</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid wrap push">
	<div class="container spacing">
		<div class="col-md-10 col-sm-10 col-xs-12 quote">
			<div>
				<p><?php the_field('client-quote'); ?></p>
				<p class="author-name orangeTwo-text"><?php the_field('quote-author'); ?></p>
				<p class="author-title"><?php the_field('quote-authors-position'); ?></p>
			</div>	
			<div>
				<p><?php the_field('the-content'); ?></p>
			</div>
		
		</div>	
		
		<div class="logo col-md-2 col-sm-2 col-xs-12">
				<div>
					<img src="<?php the_field('client-logo'); ?>" class="logo-sizing" alt="">
				</div>
				
			<div class="container">


				<div class="circles orangeOne-bg">
					<p class="circle-big-text">1.67 Million</p>
					<p class="circle-small-text">Audits Per Year</p>
				</div>

				<div class="circles green-bg">
					<p class="circle-big-text">285,000</p>
					<p class="circle-small-text">Users</p>
				</div>

				<div class="circles blue-bg">
					<p class="circle-big-text">27,000</p>
					<p class="circle-small-text">Hotel and</p>
					<p class="circle-small-text">Resort Properties</p>
				</div>

				<div class="circles pink-bg">
					<p class="circle-big-text">120</p>
					<p class="circle-small-text">Countries and Territories</p>
				</div>

				<div class="circles purple-bg">
					<p class="circle-big-text">39</p>
					<p class="circle-small-text">Languages Supported</p>
				</div>
				
			</div>
		
		</div>
		
		<div>
			<a href="<?php echo ROOT_URL; ?>" class="btn btn-lg btn-green">Download Case Study</a> 
		</div>
		
	</div>

</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>