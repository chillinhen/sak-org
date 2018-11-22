<?php
/**
 * Theme Customizer settings.
 *
 * @package SAK HTML5 BLANK THEME 
 */
add_action('after_setup_theme', 'sak_header_setup');

function sak_header_setup() {

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    add_theme_support('custom-background', array(
        'default-color' => '#000000',
        'default-image' => get_template_directory_uri() . '/library/img/default/default-bg.png'
    ));
}

add_action('customize_register', 'sak_theme_customizer');

function sak_theme_customizer($wp_customize) {
    // Logo upload
    $wp_customize->add_section('sak_logo_section', array(
        'title' => __('Logo', 'html5blank'),
        'priority' => 30,
        'description' => __('Upload an individual logo to replace the default site logo', 'html5blank'),
    ));
    $wp_customize->add_setting('sak_logo', array(
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sak_logo', array(
        'label' => __('Logo', 'html5blank'),
        'section' => 'sak_logo_section',
        'settings' => 'sak_logo',
    )));
    // Define Color
    $wp_customize->add_setting('logo_color', array(
        'default' => '#4385c8',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'logo_color', array(
    'label' => __('Logo Color', 'html5blank'),
    'description' => __('Define the color of the default Logo  - only if you did not upload a logo before)', 'html5blank'),
        'section' => 'colors',
        'settings' => 'logo_color',
    )));
    $wp_customize->add_setting('branding_color', array(
        'default' => '#2466a8',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'branding_color', array(
        'label' => __('Branding Color', 'html5blank'),
        'description' => __('Define your branding color', 'html5blank'),
        'section' => 'colors',
        'settings' => 'branding_color',
    )));

    $wp_customize->add_setting('secondary_color', array(
        'default' => '#4385c8',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('Secondary Color', 'html5blank'),
        'description' => __('Define a secondary color that matches branding color', 'html5blank'),
        'section' => 'colors',
        'settings' => 'secondary_color',
    )));
}

/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().

 */
function sak_sanitize_hex_color($color) {
    if ('' === $color)
        return '';

    // 3 or 6 hex digits, or the empty string.
    if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color))
        return $color;

    return null;
}

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function sak_add_customizer_css() {
    $logo_color = sak_sanitize_hex_color(get_theme_mod('logo_color'));
    $branding_color = sak_sanitize_hex_color(get_theme_mod('branding_color'));
    $secondary_color = sak_sanitize_hex_color(get_theme_mod('secondary_color'));
    ?>
    <style>
        ::-moz-selection,
        ::selection{
            background-color: <?php echo $branding_color; ?>;
        }

        a, a:visited,
        .site-content a{
            color: <?php echo $branding_color; ?>;
        }
        .site-content a{
            color: <?php echo $secondary_color; ?>;
        }
        .colPrimary {
            fill: <?php echo $branding_color; ?>; 
        }
        .colLogo{
            fill: <?php echo $logo_color; ?>;
        }
        .post-edit-link {
            color:<?php echo $branding_color; ?>; 
        }


        .h1, h2, article h1, h3, h4, legend, .number, .widgettitle,
        h1 a, h2 a, article h1 a, h3 a, h4 a, legend a, .number a, .widgettitle a{
            color: <?php echo $branding_color; ?>;
        }

        blockquote{
            border-left:2 px solid <?php echo $branding_color; ?>; 
        }
        /*------------------------------------------------
        Typo Sonderfälle
        --------------------------------------------------*/
        .carousel-caption > *,
        legend, h2.category-link, article h1.category-link, h2.category-link a .panel h3, article h1.category-link a .panel h3, .number {
            color: <?php echo $branding_color; ?>; 
        }
        /*------------------------------------------------
        Navigation
        --------------------------------------------------*/
        .menu-item .sub-menu,
        #mainNav ul.nav > .menu-item:hover,
        .toggle-nav span,
        .toggle-nav.open span,
        #offMenu,
        .service-links,
        #languages-menu{
            background-color: <?php echo $branding_color; ?>;
        }
        .menu-item .sub-menu a:hover{
            background-color: <?php echo $secondary_color; ?>;
        }
        #mainNav ul.nav > .menu-item > .sub-menu li.current_page_item {
            background-color: <?php echo $secondary_color; ?> }

        @media screen and (min-width: 801px) {
            #mainNav.affix {
                background-color: <?php echo $branding_color; ?>;
            }
        }
        /*------------------------------------------------
       Misc
       --------------------------------------------------*/
        #newsCarousel .carousel-control,
        .box[class*="post"][class*="category-sonderinfos"],
        table.tablepress tr:hover td{
            background-color: <?php echo $branding_color; ?>;
        }
    </style>
    <?php
}

add_action('wp_head', 'sak_add_customizer_css');
?>