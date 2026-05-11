<section class="relative overflow-hidden">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 
        bg-linear-to-b from-blue-100 via-blue-50 to-white">
    </div>
    <div class="max-w-7xl mx-auto relative z-10 py-20 px-5">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-left text-xl md:text-2xl font-bold text-black leading-tight">
                Berita Terkini UTIPD
            </h1>
            <a href="https://utipd.uinjambi.ac.id/category/berita/" class="flex items-center justify-end gap-3 italic hover:underline text-right font-medium text-black leading-tight">
                Berita lainnya 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <?php
            $news_query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
            'orderby'        => 'date',
            'order'          => 'DESC',
            ]);
        ?>

        <!-- berita -->
        <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-6">

            <?php if ($news_query->have_posts()) : ?>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

            <div class="bg-white border-2 border-gray-100 overflow-hidden transition rounded-xl">
                <div class="flex md:flex-col gap-4 p-3 md:p-5">
                    <div class="w-28 md:w-full shrink-0">
                        <?php uinjambi_post_thumbnail('medium', 'w-full h-28 md:h-48 object-cover rounded-lg'); ?>
                    </div>

                    <div class="flex flex-col gap-2">
                        <!-- Kategori -->
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                                foreach ($categories as $cat) :
                            ?>
                            <span class="text-xs font-semibold uppercase text-indigo-600">
                                <?php echo esc_html($cat->name); ?>
                            </span>
                            <?php endforeach; endif; ?>
                        </div>
                        <!-- Judul -->
                        <h2 class="text-sm/5 md:text-xl font-bold text-black line-clamp-2">
                            <a href="<?php the_permalink(); ?>" class="hover:underline">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <!-- Tanggal -->
                        <span class="text-xs/5 md:text-sm text-black">
                            <?php echo get_the_date(); ?>
                        </span>
                        <!-- Excerpt -->
                        <p class="hidden md:block text-black text-xs/5 md:text-sm leading-relaxed line-clamp-2">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>