<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

    <?php echo do_shortcode('[metaslider id="69"]'); ?>

    <p><?php the_field('hi'); ?></p>
    <div class="section">
        <div class="inner-section">
            <div class="left-column">
                <!-- <div> -->
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/03/img-1_770x-1.webp" alt="carrot">

                <div class="left-column-right">

                    <div class="text-start">


                        <h4 class="text-start-main-title">Veggies</h4>


                        <h6 class="text-start-sub-title"><span><strong>100%</strong> Organic</span> Products</h6>



                        <a href="" class="dt-sc-btn leftbtn">Buy Now</a>

                    </div>
                </div>
                <!-- </div>  -->

            </div>

            <div class="right-column">
                <!-- <div> -->
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/03/img-2_770x-1.webp" alt="orange	">
                <div class="right-column-right">

                    <div class="text-start">


                        <h4 class="text-start-main-title">Fruits</h4>


                        <h6 class="text-start-sub-title"><span><strong>100%</strong> Fresh</span> Products</h6>



                        <a href="" class="text-start-btn rightbtn">Buy Now</a>

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
                <!-- <div class="sec-2-cate-vari"> -->

                <?php
					
				$terms = get_terms( array(
					'taxonomy' => 'product_cat',
					'hide_empty' => false,
					) ); // Get Terms

				foreach ($terms as $key => $value) 
				{
					
					$metaterms = get_term_meta($value->term_id);
					$thumbnail_id = get_woocommerce_term_meta($value->term_id, 'thumbnail_id', true );
					echo '<div class="sec-2-cate-vari" onclick="window.onclick(event)">';
					echo '<span class="dt-sc-tab-icon">';
					$image = wp_get_attachment_url( $thumbnail_id );
					echo '<img src="'.$image.'" alt="" />';
					echo '</span>' ;
					$name = get_term_link($value, $value->taxonomy);
					echo '<h2> ' .$value->name.  '</h2>' ;
					// echo '<h2><a href="' . esc_url(get_term_link($value, $value->taxonomy)) . '">' . // Display child taxonomy name
					// $value->name .  '</a></h2>' ;
					echo '</div>';
				} // Get Images from woocommerce term meta
					
				?>

                <!-- </div> -->
            </div>



            <div>
                <?php
						// [products limit="4" columns="4" visibility="featured" /]
						// echo do_shortcode('[products limit="6" columns="6" visibility="featured" /]');



				
						
						
						?>
            </div>

        </div>
    </div>


    <div class="section-3">
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
                                <div class="lof-labelexpired"> Expired</div>
                            </div>


                        </div>

                        <a href="" class="dt-sc-btn section3btn">Buy Now</a>
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


            <!-- <?php echo do_shortcode('[product_table tag="special products"]');?> -->

            <?php
    			global $product;
			?>
            <div class="product-tags">
                <?php echo wc_get_product_tag_list( $product->get_id(), ', ' ); ?>
            </div>



        </div>
    </div>

    <div class="section section-5-inner">
        <!-- <div class="section-5-inner"> -->
        <div class="section-3-inner-container">

            <div class="inner-section ">

                <div class="section-title leafbg">

                    <h4 class="heading">Our Client Say</h4>

                    <p class="heading-description">Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras
                    </p>

                </div>
                <!-- <?php echo do_shortcode( '[rt-testimonial id="96" title=""]' ) ?> -->

                <!-- <?php echo do_shortcode('[sp_testimonial id="110"]');?> -->

            </div>
        </div>

        <!-- </div> -->
    </div>

</main>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();