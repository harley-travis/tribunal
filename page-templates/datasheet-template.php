<?php 
/**
 * Template Name: datasheet-template
*/
get_header(); ?>

<!--header-->
<?php if(get_field('data_banner') == 'pink-yellow' ): ?>
	<div class="container-fluid pink-yellow">
<?php endif; ?>

<?php if(get_field('data_banner') == 'yellow-pink' ): ?>
	<div class="container-fluid yellow-pink">
<?php endif; ?>

<?php if(get_field('data_banner') == 'purple-pink' ): ?>
	<div class="container-fluid purple-pink">
<?php endif; ?>

<?php if(get_field('data_banner') == 'pink-purple' ): ?>
	<div class="container-fluid pink-purple">
<?php endif; ?>

<?php if(get_field('data_banner') == 'purple-pink-orange' ): ?>
	<div class="container-fluid purple-pink-orange">
<?php endif; ?>

<?php if(get_field('data_banner') == 'orange-pink-purple' ): ?>
	<div class="container-fluid orange-pink-purple">
<?php endif; ?>
	
<?php if(get_field('data_banner') == 'purple-blue' ): ?>
	<div class="container-fluid purple-blue">
<?php endif; ?>
	
<?php if(get_field('data_banner') == 'blue-purple' ): ?>
	<div class="container-fluid blue-purple">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'green-blue' ): ?>
	<div class="container-fluid green-blue">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'green-yellow' ): ?>
	<div class="container-fluid green-yellow">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'orange-yellow' ): ?>
	<div class="container-fluid orange-yellow">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'yellow-orange' ): ?>
	<div class="container-fluid yellow-orange">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'green-blue-purple' ): ?>
	<div class="container-fluid green-blue-purple">
<?php endif; ?>
		
<?php if(get_field('data_banner') == 'purple-blue-green' ): ?>
	<div class="container-fluid purple-blue-green">
<?php endif; ?>
		
			
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_data_title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php the_field('data_btn_1url'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text" target="_blank"><?php the_field('data_btn_1text'); ?></a> 
				<a href="<?php the_field('data_btn_2url'); ?>" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white" target="_blank"><?php the_field('data_btn_2text'); ?></a>
		</div><!--banner-btns-->
		
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<!--body section one-->
<section class="container-fluid datasheets-section-one wrap push">
	<div class="container datasheets-section-one-wrapper">
		<div class="data_sec1_title">
			<h1 class="green-text"><?php the_field('data_title'); ?></h1>
			<h3 class="green-text"><?php the_field('data_sub_title'); ?></h3>
		</div>
		<div class="data_sec1_content">	
			<p class="gray-text"><?php the_field('data_sec1_content'); ?></p>
		</div>
		
	</div><!--datasheets-section-one-wrapper-->
</section><!--datasheets-section-one-->

<!--body section two-->	
<section class="container-fluid datasheets-section-two wrap push">
	
<!--
		<div class="col-md-6 col-sm-12 col-ex-12 data_sec2_content">
			<?php // the_field('data_s2_main_content'); ?>
		</div>
-->
	<div class="container-fluid data_sec2_fluid">

		<div class="container sec2-title">
			<h2 class="green-text"><?php the_field('data_s2_title'); ?></h2>
		</div>

		<div class="data_sec2_lists">
			<div class="col-md-3 col-sm-6 col-xs-12 slogan">
				<img src="https://rizepoint.com/wp-content/uploads/2017/10/Mobile-device-black-01.png">
				<h3 class="green-text">Gather Better</h3>
				<?php the_field('data_s2_content_1'); ?>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 slogan">
				<img src="https://rizepoint.com/wp-content/uploads/2017/10/Real-time-report-black-01.png">
				<h3 class="green-text">See Earlier</h3>
				<?php the_field('data_s2_content_2'); ?>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 slogan">
				<img src="https://rizepoint.com/wp-content/uploads/2017/10/Efficiency-black-01.png">
				<h3 class="green-text">Act Faster</h3>
				<?php the_field('data_s2_content_3'); ?>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 slogan">
				<img src="https://rizepoint.com/wp-content/uploads/2017/10/Trends-black-01.png">
				<h3 class="green-text">Improve Continuously</h3>
				<?php the_field('data_s2_content_4'); ?>
			</div>
		</div>
	</div><!--datasheets-section-two-wrapper-->
</section><!--datasheets-section-two-->

<!--body section three-->
<section class="container-fluid datasheets-section-three wrap push">
	<div class="container datasheets-section-three-wrapper">
		<div class="col-md-6 col-sm-12 col-ex-12 data_sec3_img">
			<img src="<?php the_field('data_s3_img'); ?>" alt="" class="">
			
		</div>
		<div class="col-md-6 col-sm-12 col-ex-12 data_sec3_content">
			<h2 class="green-text"><?php the_field('data_s3_title'); ?></h2>
			<p><?php the_field('data_s3_content'); ?></p>
		</div>
		
	</div><!--datasheets-section-three-wrapper-->
</section><!--datasheets-section-three-->

<section class="container-fluid datasheets-section-four wrap push">
	<div class="container datasheet-sections-four-wrapper">
		
		<div class="data-quote">
			<h2 class="green-text"><?php the_field('data_quote_title'); ?></h2>
		</div>
				
		<div class="data-cta-btn">
			<a href="<?php the_field('data_btn_url'); ?>" class="btn btn-lg btn-green"><?php the_field('data_btn_text'); ?></a>
		</div><!-- persona-cta-btn -->
		
	</div>
</section>


<?php get_footer(); ?>