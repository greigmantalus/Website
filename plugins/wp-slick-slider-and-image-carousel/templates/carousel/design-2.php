<?php
/**
 * Template for Carousel - Design 6
 *
 * @package WP Slick Slider and Image Carousel
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wpsisac-image-slide">
	<?php if( $sliderurl != '' ) { ?>
		<a href="<?php echo esc_url( $sliderurl ); ?>">
			<div class="wpsisac-image-slide-wrap" style="<?php echo esc_attr( $slider_height_css ); ?>">
				<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>"<?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title_attribute(); ?>" />
				<div class="wpsisac-slider-overlay" style="background: rgba(0, 0, 0, 0.4);position: absolute;left: 0;right: 0;bottom: 0;top: 0;">
					<div class="wpsisac-slider-content" style="z-index: 1000;color: #fff;position: absolute;left: 0;text-align: center;width: 80%;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);right: 0;margin: 0 auto;float: left;">
						<p class="wpsisac-slide-title" style="margin: 5px 0 !important;font-size: 25px;"><?php the_title(); ?></p>
					</div>
				</div>
			</div>
		</a>
	<?php } else { ?>
		<div class="wpsisac-image-slide-wrap" style="<?php echo esc_attr( $slider_height_css ); ?>">
			<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>"<?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title_attribute(); ?>" />
		</div>
	<?php } ?>
</div>