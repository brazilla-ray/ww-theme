<?php
/**
 * The template for displaying all single posts of type artwork
 * 
 * @package ww-theme
 */

 get_header();
 ?>

 <main id="primary" class="site-main">
  <?php
  while ( have_posts() ) :
    the_post(  );

    get_template_part( 'template-parts/content', get_post_type() );

  endwhile;
  ?>
 </main><!-- #main -->

 <?php get_footer(); ?>