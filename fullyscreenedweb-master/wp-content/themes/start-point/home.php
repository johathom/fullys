<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
<!-- *** Slider Starts *** -->
<div id="page">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <?php if (startpoint_get_option('startpoint_slidevideo1') != '') { ?>
                    <div class="videoWrapper">
                        <?php echo startpoint_get_option('startpoint_slidevideo1'); ?>
                    </div>
                <?php } else { ?>
                    <?php if (startpoint_get_option('startpoint_slideimage1') != '') { ?>
                        <img src="<?php echo startpoint_get_option('startpoint_slideimage1'); ?>" alt="" title="" />
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" alt="" title="" />
                        <?php
                    }
                }
                ?>

                <div class="flex-caption"><!-- Slide 1 Text Start -->
                    <div class="container">
                        <div class="text-container">
                            <h3>Protect yourself and your information.</h3>
                            <div class="clearfix"></div>
                            <h1>Sign-up as a renter today
                                <form action="orig_submit" method="POST">
                                    <input type="text" class="form-control" name="original_email" placeholder="Email" required>
                                </form>
                            </h1>
                            <?php if (startpoint_get_option('startpoint_Slider_butotntext1') != '') { ?>
                                <p><a href="<?php echo startpoint_get_option('startpoint_Slider_buttonlink1'); ?>"><?php echo startpoint_get_option('startpoint_Slider_butotntext1'); ?></a></p>
                            <?php } else { ?>
                                <p><a href="<?php echo esc_url('http://www.inkthemes.com'); ?>"><?php _e('Watch Demo', 'start-point'); ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- ***Slide 1 Text end *** --></div>
            </li>
        </ul>
    </div>
    <!--*** Slider Ends ***-->
    <div class="clearfix"></div>

    <!--*** Three Column Feature Starts ***-->
    <div class="three-column-wrapper" id="section2">
        <div class="container">
            <div class="row">
                <div class="three-column-container">
                    <div class="col-md-4 box1">
                        <!-- *** Three column Box 1 *** -->
                        <div class="three-column-box">

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font1') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font1'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-thumbs-up fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title1') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link1') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link1'); ?>">
                                            <?php
                                        } else {
                                            
                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title1'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link1') != '') { ?>
                                        </a>
                                        <?php
                                    } else {
                                        
                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Showcase Your Business ', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc1') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc1'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('You can showcase your business services to users form 3 Column Feature Area. Go to Theme Option Panel for making the changes.', 'start-point'); ?></p>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-md-4 box2">
                        <!-- *** Three column Box 2 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font2') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font2'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-smile-o fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title2') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link2') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link2'); ?>">
                                            <?php
                                        } else {
                                            
                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title2'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link2') != '') { ?>
                                        </a>
                                        <?php
                                    } else {
                                        
                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Use Font Awesome Icons', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc2') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc2'); ?></p>
                            <?php } else { ?>
                                <p><a href="<?php echo esc_url('http://fortawesome.github.io/Font-Awesome/icons/'); ?>" target="_blank"><?php _e('Go to Font Awesome', 'start-point'); ?></a><?php _e(' and pick the icon of your choice. Copy the class of icon and paste it in Theme Option Panel.', 'start-point'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 box3">
                        <!-- *** Three column Box 3 *** -->
                        <div class="three-column-box">
                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_font3') != '') { ?>
                                <p><i class="<?php echo startpoint_get_option('startpoint_threecolumn_fet_font3'); ?>"></i></p>
                            <?php } else { ?>
                                <p><i class="fa fa-eye fa-5x"></i></p>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_title3') != '') { ?>
                                <h1>
                                    <?php if (startpoint_get_option('startpoint_services_title_link3') != '') { ?>
                                        <a href="<?php echo startpoint_get_option('startpoint_services_title_link3'); ?>">
                                            <?php
                                        } else {
                                            
                                        }
                                        ?>
                                        <?php echo startpoint_get_option('startpoint_threecolumn_fet_title3'); ?>
                                        <?php if (startpoint_get_option('startpoint_services_title_link3') != '') { ?>
                                        </a>
                                        <?php
                                    } else {
                                        
                                    }
                                    ?>

                                </h1>
                            <?php } else { ?>
                                <h1><?php _e('Elegant One Page Theme', 'start-point'); ?></h1>
                            <?php } ?>

                            <?php if (startpoint_get_option('startpoint_threecolumn_fet_desc3') != '') { ?>
                                <p><?php echo startpoint_get_option('startpoint_threecolumn_fet_desc3'); ?></p>
                            <?php } else { ?>
                                <p><?php _e('A perfect theme for your business. Aesthetic layout, easy to create website, handy to customize style. Reinvent your website.', 'start-point'); ?> </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Three Column Feature Ends *** -->
    <div class="clearfix"></div>

   
    <!-- *** Recent Blogs Ends *** -->
    <div class="clearfix"></div>

    <!-- *** Gallery starts *** -->
    <!-- *** Gallery Available in Pro Version. Download at inkthemes.com -->
    <!-- *** Gallery Ends *** -->

    <!-- *** Testimonial Slider Starts *** -->
    <div class="testimonial-wrapper" id="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-inner">
                        <?php if (startpoint_get_option('startpoint_home_testimonial_heading') != '') { ?>
                            <h1 class="testimonial-header"><?php echo startpoint_get_option('startpoint_home_testimonial_heading'); ?></h1>
                        <?php } else { ?>
                            <h1 class="testimonial-header"><?php _e('Show Multiple Testimonials.', 'start-point'); ?></h1>
                        <?php } ?>
                        <ul class="testmnl">
                            <!-- *Testimonial Starts* -->
                            <?php if (startpoint_get_option('startpoint_testimonial_text1') != '') { ?>
                                <li>
                                    <div class="tst-caption">
                                        <span>
                                            <a class="arrow"></a>
                                            <?php echo startpoint_get_option('startpoint_testimonial_text1'); ?>
                                            <p>
                                                <?php if (startpoint_get_option('startpoint_testimonial_name1') != '') { ?>
                                                    <a class="testimonial"><?php echo startpoint_get_option('startpoint_testimonial_name1'); ?></a>
                                                <?php } else { ?>
                                                    <a class="testimonial"><?php _e('Inkthemes', 'start-point'); ?></a>
                                                <?php } ?>
                                            </p>
                                        </span>
                                    </div>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <div class="tstmnl-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-image.png">
                                    </div>
                                    <div class="tst-caption"><span><a class="arrow"></a><?php _e('StartPoint comes with amazing business features. It is perfect for a business website with required features.', 'start-point'); ?><p><a class="testimonial"><?php _e('Inkthemes', 'start-point'); ?></a></p></span></div></li>
                            <?php } ?>
                            <!-- *Testimonial Ends* -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Testimonial Slider Ends *** -->

<?php get_footer(); ?>