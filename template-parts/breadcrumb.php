<?php
if (!defined('ABSPATH')) exit;

$home_url = home_url('/');
$categories = get_the_category();
$separator_icon = '<svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-black mx-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>';

echo '<div class="w-full overflow-x-auto">';
echo '<nav class="flex items-center text-sm text-black" aria-label="Breadcrumb">';
echo '<ol class="flex items-center">';

// Home
echo '<li class="flex items-center shrink-0">';
echo '<a href="' . esc_url($home_url) . '" class="flex items-center hover:text-blue-600 transition-colors">';
echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>';
echo 'Beranda</a></li>';

// Kategori bertingkat
if (!empty($categories)) {
    $main_cat = $categories[0];
    $parents = array_reverse(get_ancestors($main_cat->term_id, 'category'));

    foreach ($parents as $parent_id) {
        $parent = get_category($parent_id);
        echo '<li class="flex items-center shrink-0">' . $separator_icon .
             '<a href="' . esc_url(get_category_link($parent->term_id)) . '" class="hover:text-blue-600 transition-colors">' . esc_html($parent->name) . '</a></li>';
    }

    echo '<li class="flex items-center shrink-0">' . $separator_icon .
         '<a href="' . esc_url(get_category_link($main_cat->term_id)) . '" class="hover:text-blue-600 transition-colors">' . esc_html($main_cat->name) . '</a></li>';
}

    // Judul artikel (truncate di mobile)
    echo '<li class="flex items-center min-w-0">' . $separator_icon .
     '<span class="truncate max-w-50 sm:max-w-full text-black">' . get_the_title() . '</span></li>';

echo '</ol>';
echo '</nav>';
echo '</div>';
?>