<?php $page_id = get_option( 'page_on_front' ); ?>
<section class="hiring-sec back-img">
    <div class="hiring-bg back-img" style="background-image: url(<?php the_field('hiring_image',$page_id); ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hiring-content white-text text-center">
                    <?php
                    $hiring_title = get_field('hiring_title',$page_id);
                    if(!empty($hiring_title)){
                        ?>
                            <h2 class="h2-title"><?php echo $hiring_title; ?></h2>   
                        <?php
                    }
                    ?>
                    <div class="hiring-text">
                        <?php the_field('hiring_content',$page_id); ?>
                    </div>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#hiring_Modal" class="sec-btn" title="Apply Now">apply now</a>
                </div>
            </div>
        </div>
    </div>
</section>