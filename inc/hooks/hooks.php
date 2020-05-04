<?php
/**
 * ColorMag theme hooks.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hooks for the header of this theme.
 */
// HTML Head.
add_action( 'colormag_action_head', 'colormag_head', 10 );

// Page starts.
add_action( 'colormag_action_before', 'colormag_page_start', 10 );
// Skip content link.
add_action( 'colormag_action_before', 'colormag_skip_content_link', 15 );

// Header starts.
add_action( 'colormag_action_before_header', 'colormag_header_start', 10 );
// Header nav container starts.
add_action( 'colormag_action_before_header', 'colormag_header_nav_container_start', 15 );
// Header nav container ends.
add_action( 'colormag_action_before_header', 'colormag_header_nav_container_end', 20 );

// Header image display before header end.
add_action( 'colormag_action_after_header', 'colormag_header_image_before_header_end', 5 );
// Header ends.
add_action( 'colormag_action_after_header', 'colormag_header_end', 10 );


/**
 * Hooks for the footer of this theme.
 */
// Page ends.
add_action( 'colormag_action_after', 'colormag_page_end', 10 );
