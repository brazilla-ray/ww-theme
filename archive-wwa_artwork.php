<?php
/**
 * The template for displaying all posts of type artwork
 * 
 * @package ww-theme
 */

 get_header();
 ?>

<main id="primary" class="site-main">
  <section class="site-main-section">
    <h2 class="site-main-section-header">
      Artwork
    </h2>
    <div class="site-main-section-content">
      <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'wwa_artwork' );
      endwhile;
      ?>
    </div><!-- site-main-section-content -->
  </section>
</main>

 <?php get_footer(); ?>