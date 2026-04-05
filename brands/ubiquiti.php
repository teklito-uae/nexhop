<?php
$brand_id = "ubiquiti";
$brand_name = "Ubiquiti";
$hero_subtitle = "UniFi & UISP Ecosystems";
$brand_description = "Next-generation networking for the modern era. We stock the complete range of UniFi, UISP, and EdgeMAX solutions for UAE enterprise and SMB infrastructure.";
$brand_logo = "https://upload.wikimedia.org/wikipedia/commons/3/3d/Ubiquiti_Logo_Horizontal.png";
$accent_color = "blue";
$accent_color_bg = "bg-blue-600";
$accent_color_text = "text-blue-400";
$hero_video = "https://ui.com/microsite/static/hero-BHn7cJzy.mp4";

$pageTitle = "Ubiquiti Authorized Supplier UAE - UniFi, UISP, EdgeMax Stock | Nexhop";
$pageDescription = "Leading Ubiquiti distributor and supplier in Dubai, UAE. We stock UniFi Access Points, Dream Machines, UISP Wireless, and EdgeMax routing for projects.";

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/brand-functions.php';

$products = getProducts($brand_id);
?>

<!-- Hero Section -->
<div class="relative min-h-screen flex items-center bg-gray-950 text-white overflow-hidden">
    <!-- Video Background -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-60">
        <source src="<?php echo $hero_video; ?>" type="video/mp4">
    </video>
    <!-- Dark Blue Overlays -->
    <div class="absolute inset-0 bg-blue-950/70 mix-blend-multiply"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-gray-950 via-gray-950/60 to-transparent"></div>
    
    <div class="container mx-auto px-6 relative z-10 pt-56 pb-32 md:pt-72 md:pb-48 lg:pt-96 lg:pb-64">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-16 lg:gap-24 my-32 md:my-48">
            <div class="max-w-4xl text-center lg:text-left">
                <span class="inline-block px-6 py-3 bg-blue-600/20 text-blue-400 text-[10px] md:text-[11px] font-black uppercase tracking-[0.3em] rounded-full mb-8 border border-white/10 backdrop-blur-2xl">Official Specialized Supply</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 tracking-tighter leading-tight font-[Poppins]">
                    <?php echo strtoupper($brand_name); ?><br>
                    <span class="text-white opacity-40 text-2xl md:text-3xl block mt-2"><?php echo $hero_subtitle; ?></span>
                </h1>
                <p class="text-sm md:text-base text-slate-300 leading-relaxed mb-10 max-w-2xl font-medium mx-auto lg:mx-0">
                    <?php echo $brand_description; ?>
                </p>
                <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#catalog" class="bg-blue-600 hover:opacity-90 text-white px-10 md:px-14 py-5 md:py-7 rounded-2xl font-black transition-all shadow-2xl shadow-blue-600/40 text-[11px] md:text-[13px] uppercase tracking-widest">Explore Portfolio</a>
                    <a href="https://wa.me/971559026521" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 text-white px-10 md:px-14 py-5 md:py-7 rounded-2xl font-black transition-all backdrop-blur-md text-[11px] md:text-[13px] uppercase tracking-widest">WhatsApp Sales</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="py-32 md:py-64 bg-white dark:bg-base relative overflow-hidden">
    <div class="container mx-auto px-6 pt-32 md:pt-48">
        <div class="max-w-4xl mb-32 md:mb-48 text-center md:text-left mx-auto md:mx-0 font-[Poppins]">
             <span class="text-blue-600 font-black text-[9px] md:text-[10px] tracking-widest uppercase mb-4 block">Core Capabilities</span>
             <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-900 dark:text-white tracking-tighter leading-tight uppercase italic">Essential Ubiquiti<br>Frameworks</h2>
             <p class="text-gray-500 dark:text-slate-400 mt-8 text-sm md:text-base font-medium leading-relaxed max-w-2xl">Deploying mission-critical infrastructure across the GCC and African markets with authorized support.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 md:gap-16">
            <div class="group p-8 md:p-12 rounded-[2rem] md:rounded-[3rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-white dark:bg-black/20 shadow-sm flex items-center justify-center mb-6 group-hover:scale-105 transition-transform text-blue-600 border border-gray-100 dark:border-white/5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-base md:text-lg font-black text-gray-900 dark:text-white mb-3 tracking-snug uppercase font-[Poppins]">UniFi Ecosystem</h3>
                <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed font-medium">A seamless integration of WiFi, Switching, and Security cameras under one centralized controller.</p>
            </div>
            
            <div class="group p-8 md:p-10 rounded-[2rem] md:rounded-[3rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-white dark:bg-black/20 shadow-sm flex items-center justify-center mb-6 group-hover:scale-105 transition-transform text-blue-600 border border-gray-100 dark:border-white/5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-base md:text-lg font-black text-gray-900 dark:text-white mb-3 tracking-snug uppercase font-[Poppins]">No Licensing Fees</h3>
                <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed font-medium">Enjoy enterprise-grade networking features without any recurring subscription or license costs.</p>
            </div>
            
            <div class="group p-8 md:p-10 rounded-[2rem] md:rounded-[3rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-white dark:bg-black/20 shadow-sm flex items-center justify-center mb-6 group-hover:scale-105 transition-transform text-blue-600 border border-gray-100 dark:border-white/5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                </div>
                <h3 class="text-base md:text-lg font-black text-gray-900 dark:text-white mb-3 tracking-snug uppercase font-[Poppins]">Massive Scalability</h3>
                <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed font-medium">Designed to grow with your business, from a single AP to global multi-site deployments.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stock Banner -->
<section class="py-24 md:py-40 bg-gray-900 border-y border-white/5 relative overflow-hidden">
    <div class="absolute inset-0 bg-blue-600/5 blur-[150px]"></div>
    <div class="container mx-auto px-6 relative z-10 font-[Poppins]">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 md:gap-20">
            <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-8 md:gap-14">
                <div class="w-28 h-28 rounded-[2.5rem] bg-white/5 border border-white/10 flex items-center justify-center shadow-2xl flex-shrink-0 backdrop-blur-md">
                    <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-white uppercase tracking-tight font-[Poppins] leading-tight">Authorized UAE Stock Hub</h3>
                    <p class="text-slate-500 font-bold uppercase text-[9px] md:text-[10px] tracking-widest mt-2">Ready for Immediate Project Dispatch</p>
                </div>
            </div>
            <div class="flex items-center gap-12 md:gap-20 border-t md:border-t-0 md:border-l border-white/10 pt-10 md:pt-0 md:pl-20 w-full lg:w-auto justify-center">
                <div class="text-center">
                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter mb-2 tracking-widest">100%</span>
                    <span class="block text-[10px] md:text-[11px] font-black text-slate-500 uppercase tracking-[0.3em]">Authorized</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl md:text-6xl font-black text-white tracking-tighter mb-2 tracking-widest">24H</span>
                    <span class="block text-[10px] md:text-[11px] font-black text-slate-500 uppercase tracking-[0.3em]">Procurement</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Catalog Section -->
<section id="catalog" class="py-32 md:py-64 bg-white dark:bg-base relative overflow-hidden text-center md:text-left">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center md:items-end justify-between mb-24 md:mb-40 gap-12">
            <div class="max-w-3xl font-[Poppins]">
                <span class="text-blue-600 font-black text-[9px] md:text-[10px] tracking-widest uppercase mb-6 block">Hardware Portfolio</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-900 dark:text-white tracking-tighter leading-tight uppercase italic">Current Stock</h2>
            </div>
            <a href="/shop.php" class="px-14 py-7 bg-gray-100 dark:bg-white/5 rounded-2xl text-[12px] font-black uppercase tracking-widest hover:bg-blue-600 hover:text-white transition-all shadow-xl">Explore Master Catalog</a>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-12 md:gap-16">
            <?php
            if (empty($products)) {
                echo '<div class="col-span-4 py-32 text-center"><p class="text-gray-400 italic font-medium text-xl">New stock arriving soon. Please contact sales for specialized models.</p></div>';
            } else {
                foreach ($products as $product) {
                    renderProductCard($product);
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Partnership Section -->
<section class="py-32 md:py-80 bg-gray-50 dark:bg-surface border-t border-gray-100 dark:border-white/5 overflow-hidden">
    <div class="container mx-auto px-6 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32 lg:gap-56 items-center">
            <div class="text-center lg:text-left">
                <span class="text-blue-600 font-black text-[9px] md:text-[10px] tracking-widest uppercase mb-6 block">Authorized supply partner</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-8 tracking-tighter leading-tight uppercase font-[Poppins]">Scale Your<br>Network with<br>Ubiquiti</h2>
                <div class="space-y-8 mt-10 max-w-xl mx-auto lg:mx-0">
                    <div class="flex items-start gap-8 group text-left">
                        <div class="w-16 h-16 rounded-2xl bg-white dark:bg-black/20 shadow-xl border border-gray-100 dark:border-white/5 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all text-blue-600 font-black italic text-xl">01</div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-black text-gray-900 dark:text-white mb-3 uppercase tracking-tight font-[Poppins]">Project Registration</h4>
                            <p class="text-base text-gray-500 dark:text-slate-400 leading-relaxed font-medium">Expert assistance for project registrations to ensure maximum discounts and dealer protection.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-black/20 p-10 md:p-16 lg:p-24 rounded-[4rem] md:rounded-[5rem] shadow-2xl border border-gray-100 dark:border-white/10 backdrop-blur-3xl relative">
                <div class="absolute -top-16 -right-16 w-48 h-48 bg-blue-600/10 blur-[80px] rounded-full"></div>
                <div class="text-center mb-10 md:mb-14">
                    <h3 class="text-2xl md:text-3xl font-black text-gray-900 dark:text-white mb-2 uppercase italic tracking-tighter font-[Poppins]">Fast Quote</h3>
                    <p class="text-[9px] text-gray-500 uppercase tracking-widest font-bold">24-Hour Business Response</p>
                </div>
                <form action="/sendmail.php" method="POST" class="space-y-6 md:space-y-8">
                    <input type="hidden" name="brand" value="<?php echo $brand_name; ?>">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                        <input type="text" name="name" placeholder="Full Name" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-blue-500 transition-all outline-none">
                        <input type="email" name="email" placeholder="Business Email" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-blue-500 transition-all outline-none">
                    </div>
                    <input type="text" name="company" placeholder="Company Name" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-blue-500 transition-all outline-none">
                    <textarea name="message" placeholder="Describe your product requirements..." rows="5" class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-blue-500 transition-all outline-none resize-none"></textarea>
                    <button type="submit" class="w-full py-6 md:py-8 bg-blue-600 hover:bg-blue-700 text-white rounded-3xl font-black uppercase tracking-[0.3em] text-[11px] md:text-[13px] transition-all shadow-2xl shadow-blue-600/40">Request Authorized Pricing</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
