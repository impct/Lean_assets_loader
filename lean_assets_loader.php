<?php
/**
 * @package .impact
 * @subpackage Lean Starter Kit
 * @version 0.1
 */
/*
Plugin Name: Lean assets loader
Description: Plugin example to load js and css files.
Author: Haryshwaran
Organization: .impact
Version: 0.1
*/


function lean_js_loader_enqueue_assets(){
    #insert code here
    #reference: https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('lean_test_css', plugin_dir_url( __FILE__ ).'/assets/css/test.css');
    #reference: https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script( 'lean_test_js', plugin_dir_url( __FILE__ ).'/assets/js/test.js',array(),null,true);
}

add_action( 'wp_enqueue_scripts', 'lean_js_loader_enqueue_assets');