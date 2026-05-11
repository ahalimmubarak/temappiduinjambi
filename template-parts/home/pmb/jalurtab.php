<div>
    <div class="grid grid-cols-1 sm:hidden px-5 mt-4 sm:mt-0">
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="mobile-tabs" aria-label="Select a tab"
            class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-2 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
            <option value="tab-1" selected>Jalur Nasional</option>
            <option value="tab-2">Jalur Universitas</option>
        </select>
        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end fill-gray-500"
            viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd"
                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
        </svg>
    </div>
    <div class="hidden sm:block">
        <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow-sm" aria-label="Tabs">
            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
            <a href="#" data-tab="tab-1" class="group relative min-w-0 flex-1 overflow-hidden bg-white px-4 py-4 text-center text-xl font-bold text-gray-600 hover:bg-gray-50 hover:text-gray-700 focus:z-10">
                <span>Jalur Nasional
                    <p class="inline-flex items-center rounded-md bg-indigo-100 px-2 py-1 text-xs font-medium text-indigo-700 ml-2">Ada (UMPTKIN)</p>
                </span>
                <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-1 bg-transparent"></span>
            </a>
            <a href="#" data-tab="tab-2" class="group relative min-w-0 flex-1 overflow-hidden bg-white px-4 py-4 text-center text-xl font-bold text-gray-600 hover:bg-gray-50 hover:text-gray-700 focus:z-10">
                <span>Jalur Universitas
                    <p class="inline-flex items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">Ada</p>
                </span>
                <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-1 bg-transparent"></span>
            </a>
        </nav>
    </div>

    <div id="tab-contents" class="max-w-7xl mx-auto px-5 py-10 md:py-20">
        <div id="tab-1">
            <div class="flex items-center justify-center text-2xl mb-8 font-bold">
                <h2 class="text-center">
                    Jalur dan Jadwal Pendaftaran Penerimaan Mahasiswa Baru Jalur Nasional
                </h2>
            </div>

            <div class="grid grid-col-1 md:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Seleksi Nasional Berbasis Prestasi (SNBP)</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            SNBP (Seleksi Nasional Berdasarkan Prestasi) adalah jalur masuk perguruan tinggi negeri (PTN) di Indonesia yang seleksinya berdasarkan nilai rapor dan prestasi akademik/non-akademik tanpa ujian tertulis.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=1 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-seleksi-nasional-berbasis-prestasi-snbp/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Seleksi Nasional Berbasis Tes (SNBT)</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            UTBK SNBT (Ujian Tulis Berbasis Komputer - Seleksi Nasional Berdasarkan Tes) adalah ujian masuk perguruan tinggi negeri di Indonesia yang diselenggarakan oleh Seleksi Nasional Penerimaan Mahasiswa Baru (SNPMB).
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=2 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-utbk-seleksi-nasional-berbasis-tes-snbt/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">SPAN-PTKIN</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            SPAN PTKIN (Seleksi Prestasi Akademik Nasional Perguruan Tinggi Keagamaan Islam Negeri) adalah jalur masuk ke UIN, IAIN, dan STAIN tanpa tes, menggunakan nilai rapor dan prestasi akademik/non-akademik.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=3 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-seleksi-prestasi-akademik-nasional-perguruan-tinggi-keagamaan-islam-negeri-span-ptkin/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">UM-PTKIN</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            UM-PTKIN (Ujian Masuk Perguruan Tinggi Keagamaan Islam Negeri) adalah jalur seleksi berbasis ujian tertulis untuk masuk ke UIN, IAIN, dan STAIN di Indonesia.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=4 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-ujian-masuk-perguruan-tinggi-keagamaan-islam-negeri-um-ptkin/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="tab-2">
            <div class="flex items-center justify-center text-2xl mb-8 font-bold">
                <h2 class="text-center">
                    Jalur dan Jadwal Pendaftaran Penerimaan Mahasiswa Baru Jalur Universitas
                </h2>
            </div>

            <div class="grid grid-col-1 md:grid-cols-3 gap-4">
                <!-- Card 5 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Prestasi Akademik & Non Akademik</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi Jalur Prestasi Akademik dan Non Akademik UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=5 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-prestasi-akademik-dan-non-akademik/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Tahfidz</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi Jalur Tahfidz UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=6 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-tahfidz/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Difabel</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi jalur difabel yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=7 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-difabel/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Mandiri 1</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi jalur mandiri yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=8 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-mandiri/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Mandiri 2</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi jalur mandiri yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=12 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-mandiri/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Seleksi Kemitraan</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Tes Jalur kemitraan diperuntukkan bagi lembaga atau instansi tertentu, pemerintah maupun non pemerintah, yang memiliki Nota Kesepahaman (MoU) dengan UIN Sulthan Thaha Saifuddin Jambi dan/atau memiliki Perjanjian Kerjasama (MoA) dengan Fakultas di lingkungan UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=17 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-kemitraan/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 11 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Portofolio</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi jalur Portofolio yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=11 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-portofolio/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 12 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur RPL Jenjang Sarjana</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Berdasarkan Permendikbudristek No. 41 Tahun 2021 tentang RPL (Rekognisi Pembelajaran Lampau) adalah pengakuan atas capaian pembelajaran seseorang yang diperoleh dari pendidikan formal, nonformal, informal, dan/atau pengalaman kerja sebagai dasar untuk melanjutkan pendidikan formal dan untuk melakukan penyetaraan dengan kualifikasi tertentu.
                        </p>
                        <a href="https://pmb.uinjambi.ac.id/jalur-rpl-jenjang-sarjana/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 13 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Jalur Mahasiswa Internasional</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru melalui seleksi jalur Mahasiswa internasional yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <div class="prose">
                            <?php echo do_shortcode('[table id=9 /]'); ?>
                        </div>
                        <a href="https://pmb.uinjambi.ac.id/jalur-mahasiswa-internasional/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card 14 -->
                <div class="w-full">
                    <div class="bg-white rounded-xl border border-gray-200 p-5 h-full">
                        <h3 class="text-lg font-bold mb-2">Pendaftaran Pascasarjana</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            Penerimaan Mahasiswa baru program Magister & Doktor melalui seleksi jalur Mandiri yang dikelola secara mandiri oleh UIN Sulthan Thaha Saifuddin Jambi.
                        </p>
                        <a href="https://pmb.uinjambi.ac.id/pendaftaran-pascasarjana/" class="flex w-fit items-center mt-4 px-4 py-2 bg-blue-800 text-white rounded-md text-sm">
                            Selengkapnya 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>