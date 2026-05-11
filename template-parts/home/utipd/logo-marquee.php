<?php
$logos = [
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/logo-porta.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sia.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/esima.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/ikuu.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/bkd.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/admin-sia.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/alumni.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/siuda.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sutha-link.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/pmb.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sibesti.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sigap.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sikap.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sikami.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sikerma.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sipandu.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/sipinter.jpg',
    'https://utipd.uinjambi.ac.id/wp-content/uploads/2025/01/support-center.jpg',
];
?>

<section class="relative overflow-hidden py-4 md:py-8 bg-white">

    <!-- Fade kiri -->
    <div class="pointer-events-none absolute left-0 top-0 z-10 h-full w-32 bg-linear-to-r from-white to-transparent"></div>

    <!-- Fade kanan -->
    <div class="pointer-events-none absolute right-0 top-0 z-10 h-full w-32 bg-linear-to-l from-white to-transparent"></div>

    <div class="marquee">

        <div class="marquee-track">

            <?php foreach ($logos as $logo) : ?>
                <div class="marquee-item">
                    <img
                        src="<?php echo esc_url($logo); ?>"
                        alt="Logo"
                        class="h-15 md:h-20 w-auto object-contain grayscale opacity-70 transition duration-300 hover:grayscale-0 hover:opacity-100"
                    >
                </div>
            <?php endforeach; ?>

        </div>

    </div>

</section>