<?php $page_id = get_option( 'page_on_front' ); ?>
<section class="main-banner inner-banner">
    <div class="inner-banner-img">
        <div class="back-img" style="background-image: url('<?php echo home_url() ?>/wp-content/uploads/2022/06/rehabilitation-epair-1.jpg');"></div>
    </div>
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="offset-lg-5 col-lg-7">
                    <div class="inner-banner-content sec-points points-two white-text">
                        <h5 class="h5-title sub-title">services</h5>
                        <h1 class="h2-title">Well Rehabilitation and Repair</h1>
                        <div class="inner-banner-text">
                            <p>Many well owners are unaware that it’s best to have the well rehabilitated than re-drilled. When your well’s performance changes, it could be an organic or biological issue that causes clogging and prohibits clean water from entering your well. Water Solutions of Lenawee have various methods to detect the problem and break up the clogging inside and outside well opening and bring back your well to its flow.</p>
                        </div>
                        <h5 class="h5-title">Our water well services include:</h5>
                        <ul>
                            <li>Driven well rehabilitation</li>
                            <li>Well cleaning</li>
                            <li>Stuck pump removal</li>
                            <li>Pump replacement</li>
                            <li>Installing pitless adaptors</li>
                            <li>General well repair</li>
                            <li>Waterline repair</li>
                            <li>Thawing frozen water lines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->

<section class="inner-about-us">
    <div class="container">
        <div class="stretch-wp">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-5">
                    <div class="inner-about-content sec-points">
                        <div class="inner-about-text">
                            <p>Get help from your local water system pros! Let Water Solutions of Lenawee inspect your well and bring it up to code with our professional well rehabilitation and repair services. If you notice any problems with your well, you can call us today for a FREE on-site inspection.</p>
                        </div>
                        <span><b>If you notice the following signs of water-well deterioration such as:</b></span>
                        <ul>
                            <li>Slow or not working pumping motor</li>
                            <li>Below average water level</li>
                            <li>Decreased specific capacity</li>
                            <li>Well has high sand or silt content (cloudiness)</li>
                            <li>Or its total well depth has decreased</li>
                        </ul>
                        <h4 class="h4-title">Call our professionals to have it inspected right away. Every situation can be unique, but we will always aim to find the best solution to get your well back to its optimum.</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="inner-about-img">
                        <div class="back-img" style="background-image: url('<?php echo home_url() ?>/wp-content/uploads/2022/06/well-rehabilitation-about.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF INNER ABOUT US -->

<div class="well-rehabilitation-sec gallery-sec">
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well-rehabilitation-sldier gallery-slider">
                        <?php
                        $images = get_field('add_gallery_image', $page_id);
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