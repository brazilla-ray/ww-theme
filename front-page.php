<?php
/**
 * Template for displaying the home page.
 * 
 * @package ww-theme
 */

 get_header();
 ?>

<main id="primary" class="site-main">
  <section class="site-main-section">
    <header class="site-main-section-header">
      <h2 class="front_page-content-title">
        Recent Work
      </h2>
      <p class="front_page-content-more-info">(Click on images for details.)</p>
    </header>
    <div class="site-main-section-content">
      <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'front' );
      endwhile;
      ?>
    </div><!-- site-main-section-content -->
  </section>
</main>

 <?php
 get_footer();