<?php
$pageTitle = 'Flash Fix Technologies | IT Solutions & Networking Experts Dubai';
$pageDescription = 'Professional IT infrastructure, networking, and hardware solutions provider in Dubai. Enterprise IT services, server installation, structured cabling, CCTV systems, and IT support across UAE.';
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="pt-6 sm:pt-8 pb-6 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-3 h-auto lg:h-[480px]">

            <!-- Main Column (75%) -->
            <div class="lg:w-3/4 h-[280px] sm:h-[360px] lg:h-full relative rounded-2xl overflow-hidden">
                <div id="hero-slider" class="h-full">
                    <!-- Slide 1 -->
                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-100" data-hero-slide>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-bl from-[#0052FF]/30 to-transparent z-10"></div>
                        <img src="/assets/images/structured-cabling-hero.png" alt="Data Center"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 z-20 flex items-end pb-6 sm:pb-10">
                            <div class="px-5 sm:px-8 max-w-lg">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-600/20 border border-blue-400/30 text-[10px] font-semibold text-blue-300 uppercase tracking-wider mb-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>Enterprise
                                    IT
                                </span>
                                <h1 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-2">Next-Gen
                                    <span class="text-cyan-400">Infrastructure</span> Solutions
                                </h1>
                                <p class="text-xs sm:text-sm text-gray-300 mb-4">Strategic IT management for
                                    forward-thinking enterprises.</p>
                                <a href="/contact.php" class="btn-primary text-xs">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-hero-slide>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-bl from-[#0052FF]/30 to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=1400"
                            alt="Networking" class="w-full h-full object-cover">
                        <div class="absolute inset-0 z-20 flex items-end pb-6 sm:pb-10">
                            <div class="px-5 sm:px-8 max-w-lg">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-600/20 border border-blue-400/30 text-[10px] font-semibold text-blue-300 uppercase tracking-wider mb-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>Connectivity
                                </span>
                                <h1 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-2">Seamless
                                    <span class="text-cyan-400">Networking</span> Solutions
                                </h1>
                                <p class="text-xs sm:text-sm text-gray-300 mb-4">High-speed structured cabling and
                                    enterprise network design.</p>
                                <a href="/services/switching-routing.php" class="btn-primary text-xs">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="absolute inset-0 transition-opacity duration-1000 opacity-0" data-hero-slide>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-bl from-[#0052FF]/30 to-transparent z-10"></div>
                        <img src="/assets/images/hikvision-hero-banner.png" alt="Hikvision Security"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 z-20 flex items-end pb-6 sm:pb-10">
                            <div class="px-5 sm:px-8 max-w-lg">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-600/20 border border-blue-400/30 text-[10px] font-semibold text-blue-300 uppercase tracking-wider mb-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>Security
                                    Partner
                                </span>
                                <h1 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-2">Secure
                                    <span class="text-cyan-400">Your Property Now</span>
                                </h1>
                                <p class="text-xs sm:text-sm text-gray-300 mb-4">Authorized Hikvision partner delivering
                                    advanced surveillance.</p>
                                <a href="/services/cctv-surveillance.php" class="btn-primary text-xs">View Systems</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Column (25%) -->
            <div class="lg:w-1/4 flex flex-row lg:flex-col gap-3 h-[160px] sm:h-[180px] lg:h-full">
                <!-- Character Highlight Card -->
                <div class="flex-[3] sm:flex-1 rounded-2xl overflow-hidden relative group bg-[#00C2FF] cursor-pointer"
                    onclick="location.href='/services/it-amc.php'">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0096C7] via-[#0096C7]/20 to-transparent z-10">
                    </div>
                    <img src="/assets/images/flash-fix-charactor.png"
                        class="bottom-0 right-[-10%] w-[120%] lg:w-[130%] object-contain group-hover:scale-102 transition-transform duration-500 origin-bottom z-10"
                        alt="Hardware Repair Expert">
                    <div class="absolute inset-x-0 bottom-0 z-20 p-3 sm:p-5 flex flex-col justify-end h-full">
                        <div>
                            <span
                                class="inline-block px-2 py-0.5 bg-white/20 backdrop-blur-sm rounded text-[8px] sm:text-[10px] font-bold text-white uppercase tracking-wider mb-1">Expert
                                Team</span>
                            <h3 class="text-white font-extrabold text-sm sm:text-lg leading-tight ">
                                Hardware Repair<br>& Data Recovery</h3>
                        </div>
                    </div>
                </div>
                <!-- Cloud Solutions Card -->
                <div class="flex-[3] sm:flex-1 rounded-2xl overflow-hidden relative group bg-[#00C2FF] cursor-pointer"
                    onclick="location.href='/services/azure-cloud-solutions.php'">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0096C7] via-[#0096C7]/20 to-transparent z-10">
                    </div>
                    <img src="/assets/images/cloud-solutions.png"
                        class="bottom-0 right-[-10%] w-[120%] lg:w-[130%] object-contain group-hover:scale-102 transition-transform duration-500 origin-bottom z-10"
                        alt="Cloud Solutions">
                    <div class="absolute inset-x-0 bottom-0 z-20 p-3 sm:p-5 flex flex-col justify-end h-full">
                        <div>
                            <span
                                class="inline-block px-2 py-0.5 bg-white/20 backdrop-blur-sm rounded text-[8px] sm:text-[10px] font-bold text-white uppercase tracking-wider mb-1">Scale
                                Smart</span>
                            <h3 class="text-white font-extrabold text-sm sm:text-lg leading-tight ">
                                Azure Cloud &<br>Hosting Solutions</h3>
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
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">CISCO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HPE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DELL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">LENOVO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">FORTINET</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MICROSOFT</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">UBIQUITI</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SYNOLOGY</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HIKVISION</span>
                <!-- Duplicate for infinite scroll -->
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">CISCO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HPE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">DELL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">LENOVO</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">FORTINET</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MICROSOFT</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">UBIQUITI</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">SYNOLOGY</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">HIKVISION</span>
            </div>

            <!-- Row 2: Networking Brands (Reverse) -->
            <div
                class="flex items-center space-x-14 w-max animate-logo-carousel-reverse hover:[animation-play-state:paused] whitespace-nowrap">
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">JUNIPER</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">ARUBA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MIKROTIK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">TP-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">D-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">NETGEAR</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">ZYXEL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">RUIJIE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">PANDUIT</span>
                <!-- Duplicate for infinite scroll -->
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">JUNIPER</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">ARUBA</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">MIKROTIK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">TP-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">D-LINK</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">NETGEAR</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">ZYXEL</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">RUIJIE</span>
                <span
                    class="text-lg sm:text-xl font-semibold text-slate-400 dark:text-slate-500 hover:text-blue-500 dark:hover:text-blue-400 transition-colors cursor-default">PANDUIT</span>
            </div>
        </div>
    </div>
</section>

<!-- Services Bento Grid -->
<section class="py-16 md:py-24 bg-gray-50 dark:bg-base dot-pattern relative overflow-hidden">
    <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white dark:from-surface to-transparent z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">What We
                Deliver</span>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">
                Enterprise IT Solutions</h2>
            <p class="text-base sm:text-lg text-gray-500 dark:text-slate-400 max-w-2xl mx-auto">Comprehensive, robust,
                and scalable technology services to empower your business operations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6 auto-rows-[minmax(280px,auto)]">

            <!-- Bento Card 1: Wide (Cyber Security) -->
            <div
                class="lg:col-span-2 bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between">
                <div
                    class="absolute -top-24 -right-24 w-64 h-64 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors">
                </div>

                <!-- Character Embedded -->
                <div
                    class="absolute bottom-0 right-[-10px] sm:right-[10px] w-[150px] md:w-[220px] pointer-events-none z-0 group-hover:scale-105 transition-transform duration-500 origin-bottom">
                    <img src="/assets/images/cloud-solutions.png" alt="FlashFix Expert"
                        class="w-full h-auto object-contain">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 text-white flex items-center justify-center mb-6 shadow-lg shadow-blue-600/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="relative z-10 md:w-2/3 lg:w-3/4">
                    <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-snug">
                        Cyber Security & Protection</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6 leading-relaxed">Advanced next-generation
                        firewalls, endpoint protection, complete vulnerability management, and threat intelligence to
                        secure your digital assets.</p>
                    <a href="/services/cyber-security-solutions.php"
                        class="inline-flex items-center text-blue-600 dark:text-blue-400 text-sm font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Secure
                        Your Network <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg></a>
                </div>
            </div>

            <!-- Bento Card 2: Square (Networking) -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Networking & Cabling</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">High-speed switching, routing, and fiber
                        structured cabling.</p>
                </div>
                <a href="/services/switching-routing.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Learn
                    More <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Bento Card 3: Square (Cloud) -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Cloud Solutions</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">Azure migration, Microsoft 365, and
                        intelligent cloud hosting.</p>
                </div>
                <a href="/services/azure-cloud-solutions.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">Learn
                    More <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Bento Card 4: Standard (CCTV) -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-md transition-all p-8 relative overflow-hidden group flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">CCTV & Surveillance</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-6">Smart cameras, biometric access control,
                        and continuous monitoring.</p>
                </div>
                <a href="/services/cctv-surveillance.php"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 text-xs font-bold hover:text-blue-800 dark:hover:text-cyan-400 transition-colors">See
                    Systems <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Bento Card 5: Square Format (Server & IT AMC) -->
            <div
                class="bg-gradient-to-br from-blue-600 to-[#0B1F3A] rounded-[2rem] border border-blue-500/30 shadow-lg hover:shadow-xl transition-all p-8 relative overflow-hidden group flex flex-col justify-between">
                <div
                    class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-xl bg-white/10 text-white flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-white mb-2">Server & IT AMC</h3>
                    <p class="text-sm text-blue-100 mb-6">24/7 dedicated IT support, server maintenance, and AMC.</p>
                </div>
                <a href="/services/it-amc.php"
                    class="relative z-10 inline-flex items-center text-white text-xs font-bold hover:text-cyan-400 transition-colors">Get
                    AMC Quote <svg class="w-3 h-3 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>
        </div>

        <!-- View All Services Link -->
        <div class="mt-16 text-center animate-fade-in-up">
            <a href="/services.php"
                class="inline-flex items-center px-10 py-5 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white font-black text-sm tracking-widest uppercase transition-all duration-300 shadow-xl shadow-blue-600/30 hover:shadow-2xl hover:shadow-blue-600/40 transform hover:-translate-y-1 group">
                View All Services
                <svg class="w-5 h-5 ml-2.5 group-hover:translate-x-1.5 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Our Delivery Methodology -->
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
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Our
                Methodology</span>
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                How We Deliver Excellence</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400">A proven framework for
                implementing IT solutions that drive growth and maximize ROI.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative z-10 pb-6 lg:pb-16">

            <!-- Step 1 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group">
                <!-- Hover Glow -->
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        1
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Discover</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Comprehensive audit of your
                        current IT infrastructure and requirements.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-6">
                <!-- Hover Glow -->
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        2
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Design</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Architecting secure, scalable,
                        and cost-effective tech solutions.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-12">
                <!-- Hover Glow -->
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        3
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Deploy</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Seamless implementation and
                        integration with minimal disruption.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 p-8 relative overflow-hidden group lg:translate-y-18">
                <!-- Hover Glow -->
                <div
                    class="absolute -top-24 -right-24 w-48 h-48 bg-blue-100 dark:bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-200 dark:group-hover:bg-blue-500/20 transition-colors pointer-events-none">
                </div>

                <div class="relative z-10">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-cyan-400 font-extrabold text-lg flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm border border-blue-100 dark:border-white/10 group-hover:border-transparent">
                        4
                    </div>
                    <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2 tracking-snug">Support</h3>
                    <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">24/7 proactive monitoring,
                        maintenance, and technical assistance.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Managed IT Plans -->
<section class="py-12 md:py-20 bg-gray-50 dark:bg-base dot-pattern relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-left mb-10 md:mb-12 max-w-2xl">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">IT Support
                Packages</span>
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">
                Managed IT AMC Solutions</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400">Predictable IT costs
                with comprehensive SLA-backed support for your entire organization.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-center max-w-6xl mx-auto">

            <!-- Basic Plan -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] p-8 lg:p-10 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full relative group">
                <div class="mb-6">
                    <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-2">Essential</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400">Perfect for small businesses needing reliable
                        remote assistance.</p>
                </div>
                <div class="mb-8 pb-8 border-b border-gray-100 dark:border-white/10 flex-grow">
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Unlimited Remote Support
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            8/5 Helpdesk Access
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Basic Preventative Maintenance
                        </li>
                        <li class="flex items-center text-sm text-gray-400 dark:text-slate-600">
                            <span
                                class="w-6 h-6 rounded-full bg-gray-50 dark:bg-white/5 text-gray-400 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg></span>
                            On-Site Visits (Billed separately)
                        </li>
                    </ul>
                </div>
                <a href="/contact.php"
                    class="block w-full text-center py-3.5 px-4 rounded-xl bg-gray-50 dark:bg-white/5 text-gray-900 dark:text-white text-sm font-extrabold hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">Request
                    Quote</a>
            </div>

            <!-- Premium Plan -->
            <div
                class="bg-gradient-to-br from-blue-600 to-[#0B1F3A] rounded-[2rem] p-8 lg:p-10 border border-blue-500/30 shadow-[0_20px_40px_-15px_rgba(1,83,253,0.5)] flex flex-col h-full relative group transform md:-translate-y-6 z-10 overflow-hidden">
                <div
                    class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay">
                </div>
                <div
                    class="absolute top-0 right-0 bg-gradient-to-r from-cyan-400 to-blue-500 text-white text-[10px] font-bold uppercase tracking-widest py-1.5 px-4 rounded-bl-2xl rounded-tr-[2rem] shadow-sm">
                    Most Popular
                </div>

                <div class="mb-6 relative z-10">
                    <h3 class="text-2xl font-extrabold text-white mb-2 pt-2">Professional</h3>
                    <p class="text-sm text-blue-100">Comprehensive IT management for growing enterprises.</p>
                </div>
                <div class="mb-8 pb-8 border-b border-white/10 flex-grow relative z-10">
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm text-white">
                            <span
                                class="w-6 h-6 rounded-full bg-white/20 text-white flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Unlimited Remote & On-Site
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <span
                                class="w-6 h-6 rounded-full bg-white/20 text-white flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            24/7 System Monitoring
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <span
                                class="w-6 h-6 rounded-full bg-white/20 text-white flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Scheduled Preventive Visits
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <span
                                class="w-6 h-6 rounded-full bg-white/20 text-white flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            IT Strategy & Consulting
                        </li>
                    </ul>
                </div>
                <a href="/contact.php"
                    class="relative z-10 block w-full text-center py-3.5 px-4 rounded-xl bg-white text-blue-700 text-sm font-extrabold hover:bg-gray-50 transition-colors shadow-lg">Request
                    Quote <svg class="w-4 h-4 inline-block ml-1 -mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg></a>
            </div>

            <!-- Enterprise Plan -->
            <div
                class="bg-white dark:bg-surface rounded-[2rem] p-8 lg:p-10 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full relative group">
                <div class="mb-6">
                    <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-2">Enterprise</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400">Total IT outsourcing with dedicated enterprise
                        resources.</p>
                </div>
                <div class="mb-8 pb-8 border-b border-gray-100 dark:border-white/10 flex-grow">
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Dedicated On-Site Engineer (Opt)
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Fast-Track VIP SLA
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Advanced Cyber Security Mgmt
                        </li>
                        <li class="flex items-center text-sm text-gray-600 dark:text-slate-300">
                            <span
                                class="w-6 h-6 rounded-full bg-green-50 dark:bg-green-500/10 text-green-500 flex items-center justify-center mr-3 flex-shrink-0"><svg
                                    class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7"></path>
                                </svg></span>
                            Business Continuity Planning
                        </li>
                    </ul>
                </div>
                <a href="/contact.php"
                    class="block w-full text-center py-3.5 px-4 rounded-xl bg-gray-50 dark:bg-white/5 text-gray-900 dark:text-white text-sm font-extrabold hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">Request
                    Quote</a>
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Why Us</span>
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-6 lg:mb-8 tracking-tight">
                    Why Flash Fix Technologies?</h2>

                <div class="space-y-6 lg:space-y-7">
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
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Unmatched Expertise
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Certified engineers
                                with decades of combined frontline experience.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">24/7 Rapid Response
                            </h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Immediate critical IT
                                support dispatch when you need it the most.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 bg-blue-50 dark:bg-blue-600/10 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-1">Client-Centric
                                Philosophy</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">We forge long-term,
                                synergistic partnerships built unconditionally on trust.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image & Floating Metrics -->
            <div class="relative w-full mt-10 lg:mt-0">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600/15 to-cyan-400/15 rounded-full blur-[80px] -z-10 transform scale-90 translate-x-5 translate-y-5">
                </div>
                <img src="/assets/images/strategic-choice.png" alt="FlashFix Professional Team"
                    class="rounded-[2rem] w-full lg:w-[90%] h-auto lg:ml-auto shadow-xl relative border border-gray-100 dark:border-white/5 object-cover z-10">

                <!-- Floating Metrics Bento Card (Minimalist) -->
                <div
                    class="lg:absolute lg:-bottom-8 lg:-left-6 mt-6 lg:mt-0 bg-white dark:bg-surface rounded-3xl p-6 shadow-[0_15px_30px_-10px_rgba(0,0,0,0.1)] border border-gray-100 dark:border-white/5 w-full lg:w-[70%] z-20 backdrop-blur-xl bg-opacity-95 dark:bg-opacity-95">
                    <div class="grid grid-cols-2 gap-y-6 gap-x-4 relative">
                        <div class="text-left">
                            <div class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5"
                                data-counter="500">0</div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold">
                                Projects Done</p>
                        </div>
                        <div class="text-left">
                            <div
                                class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5">
                                <span>24</span>*<span>7</span>
                            </div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold">
                                Support SLA</p>
                        </div>
                        <div class="text-left">
                            <div class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5"
                                data-counter="150">0</div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                Enterprise Clients</p>
                        </div>
                        <div class="text-left">
                            <div
                                class="text-2xl font-extrabold text-gray-900 dark:text-white font-[Poppins] tracking-tight mb-0.5">
                                <span data-counter="05">0</span>
                            </div>
                            <p
                                class="text-[9px] text-blue-600 dark:text-cyan-400 uppercase tracking-widest font-extrabold text-nowrap">
                                Years Experience</p>
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
                    ["Ahmed Khalid", "CEO, Zenix Logistics", "Flash Fix transformed our connectivity overnight. Professional, fast, and unconditional support. The team's expertise is unmatched in the region."],
                    ["Sarah Bennett", "IT Manager, Nexus Corp", "The automated security audit they deployed was incredibly eye-opening. We patched three critical vulnerabilities. We feel completely secure now."],
                    ["Rajesh Kumar", "Operations, Al-Futtaim", "A massive server outage brought our commerce system offline. FlashFix resolved the routing issue in an hour. Absolute lifesavers."],
                    ["James Wilson", "Director, Cloud9 Tech", "Scaling our infrastructure was a nightmare until Flash Fix took over. Zero downtime migrations are their specialty."],
                    ["Fatima Al-Sayed", "Founder, Bloom Media", "The most reliable IT AMC partner in Dubai. Their preventive maintenance saved us from multiple potential crashes."],
                    ["David Chen", "CTO, Fintech Solutions", "Their cybersecurity framework is world-class. We passed our compliance audit with flying colors thanks to their team."],
                    ["Amir Hassan", "Manager, Gulf Trading", "Seamless transition to Microsoft 365. Their training and support made it easy for our team to adapt."],
                    ["Elena Petrova", "Head of IT, Grand Hotel", "The 24/7 monitoring service gives me peace of mind. They always detect and fix issues before we even notice."],
                    ["Marcus Thorne", "Founder, Elite Estates", "Custom networking solutions that actually work. Our multi-site office connectivity is now rock solid."],
                    ["Laila Mansour", "COO, Tradewinds Co", "Flash Fix delivers on their promises. Their response time for emergency support is genuinely under 60 minutes."]
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
                    class="px-2.5 py-0.5 bg-white/10 text-white text-[8px] font-extrabold uppercase tracking-[0.2em] rounded-full border border-white/20 backdrop-blur-md mb-4 inline-block">Flash
                    Fix Enterprise</span>
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