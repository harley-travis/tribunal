<?php
/*
Template Name: Save Your Seat | Engage 2018
*/

get_header(); ?>

<div class="container-fluid sys-banner parallax">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Save Your Seat For Engage 2018</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/engage" class="btn btn-lg btn-white">
					View Engage
				</a> <a href="https://rizepoint.regfox.com/engage-2018-rizepoint-user-conference" class="btn btn-lg btn-white">Register Now</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-medium sys-container">
    <div class="container sys-wrapper">
     	
     	<div class="sys-info">
     		<h3 class="purple-text">Engage 2018, held February 6-8 at The Mirage Las Vegas, is three days of the best RizePoint training and insight available.</h3>
			<h4 class="purple-text">For session descriptions and our all-new mix-and-match bootcamp details, please <a href="<?php echo ROOT_URL; ?>/engage/">click here</a>.</h4>
     	</div>
      	
       	<div class="reg-form-mk box-shadow">
       		<h3 class="green-text">Save my seat today and I will register in the new year</h3>
       		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_552"></form>
			<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 552);</script>
       	</div><!-- reg-form-mk -->
       
    </div><!-- sys-wrapper -->
</div><!-- sys-container -->

<?php get_footer(); ?>