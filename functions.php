<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
define( 'WTHEME_THEME_URI', get_template_directory_uri().'/' );
// URI to css folder
define( 'WTHEME_CSS_URI', WTHEME_THEME_URI.'css/' );
// URI to assets folder
define( 'WTHEME_ASSETS_URI', WTHEME_THEME_URI.'assets/' );
// URI to js forlder
define( 'WTHEME_JS_URI', WTHEME_THEME_URI.'js/' );
// URI to image forlder
define( 'WTHEME_IMG_URI', WTHEME_THEME_URI.'img/' );
// URI to templates
define( 'WTHEME_TEMPLATES_URI', WTHEME_THEME_URI.'template-parts/' );

// Path to theme
define( 'WTHEME_THEME_PATH', get_template_directory().'/' );
// Path to image forlder
define( 'WTHEME_IMG_PATH', WTHEME_THEME_PATH.'img/' );
// Path to inc forlder
define( 'WTHEME_INC_PATH', WTHEME_THEME_PATH.'inc/' );
// Path to templates
define( 'WTHEME_TEMPLATES_DIR', '/template-parts/' );

/**
 * Theme functions
 */
require WTHEME_INC_PATH . 'functions/functions.inc.php';


/* hide css version */
function vc_remove_wp_ver_css_js($src)
{
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

// thumbnail list