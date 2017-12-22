<?php 
/**
 * Template Name: Resources Individual Modal
 * Template Post Type: resources
*/
get_header(); ?>

<div class="container-fluid <?php the_field('banner_background_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>"><?php the_field('left_button_title'); ?></button> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/resources-nav.php"; ?>

<div class="container-fluid wrap push">
	<div class="container res-loop-wrapper">
		<h2 class="green-text heading-2 res-heading"><?php the_field('page_name'); ?></h2>
			
		<?php if(have_rows('the_repeater')): ?>
			<?php $count = 1; ?>
			<?php while(have_rows('the_repeater')): the_row(); ?>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 res-individual-wrapper">
					<div>
						<a href="#" data-toggle="modal" data-target="#resource-modal-<?php echo $count; ?>">
							<img src="<?php the_sub_field('entry_image'); ?>" alt="">
						</a>
					</div><!-- case study image -->
					<div class="res-title">
						<p><a href="#" data-toggle="modal" data-target="#resource-modal-<?php echo $count; ?>"><?php the_sub_field('entry_title'); ?></a></p>
					</div><!-- case study name -->
				</div><!-- client box wrapper -->
			<?php $count++; ?>

			<?php endwhile; ?>
		<?php endif; ?>
				
	</div>
</div>


			<!-- VIDEO MODAL REPEATER -->
		<?php if(have_rows('the_repeater')): ?>
			<?php $count = 1; ?>
			<?php while(have_rows('the_repeater')): the_row(); ?>	
		 					
			 				
					<div class="modal fade" id="resource-modal-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="videoLabel">
						<div class="large-modal modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title heading-4" id="videoLabel"><?php the_sub_field('entry_title'); ?></h4>
								</div>
								
								<div class="modal-body">
									<?php the_sub_field('form_description'); ?>
									<?php the_sub_field('the_modal_content'); ?>	
									
									<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>			
									<form id="mktoForm_<?php the_sub_field('form_id'); ?>"></form>
									<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", <?php the_sub_field('form_id'); ?>, function (form){});</script>																					
								</div><!-- modal-body -->

							</div><!-- modal-content -->
						</div><!-- modal-dialog -->
					</div><!-- modal -->
			
			<?php $count++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		

<?php get_footer(); ?>