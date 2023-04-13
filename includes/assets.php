<?php

//Load CSS & js

function creativevd_assets(){

    wp_enqueue_style('creativevd-css', get_template_directory_uri() . '/css/main.css', microtime());

}

add_action('wp_enqueue_scripts', 'creativevd_assets');

?>