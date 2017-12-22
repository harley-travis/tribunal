<?php 
/**
 * Template Name: Professional Services Redo
*/
get_header(); ?>

<style>
	.secondary-persona-info-wrapper {
		display: none;
	}
	.ps-btn {
		width: 100%;
		margin-top: 50px;
		margin-left: auto;
		margin-right: auto;
		clear: both;
	}
	.ps-intro-copy {
		padding-top: 75px;
	}
	.persona-wrapper {
		height: 275px;
	}
	.st-section {
		margin-top: -80px;
	}
	.ps-extended-img {
		width: 100%;
		max-width: 200px;
	}	
	.persona-info-img {
		text-align: center;
	}
	.persona-info-wrapper {
		width: 100%;		
	}
	.as-wrapper {
		margin-top: 5%;
		padding-bottom: 50px;
	}
.solutions-section-one-wrapper {
    padding: 50px 0;
}
.solutions-section-one-wrapper h2 {
    padding-bottom: 35px;
    text-align: center;
}
.ps-section-list {
    padding-bottom: 50px;
}
.persona-image {
    cursor: pointer;
    text-align: center;
}
.persona-cta-btn {
    padding-top: 35px;
}
.solutions-section-one {
    padding-bottom: 100px;
}
.persona-img,
.secondary-persona-img	{
    width: 100%;
    max-width: 200px;
}
.solutions-testimony-wrapper {
    color: $white;
    text-align: center;
}
.solutions-testimony-size {
    height: 360px;
}
.persona-title {
    text-align: center;
    padding-top: 10px;
}

/* JQUERY USING THIS IN PERSONA.JS */
.persona-image,
.secondary-persona-image {
	opacity: .3;
}
.persona-image:hover,
.secondary-persona-image:hover {
	opacity: inherit;
}
.persona-img-active,
.secondary-persona-img-active {
	opacity: inherit !important;
}
.ds-box-img{
	width: 100%;
}
.sol-fix{
	background: $white;
	height: 200px;
	position: relative;
}
	
.solution-cs-btn-wrapper {
    text-align: center;
    padding-top: 40px;
    clear: both;
}
.solutions-cs-header{
	padding-bottom: 35px;
}
.it-content-sec1{
	padding: 80px 0px;
}
.it-content-sec2{
	padding: 80px 0px;
	text-align: center;
	
	h3 {
		padding-bottom: 50px;
	}
	ul{
		text-align: left;
	}
	li{
		padding-bottom: 15px;
	}
}
.it-content-sec3{
	padding: 80px 0px;
	text-align: center;
}
.ds-content{
	padding-bottom: 150px;
}
.res-button{
	padding-top: 90px;
	clear: both;
}
.it-content-sec2 img{
	width: 100%;
	max-width: 500px;
	padding-bottom: 50px;
}
.img-container {
	padding: 50px 0px;
}
	
	@media screen and (max-width: 768px) {
		.case-sheets-wrapper {
			padding: 75px 0 70px;
		}
	}
	
</style>

<div class="container-fluid <?php the_field('banner_background_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<h2 class="heading-2"><?php the_field('sub_header'); ?></h2>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
		
<div class="container-fluid wrap push">
	<div class="container ps-intro-copy">
		<?php the_field('intro_copy'); ?>
	</div>
</div><!--ps-intro-copy-->

<section class="container-fluid as-wrapper wrap push lightGray-bg">
	<div class="container">
			
		<h2 class="pink-text heading-2"><?php the_field('section_1_header'); ?></h2>
		<div class="ps-section-list">
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-1">
				<div class="persona-image" id="persona-img-1">
					<img src="<?php the_field('persona_1_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_1_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-2">
				<div class="persona-image" id="persona-img-2">
					<img src="<?php the_field('persona_2_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_2_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-3">
				<div class="persona-image" id="persona-img-3">
					<img src="<?php the_field('persona_3_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_3_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-4">
				<div class="persona-image" id="persona-img-4">
					<img src="<?php the_field('persona_4_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_4_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-5">
				<div class="persona-image" id="persona-img-5">
					<img src="<?php the_field('persona_5_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_5_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-6">
				<div class="persona-image" id="persona-img-6">
					<img src="<?php the_field('persona_6_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_6_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
		</div><!-- persona-list -->
		
		
		
			<!-- persona-1 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-1-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_1_title'); ?></h2>
					<?php the_field('persona_1_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_1_image'); ?>" class="products-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
		
			<!-- persona-2 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-2-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_2_title'); ?></h2>
					<?php the_field('persona_2_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_2_image'); ?>" class="products-img man-img2">
				</div>
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-3 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-3-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_3_title'); ?></h2>
					<?php the_field('persona_3_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_3_image'); ?>" class="products-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-4 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-4-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_4_title'); ?></h2>
					<?php the_field('persona_4_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_4_image'); ?>" class="products-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-5 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-5-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_5_title'); ?></h2>
					<?php the_field('persona_5_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_5_image'); ?>" class="products-img man-img2">
				</div>	
			</div><!-- persona-info-wrapper --> 
			
			<!-- persona-6 -->
			<div class="wrap push persona-info-wrapper lightGray-bg" id="persona-6-content">
				<div class="col-md-7 col-sm-6 col-xs-12">
					<h2 class="green-text"><?php the_field('persona_6_title'); ?></h2>
					<?php the_field('persona_6_content'); ?>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<img src="<?php the_field('persona_6_image'); ?>" class="products-img man-img2">
				</div>
			</div><!-- persona-info-wrapper --> 
			
			<div class="col-lg-12 col-md-12 col sm-12 col-xs-12 btn btn-lg btn-green ps-btn" href="<?php the_field('ps-btn-path'); ?>">
				<?php the_field('ps-btn-title'); ?>
			</div>	
		
	</div><!-- solutions-section-one-wrapper -->
</section><!-- solutions-section-one -->


<section class="container-fluid as-wrapper wrap push">
	<div class="container">
		<div class="container st-section">
		

			<h2 class="pink-text heading-2"><?php the_field('section_2_header'); ?></h2>
			<div class="ps-section-list">
				<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-7">
					<div class="persona-image" id="persona-img-7">
						<img src="<?php the_field('persona_7_image'); ?>" class="persona-img" alt="">
					</div><!-- persona-image -->
					<div class="persona-title">
						<h4 class="heading-4"><?php the_field('persona_7_title'); ?></h4>
					</div><!-- persona-title -->
				</div><!-- persona-wrapper -->
				<div class="col-md-2 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-8">
					<div class="persona-image" id="persona-img-8">
						<img src="<?php the_field('persona_8_image'); ?>" class="persona-img" alt="">
					</div><!-- persona-image -->
					<div class="persona-title">
						<h4 class="heading-4"><?php the_field('persona_8_title'); ?></h4>
					</div><!-- persona-title -->
				</div><!-- persona-wrapper -->
			</div><!-- persona-list -->
		</div>

		<div>	
				<!-- persona-7 -->
				<div class="wrap push secondary-persona-info-wrapper" id="persona-7-content">
					<div class="col-md-7 col-sm-6 col-xs-12">
						<h2 class="green-text"><?php the_field('persona_7_title'); ?></h2>
						<?php the_field('persona_7_content'); ?>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<img src="<?php the_field('persona_7_image'); ?>" class="products-img man-img2">
					</div>	
				</div><!-- persona-info-wrapper --> 
		
				<!-- persona-8 -->
				<div class="wrap push secondary-persona-info-wrapper" id="persona-8-content">
					<div class="col-md-7 col-sm-6 col-xs-12">
						<h2 class="green-text"><?php the_field('persona_8_title'); ?></h2>
						<?php the_field('persona_8_content'); ?>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<img src="<?php the_field('persona_8_image'); ?>" class="products-img man-img2">
					</div>	
				</div><!-- persona-info-wrapper --> 
		</div>	
		
				<div class="col-lg-12 col-md-12 col sm-12 col-xs-12 btn btn-lg btn-green ps-btn" href="<?php the_field('ps-btn-path'); ?>">
					<?php the_field('ps-btn-title'); ?>
				</div>
		
	</div>
</section>

<div class="container-fluid lightGray-bg wrap push">
	<div class="container products-intro-copy">
		<h3 class="heading-3 green-text avengers-wrapper"><?php the_field('contact_text'); ?></h3>
	</div>
</div><!--contact-text-->




<?php get_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/personas.js"></script>