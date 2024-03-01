<?php
    /**
    * Template Name: home
    */


	get_header();
?>

<main id="site-content">

    <?php echo do_shortcode('[metaslider id="69"]'); ?>

    <!-- <p><?php the_field('hi'); ?></p> -->
    <div class="section">
        <div class="inner-section sec1">
            <div class="left-column">
                <!-- <div> -->
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/03/img-1_770x-1.webp" alt="carrot">

                <div class="left-column-right">

                    <div class="text-start">


                        <h4 class="text-start-main-title">Veggies</h4>


                        <h6 class="text-start-sub-title"><span><strong>100%</strong> Organic</span> Products</h6>



                        <a href="<?php bloginfo('url'); ?>/shop/" class="text-start-btn leftbtn">Buy Now</a>

                    </div>
                </div>
                <!-- </div>  -->

            </div>

            <div class="right-column">
                <!-- <div> -->
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/03/img-2_770x-1.webp" alt="orange">
                <div class="right-column-right">

                    <div class="text-start">


                        <h4 class="text-start-main-title">Fruits</h4>


                        <h6 class="text-start-sub-title"><span><strong>100%</strong> &nbsp; Fresh</span> Products</h6>



                        <a href="<?php bloginfo('url'); ?>/shop/" class="text-start-btn rightbtn">Buy Now</a>

                    </div>
                    <!-- </div> -->
                </div>

            </div>

        </div>
    </div>

    <div class="section">
        <div class="inner-section sec2">
            <div class="section-title leafbg">

                <h4 class="heading">Our Products</h4>



                <p class="heading-description">Mauris vitae ultricies leo integer malesuada nunc vel in arcu cursus</p>


            </div>
            <div class="section-2-categories">



                <?php
					
				$terms = get_terms( array(
					'taxonomy' => 'product_cat',
					'hide_empty' => false,
                    
					) ); // Get Terms

				foreach ($terms as $key => $value) 
				{
					
					$metaterms = get_term_meta($value->term_id);
					$thumbnail_id = get_woocommerce_term_meta($value->term_id, 'thumbnail_id', true );
                    // $variable = get_field('hii');
					echo '<div class="cate-vari"  id="cate-vari-' .$value->name .'">';
					echo '<span class="dt-sc-tab-icon">';
					$image = wp_get_attachment_url( $thumbnail_id );
					echo '<img src="'.$image.'" alt="" />';
					echo '</span>' ;
					$name = get_term_link($value, $value->taxonomy);
					echo '<h2> ' .$value->name.  '</h2>' ;
                    // echo '<h2><a href=" ' . $variable  . '">' . // Display child taxonomy name (written by mam)
					//  $value->name .  '</a></h2>' ;
					// echo '<h2><a href="' . esc_url(get_term_link($value, $value->taxonomy)) . '">' . // Display child taxonomy name
					// $value->name .  '</a></h2>' ;
					echo '</div>';
				} // Get Images from woocommerce term meta
					
				?>

                <div class="content">
                    <div class="tab_wrap" style="display: block;">
                        <div class="title">Milk</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                    <div class="tab_wrap" style="display: none;">
                        <div class="title">Fruits</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                    <div class="tab_wrap" style="display: none;">
                        <div class="title">Flour</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                    <div class="tab_wrap" style="display: none;">
                        <div class="title">Meat</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                    <div class="tab_wrap" style="display: none;">
                        <div class="title">Veggies</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                    <div class="tab_wrap" style="display: none;">
                        <div class="title">Eggs</div>
                        <div class="tab_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis
                                alias, magni provident nulla recusandae odio consequatur praesentium officia non
                                voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo.
                                Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores
                                beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam
                                unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt
                                esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum
                                voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas
                                temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- for tab class toggle  -->

            <script type="text/javascript">
            document.querySelectorAll(".cate-vari")[0].classList.add("active-tab");
            </script>

            <script type="text/javascript">
            var tabs = document.querySelectorAll(".cate-vari");

            var tab_wraps = document.querySelectorAll(".tab_wrap");

            tabs.forEach(function(tab, tab_index) {
                tab.addEventListener("click", function() {


                    tabs.forEach(function(tab) {
                        tab.classList.remove("active-tab");
                    })
                    tab.classList.add("active-tab");

                    tab_wraps.forEach(function(content, content_index) {

                        if (content_index == tab_index) {
                            content.style.display = "block";
                        } else {
                            content.style.display = "none";

                        }
                    })

                })
            })
            </script>

        </div>
    </div>


    <div class="section-3" id ="section-3">
        <div class="section-3-inner">
            <div class="section-3-inner-container">

                <!-- <div class="section-2-div-title"> -->


                <div class="section-3-div-title">



                    <div class="section-3-title">


                        <h6 class="heading">Special Discount For All Grocery Products</h6>


                        <p class="heading-description">Turpis tincidunt id aliquet risus feugiat. Pretium vulputate
                            sapien nec sagittis aliquam. Ac tortor vitae purus faucibus ornare suspendisse sed nisi.
                            Amet risus nullam eget felis eget nunc lobortis mattis aliquam.</p>

                        <div class="counter">

                            <div class="section-3-timer-detail4">
                                <div class="lof-labelexpired">
                                    <!-- Expired -->
                                </div>
                            </div>


                        </div>

                        <a href="<?php bloginfo('url'); ?>/shop/" class="dt-sc-btn section3btn">Buy Now</a>
                    </div>

                </div>

                <!-- </div>            -->
            </div>

        </div>
    </div>

    <div class="section">
        <div class="inner-section sec4">
            <div class="section-title leafbg">

                <h4 class="heading">Special Products</h4>



                <p class="heading-description">Ut tellus elementum sagittis vitae et leo. Sollicitudin tempor id eu nisl
                    nunc</p>


            </div>

            <?php echo do_shortcode('[products limit="9" columns="3" visibility="featured" /]');?>






        </div>
    </div>

    <div class="section section-5-inner">

        <div class="section-3-inner-container">

            <div class="inner-section ">

                <div class="section-title leafbg">

                    <h4 class="heading">Our Client Say</h4>

                    <p class="heading-description">Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras
                    </p>

                </div>

                <?php echo do_shortcode('[testimonial_view id="1"]' ); ?>



            </div>
        </div>


    </div>



    <div class="section-3">
        <div class="section-3-inner latestnews">
            <div class="section-3-inner-container">

                <div class="section-title leafbg">

                    <h4 class="heading">Latest News</h4>



                    <p class="heading-description">Est ante in nibh mauris cursus donec enim diam</p>


                </div>

                <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

                <?php if ( $wpb_all_query->have_posts() ) : ?>

                <ul class="woocommerce">

                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li><?php the_post_thumbnail(); ?>
                        <h6 class="heading"><a href="<?php the_permalink(); ?>">
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

    <div class="section-3">
        <div class="section-3-inner newsletterdiv">
            <div class="section-3-inner-container">
                <div class="section-title news-title">

                    <h6 class="heading">Subscribe to our Newsletter</h6>

                </div>

                <?php echo do_shortcode('[wpforms id="843"]'); ?>

            </div>
        </div>
    </div>
    <div class="section">
        <div class="inner-section sec4">

            <?php echo do_shortcode('[logoshowcase arrows="false" autoplay="false" loop="false" slides_column="4"]');?>

        </div>
    </div>


    <div class="section-wrapper">
        <div class="section-3-inner-container">

            <div class="support-blocks-section">




                <div class="support-block text-start-support ">

                    <div class="support-icon-image">
                        <i class="fa fa-truck"></i>
                    </div>

                    <div class="support-content">

                        <h5 class="support-heading">Free Shipping</h5>


                        <p class="support-description"> Worldwide</p>


                    </div>
                </div>




                <div class="support-block text-start-support ">

                    <div class="support-icon-image">
                        <i class="fa fa-phone"></i>
                    </div>

                    <div class="support-content">

                        <h5 class="support-heading">Helpline</h5>


                        <p class="support-description"> +(000)123-4567</p>


                    </div>
                </div>




                <div class="support-block text-start-support ">

                    <div class="support-icon-image">
                        <i class="fa fa-headphones"></i>
                    </div>

                    <div class="support-content">

                        <h5 class="support-heading">24x7 Support</h5>


                        <p class="support-description"> Free For Customers</p>


                    </div>
                </div>




                <div class="support-block text-start-support ">

                    <div class="support-icon-image">
                        <i class="fa fa-exchange"></i>
                    </div>

                    <div class="support-content">

                        <h5 class="support-heading">Returns</h5>


                        <p class="support-description"> 30 Days Free Exchanges</p>


                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- <?php echo do_shortcode('[name_of_shortcode]'); ?> -->
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();