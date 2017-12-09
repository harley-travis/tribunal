<?php 
/**
 * Template Name: Resources Custom Post 
*/
get_header(); ?>

<!--header-->
<?php if(get_field('customer_banner') == 'pink-yellow' ): ?>
	<div class="container-fluid pink-yellow">
<?php endif; ?>

<?php if(get_field('customer_banner') == 'yellow-pink' ): ?>
	<div class="container-fluid yellow-pink">
<?php endif; ?>

<?php if(get_field('customer_banner') == 'purple-pink' ): ?>
	<div class="container-fluid purple-pink">
<?php endif; ?>

<?php if(get_field('customer_banner') == 'pink-purple' ): ?>
	<div class="container-fluid pink-purple">
<?php endif; ?>

<?php if(get_field('customer_banner') == 'purple-pink-orange' ): ?>
	<div class="container-fluid purple-pink-orange">
<?php endif; ?>

<?php if(get_field('customer_banner') == 'orange-pink-purple' ): ?>
	<div class="container-fluid orange-pink-purple">
<?php endif; ?>
	
<?php if(get_field('customer_banner') == 'purple-blue' ): ?>
	<div class="container-fluid purple-blue">
<?php endif; ?>
	
<?php if(get_field('customer_banner') == 'blue-purple' ): ?>
	<div class="container-fluid blue-purple">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'green-blue' ): ?>
	<div class="container-fluid green-blue">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'green-yellow' ): ?>
	<div class="container-fluid green-yellow">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'orange-yellow' ): ?>
	<div class="container-fluid orange-yellow">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'yellow-orange' ): ?>
	<div class="container-fluid yellow-orange">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'green-blue-purple' ): ?>
	<div class="container-fluid green-blue-purple">
<?php endif; ?>
		
<?php if(get_field('customer_banner') == 'purple-blue-green' ): ?>
	<div class="container-fluid purple-blue-green">
<?php endif; ?>


	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_customer_title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php the_field('customer_btn_1url'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text" target="_blank"><?php the_field('customer_btn_1text'); ?></a> 
				<a href="<?php the_field('customer_btn_2url'); ?>" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white" target="_blank"><?php the_field('customer_btn_2text'); ?></a>
		</div><!--banner-btns-->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
	
<section class="container-fluid clients-loop wrap push">	
	<div class="container clients-loop-wrapper">
		<div class="clients-heading">
			<h2 class="orangeThree-text heading-2"><?php the_field('sec1_customer_title'); ?></h2>
		</div><!-- clients-heading -->

		<?php the_field('test'); ?>
		
		<?php
			$type = 'resources';
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
							<h4 class="heading-4"><?php the_field('customer_name') ?></h4>
						</div><!-- client-name -->
					</div><!-- client-box-wrapper -->

				<?php endwhile; ?>
			<?php endif;  ?>
		<?php wp_reset_query(); ?>

		<div class="clients-cta">
			<a href="<?php the_field('customer_btn_3url'); ?>" class="btn btn-lg btn-green"><?php the_field('customer_btn_3text'); ?></a>
		</div><!-- clients-cta -->
	</div><!-- clients-loop-wrapper -->
</section><!-- clients-loop -->



<?php get_footer(); ?>