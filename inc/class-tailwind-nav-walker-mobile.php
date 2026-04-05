<?php
class Tailwind_Nav_Walker_Mobile extends Walker_Nav_Menu {

    // SUBMENU
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sub-menu hidden pl-4 mt-2 space-y-1 border-l border-gray-200">';
    }

    // MENU ITEM
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $output .= '<li class="menu-item">';

        if ($has_children) {

            $output .= '<button class="w-full flex items-center justify-between py-3 text-left hover:text-primary transition submenu-toggle">';

            $output .= '<span>';
            $output .= esc_html($item->title);
            $output .= '</span>';

            $output .= '<svg class="w-4 h-4 transition-transform duration-300 submenu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
            $output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
            $output .= '</svg>';

            $output .= '</button>';

        } else {

            $output .= '<a href="' . esc_url($item->url) . '" 
                        class="block py-3 hover:text-primary transition">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>";
    }
}