/* Display Related Products */
/* ======================== */

if ( ! function_exists( 'display_related_products' ) ) {

    function display_related_products($post_tag) {
        ?>
        <div class="related-products">

            <!-- simple WP_Query -->
            <?php
                $args = array(
                    'post_type' => 'product',
                    'tag' => $post_tag, // Here is where is being filtered by the tag you want
                    'orderby' => 'id',
                    'order' => 'ASC'
                );

                $related_products = new WP_Query( $args );
            ?>

            <?php while ( $related_products -> have_posts() ) : $related_products -> the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="related-product">
                    <?php if( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'full', array( 'class' => 'related-product-img', 'alt' => get_the_title() ) ); ?>
                    <?php endif; ?>
                </a>

            <?php endwhile; wp_reset_query(); ?>

        </div>

