<?php
    /**
    * Template Name: blog 
    */


	get_header();
?>

<main id="site-content">

    <div class="section fortitle">
        <div class="section-3-inner-container">

            <h1 class="forpagetitleh1">Blog</h1>

        </div>
    </div>

    <div class="section-3">

        <div class="blogpage latestnews">
            <div class="section-3-inner-container">





                <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

                <?php if ( $wpb_all_query->have_posts() ) : ?>

                <ul class="woocommerce">

                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li><?php the_post_thumbnail(); ?>
                        <h6><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a></h6>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>"><button type="submit" class="button">Read
                                    More</button></a></p>
                    </li>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                </ul>

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- <?php echo do_shortcode('[name_of_shortcode]'); ?> -->
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();