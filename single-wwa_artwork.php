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
  $args = array(
    'post_type' => 'wwa_artwork',
    'posts_per_page' => 1,
  );

  $loop = new WP_Query( $args );

  while ( $loop->have_posts() ) :
    $loop->the_post();

    get_template_part( 'template-parts/content', get_post_type() );

  endwhile; // End of the loop.
  
  ?>
 </main><!-- #main -->