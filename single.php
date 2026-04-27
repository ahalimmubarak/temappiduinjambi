<?php
get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php 
        // Panggil fungsi untuk menghitung view counter.
        if (function_exists('set_post_views')) { set_post_views(get_the_ID()); }
        ?>

        <article id="post-<?php the_ID(); ?>">
            <div class="flex-row mx-auto py-5 px-5 bg-white">

                <!-- breadcrumb -->
                <div class="max-w-7xl mx-auto sm:px-5">
                    <div class="p-2 text-sm font-medium bg-gray-100 border-b border-b-gray-300 rounded-xl">
                        <?php get_template_part('template-parts/breadcrumb'); ?>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-6 gap-8 py-6 sm:px-5">

                    <main class="md:col-span-4">

                        <!-- Judul -->
                        <h1 class="text-2xl md:text-3xl/snug font-bold text-black mb-6">
                            <?php the_title(); ?>
                        </h1>

                        <!-- Meta -->
                        <div class="mb-6 text-sm font-medium text-black flex items-center justify-between flex-wrap gap-2">
                            <div class="flex items-center justify-start flex-wrap gap-2">
                                <span class="flex items-center py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                    </svg>
                                    <?php echo get_the_category_list(', '); ?>
                                </span>
                                <span class="flex items-center py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <?php the_author_posts_link(); ?>
                                </span>
                                <span class="flex items-center py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('l, j F Y'); ?></time>
                                </span>
                                <span class="flex items-center py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <?php if(function_exists('get_reading_time')) { echo get_reading_time(); } ?>
                                </span>
                                <span class="flex items-center py-1 px-2 bg-gray-100 border-b border-b-gray-300 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <?php if(function_exists('get_post_views')) { echo get_post_views(get_the_ID()) . ' kali dilihat'; } ?>
                                </span>
                            </div>

                            <span class="flex items-center justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                                </svg>
                                <div class="flex justify-center items-center">
                                    <!-- Facebook -->
                                    <a data-base="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" rel="noopener noreferrer" class="share-link p-2 bg-blue-600 hover:bg-blue-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/>
                                        </svg>
                                    </a>

                                    <!-- WhatsApp -->
                                    <a data-base="https://api.whatsapp.com/send?text=" target="_blank" rel="noopener noreferrer" class="share-link p-2 bg-green-500 hover:bg-green-600 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/>
                                        </svg>
                                    </a>

                                    <!-- Telegram -->
                                    <a data-base="https://t.me/share/url?url=" target="_blank" rel="noopener noreferrer" class="share-link p-2 bg-sky-500 hover:bg-sky-600 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19c-.14.75-.42 1-.68 1.03c-.58.05-1.02-.38-1.58-.75c-.88-.58-1.38-.94-2.23-1.5c-.99-.65-.35-1.01.22-1.59c.15-.15 2.71-2.48 2.76-2.69a.2.2 0 0 0-.05-.18c-.06-.05-.14-.03-.21-.02c-.09.02-1.49.95-4.22 2.79c-.4.27-.76.41-1.08.4c-.36-.01-1.04-.2-1.55-.37c-.63-.2-1.12-.31-1.08-.66c.02-.18.27-.36.74-.55c2.92-1.27 4.86-2.11 5.83-2.51c2.78-1.16 3.35-1.36 3.73-1.36c.08 0 .27.02.39.12c.1.08.13.19.14.27c-.01.06.01.24 0 .38"/>
                                        </svg>
                                    </a>

                                    <!-- Threads -->
                                    <a data-base="https://threads.net/intent/post?url=" target="_blank" rel="noopener noreferrer" class="share-link p-2 bg-gray-900 hover:bg-gray-700 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M16.705 11.108c-.162-2.987-1.794-4.697-4.534-4.714c-1.652-.01-3.033.69-3.879 1.973L9.8 9.4c.634-.961 1.635-1.16 2.36-1.153c.903.006 1.583.268 2.024.78c.32.372.535.887.642 1.536q-1.202-.204-2.59-.125c-2.606.15-4.28 1.67-4.168 3.781c.057 1.071.59 1.993 1.502 2.595c.77.509 1.764.757 2.795.701c1.363-.075 2.432-.594 3.178-1.545c.566-.722.924-1.658 1.082-2.836c.65.392 1.13.907 1.397 1.527c.452 1.054.478 2.786-.935 4.198c-1.238 1.236-2.726 1.772-4.975 1.788c-2.495-.018-4.382-.819-5.608-2.378c-1.15-1.46-1.743-3.57-1.765-6.269c.022-2.7.616-4.809 1.765-6.27c1.226-1.559 3.113-2.359 5.608-2.377c2.513.019 4.432.822 5.706 2.39c.625.768 1.095 1.734 1.406 2.86l1.766-.47c-.377-1.387-.969-2.582-1.774-3.573c-1.633-2.01-4.033-3.039-7.11-3.06c-3.071.021-5.432 1.055-7.019 3.071c-1.411 1.795-2.14 4.306-2.164 7.436c.024 3.13.753 5.627 2.164 7.422c1.587 2.016 3.96 3.05 7.03 3.071c2.731-.019 4.655-.734 6.24-2.317c2.075-2.073 2.012-4.67 1.329-6.264c-.525-1.225-1.57-2.206-2.98-2.81m-4.438 4.557c-1.142.064-2.328-.448-2.387-1.546c-.043-.814.58-1.722 2.457-1.83a9.4 9.4 0 0 1 2.533.174c-.216 2.702-1.485 3.14-2.603 3.202"/>
                                        </svg>
                                    </a>

                                    <!-- Print -->
                                    <button onclick="window.print()" class="p-2 bg-gray-400 hover:bg-gray-500 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M20 3v5h-3V5h-1V4H7v4H4V1h14v1h1v1zM1 9v8h3v6h16v-6h3V9zm16 11H7v-4h10zm1-8h2v1h-2z"/>
                                        </svg>
                                    </button>
                                </div>
                                
                            </span>

                        </div>

                        <!-- Gambar Andalan -->
                        <div class="max-w-none mx-auto mb-5">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <figure class="overflow-hidden">
                                    <img 
                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
                                        alt="<?php the_title_attribute(); ?>" 
                                        class="w-full h-50 sm:h-75 md:h-100 lg:h-100 object-cover cursor-zoom-in rounded-xl"
                                        onclick="openImageModal(this.src)"
                                    >
                                </figure>
                                <!-- Modal -->
                                <div id="imageModal" class="fixed inset-0 bg-black/80 hidden items-center justify-center z-70" onclick="closeImageModal()">
                                    <img id="modalImg" src="" class="max-w-[95%] max-h-[95%] shadow-lg">
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Konten Artikel -->
                        <div class="max-w-none mx-auto text-black prose">

                            <?php the_content(); ?>

                        </div>

                        <!-- Tags -->
                        <div class="mt-8 pt-6 border-t border-gray-300">
                            <?php
                            $tags = get_the_tags();

                            // Cek apakah ada tag
                            if ( $tags ) {
                                ?>
                                    <div class="flex flex-col lg:flex-row gap-2">
                                        <div class="flex flex-row gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 shrink-0 text-black">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                            </svg>
                                            <span class="font-bold text-black">Tags:</span>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-2">
                                            <?php
                                                // Looping untuk setiap tag
                                                foreach ( $tags as $tag ) {
                                                    $tag_link = get_tag_link( $tag->term_id );
                                                    printf(
                                                        '<a href="%s" class="bg-gray-100 hover:bg-gray-200 text-black text-sm font-medium px-3 py-1 rounded-full transition-colors duration-200">%s</a>',
                                                        esc_url( $tag_link ),
                                                        esc_html( $tag->name )
                                                    );
                                                }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                            }
                            ?>
                        </div>

                        <!-- Author Box -->
                        <div class="mx-auto overflow-hidden mt-12 p-6 bg-gray-50 border border-gray-300 flex items-start space-x-4 rounded-xl">
                            <div class="md:flex">
                                <div class="flex justify-center md:justify-start md:shrink-0">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 80, '', '', array('class' => 'rounded-full') ); ?>
                                </div>
                                <div class="ml-0 sm:ml-4 mt-4 sm:mt-0 text-center sm:text-left">
                                    <h4 class="text-lg font-bold text-black"><?php the_author(); ?></h4>
                                    <p class="text-sm text-black mt-1"><?php the_author_meta( 'description' ); ?></p>
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="text-sm font-semibold text-secondary mt-2 inline-block">
                                        Lihat semua artikel &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Navigasi Next & Previous Post -->
                        <div class="mt-12 flex justify-between items-center border-t border-gray-200 pt-6">
                            <div class="prev-post text-left">
                                <?php previous_post_link(
                                    '<span class="block text-sm text-black mb-2">← Sebelumnya</span> <span class="text-lg font-medium text-secondary hover:underline">%link</span>'
                                ); ?>
                            </div>
                            <div class="next-post text-right">
                                <?php next_post_link(
                                    '<span class="block text-sm text-black mb-2">Selanjutnya →</span> <span class="text-lg font-medium text-secondary hover:underline">%link</span>'
                                ); ?>
                            </div>
                        </div>

                        <!-- Komentar -->
                        <div class="max-w-none mx-auto text-black">
                            <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        </div>
                    </main>

                    <aside class="md:col-span-2 mb-8">
                        <div class="sticky md:top-10 z-0">
                            <div class="flex items-center justify-between">
                                <?php
                                    $berita_link = home_url('/category/berita');
                                ?>
                                <div class="flex items-center justify-between w-full mb-4">
                                    <h2 class="text-lg font-bold text-black">Berita Terbaru</h2>
                                    <a href="<?php echo esc_url($berita_link); ?>" 
                                        class="flex gap-1 items-center text-sm text-black hover:text-secondary italic hover:underline">
                                        Lihat semua
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <?php
                                $recent_posts = new WP_Query(array(
                                    'posts_per_page' => 5,
                                    'orderby'        => 'date',
                                    'order'          => 'DESC'
                                ));

                                if ($recent_posts->have_posts()) :
                                    echo '<ul class="divide-y divide-gray-300">';
                                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                ?>
                                    <li class="flex items-start gap-4 py-3">
                                        <!-- thumbnail -->
                                        <a href="<?php the_permalink(); ?>" class="shrink-0 w-24 h-20 overflow-hidden rounded-md bg-gray-100">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array(
                                                    'class' => 'w-full h-full object-cover',
                                                    'alt'   => get_the_title()
                                                )); ?>
                                            <?php else : ?>
                                                <div class="w-32 h-24 shrink-0">
                                                    <?php uinjambi_post_thumbnail('medium', 'object-cover rounded-xl'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </a>

                                        <!-- judul dan tanggal -->
                                        <div class="flex flex-col flex-1 min-w-0">
                                            <div class="text-xs capitalize text-black tracking-wide mb-1">
                                                <?php echo strip_tags(get_the_category_list(', ')); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="line-clamp-2 text-base leading-normal font-semibold text-black hover:text-secondary hover:underline">
                                                <?php the_title(); ?>
                                            </a>
                                            <span class="text-sm mt-2 text-black">
                                                <?php echo get_the_date('l, j F Y'); ?>
                                            </span>
                                        </div>
                                    </li>
                                <?php
                                    endwhile;
                                    echo '</ul>';
                                endif;

                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </aside>

                </div>
            </div>
        </article>

    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>