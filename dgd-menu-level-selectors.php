<?php
/**
* Plugin Name: Menu Level CSS Selectors
* Plugin URI: https://www.dogood.design/
* Description: Adds css classes to menu items based on hierarchy, for easier styling.
* Version: 1.0
* Author: John Natoli
* Author URI: http://dogood.design/
**/

function dgd_menu_level_classes ( $classes, $item, $args, $depth ) {
  $classes[] = 'menu-item-level-' . ( $depth + 1 );
  return $classes;
}
add_filter( 'nav_menu_css_class', 'dgd_menu_level_classes', 10, 4 );