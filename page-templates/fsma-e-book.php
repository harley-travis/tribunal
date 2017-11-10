<?php
/**
 * Template Name: FSMA E-Book
 */
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>"><?php the_field('left_button_title'); ?></Video></a> 
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container request-wrapper wrap push">
	<div class="col-md-6 col-sm-6 col-xs-12 request-video">
		<div class="request-choose">
			<h1 class="green-text heading-1"><?php the_field('content_heading'); ?></h1>
			<?php the_field('the_content'); ?>
		</div><!--request-choose-->
	</div><!--request-video-->
	
	<div class="col-md-6 col-sm-6 col-xs-12 request-form lightGray-bg box-shadow">
			<div class="request-demo">
				<h2 class="green-text heading-2"><?php the_field('form_header'); ?></h2>
			</div><!--request-demo-->
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script> <form id="mktoForm_263"></form> <script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 263);</script>		
	</div><!--request-form-->
</div><!--request-wrapper-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>