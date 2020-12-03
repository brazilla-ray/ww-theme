<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww-theme
 */

get_header();
get_template_part(
	'template-parts/content',
	'main',
	array (
		'sectionTitle' => get_the_archive_title(),
		'templatePart' => get_post_type()
	)
);
get_footer();