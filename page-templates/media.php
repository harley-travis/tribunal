<?php 
/**
 * Template Name: Media
*/
get_header(); ?>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('left_button_title'); ?></a> <a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" class="btn btn-lg btn-inverse-white"><?php the_field('right_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/newsroom-nav.php"; ?>

<article class="container indie-blog wrap push">
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content media-wraps">
		<h2 class="purple-text press-release-class">Media Contact</h2>
			<div class="media-contact">
				<?php the_field('the_content'); ?>
			</div>
		
		<div class="media-page-wrapper">
		   <h2 class="purple-text press-release-class">Media Resources</h2>
				
				<div class="col-md-4 media-box">
					<div class="media-box-wrapper">
						<div class="media-img-box-wrapper" style="background-image: url(<?php the_field('media_image1'); ?>)"></div><!--media-image-->
						<div class="media-content">
							<?php the_field ('the_content_resources1'); ?>
								<div class="banner-btns">
									<button type="button" class="btn btn-lg btn-green" data-toggle="modal" data-target="#mediaLogos">Download</button>
								</div>
						</div><!--media-content-->
					</div><!-- media-box-wrapper -->
				</div>

				<div class="col-md-4 media-box">
					<div class="media-box-wrapper">
						<div class="media-img-box-wrapper" style="background-image: url(<?php the_field('media_image2'); ?>)"></div><!-- media-img-box-wrapper -->
						<?php the_field ('the_content_resources2'); ?>
						<div class="banner-btns">
							<button type="button" class="btn btn-lg btn-green" data-toggle="modal" data-target="#mediaImages">Download</button>
						</div>
					</div><!-- media-box-wrapper -->
				</div>

				<div class="col-md-4 media-box">
					<div class="media-box-wrapper">
						<div class="media-img-box-wrapper" style="background-image: url(<?php the_field('media_image3'); ?>)">

						</div><!-- media-img-box-wrapper -->
						<?php the_field ('the_content_resources3'); ?>
						<div class="banner-btns">
							<button type="button" class="btn btn-lg btn-green" data-toggle="modal" data-target="#mediaExecs">Download</button>
						</div>
					</div><!-- media-box-wrapper -->
				</div>
		</div>
		
	</div><!-- blog-post-content -->
	
	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->	
	
</article><!-- indie-blog -->

<!--modal-->
<div class="modal fade" id="mediaLogos" tabindex="-1" role="dialog" aria-labelledby="mediaLogosLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title heading-4" id="mediaLogosLabel">Terms and Conditions</h4>
			</div>
			<div class="modal-body">
				<?php the_field ('media_terms'); ?>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-gray btn-medium" data-dismiss="modal">I Do Not Accept</button>
				<a href="<?php echo ROOT_URL; ?>//wp-content/themes/tribunal/assets/media-resources/RizePoint Logos.zip" class="btn btn-green btn-medium">I Agree</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<div class="modal fade" id="mediaImages" tabindex="-1" role="dialog" aria-labelledby="mediaTermsLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title heading-4" id="mediaImagesLabel">Terms and Conditions</h4>
			</div>
			<div class="modal-body">
				<?php the_field ('media_terms'); ?>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-gray btn-medium" data-dismiss="modal">I Do Not Accept</button>
				<a href="<?php echo ROOT_URL; ?>//wp-content/themes/tribunal/assets/media-resources/RizePoint Images.zip" class="btn btn-green btn-medium">I Agree</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<div class="modal fade" id="mediaExecs" tabindex="-1" role="dialog" aria-labelledby="mediaTermsLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title heading-4" id="mediaExecsLabel">Terms and Conditions</h4>
			</div>
			<div class="modal-body">
				<?php the_field ('media_terms'); ?>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-gray btn-medium" data-dismiss="modal">I Do Not Accept</button>
				<a href="<?php echo ROOT_URL; ?>//wp-content/themes/tribunal/assets/media-resources/RizePoint Executive Photos and Bios.zip" class="btn btn-green btn-medium">I Agree</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>
