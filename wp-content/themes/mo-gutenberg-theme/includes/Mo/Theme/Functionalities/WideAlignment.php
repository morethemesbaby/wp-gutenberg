<?php
/**
 * The WordPress Gutenberg Wide Alignment functionality
 *
 * @package Mo\Theme\Functionalities
 * @since 1.0.0
 */

if ( ! class_exists( 'Mo_Theme_Functionalities_WideAlignment' ) ) {
	/**
	 * The WordPress Gutenberg Wide Alignment functionality class.
	 *
	 * Some blocks such as the image block have the possibility to define a “wide” or “full” alignment
	 *
	 * @since 1.0.0
	 *
	 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#wide-alignment
	 */
	class Mo_Theme_Functionalities_WideAlignment {
		/**
		 * Sets up the class.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function __construct() {
			add_theme_support( 'align-wide' );
		}
	}
}
