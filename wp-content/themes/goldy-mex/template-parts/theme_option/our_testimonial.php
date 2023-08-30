<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
$our_testimonial  = get_theme_mod( 'our_testimonial_content',$goldy_mex_default['options']['our_testimonial_content']);

if(empty($our_testimonial)){
	$our_testimonial  = $goldy_mex_default['options']['goldy_mex_our_testimonial_section_content'];
}

	?>
		<div class="our_testimonial_section">
			<div class="our_testimonial_info scroll-element js-scroll fade-in-bottom">
				<div class="our_testimonial_main_title wow fadeInUp">
					<div class="testimonial_title heading_main_title">
						<h2><?php echo esc_html(get_theme_mod( 'our_testimonial_main_title',$goldy_mex_default['options']['our_testimonial_main_title'])); ?></h2>
						<span class="separator"></span>
					</div>
					<div class="our_testimonial_main_disc">
						<p><?php echo wp_kses_post(get_theme_mod( 'our_testimonial_desc',$goldy_mex_default['options']['our_testimonial_desc']));?></p>
					</div>
				</div>
				<div class="owl-carousel owl-theme testinomial_owl_slider wow fadeInUp" id="testinomial_owl_slider" data-wow-duration="1s">
					<?php
					foreach ( $our_testimonial as $info_item ) { 
							?>
							<div class="our_testimonial_data">
								<?php 
									do_action('goldy_our_testimonial_loop',$info_item);
								?>						
							</div>
							<?php
					    }
					?>
				</div>
			</div>
		</div>