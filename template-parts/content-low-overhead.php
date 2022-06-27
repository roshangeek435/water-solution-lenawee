<?php $page_id = get_option( 'page_on_front' ); ?>
<section class="saving primary-bg">
    <div class="saving-bg back-img">
        <div class="back-img" style="background-image: url(<?php the_field('saving_for_you_image',$page_id); ?>);"></div>
    </div>
    <div class="container">
        <div class="stretch-wp">
            <div class="row">
                <div class="offset-lg-7 col-lg-5">
                    <div class="saving-content white-text">
                    <?php
                    $saving_for_you_title = get_field('saving_for_you_title',$page_id);
                    if(!empty($saving_for_you_title)){
                        ?>
                        <h3 class="h3-title"><?php echo $saving_for_you_title; ?></h3>
                        <?php
                    }
                    ?>
                        <div class="saving-text">
                            <?php the_field('saving_for_you_content',$page_id); ?>
                        </div>
                        <a href="<?php echo 'tel:'.$primary_phone_link; ?>" class="sec-btn white-btn" title="<?php echo 'Call on'.$primary_phone_link; ?>">call now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>