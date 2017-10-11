<?php 
/**
 * Template Name: Request A Demo
*/
get_header(); ?>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push raq-banner">
		<div class="banner-wrapper">
			<h1 class="heading-1">Request A Demo</h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container request-wrapper wrap push">
	<div class="col-md-6 col-sm-6 col-xs-12 request-video">
		<div class="request-choose">
			<h1 class="green-text heading-1">Why Choose RizePoint?</h1>
		</div><!--request-choose-->
			<div class="video-size">
				<script src="https://fast.wistia.com/embed/medias/d1hjzc3dsq.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_d1hjzc3dsq videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!--video-size-->
	</div><!--request-video-->
	
	<div class="col-md-6 col-sm-6 col-xs-12 request-form lightGray-bg">
		<div class="request-demo">
			<h2 class="green-text heading-2">Request a Demo</h2>
		</div><!--request-demo-->
		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_380"></form>
		<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 380);</script>
	</div><!--request-form-->
</div><!--request-wrapper-->

<div class="container-fluid request-brand lightGray-bg wrap push">
	<div class="container request-brands-wrapper">

		<div class="request-brands-text">
			<h2 class="green-text heading-2">The Brands Who Trust RizePoint</h2>
		</div><!--request-brands-text-->		
		
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="customer-logo client-box-pic box-shadow raq-fix">
				<img src="<?php echo ROOT; ?>assets/img/clients/wendys-resources.jpg" class="customerLogo-img raq-logo-fix">
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="customer-logo client-box-pic box-shadow raq-fix">
				<img src="<?php echo ROOT; ?>assets/img/clients/ihg-resources.jpg" class="customerLogo-img raq-logo-fix">
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="customer-logo client-box-pic box-shadow raq-fix">
				<img src="<?php echo ROOT; ?>assets/img/clients/buffalowildwings-resources.jpg" class="customerLogo-img raq-logo-fix">
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="customer-logo client-box-pic box-shadow raq-fix">
				<img src="<?php echo ROOT; ?>assets/img/clients/originals/harmons-logo.png" class="customerLogo-img raq-logo-fix">	
			</div>	
		</div>
	
		<div class="request-client-button">
			<btn-lg btn-green></btn-md>
		</div><!--request-client-button-->

	</div><!--request-brands-wrapper-->
</div><!--container-fluid-->

<?php get_footer(); ?>