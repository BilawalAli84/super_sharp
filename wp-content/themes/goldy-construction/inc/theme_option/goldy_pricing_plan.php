<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy
 */

// $goldy_fintess_plan = Kirki::get_option( 'goldy_construction_pricing_plan_content' );

// echo "<pre>";
// print_r($goldy_fintess_plan);
// echo "</pre>";

if(empty(get_theme_mod( 'goldy_construction_pricing_plan_content')) && !is_plugin_active('slivery-extender/slivery-extender.php')){ ?>
<?php
}else{
$goldy_fintess_plan = Kirki::get_option( 'goldy_construction_pricing_plan_content' );
if(empty($goldy_fintess_plan)){
    $goldy_fintess_plan  = Kirki::get_option( 'goldy_construction_pricing_plan_content' );
}
?>
<div class="construction_pricing_plan_section">
    <div class="pricing_plan_section_info">
        <div class="pricing_plan_data wow fadeInUp">
            <div class="pricing_plan_title heading_main_title">
                <h2><?php echo esc_html(get_theme_mod('goldy_construction_pricing_plan_main_title', 'Pricing Plan'));?></h2>
                <span class="separator"></span>
            </div>
        </div>
        <div class="pricing_plan_main_content wow animate__zoomIn">
            <div class="pricing_plan_inner_data">
                <?php 
                $x = 1;
                foreach ( $goldy_fintess_plan as $info_item ) {
                    ?>

                    <style>
                        #pricing_back_id_<?php echo $x; ?>:before {
                            content: '';
                            position: absolute;
                            background: url('<?php echo esc_url($info_item['image']); ?>') rgb(0 0 0 / 0.5);
                            background-blend-mode: multiply;
                            background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            left: 0;
                            opacity: 0;
                            z-index: 0;
                            transition: all 1s ease;
                            border-radius: 20px;
                        }
                        #pricing_back_id_<?php echo $x; ?>:hover:before {
                            opacity: 1;
                        }
                    </style>
                    <div class="pricing-plan-inner-wrapper" id="pricing_back_id_<?php echo $x; ?>">
                        <div class="pp_inner">
                            <div class="pp_first_content">
                                <h2><?php echo esc_html($info_item['price_value']); ?></h2>
                                <p><?php echo esc_html($info_item['plan_time']); ?></p>
                            </div>
                            <div class="pp_second_content">
                                <h2><?php echo esc_html($info_item['plan_type']); ?></h2>
                                <div class="pp_description">
                                    <p><?php echo wp_kses_post($info_item['plan_description']); ?></p>
                                </div>
                                <?php 
                                    if(!empty($info_item['link_url'])) {
                                        if(!empty($info_item['link_text'])) {?>
                                    <div class="pp_btn button">
                                        <a href="<?php echo $info_item['link_url']; ?>" class="buttons"><?php echo $info_item['link_text']; ?></a>
                                    </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                <?php 
                    $x++; 
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
}