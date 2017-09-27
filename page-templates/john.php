<?php 
/**
 * Template Name: John Knotwell
*/
get_header(); ?>
<style>
	.ec{
		padding: 50px;
	}
	img{
		width: 100%;
	}
</style>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>John Knotwell</h1>
			<h3>Chief Revenue Officer</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/johnknotwell/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With John</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec wrap push">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/john-knotwell.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>John is responsible for leading worldwide sales, channels, services, and customer success at RizePoint. Previously, he was Vice President of Sales at Workfront, where he was instrumental in achieving an average of 50% year over year revenue growth for 3 years running. Prior to Workfront, John was Vice President of Sales at inContact.</p>
			<p>In 2017, John received the CXO award from Utah Business, an honor recognizing Utah’s top C-suite talent. He also received the 2016 RevGen award by Mercato Partners for his leadership achieving RizePoint’s revenue results. John currently serves as a member of the Utah House of Representatives. He holds a bachelor’s degree in political science from the University of Utah, and has an MBA from Utah State University.</p>
			<p>As a kid, John wanted walk on the moon as an astronaut.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>