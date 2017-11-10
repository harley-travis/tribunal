<?php
/*
	Template Name: CSR White Paper Form
*/
get_header(); ?>

<div class="container-fluid purple-blue wrap push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Download Your White Paper</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">Resources</a> <a href="<?php echo ROOT_URL; ?>/newsroom" class="btn btn-lg btn-width-lg btn-inverse-white">Newsroom</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container white-papers wrap push">

	<div class="form-box-ebook lightGray-bg box-shadow">
		<h4 class="text-center heading-4">Download the CSR White Paper</h4>
		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_243"></form>
		<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 243, function (form){});</script>    
	</div>

</section>


<!-- hide the list items -->
<style>
	/* REMOVE THIS STYLE TO DISPLAY THE CUSTOMERS SECTION*/
	.logo-white-paper{
		display: none !important;
	}
	
	.hide-list > ul {
		list-style: none !important;
		margin-left: 0 !important;
	}
	.right-side-text{
		padding-top: 20px;
	}
	.wp-logo-img{
		width: 100%;
		max-width: 200px;
	}
	h3.customers-wp{
		text-align: center;
		padding-top: 30px;
	}
	.logo-white-paper{
		background: #EFEFEF;
	}
	.logo-white-paper-wrapper{
		padding: 60px 0 60px 0;
	}
	.white-p-logo {
    text-align: center;
    padding: 30px;
}
	
	
</style>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>