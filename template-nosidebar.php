<?php
/*
  Template Name: Without Sidebar
 */
  get_header();
?>
<section class="main-banner inner-banner banner-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-text white-text">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF BANNER -->

<div class="inner-page-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php
                        while (have_posts()) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                
                                <?php water_solution_lenawee_post_thumbnail(); ?>
                                <div class="entry-content">
                                    <?php
                                    the_content(sprintf(
                                        wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'water-solution-lenawee'), array(
                                                'span' => array(
                                                    'class' => array(),
                                                ),
                                            )
                                        ), get_the_title()
                                    ));
                           
                                    ?>
                                </div><!-- .entry-content -->
                            </article><!-- #post-the_ID(); -->
                            <?php
                           
                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>  
<?php
get_footer();

