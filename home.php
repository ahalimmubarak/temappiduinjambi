<?php
get_header();
?>

<!-- hero -->
<section class="mx-auto max-w-full overflow-hidden" id="slider">
    <div class="flex mx-auto max-w-full transition-transform duration-500 ease-in-out" id="slider-track">
        
        <!-- slide 1 -->
        <div class="relative min-w-full overflow-hidden">

            <!-- Background Image -->
            <div class="absolute inset-0 
                bg-[url('https://ppid.uinjambi.ac.id/wp-content/uploads/2026/03/Screenshot-2026-03-02-020056.png')] 
                bg-cover bg-bottom bg-no-repeat bg-white">
            </div>

            <!-- <video autoplay muted loop playsinline
                class="absolute inset-0 w-full h-full object-cover">
                <source src="http://ppid.test/wp-content/uploads/2026/03/Video-tanpa-judul.mp4" type="video/mp4">
            </video> -->

            <!-- Gradient Overlay -->
            <!-- <div class="absolute inset-0 bg-white/20">
            </div> -->

            <div class="relative z-10 mx-auto flex items-center justify-between h-[50vh] md:h-[70vh] px-5">
                <div class="flex flex-col items-center text-center">
                    <h1 class="sm:text-5xl text-3xl mb-4 font-extrabold leading-tight text-black">Selamat Datang di
                        <br><span class="tracking-tight text-transparent bg-clip-text bg-linear-to-r from-primary to-blue-300">Portal PPID UIN Jambi</span>
                    </h1>
                    <p class="mb-8 text-black font-medium text-sm md:text-base xl:px-80">Layanan ini merupakan sarana layanan bagi pemohon
                        informasi publik sebagai salah satu wujud pelaksanaan keterbukaan informasi 
                        publik di UIN Sulthan Thaha Saifuddin Jambi.
                    </p>
                    <div class="flex justify-center">
                        <a href="https://ppid.uinjambi.ac.id/permohonan-informasi/"
                            class="inline-flex text-white font-medium bg-primary2 border-2 border-primary2 py-2 px-4 md:py-4 md:px-6 focus:outline-none hover:bg-primary hover:border-primary transition cursor-pointer rounded-xl">Permohonan
                            Informasi</a>
                        <a href="https://ppid.uinjambi.ac.id/regulasi/"
                            class="ml-4 inline-flex text-black hover:text-white font-medium border-2 border-gray-800 py-2 px-4 md:py-4 md:px-6 focus:outline-none hover:border-primary2 hover:bg-primary2 transition cursor-pointer rounded-xl">Regulasi</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide 2 -->
        <div class="relative min-w-full overflow-hidden">

            <!-- Background Image -->
            <div class="absolute inset-0 
                bg-[url('https://ppid.uinjambi.ac.id/wp-content/uploads/2026/02/Abstract-Modern-Shapes-Background-04-scaled.png')] 
                bg-cover bg-bottom bg-no-repeat">
            </div>

            <!-- <video autoplay muted loop playsinline
                class="absolute inset-0 w-full h-full object-cover">
                <source src="http://ppid.test/wp-content/uploads/2026/03/Video-tanpa-judul.mp4" type="video/mp4">
            </video> -->

            <!-- Gradient Overlay -->
            <!-- <div class="absolute inset-0 bg-white">
            </div> -->

            <div class="relative z-10 mx-auto flex items-center justify-between h-[50vh] md:h-[70vh] px-5">
                <div class="flex flex-col items-center text-center">
                    <h1 class="sm:text-5xl text-3xl mb-4 font-extrabold leading-tight text-black">
                        Maklumat Pelayanan
                        <br><span class="tracking-tight text-transparent bg-clip-text bg-linear-to-r from-primary to-blue-300">Informasi Publik</span>
                    </h1>
                    <p class="mb-8 text-black font-medium text-sm md:text-base xl:px-80">Dengan ini kami menyatakan siap memberikan pelayanan publik secara cepat,
                        tepat waktu, berbiaya ringan, dan cara sederhana sesuai dengan ketentuan undang-undang nomor 14 tahun 2008 tentang keterbukaan informasi publik
                        <br><br>Ttd
                        <br>Pejabat Pengelola Informasi dan Dokumentasi UIN Sulthan Thaha Saifuddin Jambi
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- BUTTON PREV -->
    <button id="prev-hero"
            class="absolute left-5 2xl:left-35 top-[35%] md:top-[45%] -translate-y-1/2 bg-primary hover:bg-primary2 text-white w-10 h-10 rounded-xl shadow flex items-center justify-center transition cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- BUTTON NEXT -->
    <button id="next-hero"
            class="absolute right-5 2xl:right-35 top-[35%] md:top-[45%] -translate-y-1/2 bg-primary hover:bg-primary2 text-white w-10 h-10 rounded-xl shadow flex items-center justify-center transition cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </button>

</section>

<!-- quick link -->
<section class="relative z-20 mx-auto max-w-full bg-gray-50">
    <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-5 p-5">

        <!-- permohonan -->
        <div class="group relative flex h-full rounded-xl bg-white p-3 md:p-8 flex-col items-center text-center transition overflow-hidden">
            <div class="w-17 h-17 mb-3 inline-flex items-center justify-center rounded-full bg-linear-to-r from-teal-600 to-teal-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            <h2 class="text-black text-sm/5 md:text-lg/6 font-semibold">
                Permohonan Informasi Publik
            </h2>
            <a href="https://ppid.uinjambi.ac.id/permohonan-informasi-publik/"
                class="mt-2 text-xs md:text-base text-white inline-flex gap-2 items-center cursor-pointer
                bg-primary2 border-2 border-primary2 py-2 px-3 md:py-4 md:px-6 rounded-lg md:rounded-xl

                md:absolute md:bottom-6
                md:translate-y-22
                md:group-hover:translate-y-0

                transition-all duration-300 ease-out
                hover:bg-primary hover:border-primary">
                Ajukan Permhonan
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 hidden md:block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <!-- pengajuan keberatan -->
        <div class="group relative flex h-full rounded-xl bg-white p-3 md:p-8 flex-col items-center text-center transition overflow-hidden">
            <div class="w-17 h-17 mb-3 inline-flex items-center justify-center rounded-full bg-linear-to-r from-[#ff9c02] to-[#ffcb76] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                </svg>
            </div>
            <h2 class="text-black text-sm/5 md:text-lg/6 font-semibold">
                Pengajuan Keberatan Informasi Publik
            </h2>
            <a href="https://ppid.uinjambi.ac.id/pengajuan-keberatan-informasi-publik/"
                class="mt-2 text-xs md:text-base text-white inline-flex gap-2 items-center cursor-pointer
                bg-primary2 border-2 border-primary2 py-2 px-3 md:py-4 md:px-6 rounded-lg md:rounded-xl

                md:absolute md:bottom-6
                md:translate-y-22
                md:group-hover:translate-y-0

                transition-all duration-300 ease-out
                hover:bg-primary hover:border-primary">
                Ajukan Permohonan
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 hidden md:block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <!-- pengaduan -->
        <div class="group relative flex h-full rounded-xl bg-white p-3 md:p-8 flex-col items-center text-center transition overflow-hidden">
            <div class="w-17 h-17 mb-3 inline-flex items-center justify-center rounded-full bg-linear-to-r from-indigo-500 to-indigo-400 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <h2 class="text-black text-sm/5 md:text-lg/6 font-semibold">
                Pengaduan Penyalahgunaan
            </h2>
            <a href="https://ppid.uinjambi.ac.id/pengaduan-masyarakat/"
                class="mt-2 text-xs md:text-base text-white inline-flex gap-2 items-center cursor-pointer
                bg-primary2 border-2 border-primary2 py-2 px-3 md:py-4 md:px-6 rounded-lg md:rounded-xl

                md:absolute md:bottom-6
                md:translate-y-22
                md:group-hover:translate-y-0

                transition-all duration-300 ease-out
                hover:bg-primary hover:border-primary">
                Ajukan Permohonan
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 hidden md:block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <!-- survey kepuasan -->
        <div class="group relative flex h-full rounded-xl bg-white p-3 md:p-8 flex-col items-center text-center transition overflow-hidden">
            <div class="w-17 h-17 mb-3 inline-flex items-center justify-center rounded-full bg-linear-to-r from-pink-500 to-pink-400 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
            </div>
            <h2 class="text-black text-sm/5 md:text-lg/6 font-semibold">
                Survei Kepuasan Masyarakat
            </h2>
            <a href="https://ppid.uinjambi.ac.id/survei-kepuasan-masyarakat/"
                class="mt-2 text-xs md:text-base text-white inline-flex gap-2 items-center cursor-pointer
                bg-primary2 border-2 border-primary2 py-2 px-3 md:py-4 md:px-6 rounded-lg md:rounded-xl

                md:absolute md:bottom-6
                md:translate-y-22
                md:group-hover:translate-y-0

                transition-all duration-300 ease-out
                hover:bg-primary hover:border-primary">
                Ajukan Permohonan
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 hidden md:block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

    </div>
</section>

<!-- news -->
<section class="relative overflow-hidden">
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 
        bg-linear-to-b from-blue-100 via-blue-50 to-white">
    </div>
    <div class="max-w-7xl mx-auto relative z-10 py-20 px-5">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-left text-xl md:text-2xl font-bold text-black leading-tight">
                Berita PPID UIN Jambi
            </h1>
            <a href="https://ppid.uinjambi.ac.id/category/berita/" class="flex items-center justify-end gap-3 italic hover:underline text-right font-medium text-black leading-tight">
                Baca berita lainnya 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <?php
        $news_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 6,
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

<!-- news 2 -->
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

<?php get_footer(); ?>