<?php 
/**
 * Template Name: 404
*/
get_header(); ?>


	<div class="container-fluid purple-blue">
		<?php get_template_part('includes/page-header'); ?>

		<div class="container-banner">
			<div class="banner-wrapper">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 error-mes">
						<h1>404</h1>
						<h3>You've made a huge mistake. <br> Try your URL again. <br> Click <a href="home.php">here</a> for the best summer ever.</h3>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 error-img">
						<img src="<?php echo ROOT; ?>assets/img/gif/burn-ban-2.gif">
					</div>
				</div><!--row-->
			</div><!-- banner-wrapper -->
		</div><!-- banner -->
	</div><!-- container-fluid -->
	
<?php get_footer(); ?>