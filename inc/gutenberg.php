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
        
        acf_register_block(array(
            'name' => 'headline',
            'title' => 'Headline',
            'description' => 'A Headline Block with Option of lines',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Headlines', 'univerzes'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'headline-line-bottom',
            'title' => 'Headline with Line beneath',
            'description' => 'A Headline Block with Line beneath',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Headlines', 'univerzes'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'multiple-social-media',
            'title' => 'Mulitple Social Media Icons',
            'description' => 'A Block for multiple Social Media Icons',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Social Media', 'univerzes'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'tilted-wrapper',
            'title' => 'Block with tilted angle',
            'description' => 'A Block with tilted angle in the middle',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Block', 'univerzes', 'wrapper'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'tilted-block',
            'title' => 'Block with tilted angle as Checkbox',
            'description' => 'A Block with tilted angle in the middle (checkbox)',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Block', 'univerzes', 'tilted'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'contact-option',
            'title' => 'Contact Options List',
            'description' => 'A List of Contact Options',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Block', 'univerzes', 'tilted'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));

        acf_register_block(array(
            'name' => 'footer',
            'title' => 'Footer Block',
            'description' => 'Footer Block',
            'render_callback' => 'univerzes_acf_block_render_callback',
            'category' => 'univerzes-blocks',
            'icon' => 'admin-home',
            'keywords' => array('Block', 'univerzes', 'tilted'),
            'supports' => array(
                'align' => false,
                'anchor' => true,
            ),
        ));
    }
}
