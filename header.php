<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Water_Solution_Lenawee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/fonts/RobotoCondensed-Regular.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/fonts/RobotoCondensed-Bold.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/fonts/Roboto-Italic.woff2" as="font" type="font/woff2" crossorigin="">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header id="masthead" class="site-header">
            <div class="container">
                <div class="stretch-wp">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="site-branding">
                                <?php
                                the_custom_logo();
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="header-menu">
                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="header-mobile-menu">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'menu-1',
                                                'menu_id'        => 'primary-menu',
                                            )
                                        );
                                        ?>
                                        <div class="site-contact">
                                            <?php
                                            $val = array("(", ")", " ", "-", ".");
                                            $replace = array("", "", "", "", "");
                                            $primary_phone_number = get_field('primary_phone_number', 'option');
                                            $primary_phone_link = str_replace($val, $replace, $primary_phone_number);
                                            $secondary_phone_number = get_field('secondary_phone_number', 'option');
                                            $secondary_phone_link = str_replace($val, $replace, $secondary_phone_number);
                                            ?>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo 'tel:' . $primary_phone_link; ?>" title="<?php echo 'Call to ' . $primary_phone_number; ?>">
                                                        <span class="contact-icon">
                                                            <img src="<?php echo home_url() ?>/wp-content/uploads/2022/06/call.svg" width="21" height="21" alt="Call Icon">
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
                                        </div>
                                    </div>

                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>