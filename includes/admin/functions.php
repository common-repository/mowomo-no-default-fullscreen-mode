<?php

// Security
if (!defined('ABSPATH')) exit;

function mwm_no_guten_full_diable_full_screen_guten() {
    wp_add_inline_script( 
    'wp-blocks', 
    "window.onload = function() { 
        const pantallaCompleta = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); 
        if ( pantallaCompleta ) { 
            wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); 
        } 
    }");
}
add_action( 'enqueue_block_editor_assets', 'mwm_no_guten_full_diable_full_screen_guten' );