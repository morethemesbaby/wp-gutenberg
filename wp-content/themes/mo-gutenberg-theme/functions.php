<?php
/**
 * Sets up the global variables and the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MoTheme
 * @since 1.0.0
 */

/**
 * Defines the WordPress.org functionality set.
 *
 * WordpRess.org functionalities will be implemented by the theme.
 *
 * @since 1.0.0
 *
 * @link https://developer.wordpress.org/themes/functionality/
 *
 * @var string
 */
define( 'FUNCTIONALITY_SET_WPORG', 'wporg' );

/**
 * Defines the Gutenberg functionality set.
 *
 * Gutenberg functionalities will be implemented by the theme.
 *
 * @since 1.0.0
 *
 * @link https://github.com/WordPress/gutenberg
 *
 * @var string
 */
define( 'FUNCTIONALITY_SET_GUTENBERG', 'Gutenberg' );

/**
 * Defines the ACF Blocks functionality set.
 *
 * ACF Blocks functionality will be implemented by the theme.
 *
 * @since 1.0.0
 *
 * @link https://www.advancedcustomfields.com/blog/the-state-of-acf-in-a-gutenberg-world/
 *
 * @var string
 */
define( 'FUNCTIONALITY_SET_ACFBLOCKS', 'ACFBlocks' );

/**
 * Use Composer's autoload.
 *
 * This makes sure all classes are loaded dynamically instead of being included manually.
 *
 * @link https://getcomposer.org/doc/01-basic-usage.md#autoloading
 */
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}

/**
 * Sets up the theme.
 *
 * Tells to the theme setup class:
 * - Which functionalities to implement.
 * - Where to find the assets which needs to be included.
 *
 * @since 1.0.0
 * @var object The main theme object.
 */
$mo_theme = new Mo_Theme_Setup(
	apply_filters( 'mo_theme_setup_array',
		array(
			'include_folder'    => 'includes/',
			'functionality_set' => array(
				FUNCTIONALITY_SET_WPORG,
				FUNCTIONALITY_SET_GUTENBERG,
				FUNCTIONALITY_SET_ACFBLOCKS,
			),
			'assets'            => array(
				'src_url'           => get_template_directory_uri(),
				'folder'            => '',
				'javascript_folder' => 'assets/js',
				'css_folder'        => '',
				'css_file_name'     => 'style',
			),
		)
	)
);

$text_domain = ( isset( $mo_theme->text_domain ) ) ? $mo_theme->text_domain : 'text-domain';

/**
 * Defines the theme text domain.
 *
 * This will be used later for various tasks like creating a query cache id.
 *
 * @since 1.0.0
 *
 * @var string
 */
define( 'THEME_TEXT_DOMAIN', $text_domain );


add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {
	// Register a testimonial ACF Block
	if( function_exists('acf_register_block') ) {

		error_log( 'acfb' );

		$result = acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_callback'	=> 'my_testimonial_block_html'
			//'category'		=> '',
			//'icon'			=> '',
			//'keywords'		=> array(),
		));
	} else {

		error_log( 'NO acfb' );
	}
}

// Callback to render the testimonial ACF Block
function my_testimonial_block_html() {

	// vars
	$testimonial = get_field('testimonial');
	$author = get_field('author');
	$avatar = get_field('avatar');

	error_log( 'testim_html' );

	?>
	<blockquote class="testimonial">
	    <p><?php echo $testimonial; ?></p>
	    <cite>
	    	<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
	    	<span><?php echo $author; ?></span>
	    </cite>
	</blockquote>
	<?php
}
