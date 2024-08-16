<?php
/**
 * Template for Slider - Design 5
 *
 * @package WP Slick Slider and Image Carousel
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wpsisac-image-slide">
	<div class="wpsisac-slide-wrap">
		<div class="wpsisac-slider-content">
			<?php if( $show_content ) { ?>
				<div class="wpsisac-slider-short-content testimonials"><?php the_content(); ?></div>
				<h2 class="wpsisac-slide-title" style="color:#174eaa"><?php the_title(); ?></h2>
			<?php }

			if( $sliderurl != '' ) { ?>
				<div class="wpsisac-readmore"><a href="<?php echo esc_url( $sliderurl ); ?>" class="wpsisac-slider-readmore"><?php esc_html_e( 'Read More', 'wp-slick-slider-and-image-carousel' ); ?></a></div>
			<?php } ?>
		</div>
	</div>
</div>