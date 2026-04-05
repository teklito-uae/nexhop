<?php
$pageTitle = 'Nexhop Computers | IT Solutions & Networking Experts Dubai';
$pageDescription = 'UAE-based IT and networking solutions provider specializing in enterprise technology infrastructure. Supply and system integration for leading global IT brands.';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    /* Swiper Override Styles */
    .hero-swiper .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
        transition: all 0.3s ease;
    }

    .hero-swiper .swiper-pagination-bullet-active {
        width: 32px;
        background: #fff;
        border-radius: 99px;
    }

    .brand-logo-swiper .swiper-wrapper {
        transition-timing-function: linear !important;
    }
</style>

<!-- Modern Hero Banner (Swiper) -->
<section class="pt-6 pb-2 md:pt-10 md:pb-4 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Relative container enforcing dimensions -->
        <div
            class="relative rounded-2xl md:rounded-3xl overflow-hidden bg-white dark:bg-surface shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)]  group relative h-[250px] sm:h-[350px] md:h-[auto] md:aspect-[1400/380]">

            <div class="swiper hero-swiper w-full h-full absolute inset-0">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/dell-banner_page-1400x380.webp" alt="Dell Products"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/Omada_Dubai_2026-1400x380.webp" alt="Omada Networking"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/qnap-banner-dubaiTS-932PX-1400x380.png" alt="QNAP Storage"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/rap72_banner-1400x380.webp" alt="Rap72 Solutions"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/yealink_banner_home_page1-1400x380.webp" alt="Yealink Communications"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Slide 6 -->
                    <div class="swiper-slide w-full h-full overflow-hidden">
                        <img src="/assets/banners/zkteco_banner_2025-1400x380.webp" alt="ZKTeco Access Control"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Swiper Pagination -->
                <div class="swiper-pagination !bottom-4"></div>
            </div>

        </div>
    </div>
</section>

<!-- Brand Carousel (Text) -->
<section class="py-10 md:py-16 bg-gray-50 dark:bg-base overflow-hidden border-b border-gray-200 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-8 md:mb-12">
            <span class="text-[10px] sm:text-xs tracking-widest uppercase font-bold text-blue-600 mb-2 sm:mb-3 block">Our Trusted Partners</span>
            <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-gray-800 dark:text-white tracking-tight">
                Authorized Supplier For Global IT Leaders
            </h2>
        </div>

        <div class="relative overflow-hidden">
            <!-- Fading Edges -->
            <div class="absolute top-0 left-0 bottom-0 w-16 sm:w-32 bg-gradient-to-r from-gray-50 dark:from-base to-transparent z-10 pointer-events-none"></div>
            <div class="absolute top-0 right-0 bottom-0 w-16 sm:w-32 bg-gradient-to-l from-gray-50 dark:from-base to-transparent z-10 pointer-events-none"></div>

            <div class="swiper brand-logo-swiper py-2" dir="ltr">
                <div class="swiper-wrapper items-center flex">
                    <?php
                    $brandsList = ['DELL', 'HP', 'CISCO', 'FORTINET', 'ARUBA', 'RUIJIE', 'UBIQUITI', 'MIKROTIK', 'HIKVISION', 'YEALINK', 'QNAP', 'TP-LINK', 'LOGITECH', 'ZKTeco', 'SOPHOS'];
                    for ($loop = 0; $loop < 3; $loop++) { 
                        foreach($brandsList as $b) { ?>
                    <div class="swiper-slide text-center flex justify-center items-center">
                        <span class="text-lg sm:text-xl md:text-2xl font-black text-gray-400 hover:text-blue-600 dark:text-gray-500 dark:hover:text-white uppercase tracking-wider transition-colors duration-300"><?php echo $b; ?></span>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="py-16 md:py-24 bg-gray-50 dark:bg-base relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Networking
                Hardware</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                IT Networking Solutions</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">Enterprise-grade networking hardware
                from the world's top manufacturers.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5 auto-rows-[160px] md:auto-rows-[220px]">

            <!-- Row 1 -->

            <!-- Network Switches -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/switches_600.webp" alt="Network Switches"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">Network Switches</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Core and
                        distribution switches from Cisco, Ruijie, and Aruba.</p>
                </div>
            </a>

            <!-- Wireless Systems -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/wireless_systems_600.webp" alt="Wireless Systems"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">Wireless Systems</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Enterprise WiFi 6
                        & 7 solutions</p>
                </div>
            </a>

            <!-- LTE & 5G -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/LTE_5G_600.webp" alt="LTE & 5G"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">LTE & 5G</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Cellular modems
                        and routers</p>
                </div>
            </a>

            <!-- Ethernet Routers -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/ethernet_routers_600.webp" alt="Ethernet Routers"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">Routers</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Enterprise and
                        cloud routers</p>
                </div>
            </a>

            <!-- Row 2 -->

            <!-- Routerboard -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/routerboard_600.webp" alt="RouterBOARD"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">RouterBOARD</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">MikroTik hardware
                        solutions</p>
                </div>
            </a>

            <!-- 60GHz -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/60GHz_600.webp" alt="60GHz Wireless"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">60GHz Wireless</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Point-to-point
                        gigabit links</p>
                </div>
            </a>

            <!-- Home & Office Wireless -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/wireless_home_office_600.webp" alt="Home & Office Wireless"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">Home & Office</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Wireless
                        networking for small spaces</p>
                </div>
            </a>

            <!-- IoT -->
            <a href="/brands.php"
                class="group relative rounded-2xl md:rounded-3xl overflow-hidden col-span-1 cursor-pointer">
                <img src="/assets/categories/IoT_600.webp" alt="IoT Solutions"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-blue-600/90 via-blue-600/40 to-transparent group-hover:from-blue-600/95 transition-colors">
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6">
                    <h3 class="text-sm sm:text-xl font-extrabold text-white">IoT Solutions</h3>
                    <p class="text-[11px] sm:text-sm text-blue-100 mt-1 line-clamp-2 hidden md:block">Connected device
                        infrastructure</p>
                </div>
            </a>

        </div>

        <!-- View All -->
        <div class="mt-12 text-center">
            <a href="/brands.php"
                class="inline-flex items-center px-8 py-4 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-black text-sm tracking-widest uppercase transition-all duration-300 shadow-xl shadow-blue-600/30 hover:shadow-2xl hover:shadow-blue-600/40 transform hover:-translate-y-1 group">
                View All Networking Products
                <svg class="w-5 h-5 ml-2.5 group-hover:translate-x-1.5 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="py-16 md:py-24 bg-white dark:bg-surface relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Browse Shop</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Product Categories</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">Explore our full range of IT hardware,
                peripherals, and complete computing systems.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">

            <!-- Laptops -->
            <a href="/shop.php?category=laptops" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Laptops</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Business & enterprise
                        notebooks</p>
                </div>
            </a>

            <!-- Desktops -->
            <a href="/shop.php?category=desktops" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                            <line x1="12" y1="2" x2="12" y2="5" stroke-width="1.5"></line>
                            <line x1="8" y1="3" x2="8" y2="5" stroke-width="1.5"></line>
                            <line x1="16" y1="3" x2="16" y2="5" stroke-width="1.5"></line>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Desktops</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Workstations & towers</p>
                </div>
            </a>

            <!-- All-in-One -->
            <a href="/shop.php?category=all-in-one" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">All-in-One</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Compact desktop solutions
                    </p>
                </div>
            </a>

            <!-- Servers -->
            <a href="/shop.php?category=servers" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Servers</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Rack & tower server systems
                    </p>
                </div>
            </a>

            <!-- Conference Room Solutions -->
            <a href="/shop.php?category=conference" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Conference Room
                    </h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">AV & meeting room solutions
                    </p>
                </div>
            </a>

            <!-- Accessories -->
            <a href="/shop.php?category=accessories" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Accessories</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Cables, adapters & more</p>
                </div>
            </a>

            <!-- Gaming PC -->
            <a href="/shop.php?category=gaming" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Gaming PC</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Custom gaming builds</p>
                </div>
            </a>

            <!-- Networking Equipment -->
            <a href="/brands.php" class="group text-center cursor-pointer">
                <div
                    class="bg-gray-50 dark:bg-base rounded-2xl border border-gray-100 dark:border-white/5 p-6 md:p-8 hover:border-blue-600/30 dark:hover:border-cyan-400/30 transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div
                        class="w-14 h-14 mx-auto rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-cyan-400 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm md:text-base font-extrabold text-gray-900 dark:text-white mb-1">Networking</h3>
                    <p class="text-[11px] text-gray-400 dark:text-slate-500 hidden sm:block">Routers, switches &
                        firewalls</p>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- Solutions & Services Grid Cards -->
<section class="py-16 md:py-24 bg-white dark:bg-surface relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">What We Offer</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Solutions & Services</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">End-to-end IT solutions from
                infrastructure design to ongoing maintenance.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">

            <!-- Cloud Solutions -->
            <a href="/services.php"
                class="group bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 relative">
                <div
                    class="relative h-52 overflow-hidden bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                    <svg class="w-20 h-20 text-white/30 group-hover:scale-110 transition-transform duration-700"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                        </path>
                        <circle cx="6" cy="16" r="1.5" fill="currentColor" opacity="0.5"></circle>
                        <circle cx="18" cy="10" r="1" fill="currentColor" opacity="0.4"></circle>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 mb-2">Cloud Solutions</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Scalable cloud infrastructure design and deployment
                        for modern enterprises.</p>
                </div>
            </a>

            <!-- Cyber Security -->
            <a href="/services.php"
                class="group bg-gray-50 dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/assets/images/cyber-security.png" alt="Cyber Security"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/30 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Cyber Security</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed">Advanced threat protection,
                        firewalls, and endpoint security for your business.</p>
                </div>
            </a>

            <!-- Networking -->
            <a href="/services.php"
                class="group bg-gray-50 dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/assets/images/networking.png" alt="Networking"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/30 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Networking</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed">Complete network design,
                        installation, and management for enterprise environments.</p>
                </div>
            </a>

            <!-- IT AMC -->
            <a href="/services.php"
                class="group bg-gray-50 dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/assets/images/it-amc-hero.png" alt="IT AMC"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/30 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">IT AMC</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed">Annual maintenance contracts
                        with proactive monitoring and rapid response support.</p>
                </div>
            </a>

            <!-- Hikvision Surveillance -->
            <a href="/services.php"
                class="group bg-gray-50 dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/assets/images/hikvision-hero-banner.png" alt="Surveillance"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/30 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Surveillance & CCTV</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed">Hikvision cameras and video
                        management systems for complete site coverage.</p>
                </div>
            </a>

            <!-- Structured Cabling -->
            <a href="/services.php"
                class="group bg-gray-50 dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300">
                <div class="relative h-52 overflow-hidden">
                    <img src="/assets/images/structured-cabling-hero.png" alt="Structured Cabling"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/30 to-transparent"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Structured Cabling</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed">Professional fiber and copper
                        cabling infrastructure for buildings and campuses.</p>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- Targeted Solutions -->
<section class="py-12 md:py-20 bg-white dark:bg-surface relative overflow-hidden">
    <!-- Grid Pattern Background -->
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]">
    </div>
    <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-gray-50 dark:from-base to-transparent z-0"></div>
    <div class="absolute bottom-0 inset-x-0 h-40 bg-gradient-to-t from-gray-50 dark:from-base to-transparent z-0"></div>

    <!-- Soft Center Glow -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-[500px] bg-blue-500/5 dark:bg-blue-500/10 blur-[120px] rounded-full pointer-events-none z-0">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-10 md:mb-14">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Industry
                Applications</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Tailored IT Infrastructure</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">Purpose-built networking architecture
                optimized for your sector.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 relative z-10 pb-6 lg:pb-10">

            <!-- Solution 1 -->
            <div
                class="bg-white dark:bg-surface rounded-[1.5rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-6 relative overflow-hidden group">
                <div
                    class="absolute -top-16 -right-16 w-32 h-32 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-1.5 tracking-snug">Enterprise &
                        SME</h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">High-capacity switching,
                        routing, and endpoint security for growing data centers.</p>
                </div>
            </div>

            <!-- Solution 2 -->
            <div
                class="bg-white dark:bg-surface rounded-[1.5rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-6 relative overflow-hidden group">
                <div
                    class="absolute -top-16 -right-16 w-32 h-32 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-1.5 tracking-snug">ISP & Telecom
                    </h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">Carrier-grade core routers
                        and fiber optics for seamless connectivity providers.</p>
                </div>
            </div>

            <!-- Solution 3 -->
            <div
                class="bg-white dark:bg-surface rounded-[1.5rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-6 relative overflow-hidden group">
                <div
                    class="absolute -top-16 -right-16 w-32 h-32 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M7.394 9.394c5.858-5.857 15.355-5.857 21.213 0">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-1.5 tracking-snug">Hospitality
                        WiFi</h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">High-density wireless
                        access and captive portals for flawless guest experiences.</p>
                </div>
            </div>

            <!-- Solution 4 -->
            <div
                class="bg-white dark:bg-surface rounded-[1.5rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-6 relative overflow-hidden group">
                <div
                    class="absolute -top-16 -right-16 w-32 h-32 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-1.5 tracking-snug">Cloud Data
                        Centers</h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">Resilient switching and
                        virtualization for mission-critical workloads.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- How It Works - Process Steps -->
<section class="py-14 md:py-20 bg-white dark:bg-surface relative overflow-hidden">
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#80808010_1px,transparent_1px),linear-gradient(to_bottom,#80808010_1px,transparent_1px)] bg-[size:20px_20px]">
    </div>
    <div class="absolute top-0 inset-x-0 h-32 bg-gradient-to-b from-blue-50 dark:from-base to-transparent z-0"></div>
    <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-blue-50 dark:from-base to-transparent z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 md:mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">How It Works</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Simple Steps to Get Started</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From inquiry to delivery — we make
                enterprise IT sourcing effortless.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

            <!-- Step 1 -->
            <div class="text-center relative group">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center text-2xl font-black mb-5 mx-auto shadow-lg shadow-blue-600/25 group-hover:shadow-blue-600/40 group-hover:scale-110 transition-all duration-300">
                    1
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Share Your Requirements</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Tell us your project specs,
                    quantities, and timeline. We respond within hours.</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center relative group">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center text-2xl font-black mb-5 mx-auto shadow-lg shadow-blue-600/25 group-hover:shadow-blue-600/40 group-hover:scale-110 transition-all duration-300">
                    2
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Get a Custom Quote</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Receive competitive wholesale
                    pricing tailored to your order volume.</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center relative group">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center text-2xl font-black mb-5 mx-auto shadow-lg shadow-blue-600/25 group-hover:shadow-blue-600/40 group-hover:scale-110 transition-all duration-300">
                    3
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Confirm & Ship</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Once approved, we pick, pack, and
                    dispatch from our UAE warehouse.</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center relative group">
                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white flex items-center justify-center text-2xl font-black mb-5 mx-auto shadow-lg shadow-blue-600/25 group-hover:shadow-blue-600/40 group-hover:scale-110 transition-all duration-300">
                    4
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Delivered & Supported</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Receive your equipment with
                    warranty documentation and ongoing technical support.</p>
            </div>

        </div>

        <div class="mt-12 text-center">
            <a href="/contact.php" class="btn-primary text-sm px-8 py-3.5">Get Your Free Quote</a>
        </div>
    </div>
</section>

<!-- Export & Logistics Section -->
<section
    class="py-12 md:py-20 bg-gray-50 dark:bg-base dot-pattern relative overflow-hidden border-y border-gray-100 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left: Text content -->
            <div class="text-left">
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Global
                    Trade</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-6 tracking-tight">
                    Exporting Premier IT Equipment Across Africa & GCC</h2>
                <p class="text-base text-gray-500 dark:text-slate-400 mb-8 leading-relaxed">Nexhop Computers operates as
                    a leading export hub based in the UAE. We facilitate large-scale, international distribution of
                    top-tier IT and networking infrastructure. Our export division is dedicated to fueling the digital
                    transformation of emerging markets through seamless logistics and aggressive wholesale pricing.</p>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span
                            class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span><strong>Bulk Volume Capabilities:</strong> Immediate fulfillment of large-scale project
                            requirements directly from our local UAE warehouses.</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span
                            class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span><strong>Aggressive Export Pricing:</strong> Direct distributor rates guaranteeing
                            uncompromised margins for international system integrators.</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span
                            class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span><strong>Streamlined Freight Logistics:</strong> Rapid, secure transit via air and sea
                            freight optimized for the Middle East and African markets.</span>
                    </li>
                </ul>

                <a href="/contact.php" class="btn-primary">Become a Reseller Partner</a>
            </div>

            <!-- Right: Visual Map/Card -->
            <div class="relative w-full text-center lg:text-right">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-cyan-400/20 to-blue-600/20 rounded-full blur-[80px] -z-10 transform scale-75">
                </div>
                <div
                    class="bg-gradient-to-br from-[#0B1F3A] to-blue-900 rounded-[2rem] p-1 shadow-2xl relative inline-block w-full max-w-md mx-auto lg:mr-0">
                    <div class="bg-surface rounded-[calc(2rem-4px)] p-8 h-full relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/connected.png')] opacity-10 mix-blend-overlay">
                        </div>

                        <div
                            class="relative z-10 flex flex-col items-center justify-center text-center h-full min-h-[300px]">
                            <svg class="w-20 h-20 text-cyan-400 mb-6 drop-shadow-[0_0_15px_rgba(6,182,212,0.5)]"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <h3 class="text-2xl font-black text-white mb-2 tracking-wide font-['Orbitron',sans-serif]">
                                GLOBAL DELIVERY</h3>
                            <p class="text-blue-200 text-sm">Expanding your network capabilities beyond borders with
                                certified distribution.</p>
                            <div class="mt-6 flex gap-3 justify-center">
                                <span
                                    class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">UAE</span>
                                <span
                                    class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">GCC</span>
                                <span
                                    class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">Africa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us & Key Metrics -->
<section class="py-12 md:py-20 bg-white dark:bg-surface relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left: Text & Features -->
            <div class="text-left">
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Why Partner With
                    Us</span>
                <h2
                    class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-6 lg:mb-8 tracking-tight">
                    The Smart Choice for Enterprise IT Sourcing</h2>

                <div class="space-y-6 lg:space-y-7">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Ready UAE Stock
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Massive warehouse
                                inventory ensuring zero lead-time for most high-demand networking equipment.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Wholesale
                                Distributor Pricing
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Unbeatable rates
                                optimized for system integrators, corporate bulk buys, and project tenders.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Guaranteed
                                Authenticity</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">100% genuine products
                                sourced directly with full manufacturer warranty and support.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image & Floating Metrics -->
            <div class="relative w-full mt-10 lg:mt-0">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600/15 to-cyan-400/15 rounded-full blur-[80px] -z-10 transform scale-90 translate-x-5 translate-y-5">
                </div>
                <img src="/assets/nexhop.webp" alt="Nexhop Warehouse Logistics"
                    class="rounded-[2rem] w-full lg:w-[90%] h-auto lg:ml-auto shadow-xl relative border border-gray-100 dark:border-white/5 object-cover z-10">

                <!-- Floating Metrics Bento Card (Minimalist) -->
                <div
                    class="lg:absolute lg:-bottom-8 lg:-left-6 mt-6 lg:mt-0 bg-white dark:bg-surface rounded-3xl p-6 shadow-[0_15px_30px_-10px_rgba(0,0,0,0.1)] border border-gray-100 dark:border-white/5 w-full lg:w-[70%] z-20 backdrop-blur-xl bg-opacity-95 dark:bg-opacity-95">
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 relative">
                        <div class="text-left">
                            <div class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5"
                                data-counter="10000">0</div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                Items in Stock</p>
                        </div>
                        <div class="text-left">
                            <div
                                class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5">
                                <span>24</span>hr
                            </div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                UAE Delivery</p>
                        </div>
                        <div class="text-left">
                            <div class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5"
                                data-counter="15">+</div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                Enterprise Brands</p>
                        </div>
                        <div class="text-left">
                            <div
                                class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5">
                                <span data-counter="12">0</span>+
                            </div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                Export Markets</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-12 md:py-20 bg-gray-50 dark:bg-base relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-left mb-10 md:mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Testimonials</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                What Our Clients Say</h2>
        </div>

        <!-- Testimonials Carousel (Swiper.js) -->
        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <!-- 20 Highly Professional Testimonials -->
                <?php
                $testimonials = [
                    ["Ahmed Khalid", "CEO, Zenix Logistics", "Nexhop transformed our connectivity overnight. Professional, fast, and unconditional support. The team's expertise is unmatched in the region."],
                    ["Sarah Bennett", "IT Manager, Nexus Corp", "The automated security audit they deployed was incredibly eye-opening. We patched three critical vulnerabilities. We feel completely secure now."],
                    ["Rajesh Kumar", "Operations, Al-Futtaim", "A massive server outage brought our commerce system offline. Nexhop resolved the routing issue in an hour. Absolute lifesavers."],
                    ["James Wilson", "Director, Cloud9 Tech", "Scaling our infrastructure was a nightmare until Nexhop took over. Zero downtime migrations are their specialty."],
                    ["Fatima Al-Sayed", "Founder, Bloom Media", "The most reliable IT integration partner in Dubai. Their preventative maintenance saved us from multiple potential crashes."],
                    ["David Chen", "CTO, Fintech Solutions", "Their cybersecurity framework is world-class. We passed our compliance audit with flying colors thanks to their team."],
                    ["Amir Hassan", "Manager, Gulf Trading", "Seamless transition to Microsoft 365. Their training and support made it easy for our team to adapt."],
                    ["Elena Petrova", "Head of IT, Grand Hotel", "The 24/7 monitoring service gives me peace of mind. They always detect and fix issues before we even notice."],
                    ["Marcus Thorne", "Founder, Elite Estates", "Custom networking solutions that actually work. Our multi-site office connectivity is now rock solid."],
                    ["Laila Mansour", "COO, Tradewinds Co", "Nexhop delivers on their promises. Their response time for emergency support is genuinely under 60 minutes."]
                ];

                foreach ($testimonials as $i => $t) {
                    echo '
                    <div class="swiper-slide h-auto">
                        <div class="bg-white dark:bg-surface rounded-[2rem] p-8 lg:p-10 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 relative group/card overflow-hidden h-full flex flex-col">
                            <div class="absolute -top-4 -right-4 text-blue-100 dark:text-white/5 opacity-50 group-hover/card:text-blue-200 dark:group-hover/card:text-white/10 transition-colors">
                                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H9.2c.4-2.2 2.3-4 4.8-4V8zm14 0c-3.3 0-6 2.7-6 6v10h10V14h-4.8c.4-2.2 2.3-4 4.8-4V8z"></path>
                                </svg>
                            </div>
                            <div class="relative z-10 flex flex-col h-full">
                                <p class="text-gray-600 dark:text-slate-300 text-sm leading-relaxed mb-8 flex-grow">"' . $t[2] . '"</p>
                                <div class="flex items-center">
                                    <img src="https://i.pravatar.cc/150?u=' . $i . '" class="w-12 h-12 rounded-full mr-4 border-2 border-white dark:border-surface shadow-md" alt="' . $t[0] . '">
                                    <div>
                                        <h4 class="font-extrabold text-sm text-gray-900 dark:text-white leading-tight">' . $t[0] . '</h4>
                                        <p class="text-[10px] text-blue-600 dark:text-cyan-400 font-bold uppercase tracking-wider mt-1">' . $t[1] . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <!-- Swiper Pagination (Pills) -->
            <div class="swiper-pagination !static mt-10"></div>
        </div>

        <style>
            .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
                background: #E2E8F0 !important;
                opacity: 1 !important;
                transition: all 0.3s ease;
                border-radius: 99px;
            }

            .dark .swiper-pagination-bullet {
                background: rgba(255, 255, 255, 0.1) !important;
            }

            .swiper-pagination-bullet-active {
                width: 32px;
                background: linear-gradient(to right, #2563EB, #06B6D4) !important;
                box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            }
        </style>
</section>

<!-- FAQ -->
<section class="py-12 md:py-20 bg-white dark:bg-surface relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-10 md:mb-12 text-left max-w-2xl">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">FAQ</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-3">
                Frequently Asked Questions</h2>
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers to common inquiries
                about our enterprise-grade IT solutions and support services.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <!-- FAQ Item 1 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What
                        IT services do you offer?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">We specialize in
                        Infrastructure design, Networking integrations, rigorous Cyber Security, seamless Cloud
                        migration (Azure/M365), enterprise IT AMC, and physical Security Systems. Our solutions are
                        tailored for businesses of all sizes, ensuring maximum uptime and robust protection.</div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do
                        you provide 24/7 support?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we deploy
                        flexible support packages including 24/7 dedicated remote and on-site assistance immediately via
                        our core IT AMC contracts. We ensure that your business stays operational around the clock with
                        proactive monitoring and rapid response teams.</div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Can
                        you handle procurement?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Absolutely. We are
                        authorized elite partners for Lenovo, HP, Dell, Cisco, and countless more brands, bringing you
                        highly competitive B2B wholesale pricing directly. From server hardware to end-user devices, we
                        manage the entire lifecycle from sourcing to deployment.</div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What
                        is your response time?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">For critical
                        emergencies, we offer a <span class="font-bold text-blue-600 dark:text-cyan-400">1-hour response
                            time guarantee</span> for on-site support across Dubai. Remote troubleshooting typically
                        begins within 15 minutes of raising a priority ticket through our dedicated helpdesk portal.
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do
                        you offer cloud migration?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we specialize
                        in high-integrity migrations to Microsoft Azure and Amazon Web Services (AWS). We manage the
                        entire transition from assessment and planning to execution, ensuring zero data loss and minimal
                        operational disruption for your cloud strategy.</div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Is
                        cyber security included in AMC?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Our standard AMC
                        includes essential security maintenance such as patch management and firewall monitoring. For
                        advanced protection, we offer specialized Cyber Security tiers including endpoint detection
                        (EDR), regular penetration testing, and 24/7 SOC monitoring.</div>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do
                        you provide CCTV systems?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we are a
                        SIRA-approved security solutions provider in Dubai. We design and install high-definition CCTV
                        surveillance, biometric access control, and time-attendance systems that integrate seamlessly
                        with your existing IT infrastructure.</div>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Can
                        you manage Microsoft 365?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Absolutely. We
                        provide end-to-end Microsoft 365 management including user administration, mailbox migrations,
                        advanced security configurations, and ongoing support for Teams, SharePoint, and OneDrive to
                        maximize your collaboration efficiency.</div>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do
                        you support multi-site networking?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we specialize
                        in Site-to-Site VPNs and SD-WAN configurations that connect your multiple branches securely
                        across cities or countries. We ensure high-performance data synchronization and unified
                        communication channels between all your office locations.</div>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div
                class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group"
                    onclick="toggleFaq(this)">
                    <span
                        class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">How
                        do I get a custom quote?</span>
                    <div
                        class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Simply fill out our
                        online contact form, book a free consultation via the banner below, or call us directly. Our
                        engineers will perform a rapid assessment of your current environment and provide a detailed,
                        itemized proposal within 24 hours.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Insights & Technical Guides (NEW) -->
<section
    class="py-12 md:py-20 bg-white dark:bg-surface relative overflow-hidden dot-pattern border-t border-gray-100 dark:border-white/5">
    <div
        class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-blue-600/5 to-transparent rounded-full blur-[100px] -z-10 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 md:mb-12 gap-6">
            <div class="text-left">
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Knowledge
                    Base</span>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                    Latest Tech Insights</h2>
            </div>
            <a href="#"
                class="inline-flex items-center px-5 py-2.5 bg-white dark:bg-surface border border-gray-200 dark:border-white/10 rounded-full text-xs font-extrabold text-gray-900 dark:text-white hover:border-blue-500 transition-colors group shadow-sm hover:shadow-md">
                View All Articles
                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform text-blue-600 dark:text-cyan-400"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Blog Card 1 -->
            <a href="/insights/cyber-security-threats-2026.php"
                class="group flex flex-col bg-white dark:bg-surface rounded-[2rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all hover:shadow-2xl hover:shadow-blue-500/10 h-full">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="/assets/images/cyber-security.png" alt="Cyber Security Trends 2026"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/50 via-blue-600/20 to-transparent">
                    </div>
                    <div class="absolute bottom-5 left-5">
                        <span
                            class="px-3 py-1 bg-blue-600 text-white text-[10px] font-extrabold uppercase tracking-widest rounded-full shadow-sm">Security</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div
                        class="text-[10px] text-gray-400 dark:text-slate-500 font-bold uppercase tracking-widest mb-3 flex items-center">
                        March 28, 2026 <span class="mx-2 w-1 h-1 rounded-full bg-gray-300 dark:bg-slate-600"></span> 6
                        min read</div>
                    <h3
                        class="text-lg font-extrabold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors leading-snug">
                        Top 5 Cyber Security Threats to Watch in 2026</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed line-clamp-2 mb-6 flex-grow">As
                        AI-driven attacks become more sophisticated, businesses must adapt their defense strategies to
                        protect sensitive data.</p>
                    <div
                        class="flex items-center text-xs font-extrabold text-blue-600 dark:text-cyan-400 mt-auto group-hover:underline decoration-2 underline-offset-4">
                        Read Full Article <svg
                            class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Blog Card 2 -->
            <a href="/insights/cloud-migration-hybrid-choice.php"
                class="group flex flex-col bg-white dark:bg-surface rounded-[2rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all hover:shadow-2xl hover:shadow-blue-500/10 h-full">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="/assets/images/structured-cabling-hero.png" alt="Cloud Migration Strategy"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/50 via-blue-600/20 to-transparent">
                    </div>
                    <div class="absolute bottom-5 left-5">
                        <span
                            class="px-3 py-1 bg-cyan-500 text-white text-[10px] font-extrabold uppercase tracking-widest rounded-full shadow-sm">Cloud</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div
                        class="text-[10px] text-gray-400 dark:text-slate-500 font-bold uppercase tracking-widest mb-3 flex items-center">
                        April 05, 2026 <span class="mx-2 w-1 h-1 rounded-full bg-gray-300 dark:bg-slate-600"></span> 5
                        min read</div>
                    <h3
                        class="text-lg font-extrabold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors leading-snug">
                        Cloud Migration: Why Hybrid is the Best Choice for Enterprises</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed line-clamp-2 mb-6 flex-grow">A
                        deep dive into why moving your core infrastructure to a hybrid cloud environment maximizes
                        flexibility and security.</p>
                    <div
                        class="flex items-center text-xs font-extrabold text-blue-600 dark:text-cyan-400 mt-auto group-hover:underline decoration-2 underline-offset-4">
                        Read Full Article <svg
                            class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Blog Card 3 -->
            <a href="/insights/5-signs-it-amc-partner.php"
                class="group flex flex-col bg-white dark:bg-surface rounded-[2rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all hover:shadow-2xl hover:shadow-blue-500/10 h-full">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="/assets/images/networking.png" alt="IT AMC Partner"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/50 via-blue-600/20 to-transparent">
                    </div>
                    <div class="absolute bottom-5 left-5">
                        <span
                            class="px-3 py-1 bg-[#1A275D] text-white text-[10px] font-extrabold uppercase tracking-widest rounded-full shadow-sm">IT
                            AMC</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div
                        class="text-[10px] text-gray-400 dark:text-slate-500 font-bold uppercase tracking-widest mb-3 flex items-center">
                        April 12, 2026 <span class="mx-2 w-1 h-1 rounded-full bg-gray-300 dark:bg-slate-600"></span> 4
                        min read</div>
                    <h3
                        class="text-lg font-extrabold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors leading-snug">
                        5 Signs Your Business Needs a Professional IT AMC Partner</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed line-clamp-2 mb-6 flex-grow">
                        Stop
                        relying on break-fix methods. Here are the 5 critical warning signs that your infrastructure is
                        bleeding money.</p>
                    <div
                        class="flex items-center text-xs font-extrabold text-blue-600 dark:text-cyan-400 mt-auto group-hover:underline decoration-2 underline-offset-4">
                        Read Full Article <svg
                            class="w-3.5 h-3.5 ml-1 transform group-hover:translate-x-1 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA Banner (Full Width) -->
<section class="bg-gradient-to-r from-blue-700 via-blue-600 to-cyan-500 relative overflow-hidden">
    <!-- Mesh Glows -->
    <div class="absolute -top-12 -right-12 w-64 h-64 bg-white/10 rounded-full blur-[80px]"></div>
    <div class="absolute -bottom-12 -left-12 w-64 h-64 bg-cyan-400/10 rounded-full blur-[80px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="text-center lg:text-left max-w-2xl">
                <span
                    class="px-2.5 py-0.5 bg-white/10 text-white text-[8px] font-extrabold uppercase tracking-[0.2em] rounded-full border border-white/20 backdrop-blur-md mb-4 inline-block">Nexhop
                    Enterprise</span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight">Ready to
                    Revolutionize Your Business IT?</h2>
                <p class="text-xs text-blue-50/70">Join hundreds of thriving enterprises in Dubai. Get an elite strategy
                    session today.</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 items-center flex-shrink-0">
                <a href="/contact.php"
                    class="px-7 py-2.5 bg-white text-blue-700 rounded-full font-extrabold text-xs hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">
                    Book Free Consultation
                </a>
                <a href="tel:+971505050505"
                    class="px-6 py-2.5 bg-transparent text-white border border-white/30 rounded-full font-extrabold text-xs hover:bg-white/10 transition-all">
                    Call Our Experts
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Recently Searched Keywords -->
<section
    class="py-10 md:py-12 bg-white dark:bg-surface border-t border-gray-100 dark:border-white/5 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <h2 class="text-xs font-extrabold text-gray-900 dark:text-white uppercase tracking-[0.2em] mb-4">Recently
                searched keywords</h2>
            <div class="flex flex-wrap gap-x-3 gap-y-3">
                <!-- Dubai -->
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Best IT
                    AMC Provider in Dubai</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">CCTV
                    Installation company in Dubai</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Structured
                    Cabling Services Dubai</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>

                <!-- Sharjah -->
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">IT
                    Support Specialist Sharjah</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Professional
                    Firewall Setup Sharjah</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>

                <!-- Abu Dhabi -->
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Enterprise
                    Cloud Migration Abu Dhabi</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Server
                    Maintenance Abu Dhabi</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>

                <!-- Others -->
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Cyber
                    Security Audit Ajman</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Fiber
                    Optic Splicing Fujairah</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Network
                    Infrastructure RAK</a>
            </div>
        </div>

        <div
            class="pt-6 border-t border-gray-100 dark:border-white/5 flex flex-wrap gap-x-4 gap-y-2 text-[9px] font-bold text-gray-400 dark:text-slate-500 uppercase tracking-widest">
            <span>DELL PARTNER</span>
            <span>HP ENTERPRISE</span>
            <span>CISCO CERTIFIED</span>
            <span>FORTINET EXPERTS</span>
            <span>MICROSOFT SOLUTIONS</span>
            <span>SYNOLOGY PARTNER</span>
        </div>
    </div>
</section>

<script>
    // Hero Banner Swiper
    new Swiper('.hero-swiper', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        grabCursor: true,
        speed: 800,
    });

    // Brand Logo continuous swiper
    new Swiper('.brand-logo-swiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        speed: 6000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        breakpoints: {
            640: { slidesPerView: 3, spaceBetween: 30 },
            768: { slidesPerView: 4, spaceBetween: 40 },
            1024: { slidesPerView: 5, spaceBetween: 40 },
            1280: { slidesPerView: 6, spaceBetween: 50 }
        }
    });

    // FAQ Toggle
    function toggleFaq(button) {
        var content = button.nextElementSibling;
        var icon = button.querySelector('svg');
        if (content.style.maxHeight) { content.style.maxHeight = null; icon.style.transform = 'rotate(0deg)'; }
        else {
            document.querySelectorAll('.max-h-0').forEach(function (c) { if (c !== content) { c.style.maxHeight = null; var i = c.previousElementSibling.querySelector('svg'); if (i) i.style.transform = 'rotate(0deg)'; } });
            content.style.maxHeight = content.scrollHeight + 'px'; icon.style.transform = 'rotate(180deg)';
        }
    }

    // Counters Animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.getAttribute('data-counter'));
                let startTime = null;
                function animate(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / 2000, 1);
                    el.textContent = Math.floor(progress * target) + '+';
                    if (progress < 1) requestAnimationFrame(animate);
                }
                requestAnimationFrame(animate);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-counter]').forEach(el => counterObserver.observe(el));

    // Swiper Initializer
    new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 2000 },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 4 }
        }
    });
</script>

<?php include 'includes/footer.php'; ?>