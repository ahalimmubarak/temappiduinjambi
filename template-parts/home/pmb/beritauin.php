<section class="bg-white">
    <div class="max-w-7xl mx-auto py-20 px-5">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-left text-xl md:text-2xl font-bold text-black leading-tight">
                Berita UIN Sulthan Thaha Saifuddin Jambi
            </h1>
            <a href="https://uinjambi.ac.id/category/berita/" class="flex items-center justify-end gap-3 italic hover:underline text-right font-medium text-black leading-tight">
                Baca berita lainnya 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <?php $posts = uinjambi_get_remote_posts(6); ?>

        <!-- berita uin jambi -->
        <div class="lg:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-6">
            <?php if (!empty($posts)) : ?>
                <?php foreach ($posts as $item) : ?>
                    <?php
                        $title   = $item->title->rendered ?? '';
                        $link    = $item->link ?? '#';
                        $date    = !empty($item->date) ? date_i18n('d F Y', strtotime($item->date)) : '';
                        $excerpt = !empty($item->excerpt->rendered) ? wp_trim_words(strip_tags($item->excerpt->rendered), 18) : '';

                        $fallback_image = function_exists('uinjambi_fallback_image_url')
                            ? uinjambi_fallback_image_url()
                            : '';

                        $thumbnail = $fallback_image;
                        if (!empty($item->_embedded->{'wp:featuredmedia'}[0]->source_url)) {
                            $thumbnail = $item->_embedded->{'wp:featuredmedia'}[0]->source_url;
                        }

                        $category = '';
                        if (!empty($item->_embedded->{'wp:term'}[0][0]->name)) {
                            $category = $item->_embedded->{'wp:term'}[0][0]->name;
                        }
                    ?>

                    <div class="bg-white border-2 border-gray-100 overflow-hidden transition rounded-xl">
                        <div class="flex md:flex-col gap-4 p-3 md:p-5">
                            <div class="w-28 md:w-full shrink-0">
                                <img src="<?= esc_url($thumbnail); ?>" 
                                    loading="lazy"
                                    class="w-full h-28 md:h-48 object-cover rounded-lg" 
                                    alt="<?= esc_attr($title); ?>"
                                >
                            </div>

                            <div class="flex flex-col gap-2">
                                <?php if ($category) : ?>
                                <span class="text-xs font-semibold uppercase text-indigo-600">
                                    <?= esc_html($category); ?>
                                </span>
                                <?php endif; ?>

                                <h2 class="text-sm/5 md:text-xl font-bold text-black line-clamp-2">
                                    <a href="<?= esc_url($link); ?>" target="_blank" rel="noopener noreferrer" class="hover:underline">
                                        <?= esc_html($title); ?>
                                    </a>
                                </h2>

                                <span class="text-xs/5 md:text-sm text-black">
                                    <?= esc_html($date); ?>
                                </span>

                                <p class="hidden md:block text-black text-xs/5 md:text-sm leading-relaxed line-clamp-2">
                                    <?= esc_html($excerpt); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else : ?>
                <p class="col-span-1 md:col-span-3 text-center text-gray-500">
                    Belum ada berita tersedia.
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>