<?php
/**
 * The WordPress Gutenberg Responsive Embeds functionality
 *
 * @package Mo\Theme\Functionalities
 * @since 1.0.0
 */

if ( ! class_exists( 'Mo_Theme_Functionalities_ResponsiveEmbeds' ) ) {
	/**
	 * The WordPress Gutenberg Responsive Embeds functionality class.
	 *
	 * Support for the content to resize embeds and keep their aspect ratio
	 *
	 * @since 1.0.0
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#responsive-embedded-content
	 */
	class Mo_Theme_Functionalities_ResponsiveEmbeds {
		/**
		 * Sets up the class.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function __construct() {
			add_theme_support( 'responsive-embeds' );
		}
	}
}
