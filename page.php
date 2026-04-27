<?php
/**
 * Template untuk menampilkan satu halaman (page).
 * Versi tanpa komentar, meta deskripsi, dan navigasi next/previous.
 */

get_header();
?>

<!-- <?php get_template_part( 'template-parts/gambar-top' ); ?> -->

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="bg-white py-5 px-5">
            <div class="max-w-7xl mx-auto sm:px-5">

                <!-- Header Halaman -->
                <header class="mb-8 text-left">

                    <!-- Judul -->
                    <h1 class="text-2xl md:text-3xl/snug font-bold text-gray-900 leading-tight pl-5 border-l-8 border-l-primary">
                        <?php the_title(); ?>
                    </h1>

                </header>

                <!-- Gambar Andalan -->
                <!-- <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="mb-8 rounded-lg overflow-hidden shadow-lg">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-auto object-cover')); ?>
                    </figure>
                <?php endif; ?> -->

                <!-- Konten Halaman -->
                <div class="max-w-none mx-auto text-gray-900 prose">
                    <?php the_content(); ?>
                </div>

                <!-- Tags (opsional, bisa dihapus kalau nggak mau) -->
                <?php
                $tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'blognews' ) );
                if ( $tags_list ) {
                    printf(
                        '<div class="mt-8 pt-6 border-t border-gray-200"><span class="font-bold">Tags:</span> %s</div>',
                        $tags_list
                    );
                }
                ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>