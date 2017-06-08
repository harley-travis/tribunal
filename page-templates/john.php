<?php 
/**
 * Template Name: John Knotwell
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
			<h1>John Knotwell</h1>
			<h3>Chief Revenue Officer</h3>
			<div class="banner-btns">
				<a href="#" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="#" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With John</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/john-knotwell.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>As Chief Revenue Officer, John is responsible for leading Worldwide Sales, Channels, Services, and Customer Success at RizePoint. Prior to RizePoint, he was Vice President, Sales at Workfront (formerly AtTask) Inc where he was instrumental in achieving an average of 50% Year over Year revenue growth for 3 years running. Prior to Workfront, John was Vice President of Sales at inContact (NASDAQ: SAAS), the leader in call center software as a service. In 2017, Knotwell received the CXO award from Utah Business, an honor recognizing Utah’s top C-suite talent. Knotwell was featured in Utah Business magazine’s Forty Under 40 recognizing Utah’s most influential up and comers and received the RevGen award by Mercato Partners for his 2016 results. He currently serves as a member of the Utah House of Representatives. He holds a bachelor’s degree in Political Science from the University of Utah, and is a prospective graduate of the Jon M. Huntsman School of Business at Utah State University.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>