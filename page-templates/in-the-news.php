<?php 
/**
 * Template Name: News
*/
get_header(); ?>

<style>
	ul.news-articles-list {
    padding-top: 35px;
}
	.news-post {
    overflow: auto;
    padding-bottom: 75px;
}
	img.news-post-img {
    max-width: 100%;
    max-height: 200px;
    float: none;
    height: auto;
    max-width: 300px;
    float: right !important;
}
</style>

<div class="container-fluid purple-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>In The News</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/newsroom" class="btn btn-lg btn-inverse-white">Newsroom</a> <a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-inverse-white">RizePoint Blog</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

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
<ul class="news-articles-list">
  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  <li>
	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
	<div class="news-post">
		<div class="col-lg-5 col-md-6 col-sm-12 news-post-img-wrapper">
			<?php if ($src) : ?>
			<a href="<?php the_permalink() ?>"><img src="<?php echo $src[0]; ?>" alt="" class="news-post-img"></a>
			<?php endif ; ?>
		</div><!-- news post img -->
		<div class="col-lg-7 col-md-6 col-sm-12 news-post-text-wrapper">
			<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
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
<?php wp_reset_query(); ?>




<?php get_footer(); ?>