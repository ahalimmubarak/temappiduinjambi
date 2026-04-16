<?php
/**
 * Template untuk menampilkan halaman arsip (kategori, tag, author, dll).
 */
get_header();
?>

<div class="flex-row mx-auto p-5 shadow bg-white">

    <!-- breadcrumb -->
    <div class="max-w-7xl mx-auto px-2 py-2 text-sm font-medium bg-gray-100 border-b border-b-gray-300 rounded-xl">
        <?php get_template_part('template-parts/breadcrumb-archive'); ?>
    </div>

    <!-- Header Arsip -->
    <header class="max-w-7xl mx-auto border-b border-gray-300 mb-10 py-5">
        <?php
            the_archive_title('<h1 class="text-3xl font-semibold text-black">', '</h1>');
            the_archive_description('<div class="mt-2 text-black text-base">', '</div>');
        ?>
    </header>

    <!-- content -->
    <?php if (have_posts()) : ?>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-6 gap-8">

            <!-- semua archive -->
            <div class="md:col-span-4 space-y-4">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('flex gap-4 border-b border-gray-200 pb-6'); ?>>
                        
                        <!-- Thumbnail -->
                        <div class="w-32 shrink-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', ['class' => 'w-32 h-24 object-cover rounded-xl']); ?>
                                <?php else : ?>
                                    <div class="w-32 h-24 shrink-0">
                                        <?php uinjambi_post_thumbnail('medium', 'object-cover rounded-xl'); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>

                        <!-- Konten -->
                        <div class="grow">

                            <!-- Kategori -->
                            <div class="inline text-xs capitalize text-black tracking-wide mb-2 py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                <?php echo strip_tags(get_the_category_list(', ')); ?>
                            </div>

                            <!-- Judul -->
                            <h2 class="text-lg md:text-xl font-semibold text-black mb-1 leading-snug line-clamp-2">
                                <a href="<?php the_permalink(); ?>" 
                                class="hover:text-secondary transition-colors">
                                <?php the_title(); ?>
                                </a>
                            </h2>

                            <!-- Tanggal -->
                            <div class="text-xs text-black">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('l, j F Y'); ?></time>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="mt-10">
                    <?php
                    the_posts_pagination([
                    'prev_text' => '← Sebelumnya',
                    'next_text' => 'Berikutnya →',
                    'screen_reader_text' => 'Navigasi halaman',
                    'class' => 'flex justify-center space-x-4 text-sm text-black'
                    ]);
                    ?>
                </div>
            </div>

            <!-- semua label -->
            <div class="md:col-span-2 mb-8">
                <h2 class="text-lg font-semibold mb-3 text-start">Semua Kategori & Tag</h2>
                <div class="flex flex-wrap justify-start gap-2">
                    <?php
                    // Ambil kategori
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ));

                    // Ambil tag
                    $tags = get_tags(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ));

                    $cat_colors = [
                        'bg-primary2 text-white',
                    ];

                    $tag_colors = [
                        'bg-secondary text-white',
                    ];

                    foreach ($categories as $cat) {
                        $color = $cat_colors[array_rand($cat_colors)];
                        echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '" 
                            class="px-3 py-1 rounded-full ' . $color . ' text-sm hover:opacity-90 transition">
                            ' . esc_html($cat->name) . ' (' . $cat->count . ')
                        </a>';
                    }

                    foreach ($tags as $tag) {
                        $color = $tag_colors[array_rand($tag_colors)];
                        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" 
                            class="px-3 py-1 rounded-full ' . $color . ' text-sm hover:opacity-90 transition">
                            ' . esc_html($tag->name) . ' (' . $tag->count . ')
                        </a>';
                    }            

                    ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="max-w-7xl mx-auto text-center py-10">
            <h2 class="text-xl font-bold text-black">Tidak ada artikel ditemukan</h2>
            <p class="text-black mt-2">Silakan cek kembali kategori atau tanggal yang dipilih.</p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
