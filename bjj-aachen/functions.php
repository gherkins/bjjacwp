<?php

remove_action('wp_head', 'wp_generator');

register_nav_menus([
                       'primary' => 'Menu Oben',
                       'footer' => 'Menu Unten',
                   ]);

function bjjac_get_menu_items($location): array
{
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$location]);
    return wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
}