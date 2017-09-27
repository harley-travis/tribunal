<?php
/*
Template Name: Video
*/

get_header(); ?>
<?php
// DO NOT USE THIS TEMPLATE MOVING FORWARD. THERE IS AN ERROR WITH AND I'M TOO LAZY TO FIGURE IT OUT. 
// USE THE NEW-VDIEO.PHP TEMPLATE NOT THIS ONE. 

// DO NOT RMEOVE THIS TEMPLATE, THE OLD VIDEO TEMPLATES ARE USING THIS TEMPLATE. WE STILL NEED IT.
?>
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
			<h1><?php the_field('video-title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-inverse-white">
					Resources
				</a> <a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-inverse-white">RizePoint Blog</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-medium video-container wrap push">

    <div class="container video-wrapper">
        <?php the_field('video-embed'); ?>
        <div class="indivdual-video-text">
            <?php the_field('video-text'); ?>
        </div><!-- video text -->
    </div><!-- video-wrapper -->

</div><!-- video-container -->

<?php get_footer(); ?>