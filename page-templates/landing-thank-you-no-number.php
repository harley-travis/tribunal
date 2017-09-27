<?php
/*
	Template Name: Landing Page | Thank You W/ Number
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
	}
	.landing-footer-wrapper{
		border-top: 1px solid #eee;
		text-align: right;
		padding-top: 10px;
		margin-top: 35px;
	}
	.landing-thank {
    position: relative;
}
.landing-thank-wrapper {
    text-align: center;
    padding-top:55px;
    border: 1px solid #eee;
    border-radius: 3px;
    z-index: 9999999999;
    position: relative;
    height: 300px;
}
	.stripe-shape.green-bg {
    height: 130px;
    margin-top: 80px;
    top: 0%;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 0;
}
.thank-you-extra {
    padding: 0 !important;
    margin-top: 20px;
}
	.thanks-card{
		padding: 10px;
		text-align: center;
	}
	
	.thanks-icon{
		font-size: 1.7em;
		padding: 0 7px;
	}
	.thanks-social ul {
    text-align: center;
    list-style: none;
    padding: 0;
    margin-top: 25px;
}
	.thanks-social li{
		display: inline-block;
	}
	.btn-this {
    margin-top: 15px;
}
	.download-asset{
		margin-top: 25px;
	}
	.btn-download {
    width: 100%;
    max-width: 300px;
    padding: 10px;
}
	.download-icon{
		padding-right: 10px;
	}
	.thanks-number {
    margin-top: 25px;
}
	input.thanks-url {
    border: none;
    padding: 10px;
	width: 100%;
}
	.p-text{
		max-width: 600px;
		margin: 0 auto;
		text-align: center;
		
	}
	.p-text span{
		font-size: 1.7rem;
	}
</style>

<section class="container-fluid wrap push">
	<div class="container landing-logo-wrapper">
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt="RizePoint" class="landing-logo"></a>
	</div>
</section>

<section class="container-fluid landing-thank wrap push">
<div class="stripe-shape green-bg"></div>
	<div class="container landing-thank-wrapper lightGray-bg box-shadow">
		<h2 class="green-text">Thank You!</h2>
		<div class="p-text">
			<span class="green-text"><?php the_field('action'); ?></span>
		</div>
		
		<div class="download-asset">
		</div>
	</div>
</section>

<section class="container thank-you-extra wrap push">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="thanks-card lightGray-bg box-shadow">
			<h4 class="green-text">Connect With Us</h4>
			<div class="thanks-social">
				<ul>
					<li><a href="https://www.facebook.com/rizepoint/"><i class="fa fa-facebook purple-text thanks-icon"></i></a></li>
					<li><a href="https://twitter.com/RizePoint"><i class="fa fa-twitter purple-text thanks-icon"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCyZX-t_xThWbG9WVo2GzFIA"><i class="fa fa-youtube-play purple-text thanks-icon"></i></a></li>
					<li><a href="https://www.linkedin.com/company-beta/77852/"><i class="fa fa-linkedin purple-text thanks-icon"></i></a></li>
					<li><a href="https://www.instagram.com/rizepoint/"><i class="fa fa-instagram purple-text thanks-icon"></i></a></li>
				</ul>
			</div>   
		</div>
		
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="thanks-card lightGray-bg box-shadow">
			<h4 class="green-text">Call Us Today</h4>
			<div class="thanks-number">
				<span class="btn btn-purple"><?php the_field('number'); ?></span>
			</div>
		</div>
		
	</div>	
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="thanks-card lightGray-bg box-shadow">
			<h4 class="green-text">Check Out Our Resources</h4>
			<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-purple btn-this">Resources</a>
		</div>
		
	</div>			
</section>


<div class="container-fluid wrap push">
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