<?php
/**
 * Template for displaying the home page.
 * 
 * @package ww-theme
 */

get_header();
get_template_part( 
	'template-parts/content', 
	'main',
	array (
		'sectionTitle' => 'Recent Work',
		'templatePart' => 'front'
	)
);
get_footer();