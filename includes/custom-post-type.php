<?php

function creativevd_custom_post()  {

    $creativeVD_label = array(
        'name'          => __('Creative Post', 'textdomain'),
        'singular_name' => __('Creative Post', 'textdomain'),
        'add_new'       => __('Add Creative Post', 'textdomain'),
        'add_new_item'  => __('Add New Creative Post', 'textdomain'),
        'edit_item'     => __('Edit Creative Post', 'textdomain'),
        'all_items'     => __('Creative Post', 'textdomain')
        
    );

    $creativeVD_args = array(
        'labels'             => $creativeVD_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('creativeVD', $creativeVD_args);

    // $latestPost_label = array(
    //     'name'          => __('Latest Post', 'textdomain'),
    //     'singular_name' => __('Latest Post', 'textdomain'),
    //     'add_new'       => __('Add Latest Post', 'textdomain'),
    //     'add_new_item'  => __('Add New Latest Post', 'textdomain'),
    //     'edit_item'     => __('Edit Latest Post', 'textdomain'),
    //     'all_items'     => __('Latest Post', 'textdomain')
    // );

    // $latestPost_args = array(
    //     'labels'            => $latestPost_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    // );

    // register_post_type('latestPost', $latestPost_args);

    // $featurePost_label = array(
    //     'name'          => __('Feature Post', 'textdomain'),
    //     'singular_name' => __('Feature Post', 'textdomain'),
    //     'add_new'       => __('Add Feature Post', 'textdomain'),
    //     'add_new_item'  => __('Add New Feature Post', 'textdomain'),
    //     'edit_item'     => __('Edit Feature Post', 'textdomain'),
    //     'all_items'     => __('Feature Post', 'textdomain')
    // );

    // $featurePost_args = array(
    //     'labels'            => $featurePost_label,
    //     'public'            => true,
    //     'capability_type'   => 'post',
    //     'show_ui'           => true,
    //     'taxonomies'        => array('post_tag', 'category'),
    //     'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    // );

    // register_post_type('featurePost', $featurePost_args);
}

add_action('init', 'creativevd_custom_post');

?>