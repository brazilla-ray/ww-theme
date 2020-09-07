<?php
/**
 * The template for displaying the about page.
 *
 * @package ww-theme
 */

get_header();
?>

<main class="site-main">
	<?php get_template_part(
		'template-parts/content',
		'section',
		array(
			'sectionTitle' => 'About',
			'templatePart' => 'page'
		)
	);
	?>
</main>

<?php
get_footer();
?>