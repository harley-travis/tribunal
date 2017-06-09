<?php get_template_part('templates/page', 'header'); ?>

<?php if (isset($_GET['s'])) : ?>

<?php // IF THE SEACH QUERY HAS BEEN SET, LOAD IN THE SEARCH TEMPLATE ?>

<?php include('templates/search.php') ?>

<?php // OTHERWISE, LOAD IN THE REGULAR INDEX TEMPLATE ?>
<?php else : ?>

<section class="blog-archive">
	
	<div class="row">
		<article class="large-9 medium-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
			
			<h3>The Blog</h3>
			<hr>
			
			<?php 
			// make it display 10 posts per page
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = [
				'orderby'        => 'date',
				'posts_per_page' => '10',
				'paged'          => $paged
			];
			
			$wp_query = null;
			$wp_query = new WP_Query($args);
			?>
			
			
			
			<?php if ($wp_query->have_posts()) : ?>
			<ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1">
			<?php
				while ($wp_query->have_posts()) :
				the_post();
			?>
			
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
			
			<li>
			
				<div class="blog-post">
					<?php if ($src) : ?>
					<a href="<?php the_permalink() ?>"><div class="post-image" style="background-image: url(<?php echo $src[0]; ?>);"></div></a>
					<?php endif ; ?>
					<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
					<?php if(get_field('title_author_bio'))  :  ?> <p>By: <?php the_field('title_author_bio') ?></p> 
					<?php endif ; ?>
					<hr>
					<p><?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></p>
					<div class="post-content">
					<div class="news_dated"><?php echo get_the_date(); ?></div>
					<?php get_excerpt(450, get_the_id()) ?>
					</div>
				</div>
			
			</li>
			<?php endwhile; ?>
			</ul>
			<?php /*?><?php if ($wp_query->max_num_pages > 1) : ?>
			  <?php echo roots_numbered_pagination(); ?>
			<?php endif; ?><?php */?>
            
            		<?php if ($wp_query->max_num_pages > 1) : ?>
				<?php //echo roots_numbered_pagination(); ?>
                <?php the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( 'Previous', 'textdomain' ),
					'next_text' => __( 'Next', 'textdomain' ),
				) ); ?>
			<?php endif; ?>
			
		  <?php endif; ?>
		  
		</article>
			
		<?php include('templates/partials/_blog-sidebar.php') ?>
    
	</div>
</section>

<?php endif ; ?>
