<?php
/*
	Template Name: Landing Page | Thank You Page
*/
get_header(); ?>

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
			<span class="green-text">
				<?php the_field('action'); ?>
			</span>
		</div>
		<div class="download-asset">
			<a href="<?php the_field('download'); ?>" class="btn btn-green btn-download" download><span class="glyphicon glyphicon-cloud-download download-icon" aria-hidden="true"></span> Download Now</a>
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
			<h4 class="green-text"><?php the_field('share-text'); ?></h4>
			<div class="thanks-obama">
				<input type="text" class="thanks-url" value="https://rizepoint.com/<?php the_field('url'); ?>">
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
	<div class="container landing-footer-wrapper-two">
		<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com | All Rights Reserved</span>
	</div>
</div>

<!-- js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>

<?php wp_footer(); ?>

</body>
</html>