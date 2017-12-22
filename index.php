<?php 
/**
 *
 * The main template file
 *
 * @link https://rizepoint.com
 * @package WordPress
 * @subpackage RizePoint
 * @since RizePoint 1.0
 *
 */

get_header(); ?>


<style>
	/* DO NOT PUT THIS IN THE SASS FILE. NEED TO APPLY ONLY TO THE POST TEMPLATES */
	h1,h2,h3,h4,h5,h6{
		color:#28B29A;
	}	
	a.rad.blog-new-nav {
		color: #fff !important;
		background: #28B29A;
		border: none;
		box-shadow: black 0px 1px 5px -1px;
	}
	a.rad.blog-new-nav:hover {
		border: none !important;
	}
</style>

<div class="container-fluid gree-blue" id="blog-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div><!-- container-fluid -->

<article class="container-fluid blog-template">
	<div class="container blog-overview-wrapper wrap push">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
			<!--titlecard-->
			<!--titlecard-->
			<?php if ($wp_query->have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="green-text post-title"><?php the_title() ?></h1>
					
						<h5 class="purple-text post-author"><i>By: <?php the_author(); ?></i></h5>
						<h6 class="post-date">Published <?php the_date(); ?></h6>
					
					<div class="post-subtitle">
						<h2 class="post-sub-header"><i><?php the_field('sub-header') ?></i></h2>
					</div>
			
					<div class="featured-post-img-wrapper">
						<?php the_post_thumbnail(array()); ?>
					</div>
					
					<div class="blog-content-section">
						<?php the_content('[...]'); ?>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>


			<!--author-->
			<?php if(get_field('author_bio_description'))  :  ?>
				<div class="lightGray-bg container authorBio">
					<div class="authorBio-wrapper">
						<div class="green-text"><h4><?php the_field('title_author_bio') ?></h4></div>
						<div class="">
							<div class="col-lg-3 col-sm-6 col-xs-12 authorImg"><img src="<?php the_field('bioauthoer_img') ?>" alt="" class="bio-img"></div>
							<div class="col-lg-9 col-sm-6 col-xs-12 authorDesc">
								<p class="athDesc"><?php the_field('author_bio_description') ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endif ; ?>
			
			<!--previous/next-->
			<div class="post-nav-wrapper">
				<ul>
					<div class="col-md-6 pagination-previous-post">
						<li><?php previous_post_link('<p>%link</p>', '< Previous Post', false); ?></li>
					</div>
					<div class="col-md-6 pagination-next-post">
						<li><?php next_post_link('<p>%link</p>', 'Next Post >', false); ?></li>
					</div>	
				</ul>
			</div><!--post-nav-->
			
			<div class="related-wrapper">
				<div class="related-post-title pink-text">
					<h4 class="pink-text">Related Posts</h4>
				</div>

				<div class="blog-related-wrapper">
					<?php

						$currentPage = get_query_var('paged');
						$relatedPosts = new WP_Query(array(
							'category_name'  => 'brand-protection, brand-experience, business intelligence, corporate-social-responsibility, corrective-action-plan, engage, food-safety, foodservice,fsma, hospitality, rize-and-shine, rizepoint',
							'posts_per_page' => 3,
							'paged' => $currentPage,
							'post_status'    => 'publish'
						));
					?>

					<?php		
						if($relatedPosts->have_posts()) :
							while ($relatedPosts->have_posts()) :
								$relatedPosts->the_post();
								$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>

							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="blog-related-img">
									<?php if ($src) : ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $src[0]; ?>" alt="" class="blog-related-img"></a>
									<?php endif ; ?>
									<?php if($src == null || $src == 0) :?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo ROOT; ?>/assets/img/blog/backup-blog.png" alt="" class="blog-related-img"></a>
									<?php endif; ?>
								</div><!--blog-img-->
								<div class="blog-related-title green-text heading-3">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div><!--blog-title-->
							</div>

							<?php
								endwhile;
								endif;
							?>
					</div><!--blog-related-wrapper-->
				</div>
			
		</div><!--blog-post-content -->
		<div class="blog-post-sidebar">
			<?php include  __DIR__ . "/includes/blog-sidebar.php"; ?>
		</div><!-- blog-post-sidebar -->
	</div><!-- blog-overview-wrapper -->
</article><!--blog-template-->



<script>
$(document).ready(function(){
	
	// for the blog / post template, hide the graident header
	$("#blog-header").removeClass("green-blue");
	$('.main-nav a, .search-icon, .upper-nav a, .upper-nav li a').addClass("blog-new-nav");
	$(".logo-img, .regular-logo").attr("src","https://rizepoint.com/wp-content/themes/tribunal/assets/img/logo/logo.png");
	$(".menu-link").addClass("blog-new-nav");
	
	// hide the related posts if the user is viewing press-release article
	var first = $(location).attr('pathname');
	first.indexOf(1);
	first.toLowerCase();
	first = first.split("/")[1];
	
	var press = 'press-releases';
	var blog = 'blog';
	
	if(first == press){
		// hide the related wrapper on press release
		$('.related-wrapper').hide();
		
		// show the social icon bar on press release 
		$('.a2a_kit.a2a_kit_size_32.a2a_floating_style.a2a_vertical_style').show();
		
		// display the ACF fields on press release 
		$('.blog-content-section > p > strong').append('<div class="post-detail"><span class="post-location"><b><?php the_field('location') ?></b></span>  &#45; <span class="post-date"><?php the_field('date') ?></span> &#45;</div> ');
		
		// if there is no content in the ACF, hide the elemtns
		if( $('.post-detail > .post-location > b').is(':empty') || $('h2.post-sub-header').is(':empty') ){
			$('.post-detail').css('display','none')  
			$('h2.post-sub-header').css('display','none')  
		}else{ 
			console.log('error');
		}
		
		// hide the img in post | since we are calling the thumbnail at top
		$('.blog-content-section > p > strong > img').hide();
			
	
		
	}else if(first == blog){
		
		// display the social icon bar on blog
		$('.a2a_kit.a2a_kit_size_32.a2a_floating_style.a2a_vertical_style').show();
	 }else{
		console.log('Error loading content. Please try again. ');
	}
	
	
});
</script>


<?php get_footer(); ?>