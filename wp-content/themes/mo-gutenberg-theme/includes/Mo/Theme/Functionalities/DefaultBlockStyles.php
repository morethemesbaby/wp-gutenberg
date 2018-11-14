<?php
/**
 * The WordPress Gutenberg Default Block Styles functionality
 *
 * @package Mo\Theme\Functionalities
 * @since 1.0.0
 */

if ( ! class_exists( 'Mo_Theme_Functionalities_DefaultBlockStyles' ) ) {
	/**
	 * The WordPress Gutenberg Default Block Styles functionality class.
	 *
	 * Support for core blocks' default styles.
	 *
	 * @since 1.0.0
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#default-block-styles
	 */
	class Mo_Theme_Functionalities_DefaultBlockStyles {
		/**
		 * Sets up the class.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function __construct() {
			add_theme_support( 'wp-block-styles' );
		}
	}
}
