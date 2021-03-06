<?php
/**
 * Template Name: Cash Control
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header(); ?>

    <style>
        body.tax-product_cat .red-section-header {
            margin: 0;
        }
    </style>

<section class="cover bg-img cash-control">
    <img src="<?php echo get_template_directory_uri();?>/img/cashcontrol_banner_1080-1.jpg" alt="">
    <div class="container" style="position: relative;">
        <div class="cash-control-content">
            <img class="cc-title" src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_title.png" alt="">
            <div class="cc-item cc-info" data-x="620" data-y="272">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_info_icon.png" alt="">
                <span><strong>Centraliza y maneja</strong> la información de la red de locales</span>
            </div>
            <div class="cc-item cc-online" data-x="552" data-y="384">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_online_icon.png" alt="">
                <span>Información <strong>en linea</strong> de cada caja</span>
            </div>
            <div class="cc-item cc-reports" data-x="475" data-y="465">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_reports_icon.png" alt="">
                <span>Reportes de acuerdo al <strong>perfil del usuario</strong></span>
            </div>
            <div class="cc-item cc-decision" data-x="665" data-y="654">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_decision_icon.png" alt="">
                <span>Ayuda a <strong>tomar decisiones</strong> del proceso de efectivo</span>
            </div>
            <div class="cc-item cc-interaction" data-x="864" data-y="417">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_interaction_icon.png" alt="">
                <span><strong>Interacción</strong> entre los interesados del efectivo</span>
            </div>
            <div class="cc-item cc-web" data-x="969" data-y="582">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_web_icon.png" alt="">
                <span><strong>Web de consulta</strong> no permite cambios a la información</span>
            </div>
            <div class="cc-item cc-access" data-x="1111" data-y="431">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_access_icon.png" alt="">
                <span><strong>Acceso seguro</strong> a la web</span>
            </div>
            <div class="cc-item cc-history" data-x="1374" data-y="500">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_history_icon.png" alt="">
                <span>Historial de transacciones por <strong>3 años</strong></span>
            </div>
        </div>
    </div>
</section>
<section class="bg-img cc-info-banner parallax">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_banner2_bg.png" alt="">
    <div class="container">
        <div class="banner-info clearfix">
            <div class="col-xs-3 col-sm-4 col-md-6 cc-guy-banner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cashcontrol_banner2_dude.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bg-img bg-fixed black-banner-cc">
    <img src="<?php echo get_template_directory_uri(); ?>/img/seccion_negra_CC.jpg" alt="">
    <div class="container">
        <div class="row black-banner-row">
            <div class="col-md-offset-1 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/black_banner_title.png" alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/black_banner_desc.png" alt="">
            </div>
        </div>
        <div class="row black-banner-row">
            <div class="col-md-offset-1 col-md-10 no-pad">
                <div class="col-md-4" style="text-align: center;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black_banner_seg.png" alt="">
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black_banner_control.png" alt="">
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black_banner_seguimiento.png" alt="">
                </div>
            </div>
        </div>
        <div class="row black-banner-row">
            <div class="col-xs-12">
                <div class="go-to-videos" style="text-align: center; text-transform: uppercase;">
                    <a href="<?php echo home_url('/video-tutoriales-cash-control'); ?>" class="ancla-btn" style="padding: 10px 25px;">Ver tutoriales</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-products">
    <div class="red-section-header">
        <div class="container">
            <h3>Beneficios</h3>
        </div>
    </div>
    <div class="cash-control-features">
        <div class="container">
            <div class="row">

                <?php

                $loop = new WP_Query( array(
                    'post_type' => 'cash_control_feat',
                    'posts_per_page' => 50
                ) );
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-xs-6 col-md-4 cc-feature">
                            <div class="col-xs-4">
                                <div class="cc-icon">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <div class="col-xs-8 cc-desc">
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>

                    <?php endwhile;
                endif;
                wp_reset_postdata();

                ?>
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_internet.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p>Control de todo el dinero vía <strong>internet</strong></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_efectivo.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p>Sistema de manejo de <strong>efectivo</strong> que simplifica, contabiliza y asegura el dinero en la caja</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_reportes.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p>Genera <strong>reportes detallados</strong> de conciliación vía internet y en la caja</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_info.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p><strong>Información en tiempo real</strong> de cualquier transacción</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_cash.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p>El efectivo ya no está expuesto ya que <strong>su depósito es más seguido</strong></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_avoid.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p><strong>Evita</strong> la complejidad del manejo y preparación de dispositivos</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_envelope.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p><strong>Diferentes sobres</strong> por turno (Colores y números)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_diff.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p><strong>Diferencias constantes</strong> en depósitos</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 cc-feature">-->
<!--                    <div class="col-xs-4">-->
<!--                        <div class="cc-icon">-->
<!--                            <img src="--><?php //echo get_template_directory_uri();?><!--/img/cc_feat_avoid_clock.png" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xs-8 cc-desc">-->
<!--                        <p><strong>Evita</strong> excesos de tiempo en cuadres de caja</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); ?>