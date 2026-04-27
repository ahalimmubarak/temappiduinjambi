<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="max-w-360 mx-auto bg-gray-700">
    <?php wp_body_open(); ?>

    <div id="search-overlay" class="fixed inset-0 z-100 bg-black/70 backdrop-blur-sm hidden items-center justify-center p-4 transition-opacity duration-300">
        <div class="w-full max-w-xl" role="dialog" aria-modal="true" aria-labelledby="search-heading">
            <h2 id="search-heading" class="sr-only">Formulir Pencarian</h2>
            <?php get_search_form(); ?>
        </div>
        <button id="close-search-overlay" class="absolute top-6 right-6 text-white/80 hover:text-white cursor-pointer" aria-label="Tutup Pencarian">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    <section>
        <!-- top bar -->
        <header class="hidden lg:flex bg-gray-950 py-2 px-5 justify-between items-center">
            <!-- <div class="flex items-center gap-2">
                <h class="text-xs md:text-sm text-white">
                    Tanya admin:
                </h>
                <div class="text-xs md:text-sm py-1 px-4 border border-white rounded-full text-white hover:bg-primary hover:border-primary cursor-pointer">
                    <p>081234567895</p>
                </div>
            </div> -->
            <div class="items-center justify-start">
                <?php
                if ( has_nav_menu( 'secondary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'secondary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center text-sm gap-4 text-white font-medium',
                        'fallback_cb'    => false,
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 0,
                    ) );
                }
                ?>
            </div>
            <div id="realtime-clock" class="flex items-center justify-end text-white gap-3">
                <div id="clock-date" class="text-sm"></div>
                <div id="clock-time" class="text-sm font-semibold py-1 px-4 border border-primary rounded-full text-white bg-primary"></div>
            </div>
        </header>

        <header id="main-bar" class="sticky top-0 z-9999 shadow-md bg-primary2">
            <section class="flex items-center justify-between mx-auto px-5 h-20">
                <div class="flex items-center justify-start space-x-3">
                    <div class="shrink-0 flex">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>" 
                            alt="<?php bloginfo('name'); ?>"
                            class="h-10 lg:h-13 w-auto max-h-25">
                        </a>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <h1 class="text-xs lg:text-sm font-medium text-white">
                            <?php bloginfo( 'name' ); ?>
                        </h1>

                        <p class="text-[0.50rem] md:text-sm font-medium text-white">
                            <?php bloginfo( 'description' ); ?>
                        </p>

                        <?php if ( get_theme_mod( 'second_tagline' ) ) : ?>
                            <p class="text-[0.50rem] md:text-xs font-medium uppercase text-white">
                                <?php echo esc_html( get_theme_mod( 'second_tagline' ) ); ?>
                            </p>
                        <?php endif; ?>
                    </a>
                </div>

                <div class="flex items-center justify-end">
                    <div class="flex items-center justify-between w-full">
                        <!-- Navigasi Menu (Hanya tampil di desktop) -->
                        <div class="hidden xl:flex xl:items-center">
                            <?php
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container'      => false,
                                    'menu_class'     => 'flex items-center text-base text-white font-medium',
                                    'fallback_cb'    => false,
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'          => 0,
                                    'walker'         => new Tailwind_Nav_Walker()
                                ) );
                            }
                            ?>
                        </div>

                        <!-- Tombol Menu Mobile -->
                        <button id="menu-toggle" aria-label="Buka Menu" class="xl:hidden py-4 pl-4 relative z-50 text-white hover:text-white/70 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        
                        <!-- Ikon Search -->
                        <button id="search-toggle" aria-label="Buka Pencarian" class="py-4 pl-4 cursor-pointer text-white hover:text-white/70 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>

                    </div>
                    
                    <!-- Mobile Menu -->
                    <div id="mobile-menu"
                        class="absolute top-full left-0 z-50 w-full hidden xl:hidden bg-white shadow-xl border-t border-gray-200">

                        <?php
                        if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'container'       => 'nav',
                                'container_class' => 'px-6 py-4',
                                'menu_class'      => 'flex flex-col divide-y divide-gray-100 text-base font-medium text-black',
                                'depth'           => 0,
                                'walker'          => new Tailwind_Nav_Walker_Mobile(),
                            ) );
                        }
                        ?>
                    </div>
                </div>
            </section>
        </header>
    </section>

    <!-- Memberi jarak agar konten tidak tertutup header fixed -->
    <main id="content" class="pt-0">