<?php
/*
	Template Name: Franchise_page
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

<style>
	.white-papers {
    padding: 50px 0;
}
	.form-box {
    padding: 25px;
}
</style>

<div class="container-fluid blue-green wrap push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1><?php the_field('banner_title') ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container white-papers wrap push">
	
<!--
	<div class="">
		<div class="col-sm-12 header-background" style="background-image: url(<?php the_field('header_background_image') ?>)"></div>
	</div>
-->
	
	<div class="">
		<div class="col-md-12 col-lg-6">
			<div class="left-side-content hide-list">
				<h4><?php the_field('left_side_pre_title') ?></h4>
				<h2><?php the_field('left_side_main_title') ?></h2>
				<hr>
				<?php the_field('left_side_content_block') ?>
				<?php the_field('left_side_img') ?>
			</div>
		</div>
		
		<div class="col-md-12 col-lg-6">
			<div class="right-side-content">
				<div class="form-box lightGray-bg box-shadow">
					<h4 class="text-center"><?php the_field('right_side_form_title') ?></h4>
					<?php the_field('right_side_form') ?>
				</div>
				<div class="right-side-text"> 
				</div>
			</div>
		</div>
	</div>

</section>



<!-- hide the list items -->
<style>
	/* REMOVE THIS STYLE TO DISPLAY THE CUSTOMERS SECTION*/
	.logo-white-paper{
		display: none !important;
	}
	
	
	
	.hide-list > ul {
		list-style: none !important;
		margin-left: 0 !important;
	}
	.right-side-text{
		padding-top: 20px;
	}
	.wp-logo-img{
		width: 100%;
		max-width: 200px;
	}
	h3.customers-wp{
		text-align: center;
		padding-top: 30px;
	}
	.logo-white-paper{
		background: #EFEFEF;
	}
	.logo-white-paper-wrapper{
		padding: 60px 0 60px 0;
	}
	.white-p-logo {
    text-align: center;
    padding: 30px;
}
	
	
</style>


<?php get_footer(); ?>