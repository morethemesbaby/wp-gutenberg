<?php
/**
 * The functionalities setup
 *
 * @package Mo\Theme
 * @since 1.0.0
 * @see Mo_Theme_Base
 */

if ( ! class_exists( 'Mo_Theme_Functionalities' ) ) {
	/**
	 * The functionalities setup class.
	 *
	 * Implements the functionalities of the theme.
	 *
	 * This aims to be the most important class of the theme.
	 * The idea is to have a central place where all functionalities a theme implements can be quickly overviewed or managed.
	 *
	 * Looking into this file should reveal what the theme does.
	 *
	 * @since 1.0.0
	 */
	class Mo_Theme_Functionalities extends Mo_Theme_Base {

		/**
		 * The class arguments.
		 *
		 * @since 1.0.0
		 *
		 * @var array $arguments An array of arguments
		 */
		public $arguments = array(
			'set' => array(),
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

			if ( empty( $this->arguments['set'] ) ) {
				return;
			}

			if ( in_array( FUNCTIONALITY_SET_WPORG, $this->arguments['set'], true ) ) {
				$this->setup_wporg();
			}

			if ( in_array( FUNCTIONALITY_SET_GUTENBERG, $this->arguments['set'], true ) ) {
				$this->setup_gutenberg();
			}

			if ( in_array( FUNCTIONALITY_SET_ACFBLOCKS, $this->arguments['set'], true ) ) {
				$this->setup_acf_blocks();
			}
		}

		/**
		 * Sets up ACF Block specific functionalities.
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function setup_acf_blocks() {
			$acf_blocks = new Mo_Theme_Functionalities_ACFBlocks();
		}

		/**
		 * Sets up Gutenberg specific functionalities.
		 *
		 * @since 1.0.0
		 *
		 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
		 *
		 * @return void
		 */
		public function setup_gutenberg() {
			$wide_alignment       = new Mo_Theme_Functionalities_WideAlignment();
			$default_block_styles = new Mo_Theme_Functionalities_DefaultBlockStyles();
			$responsive_embeds    = new Mo_Theme_Functionalities_ResponsiveEmbeds();
		}

		/**
		 * Sets up WordPress.org specific functionalities.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function setup_wporg() {
			$content_width     = new Mo_Theme_Functionalities_ContentWidth();
			$post_formats      = new Mo_Theme_Functionalities_PostFormats();
			$sidebars          = new Mo_Theme_Functionalities_Sidebars();
			$title_tag         = new Mo_Theme_Functionalities_TitleTag();
			$post_thumbnails   = new Mo_Theme_Functionalities_PostThumbnails();
			$custom_header     = new Mo_Theme_Functionalities_CustomHeader();
			$custom_background = new Mo_Theme_Functionalities_CustomBackground();
			$editor_style      = new Mo_Theme_Functionalities_EditorStyle();
			$comment_scripts   = new Mo_Theme_Functionalities_CommentScripts();
			$custom_logo       = new Mo_Theme_Functionalities_CustomLogo();
			$html5_support     = new Mo_Theme_Functionalities_HTML5Support();
			$navigation_menus  = new Mo_Theme_Functionalities_NavigationMenus();
			$refresh_widgets   = new Mo_Theme_Functionalities_RefreshWidgets();
		}
	}
} // End if().
