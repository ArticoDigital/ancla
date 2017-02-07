<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/02/2017
 * Time: 11:14
 */

function ancla_product_cat_customizer( $wp_customize ){

    $wp_customize->add_panel( 'product_cat_panel', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Categorías de productos', 'ancla'),
    ) );

    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    $all_categories = get_categories( $args );
    foreach ($all_categories as $cat) {

            $wp_customize->add_section( 'category_' . $cat->term_id . '_section' , array(
                'title'    => __( $cat->name, 'ancla' ),
                'priority' => 30,
                'panel'    => 'product_cat_panel'
            ) );

            $wp_customize->add_setting( 'category_' . $cat->term_id .'_banner' , array(
                'transport' => 'postMessage',
            ) );

            $wp_customize->add_control(
                new WP_Customize_Image_Control(
                    $wp_customize,
                    'category_' . $cat->term_id . '_banner',
                    array(
                        'label'      => __( 'Imagen Banner', 'ancla' ),
                        'section'    => 'category_' . $cat->term_id . '_section',
                        'settings'   => 'category_' . $cat->term_id . '_banner'
                    )
                )
            );

            $wp_customize->add_setting( 'category' . $cat->term_id . '_title' , array(
                'transport' => 'postMessage',
            ) );

            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'category' . $cat->term_id . '_title', array(
                'label'    => __( 'Título', 'ancla' ),
                'section'  => 'category_' . $cat->term_id . '_section',
                'settings' => 'category' . $cat->term_id . '_title',
                'description' => 'Por defecto se usará el nombre de la categoría si este campo está vacío'
            ) ) );

            $wp_customize->add_setting( 'category' . $cat->term_id . '_subtitle' , array(
                'transport' => 'postMessage',
            ) );

            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'category' . $cat->term_id . '_subtitle', array(
                'label'    => __( 'Subtítulo', 'ancla' ),
                'section'  => 'category_' . $cat->term_id . '_section',
                'settings' => 'category' . $cat->term_id . '_subtitle',
                'description' => 'Solo aplica en banner pequeño'
            ) ) );

//            $category_id = $cat->term_id;
//            echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
//
//            $args2 = array(
//                'taxonomy'     => $taxonomy,
//                'child_of'     => 0,
//                'parent'       => $category_id,
//                'orderby'      => $orderby,
//                'show_count'   => $show_count,
//                'pad_counts'   => $pad_counts,
//                'hierarchical' => $hierarchical,
//                'title_li'     => $title,
//                'hide_empty'   => $empty
//            );
//            $sub_cats = get_categories( $args2 );
//            if($sub_cats) {
//                foreach($sub_cats as $sub_category) {
//                    echo  $sub_category->name ;
//                }
//            }
    }

//    $wp_customize->add_section( 'test_category' , array(
//        'title'    => __( 'Test category', 'ancla' ),
//        'priority' => 30,
//        'panel'    => 'product_cat_panel'
//    ) );
//
//    $wp_customize->add_setting( 'category_banner_settings' , array(
//        'transport' => 'postMessage',
//    ) );
//
//    $wp_customize->add_control(
//        new WP_Customize_Image_Control(
//            $wp_customize,
//            'category_banner',
//            array(
//                'label'      => __( 'Seleccionar imagen', 'theme_name' ),
//                'section'    => 'test_category',
//                'settings'   => 'category_banner_settings'
//            )
//        )
//    );


}

add_action( 'customize_register', 'ancla_product_cat_customizer' );