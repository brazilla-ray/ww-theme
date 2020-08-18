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
    <h2 class="front_page-content-title">
      recent work
    </h2>
    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', get_post_type() );
    endwhile;
    ?>
  </section>
</main>

 <?php
 get_footer();