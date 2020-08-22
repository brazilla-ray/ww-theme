<?php
/**
 * Template part for displaying content on the front page.
 * 
 * @package ww-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content-front">
    <?php $image = wp_get_attachment_image_src( get_field('image'), 'large'); ?>
    <a href="<?php echo esc_url( get_permalink() ) ?>">
      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
    </a>
  </div><!--.entry-content-front -->
  <div class="entry-caption-front">
    <?php
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    ?>
  </div><!-- entry-caption -->
 

 </article>