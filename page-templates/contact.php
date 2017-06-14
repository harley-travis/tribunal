<?php 
/**
 * Template Name: Contact Us
*/
get_header(); ?>


	<div class="container-fluid pink-yellow">
		<?php get_template_part('includes/page-header'); ?>

		<div class="container-banner">
			<div class="banner-wrapper">
			<h2>Contact Us</h2>
				<h3>The World's Most Powerful Brand, Quality, &amp; Safety Compliance Solution</h3>
				
			</div><!-- banner-wrapper -->
		</div><!-- banner -->
	</div><!-- container-fluid -->
	
<div class="contact-wrapper">	
<div class="contact-container">
	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12 contact-text purple-text">
			<p>Whether you need consistancy across your franchise or want to avoid a major food products meltdown, RizePoint has the solution for you.</p>
			<br>
			<p>Get in touch now to get started.</p>
		</div><!--contact-text-->
		<div class="col-md-6 col-sm-12 col-xs-12 contact-form white-text">
			<h2>Fill Out The Form, You'll be Hearing From Us Soon</h2>
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
			<form id="mktoForm_457"></form>
			<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 457);</script>
		</div><!--contact-form-->
	</div><!--row-->	
</div><!--contact-container-->


<div class="contact-details">
	<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12 details-text blue-text">
		<h2>Offices</h2>
		<h3>Salt Lake City</h3>
		<p>2890 East Cottonwood Pkway, Suite 250</br>Salt Lake City, UT 84121</p>
		
		<h3>St. George</h3>
		<p>2890 East Cottonwood Pkway, Suite 250</br>Salt Lake City, UT 84121</p>
		</div><!--details-text -->
		
		<div class="col-md-6 col-sm-12 col-xs-12 details-text blue-text">
		<h2>Contact Numbers</h2>
		<h3>Customer Service</h3>
		<p>customerservice&commat;rizepoint.com</br>888.783.8661</p>
		
		<h3>Sales</h3>
		<p>info&commat;rizepoint.com</br>888.313.7095</p>
		</div><!--details-text -->
	</div><!--row-->

</div><!--contact-details-->
</div><!--contact-wrapper-->

<div class="container-fluid">
<div id="contact-map">

	<script>
		function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(40.632600, -111.810804),
			zoom:16,
		};
var map=new google.maps.Map(document.getElementById("contact-map"),mapProp);
}

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRpEaE5Xmip8iOsz3zCcomouI4SMFUk04&callback=myMap"></script>

	
</div><!--contact-map-->


</div><!--container-fluid-->

<div class="contact-wrapper">
	<div class="contact-email">
		<p>ForPublic Relations inquiries, contact <a href="mailto:pr@rizepoint.com">pr&commat;rizepoint.com</a></p>
	</div><!--contact-details-->
</div><!--contact-wrapper-->



<?php get_footer(); ?>
