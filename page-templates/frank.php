<?php 
/**
 * Template Name: Frank Maylett
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
			<h1>Frank Maylett</h1>
			<h3>President &amp; Chief Executive Officer</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/frank-maylett-2898b01/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Frank</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/frank-maylett.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>Recognized for his intensity, intelligence, and integrity, Frank Maylett brings more than 20 years of experience leading, selling, and expanding software service organizations. Prior to RizePoint he was Executive Vice President for Global Sales, Services and Alliances at Workfront/AtTask Inc. In that role he dramatically grew SaaS revenue and increased productivity, positioning Workfront as the leader in Enterprise Work Management. Maylett has also worked for inContact, Kabira Technologies, IBM, and Novell. Maylett was named CEO of the Year by Utah Business magazine in 2017 and CEO of the Year by the Utah Technology Council in 2016. He won a Stevie in the 2017 American Business Awards for Executive of the Year. Maylett is a 2014 recipient of Selling Power Magazine 50 Best Companies in America to Sell For award, ranking at number 20, and the 2013 recipient of Utah Business magazine Sales and Marketing Executive of the Year (SAMY Award) for excellence in sales leadership. He holds a bachelor’s degree in Business from the University of Phoenix and studied Business Administration and Management, General at the University of Utah.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>