<?php
/**
 * Plugin Name: preAMP
 * Description: Some chanhes in AMP
 * Plugin URI: 
 * Author: SEA
 * Author URI: 
 * Version: 0.0.1
 * Text Domain: amp
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @package PREAMP
 */

add_action( 'pre_amp_render_post', function () {
    add_filter( 'the_content', function( $content ){
        if ( has_post_thumbnail() ) {
            $ad1 = "<div align=\"center\">AD 1</div>";
            $ad2 = "<div align=\"center\">AD 2</div>";
            $content = $ad1 . $content . $ad2;
        }
        return $content;
    }, 3 );
});