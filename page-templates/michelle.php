<?php 
/**
 * Template Name: Michelle Suzuki
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
			<h1>Michelle Suzuki</h1>
			<h3>Chief Marketing Officer</h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/leadership" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Leadership</a> <a href="https://www.linkedin.com/in/michellesuzuki/" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Connect With Michelle</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid ec wrap push">
	<div class="container ec-wrapper">
		<div class="col-md-6 col-sm-4 col-xs-12 ec-pic">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/employees/ec/full/michelle-suzuki.jpg" class="leader-img" alt="">
		</div><!-- ec-pic -->
		<div class="col-md-6 col-8 col-xs-12 ec-text">
			<p>Michelle leads the strategy and execution of all aspects of RizePoint’s marketing efforts. A 20-year veteran of technology marketing, Michelle joined RizePoint from LANDESK Software, where she was Director of Global Marketing. Prior to that role, she led worldwide marketing initiatives in positions with EMC, Novell, Overland Storage, and Ancestry.com.</p>
			<p>She was named Marketer of the Year by Utah Business magazine in 2017, and Marketer of the Year by the Utah Marketing Association in 2016. She was also recognized in the 2016 Women Tech Awards, an honor recognizing women who are key contributors to the technology community. Suzuki holds a degree in communications from Brigham Young University.</p>
			<p>Michelle was ready to be the boss when she was young, and wanted to be president.</p>
		</div><!-- ec-text -->
	</div><!-- ec-wrapper -->
</section><!-- ec -->

<?php get_footer(); ?>