<?php
/**
 * Template Name: What We Do
 */
get_header(); ?>

<div class="container-fluid purple-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">What We Do</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/products#mc" class="btn btn-lg btn-inverse-white">Management Console</a> <a href="<?php echo ROOT_URL; ?>/products#ma" class="btn btn-lg btn-inverse-white">Mobile Auditor</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container do-text">
		<div class="do-intro">
			<p>Rizepoint is the quality management software driving a better brand experience at the world’s biggest businesses. We help companies gather data about quality and operations, make automated corrections, and identify trends that can streamline operations. Field teams save time on audits and evaluations, and always have the most up-to-date information using the RizePoint Mobile Auditor app. Plus, with intuitive business intelligence features and role-based reporting, everyone in company gets the data they need to make more informed business decisions. </p>
		</div><!--do-text-->
	</div><!--do-intro-->
</div><!--container-fluid-->

<div class="container-fluid wrap push">
	<div class="container lightGray-bg do-video">
		<div class="aud-vid orangeOne-text">
			<h2 class="heading-2">Bluetooth Thermocouple Integration</h2>
				<script src="https://fast.wistia.com/embed/medias/wmvwv72z9m.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_wmvwv72z9m videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		</div><!--aud-vid-->
	</div><!--do-video-->
</div><!--container-fluid-->


<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="col-md-5 col-sm-6 col-xs-12 man-img">
			<img src="<?php echo ROOT; ?>assets/img/products/ma-audit-form-3-nav.png" class="solution-screenshots">
		</div>
		<div class="col-md-7 col-sm-6 col-xs-12 man-text">
			<h2 class="green-text heading-2">RizePoint Simplifies Auditing and Streamlines Reporting For:</h2>
			<ul>
				<li>Quality Assurance</li>
				<li>Corrective Action Plans and Remediation</li>
				<li>Safety</li>
				<li>Voice of the Customer Integration</li>
				<li>Brand Standards</li>
				<li>Food Safety Modernization (FSMA)</li>
				<li>Asset Audits</li>
				<li>Responsible Sourcing</li>
				<li>Supplier Quality Management</li>
			</ul>
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 lightGray-bg wrap push">
	<div class="man-wrapper">
		<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
			<h2 class="green-text heading-2">Who Benefits From RizePoint?</h2>
			<ul>
				<li>Quality Control</li>
				<li>C-Level Executives</li>
				<li>Operations</li>
				<li>Quality Assurance</li>
				<li>Corporate Social Responsibility Managers</li>
				<li>Purchasing</li>
			</ul>

		</div>

		<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
			<img src="<?php echo ROOT; ?>assets/img/products/corrective-action-plan-widget-ahp.png" class="solution-screenshots">
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content wrap push">
	<div class="man-wrapper">
		<div class="col-md-5 col-sm-6 col-xs-12 man-img">
			<img src="<?php echo ROOT; ?>assets/img/products/management-dashboards.png" class="solution-screenshots">
		</div>
		<div class="col-md-7 col-sm-6 col-xs-12 man-text">
			<h2 class="green-text heading-2">Why Is Auditing Better With RizePoint?</h2>
			<ul>
				<li>Eliminate paper &amp; pen audits</li>
				<li>Reduce audit time by up to 50%</li>
				<li>View global results available in real-time</li>
				<li>Implement Corrective Action Management plans in days, not months</li>
				<li>Incorporate regulatory changes into audits instantly</li>
				<li>Streamline business intelligence</li>
			</ul>
		</div>
	</div><!--man-wrapper-->
</div><!--man-content-->


	<section class="container-fluid section-four wrap push">
		<div class="section-four-wrapper">
			<h2 class="green-text heading-2">Trusted by the World’s Best Brands</h2>
				<?php include __DIR__ . "/../includes/client-logos.php"; ?>
			<div class="brag-btn-wrapper">
				<a href="<?php echo ROOT_URL; ?>/case-studies/" class="btn btn-lg btn-green">Read Case Studies</a>
			</div><!-- brag-btn-wrapper -->
		</div><!-- section-four-wrapper -->
	</section><!-- section-four -->

<?php get_footer(); ?>