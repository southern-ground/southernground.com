<?php

function add_menu_icons_styles()
{
    ?>

    <style>
        #menu-posts-sg_music div.wp-menu-image:before {
            content: '\f127';
        }

        #menu-posts-sg_craft div.wp-menu-image:before {
            content: '\f308';
        }

        #menu-posts-sg_food div.wp-menu-image:before {
            content: '\f511';
        }
    </style>

    <?php
}

add_action('admin_head', 'add_menu_icons_styles');

add_theme_support('post-thumbnails');

add_action('admin_menu', 'remove_admin_menus');

//Remove top level admin menus
function remove_admin_menus()
{
    remove_menu_page('edit.php');
}

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('sg_music',
        array(
            'labels' => array(
                'name' => __('The Music'),
                'singular_name' => __('Music Item'),
                'add_new_item' => __('Add New Music Item'),
                'menu_icon' => ''
            ),
            'public' => true,
            'has_archive' => false,
            'menu_position' => 5
        )
    );
}

add_action('init', 'create_post_type2');
function create_post_type2()
{
    register_post_type('sg_food',
        array(
            'labels' => array(
                'name' => __('The Food'),
                'singular_name' => __('Food Item'),
                'add_new_item' => __('Add New Food Item'),
                'menu_icon' => ''
            ),
            'public' => true,
            'has_archive' => false,
            'menu_position' => 5
        )
    );
}

add_action('init', 'create_post_type3');
function create_post_type3()
{
    register_post_type('sg_craft',
        array(
            'labels' => array(
                'name' => __('The Craft'),
                'singular_name' => __('Craft Item'),
                'add_new_item' => __('Add New Craft Item'),
                'menu_icon' => ''
            ),
            'public' => true,
            'has_archive' => false,
            'menu_position' => 5
        )
    );
}

add_action('init', 'create_post_type4');
function create_post_type4()
{
    register_post_type('sg_shop',
        array(
            'labels' => array(
                'name' => __('Shop'),
                'singular_name' => __('Shop Item'),
                'add_new_item' => __('Add New Shop Item'),
                'menu_icon' => ''
            ),
            'public' => true,
            'has_archive' => false,
            'menu_position' => 5
        )
    );
}

?>