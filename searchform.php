<?php
/**
 * Template untuk menampilkan form pencarian kustom.
 */
?>
<form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-form-input" class="sr-only"><?php _e( 'Cari:', 'mynewstheme' ); ?></label>
    <input
        type="search"
        id="search-form-input"
        class="block w-full px-4 py-3 text-base text-gray-900 bg-gray-100 border border-transparent rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
        placeholder="<?php esc_attr_e( 'Ketik untuk mencari artikel...', 'mynewstheme' ); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
        title="<?php esc_attr_e( 'Ketik untuk mencari', 'mynewstheme' ); ?>"
    >
    <button type="submit" class="cursor-pointer absolute top-0 right-0 p-3.5 text-sm font-medium text-white bg-primary2 rounded-r-lg border border-secondary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only"><?php _e( 'Cari', 'mynewstheme' ); ?></span>
    </button>
</form>
