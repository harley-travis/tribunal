<?php 
/**
 * Template Name: Clients
*/
get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Our Clients</h1>
			<div class="banner-btns">
				<a href ="<?php echo ROOT_URL; ?>/5299-2" class="btn btn-lg btn-inverse-white">Case Studies</a> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Request A Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
	
<section class="container-fluid clients-loop lightGray-bg">	
	<div class="container clients-loop-wrapper">
		<div class="clients-heading">
			<h2 class="pink-text">Fan club, meet our potential customer.<br> Potential customer, meet the Fan Club.</h2>
		</div><!-- clients-heading -->

		<?php
			$type = 'customers';
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = [
				'post_type'     => $type,
				'post_status'   => 'publish', 
				'orderby'       => 'date',
				'paged'         => $paged,
				'posts_per_page' => 20
			];
			$wp_query = null;
			$wp_query = new WP_Query($args);
			if( $wp_query->have_posts() ) : ?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="client-box-pic customer-logo cl-overide box-shadow">
							<img src="<?php the_field('customer_logo') ?>" class="customerLogo-img" alt="">
						</div><!-- client-box-pic -->
						<div class="client-name">
							<h4><?php the_field('customer_name') ?></h4>
						</div><!-- client-name -->
					</div><!-- client-box-wrapper -->

				<?php endwhile; ?>
			<?php endif;  ?>
		<?php wp_reset_query(); ?>

	</div><!-- clients-loop-wrapper -->
</section><!-- clients-loop -->

<div class="container-fluid lightGray-bg">
	<div class="container clients-cta">
		<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Join The Club</a>
	</div><!-- clients-cta -->
</div>

<style>
	.clients-heading{
		padding-top: 35px;
		padding-bottom: 35px;
		text-align: center;
	}
	.client-box-pic {
    background: white;
    text-align: center;
    padding: 15px;
    border-radius: 7px;
}
	.clients-cta{
		text-align: center;
		padding-bottom: 35px;
	}
	.cl-overide{
		height: 180px !important;
	}
</style>

<?php get_footer(); ?>