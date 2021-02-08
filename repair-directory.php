<?php
/*
Plugin Name: Repair Directory
Plugin URI: http://map.restarters.net/
Description: Embed the Repair Directory
Version: 0.1
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
        'region' => 'London',
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

    // Construct source, which needs to include the region.
    $atts['src'] = esc_url($atts['src']) . '?region=' . esc_attr($atts['region']);
    unset($atts['region']);

    // Construct HTML to return
    $html = "\n<!-- Repair Directory plugin v" . REPAIR_DIRECTORY_PLUGIN_VERSION . ' -->' . "\n";
    $html .= '<IFRAME';

    foreach ($atts as $att => $val) {
        $html .= ' ' . esc_attr($att) . '="' . esc_attr($val) . '"';
    }

    $html .= '></IFRAME>' . "\n";

    return $html;
}

add_shortcode('repair-directory', 'repair_directory_plugin_add_shortcode_cb');