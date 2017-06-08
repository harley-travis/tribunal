<?php 
/**
 * Template Name: Chris Heaton
*/
get_header(); ?>
<style>
	.ec{
		padding: 50px;
	}
</style>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Chris Heaton</h1>
			<h3>Director of Finance</h3>
			<div class="banner-btns">
				<a href="#" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="#" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Chris</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/chris-heaton.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>As Director of Finance, Heaton is responsible for the financial strategy and administrative operations of the organization. A 15-year veteran of technology businesses, Heaton joined RizePoint from Hewlett-Packard Enterprise where he held multiple roles in controllership, FP&amp;A, strategy, and sales finance. Prior to HPE, Chris worked in technology and management consulting at Sapient, consulting for General Motors, Enbridge, and the Department of Defense. Heaton holds an MBA from Duke’s Fuqua School of Business and dual Bachelor’s degrees in computer science and economics from Brigham Young University.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>