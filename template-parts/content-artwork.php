<?php
/**
 * Template part for displaying posts of type artwork
 * 
 * @package ww-theme
 */

 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
  <?php
  if ( is_singular() ) :
    the_title( '<h1 class="entry-title">', '</h1>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif;
  ?>
  </header>
  
  <div class="entry_content">
    <?php $image = wp_get_attachment_image_src( get_field('image'), 'large'); ?>
    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
    <p><?php the_field('medium'); ?></p>
    <p><?php the_field('date'); ?></p>
    <p><?php the_field('dimensions'); ?></p>
  </div>

 </article>