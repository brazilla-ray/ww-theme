<?php

function wwa_archive_menu( $menu ) {
  wp_nav_menu( array(
    'menu'            => $menu,
    'container'       => 'nav',
    'container_class' => 'artwork-navigation',
    'menu_class'      => 'artwork-menu',
    'add_li_class'    => 'artwork-menu__item'
  ) );
}
// add_filter( 'wp_nav_menu_args', 'wwa_conditional_menus' );