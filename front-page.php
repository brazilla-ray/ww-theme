<?php
/**
 * Template for displaying the home page.
 * 
 * @package ww-theme
 */

 get_header();
 ?>

<main id="primary" class="site-main">
  <?php get_template_part(
    'template-parts/content',
    'section',
    array(
      'sectionTitle' => 'Recent Work',
      'templatePart' => 'front'
    )
  );
  ?>
</main>

 <?php
 get_footer();