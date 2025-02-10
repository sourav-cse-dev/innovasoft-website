<?php
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (! function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
{
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }

        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (! function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
{
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', ['vw-corporate-lite-block-style', 'vw-corporate-lite-block-patterns-style-frontend', 'bootstrap-style']);
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

function include_php_file_shortcode($templateName)
{
    $tmp = $templateName['templatename'];
    ob_start(); // Start output buffering to capture the included file's output

    // Assuming '$templateName.php' is in the child theme folder
    $filepath = get_stylesheet_directory() . '/templates/' . $tmp . '.php';

    if (file_exists($filepath)) {
        include $filepath;
    } else {
        echo 'File not found: ' . $filepath;
    }

    return ob_get_clean(); // Return the captured output
}
add_shortcode('include_php_file', 'include_php_file_shortcode');
