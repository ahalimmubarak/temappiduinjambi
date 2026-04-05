<?php
class Tailwind_Nav_Walker extends Walker_Nav_Menu {

    // SUBMENU
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sub-menu absolute left-0 top-full z-50
        invisible opacity-0 translate-y-2
        group-hover:visible group-hover:opacity-100 group-hover:translate-y-0
        transition-all duration-300
        w-56 bg-white text-black shadow-lg rounded-md py-2">';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $li_class = $depth === 0 ? 'relative group px-1' : '';

        $output .= '<li class="'.$li_class.'">';

        $link_class = $depth === 0
            ? 'flex items-center gap-2 px-2 py-7 hover:text-white/70 transition-colors duration-200'
            : 'block px-4 py-2 text-sm hover:text-white hover:bg-primary2 transition-colors duration-200';

        $output .= '<a href="' . esc_url($item->url) . '" class="'.$link_class.'">';

        $output .= esc_html($item->title);

        if ($has_children && $depth === 0) {
            $output .= '<span class="text-xs transition-transform duration-200 group-hover:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </span>';
        }

        $output .= '</a>';
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
?>
