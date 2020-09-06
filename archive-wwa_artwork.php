<?php
/**
 * The template for displaying all posts of type artwork
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
      'sectionTitle' => 'Artwork',
      'templatePart' => 'wwa_artwork'
    )
  );
  ?>
</main>

 <?php get_footer(); ?>