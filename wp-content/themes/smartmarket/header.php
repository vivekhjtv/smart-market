<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>\wp-content\themes\smartmarket\smartmarket.css?<?php echo time(); ?>">


    <script src="https://kit.fontawesome.com/8b0e840933.js" crossorigin="anonymous"></script>


    <!-- for list of all categories  -->


    <script type="text/javascript">
        
        function dropdowncat() {
            var element = document.getElementById("inline-list");



            if (element.classList.contains("active-cat")) {

                element.classList.remove("active-cat");

                var element = document.querySelectorAll('#inline-list li:not(.init)');
                for (i = 0; i <= element.length; i++) {
                    element[i].style.display = 'none';
                }
            } else {
                element.classList.add("active-cat");

                var element = document.querySelectorAll('.active-cat li:not(.init)');
                for (i = 0; i <= element.length; i++) {
                    element[i].style.display = 'list-item';
                }

            }

        }

    </script>

    <!-- for sticky header  -->

    <script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.getElementById("header");
        header.classList.toggle("sticky", window.scrollY > 0)
    })
    </script>

</head>

<body <?php body_class(); ?>>

    <?php
		wp_body_open();
		?>

    <header id="site-header" class="header-footer-group">
        <div class="header-topbar section-topbar">

            <div class="contactinfo">
                <ul class="contactinfo-ul">
                    <li>
                        <a href="mailto:info@example.com"><i class="fa-solid fa-envelope"></i> info@example.com</a>
                    </li>
                    <!-- <?php the_field('footer_title3_list1'); ?> -->
                    <li>
                        <a href="tel:0000 - 123456789"> <i class="fa fa-phone"></i> 0000 - 123456789</a>
                    </li>
                </ul>
            </div>

            <div class="socialmedia">
                <ul class="socialmedia-ul">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-inner section-inner" id="header">

            <div class="header-titles-wrapper">

                <?php

						// Check whether the header search is activated in the customizer.
						$enable_header_search = get_theme_mod( 'enable_header_search', true );

						if ( true === $enable_header_search ) {

							?>

                <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal"
                    data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
                    aria-expanded="false">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <?php twentytwenty_the_theme_svg( 'search' ); ?>
                        </span>
                        <span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                    </span>
                </button><!-- .search-toggle -->

                <?php } ?>

                <div class="header-titles">

                    <?php
								// Site title or logo.
								twentytwenty_site_logo();

								// Site description.
								twentytwenty_site_description();
							?>

                </div><!-- .header-titles -->

                <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
                    data-toggle-body-class="showing-menu-modal" aria-expanded="false"
                    data-set-focus=".close-nav-toggle">
                    <span class="toggle-inner">
                        <span class="toggle-icon">
                            <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                        </span>
                        <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                    </span>
                </button><!-- .nav-toggle -->

            </div><!-- .header-titles-wrapper -->


            <div class="header-navigation-wrapper">

                <?php
						if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
							?>

                <nav class="primary-menu-wrapper"
                    aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

                    <ul class="primary-menu reset-list-style">

                        <?php
									if ( has_nav_menu( 'primary' ) ) {

										wp_nav_menu(
											array(
												'container'  => '',
												'items_wrap' => '%3$s',
												'theme_location' => 'primary',
											)
										);

									} elseif ( ! has_nav_menu( 'expanded' ) ) {

										wp_list_pages(
											array(
												'match_menu_classes' => true,
												'show_sub_menu_icons' => true,
												'title_li' => false,
												'walker'   => new TwentyTwenty_Walker_Page(),
											)
										);

									}
									?>

                    </ul>

                </nav><!-- .primary-menu-wrapper -->

                <?php
						}
					

						if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
							?>

                <div class="header-toggles hide-no-js">

                    <?php
							if ( has_nav_menu( 'expanded' ) ) {
								?>

                    <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                        <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal"
                            data-toggle-body-class="showing-menu-modal" aria-expanded="false"
                            data-set-focus=".close-nav-toggle">
                            <span class="toggle-inner">
                                <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                                <span class="toggle-icon">
                                    <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                                </span>
                            </span>
                        </button><!-- .nav-toggle -->

                    </div><!-- .nav-toggle-wrapper -->

                    <?php
							}

							if ( true === $enable_header_search ) {
								?>

                    <div class="toggle-wrapper search-toggle-wrapper">

                        <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal"
                            data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"
                            aria-expanded="false">
                            <span class="toggle-inner">
                                <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                <span
                                    class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
                            </span>
                        </button><!-- .search-toggle -->

                    </div>

                    <?php
							}
							?>

                </div><!-- .header-toggles -->
                <?php
						}
						?>

            </div><!-- .header-navigation-wrapper -->



            <div class="header-right icon-header">


                <div class="mobile-nav-container mobile-nav-offcanvas-right header-menu" data-menu="main-menu">
                    <div class="menu-trigger" data-toggle-target=".menu-modal"
                        data-toggle-body-class="showing-menu-modal" aria-expanded="false"
                        data-set-focus=".close-nav-toggle" data-menu="main-menu">
                        <i class="menu-trigger-icon"></i>
                        <span>Menu</span>
                    </div>
                </div>

                <div class="header-right-inner">
                    <?php

										wp_nav_menu(
											array(
												'menu'  => 'Header Right Menu',
												'menu-class' => 'classright',
												
											)
										);
            ?>
                </div>
            </div>

        </div><!-- .header-inner -->

        <div class="header-bottombar section-bottombar">

            <div class="header-all--collections list-unstyled">
                <!-- <div class ="forclick" id="allcat" onclick="dropdowncat()">gggggg</div> -->
                <ul class="inline-list" id="inline-list" onclick="dropdowncat()">

                    <li class="init">All Categories</li>

                    <li class="display" data-value="value 1"><a href="<?php bloginfo('url'); ?>/shop/apple/">Apple</a>
                    </li>

                    <li class="display" data-value="value 2"><a
                            href="<?php bloginfo('url'); ?>/shop/mandrain-orange/">Orange</a></li>

                    <li class="display" data-value="value 3"><a
                            href="<?php bloginfo('url'); ?>/shop/cucumber/">Cucumber</a></li>

                    <li class="display" data-value="value 4"><a
                            href="<?php bloginfo('url'); ?>/shop/butter-cookies/">Butter Cookies</a></li>

                </ul>


            </div>


            <?php aws_get_search_form( true ); ?>


        </div>

        <?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>



    </header><!-- #site-header -->


    <?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );