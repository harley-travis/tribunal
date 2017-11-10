<?php
/**
 * Template Name: CSR New
 */
get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Corporate Social Responsibility</h1>
			<h4 class="heading-4"><?php the_field('sub-header'); ?></h4>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" href="<?php echo ROOT_URL; ?>/blog">Visit the Blog</button> <a href="<?php echo ROOT_URL; ?>/community-relations/" class="btn btn-lg btn-inverse-white">Community Relations</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid wrap push">	
	<div class="container">
<!--		<div class="csr-section-1">-->
			<h3 class="heading-block text-center heading-3"><?php the_field('csr-section-1-header'); ?></h3>
			<div class="csr-orange-line orangeOne-bg"></div>
			<div class="csr-video col-md-6 col-sm-12 col-xs-12">
				<div class="csr-center-video"><?php the_field('csr-section-1-video'); ?></div>
			</div>
			<div class="csr-section-1-content col-md-6 col-sm-12 col-xs-12">
				<p><?php the_field('csr-section-1-content'); ?></p>
			</div>
			
<!--		</div>-->
	</div>
</section>

<section class="container-fluid wrap push">	
	<div class="csr-sectional-container">
		<div class="csr-section-2">
			<div class="csr-sectional col-md-3 col-sm-6 col-xs-12 orangeOne-bg white-text">
				<h4 class="csr-spacing-top csr-spacing-side heading-4"><?php the_field('csr-section-2-heading-1'); ?></h4>
				<p class="white-text csr-spacing-side"><?php the_field('csr-section-2-content-1'); ?></p>
				<a href="<?php the_field('csr-section-2-button-1-link'); ?>" class="btn btn-md btn-inverse-white csr-spacing-top csr-spacing-side"><?php the_field('csr-section-2-button-1'); ?></a>
				<i class="fa-desktop csr-bg-icon"></i>
			</div>
			<div class="csr-sectional col-md-3 col-sm-6 col-xs-12 green-bg white-text">
				<h4 class="csr-spacing-top csr-spacing-side heading-4"><?php the_field('csr-section-2-heading-2'); ?></h4>
				<p class="csr-paragraphs"><?php the_field('csr-section-2-content-2'); ?></p>
				<a href="<?php the_field('csr-section-2-button-2-link'); ?>" class="btn btn-md btn-inverse-white csr-spacing-top csr-spacing-side" download><?php the_field('csr-section-2-button-2'); ?></a>
			</div>
			<div class="csr-sectional col-md-3 col-sm-6 col-xs-12 blue-bg white-text">
				<h4 class="csr-spacing-top csr-spacing-side heading-4"><?php the_field('csr-section-2-heading-3'); ?></h4>
				<p class="csr-paragraphs"><?php the_field('csr-section-2-content-3'); ?></p>
				<a href="<?php the_field('csr-section-2-button-3-link'); ?>" class="btn btn-md btn-inverse-white csr-spacing-top csr-spacing-side" download><?php the_field('csr-section-2-button-3'); ?></a>
			</div>
			<div class="csr-sectional col-md-3 col-sm-6 col-xs-12 purple-bg white-text">
				<h4 class="csr-spacing-top csr-spacing-side heading-4"><?php the_field('csr-section-2-heading-4'); ?></h4>
				<p class="csr-paragraphs"><?php the_field('csr-section-2-content-4'); ?></p>
				<a href="<?php the_field('csr-section-2-button-4-link'); ?>" class="btn btn-md btn-inverse-white csr-spacing-top csr-spacing-side" download><?php the_field('csr-section-2-button-4'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid wrap push lightGray-bg">	
	<div class="container">
		<div class="csr-section-3">
			<h3 class="heading-block text-center heading-3"><?php the_field('csr-section-3-header'); ?></h3>			
		</div>
		<div class="csr-orange-line orangeOne-bg"></div>
		<div>
			<div class="col-md-6 col-sm-6 col-xs-12 test">
				<div class="csr-wrapper">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src="<?php the_field('csr-image-1'); ?>" class="csr-icons" />
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<h4 class="heading-4"><?php the_field('csr-section-3-header-1'); ?></h4>
						<p><?php the_field('csr-section-3-content-1'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 test">
				<div class="csr-wrapper">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src="<?php the_field('csr-image-2'); ?>" class="csr-icons" />
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<h4 class="heading-4"><?php the_field('csr-section-3-header-2'); ?></h4>
						<p><?php the_field('csr-section-3-content-2'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 csr-spacing-top test">
				<div class="csr-wrapper">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src="<?php the_field('csr-image-3'); ?>" class="csr-icons" />
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<h4 class="heading-4"><?php the_field('csr-section-3-header-3'); ?></h4>
						<p><?php the_field('csr-section-3-content-3'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 csr-spacing-top test">
				<div class="csr-wrapper">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<img src="<?php the_field('csr-image-4'); ?>" class="csr-icons" />
					</div>
					<div class="col-md-9 col-sm-9 col-xs-9">
						<h4 class="heading-4"><?php the_field('csr-section-3-header-4'); ?></h4>
						<p><?php the_field('csr-section-3-content-4'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>