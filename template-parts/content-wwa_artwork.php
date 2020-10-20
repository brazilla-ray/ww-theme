<?php
/**
 * Template part for displaying posts of type artwork
 * 
 * @package ww-theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="<?php echo get_post_type()?>-image">
  <?php $image = wp_get_attachment_image_src( get_field('image'), 'large'); 
  if ( is_singular() ) : ?>
  <a href="javascript:history.back()">
    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
  </a>
  <?php
  else : ?>
  <a href="<?php echo esc_url( get_permalink() ) ?>">
    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
  </a>
  <?php
  endif;
  ?>
</div><!--.*-image -->
<div class="<?php echo get_post_type()?>-caption">
  <?php
  if ( is_singular() ) : ?>
    <h2 class="<?php echo get_post_type()?>-caption__title">
      <?php the_field( 'title' ); ?>
    </h2>
    <p class="<?php echo get_post_type()?>-caption__field">
      <?php the_field( 'medium' ); ?>
    </p>
    <p class="<?php echo get_post_type()?>-caption__field">
      <?php the_field( 'date' ); ?>
    </p>
    <p class="<?php echo get_post_type()?>-caption__field">
      <? the_field( 'dimensions' ); ?>
    </p>
  <?php
  else : ?>
    <a href="<?php  esc_url( get_permalink() ) ?>" rel="bookmark" class=" <?php echo get_post_type()?>-caption__title <?php echo get_post_type()?>-caption__anchor">
      <?php the_field( 'title' ); ?>
    </a>
  <?php
  endif;
  ?>
</div><!-- entry-caption -->
</article>