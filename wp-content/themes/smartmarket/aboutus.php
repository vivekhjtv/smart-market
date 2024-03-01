<?php
    /**
    * Template Name: about-us
    */


	get_header();
?>

<main id="site-content">

    <div class="section fortitle">
        <div class="section-3-inner-container">

            <h1 class="forpagetitleh1"><?php the_field('about_title'); ?></h1>

        </div>
    </div>

    <div class="sectionimages">

        <div class="inner-sectionimages">


            <div class="overlay-style">

                <div class="overlay-image">
                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img1'); ?>"
                        data-src="<?php the_field('about_img1'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">
                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">
                        <h4 class="main-title"><a href=""><?php the_field('about_img1_text'); ?></a></h4>

                    </div>
                </div>
            </div>

            <div class="overlay-style">

                <div class="overlay-image">
                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img2'); ?>"
                        data-src="<?php the_field('about_img2'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">

                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">


                        <h4 class="main-title"><a href=""><?php the_field('about_img2_text'); ?></a></h4>


                    </div>
                </div>
            </div>

            <div class="overlay-style">

                <div class="overlay-image">
                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img3'); ?>"
                        data-src="<?php the_field('about_img3'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">

                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">


                        <h4 class="main-title"><a href=""><?php the_field('about_img3_text'); ?></a></h4>


                    </div>
                </div>
            </div>

            <div class="overlay-style">

                <div class="overlay-image">

                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img4'); ?>"
                        data-src="<?php the_field('about_img4'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">

                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">


                        <h4 class="main-title"><a href=""><?php the_field('about_img4_text'); ?></a></h4>


                    </div>
                </div>
            </div>

            <div class="overlay-style">

                <div class="overlay-image">

                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img5'); ?>"
                        data-src="<?php the_field('about_img5'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">

                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">


                        <h4 class="main-title"><a href=""><?php the_field('about_img5_text'); ?></a></h4>


                    </div>
                </div>
            </div>

            <div class="overlay-style">

                <div class="overlay-image">
                    <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('about_img6'); ?>"
                        data-src="<?php the_field('about_img6'); ?>"
                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                        data-aspectratio="1.0" data-sizes="auto" alt="" sizes="437px">

                </div>

                <div class="overlay-content">
                    <div class="overlay-inner">


                        <h4 class="main-title"><a href=""><?php the_field('about_img6_text'); ?></a></h4>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section-3 section-3-abpad">
        <div class="section-3-inner bgnone">
            <div class="section-3-inner-container">
                <div class="section-title leafbg">

                    <h4 class="heading"><?php the_field('sec2_heading'); ?></h4>

                    <p class="heading-description"><?php the_field('sec2_heading_para'); ?></p>

                </div>

                <div class="icon-box-section">




                    <div class="icon-box reverse-columns">

                        <div class="icon-image">
                            <img class="lazyautosizes ls-is-cached lazyloaded"
                                src="<?php the_field('sec2_box1_img'); ?>"
                                data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                data-aspectratio="1.0" data-sizes="auto" alt=""
                                data-srcset="<?php the_field('sec2_box1_img'); ?>" sizes="50px"
                                srcset="<?php the_field('sec2_box1_img'); ?>">
                        </div>

                        <div class="icon-content">

                            <h4 class="dt-sc-main-title"><?php the_field('sec2_box1_heading'); ?></h4>


                            <p class="dt-sc-description"><?php the_field('sec2_box1_para'); ?></p>

                        </div>
                    </div>





                    <div class="icon-box ">

                        <div class="icon-image">
                            <img class="lazyautosizes ls-is-cached lazyloaded"
                                src="<?php the_field('sec2_box2_img'); ?>"
                                data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                data-aspectratio="1.0" data-sizes="auto" alt=""
                                data-srcset="<?php the_field('sec2_box2_img'); ?>" sizes="50px"
                                srcset="<?php the_field('sec2_box2_img'); ?>">
                        </div>

                        <div class="icon-content">

                            <h4 class="dt-sc-main-title"><?php the_field('sec2_box2_heading'); ?></h4>


                            <p class="dt-sc-description"><?php the_field('sec2_box2_para'); ?></p>

                        </div>
                    </div>





                    <div class="icon-box reverse-columns">

                        <div class="icon-image">
                            <img class="lazyautosizes ls-is-cached lazyloaded"
                                src="<?php the_field('sec2_box3_img'); ?>"
                                data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                data-aspectratio="1.0" data-sizes="auto" alt=""
                                data-srcset="<?php the_field('sec2_box3_img'); ?>" sizes="50px"
                                srcset="<?php the_field('sec2_box3_img'); ?>">

                        </div>

                        <div class="icon-content">

                            <h4 class="dt-sc-main-title"><?php the_field('sec2_box3_heading'); ?></h4>


                            <p class="dt-sc-description"><?php the_field('sec2_box3_para'); ?></p>

                        </div>
                    </div>





                    <div class="icon-box ">

                        <div class="icon-image">
                            <img class="lazyautosizes ls-is-cached lazyloaded"
                                src="<?php the_field('sec2_box4_img'); ?>"
                                data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                data-aspectratio="1.0" data-sizes="auto" alt=""
                                data-srcset="<?php the_field('sec2_box4_img'); ?>" sizes="50px"
                                srcset="<?php the_field('sec2_box4_img'); ?>">
                        </div>

                        <div class="icon-content">

                            <h4 class="dt-sc-main-title"><?php the_field('sec2_box4_heading'); ?></h4>


                            <p class="dt-sc-description"><?php the_field('sec2_box4_para'); ?></p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="section-3">
        <div class="section-3-inner-container">
            <div class="icons-section-type2">
                <div class="icon-wrapper">
                    <div class="image-section-content">

                        <h4 class="our-service-main-title "><?php the_field('sec3_heading'); ?></h4>


                        <h6 class="our-service-sub-title"><?php the_field('sec3_para'); ?></h6>


                        <div class="icon-blocks-section">





                            <div class="icon-block">

                                <div class="icon-image-services"><img class="lazyautosizes ls-is-cached lazyloaded"
                                        src="<?php the_field('sec3_box1_img'); ?>"
                                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                        data-aspectratio="0.9855072463768116" data-sizes="auto" alt=""
                                        data-srcset="<?php the_field('sec3_box1_img'); ?>" sizes="50px"
                                        srcset="<?php the_field('sec3_box1_img'); ?>">
                                </div>

                                <div class="icon-content-services">

                                    <h4 class="main-title-services"><?php the_field('sec3_box1_heading'); ?></h4>


                                    <p class="description-services"><?php the_field('sec3_box1_para'); ?></p>

                                </div>
                            </div>







                            <div class="icon-block">

                                <div class="icon-image-services"><img class="lazyautosizes ls-is-cached lazyloaded"
                                        src="<?php the_field('sec3_box2_img'); ?>"
                                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                        data-aspectratio="0.9855072463768116" data-sizes="auto" alt=""
                                        data-srcset="<?php the_field('sec3_box2_img'); ?>" sizes="50px"
                                        srcset="<?php the_field('sec3_box2_img'); ?>">
                                </div>

                                <div class="icon-content-services">

                                    <h4 class="main-title-services"><?php the_field('sec3_box2_heading'); ?></h4>


                                    <p class="description-services"><?php the_field('sec3_box2_para'); ?></p>

                                </div>
                            </div>







                            <div class="icon-block">

                                <div class="icon-image-services"><img class="lazyautosizes ls-is-cached lazyloaded"
                                        src="<?php the_field('sec3_box3_img'); ?>"
                                        data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                                        data-aspectratio="0.9855072463768116" data-sizes="auto" alt=""
                                        data-srcset="<?php the_field('sec3_box3_img'); ?>" sizes="50px"
                                        srcset="<?php the_field('sec3_box3_img'); ?>">
                                </div>

                                <div class="icon-content-services">

                                    <h4 class="main-title-services"><?php the_field('sec3_box3_heading'); ?></h4>


                                    <p class="description-services"><?php the_field('sec3_box3_para'); ?></p>

                                </div>
                            </div>



                        </div>

                    </div>
                </div>
                <div class="icon-wrapper">

                    <div class="dt-sc-image"><img class="lazyautosizes ls-is-cached lazyloaded"
                            src="<?php the_field('sec3_img_right'); ?>"
                            data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                            data-aspectratio="0.6530612244897959" data-sizes="auto" alt=""
                            data-srcset="<?php the_field('sec3_img_right'); ?>" sizes="578.6122448979592px"
                            srcset="<?php the_field('sec3_img_right'); ?>">

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="section section-5-inner">
        <div class="section-3-inner-container">

            <div class="inner-section ">

                <div class="section-title leafbg">

                    <h4 class="heading"><?php the_field('sec4_heading'); ?></h4>

                    <p class="heading-description"><?php the_field('sec4_para'); ?></p>

                </div>

            </div>

            <div class="team-section">

                <div class="team">
                    <div class="team-image">
                        <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('team-image1'); ?>"
                            data-src="<?php the_field('team-image1'); ?>"
                            data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                            data-aspectratio="1.0" data-sizes="auto" alt="" sizes="245px">

                        <ul class="social-icon">
                            <li><a href="#" targer="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">

                        <h3 class="team-main-title"><?php the_field('team1_designation'); ?></h3>


                        <h6><?php the_field('team1_designation'); ?></h6>

                    </div>
                </div>

                <div class="team">
                    <div class="team-image">
                        <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('team-image2'); ?>"
                            data-src="<?php the_field('team-image2'); ?>"
                            data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                            data-aspectratio="1.0" data-sizes="auto" alt="" sizes="245px">


                        <ul class="social-icon">
                            <li><a href="#" targer="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">

                        <h3 class="team-main-title"><?php the_field('team2_name'); ?></h3>


                        <h6><?php the_field('team2_designation'); ?></h6>

                    </div>
                </div>

                <div class="team">
                    <div class="team-image">
                        <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('team-image3'); ?>"
                            data-src="<?php the_field('team-image'); ?>"
                            data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                            data-aspectratio="1.0" data-sizes="auto" alt="" sizes="245px">


                        <ul class="social-icon">
                            <li><a href="#" targer="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">

                        <h3 class="team-main-title"><?php the_field('team3_name'); ?></h3>


                        <h6><?php the_field('team3_designation'); ?></h6>

                    </div>
                </div>

                <div class="team">
                    <div class="team-image">
                        <img class="lazyautosizes ls-is-cached lazyloaded" src="<?php the_field('team-image4'); ?>"
                            data-src="<?php the_field('team-image4'); ?>"
                            data-widths="[180, 360, 470, 600, 770, 970, 1060, 1280, 1512, 1728, 2048]"
                            data-aspectratio="1.0" data-sizes="auto" alt="" sizes="245px">


                        <ul class="social-icon">
                            <li><a href="#" targer="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" targer="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">

                        <h3 class="team-main-title"><?php the_field('team4_name'); ?></h3>


                        <h6><?php the_field('team4_designation'); ?></h6>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="inner-section sec4">

            <?php echo do_shortcode('[logoshowcase arrows="false" autoplay="false"  loop="false" dots="false" slides_column="4"]');?>

        </div>
    </div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();