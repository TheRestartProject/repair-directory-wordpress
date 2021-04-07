<?php
/*
Plugin Name: Repair Directory
Plugin URI: http://map.restarters.net/
Description: Embed the Repair Directory
Version: 0.4
Author: TheRestartProject
Author URI: https://therestartproject.org/
License: GPLv3
*/

// Prevent full path disclosure.
if (!defined('ABSPATH')) {
    exit;
}

define('REPAIR_DIRECTORY_PLUGIN_VERSION', '4.5');

function repair_directory_plugin_add_shortcode_cb($atts)
{
    // Set defaults.
    $defaults = [
        'src' => 'https://map.restarters.net/',
        'rd_parenturl' => 'https://map.restarters.net',
        'rd_region' => 'London',
        'rd_addbusiness' => null,
        'width' => '100%',
        'height' => '600',
        'scrolling' => 'no',
        'class' => 'repair-directory',
        'frameborder' => '0',
    ];

    // Apply defaults.
    foreach ($defaults as $default => $value) {
        if (!@array_key_exists($default, $atts)) {
            $atts[$default] = $value;
        }
    }

    // Construct source URL, which needs to include the region and parent from the attributes on this shortcode.
    // It also needs to include any URL parameters starting with rd_ - this allows sharing of results.
    //
    // The standard WordPress way to do this is using get_query_var, but that requires us to know in advance which query
    // variables the Repair Directory will use, and we don't want to introduce that dependency.
    $params = [
        'rd_region' => esc_attr($atts['rd_region']),
        'rd_parenturl' => esc_attr($atts['rd_parenturl']),
        'rd_addbusiness' => esc_attr($atts['rd_addbusiness'])
    ];

    unset($atts['rd_region']);
    unset($atts['rd_parenturl']);
    unset($atts['rd_addbusiness']);

    foreach ($_GET as $var => $value) {
        if (strpos($var, 'rd_') === 0) {
            $params[esc_attr($var)] = esc_attr($value);
        }
    }

    $url = esc_url($atts['src']) . '?';

    foreach ($params as $var => $value) {
        $url .= "&$var=$value";
    }

    $atts['src'] = $url;

    // Construct HTML to return.
    $html = "\n<!-- Repair Directory plugin v" . REPAIR_DIRECTORY_PLUGIN_VERSION . ' -->' . "\n";
    $html .= '<IFRAME';

    foreach ($atts as $att => $val) {
        $html .= ' ' . esc_attr($att) . '="' . esc_attr($val) . '"';
    }

    $html .= '></IFRAME>' . "\n";

    return $html;
}

add_shortcode('repair-directory', 'repair_directory_plugin_add_shortcode_cb');