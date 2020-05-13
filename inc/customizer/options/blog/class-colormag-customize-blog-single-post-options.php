<?php
/**
 * Class to include Blog Single Post customize options.
 *
 * Class ColorMag_Customize_Blog_Single_Post
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
 * Class to include Blog Single Post customize options.
 *
 * Class ColorMag_Customize_Blog_Single_Post
 */
class ColorMag_Customize_Blog_Single_Post extends ColorMag_Customize_Base_Option {

	/**
	 * Include customize options.
	 *
	 * @param array                 $options      Customize options provided via the theme.
	 * @param \WP_Customize_Manager $wp_customize Theme Customizer object.
	 *
	 * @return mixed|void Customizer options for registering panels, sections as well as controls.
	 */
	public function customizer_options( $options, $wp_customize ) {

		// Customize transport postMessage variable to set `postMessage` or `refresh` as required.
		$customizer_selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

		$configs = array(

			// Featured image popup enable/disable option.
			array(
				'name'     => 'colormag_featured_image_popup',
				'default'  => 0,
				'type'     => 'control',
				'control'  => 'checkbox',
				'label'    => esc_html__( 'Check to enable the lightbox for the featured images in single post', 'colormag' ),
				'section'  => 'colormag_blog_single_post_section',
				'priority' => 5,
			),

			// Featured image display in single post page option.
			array(
				'name'     => 'colormag_featured_image_show',
				'default'  => 0,
				'type'     => 'control',
				'control'  => 'checkbox',
				'label'    => esc_html__( 'Check to hide the featured image in single post page.', 'colormag' ),
				'section'  => 'colormag_blog_single_post_section',
				'priority' => 10,
			),

			/**
			 * Related posts options.
			 */
			// Related posts heading separator.
			array(
				'name'     => 'colormag_related_posts_heading',
				'type'     => 'control',
				'control'  => 'colormag-heading',
				'label'    => esc_html__( 'Related Posts', 'colormag' ),
				'section'  => 'colormag_blog_single_post_section',
				'priority' => 305,
			),

			// Related posts enable/disable option.
			array(
				'name'      => 'colormag_related_posts_activate',
				'default'   => 0,
				'type'      => 'control',
				'control'   => 'checkbox',
				'label'     => esc_html__( 'Check to activate the related posts', 'colormag' ),
				'section'   => 'colormag_blog_single_post_section',
				'transport' => $customizer_selective_refresh,
				'partial'   => array(
					'selector' => '.related-posts',
				),
				'priority'  => 310,
			),

		);

		$options = array_merge( $options, $configs );

		return $options;

	}

}

return new ColorMag_Customize_Blog_Single_Post();
