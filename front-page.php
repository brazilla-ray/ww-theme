<?php
/**
 * Template for displaying the home page.
 * 
 * @package ww-theme
 */

 get_header();
 ?>

<main id="primary" class="site-main">
  <section class="main-section">
    <header class="main-section-title">
      <h2 class="main-section-title__heading">
        Recent work
      </h2>
    </header>

<?php
// The Query. In this case, we're looking for 'wwa_artwork'.
$args = array(
  'post_type' => 'wwa_artwork',
  'tag' => 'recent',
  'posts_per_page' => -1,
  'orderby' => 'rand'
);
$the_query = new WP_Query( $args );
// The Loop.
if ( $the_query->have_posts() ) : 
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="main-section-content">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="<?php echo get_post_type()?>-image">
          <?php $image = wp_get_attachment_image_src( get_field('image'), 'full'); ?>
          <a href="<?php echo esc_url( get_permalink() ) ?>">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
          </a>
        </div><!--.*-image -->
        <div class="<?php echo get_post_type()?>-caption">
          <a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark" class="<?php echo get_post_type(); ?>-caption__title <?php echo get_post_type(); ?>-caption__anchor"><?php  the_field('title'); ?></a><!--.*-caption_title -->
        </div><!-- .*-caption -->
      </article>
    </div>

<?php
  endwhile;
else :
  _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
wp_reset_postdata();
?>

  </section>
</main><!-- #main -->

 <?php
 get_footer();