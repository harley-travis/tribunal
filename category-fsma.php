<?php 
get_header(); ?>


<div class="container-fluid green-blue small-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div>

<?php
$query = new WP_Query(array(
	'category_name'  => 'fsma',
    'posts_per_page'   => -1
));

?>

<section class="container blog-categories-archive">
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<?php if ($query->have_posts()) : ?>
		<article class="small-12 columns">
			<?php
				while ($query->have_posts()): $query->the_post();
			?>
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
			<div class="news-post">
				<a href="<?php the_permalink() ?>"><div class="post-image" style="background-image: url(<?php echo $src[0]; ?>);"></div></a>
				<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
				<hr>
				<div class="post-content">
					<?php get_excerpt(450, get_the_id()) ?>
				</div>
			</div>
			<?php endwhile; ?>
				
			<?php //if ($wp_query->max_num_pages > 1) : ?>
			  <?php// echo roots_numbered_pagination(); ?>
			<?php //endif; ?>
			
		</article>
		<?php endif; ?>
	</div>
	
	
	
	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->
	
</section>
<?php get_footer(); ?>