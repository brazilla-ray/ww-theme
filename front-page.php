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
    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', 'front' );
    endwhile;
    ?>
  </section>
  <section class="site-main-section">
    <header class="site-main-section-header">
      <h2>About</h2>
    </header><!-- site-main-section-header -->
  </section><!-- site-main-section -->
</main>

 <?php
 get_footer();