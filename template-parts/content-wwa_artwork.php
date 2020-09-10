<?php
/**
 * Template part for displaying posts of type artwork
 * 
 * @package ww-theme
 */

?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="<?php echo get_post_type()?>__image">
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
  </div><!--.*__image -->
  <div class="<?php echo get_post_type()?>__caption">
    <?php
    if ( is_singular() ) :
      the_title( '<h2 class="entry-title">', '</h2>' );
    ?>
      <p class="entry-field">
        <?php the_field( 'medium' ); ?>
      </p>
      <p class="entry-field">
        <?php the_field( 'date' ); ?>
      </p>
      <p class="entry-field">
        <? the_field( 'dimensions' ); ?>
      </p>
    <?php
    else :
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    endif;
    ?>
  </div><!-- entry-caption -->
 </article>