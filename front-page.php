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
    $args = array(
      'post_type' => 'artwork',
      'posts_per_page' => 1,
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) :
      $loop->the_post();

      get_template_part( 'template-parts/content', 'front' );

    endwhile;
    ?>

 <?php
 get_footer();