<?php 
/**
 * Template Name: Case Studies Overview
*/
get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-width btn-inverse-white orange-text"><?php the_field('left_button_title'); ?></a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-width btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<section class="container-fluid case-studies-content wrap push">
	<div class="container case-studies">
	
				<?php 
					$index = 0;
					if( have_rows('case_study_content') ):
					while ( have_rows('case_study_content') ) : the_row();
				?>
				
				<?php if ($index % 2 === 0) :?>
					<div class="case-study-wrapper border-right-green">
						<div class="col-md-7 col-sm-6 col-xs-12 case-study-logo case-study-left">
							<div class="read-case-study">
								<a href="<?php echo ROOT_URL; ?><?php the_sub_field('case_study_link'); ?>" class="image-link" target="_blank">
									<img src="<?php the_sub_field('case_study_logo'); ?>" class="case-study-img" alt="">
									<div class="rcs-link">
										<span class="read-case-study-link">Read Case Study</span>
									</div>
								</a>
							</div>
						</div><!-- case-study-logo -->
						<div class="col-md-5 col-sm-6 col-xs-12 case-study-text case-study-right">
							<p><?php the_sub_field('case_study_text'); ?></p>
						</div><!-- case-study-text -->
					</div><!-- case-study-wrapper -->
				
				<?php else: ?>
					<div class="case-study-wrapper border-left-purple case-visible">
						<div class="col-md-5 col-sm-6 col-xs-12 case-study-text case-study-left">
							<div>
								<a href="<?php echo ROOT_URL; ?><?php the_sub_field('case_study_link'); ?>" target="_blank"></a>
							</div>
							<p><?php the_sub_field('case_study_text'); ?></p>
						</div><!-- case-study-text -->
						<div class="col-md-7 col-sm-6 col-xs-12 case-study-logo case-study-right">
							<div class="read-case-study">
								<a href="<?php echo ROOT_URL; ?><?php the_sub_field('case_study_link'); ?>" target="_blank">
									<img src="<?php the_sub_field('case_study_logo'); ?>" class="case-study-img" alt="" />
									<div class="rcs-link">
										<span class="read-case-study-link">Read Case Study</span>
									</div>
								</a>
							</div><!-- case-study-logo -->
						</div><!-- case-study-wrapper -->
					</div>
				<?php endif; ?>			
				
				<?php
					$index++;
					endwhile;
					endif;
				?>
				
	</div>
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>