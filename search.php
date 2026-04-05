<?php
/**
 * Template untuk menampilkan hasil pencarian.
 */

get_header();
?>

<div class="container mx-auto max-w-7xl px-5 sm:px-6 lg:px-8 py-8 md:py-12 shadow bg-white">

    <!-- Header Halaman Pencarian -->
    <header class="mb-12 pb-6 border-b border-gray-200">
        <h1 class="text-2xl font-semibold text-gray-900">
            <?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Hasil pencarian untuk: %s', 'mynewstheme' ), '<span class="text-blue-600">' . get_search_query() . '</span>' );
            ?>
        </h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <!-- Grid untuk daftar artikel -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ( have_posts() ) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden flex flex-col transition-transform duration-300 hover:-translate-y-1'); ?>>
                    <!-- Gambar Andalan -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-48 object-cover')); ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php the_permalink(); ?>" class="block bg-gray-200 h-48"></a>
                    <?php endif; ?>
                    
                    <div class="p-6 flex flex-col grow">
                        <!-- Kategori -->
                        <div class="mb-2 text-xs font-semibold text-blue-600 uppercase">
                            <?php echo get_the_category_list(', '); ?>
                        </div>

                        <!-- Judul -->
                        <h2 class="text-xl font-semibold text-gray-900 grow">
                            <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <!-- Meta: Author, Tanggal, dan Waktu Baca -->
                        <div class="mt-4 pt-4 border-t border-gray-200 text-xs text-gray-500 flex items-center flex-wrap gap-x-4 gap-y-2">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <?php the_author(); ?>
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>
                                <?php if(function_exists('get_reading_time')) { echo get_reading_time(); } ?>
                            </span>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>

        <!-- Navigasi Paginasi -->
        <div class="mt-12">
            <?php
            the_posts_pagination( array(
                'prev_text' => '<span class="mr-2">&larr;</span> Sebelumnya',
                'next_text' => 'Berikutnya <span class="ml-2">&rarr;</span>',
                'screen_reader_text' => 'Navigasi post',
                'class' => 'flex justify-center items-center space-x-2'
            ) );
            ?>
        </div>

    <?php else : ?>
        
        <!-- Pesan jika tidak ada artikel -->
        <div class="text-center py-12">
            <h2 class="text-2xl font-semibold text-gray-900">Tidak Ada yang Cocok</h2>
            <p class="mt-2 text-gray-700">Maaf, tidak ada artikel yang cocok dengan kata kunci pencarian Anda. Silakan coba lagi dengan kata kunci yang berbeda.</p>
            <div class="mt-6 max-w-sm mx-auto">
                <?php get_search_form(); ?>
            </div>
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
?>