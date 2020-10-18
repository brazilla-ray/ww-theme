<section class="main-section">
  <?php if ( !( is_page( 'about' ) || is_singular() ) ) : ?>
  <header class="main-section-title">
    <h2 class="main-section-title__heading">
      <?php echo $args['sectionTitle']; ?>
    </h2>
  <?php endif;
  if ( is_post_type_archive( 'wwa_artwork' ) ) :
    wp_nav_menu( 
      array( 
        'menu' => 'artwork',
        'container' => 'nav',
        'container_class' => 'artwork-navigation',
        'menu_class' => 'artwork-menu',
        'add_li_class' => 'artwork-menu__item'
        ) 
      ); elseif ( is_tax( 'wwa_type', 'painting' ) ) :
          wp_nav_menu(
            array(
              'menu' => 'paintings',
              'container' => 'nav',
              'container_class' => 'artwork-navigation',
              'menu_class' => 'artwork-menu',
              'add_li_class' => 'artwork-menu__item'
              )
            ); elseif ( 
              ( is_tax( 'wwa_type', 'gouache' ) ) || 
              ( is_tax( 'wwa_type', 'acrylic' ) ) ) :
                wp_nav_menu(
                  array(
                    'menu' => 'paintings_sub',
                    'container' => 'nav',
                    'container_class' => 'artwork-navigation',
                    'menu_class' => 'artwork-menu',
                    'add_li_class' => 'artwork-menu__item'
                    )
                  ); elseif ( 
                    ( is_tax( 'wwa_type', 'collage' ) ) || 
                    ( is_tax( 'wwa_type', 'drawing' ) ) ) :
                      wp_nav_menu(
                        array(
                          'menu' => 'other',
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
        get_template_part( 'template-parts/content', $args['templatePart'] );
      endwhile;
    ?>
  </div><!--- main-section__content -->
</section><!-- main-section -->