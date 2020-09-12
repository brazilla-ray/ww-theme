<section class="main-section">
  <?php if ( !( is_page( 'about' ) ) ) : ?>
  <header class="main-section-title">
    <h2 class="main-section-title__heading">
      <?php echo $args['sectionTitle']; ?>
    </h2>
  <?php endif;
  if ( is_post_type_archive( 'wwa_artwork' ) ) :
    wp_nav_menu( 
      array( 
        'ww-theme' => 'artwork',
        'container' => 'nav',
        'container_class' => 'artwork-navigation',
        'menu_class' => 'artwork-menu',
        'add_li_class' => 'artwork-menu__item'
        ) 
      );
    endif; 
  ?>
  </header><!-- main-section__header -->
 

  <div class="main-section-content"> 
    <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', $args[templatePart] );
      endwhile;
    ?>
  </div><!--- main-section__content -->
</section><!-- main-section -->