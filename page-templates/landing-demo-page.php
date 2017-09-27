<?php
/*
	Template Name: Landing Page | Demo Page 
*/
get_header(); ?>

<style>
	.landing-logo{
		padding: 25px 0;
		width: 100%;
		max-width: 300px;
	}
	.banner-strip{
		padding: 10px 0;
	}
	.left-landing {
		padding-top: 20px;
		 padding-right: 70px;
	}
	.landing-footer-wrapper{
		border-top: 1px solid #eee;
		text-align: right;
		padding-top: 10px;
		margin-top: 50px;
		padding-bottom: 50px;
	}
	
	.landing-logo-container {
    margin-top: 50px;
}
img.landing-logo-img {
    width: 100%;
    max-width: 300px;
}
	
	
	#mktoStyleLoaded {
  /* css load detection, do not remove */
  color:#123456;
}
.mktoForm fieldset {}
.mktoForm fieldset legend{}
.mktoForm input[type=text],
.mktoForm input[type=url],
.mktoForm input[type=email],
.mktoForm input[type=tel],
.mktoForm input[type=number],
.mktoForm input[type=date]{}

.mktoForm input[type=text],
.mktoForm input[type=url],
.mktoForm input[type=email],
.mktoForm input[type=tel],
.mktoForm input[type=number],
.mktoForm input[type=date],
.mktoForm textarea.mktoField,
.mktoForm select.mktoField {
  padding:2px 3px;
  border: 1px solid #eee;
  background-color: #fff;
  color: red;
}

.mktoForm input[type=text]:focus,
.mktoForm input[type=url]:focus,
.mktoForm input[type=email]:focus,
.mktoForm input[type=tel]:focus,
.mktoForm input[type=number]:focus,
.mktoForm input[type=date]:focus,
.mktoForm select.mktoField:focus,
.mktoForm textarea.mktoField:focus{}	
	
label.mktoLabel.mktoHasWidth {
    width: auto !important;
}
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton {
	background:#28B29A !important;
	width: 100% !important;
}	
.mktoButtonRow {
    width: 100% !important;
}
button.mktoButton {
    height: 50px;
    font-size: 1.4em !important;
}
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton:hover {
    border: none !important;
    background-color: #1f8876 !important;
}
	
	
	
	
		.landing-content-wrapper {
    position: relative;
}
	
	.right-landing {
    position: absolute;
    right: 0;
    top: -25%;
	padding: 25px;
}
	
@media only screen and (max-width: 1440px) {
	.right-landing {
		top: -30%;
	}
	.left-landing {
		padding-right: 30px;
	}	
}
	
@media only screen and (max-width: 1024px) {
	.right-landing {
		top: -25%;
	}
}
		
@media only screen and (max-width: 768px) {
	.left-landing {
		padding-right: 0;
	}	
	.right-landing {
		position: relative;
		margin-top: 30px;
	}
}
	
@media only screen and (max-width: 425px) {
	.left-landing {
		padding-right: inherit;
	}	
}
</style>

<section class="container-fluid">
	<div class="container landing-logo-wrapper">
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt="RizePoint" class="landing-logo"></a>
	</div>
</section>

<section class="container-fluid banner-strip green-bg">
	<div class="container banner-strip-wrapper">
		<h1 class="white-text"><?php the_field('banner-title'); ?></h1>
	</div>
</section>

<section class="container-fluid landing-content">
	<div class="container landing-content-wrapper">
		<div class="col-md-7 left-landing">
			<h2 class="green-text"><?php the_field('title'); ?></h2>
			<?php the_field('content'); ?>
			<div class="video-container">
				<?php the_field('video'); ?>
			</div>
		</div>
		<div class="col-md-5 extraGray-bg box-shadow right-landing">
			<h3 class="purple-text"><?php the_field('form-title'); ?></h3>
			<span class="landing-req purple-text"><?php the_field('form_info_text'); ?></span>
			<?php the_field('marketo-form'); ?>
		</div>		
	</div>
</section>

<section class="container-fluid landing-logos">
	<div class="container landing-logo-container">
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-1'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-2'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-3'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-4'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-5'); ?>" alt="" class="landing-logo-img">
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12 landing-logo-wrapper">
			<img src="<?php the_field('logo-6'); ?>" alt="" class="landing-logo-img">
		</div>
	</div>
</section>

<div class="container-fluid">
	<div class="container landing-footer-wrapper">
		<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com |  All Rights Reserved</span>
	</div>
</div>


<!-- js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>




<?php wp_footer(); ?>



</body>
</html>
