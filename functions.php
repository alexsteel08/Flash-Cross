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


function init_members() {
    $labels = array(
        'name'               => 'Members',
        'singular_name'      => 'Member',
        'menu_name'          => 'Members',
        'name_admin_bar'     => 'Member',
        'add_new'            => 'New member',
        'add_new_item'       => 'New member',
        'new_item'           => 'New member',
        'edit_item'          => 'Edit member',
        'all_items'          => 'All members',
        'search_items'       => 'Search member',
        'not_found'          => 'No members found',
        'not_found_in_trash' => 'No members found in trash'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'exclude_from_search' => true,
        'rewrite' => array('slug' => 'member'),
        'has_archive' => false,
        'supports' => array('title'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups'

    );
    register_post_type('members', $args);
}
add_action('init', 'init_members');


function add_member_columns ( $columns ) {
//    unset($columns['date']);
    return array_merge ( $columns, array (

        'nickname_1'   => __ ( 'Нік(1)' ),
        'gender_1'   => __ ( 'Стать(1)' ),
        'full_name_1'   => __ ( 'Імя Прізвище(1)' ),
        'email_1'   => __ ( 'Email (1)' ),
        'phone_1'   => __ ( 'Телефон (1)' ),
        'nickname_2'   => __ ( 'Нік(2)' ),
        'gender_2'   => __ ( 'Стать(2)' ),
        'full_name_2'   => __ ( 'Імя Прізвище(2)' ),
        'email_2'   => __ ( 'Email (2)' ),
        'phone_2'   => __ ( 'Телефон (2)' ),
    ) );
}
add_filter ('manage_members_posts_columns', 'add_member_columns' );

function fill_member_columns ( $column, $post_id ) {
    switch ( $column ) {

        case 'nickname_1':
            echo get_post_meta ( $post_id, 'nickname_1', true );
            break;
        case 'gender_1':
            echo get_post_meta ( $post_id, 'gender_1', true );
            break;
        case 'full_name_1':
            echo get_post_meta ( $post_id, 'full_name_1', true );
            break;
        case 'email_1':
            echo get_post_meta ( $post_id, 'email_1', true );
            break;
        case 'phone_1':
            echo get_post_meta ( $post_id, 'phone_1', true );
            break;

        case 'nickname_2':
            echo get_post_meta ( $post_id, 'nickname_2', true );
            break;
        case 'gender_2':
            echo get_post_meta ( $post_id, 'gender_2', true );
            break;
        case 'full_name_2':
            echo get_post_meta ( $post_id, 'full_name_2', true );
            break;
        case 'email_2':
            echo get_post_meta ( $post_id, 'email_2', true );
            break;
        case 'phone_2':
            echo get_post_meta ( $post_id, 'phone_2', true );
            break;
    }
}
add_action ('manage_members_posts_custom_column', 'fill_member_columns', 10, 2 );

function my_acf_prepare_field($field) {
    $field['label'] = 'Назва команди';
    return $field;
}
add_filter('acf/prepare_field/name=_post_title', 'my_acf_prepare_field');


