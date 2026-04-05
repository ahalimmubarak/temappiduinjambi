<?php
/*
Template Name: Daftar Isi
*/
get_header();
?>

<div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8 mb-4" x-data="{ openCategory: null, openYear: null }">
    <h1 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-gray-100">
        Daftar Isi Postingan
    </h1>

    <?php
    $categories = get_categories([
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => true
    ]);

    foreach ($categories as $cat_index => $category) :
    ?>
        <!-- Kategori -->
        <div class="mb-4 border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
            <button 
                class="w-full flex justify-between items-center px-4 py-3 bg-gray-100 dark:bg-gray-800 text-left text-gray-900 dark:text-gray-100 font-medium hover:bg-gray-200 dark:hover:bg-gray-700"
                @click="openCategory = (openCategory === <?= $cat_index ?> ? null : <?= $cat_index ?>)"
            >
                <span><?= esc_html($category->name); ?></span>
                <svg x-show="openCategory !== <?= $cat_index ?>" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                <svg x-show="openCategory === <?= $cat_index ?>" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </button>

            <div x-show="openCategory === <?= $cat_index ?>" class="divide-y divide-gray-200 dark:divide-gray-700">
                <?php
                global $wpdb;
                $years = $wpdb->get_col("
                    SELECT DISTINCT YEAR(post_date) 
                    FROM $wpdb->posts 
                    WHERE post_status = 'publish' 
                      AND post_type = 'post' 
                      AND ID IN (
                          SELECT object_id 
                          FROM $wpdb->term_relationships 
                          WHERE term_taxonomy_id = $category->term_id
                      )
                    ORDER BY post_date DESC
                ");

                foreach ($years as $year_index => $year) :
                ?>
                    <!-- Tahun -->
                    <div x-data="{ openYearInner: null }">
                        <button 
                            class="w-full flex justify-between items-center px-4 py-2 bg-gray-50 dark:bg-gray-900 text-left text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800"
                            @click="openYear = (openYear === '<?= $cat_index . '-' . $year ?>' ? null : '<?= $cat_index . '-' . $year ?>')"
                        >
                            <span><?= $year; ?></span>
                            <svg x-show="openYear !== '<?= $cat_index . '-' . $year ?>'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            <svg x-show="openYear === '<?= $cat_index . '-' . $year ?>'" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>

                        <!-- List Post -->
                        <div x-show="openYear === '<?= $cat_index . '-' . $year ?>'" class="px-6 py-3 bg-white dark:bg-gray-900">
                            <ul class="space-y-1 border-l border-gray-300 dark:border-gray-600 pl-4">
                                <?php
                                $posts = get_posts([
                                    'category'       => $category->term_id,
                                    'posts_per_page' => -1,
                                    'orderby'        => 'date',
                                    'order'          => 'DESC',
                                    'year'           => $year
                                ]);

                                foreach ($posts as $post) :
                                    setup_postdata($post);
                                ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" class="text-blue-600 dark:text-blue-400 hover:underline">
                                            <?php the_title(); ?>
                                        </a>
                                        <span class="text-gray-500 dark:text-gray-400 text-sm">
                                            (<?php echo get_the_date(); ?>)
                                        </span>
                                    </li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Alpine.js CDN -->
<script src="//unpkg.com/alpinejs" defer></script>

<?php get_footer(); ?>