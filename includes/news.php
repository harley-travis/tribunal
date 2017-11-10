                            <h3>In The News</h3>
                            <hr>
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
   
   
                        <?php wp_reset_query(); ?>
