<?php

require_once get_template_directory() . '/inc/class-tailwind-nav-walker.php';
require get_template_directory() . '/inc/class-tailwind-nav-walker-mobile.php';

/**
 * Fungsi utama untuk setup tema.
 * Mengaktifkan fitur-fitur WordPress.
 */
function my_news_theme_setup() {
    // Mengaktifkan fitur logo kustom
    add_theme_support( 'custom-logo' );

    // Mengaktifkan title tag otomatis
    add_theme_support( 'title-tag' );

    // Mengaktifkan featured image
    add_theme_support( 'post-thumbnails' );

    // Mendaftarkan lokasi menu navigasi
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mynewstheme' ),
        'secondary' => __( 'Secondary Menu', 'mynewstheme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_news_theme_setup' );

/**
 * Fungsi untuk memuat file CSS dan JavaScript.
 */
function my_news_theme_enqueue_assets() {
    // Memuat file CSS utama (hasil build dari Tailwind)
    wp_enqueue_style( 
        'my-news-theme-style', 
        get_template_directory_uri() . '/src/output.css' 
    );

    // Memuat file JavaScript utama
    wp_enqueue_script( 
        'my-news-theme-main-js', 
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true // Memuat di footer
    );
}
add_action( 'wp_enqueue_scripts', 'my_news_theme_enqueue_assets' );

/**
 * Mendaftarkan area widget (sidebar).
 */
function my_news_theme_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'mynewstheme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Tambahkan widget di sini untuk kolom pertama footer.', 'mynewstheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s leading-loose footer-paragraph">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title font-bold text-gray-800 mb-4">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'mynewstheme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Tambahkan widget di sini untuk kolom kedua footer.', 'mynewstheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s leading-loose footer-paragraph">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title font-bold text-gray-800 mb-4">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'mynewstheme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Tambahkan widget di sini untuk kolom ketiga footer.', 'mynewstheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s leading-loose footer-paragraph">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title font-bold text-gray-800 mb-4">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'mynewstheme' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Tambahkan widget di sini untuk kolom keempat footer.', 'mynewstheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s leading-loose footer-paragraph">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title font-bold text-gray-800 mb-4">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'my_news_theme_widgets_init' );


/**
 * FUNGSI UNTUK VIEW COUNTER
 */
function get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        if (is_user_logged_in() && current_user_can('administrator')) {
            return;
        }
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/**
 * FUNGSI UNTUK ESTIMASI WAKTU BACA
 */
function get_reading_time() {
    global $post;
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = ceil($word_count / 200);

    if ($reading_time <= 1) {
        $timer = "1 menit baca";
    } else {
        $timer = $reading_time . " menit baca";
    }
    return $timer;
}

/**
 * Mengubah panjang default excerpt.
 *
 * @param int $length Panjang excerpt default.
 * @return int Panjang excerpt yang baru.
 */
function custom_excerpt_length( $length ) {
    return 15; // Ubah angka ini sesuai keinginan
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more( $more ) {
    return ''; // Dikosongkan untuk menghapus [...]
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

/**
 * bikin field baru Slogan Kedua di Customizer → Identitas Situs
 */

function theme_customize_register( $wp_customize ) {
    // Tambah field untuk Slogan Kedua
    $wp_customize->add_setting( 'second_tagline', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'second_tagline', array(
        'label'    => __( 'Slogan 2', 'yourtheme' ),
        'section'  => 'title_tagline',
        'settings' => 'second_tagline',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'theme_customize_register' );

// Ganti logo halaman login pakai logo dari Customizer
function tema_custom_login_logo_customizer() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    if ($logo) {
        ?>
<style type="text/css">
body.login div#login h1 a {
    background-image: url('<?php echo esc_url($logo[0]); ?>');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    width: 200px;
    height: 100px;
}
</style>
<?php
    }
}
add_action('login_enqueue_scripts', 'tema_custom_login_logo_customizer');

// Ganti URL logo login jadi ke homepage
function tema_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'tema_login_logo_url');

// Ganti title saat hover logo login
function tema_login_logo_title() {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'tema_login_logo_title');

// ambil post d ari web uinjambi.ac.id

function uinjambi_get_remote_posts($limit = 6) {
    $limit = absint($limit);
    if ($limit < 1) {
        $limit = 6;
    }

    $transient_key = 'uinjambi_latest_posts_' . $limit;
    $posts = get_transient($transient_key);

    if (false !== $posts) {
        return $posts;
    }

    $url = add_query_arg(array(
        '_embed'   => '1',
        'per_page' => $limit,
    ), 'https://uinjambi.ac.id/wp-json/wp/v2/posts');

    $response = wp_remote_get($url, array(
        'timeout' => 15,
    ));

    if (is_wp_error($response)) {
        return array();
    }

    $response_code = wp_remote_retrieve_response_code($response);
    if (200 !== $response_code) {
        return array();
    }

    $body = wp_remote_retrieve_body($response);
    $posts = json_decode($body);

    if (!is_array($posts)) {
        return array();
    }

    // Cache 1 jam
    set_transient($transient_key, $posts, HOUR_IN_SECONDS);

    return $posts;
}


/**
 * Get fallback image URL
 */
function uinjambi_fallback_image_url() {
    return get_template_directory_uri() . '/assets/images/placeholder.png';
}

/**
 * Display post thumbnail with fallback
 */
function uinjambi_post_thumbnail($size = 'medium', $class = '') {

    if (has_post_thumbnail()) {

        the_post_thumbnail($size, [
            'class' => $class,
        ]);

    } else {

        echo '<img src="' . esc_url(uinjambi_fallback_image_url()) . '" 
              class="' . esc_attr($class) . '" 
              alt="' . esc_attr(get_the_title()) . '">';
    }
}