<?php
/**
 * Template Name: Partners
 */
get_header(); ?>
<style>
.partner-form {
    background: #fafafa;
    padding: 20px;
    margin-top: 50px;
    margin-bottom: 50px;
    max-width: 500px;
    border-radius: 5px;
}
	.partners-text ul li {
    text-align: left;
    padding: 0;
}
</style>

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Become A Partner</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/view-our-partners" class="btn btn-lg btn-width btn-inverse-white">View Partners</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->


<div class="container partners-content wrap push">
	<div class="col-md-7 col-sm-6 col-xs-12 partners-text">
		<h3 class="titles green-text">RizePoint is looking for quality partners</h3>
		<p>Successful partnering is only possible under three conditions:</p>
		<ul>
			<li>It has to work for you-aligned with your business model and revenue goals</li>
			<li>It has to work for RizePoint-aligned and profitable for us as well</li>
			<li>It has to work for our customers-offering an amazing experience and great value</li>
		</ul>
		<p>The RizePoint solution is naturally configurable to meet each organization's particular needs.</p>

			 
		<h3 class="titles green-text">You should consider becoming a RizePoint partner if...</h3>
		<ul>
			<li>You work as a consultant and service provider to food service, hospitality, or retail markets, and are looking to add to your portfolio of software and service offerings</li>
			<li>You have access to organizations that need what RizePoint offers, and feel comfortable introducing them to us</li>
		</ul>
	</div><!--partners-text-->
	
	<div class="col-md-5 col-sm-6 col-xs-12 partner-form purple-text box-shadow">
		<h2>Become a Partner</h2>
		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_101"></form>
		<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 101);</script>

	</div><!--partners-forms-->
</div><!--partners-content-->


<?php get_footer(); ?>