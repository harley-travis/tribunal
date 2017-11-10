<?php
/*
	Template Name: New Franchisee Template
*/
get_header(); ?>

<?php if (get_field('show_nav_bar') == 'no') : ?>
<style>
	nav.top-bar section.top-bar-section,
	footer ul.inline-list.right,
	div.secondary-nav ul li:not(.nav-search):not(.nav-phone-number),
	.menu-icon { display: none !important; }
</style>
<?php endif ; ?>	

<div class="container-fluid franchisee-hero wrap push" style="background-image: url(<?php the_field('hero_img'); ?>);">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('banner_title') ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container white-papers wrap push">
	
	<div class="">
		<div class="col-md-12 col-lg-7">
			<div class="left-side-content hide-list">
				<h2 class="green-text heading-2"><?php the_field('left_side_main_title') ?></h2>

				<?php the_field('left_side_content_block') ?>
				<?php the_field('left_side_img') ?>
			</div>
		</div>
		
		<div class="col-md-12 col-lg-5">
			<div class="right-side-content">
				<div class="form-box lightGray-bg box-shadow">
					<h3 class="text-center green-text heading-3"><?php the_field('right_side_form_title') ?></h3>
					<?php the_field('right_side_form') ?>
				</div>
				<div class="right-side-text"> 
				</div>
			</div>
		</div>
	</div>

</section>

<section class="fran-footer">
	<div class="container fran-footer-wrapper">
		<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com | All Rights Reserved</span>
	</div>
</section>



<!-- js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php wp_footer(); ?>
