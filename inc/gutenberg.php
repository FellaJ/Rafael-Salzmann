<?php

function mm_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'mm-blocks',
                'title' => 'MM Blocks',
            ),
        )
    );
}

add_filter('block_categories', 'mm_block_category', 10, 2);


function mm_acf_block_render_callback($block)
{

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(STYLESHEETPATH . "/blocks/block-{$slug}.php")) {
        include(STYLESHEETPATH . "/blocks/block-{$slug}.php");
    }
}

add_action('acf/init', 'mm_acf_init');
function mm_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {


        acf_register_block(array(
            'name' => 'about',
            'title' => 'About',
            'description' => 'About Block',
            'render_callback' => 'mm_acf_block_render_callback',
            'category' => 'mm-blocks',
            'icon' => 'admin-home',
            'keywords' => array('about', 'mm'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));
    }
}
