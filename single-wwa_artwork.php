<?php
/**
 * The template for displaying single posts of type artwork
 * 
 * @package ww-theme
 */

 get_header();
 ?>

 <main id="primary">
 <?php get_template_part(
    'template-parts/content',
    'section',
    array(
      'sectionTitle' => 'Artwork',
      'templatePart' => 'wwa_artwork_single'
    )
  );
  ?>
 </main><!-- #main -->

 <?php get_footer(); ?>