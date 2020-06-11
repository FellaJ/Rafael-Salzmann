<?php

function univerzes_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'univerzes-blocks',
                'title' => 'Univerzes-Blocks',
            ),
        )
    );
}

add_filter('block_categories', 'univerzes_block_category', 10, 2);


function univerzes_acf_block_render_callback($block)
{

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(STYLESHEETPATH . "/blocks/block-{$slug}.php")) {
        include(STYLESHEETPATH . "/blocks/block-{$slug}.php");
    }
}

add_action('acf/init', 'univerzes_acf_init');
function univerzes_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {


        acf_register_block(array(
            'name' => 'about',
            'title' => 'About',
            'description' => 'About Block',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('about', 'univerzes'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'banner',
            'title' => 'Banner',
            'description' => 'A Banner Block',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('banner', 'univerzes'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));
    }
}
