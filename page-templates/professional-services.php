<?php 
/**
 * Template Name: Professional Services
*/
get_header(); ?>


<div class="container-fluid <?php the_field('banner_background_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<h2 class="heading-2 display-block pro-services"><?php the_field('sub_header'); ?></h2>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid as-wrapper wrap push" id="available-services">
	<div class="container">
			
		<h2 class="pink-text heading-2 pro-services"><?php the_field('section_1_header'); ?></h2>
		<div class="ps-section-list">
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-1">
				<div class="persona-image" id="persona-img-1">
					<img src="<?php the_field('persona_1_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_1_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-2">
				<div class="persona-image" id="persona-img-2">
					<img src="<?php the_field('persona_2_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_2_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-3">
				<div class="persona-image" id="persona-img-3">
					<img src="<?php the_field('persona_3_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_3_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-4">
				<div class="persona-image" id="persona-img-4">
					<img src="<?php the_field('persona_4_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_4_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-5">
				<div class="persona-image" id="persona-img-5">
					<img src="<?php the_field('persona_5_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_5_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-6">
				<div class="persona-image" id="persona-img-6">
					<img src="<?php the_field('persona_6_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4 pro-services"><?php the_field('persona_6_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
		</div><!-- persona-list -->
		
		
		
			<!-- persona-1 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-1-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_1_title'); ?></h2>
					<?php the_field('persona_1_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_1_image'); ?>" class="ps-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
		
			<!-- persona-2 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-2-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_2_title'); ?></h2>
					<?php the_field('persona_2_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_2_image'); ?>" class="ps-img man-img2">
				</div>
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-3 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-3-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_3_title'); ?></h2>
					<?php the_field('persona_3_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_3_image'); ?>" class="ps-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-4 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-4-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_4_title'); ?></h2>
					<?php the_field('persona_4_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_4_image'); ?>" class="ps-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-5 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-5-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_5_title'); ?></h2>
					<?php the_field('persona_5_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_5_image'); ?>" class="ps-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-6 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-6-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text pro-services"><?php the_field('persona_6_title'); ?></h2>
					<?php the_field('persona_6_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_6_image'); ?>" class="ps-img man-img2">
				</div>
			</div><!-- persona-info-wrapper --> 
			
			<div class="get-started-button">	
				<a class="col-lg-12 col-md-12 col sm-12 col-xs-12 btn btn-lg btn-green ps-btn" href="<?php the_field('ps_btn_path'); ?>">
					<?php the_field('ps_btn_title'); ?>
				</a>
			</div>	
		
	</div>
</section>

<section class="container-fluid as-wrapper lightGray-bg wrap push" id="support-teams">
	<div class="container">
		<div class="container ">
		

			<h2 class="pink-text heading-2 pro-services"><?php the_field('section_2_header'); ?></h2>
			<div class="ps-section-list">
				<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-7">
					<div class="persona-image" id="persona-img-7">
						<img src="<?php the_field('persona_7_image'); ?>" class="persona-img" alt="">
					</div><!-- persona-image -->
					<div class="persona-title">
						<h4 class="heading-4 pro-services"><?php the_field('persona_7_title'); ?></h4>
					</div><!-- persona-title -->
				</div><!-- persona-wrapper -->
				<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-8">
					<div class="persona-image" id="persona-img-8">
						<img src="<?php the_field('persona_8_image'); ?>" class="persona-img" alt="">
					</div><!-- persona-image -->
					<div class="persona-title">
						<h4 class="heading-4 pro-services"><?php the_field('persona_8_title'); ?></h4>
					</div><!-- persona-title -->
				</div><!-- persona-wrapper -->
			</div><!-- persona-list -->
		</div>

		<div>	
				<!-- persona-7 -->
				<div class="wrap push secondary-persona-info-wrapper" id="persona-7-content">
					<div class="col-md-7 col-sm-6 col-xs-12">
						<h2 class="green-text pro-services"><?php the_field('persona_7_title'); ?></h2>
						<?php the_field('persona_7_content'); ?>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<img src="<?php the_field('persona_7_image'); ?>" class="ps-img man-img2">
					</div>	
				</div><!-- persona-info-wrapper --> 
		
				<!-- persona-8 -->
				<div class="wrap push secondary-persona-info-wrapper" id="persona-8-content">
					<div class="col-md-7 col-sm-6 col-xs-12">
						<h2 class="green-text pro-services"><?php the_field('persona_8_title'); ?></h2>
						<?php the_field('persona_8_content'); ?>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<img src="<?php the_field('persona_8_image'); ?>" class="ps-img man-img2">
					</div>	
				</div><!-- persona-info-wrapper --> 
		</div>	
		
			<div class="get-started-button">	
				<a class="col-lg-12 col-md-12 col sm-12 col-xs-12 btn btn-lg btn-green ps-btn" href="<?php the_field('ps_btn_path'); ?>">
					<?php the_field('ps_btn_title'); ?>
				</a>
			</div>	
		
	</div>
</section>

<div class="container-fluid wrap push">
	<div class="container ps-intro-copy">
		<?php the_field('intro_copy'); ?>
	</div>
</div><!--ps-intro-copy-->

<div class="container-fluid lightGray-bg wrap push" id="contact">


	<div class="container-fluid wrap push">
	<div class="container">
		<div class="col-md-6 col-sm-12 col-xs-12 contact-intro">
			<h3><?php the_field('content_heading'); ?></h3>
			<p><?php the_field('the_content'); ?></p>
		</div><!--contact-text-->
		<div class="col-md-6 col-sm-12 col-xs-12 contact-form ps-contact-form green-bg white-text">
			<h2 class="heading-2 pro-services"><?php the_field('form_heading'); ?></h2>
			<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script></p>
			<form id="mktoForm_586"></form>
			<p><script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 586);</script>
		</div><!--contact-form-->
	</div><!--row-->	
</div><!--contact-container-->
</div><!--contact-text-->






<?php get_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/personas.js"></script>