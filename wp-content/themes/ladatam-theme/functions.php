<?php
/**
 * LADATAM Dark Tech Theme Functions
 * 
 * Tema hijo para Hello Elementor con personalización Dark Tech
 * 
 * @package LADATAM
 * @version 1.0.0
 */

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Encolar estilos del tema padre e hijo
 */
function ladatam_enqueue_styles() {
    // Estilo del tema padre (Hello Elementor)
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('hello-elementor')->get('Version')
    );
    
    // Estilo del tema hijo (LADATAM)
    wp_enqueue_style(
        'ladatam-style',
        get_stylesheet_uri(),
        array('hello-elementor-style'),
        wp_get_theme()->get('Version')
    );
    
    // Google Fonts - Inter y JetBrains Mono
    wp_enqueue_style(
        'ladatam-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Scripts personalizados
    wp_enqueue_script(
        'ladatam-scripts',
        get_stylesheet_directory_uri() . '/assets/js/ladatam.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ladatam_enqueue_styles');

/**
 * Agregar clases al body para identificar LADATAM
 */
function ladatam_body_classes($classes) {
    $classes[] = 'ladatam-theme';
    $classes[] = 'dark-tech';
    return $classes;
}
add_filter('body_class', 'ladatam_body_classes');

/**
 * Registrar ubicaciones de menú personalizadas
 */
function ladatam_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Menú Principal', 'ladatam-theme'),
        'footer'    => __('Menú Footer', 'ladatam-theme'),
        'social'    => __('Redes Sociales', 'ladatam-theme'),
    ));
}
add_action('after_setup_theme', 'ladatam_register_menus');

/**
 * Registrar widgets/sidebars
 */
function ladatam_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'ladatam-theme'),
        'id'            => 'footer-1',
        'description'   => __('Área de widgets del footer - Columna 1', 'ladatam-theme'),
        'before_widget' => '<div id="%1$s" class="ladatam-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-lima">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'ladatam-theme'),
        'id'            => 'footer-2',
        'description'   => __('Área de widgets del footer - Columna 2', 'ladatam-theme'),
        'before_widget' => '<div id="%1$s" class="ladatam-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-lima">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'ladatam-theme'),
        'id'            => 'footer-3',
        'description'   => __('Área de widgets del footer - Columna 3', 'ladatam-theme'),
        'before_widget' => '<div id="%1$s" class="ladatam-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-lima">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ladatam_widgets_init');

/**
 * Soporte para logo personalizado
 */
function ladatam_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'ladatam_custom_logo_setup');

/**
 * Personalizar el excerpt
 */
function ladatam_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'ladatam_excerpt_length');

function ladatam_excerpt_more($more) {
    return '... <span class="text-lima">&lt;/&gt;</span>';
}
add_filter('excerpt_more', 'ladatam_excerpt_more');

/**
 * Shortcodes personalizados LADATAM
 */

// Shortcode para brackets decorativos { }
function ladatam_bracket_shortcode($atts, $content = null) {
    return '<span class="bracket-decoration">' . do_shortcode($content) . '</span>';
}
add_shortcode('bracket', 'ladatam_bracket_shortcode');

// Shortcode para angle brackets < />
function ladatam_angle_shortcode($atts, $content = null) {
    return '<span class="angle-decoration">' . do_shortcode($content) . '</span>';
}
add_shortcode('angle', 'ladatam_angle_shortcode');

// Shortcode para texto con gradiente
function ladatam_gradient_text_shortcode($atts, $content = null) {
    $atts = shortcode_atts(array(
        'animated' => 'false',
    ), $atts);
    
    $class = $atts['animated'] === 'true' ? 'text-gradient-animated' : 'text-gradient';
    return '<span class="' . $class . '">' . do_shortcode($content) . '</span>';
}
add_shortcode('gradient', 'ladatam_gradient_text_shortcode');

// Shortcode para botones LADATAM
function ladatam_button_shortcode($atts, $content = null) {
    $atts = shortcode_atts(array(
        'type'  => 'primary',
        'url'   => '#',
        'target'=> '_self',
    ), $atts);
    
    $class = 'ladatam-btn ladatam-btn-' . esc_attr($atts['type']);
    
    return sprintf(
        '<a href="%s" class="%s" target="%s">%s</a>',
        esc_url($atts['url']),
        $class,
        esc_attr($atts['target']),
        do_shortcode($content)
    );
}
add_shortcode('ladatam_btn', 'ladatam_button_shortcode');

// Shortcode para badges
function ladatam_badge_shortcode($atts, $content = null) {
    $atts = shortcode_atts(array(
        'type' => 'lima',
    ), $atts);
    
    $class = $atts['type'] === 'amber' ? 'ladatam-badge ladatam-badge-amber' : 'ladatam-badge';
    return '<span class="' . $class . '">' . do_shortcode($content) . '</span>';
}
add_shortcode('badge', 'ladatam_badge_shortcode');

// Shortcode para estadísticas
function ladatam_stat_shortcode($atts) {
    $atts = shortcode_atts(array(
        'number' => '0',
        'label'  => '',
        'prefix' => '',
        'suffix' => '',
    ), $atts);
    
    return sprintf(
        '<div class="ladatam-stat text-center">
            <div class="stat-number">%s%s%s</div>
            <div class="stat-label">%s</div>
        </div>',
        esc_html($atts['prefix']),
        esc_html($atts['number']),
        esc_html($atts['suffix']),
        esc_html($atts['label'])
    );
}
add_shortcode('stat', 'ladatam_stat_shortcode');

/**
 * Agregar campos personalizados al customizer
 */
function ladatam_customize_register($wp_customize) {
    // Sección LADATAM
    $wp_customize->add_section('ladatam_options', array(
        'title'    => __('LADATAM Opciones', 'ladatam-theme'),
        'priority' => 30,
    ));
    
    // CTA Principal
    $wp_customize->add_setting('ladatam_cta_text', array(
        'default'           => 'Empieza Gratis',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('ladatam_cta_text', array(
        'label'   => __('Texto del CTA Principal', 'ladatam-theme'),
        'section' => 'ladatam_options',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('ladatam_cta_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('ladatam_cta_url', array(
        'label'   => __('URL del CTA Principal', 'ladatam-theme'),
        'section' => 'ladatam_options',
        'type'    => 'url',
    ));
    
    // Redes Sociales
    $social_networks = array('linkedin', 'twitter', 'instagram', 'youtube', 'tiktok');
    
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('ladatam_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control('ladatam_' . $network, array(
            'label'   => sprintf(__('URL de %s', 'ladatam-theme'), ucfirst($network)),
            'section' => 'ladatam_options',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'ladatam_customize_register');

/**
 * Agregar meta tags para SEO y redes sociales
 */
function ladatam_meta_tags() {
    ?>
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#d9ff18">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php
}
add_action('wp_head', 'ladatam_meta_tags');

/**
 * Preload de fuentes para mejor rendimiento
 */
function ladatam_preload_fonts() {
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
}
add_action('wp_head', 'ladatam_preload_fonts', 1);

/**
 * Desactivar Gutenberg para usar solo Elementor (opcional)
 */
// add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Limpiar el head de WordPress
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/**
 * Agregar soporte para formatos de post
 */
function ladatam_post_formats() {
    add_theme_support('post-formats', array(
        'video',
        'gallery',
        'quote',
    ));
}
add_action('after_setup_theme', 'ladatam_post_formats');

/**
 * Cargar integración con Elementor
 */
if (did_action('elementor/loaded')) {
    require_once get_stylesheet_directory() . '/includes/elementor-integration.php';
}
