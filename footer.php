<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Functions hooked into colormag_action_after_inner_content action.
 *
 * @hooked colormag_main_section_inner_end - 10
 */
do_action( 'colormag_action_after_inner_content' );


/**
 * Functions hooked into colormag_action_after_content action.
 *
 * @hooked colormag_main_section_end - 10
 * @hooked colormag_advertisement_above_footer_sidebar - 15
 */
do_action( 'colormag_action_after_content' );


/**
 * Hook: colormag_before_footer.
 */
do_action( 'colormag_before_footer' );
?>

<?php
// Add the main total header area display type dynamic class
$main_total_footer_option_layout_class = get_theme_mod( 'colormag_main_footer_layout_display_type', 'type_one' );

$class_name = '';
if ( $main_total_footer_option_layout_class == 'type_two' ) {
	$class_name = 'colormag-footer--classic';
}
?>

<footer id="colophon" class="clearfix <?php echo esc_attr( $class_name ); ?>">
	<?php get_sidebar( 'footer' ); ?>
	<div class="footer-socket-wrapper clearfix">
		<div class="inner-wrap">
			<div class="footer-socket-area">
				<div class="footer-socket-right-section">
					<?php
					if ( ( get_theme_mod( 'colormag_social_link_activate', 0 ) == 1 ) && ( ( get_theme_mod( 'colormag_social_link_location_option', 'both' ) == 'both' ) || ( get_theme_mod( 'colormag_social_link_location_option', 'both' ) == 'footer' ) ) ) {
						colormag_social_links();
					}
					?>
				</div>

				<div class="footer-socket-left-section">
					<?php do_action( 'colormag_footer_copyright' ); ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>

<?php
/**
 * Functions hooked into colormag_action_after action.
 *
 * @hooked colormag_page_end - 10
 */
do_action( 'colormag_action_after' );

wp_footer();
?>

</body>
</html>
