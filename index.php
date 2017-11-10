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
img.aligncenter.wp-image-6368.size-full {
    width: 100%;
    height: auto;
}

</style>


<div class="container-fluid green-blue small-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div>

<article class="container indie-blog wrap push">
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
		<?php while (have_posts()) : the_post(); ?>
			<h1 class="green-text post-title"><?php the_title() ?></h1>
			<span class="blog-post-author">
				<?php if(get_field('title_author_bio'))  :  ?> <span>By: <?php the_field('title_author_bio') ?></span> <br>
				<?php endif ; ?><span class="news_dated_side">Published <?php echo get_the_date(); ?></span>
			</span>

			<div class="featured-post-img-wrapper">
				<?php the_post_thumbnail(array()); ?>
			</div>
			
			
			<div class="blog-content">
				<?php the_content('[...]'); ?> 
			</div><!-- blog-content -->
			
			
			<div class="tags">
				<?php
//					if(get_the_tag_list()) {
//						echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
//					}
				?>	
			</div>
			
		<?php endwhile; ?>
		
		<?php if(get_field('author_bio_description'))  :  ?>
			<div class="container authorBio">
				<div class="authorBio-wrapper">
					<div class=""><h4><?php the_field('title_author_bio') ?></h4></div>
					<div class="">
						<div class="col-lg-3 col-sm-6 col-xs-12 authorImg"><img src="<?php the_field('bioauthoer_img') ?>" alt="" class="bio-img"></div>
						<div class="col-lg-9 col-sm-6 col-xs-12 authorDesc">
							<p class="athDesc"><?php the_field('author_bio_description') ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endif ; ?>
	</div><!-- blog-post-content -->
	
	
	<?php if( get_field('hide_featured_img') == 'hide_img' ): ?>
		<style>
			.attachment-.size-.wp-post-image {
				display: none;
			}
		</style>
	<?php endif; ?>

	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->	
</article><!-- indie-blog -->



<?php get_footer(); ?>