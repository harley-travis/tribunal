<?php get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Our Clients</h1>
			<div class="banner-btns">
				<a type="button" class="btn btn-lg btn-width btn-inverse-white orange-text">Case Studies</a> <a href="#" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
	
<section class="container-fluid clients-loop">	
	<div class="container clients-loop-wrapper">
		<div class="clients-heading">
			<h2 class="orangeThree-text">Fan club, meet our potential customer. Potential customer, meet the Fan Club.</h2>
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

					<div class="col-md-4 col-sm-6 col-xs-12 client-box-wrapper">
						<div class="client-box-pic">
							<img src="<?php the_field('customer_logo') ?>" class="client-box-img" alt="">
						</div><!-- client-box-pic -->
						<div class="client-name">
							<h4><?php the_field('customer_name') ?></h4>
						</div><!-- client-name -->
					</div><!-- client-box-wrapper -->

				<?php endwhile; ?>
			<?php endif;  ?>
		<?php wp_reset_query(); ?>

		<div class="clients-cta">
			<a href="#" class="btn btn-lg btn-green">Join The Club</a>
		</div><!-- clients-cta -->
	</div><!-- clients-loop-wrapper -->
</section><!-- clients-loop -->


<?php get_footer(); ?>