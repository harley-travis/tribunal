<?php 
/**
 * Template Name: Michelle Suzuki
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
			<h1>Michelle Suzuki</h1>
			<h3>Chief Marketing Officer</h3>
			<div class="banner-btns">
				<a href="#" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="#" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Michelle</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/michelle-suzuki.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>As Chief Marketing Officer, Michelle Suzuki is responsible for the strategy and execution of all aspects of RizePoint’s marketing efforts. A 20-year veteran of technology marketing, Suzuki joined RizePoint from LANDESK Software, where she was Director of Global Marketing. Prior to that role, she led worldwide marketing initiatives in positions with EMC, Novell, Overland Storage, and Ancestry.com. She has been named Marketer of the Year by Utah Business magazine and the Utah Marketing Association and was recognized in the Women Tech Awards by the Women Tech Council. Suzuki holds a Bachelor of Arts degree in Communications from Brigham Young University.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>