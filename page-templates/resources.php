<?php 
/**
 * Template Name: Resources
*/
get_header(); ?>

<style>
/*
.headline-post-text {
	background: #fafafa;
	padding: 10px;
	position: absolute;
	bottom: 0;
	width: 100%;
}
	
.hc2-text, .hc3-text {
	position: absolute;
	background: #fafafa;
	bottom: 0;
	width: 100%;
	font-size: 1rem;
}
*/	

</style>

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
		
                        <div class="resource-container">
                                                        
                            <div class="headline-posts-container">
                                <div class="col-sm-12 col-md-4 col-lg-6 headline-col-1">
                                    <div class="headline-wrapper">
                                        <a href="<?php echo ROOT_URL; ?><?php the_field('popular_link_1'); ?>">
                                            <div class="headline-post" style="background-image:url(<?php the_field('popular_img_1'); ?>);"></div>
                                            <div class="headline-post-text">
                                                <h3 class="res-headline-heading"><?php the_field('popular_title_1'); ?></h3>
                                            </div><!-- headline-post-text -->
                                        </a> 
                                    </div><!-- headline-wrapper -->
                                </div><!-- headline -->

                                <div class="col-sm-12 col-md-4 col-lg-3 headline-col-2">
                                    <div class="headline-col-2-wrapper">
                                        <a href="<?php echo ROOT_URL; ?><?php the_field('popular_link_2'); ?>">
                                            <div class="hc2-1-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular_img_2'); ?>');"></div>
                                                <div class="hc2-text">
                                                    <h3 class="res-subheadline-heading"><?php the_field('popular_title_2'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>

                                        <a href="<?php echo ROOT_URL; ?><?php the_field('popular_link_3'); ?>">
                                            <div class="hc2-2-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular_img_3'); ?>');"></div>
                                                <div class="hc2-text">
                                                    <h3 class="res-subheadline-heading"><?php the_field('popular_title_3'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>
                                    </div><!-- headling-col-2-wrapper -->                            
                                </div><!-- headline-col -->
                                
                                <div class="col-sm-12 col-md-4 col-lg-3 headline-col-3">
                                    <div class="headline-col-3-wrapper">
                                        
                                        <a href="<?php echo ROOT_URL; ?><?php the_field('popular_link_4'); ?>">
                                            <div class="hc3-1-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular_img_4'); ?>');"></div>
                                                <div class="hc3-text">
                                                    <h3 class="res-subheadline-heading"><?php the_field('popular_title_4'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>
                                            
                                        <a href="<?php echo ROOT_URL; ?><?php the_field('popular_link_5'); ?>">
                                            <div class="hc3-2-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular_img_5'); ?>');"></div>
                                                <div class="hc3-text">
                                                    <h3 class="res-subheadline-heading"><?php the_field('popular_title_5'); ?></h3>
                                                </div><!-- headline-col-3-text -->
                                            </div><!-- headling-col-3-post -->
                                        </a>
                                        
                                    </div><!-- headling-col-3-wrapper -->    
                                </div><!-- headline-col -->
                            </div><!-- headline-posts-container -->
                        </div><!-- container -->
		
	</div>
</div>


<?php get_footer(); ?>