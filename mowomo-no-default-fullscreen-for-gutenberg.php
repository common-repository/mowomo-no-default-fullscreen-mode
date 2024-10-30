<?php
/*
 * Plugin Name: mowomo no default fullscreen mode
 * Description: Simple plugin to disable the default fullscreen option in the Gutenberg editor
 * Version:     1.1
 * Author:      mowomo
 * Author URI:  https://www.mowomo.com
 * License:     GNU GPL 3
 * Text Domain: mwm_no_guten_full
*/

// Constants
if ( !defined( 'ABSPATH' ) )    exit;
if ( !defined( 'mwm_no_guten_full_NAME' ) )  define( 'mwm_no_guten_full_NAME', 'mowomo no default fullscreen for Gutenberg ' );
if ( !defined( 'mwm_no_guten_full_SLUG' ) )  define( 'mwm_no_guten_full_SLUG', 'mwm_no_guten_full' );
if ( !defined( 'mwm_no_guten_full_VER' ) )   define( 'mwm_no_guten_full_VER', '1.1' );
if ( !defined( 'mwm_no_guten_full_TD' ) )    define( 'mwm_no_guten_full_TD', mwm_no_guten_full_SLUG . '_textdomain' );
if ( !defined( 'mwm_no_guten_full_FILE' ) )  define( 'mwm_no_guten_full_FILE', __FILE__ );
if ( !defined( 'mwm_no_guten_full_URL' ) )   define( 'mwm_no_guten_full_URL', plugins_url('/', mwm_no_guten_full_FILE) );
if ( !defined( 'mwm_no_guten_full_DIR' ) )   define( 'mwm_no_guten_full_DIR', plugin_dir_path( mwm_no_guten_full_FILE ) );
if ( !defined( 'mwm_no_guten_full_INC' ) )   define( 'mwm_no_guten_full_INC', mwm_no_guten_full_DIR . 'includes/' );

// Included files
include_once mwm_no_guten_full_INC.'functions.php';

