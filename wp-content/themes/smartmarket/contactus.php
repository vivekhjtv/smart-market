<?php
    /**
    * Template Name: contact-us
    */


	get_header();
?>

<main id="site-content">

    <div class="section fortitle">
        <div class="section-3-inner-container">

            <h1 class="forpagetitleh1">Contact Us</h1>

        </div>
    </div>

    <div class="contact-container layout-type block_layout">



        <div id="map">
            <iframe width="1920" height="578" style="border:0;overflow:hidden;"
                src="https://maps.google.co.in/?ie=UTF8&amp;t=m&amp;ll=-37.823006,144.977388&amp;spn=0.02034,0.042915&amp;z=14&amp;output=embed"></iframe>
        </div>

        <ul class="contact-iconblock-section">

            <li class="contact-icon-block">

                <div class="contact-icon-image">
                    <i class="fa fa-phone"></i>
                </div>

                <div class="contact-icon-content">
                    <h5>Phone</h5>
                    <p> <b>Toll-Free: </b> 0000 - 123 - 456789 <br><b>Fax: </b> 0000 - 123 - 456789</p><mark></mark>
                </div>
            </li>


            <li class="contact-icon-block">

                <div class="contact-icon-image">
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="contact-icon-content">
                    <h5>Email</h5>
                    <p>
                        <a title="" href="">mail@example.com</a><br><a title="" href="">support@example.com</a>
                    </p>
                </div>
            </li>


            <li class="contact-icon-block">

                <div class="contact-icon-image">
                    <i class="fa fa-location-arrow"></i>
                </div>

                <div class="contact-icon-content">
                    <h5>Address</h5>
                    <p> No: 58 A, East Madison Street,<br> Baltimore, MD, USA
                        4508<br></p><mark></mark>
                </div>
            </li>

        </ul>

        <div class="contact-form-section">
            <h4 class="heading"> Contact Form </h4>
            <?php echo do_shortcode('[wpforms id="901"]'); ?>
        </div>



    </div>
</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();