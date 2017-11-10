<?php
/**
 * Template Name: IT eBook
 */
get_header(); ?>

<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Complimentary White Paper</h1>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" href="<?php echo ROOT_URL; ?>/solution-it/">IT As the Driver</Video></a> 
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container request-wrapper wrap push">
	<div class="col-md-6 col-sm-6 col-xs-12 request-video">
		<div class="request-choose">
			<h1 class="green-text heading-1">LINKING OPERATIONS WITH BUSINESS INSIGHTS USING A NEXT-GENERATION AUDITING SOLUTION</h1>
			<p>The business world is driven by data. The C-Suite needs big data and business intelligence to shape decisions about business strategy and the future of the company. The IT department is the hub of those decisions by facilitating the technology that collects, analyzes, and distributes the information needed by departments like marketing and brand, legal, operations and quality, not to mention the C-Suite. You can maintain control of enterprise technology and reduce the demand on IT resources with a secure, unified solution that places you at the heart of business strategy.</p>
			<p>Download this <strong>free white paper</strong> to read about becoming the hero and reducing the demand on IT resources with a secure, unified solution that places you at the heart of the business strategy.</p>
		</div><!--request-choose-->
	</div><!--request-video-->
	
	<div class="col-md-6 col-sm-6 col-xs-12 request-form lightGray-bg box-shadow">
			<div class="request-demo">
				<h2 class="green-text heading-2">FSMA eBook</h2>
			</div><!--request-demo-->
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
<form id="mktoForm_431"></form>
<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 431);</script>			
	</div><!--request-form-->
</div><!--request-wrapper-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>