<?php 
/**
 * Template Name: Tim Harris
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
			<h1>Tim Harris</h1>
			<h3>Senior Vice President of Product</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/mitharris/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Tim</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/tim-harris.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>As Senior Vice President of Product, Tim Harris leverages nearly 20 years of cloud-solution product leadership to drive RizePoint’s industry-defining products. Harris joins RizePoint from inContact, where he was Vice President, Product Management and Principal Product Owner. There, he was responsible for ensuring the coordination and continued creation of a unified cloud platform. Prior to this, he was instrumental in the product development workflow for inContact in his roles as Sr. Director of Product Management, Sr. Director of Cloud Ecosystem, and Director of Cloud Solutions. Harris holds two patents related to Business Communication and Call Routing.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>