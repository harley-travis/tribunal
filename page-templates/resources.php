<?php
/*
Template Name: Resources 
*/

get_header();
?>

<?php 
    /**
    *
    * These functions is here to remove speical characters in the tab names 
    * when they are entered in wordpress. Need to find a more effiencet way
    * to run this function. 
    *
    **/
    $tab1 = get_field('tab-label-1');
    $tab2 = get_field('tab-label-2');
    $tab3 = get_field('tab-label-3');
    $tab4 = get_field('tab-label-4');
    $tab5 = get_field('tab-label-5');
    $tab6 = get_field('tab-label-6');
    function tab1($tab1){
        $tab1 = strtolower($tab1);
        $tab1 = preg_replace("/[^a-z0-9_\s-]/", "", $tab1);
        $tab1 = preg_replace("/[\s-]+/", " ", $tab1);
        $tab1 = preg_replace("/[\s-]+/", "-", $tab1);
        return $tab1;
              
    }
    function tab2($tab2){
        $tab2 = strtolower($tab2);
        $tab2 = preg_replace("/[^a-z0-9_\s-]/", "", $tab2);
        $tab2 = preg_replace("/[\s-]+/", " ", $tab2);
        $tab2 = preg_replace("/[\s-]+/", "-", $tab2);
        return $tab2;

    }
    function tab3($tab3){
        $tab3 = strtolower($tab3);
        $tab3 = preg_replace("/[^a-z0-9_\s-]/", "", $tab3);
        $tab3 = preg_replace("/[\s-]+/", " ", $tab3);
        $tab3 = preg_replace("/[\s-]+/", "-", $tab3);
        return $tab3;
    }
    function tab4($tab4){
        $tab4 = strtolower($tab4);
        $tab4 = preg_replace("/[^a-z0-9_\s-]/", "", $tab4);
        $tab4 = preg_replace("/[\s-]+/", " ", $tab4);
        $tab4 = preg_replace("/[\s-]+/", "-", $tab4);
        return $tab4;
    }
    function tab5($tab5){
        $tab5 = strtolower($tab5);
        $tab5 = preg_replace("/[^a-z0-9_\s-]/", "", $tab5);
        $tab5 = preg_replace("/[\s-]+/", " ", $tab5);
        $tab5 = preg_replace("/[\s-]+/", "-", $tab5);
        return $tab5;
    }
	function tab6($tab6){
        $tab6 = strtolower($tab6);
        $tab6 = preg_replace("/[^a-z0-9_\s-]/", "", $tab6);
        $tab6 = preg_replace("/[\s-]+/", " ", $tab6);
        $tab6 = preg_replace("/[\s-]+/", "-", $tab6);
        return $tab6;
    }

    /**
    *
    * TAB LEGEND
    * 1) POPULAR
    * 2) CASE STUDIES
    * 3) DATASHEETS
    * 4) WHITE PAPERS
    * 5) VIDEOS
    *
    **/
    

?>
<style>
	img {
    width: 100%;
}
 p.overlay-text {
		font-size: 1em !important;
	}
</style>
<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Resources</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Blog</a> <a href="<?php echo ROOT_URL; ?>/newsroom" class="btn btn-lg btn-width-lg btn-inverse-white">Newsroom</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
   
    <div class="tabs wrap push">
        <div class="tab-links-wrapper">
            <label for="show-menu" class="show-menu">Show Tabs</label>
            <input type="checkbox" id="show-menu" role="button">
            <ul class="tab-links" id="tab-menu">
                <li class="tab-list active"><a href="#<?php echo tab1($tab1); ?>"><?php the_field('tab-label-1'); ?></a></li>
                <li class="tab-list"><a href="#<?php echo tab4($tab4); ?>"><?php the_field('tab-label-4'); ?></a></li>
                <li class="tab-list"><a href="#<?php echo tab5($tab5); ?>"><?php the_field('tab-label-5'); ?></a></li>
                <li class="tab-list"><a href="#<?php echo tab2($tab2); ?>"><?php the_field('tab-label-2'); ?></a></li>
                <li class="tab-list"><a href="#<?php echo tab6($tab6); ?>"><?php the_field('tab-label-6'); ?></a></li>
                <li class="tab-list"><a href="#<?php echo tab3($tab3); ?>"><?php the_field('tab-label-3'); ?></a></li>
            </ul>
        </div><!-- tab-links-wrapper -->
                    
            <div class="container tab-content">
                <div class="tab-content-wrapper">
                    <div id="<?php echo tab1($tab1); ?>" class="tab active">
                        <div class="resource-container">
                                                        
                            <div class="headline-posts-container">
                                <div class="col-sm-12 col-md-4 col-lg-6 headline-col-1">
                                    <div class="headline-wrapper">
                                        <a href="https://rizepoint.com/fsma-e-book/">
                                            <div class="headline-post" style="background-image:url(<?php the_field('popular-img-1'); ?>);"></div>
                                            <div class="headline-post-text">
                                                <h3 class="headline-heading"><?php the_field('popular-title-1'); ?></h3>
                                            </div><!-- headline-post-text -->
                                        </a> 
                                    </div><!-- headline-wrapper -->
                                </div><!-- headline -->

                                <div class="col-sm-12 col-md-4 col-lg-3 headline-col-2">
                                    <div class="headline-col-2-wrapper">
                                        <a href="<?php the_field('popular-link-2'); ?>">
                                            <div class="hc2-1-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular-img-2'); ?>');"></div>
                                                <div class="hc2-text">
                                                    <h3 class="subheadline-heading"><?php the_field('popular-title-2'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>

                                        <a href="<?php the_field('popular-link-3'); ?>">
                                            <div class="hc2-2-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular-img-3'); ?>');"></div>
                                                <div class="hc2-text">
                                                    <h3 class="subheadline-heading"><?php the_field('popular-title-3'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>
                                    </div><!-- headling-col-2-wrapper -->                            
                                </div><!-- headline-col -->
                                
                                <div class="col-sm-12 col-md-4 col-lg-3 headline-col-3">
                                    <div class="headline-col-3-wrapper">
                                        
                                        <a href="<?php the_field('popular-link-4'); ?>">
                                            <div class="hc3-1-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular-img-4'); ?>');"></div>
                                                <div class="hc3-text">
                                                    <h3 class="subheadline-heading"><?php the_field('popular-title-4'); ?></h3>
                                                </div><!-- headline-col-2-text -->
                                            </div><!-- headling-col-2-post -->
                                        </a>
                                            
                                        <a href="https://rizepoint.com/csr-white-paper/">
                                            <div class="hc3-2-post">
                                                <div class="frontPostImg" style="background-image:url('<?php the_field('popular-img-5'); ?>');"></div>
                                                <div class="hc3-text">
                                                    <h3 class="subheadline-heading"><?php the_field('popular-title-5'); ?></h3>
                                                </div><!-- headline-col-3-text -->
                                            </div><!-- headling-col-3-post -->
                                        </a>
                                        
                                    </div><!-- headling-col-3-wrapper -->    
                                </div><!-- headline-col -->
                            </div><!-- headline-posts-container -->
                            
                            <div class="resource-thmb-loop">
                                <?php if( have_rows('tab_items_1') ): ?>
                                    <?php while ( have_rows('tab_items_1') ): the_row(); ?>
                                        <div class="col-sm-12 col-md-6 col-lg-4 resource-col" >
                                            <a href="<?php the_sub_field('tab-link-1'); ?>">
                                                <div class="resource-col-wrapper" style="background-image:url('<?php the_sub_field('tab-image-1'); ?>');">
                                                    <!--<img src="" alt="" class="resource-col-img">-->
                                                    <div class="resource-col-title-1">
                                                        <span class="rc-title-text"><?php the_sub_field('tab-title-1'); ?></span>
                                                    </div><!-- resource-col-title -->
                                                </div><!-- resource-col-wrapper -->
                                            </a>
                                        </div><!-- resource-col -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div><!-- resource-thmb-loop -->
                        </div><!-- container -->
                    </div><!-- TAB1 -->

                    <div id="<?php echo tab2($tab2); ?>" class="tab">
                        <div class="resource-container">
                            <?php if( have_rows('tab_items_2') ): ?>
                                <?php while ( have_rows('tab_items_2') ): the_row(); ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 resource-col">
                                        <a href="<?php the_sub_field('tab-link-2'); ?>" target="_blank">
                                            <div class="resource-col-wrapper hovereffect" style="background-image:url('');">
                                                <img src="<?php the_sub_field('tab-image-2'); ?>" alt="" class="tab2-img">
                                                <div class="overlay">
                                                    <h3 class="overlay-heading"><?php the_sub_field('hover-title'); ?></h3>
                                                    <p class="overlay-text"><?php the_sub_field('hover-text'); ?></p>
                                                </div><!-- overlay -->
                                            </div><!-- resource-col-wrapper -->
                                            <div class="resource-col-title"> 
                                                <span class="rc-title-text"><?php the_sub_field('tab-title-2'); ?></span>
                                            </div><!-- resource-col-title -->
                                        </a>
                                    </div><!-- resource-col -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div><!-- container -->
                    </div><!-- TAB2 -->

                    <div id="<?php echo tab3($tab3); ?>" class="tab">
                        <div class="resource-container">
                            <?php if( have_rows('tab_items_3') ): ?>
                                <?php while ( have_rows('tab_items_3') ): the_row(); ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 resource-col">
                                        <a href="<?php the_sub_field('tab-link-3'); ?>" target="_blank">
                                            <div class="resource-col-cs-wrapper">
                                                <img src="<?php the_sub_field('tab-image-3'); ?>" alt="" class="resource-col-img">
                                                <div class="resource-col-title">
                                                    <span class="rc-title-text"><?php the_sub_field('tab-title-3'); ?></span>
                                                </div><!-- resource-col-title -->
                                            </div><!-- resource-col-cs-wrapper -->
                                        </a>
                                    </div><!-- resource-col -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div><!-- container -->
                    </div><!-- TAB3 -->
                    
                    <div id="<?php echo tab4($tab4); ?>" class="tab">
                       <div class="resource-container">
                            <?php if( have_rows('tab_items_4') ): ?>
                                <?php $count = 1; ?>
                                <?php while ( have_rows('tab_items_4') ): the_row(); ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 resource-col">
                                        <a href="#" data-toggle="modal" data-target="#resource-modal-<?php echo $count; ?>">
                                            <div class="resource-col-cs-wrapper">
                                                <img src="<?php the_sub_field('tab-image-4'); ?>" alt="" class="resource-col-img">
                                                <div class="resource-col-title">
                                                    <span class="rc-title-text"><?php the_sub_field('tab-title-4'); ?></span>
                                                </div><!-- resource-col-title -->
                                            </div><!-- resource-col-cs-wrapper -->
                                        </a>
                                    </div><!-- resource-col -->
                                    <?php $count++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                           
                           <!---------------------
                                RESOURCES MODALS
                            ----------------------> 
                           <?php if( have_rows('modal_items') ): ?>
                                <?php $count = 1; ?>
                                <?php while ( have_rows('modal_items') ): the_row(); ?>
                                    <div id="resource-modal-<?php echo $count; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="resource-modal-<?php echo $count; ?>-label">
                                    	<div class="large-modal modal-dialog" role="document">
											<div class="modal-content modal-resource">
												<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
												<h3><?php the_sub_field('modal-title'); ?></h3>
												<p><?php the_sub_field('modal-desc'); ?></p>
												<form id="mktoForm_<?php the_sub_field('form-ID'); ?>"></form>
												<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", <?php the_sub_field('form-ID'); ?>, function (form){});</script>    
											</div>  
										</div> 
                                    </div>
                                <?php $count++; ?>
                                <?php endwhile; ?>
                           <?php endif; ?>
                                        
                           <div class="wp-infographic">
                                <img src="<?php the_field('infographic'); ?>" alt="" class="wp-infograpic">
                           </div><!-- wp-infographic -->
                           
                        </div><!-- container -->
                    </div><!-- TAB4 -->

                    <div id="<?php echo tab5($tab5); ?>" class="tab">
                       <div class="resource-container">
                            <?php if( have_rows('tab_items_5') ): ?>
                                <?php while ( have_rows('tab_items_5') ): the_row(); ?>
                                    <div class="col-sm-12 col-md-6 resource-col">
                                        <div class="videoWrapper">
											<a href="<?php the_sub_field('video-link'); ?>"><h4><?php the_sub_field('video-title'); ?></h4></a>
                                            <?php the_sub_field('video-embed'); ?>
                                        </div><!-- videoWrapper -->
                                    </div><!-- resource-col -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                           <div class="col-sm-12 col-md-6 resource-col">
                               <div class="videoWrapper">
                                    <a href="#" data-reveal-id="video-webinar-modal">
                                      	<h4><?php the_field('webinar-title'); ?></h4>
                                        <img src="<?php the_field('webinar-video'); ?>" alt="" class="webinar-video-img">
                                    </a>
                               </div><!-- videoWrapper -->
                           </div><!-- resource-col -->
                           
                           <!---------------------
                                WEBINAR MODALS
                            ---------------------->
                           <div id="video-webinar-modal" class="modal fade resource-modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
                               <div class="modal-content">
                                	<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
									 <h3><?php the_field('webinar-modal-title'); ?></h3>
									 <p><?php the_field('webinar-modal-desc'); ?></p>
									<form id="mktoForm_<?php the_field('webinar-form-ID'); ?>"></form>
									<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", <?php the_field('webinar-form-ID'); ?>, function (form){});</script> 
							   </div>    
                           </div>
                           
                        </div><!-- container -->
                    </div><!-- TAB5 -->
                    
                    
                    <div id="<?php echo tab6($tab6); ?>" class="tab">
                        <div class="resource-container">
                            <?php if( have_rows('tab_items_6') ): ?>
                                <?php while ( have_rows('tab_items_6') ): the_row(); ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4 resource-col">
                                        <a href="<?php the_sub_field('tab-link-6'); ?>" target="_blank">
                                          
                                                <img src="<?php the_sub_field('tab-image-6'); ?>" alt="" class="tab2-img">

                                    
                                            <div class="resource-info-title"> 
                                                <span class="col-sm-9 rc-title-text"><?php the_sub_field('tab-title-6'); ?></span>
<!--                                                <span class="col-sm-3 rc-title-download"><a href="<?php the_sub_field('tab-link-6'); ?>" download class="btn btn-primary"><span class="glyphicon glyphicon-download icon-pad" aria-hidden="true"></span> Download</a></span>-->

                                                
                                                
                                                
                                            </div><!-- resource-col-title -->
                                        </a>
                                    </div><!-- resource-col -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div><!-- container -->
                    </div><!-- TAB2 -->

                    <div class="seo">
                        <p><?php the_field('seo-text'); ?></p>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content('[...]'); ?> 
                        <?php endwhile; ?>
                    </div><!-- seo -->
                    
                    
                </div><!-- tab-content-wrapper -->
            </div><!-- tab content -->
        </div><!-- tabs -->

   
<style>
   .modal-resource{
	   padding: 20px;
   }
</style>
   
    <!---------------------
        INIT TAB FUNCTION
    ---------------------->
    
    <script>
        $(document).ready(function() {
            $('.tabs .tab-links a').on('click', function(e)  {
                var currentAttrValue = $(this).attr('href');
                $('.tabs ' + currentAttrValue).show().siblings().hide(); // Show/Hide Tabs
                $(this).parent('li').addClass('active').siblings().removeClass('active'); // Change/remove current tab to active
                e.preventDefault();
            });
        });
    </script>
    
   <?php get_footer(); ?>