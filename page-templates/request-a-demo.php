<?php 
/**
 * Template Name: Request A Demo
*/
get_header(); ?>



<div class="container-fluid orange-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Request A Demo</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT; ?>/blog" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Blog</a> <a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-width-lg btn-inverse-white">Resources</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container request-wrapper">


	<div class="col-md-6 col-sm-12 col-xs-12 request-video blue-text">
			<div class="request-choose">
				<h1>Why Choose RizePoint?</h1>
				<p>The Worlds Most Powerful Brand Quality &amp; Safety Compliance Solution</p>
			</div><!--request-choose-->
				<div class="video-size">
					<iframe width="510" height="280" src="https://www.youtube.com/embed/Snt-nDronqE" frameborder="0" allowfullscreen></iframe>
				</div><!--video-size-->
	</div><!--request-video-->
	
	<div class="col-md-6 col-sm-12 col-xs-12 request-form purple-text">
			<div class="request-demo">
				<h3>Request A Free</h3>
				<h1>Demo</h1>
			</div><!--request-demo-->
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_457"></form>
			<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 457);</script>

		
	</div><!--request-form-->


  

	<div class="request-icons">
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon purple-bg">
					<img src="<?php echo ROOT; ?>/assets/img/icons/computer-icon-white.png" class="circle-icon-img"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>Gather Better</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->

		


			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon pink-bg">
					<img src="<?php echo ROOT; ?>/assets/img/icons/chart-time-icon-white.png" class="circle-icon-img"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>See Earlier</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->

		


			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon blue-bg">
					<img src="<?php echo ROOT; ?>/assets/img/icons/rocket-icon-white.png" class="circle-icon-img"></img>
					
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>Act Faster</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->
		</div><!--row circle-row-->
		
	</div><!--request-icons-->


</div><!--request-wrapper-->

<div class="container-fluid request-brand lightGray-bg">
	<div class="request-brands-wrapper">

		<div class="request-brands-text gray-text">
				<p>The Brands Who Trust RizePoint</p>
		</div><!--request-brands-text-->		
		
		<div class="col-md-3 col-sm-6 col-xs-12 brand">
			<img src="<?php echo ROOT; ?>assets/img/clients/wendys-resources.jpg" class="wendys-icon-img"></img>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 brand">
			<img src="<?php echo ROOT; ?>assets/img/clients/ihg-resources.jpg" class="ihg-icon-img"></img>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 brand">
			<img src="<?php echo ROOT; ?>assets/img/clients/buffalowildwings-resources.jpg" class="buffalo-icon-img"></img>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 brand">
			<img src="<?php echo ROOT; ?>assets/img/clients/originals/harmons-logo.png" class="harmons-icon-img"></img>		
		</div>
	
		

		<div class="request-client-button">
			<btn-lg btn-green></btn-md>
		</div><!--request-client-button-->

	</div><!--request-brands-wrapper-->
</div><!--container-fluid-->




<?php get_footer(); ?>