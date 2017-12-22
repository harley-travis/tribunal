<?php 
/**
 * Template Name: Frank Maylett
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
			<h1 class="heading-1">Frank Maylett</h1>
			<h3 class="heading-3">President &amp; Chief Executive Officer</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/frank-maylett-2898b01/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Frank</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec wrap push">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/wp-content/uploads/2017/10/frank.png" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>Recognized for his intensity, intelligence, and integrity, Frank brings more than 20 years of experience leading, selling, and expanding software service organizations. Prior to RizePoint, he was Executive Vice President for Global Sales, Services and Alliances at Workfront. In that role, he dramatically grew SaaS revenue and increased productivity, positioning Workfront as the leader in enterprise work management. Frank has also worked for inContact, Kabira Technologies, IBM, and Novell.</p>
			<p>Frank was named CEO of the Year by Utah Business magazine in 2017, and CEO of the Year by the Utah Technology Council in 2016. He won a Stevie for Executive of the Year in the 2017 American Business Awards. Frank is a 2014 recipient of Selling Power Magazine’s 50 Best Companies in America to Sell For award, ranking at number 20. He holds a bachelor’s degree in business from the University of Phoenix and studied business administration and management at the University of Utah.</p>
			<p>Frank was raring to go, even as a kid, and wanted to be a race car driver.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>