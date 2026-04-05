<?php
if (!defined('ABSPATH')) exit; // keamanan

$home_url = home_url('/');
$separator_icon = '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-black mx-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>';

echo '<div class="w-full overflow-x-auto scroll-pl-6 snap-x snap-mandatory">';
echo '<nav class="flex items-center text-sm text-black sm:px-6 lg:px-0" aria-label="Breadcrumb">';
echo '<ol class="flex items-center">';

// Home
echo '<li class="flex items-center shrink-0 snap-start">';
echo '<a href="' . esc_url($home_url) . '" class="flex items-center hover:text-blue-600 transition-colors">';
echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 mr-2">
  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>';
echo 'Beranda</a></li>';

// Kalau archive kategori
if (is_category()) {
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black">Category</span></li>';

    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black font-medium">' . single_cat_title('', false) . '</span></li>';
}

// Kalau archive tag
elseif (is_tag()) {
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black">Tag</span></li>';

    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black font-medium">' . single_tag_title('', false) . '</span></li>';
}

// Kalau archive author
elseif (is_author()) {
    $author = get_queried_object();
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black">Penulis</span></li>';

    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black font-medium">' . esc_html($author->display_name) . '</span></li>';
}

// Kalau archive tanggal
elseif (is_date()) {
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black">Arsip</span></li>';

    if (is_day()) {
        echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
             '<span class="text-black font-medium">' . get_the_date('j F Y') . '</span></li>';
    } elseif (is_month()) {
        echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
             '<span class="text-black font-medium">' . get_the_date('F Y') . '</span></li>';
    } elseif (is_year()) {
        echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
             '<span class="text-black font-medium">' . get_the_date('Y') . '</span></li>';
    }
}

// Kalau archive custom post type (misal: event)
elseif (is_post_type_archive()) {
    $post_type_obj = get_post_type_object(get_post_type());
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black font-medium">' . esc_html($post_type_obj->labels->name) . '</span></li>';
}

// Default fallback
else {
    echo '<li class="flex items-center shrink-0 snap-start">' . $separator_icon .
         '<span class="text-black font-medium">' . post_type_archive_title('', false) . '</span></li>';
}

echo '</ol>';
echo '</nav>';
echo '</div>';
?>