<?php
function register_ww_menus() {
  register_nav_menus(
    array(
      'navigation' => esc_html__( 'Primary', 'ww-theme' ),
      'artwork' => esc_html__( 'Artwork', 'ww-theme' ),
      'paintings' => esc_html__( 'Paintings', 'ww-theme' ),
      'gouache' => esc_html__( 'Gouache', 'ww-theme' ),
      'acrylic' => esc_html__( 'Acrylic', 'ww-theme' ),
      'drawing' => esc_html__( 'Drawing', 'ww-theme' ),
      'collage' => esc_html__( 'Collage', 'ww-theme' )
    )
  );
}

add_action( 'init', 'register_ww_menus' );
