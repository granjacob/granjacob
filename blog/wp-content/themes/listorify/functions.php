<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function listorify_scripts()
{
    // enqueue parent style
    wp_enqueue_style('listorify-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'listorify_scripts');

/**
 * Registers pattern categories.
 *
 * @since listorify 1.0.0
 *
 * @return void
 */
function listorify_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'listorify-patterns' => array('label' => __('Listorify Patterns', 'listorify'))
    );

    $block_pattern_categories = apply_filters('listorify_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'listorify_register_pattern_category', 9);
