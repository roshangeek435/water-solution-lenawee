<?php $page_id = get_option('page_on_front'); ?>
<section class="main-banner inner-banner">
    <div class="inner-banner-img">
        <div class="back-img" style="background-image: url(<?php the_field('main_banner_image'); ?>);"></div>
    </div>
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="offset-lg-5 col-lg-7">
                    <div class="inner-banner-content sec-points points-two white-text">
                        <h5 class="h5-title sub-title">services</h5>
                        <h1 class="h2-title"><?php the_field('main_banner_title'); ?></h1>
                        <div class="inner-banner-text">
                            <?php the_field('main_banner_content'); ?>
                        </div>
                        <h5 class="h5-title"><?php the_field('main_banner_sub_title'); ?></h5>
                        <?php the_field('main_banner_sub_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->

<section class="inner-about-us">
                    <?php
                    if(have_rows('add_content_repeater')){
                        ?>
                        
    <div class="container">
        <div class="stretch-wp">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-5">
                        <?php
                        while(have_rows('add_content_repeater')){
                            the_row();
                            ?>
                            <div class="inner-about-content sec-points">
                                <h5 class="h5-title"><?php the_sub_field('page_content_title'); ?></h5>
                                <div class="inner-about-text">
                                    <?php the_sub_field('page_content_content') ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                <div class="col-lg-7">
                    <div class="inner-about-img">
                        <div class="back-img" style="background-image: url(<?php the_field('page_content_image'); ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                        <?php
                    }
                    ?>
    </section>            
<!-- END OF INNER ABOUT US -->

<div class="well-rehabilitation-sec gallery-sec">
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well-rehabilitation-sldier gallery-slider">
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
<!-- END OF VISITING -->

<?php get_template_part('template-parts/content', 'review'); ?>
<!-- END OF REVIEWS -->