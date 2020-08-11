<?php
/**
 * Template for displaying the home page.
 * 
 * @package ww-theme
 */

 get_header();
 ?>

  <main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'front' );

    endwhile;
    ?>

 <?php
 get_footer();