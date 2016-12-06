<?php
/**
 * Child theme functions for Iowa Watch
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
add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'autoembed');
