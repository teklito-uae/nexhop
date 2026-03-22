<?php
$pageTitle = 'Nexhop Computers | IT Solutions & Networking Experts Dubai';
$pageDescription = 'UAE-based IT and networking solutions provider specializing in enterprise technology infrastructure. Supply and system integration for leading global IT brands.';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="pt-6 sm:pt-8 pb-6 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-3 h-auto lg:h-[480px]">

            <!-- Main Column (75%) -->
            <div class="lg:w-3/4 h-[320px] sm:h-[400px] lg:h-full relative rounded-2xl overflow-hidden">
                <div id="hero-slider" class="h-full">
                    <!-- Slide 1 -->
                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-100" data-hero-slide>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent z-10">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-bl from-[#0052FF]/30 to-transparent z-10"></div>
                        <img src="/assets/images/structured-cabling-hero.png" alt="Data Center Networking"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 z-20 flex items-end pb-8 sm:pb-12">
                            <div class="px-5 sm:px-8 max-w-2xl">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-blue-600/30 border border-blue-400/40 text-[10px] sm:text-xs font-bold text-blue-200 uppercase tracking-widest mb-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>Leading IT Supplier
                                </span>
                                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight mb-3">
                                    Enterprise IT <span class="text-cyan-400">Networking Solutions</span> Provider in UAE
                                </h1>
                                <p class="text-sm sm:text-base text-gray-200 mb-6 font-medium">Bulk supply, aggressive wholesale pricing, and expert logistics serving corporate networks across the UAE, GCC, and Africa.</p>
                                <div class="flex flex-wrap gap-4">
                                    <a href="/contact.php" class="btn-primary text-sm px-6 py-3">Get A Quote</a>
                                    <a href="https://wa.me/971559026521" target="_blank" class="px-6 py-3 bg-[#25D366] hover:bg-[#128C7E] text-white font-bold rounded-xl transition-all duration-300 shadow-lg shadow-[#25D366]/30 flex items-center gap-2">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.385 0 12.031c0 2.115.549 4.155 1.593 5.96L.142 23.4l5.586-1.465a12.035 12.035 0 006.303 1.761c6.646 0 12.031-5.385 12.031-12.031C24.062 5.385 18.677 0 12.031 0zm0 21.758a9.664 9.664 0 01-5.06-1.432l-.36-.214L2.85 21.1l.994-3.664-.236-.375A9.645 9.645 0 012.33 12.03C2.33 6.678 6.678 2.33 12.03 2.33c5.352 0 9.7 4.348 9.7 9.7 0 5.352-4.348 9.7-9.7 9.7zm5.32-7.258c-.292-.146-1.728-.853-1.996-.95-.268-.097-.463-.146-.658.146-.195.292-.756.95-.926 1.145-.17.195-.342.22-.634.073-.293-.146-1.233-.455-2.35-1.45-.869-.775-1.455-1.733-1.625-2.025-.17-.292-.018-.45.128-.596.133-.133.293-.342.44-.512.146-.17.195-.293.293-.488.098-.195.048-.366-.025-.512-.072-.146-.658-1.585-.902-2.17-.238-.57-.481-.493-.658-.503-.17-.01-.365-.01-.56-.01-.195 0-.512.073-.78.366-.268.293-1.025.998-1.025 2.434 0 1.436 1.05 2.824 1.196 3.018.146.195 2.05 3.13 4.965 4.39.694.3 1.236.48 1.662.613.698.22 1.332.188 1.832.114.56-.083 1.728-.706 1.972-1.39.244-.682.244-1.267.17-1.39-.072-.122-.267-.195-.56-.341z"/></svg> 
                                        WhatsApp Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Column (25%) -->
            <div class="lg:w-1/4 flex flex-row lg:flex-col gap-3 h-[160px] sm:h-[180px] lg:h-full">
                <!-- Brands Card -->
                <div class="flex-[3] sm:flex-1 rounded-2xl overflow-hidden relative group bg-[#00C2FF] cursor-pointer"
                    onclick="location.href='/products.php'">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B1F3A] via-[#0B1F3A]/80 to-transparent z-10">
                    </div>
                    <img src="/assets/images/cloud-solutions.png"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 origin-bottom z-0 opacity-40 mix-blend-overlay"
                        alt="Authorized Distributor">
                    <div class="absolute inset-x-0 bottom-0 z-20 p-4 sm:p-5 flex flex-col justify-end h-full">
                        <div>
                            <span
                                class="inline-block px-2 py-0.5 bg-blue-500/80 backdrop-blur-sm rounded text-[9px] sm:text-[10px] font-bold text-white uppercase tracking-wider mb-2">Multi-Brand Supply</span>
                            <h3 class="text-white font-extrabold text-sm sm:text-xl leading-tight mb-1">
                                Authorized<br>Distributor</h3>
                            <p class="text-blue-200 text-xs hidden sm:block">Ubiquiti, MikroTik, Cisco, Aruba & More.</p>
                        </div>
                    </div>
                </div>
                <!-- Export Card -->
                <div class="flex-[3] sm:flex-1 rounded-2xl overflow-hidden relative group bg-[#0B1F3A] cursor-pointer"
                    onclick="location.href='/contact.php'">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent z-10">
                    </div>
                    <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 origin-bottom z-0 opacity-30"
                        alt="Export Logistics">
                    <div class="absolute inset-x-0 bottom-0 z-20 p-4 sm:p-5 flex flex-col justify-end h-full">
                        <div>
                            <span
                                class="inline-block px-2 py-0.5 bg-cyan-500/80 backdrop-blur-sm rounded text-[9px] sm:text-[10px] font-bold text-white uppercase tracking-wider mb-2">Global Reach</span>
                            <h3 class="text-white font-extrabold text-sm sm:text-xl leading-tight mb-1">
                                Export &<br>Logistics</h3>
                            <p class="text-gray-300 text-xs hidden sm:block">Seamless supply chain to GCC & Africa.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Brand Carousel -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p
            class="text-center text-[10px] font-semibold text-gray-400 dark:text-slate-500 uppercase tracking-widest mb-6">
            Authorized Partner for Leading Brands</p>
        <div class="relative overflow-hidden">
            <div
                class="absolute left-0 top-0 w-24 h-full bg-gradient-to-r from-gray-50 dark:from-base to-transparent z-10">
            </div>
            <div
                class="absolute right-0 top-0 w-24 h-full bg-gradient-to-l from-gray-50 dark:from-base to-transparent z-10">
            </div>
            <!-- Row 1: General Brands -->
            <div
                class="flex items-center space-x-14 w-max animate-logo-carousel hover:[animation-play-state:paused] whitespace-nowrap mb-8 mt-4">
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">UBIQUITI</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MIKROTIK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">TP-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">RUIJIE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">D-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">CISCO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HPE ARUBA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">FORTINET</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SOPHOS</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HIKVISION</span>
                <!-- Duplicate for infinite scroll -->
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">UBIQUITI</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MIKROTIK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">TP-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">RUIJIE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">D-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">CISCO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HPE ARUBA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">FORTINET</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SOPHOS</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HIKVISION</span>
            </div>

            <!-- Row 2: Networking Brands (Reverse) -->
            <div
                class="flex items-center space-x-14 w-max animate-logo-carousel-reverse hover:[animation-play-state:paused] whitespace-nowrap">
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DAHUA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">GRANDSTREAM</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">YEALINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DELL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HP</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">LENOVO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SYNOLOGY</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">QNAP</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">APC</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">EATON</span>
                <!-- Duplicate for infinite scroll -->
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DAHUA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">GRANDSTREAM</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">YEALINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DELL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HP</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">LENOVO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SYNOLOGY</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">QNAP</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">APC</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">EATON</span>
            </div>
        </div>
    </div>
</section>

<!-- Structured Category Grid -->
<section class="py-16 md:py-24 bg-gray-50 dark:bg-base dot-pattern relative overflow-hidden">
    <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white dark:from-surface to-transparent z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Extensive Inventory</span>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">
                Wholesale IT Infrastructure</h2>
            <p class="text-base sm:text-lg text-gray-500 dark:text-slate-400 max-w-2xl mx-auto">Direct distributor pricing and ready stock on leading enterprise networking categories in the UAE.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6 auto-rows-[minmax(280px,auto)]">

            <!-- Category 1: Network Switches -->
            <div
                class="lg:col-span-2 bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div
                    class="absolute -top-24 -right-24 w-64 h-64 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 text-white flex items-center justify-center mb-6 shadow-lg shadow-blue-600/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative z-10 md:w-2/3 lg:w-3/4">
                    <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-snug">
                        Network Switches</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6 leading-relaxed">Core, distribution, and access switches from Cisco, Ruijie, and HPE Aruba. Unmanaged, smart, and fully managed L3 options.</p>
                    <a href="/contact.php"
                        class="inline-flex items-center text-blue-600 dark:text-blue-400 text-sm font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Request Bulk Quote <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></a>
                </div>
            </div>

            <!-- Category 2: Access Points -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M7.394 9.394c5.858-5.857 15.355-5.857 21.213 0"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Access Points</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">High-density WiFi 6 & 7 Aps for enterprise setups. Ubiquiti UniFi, Aruba.</p>
                </div>
                <a href="/contact.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Contact Sales <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Category 3: Enterprise Routers -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Enterprise Routers</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">MikroTik Cloud Core Routers, Cisco gateways, and dual-WAN load balancers.</p>
                </div>
                <a href="/contact.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">View Pricing <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Category 4: Firewall & Security -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Firewall & Security</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">FortiGate, Sophos XGS, and Palo Alto network security appliances with licensing.</p>
                </div>
                <a href="/contact.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Get Quote <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Category 5: VoIP & IP Phones -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">VoIP & IP Phones</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">Grandstream and Yealink IP PBX systems, desk phones, and conferencing stations.</p>
                </div>
                <a href="/contact.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Contact Sales <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Category 6: Network Accessories -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between cursor-pointer" onclick="location.href='/products.php'">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Network Accessories</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">Server racks, patch panels, Cat6/Fiber cables, SPF modules, and PDUs.</p>
                </div>
                <a href="/contact.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Complete Enquiry <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>
        </div>

        <!-- View All Services Link -->
        <div class="mt-16 text-center animate-fade-in-up">
            <a href="/products.php"
                class="inline-flex items-center px-10 py-5 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-black text-sm tracking-widest uppercase transition-all duration-300 shadow-xl shadow-blue-600/30 hover:shadow-2xl hover:shadow-blue-600/40 transform hover:-translate-y-1 group">
                Download Full Catalogue
                <svg class="w-5 h-5 ml-2.5 group-hover:translate-x-1.5 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M12 4v16m8-8H4">
                    </path>
                </svg>
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
        <div class="text-left mb-10 md:mb-12 max-w-2xl">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Industry Applications</span>
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Tailored IT Infrastructure</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400">Purpose-built networking architecture optimized for the unique operational demands of your sector.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative z-10 pb-6 lg:pb-16">

            <!-- Solution 1 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group">
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Enterprise & SME</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">High-capacity switching, routing, and robust endpoint security designed for growing corporate data centers.</p>
                </div>
            </div>

            <!-- Solution 2 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-6">
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">ISP & Telecom</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Carrier-grade core routers, fiber optics, and advanced traffic management for seamless connectivity providers.</p>
                </div>
            </div>

            <!-- Solution 3 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-12">
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M7.394 9.394c5.858-5.857 15.355-5.857 21.213 0"></path></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Hospitality WiFi</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">High-density wireless access and customized captive portals for flawless guest experiences across large venues.</p>
                </div>
            </div>

            <!-- Solution 4 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-18">
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Cloud Data Centers</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Resilient, scalable switching and intelligent virtualization hardware to power mission-critical workloads.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Export & Logistics Section -->
<section class="py-12 md:py-20 bg-gray-50 dark:bg-base dot-pattern relative overflow-hidden border-y border-gray-100 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left: Text content -->
            <div class="text-left">
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Global Trade</span>
                <h2
                    class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-6 tracking-tight">
                    Exporting Premier IT Equipment Across Africa & GCC</h2>
                <p class="text-base text-gray-500 dark:text-slate-400 mb-8 leading-relaxed">Nexhop Computers operates as a leading export hub based in the UAE. We facilitate large-scale, international distribution of top-tier IT and networking infrastructure. Our export division is dedicated to fueling the digital transformation of emerging markets through seamless logistics and aggressive wholesale pricing.</p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <span><strong>Bulk Volume Capabilities:</strong> Immediate fulfillment of large-scale project requirements directly from our local UAE warehouses.</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <span><strong>Aggressive Export Pricing:</strong> Direct distributor rates guaranteeing uncompromised margins for international system integrators.</span>
                    </li>
                    <li class="flex items-start text-sm text-gray-700 dark:text-slate-300">
                        <span class="w-6 h-6 rounded-full bg-blue-50 dark:bg-blue-500/10 text-blue-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <span><strong>Streamlined Freight Logistics:</strong> Rapid, secure transit via air and sea freight optimized for the Middle East and African markets.</span>
                    </li>
                </ul>

                <a href="/contact.php" class="btn-primary">Become a Reseller Partner</a>
            </div>

            <!-- Right: Visual Map/Card -->
            <div class="relative w-full text-center lg:text-right">
                <div class="absolute inset-0 bg-gradient-to-tr from-cyan-400/20 to-blue-600/20 rounded-full blur-[80px] -z-10 transform scale-75"></div>
                <div class="bg-gradient-to-br from-[#0B1F3A] to-blue-900 rounded-[2rem] p-1 shadow-2xl relative inline-block w-full max-w-md mx-auto lg:mr-0">
                    <div class="bg-surface rounded-[calc(2rem-4px)] p-8 h-full relative overflow-hidden">
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/connected.png')] opacity-10 mix-blend-overlay"></div>
                        
                        <div class="relative z-10 flex flex-col items-center justify-center text-center h-full min-h-[300px]">
                             <svg class="w-20 h-20 text-cyan-400 mb-6 drop-shadow-[0_0_15px_rgba(6,182,212,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                             </svg>
                             <h3 class="text-2xl font-black text-white mb-2 tracking-wide font-['Orbitron',sans-serif]">GLOBAL DELIVERY</h3>
                             <p class="text-blue-200 text-sm">Expanding your network capabilities beyond borders with certified distribution.</p>
                             <div class="mt-6 flex gap-3 justify-center">
                                 <span class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">UAE</span>
                                 <span class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">GCC</span>
                                 <span class="px-3 py-1 bg-white/10 rounded border border-white/20 text-xs font-bold text-white uppercase tracking-wider">Africa</span>
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Why Partner With Us</span>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-6 lg:mb-8 tracking-tight">
                    The Smart Choice for Enterprise IT Sourcing</h2>

                <div class="space-y-6 lg:space-y-7">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Ready UAE Stock
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Massive warehouse inventory ensuring zero lead-time for most high-demand networking equipment.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Wholesale Distributor Pricing
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Unbeatable rates optimized for system integrators, corporate bulk buys, and project tenders.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Guaranteed Authenticity</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">100% genuine products sourced directly with full manufacturer warranty and support.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image & Floating Metrics -->
            <div class="relative w-full mt-10 lg:mt-0">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600/15 to-cyan-400/15 rounded-full blur-[80px] -z-10 transform scale-90 translate-x-5 translate-y-5">
                </div>
                <img src="/assets/images/strategic-choice.png" alt="Nexhop Warehouse Logistics"
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
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">
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
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-4">
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
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent">
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
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent">
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
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent">
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
    // Hero Slider
    var currentSlide = 0;
    var slides = document.querySelectorAll('[data-hero-slide]');
    function nextSlide() {
        slides[currentSlide].classList.remove('opacity-100');
        slides[currentSlide].classList.add('opacity-0');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.remove('opacity-0');
        slides[currentSlide].classList.add('opacity-100');
    }
    setInterval(nextSlide, 5000);

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