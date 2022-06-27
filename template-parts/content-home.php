<section class="main-banner back-img" style="background-image: url(<?php the_field('main_banner_image'); ?>);">
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content white-text text-center">
                        <h1 class="h1-title"><?php the_field('main_banner_title'); ?></h1>
                        <div class="banner-btn">
                            <?php
                            $val = array("(", ")", " ", "-", ".");
                            $replace = array("", "", "", "", "");
                            $primary_phone_number = get_field('primary_phone_number','option');
                            $primary_phone_link = str_replace($val, $replace, $primary_phone_number);
                            ?>
                            <a href="<?php echo 'tel:'.$primary_phone_link; ?>" class="sec-btn" title="Call Now">call now</a>
                            <a href="<?php echo get_the_permalink(41); ?>" class="sec-btn btn-transparent" title="Contact Us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->

<section class="about-us-sec">
    <div class="container">
        <div class="stretch-wp">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about-us-content">
                        <?php
                        $about_title = get_field('about_us_title');
                        if(!empty($about_title)){
                            ?>
                            <h2 class="h2-title"><?php echo $about_title; ?></h2>
                            <?php
                        }
                        ?>
                        <div class="about-us-text overflow-text">
                            <?php the_field('about_us_content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-us-img">
                        <div class="back-img" style="background-image: url(<?php the_field('about_us_image'); ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF ABOUT US -->

<section class="main-service">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php
                $our_services_title = get_field('our_services_main_title');
                if(!empty($our_services_title)){
                    ?>
                    <div class="sec-title text-center white-text">
                        <h2 class="h2-title unique-title"><?php echo get_field('our_services_main_title'); ?></h2>
                    </div>
                    <?php
                }
                ?>
                <div class="serviec-tabs custom-dot-slider">
                </div>
            </div>
        </div>
        <div class="service-slider">
            <?php
            if (have_rows('add_services_repeater')) {
                while (have_rows('add_services_repeater')) {
                    the_row();
            ?>
                    <div class="row d-flex align-items-center no-gutters">
                        <div class="col-lg-6">
                            <div class="service-img">
                                <div class="back-img" style="background-image: url(<?php the_sub_field('our_services_image'); ?>);"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-content">
                                <?php
                                $our_services_title = get_sub_field('our_services_title');
                                if(!empty($our_services_title)){
                                    ?>
                                    <h3 class="h3-title dot-title"><?php echo $our_services_title ?></h3>
                                    <?php
                                }
                                ?>
                                <div class="service-content-text overflow-text">
                                    <?php the_sub_field('our_services_content'); ?>
                                </div>
                                <?php
                                $our_services_learn_more_link = get_sub_field('our_services_learn_more_link');
                                if (!empty($our_services_learn_more_link)) {
                                ?>
                                    <a href="<?php echo $our_services_learn_more_link; ?>" class="sec-btn white-btn" title="<?php echo get_sub_field('our_services_title') . ', Learn More' ?>">Learn More</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- END OF SERVICE SLIDER -->

<div class="gallery-sec" id="careers">
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-slider">
                        <?php
                        $images = get_field('add_gallery_image');
                        if ($images) {
                            foreach ($images as $image) {
                        ?>
                                <div class="gallery-img">
                                    <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>" title="<?php echo $image['name']; ?>">
                                        <div class="back-img" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF GALLERY -->

<?php get_template_part('template-parts/content', 'hiring'); ?>
<!-- END OF HIRING -->

<?php get_template_part('template-parts/content', 'low-overhead'); ?>
<!-- END OF HIRING -->

<?php get_template_part('template-parts/content', 'review'); ?>
<!-- END OF REVIEW -->