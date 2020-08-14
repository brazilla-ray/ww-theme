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
    'post_type' => 'artwork',
    'posts_per_page' => 10,
  );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) {
    $loop->the_post();
    ?>
    <div class="entry_content">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div>
        <?php $image = wp_get_attachment_image_src( get_field('image'), 'large'); ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
        <p><?php the_field('medium'); ?></p>
        <p><?php the_field('date'); ?></p>
        <p><?php the_field('dimensions'); ?></p>
      </div>
    </div>
    <?php
  }
  ?>
 </main>