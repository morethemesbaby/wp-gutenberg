<?php
/**
 * Displays a list of posts.
 *
 * Displays the standard query from the loop.
 *
 * @package MoTheme
 * @since 1.0.0
 */

$component = new Mo_Theme_Components();

$attributes = apply_filters(
	'mo_theme_post_list_attributes',
	array(
		'block' => 'post-list',
	)
);

$title = apply_filters(
	'mo_theme_post_list_title',
	array(
		'title' => 'Post list',
	)
);
?>

<section <?php $component->attributes->display( $attributes ); ?>>
	<?php $component->title->display( $title ); ?>

	<div class="list-items">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/post/post', 'loop' );
				}

				get_template_part( 'template-parts/navigation/navigation', 'for-posts' );

			} else {
				get_template_part( 'template-parts/post/post', 'none' );
			}
		?>
	</div>
</section>
