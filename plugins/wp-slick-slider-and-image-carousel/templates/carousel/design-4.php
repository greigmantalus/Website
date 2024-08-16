<?php
/**
 * Template for Carousel - Design 4
 *
 * @package WP Slick Slider and Image Carousel
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wpsisac-image-slide" style="display:grid">
	<?php if( $sliderurl != '' ) { ?>
		<div class="icons-layout" href="<?php echo esc_url( $sliderurl ); ?>">
			<div class="wpsisac-image-slide-wrap icons-responsive" <?php echo esc_attr( $slider_height_css ); ?>">
				<img <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>"<?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title_attribute(); ?>" />
			</div>
	</div>
	<?php } else { ?>
		<div class="icons-layout" href="<?php echo esc_url( $sliderurl ); ?>">
		<div class="wpsisac-image-slide-wrap" style="<?php echo esc_attr( $slider_height_css ); ?>">
			<img  <?php if( $lazyload ) { ?>data-lazy="<?php echo esc_url( $slider_orig_img ); ?>"<?php } ?> src="<?php echo esc_url( $slider_img ); ?>" alt="<?php the_title_attribute(); ?>" />
			<!-- <p class="business-card-1" style="margin: 0 0 !important;"></p> -->
		</div>
	</div>
	<?php } ?>
	<div class="wpsisac-slider-overlay cloud" style="background: rgba(0, 0, 0, 0.4);position: inherit;left: 0;right: 0;bottom: 0;top: 0;">
			<div class="wpsisac-slider-content cloud" style="z-index: 1000;color: #fff;position: inherit;left: 0;text-align: center;width: 80%;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);right: 0;margin: 0 auto;float: center;">
			<!-- <p class="business-card-* cloud" style="margin: 0 0 !important;"></p> -->
				<p class="wpsisac-slide-title cloud" style="margin: 0 0 !important;font-size: 25px;"><?php the_title(); ?></p>
				<div class="wpsisac-slider-short-content cloud" style="color: #fff; margin: 0 0; font-size:16px"><?php the_content(); ?></div>
			</div>
		</div>
</div>
