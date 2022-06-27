<?php $page_id = get_option( 'page_on_front' ); ?>
<section class="review-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $review_title = get_field('review_title',$page_id);
                if(!empty($review_title)){
                    ?>
                    <div class="sec-title text-center">
                        <h2 class="h2-title"><?php echo $review_title; ?></h2>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto review-slider">
                <?php
                $args = array( 'orderby' => 'title', 'post_type' => 'testimonials', 'post_status'=> 'publish', 'order' => 'ASC' );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();?>
                    <div class="review-wp">
                        <div class="review-content text-center">
                            <div class="review-text oveflow-text">
                            <?php the_content(); ?>
                            </div>
                            <div class="review-author">
                                <h4 class="h4-title"><?php the_title();?></h4>
                            </div>
                        </div>
                    </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>