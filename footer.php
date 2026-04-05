    </main>

    <footer class="bg-blue-50 border-t border-t-gray-300">
        <div class="flex px-5 py-12">     
            <!-- Area Widget Footer -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6">
                
                <!-- Widget Kolom 1 -->
                <div class="widget-area text-gray-800">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php else: ?>
                        <!-- Konten default jika widget kosong -->
                        <h4 class="font-bold text-lg mb-4">Tentang Kami</h4>
                        <p class="text-white">
                            <strong>Blognews</strong> Menghadirkan Berita Terpercaya, Mencerahkan Masa Depan.
                        </p>
                    <?php endif; ?>
                </div>

                <!-- Widget Kolom 2 -->
                <div class="widget-area text-gray-800">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                </div>

                <!-- Widget Kolom 3 -->
                <div class="widget-area text-gray-800">
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                </div>

                <!-- Widget Kolom 4 -->
                <div class="widget-area text-gray-800">
                    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    <?php else: ?>
                        <!-- Konten default jika widget kosong -->
                        <h4 class="font-bold text-lg text-gray-50 mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-50 hover:text-blue-600">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                            <a href="#" class="text-gray-50 hover:text-blue-600">
                                <span class="sr-only">Twitter</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

        </div>

        <!-- Back to Top Button -->
        <button id="backToTop" 
            class="hidden fixed bottom-10 right-10 w-10 h-10 bg-primary text-white shadow-md hover:bg-primary2 flex items-center justify-center transition-all duration-300 cursor-pointer rounded-xl z-50 hover:-translate-y-1"
            aria-label="Back to Top">
            <!-- Icon Heroicons -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
            </svg>
        </button>
    </footer>

    <section class="bg-blue-100 border-t border-t-gray-300 py-4">

        <!-- Copyright Bar -->
        <div class="text-center text-xs leading-6 px-5 text-gray-800">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. UTIPD 2026.</p>
        </div>

    </section>

    <?php wp_footer(); ?>

</body>
</html>