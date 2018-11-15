<?php
/**
 * The ACF Blocks functionality
 *
 * @package Mo\Theme\Functionalities
 * @since 1.0.0
 */

if ( ! class_exists( 'Mo_Theme_Functionalities_ACFBlocks' ) ) {
	/**
	 * The ACF Blocks functionality class.
	 *
	 * Makes ACF to design custom Gutenberg blocks.
	 *
	 * @link https://www.advancedcustomfields.com/blog/the-state-of-acf-in-a-gutenberg-world/
	 *
	 * @since 1.0.0
	 */
	class Mo_Theme_Functionalities_ACFBlocks extends Mo_Theme_Base {

		/**
		 * The class arguments.
		 *
		 * @since 1.0.0
		 *
		 * @var array $arguments An array of arguments
		 */
		public $arguments = array(
			'blocks' => array(
				array(
					'name'            => 'mo-responsive-image',
					'title'           => 'Mo Responsive Image',
					'description'     => 'Displays an image in both portrait and landscape mode',
					'render_callback' => 'mo_responsive_image_html',
					'category'        => '',
					'icon'            => '',
					'keywords'        => '',
				),
			),
		);

		/**
		 * Sets up the class.
		 *
		 * @since 1.0.0
		 *
		 * @param array $arguments An array of arguments.
		 * @return void
		 */
		public function __construct( $arguments = array() ) {
			$this->arguments = $this->array_merge( $this->arguments, $arguments );

			$this->register_block( $this->arguments['blocks'][0] );
		}

		/**
		 * Registers an ACF Block.
		 *
		 * @since 1.0.0
		 *
		 * @param array $arguments An array of arguments.
		 * @return void
		 */
		public function register_block( $arguments = array() ) {
			if ( empty( $arguments ) ) {
				return;
			}

			if ( ! function_exists( 'acf_register_block' ) ) {
				return;
			}

			$arguments['render_callback'] = array( $this, $arguments['render_callback'] );

			acf_register_block( $arguments );
		}

		/**
		 * Renders the HTML for the Mo Responsive Image block.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function mo_responsive_image_html() {
			//
		}
	}
}
