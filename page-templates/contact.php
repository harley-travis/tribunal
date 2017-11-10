<?php 
/**
 * Template Name: Contact Us
*/
get_header(); ?>

<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_heading'); ?></h1>
			<h3 class="heading-3"><?php the_field('sub-heading'); ?></h3>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('left_button_title'); ?></a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" target="_blank" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
	
<div class="container-fluid wrap push">
	<div class="container">
		<div class="col-md-6 col-sm-12 col-xs-12 contact-intro">
			<h2 class="green-text heading-2"><?php the_field('content-heading'); ?></h2>
			<p><?php the_field('the_content'); ?></p>
		</div><!--contact-text-->
		<div class="col-md-6 col-sm-12 col-xs-12 contact-form green-bg white-text">
			<h2 class="heading-2"><?php the_field('form_heading'); ?></h2>
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script></p>
			<form id="mktoForm_41"></form>
			<p><script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 41);</script>
		</div><!--contact-form-->
	</div><!--row-->	
</div><!--contact-container-->

<div class="container-fluid lightGray-bg contact-space wrap push">
	<div class="container contact-info-wrapper">
		<div class="col-md-6 col-sm-12 col-xs-12 details-text green-text">
			<h3 class="heading-3">Salt Lake City</h3>
			<p>2890 East Cottonwood Pwky, Suite 250</br>Salt Lake City, UT 84121</p>

			<h3 class="heading-3">St. George</h3>
			<p>229 East Saint George Blvd., Suite 101</br>Saint George, UT 84770</p>
		</div><!--details-text -->

		<div class="col-md-6 col-sm-12 col-xs-12 details-text green-text">
			<h3 class="heading-3">Customer Service</h3>
			<p><a href="mailto:customerservice@rizepoint.com" class="green-text">customerservice&commat;rizepoint.com</a></br><a href="tel:888-783-8661" class="green-text">888.783.8661</a></p>

			<h3 class="heading-3">Sales</h3>
			<p><a href="mailto:info@rizepoint.com" class="green-text">info&commat;rizepoint.com</a></br><a href="tel:801-676-1883" class="green-text">801.676.1883</a></p>
			
			<h3 class="heading-3">Public Relations</h3>
			<p>For Public Relations inquiries, contact <a href="mailto:pr@rizepoint.com" class="green-text">pr&commat;rizepoint.com</a></p>
		</div><!--details-text -->
	</div><!--contact-details-->
</div><!-- container-fluid -->


<div class="container-fluid wrap push" style="display: none;">
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

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>




<?php get_footer(); ?>
