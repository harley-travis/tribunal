<?php 
/**
 * Template Name: Peter Johnson
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
			<h1>Peter Johnson</h1>
			<h3>Vice President of People Operations</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/peternjohnson/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Peter</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec wrap push">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/peter-johnson.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>Peter joined RizePoint in 2015 as HR Director, and made an immediate impact, quickly rising to his current position. He has been instrumental in building a team, culture, and innovative office environment to help make RizePoint a great place to work. In February 2015, he was named Vice President of People Operations to drive a unique culture as we continue with rapid growth. Prior to joining RizePoint, Johnson directed human resources for organizations such as School Improvement Network, Administrative Services Group, Progrexion and Marriott International. Johnson has a degree in organizational communications from the University of Utah.</p>
			<p>Peter was hoping to hit a home run as a pro baseball player when he was young.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>