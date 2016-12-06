<?php
/**
 * Functions for the Iowa Caucus site child theme
 */

// This site is an INN Member
if ( ! defined( 'INN_MEMBER' ) ) {
    define( 'INN_MEMBER', true );
}
// This site is hosted by INN
if ( ! defined( 'INN_HOSTED' ) ) {
    define( 'INN_HOSTED', true );
}

// shortcodes in text widgets
global $wp_embed;
add_filter( 'widget_text', 'shortcode_unautop', 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );
add_filter( 'widget_text', 'do_shortcode', 8 );
