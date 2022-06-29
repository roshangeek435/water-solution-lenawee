<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Water_Solution_Lenawee
 */

?>

<footer id="colophon" class="site-footer back-img" style="background-image: url(<?php the_field('footer_background_image', 'option'); ?>);">
    <div class="sec-wp">
        <div class="footer-img">
            <div class="back-img" style="background-image: url(<?php the_field('footer_front_image', 'option'); ?>);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content white-text">
                        <h2 class="h2-title"><?php the_field('footer_title', 'option'); ?></h2>
                        <div class="footer-text">
                            <?php the_field('footer_content', 'option'); ?>
                        </div>
                    </div>
                    <div class="footer-contact site-contact">
                        <?php
                        $val = array("(", ")", " ", "-", ".");
                        $replace = array("", "", "", "", "");
                        $primary_phone_number = get_field('primary_phone_number', 'option');
                        $primary_phone_link = str_replace($val, $replace, $primary_phone_number);
                        $secondary_phone_number = get_field('secondary_phone_number', 'option');
                        $secondary_phone_link = str_replace($val, $replace, $secondary_phone_number);
                        ?>
                        <ul>
                            <li class="site-call">
                                <ul>
                                    <li>
                                        <a href="<?php echo 'tel:' . $primary_phone_link; ?>" title="<?php echo 'Call to ' . $primary_phone_number; ?>">
                                            <span class="contact-icon">
                                                <img src="http://192.168.29.224/water-solution-lenawee/wp-content/uploads/2022/06/call.svg" width="21" height="21" alt="<?php echo $primary_phone_number; ?>">
                                            </span>
                                            <span class="contact-info"><?php echo $primary_phone_number; ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo 'tel:' . $secondary_phone_link; ?>" title="<?php echo 'Call to ' . $secondary_phone_number; ?>">
                                            <span class="contact-info"><?php echo $secondary_phone_number; ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-mail">
                                <a href="<?php echo 'mailto:' . get_field('footer_email', 'option'); ?>" title="<?php echo get_field('footer_email', 'option'); ?>">
                                    <span class="contact-icon"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/mail.svg" width="22" height="18" alt="<?php echo get_field('footer_email', 'option'); ?>"></span>
                                    <span class="contact-info"><?php the_field('footer_email', 'option'); ?></span>
                                </a>
                            </li>
                            <li class="site-location">
                                <a href="https://maps.google.it/maps?q=<?php echo urlencode(get_field('footer_address', 'option')); ?>" target="_blank" title="<?php the_field('footer_address', 'option'); ?>">
                                    <span class="contact-icon"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/map.svg" width="20" height="24" alt="<?php the_field('footer_address', 'option'); ?>"></span>
                                    <span class="contact-info"><?php echo get_field('footer_address', 'option'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-bottom-text">
                        <div class="footer-bottom-link">
                            <ul>
                                <li>© 2022 Water Solutions Of Lenawee</li>
                                <li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                                <li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
                                <li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="footer-other-link">
                            <p>Web Design, SEO, & Online Marketing by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="modal fade" id="hiring_Modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body overflow-text" data-simplebar="">
                <h5 class="modal-title h3-title">Water Solutions of Lenawee is hiring!</h5>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="131" title="Hiring Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>