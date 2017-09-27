<?php
/*
Template Name: Download 360
*/

get_header(); ?>

<style>
	.video-wrapper{
		text-align: left;
		padding-top: 50px;
	}
	.indivdual-video-text{
		padding-top: 50px;
		padding-bottom: 50px;
	}

</style>



<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Download Mobile Auditor 360</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT; ?>assets/downloads/mobile-auditor/setup.exe" class="btn btn-lg btn-white" download>Download</a> 
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->


<?php get_footer(); ?>
