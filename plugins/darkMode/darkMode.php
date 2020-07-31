<?php
/*
Plugin Name: Dark Mode
*/


function darkmode_enqueue_style() {
    wp_enqueue_style("darkMode", "/wp-content/plugins/darkMode/darkMode.css", NULL, true);
}

function darkmode_enqueue_script() {
    wp_enqueue_script("darkMode", "/wp-content/plugins/darkMode/darkMode.js", array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'darkmode_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'darkmode_enqueue_script' );
