<?php 
/**
 * Template Name: News
*/
get_header(); ?>

<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/newsroom-nav.php"; ?>


<section class="container-fluid news-list">
<div class="container wrapper-news">
<?php
$type = 'news';
// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
	'post_type'     => $type,
	'post_status'   => 'publish',
	'posts_per_page' => 20
	//'orderby'     => 'date',
	//'paged'       => $paged,
];

//$wp_query = null;
$wp_query = new WP_Query($args);
if( $wp_query->have_posts() ) : 
?>
<div class="container wrap push">
<div class="col-md-9 title-wrap">
<h2 class="press-release-class purple-text"><a href="<?php echo ROOT; ?>/press-releases" class="purple-text">In The News</a></h2>

<ul class="news-articles-list">

  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  <li>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
	<div class="news-post">
		<div class="col-lg-3 col-md-6 col-sm-12 news-post-img-wrapper">
			<?php if ($src) : ?>
			<a href="<?php the_permalink() ?>"><img src="<?php echo $src[0]; ?>" alt="" class="news-post-img"></a>
			<?php endif ; ?>
		</div><!-- news post img -->
		<div class="col-lg-6 col-md-6 col-sm-12 news-post-text-wrapper">
			<a href="<?php the_permalink() ?>"><h3 class="heading-3"><?php the_title() ?></h3></a>
			<hr>
			<div class="post-content">
				<div class="news_dated"><?php echo get_the_date(); ?></div>
				<?php get_excerpt(450, get_the_id()); ?>
			</div>
		</div><!-- news post text -->
	</div>
  </li>
  <?php endwhile; ?>
 </ul>
<?php endif;  ?>
</div>

<div class="blog-post-sidebar">
	<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
</div><!-- blog-post-sidebar -->

<?php wp_reset_query(); ?>
</div>
</div>



</section>




<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>