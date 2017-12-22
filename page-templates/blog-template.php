<?php 
/**
 * Template Name: Blog-Template
*/
get_header(); ?>

<style>
.social-icons ul li {
    list-style: none;
}
	
#blog-header{
	padding-bottom: 100px;
}

.social-icons{
	position: fixed;

}

.post-title{
	font-family: gotham-book;
}
	
.post-author{
	font-family: gotham-book;
	padding-bottom:15px;
}
	
.post-date{
	font-family: gotham-book;
	padding-bottom: 25px;
}

.authorImg {
    width: 100%;
    padding: 0 15px 15px 0;
    max-width: 155px;
	}
	
.blog-related-ov{
	list-style: none;
	padding-bottom: 30px;
	
	}

.blog-new-nav {
    color: #6B6B6B !important;
}
	

.post-nav-wrapper ul {
    padding: 0px;
}

	
.pagination-previous-post li{
	list-style: none;
	float: left;
	padding: 0px;
}

.pagination-next-post li{
	list-style: none;
	float: right;
	padding: 0px;
}

	
.related-post-title{
	padding: 90px 0px 10px 0px;
}

.related-post-title h4{
	border-bottom: 1px solid #FAFAFA;
}
	
.blog-related-wrapper {
    display: inline-flex;
	list-style: none;
}
	
.blog-related-img {
    width: 100%;
    max-width: 250px;
	padding-bottom: 7px;
}
	
.blog-related-title{
		margin-bottom: 130px;
}
	
.size-medium, .size-large, .size-medium_large, .size-full, .size-thumbnail{
	width: 100%;
	height: auto;
	padding: 35px 0;
}

.size-thumbnail{
	max-width: 150px
}

.size-medium{
	max-width: 300px;
}
.size-large{
	max-width: 76800px;
}
.size-full{
	max-width: 1024px;
}

</style>

<div class="container-fluid gree-blue" id="blog-header">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
</div><!-- container-fluid -->


<section class="container-fluid blog-template">
	<!--font-awesome-->
	<!--<div class="social-icons">
		<ul>
			<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
			<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
			<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
			<li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
			<li><i class="fa fa-link" aria-hidden="true"></i></li>
		</ul>
	</div><!--social-icons-->
	<div class="container blog-overview-wrapper wrap push">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
			<!--titlecard-->
			<!--titlecard-->
			<?php if ($wp_query->have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<h1 class="green-text post-title"><?php the_title() ?></h1>
					
						<h5 class="purple-text post-author"><i><?php if(get_field('title_author_bio'))  :  ?>By: <?php the_field('title_author_bio') ?><?php endif; ?></i></h5>
						<h6 class="post-date">Published <?php the_field('post_date') ?></h6>
					
					<div class="post-subtitle">
						<i><?php the_field('post_subtitle') ?></i>
					</div>
					
			
				<?php endwhile; ?>
			<?php endif; ?>
			<!--maincontent--><br><br><br>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content('[...]'); ?>
			<?php endwhile; ?>
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
			

				<div class="related-post-title pink-text">
					<h4>Related Posts</h4>
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
					?>
					
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
							<div class="related-content-wrapper">
								<div class="blog-related-img">
									<?php if ($src) : ?>
												<a href="<?php the_permalink(); ?>"><img src="<?php echo $src[0]; ?>" alt="" class="blog-related-img"></a>
									<?php endif ; ?>
									<?php if($src == null || $src == 0) :?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo ROOT; ?>/assets/img/blog/backup-blog.png" alt="" class="blog-related-img"></a>
									<?php endif; ?>

								<li><a href="
									<?php the_permalink(); ?>">
								</div><!--blog-img-->
								<div class="blog-related-title green-text heading-3">
									<p><?php the_title(); ?></p> </a></li>
								</div><!--blog-title-->
							</div>
								<?php
										endwhile;
									endif;
					?>



				</div><!--blog-related-wrapper-->


					
					
					
		</div><!--blog-post-content -->
		<div class="blog-post-sidebar">
			<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
		</div><!-- blog-post-sidebar -->
	</div><!-- blog-overview-wrapper -->
</section><!--blog-template-->



<script>
$(document).ready(function(){
	$("#blog-header").removeClass("green-blue");
	$('.main-nav a, .search-icon, .upper-nav a, .upper-nav li a').addClass("blog-new-nav");
	$(".logo-img, .regular-logo").attr("src","https://rizepoint.com/wp-content/themes/tribunal/assets/img/logo/logo.png");
	$(".menu-link").addClass("blog-new-nav");
});
</script>

<?php get_footer(); ?>



