<?php 
/**
 * Template Name: Request A Demo
*/
?>
<?php get_template_part('/includes/header.php'); ?>

	<div class="container-fluid pink-yellow">
		<?php include('../includes/page-header.php'); ?>

		<div class="container banner">
			<div class="banner-wrapper">
			<h2>Request A Demo</h2>
				<h3>The World's Most Powerful Brand, Quality, &amp; Safety Compliance Solution</h3>
				
			</div><!-- banner-wrapper -->
		</div><!-- banner -->
	</div><!-- container-fluid -->

<div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12" request-video>
			<h1>Why Choose RizePoint?</h1>
				<p>The Worlds Most Powerful Brand Quality &amp; Safety Compliance Solution</p>
		<img src="<?php the_field('request_video'); ?>"></img>
		
	</div><!--request-video-->
	
	<div class="col-md-6 col-sm-12 col-xs-12" request-form>
		<h3>Request A Free</h3>
			<h1>Demo</h1>
		
	</div><!--request-form-->

</div><!--row-->
  
<div class="row">
	<div class="request-icons">
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon purple-bg">
					<img src="<?php the_field('request_icon_1'); ?>"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>Gather Better</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->
		</div><!--row circle-row-->
		
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon pink-bg">
					<img src="<?php the_field('request_icon_2'); ?>"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>See Earlier</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->
		</div><!--row circle-row-->
		
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon blue-bg">
					<img src="<?php the_field('request_icon_3'); ?>"></img>
					
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
</div><!--row-->

<div class="container-fluid">
	<div class="request-brands-wrapper">
	<div class="row">
		<div class="request-brands">
				<p>The Brands Who Trust RizePoint</p>
		<div class="col-md-3 col-sm-6 col-xs-12">
	
		</div>
	
		</div><!--request-brands-->
	</div><!--row-->
		<div class="request-client-button">
			<btn-lg btn-green></btn-md>
		</div><!--request-client-button-->

	</div><!--request-brands-wrapper-->
</div><!--container-fluid-->




<?php get_template_part('/includes/footer.php'); ?>