<?php
/**
 * LADATAM Dark Tech - Integración con Elementor
 * 
 * Funciones adicionales para personalizar Elementor
 * 
 * @package LADATAM
 * @version 1.0.0
 */

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Encolar estilos adicionales para Elementor
 */
function ladatam_elementor_styles() {
    wp_enqueue_style(
        'ladatam-elementor-classes',
        get_stylesheet_directory_uri() . '/assets/css/elementor-classes.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('elementor/frontend/after_enqueue_styles', 'ladatam_elementor_styles');

/**
 * Registrar colores personalizados en Elementor
 */
function ladatam_elementor_colors($config) {
    $config['default_schemes']['color']['items'] = [
        '1' => [
            'title' => __('Lima', 'ladatam-theme'),
            'value' => '#d9ff18',
        ],
        '2' => [
            'title' => __('Ámbar', 'ladatam-theme'),
            'value' => '#f8bb03',
        ],
        '3' => [
            'title' => __('Negro', 'ladatam-theme'),
            'value' => '#000000',
        ],
        '4' => [
            'title' => __('Gris Oscuro', 'ladatam-theme'),
            'value' => '#1a1a1a',
        ],
    ];
    return $config;
}
add_filter('elementor/schemes/default_colors', 'ladatam_elementor_colors');

/**
 * Registrar fuentes personalizadas en Elementor
 */
function ladatam_elementor_fonts($config) {
    $config['default_schemes']['typography']['items'] = [
        '1' => [
            'title' => __('Primary', 'ladatam-theme'),
            'value' => [
                'font_family' => 'Inter',
                'font_weight' => '600',
            ],
        ],
        '2' => [
            'title' => __('Secondary', 'ladatam-theme'),
            'value' => [
                'font_family' => 'Inter',
                'font_weight' => '400',
            ],
        ],
        '3' => [
            'title' => __('Code', 'ladatam-theme'),
            'value' => [
                'font_family' => 'JetBrains Mono',
                'font_weight' => '400',
            ],
        ],
        '4' => [
            'title' => __('Accent', 'ladatam-theme'),
            'value' => [
                'font_family' => 'Inter',
                'font_weight' => '800',
            ],
        ],
    ];
    return $config;
}
add_filter('elementor/schemes/default_fonts', 'ladatam_elementor_fonts');

/**
 * Agregar categoría personalizada para widgets
 */
function ladatam_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'ladatam',
        [
            'title' => __('LADATAM', 'ladatam-theme'),
            'icon' => 'fa fa-code',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'ladatam_elementor_widget_categories');

/**
 * Personalizar los ajustes predeterminados del editor
 */
function ladatam_elementor_default_settings() {
    if (did_action('elementor/loaded')) {
        // Establecer colores por defecto para nuevos elementos
        update_option('elementor_disable_color_schemes', 'yes');
        update_option('elementor_disable_typography_schemes', 'yes');
    }
}
add_action('init', 'ladatam_elementor_default_settings');

/**
 * Agregar scripts al editor de Elementor
 */
function ladatam_elementor_editor_scripts() {
    wp_enqueue_script(
        'ladatam-elementor-editor',
        get_stylesheet_directory_uri() . '/assets/js/elementor-editor.js',
        ['jquery'],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('elementor/editor/after_enqueue_scripts', 'ladatam_elementor_editor_scripts');

/**
 * Agregar controles personalizados a secciones
 */
function ladatam_add_section_controls($element, $args) {
    $element->add_control(
        'ladatam_grid_background',
        [
            'label' => __('Grid Background LADATAM', 'ladatam-theme'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Sí', 'ladatam-theme'),
            'label_off' => __('No', 'ladatam-theme'),
            'return_value' => 'yes',
            'default' => '',
            'prefix_class' => 'ladatam-grid-bg-',
        ]
    );
    
    $element->add_control(
        'ladatam_glow_effect',
        [
            'label' => __('Glow Effect LADATAM', 'ladatam-theme'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Sí', 'ladatam-theme'),
            'label_off' => __('No', 'ladatam-theme'),
            'return_value' => 'yes',
            'default' => '',
            'prefix_class' => 'ladatam-glow-',
        ]
    );
}
add_action('elementor/element/section/section_advanced/after_section_end', 'ladatam_add_section_controls', 10, 2);
