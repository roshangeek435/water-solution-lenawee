<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Water_Solution_Lenawee
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="main-banner inner-banner banner-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-text white-text">
						<h1 class="h1-title">Oops! That page can’t be found.</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END OF BANNER -->

	<!-- 404 Page Section Start -->
	<div class="inner-page-text error-404 not-found text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<img width="960" height="460" src="<?php echo home_url(); ?>/wp-content/themes/water-solution-lenawee/assets/images/404.svg" alt="404 Not Found!">
				</div>
			</div>
		</div>
	</div>
	<!-- 404 Page Section End -->

</main><!-- #main -->

<?php
get_footer();
