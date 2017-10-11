<?php
/*
	Template Name: Form
*/
get_header(); ?>

<div class="container-fluid purple-blue wrap push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Download The Free FSMA eBook</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">Resources</a> <a href="<?php echo ROOT_URL; ?>/newsroom" class="btn btn-lg btn-width-lg btn-inverse-white">Newsroom</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container white-papers wrap push">

	<div class="form-box-ebook lightGray-bg box-shadow">
		<h4 class="text-center">Get the FSMA eBook</h4>
		<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
		<form id="mktoForm_263"></form>
		<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 263, function (form){});</script>    
	</div>

</section>

<?php get_footer(); ?>