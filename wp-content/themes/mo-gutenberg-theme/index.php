<?php
/**
 * The main template file
 *
 * Displays a list of posts.
 *
 * @link https://developer.wordpress.org/themes/getting-started/what-is-a-theme/
 *
 * @package MoTheme
 * @since 1.0.0.
 */

get_header();

$component = new Mo_Theme_Components();

$attributes = apply_filters(
	'mo_theme_home_attributes',
	array(
		'block' => 'home',
	)
);

$title = apply_filters(
	'mo_theme_home_title',
	array(
		'title' => 'Home',
	)
);
?>

<section <?php $component->attributes->display( $attributes ); ?>>
	<?php
		$component->title->display( $title );
		get_template_part( 'template-parts/post-list/post-list', '' );
	?>
</section>

<?php
get_footer();
