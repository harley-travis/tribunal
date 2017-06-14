<?php 
/**
 * Template Name: Jesse Dowdle
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
			<h1>Jesse Dowdle</h1>
			<h3>Vice President of Technology</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/jessedowdle/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Jesse</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/test/jesse-dowdle.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>As Vice President of Technology, Jesse Dowdle leads the engineering, quality assurance, business intelligence, and architecture teams. He is responsible for developing the architecture behind the product roadmap, and ensuring our products meet customer and market needs. Dowdle brings ten years of software engineering and product development experience to the RizePoint team. Dowdle joined RizePoint from ProofHQ, a Workfront Company, where he was VP of Technology. In 2017, Dowdle was featured in Utah Business magazine’s Forty Under 40 recognizing Utah’s most influential up and comers. He holds Bachelor of Science degrees in History and Broadcast Journalism from Brigham Young University.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>