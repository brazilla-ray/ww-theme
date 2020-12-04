<?php
/**
 * Template for displaying the main content on a page.
 * 
 * @package ww-theme
 */
?>

<main id="primary" class="site-main">
  <section class="main-section">
    <header class="main-section-title">
      <h2 class="main-section-title__heading">
      <?php
        if ( ! $args['sectionTitle'] == '' ) :
          echo $args['sectionTitle'];
        else :
          echo the_title();
        endif;  
      ?>
      </h2>
      <?php
      if ( is_post_type_archive( 'wwa_artwork' ) ) :
        wwa_archive_menu( 'artwork' ); 
        elseif ( is_tax( 'wwa_type', 'painting' ) ) :
            wwa_archive_menu( 'paintings' );
            elseif ( is_tax( 'wwa_type', 'gouache') ) :
              wwa_archive_menu( 'gouache' );
              elseif ( is_tax( 'wwa_type', 'acrylic') ) :
                wwa_archive_menu( 'acrylic' );
                elseif ( is_tax( 'wwa_type', 'drawing' ) ) :
                  wwa_archive_menu( 'drawing' );
                  elseif ( is_tax( 'wwa_type', 'collage' ) ) :
                    wwa_archive_menu( 'collage' );
                    elseif ( is_tax( 'wwa_size' ) ) : 
                      wwa_archive_menu( 'artwork' );
      endif;
      ?>
    </header>
      <?php 
      // The Loop.
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content', $args['templatePart'] );
        endwhile;
      else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif;
    ?>
  </section>
</main>