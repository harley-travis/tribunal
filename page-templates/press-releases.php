<?php 
/**
 * Template Name: Press Release Template
*/
get_header(); ?>

<style>
.news-icon-wrapper{
	background: gainsboro;
    width: 100%;
    height: 53px;
    box-shadow: 1px 1px 1px;
	margin-bottom: 80px;
}
	
ul.news-tab {
	font-weight: 700;
	width: 660px;
	margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 0px;
	}
	
.date-display{
	margin-right: -35px;
	}
	
hr{
	border-top: 5px solid #eee;
	}
	
</style>	

<?php if(get_field('blog_banner') == 'pink-yellow' ): ?>
	<div class="container-fluid pink-yellow">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'yellow-pink' ): ?>
	<div class="container-fluid yellow-pink">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'purple-pink' ): ?>
	<div class="container-fluid purple-pink">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'pink-purple' ): ?>
	<div class="container-fluid pink-purple">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'purple-pink-orange' ): ?>
	<div class="container-fluid purple-pink-orange">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'orange-pink-purple' ): ?>
	<div class="container-fluid orange-pink-purple">
<?php endif; ?>
	
<?php if(get_field('blog_banner') == 'purple-blue' ): ?>
	<div class="container-fluid purple-blue">
<?php endif; ?>
	
<?php if(get_field('blog_banner') == 'blue-purple' ): ?>
	<div class="container-fluid blue-purple">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-blue' ): ?>
	<div class="container-fluid green-blue">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-yellow' ): ?>
	<div class="container-fluid green-yellow">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'orange-yellow' ): ?>
	<div class="container-fluid orange-yellow">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'yellow-orange' ): ?>
	<div class="container-fluid yellow-orange">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-blue-purple' ): ?>
	<div class="container-fluid green-blue-purple">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'purple-blue-green' ): ?>
	<div class="container-fluid purple-blue-green">
<?php endif; ?>


	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_blog_title'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container news-icon-wrapper">
		<label for="show-menu" class="show-menu">Show Newsroom Options</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="tab-menu" class="news-tab container-medium" data-tab>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?><?php the_field('nav_1_link'); ?>">
				  <span class="ntext"><?php the_field('nav_1_title'); ?></span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?><?php the_field('nav_2_link'); ?>">
				  <span class="ntext"><?php the_field('nav_2_title'); ?></span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/blog/'">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_3_link'); ?>">
					<span class="ntext"><?php the_field('nav_3_title'); ?></span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/solutions/corporate-responsibility/'">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_4_link'); ?>">
					<span class="ntext"><?php the_field('nav_4_title'); ?></span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_5_link'); ?>">
					<span class="ntext"><?php the_field('nav_5_title'); ?></span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_6_link'); ?>">
					<span class="ntext"><?php the_field('nav_6_title'); ?></span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_7_link'); ?>">
					<span class="ntext"><?php the_field('nav_7_title'); ?></span>
				</a>
			</li>
		</ul>
	</div><!-- news-icon-wrapper -->

	<div class="tabs-content container">
	<div class="content active blog-post-content" id="panel1">
		<!-- PRESS RELEASE -->
		<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 press-releases-archive">

			<div class="">
			   <h2 class="orange-text press-release-class">Press Releases</h2>

				<article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
					<section class="press-releases-archive">
						<div class="">
							<article class="col-md-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">

								<?php
								$type = 'press_releases';
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = [
									'post_type'      => $type,
									'post_status'    => 'publish',
									'orderby'        => 'date',
									'posts_per_page' => '3',
									'paged'          => $paged
								];

								$wp_query = null;
								$wp_query = new WP_Query($args);
								if( $wp_query->have_posts() ) : 
								?>
								<ul class="press-list">
								  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
									<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

										<div class="press-release-post">
											<?php if ($src) : ?>

											<?php endif ; ?>
											<a href="<?php the_permalink() ?>"><h4 class="orange-text heading-3"><?php the_title() ?></h4></a>
											<div class="col-md-2 date-display">
												<?php echo get_the_date('M, j, Y'); ?>
											</div>
											<div class="col-md-10 post-content">
												<?php get_excerpt(450, get_the_id()) ?>
											</div>
										</div>

								  <?php endwhile; ?>
								 </ul>
								<?php endif;  ?>

								<?php if ($wp_query->max_num_pages > 1) : ?>
								<?php endif; ?>

								<?php wp_reset_query(); ?>

							</article>
						</div>

					</section>
				</article>
			</div>

		</section>

	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->
	</div><!-- panel1 -->

</div><!-- tabs-content -->	
	
	


<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>








