<?php 
/**
 * Template Name: Solutions | fsma
*/
get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">ENSURE FSMA COMPLIANCE</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container it-content-sec1">
			<p>
			The FDA’s Food Safety Modernization Act (FSMA) is the most sweeping reform of food safety laws in more than 70 years. It aims to ensure the U.S. food supply is safe, by shifting the focus from responding to contamination to preventing it. This affects the entire supply chain, from farm to fork.</p>
			
			<p>FSMA requires all facilities — including those that transport, hold or receive food — to keep records of internal audits and food safety plans, and the FDA requires that these records be accessible on-demand. Foodservice organizations must now systematically track and report on internal audits and inspections.</p>
			
			<p>This requires a “unified source of truth” where you can – from a centralized, electronically accessible location – identify issues, manage corrective actions, enhance business processes and assure compliance. Only RizePoint provides foodservice organizations with greater visibility, intelligence, and control over how well their operations are adhering to quality and safety standards.
		</p>
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="container-fluid lightGray-bg wrap push">
	<div class="container it-content-sec2">
			<img src="<?php echo ROOT; ?>/assets/img/clients/original-sysco-min.png" alt="sysco">
			<p>
				“Having RizePoint allows us to have all of our data in one place and run reports, analyses and analytics, develop scorecards, and uncover trends that can be used by the Quality Assurance department.”<br>
				—Sanat Nileshwar, Director of Business Technology, Sysco Food Systems
			</p>
		
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="contianer-fluid white-bg wrap push">
	<div class="container it-content-sec3 ">
		<div class="wp-title purple-text">
			<h2 class="heading-2 datasheet-case-study-header">Datasheets &amp; White Papers</h2>
		</div><!--wp-title-->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="<?php echo ROOT_URL; ?>/fsma-ebook/">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/FSMAeBookHD-min.jpg" class="case-box-img" alt="">
						<h4 class="heading-4">FSMA eBook</h4>
				</a>	
			</div><!--col-->


			
			<div class="container-fluid col-md-12 col-sm-12 col-xs-12 img-container">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Avendra.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/avendra-resources.jpg" class="case-box-img" alt="">
						<h4 class="heading-4 avendra-heading">Avendra Case Study</h4>
				</a>
			</div><!--col-->

			<div class="res-button">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-green" target="_blank">Learn More</a>
			</div><!--res-button-->
		
	</div><!--container-->
</div><!--container-fluid-->

<section class="container-fluid green-bg wrap push">
	<div class="container raq-wrapper">
		<div class="col-md-6 col-sm-12 req-left">
			<div class="req-title">
				<h2 class="heading-2">Request a Free Demo</h2>
				<div class="raq-form">
					<span class="raq-disclaimer">*Fill out the form below to request a free demo</span>
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_218"></form>
						<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 218);</script>
						<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 81);</script>
				</div><!-- raq-form -->
			</div><!-- req-title -->
		</div><!-- req-left -->
		
		<div class="col-md-6 col-sm-12 req-right">
			<img src="<?php echo ROOT; ?>/assets/img/home/device-group.png" class="req-img" alt="">
		</div><!-- req-right -->
		
	</div><!-- request a demo wrapper -->
</section><!-- request a demo -->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>
