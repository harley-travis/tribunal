<?php 
/**
 * Template Name: Newsroom
*/
get_header(); ?>

<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Newsroom</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-inverse-white">RizePoint Blog</a> <a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-width-lg btn-inverse-white">Resources</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="icon-news-columns wrap push">
   <div class="container news-icon-wrapper">
		<label for="show-menu" class="show-menu">Show Newsroom Options</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="tab-menu" class="news-tab container-medium" data-tab>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?>/newsroom">
				  <img src="https://rizepoint.com/wp-content/uploads/2016/10/press-01.png" alt="" class="newsroom-icon-png-img"><br>
				  <span class="ntext">Newsroom</span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?>/in-the-news">
				  <img src="https://rizepoint.com/wp-content/uploads/2016/10/news-01.png" alt="" class="newsroom-icon-png-img"><br>
				  <span class="ntext">News</span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/blog/'">
				<a href="<?php echo ROOT_URL; ?>/blog">
					<img src="https://rizepoint.com/wp-content/uploads/2016/10/blog-01.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Blog</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/solutions/corporate-responsibility/'">
				<a href="<?php echo ROOT_URL; ?>/community-relations">
					<img src="https://rizepoint.com/wp-content/uploads/2016/10/csr-01-new.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">CSR</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
				<a href="<?php echo ROOT_URL; ?>/awards">
					<img src="https://rizepoint.com/wp-content/uploads/2016/10/awards.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Awards</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-2 col-sm-12 news-icon-title">
				<a href="<?php echo ROOT_URL; ?>/media">
					<img src="https://rizepoint.com/wp-content/uploads/2016/10/multimedia-01.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Media</span>
				</a>
			</li>
		</ul>
	</div><!-- news-icon-wrapper -->
    <div class="tabs-content container">
        <div class="content active" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
                <div class="">
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
										'posts_per_page' => '10',
										'paged'          => $paged
									];

									$wp_query = null;
									$wp_query = new WP_Query($args);
									if( $wp_query->have_posts() ) : 
									?>
									<ul class="press-list">
									  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
										<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
										<li class="box-shadow">
											<div class="press-release-post">
												<?php if ($src) : ?>

												<?php endif ; ?>
												<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
												<hr>
												<div class="post-content">
													<?php get_excerpt(450, get_the_id()) ?>
												</div>
											</div>
										</li>
									  <?php endwhile; ?>
									 </ul>
									<?php endif;  ?>

									<?php if ($wp_query->max_num_pages > 1) : ?>
										<?php echo the_posts_pagination(); ?>
									<?php endif; ?>

									<?php wp_reset_query(); ?>

								</article>
							</div>
						</section>
                    </article>
                </div>
            </section>
        </div><!-- panel1 -->
       
    </div><!-- tabs-content -->    
</div><!-- icon-news-columns -->


<?php get_footer(); ?>
