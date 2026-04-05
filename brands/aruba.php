<?php
$brand_id = "aruba";
$brand_name = "Aruba";
$hero_subtitle = "Intelligent Edge Networking";
$brand_description = "Aruba by HPE delivers industry-leading WiFi 6, high-density AI-powered switching, and ClearPass security. We are your specialized supply partner for Aruba Instant On and Campus networking.";
$brand_logo = "https://www.arubanetworks.com/assets/img/logo/aruba-hpe-logo.svg";
$accent_color = "orange";
$accent_color_bg = "bg-orange-600";
$accent_color_text = "text-orange-400";

$pageTitle = "Aruba Authorized Supplier UAE - HPE Aruba, Instant On, ClearPass | Nexhop";
$pageDescription = "Leading Aruba distributor and supplier in Dubai, UAE. We stock Aruba Instant On APs, Enterprise Switches, and ClearPass security solutions.";

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/brand-functions.php';

$products = getProducts($brand_id);
?>

<!-- Hero Section -->
<div class="relative min-h-screen flex items-center bg-gray-950 text-white overflow-hidden">
    <!-- Static Background -->
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')]"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-orange-600/20 blur-[150px] rounded-full"></div>
    <div class="absolute inset-0 bg-blue-950/20"></div>
    
    <div class="container mx-auto px-6 relative z-10 pt-48 pb-32 md:pt-64 md:pb-48 lg:pt-80 lg:pb-64">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16 my-16 md:my-24">
            <div class="max-w-4xl text-center lg:text-left">
                <span class="inline-block px-6 py-3 bg-orange-600/20 text-orange-400 text-[10px] md:text-[12px] font-black uppercase tracking-[0.4em] rounded-full mb-10 border border-white/10 backdrop-blur-2xl">Official Specialized Supply</span>
                <h1 class="text-6xl md:text-8xl lg:text-9xl font-black mb-10 tracking-tighter leading-[0.85] font-[Poppins]">
                    <?php echo strtoupper($brand_name); ?><br>
                    <span class="text-white opacity-25"><?php echo $hero_subtitle; ?></span>
                </h1>
                <p class="text-base md:text-xl text-slate-300 leading-relaxed mb-14 max-w-2xl font-medium mx-auto lg:mx-0">
                    <?php echo $brand_description; ?>
                </p>
                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                    <a href="#catalog" class="bg-orange-600 hover:opacity-90 text-white px-10 md:px-14 py-5 md:py-7 rounded-2xl font-black transition-all shadow-2xl shadow-orange-600/40 text-[11px] md:text-[13px] uppercase tracking-widest">Explore Portfolio</a>
                    <a href="https://wa.me/971559026521" target="_blank" class="bg-white/10 hover:bg-white/20 border border-white/20 text-white px-10 md:px-14 py-5 md:py-7 rounded-2xl font-black transition-all backdrop-blur-md text-[11px] md:text-[13px] uppercase tracking-widest">WhatsApp Sales</a>
                </div>
            </div>
            
            <div class="w-full max-w-md lg:max-w-lg hidden lg:block">
                <div class="relative group">
                    <div class="absolute inset-0 bg-orange-600/30 blur-[100px] rounded-full transition-transform group-hover:scale-110"></div>
                    <div class="relative bg-white/5 backdrop-blur-3xl border border-white/10 p-16 rounded-[4rem] shadow-2xl overflow-hidden aspect-square flex items-center justify-center">
                        <span class="text-[180px] font-black tracking-tighter text-white opacity-5 select-none"><?php echo substr($brand_name, 0, 1); ?></span>
                        <div class="absolute inset-0 flex items-center justify-center p-16">
                             <img src="<?php echo $brand_logo; ?>" alt="<?php echo $brand_name; ?> Authorized Supplier" class="max-w-full h-auto drop-shadow-[0_20px_50px_rgba(255,255,255,0.2)]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="py-32 md:py-64 bg-white dark:bg-base relative overflow-hidden">
    <div class="container mx-auto px-6 pt-20 md:pt-32">
        <div class="max-w-4xl mb-24 md:mb-40 text-center md:text-left mx-auto md:mx-0 font-[Poppins]">
             <span class="text-orange-600 font-black text-[10px] md:text-[13px] tracking-[0.5em] uppercase mb-6 block">Core Capabilities</span>
             <h2 class="text-4xl md:text-7xl lg:text-8xl font-black text-gray-900 dark:text-white tracking-tighter leading-[0.95] uppercase italic">Intelligent Edge<br>Networking</h2>
             <p class="text-gray-500 dark:text-slate-400 mt-10 text-sm md:text-2xl font-medium leading-relaxed max-w-2xl">Deploying mission-critical wireless and campus core systems across the GCC with expert Aruba support.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-14">
            <div class="group p-10 md:p-14 rounded-[3rem] md:rounded-[4rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-orange-500/30 transition-all duration-500 hover:shadow-2xl hover:shadow-orange-500/5">
                <div class="w-16 h-16 rounded-2xl bg-white dark:bg-black/20 shadow-xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform text-orange-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-2xl md:text-3xl font-black text-gray-900 dark:text-white mb-6 tracking-tight uppercase font-[Poppins]">AIOps Management</h3>
                <p class="text-gray-500 dark:text-slate-400 text-sm md:text-base leading-relaxed font-medium">AI-driven troubleshooting and optimization to ensure your network stays healthy 24/7.</p>
            </div>
            
            <div class="group p-10 md:p-14 rounded-[3rem] md:rounded-[4rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-orange-500/30 transition-all duration-500 hover:shadow-2xl hover:shadow-orange-500/5">
                <div class="w-16 h-16 rounded-2xl bg-white dark:bg-black/20 shadow-xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform text-orange-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-2xl md:text-3xl font-black text-gray-900 dark:text-white mb-6 tracking-tight uppercase font-[Poppins]">Campus Security</h3>
                <p class="text-gray-500 dark:text-slate-400 text-sm md:text-base leading-relaxed font-medium">ClearPass integrations provide dynamic role-based access control for every device.</p>
            </div>
            
            <div class="group p-10 md:p-14 rounded-[3rem] md:rounded-[4rem] bg-gray-50 dark:bg-surface border border-gray-100 dark:border-white/5 hover:border-orange-500/30 transition-all duration-500 hover:shadow-2xl hover:shadow-orange-500/5">
                <div class="w-16 h-16 rounded-2xl bg-white dark:bg-black/20 shadow-xl flex items-center justify-center mb-10 group-hover:scale-110 transition-transform text-orange-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl md:text-3xl font-black text-gray-900 dark:text-white mb-6 tracking-tight uppercase font-[Poppins]">High Density</h3>
                <p class="text-gray-500 dark:text-slate-400 text-sm md:text-base leading-relaxed font-medium">Optimized for large stadiums, campuses, and busy corporate offices with hundreds of users.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stock Banner -->
<section class="py-24 md:py-40 bg-gray-900 border-y border-white/5 relative overflow-hidden">
    <div class="absolute inset-0 bg-orange-600/5 blur-[150px]"></div>
    <div class="container mx-auto px-6 relative z-10 font-[Poppins]">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 md:gap-20">
            <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-8 md:gap-14">
                <div class="w-28 h-28 rounded-[2.5rem] bg-white/5 border border-white/10 flex items-center justify-center shadow-2xl flex-shrink-0 backdrop-blur-md">
                    <svg class="w-12 h-12 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl md:text-4xl font-black text-white uppercase tracking-tight font-[Poppins]">Authorized UAE Stock Hub</h3>
                    <p class="text-slate-500 font-black uppercase text-[11px] md:text-[13px] tracking-[0.4em] mt-3">Ready for Immediate Project Dispatch</p>
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
        <div class="flex flex-col md:flex-row items-center md:items-end justify-between mb-24 md:mb-48 gap-12">
            <div class="max-w-3xl font-[Poppins]">
                <span class="text-orange-600 font-black text-[10px] md:text-[14px] tracking-[0.6em] uppercase mb-8 block font-black">Hardware Portfolio</span>
                <h2 class="text-4xl md:text-8xl font-black text-gray-900 dark:text-white tracking-tighter leading-none uppercase italic">Current Stock</h2>
            </div>
            <a href="/shop.php" class="px-14 py-7 bg-gray-100 dark:bg-white/5 rounded-2xl text-[12px] font-black uppercase tracking-widest hover:bg-orange-600 hover:text-white transition-all shadow-xl">Explore Master Catalog</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-14">
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
                <span class="text-orange-600 font-black text-[10px] md:text-[15px] tracking-[0.6em] uppercase mb-12 block">Authorized supply partner</span>
                <h2 class="text-5xl md:text-9xl font-black text-gray-900 dark:text-white mb-14 tracking-tighter leading-[0.8] uppercase font-[Poppins]">Scale Your<br>Network with<br>Aruba</h2>
                <div class="space-y-12 mt-16 max-w-xl mx-auto lg:mx-0">
                    <div class="flex items-start gap-8 group text-left">
                        <div class="w-16 h-16 rounded-2xl bg-white dark:bg-black/20 shadow-xl border border-gray-100 dark:border-white/5 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-all text-orange-600 font-black italic text-xl">01</div>
                        <div>
                            <h4 class="text-xl md:text-2xl font-black text-gray-900 dark:text-white mb-3 uppercase tracking-tight font-[Poppins]">Project Registration</h4>
                            <p class="text-base text-gray-500 dark:text-slate-400 leading-relaxed font-medium">Expert assistance for Aruba project registrations and HPE deal protection.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white dark:bg-black/20 p-10 md:p-16 lg:p-24 rounded-[4rem] md:rounded-[5rem] shadow-2xl border border-gray-100 dark:border-white/10 backdrop-blur-3xl relative">
                <div class="absolute -top-16 -right-16 w-48 h-48 bg-orange-600/10 blur-[80px] rounded-full"></div>
                <div class="text-center mb-14 md:mb-20">
                    <h3 class="text-3xl md:text-5xl font-black text-gray-900 dark:text-white mb-4 uppercase italic tracking-tighter font-[Poppins]">Fast Quote</h3>
                    <p class="text-[10px] md:text-[12px] text-gray-500 uppercase tracking-[0.4em] font-black">24-Hour Business Response</p>
                </div>
                <form action="/sendmail.php" method="POST" class="space-y-6 md:space-y-8">
                    <input type="hidden" name="brand" value="<?php echo $brand_name; ?>">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                        <input type="text" name="name" placeholder="Full Name" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-orange-500 transition-all outline-none">
                        <input type="email" name="email" placeholder="Business Email" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-orange-500 transition-all outline-none">
                    </div>
                    <input type="text" name="company" placeholder="Company Name" required class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-orange-500 transition-all outline-none">
                    <textarea name="message" placeholder="Describe your product requirements..." rows="5" class="w-full px-8 py-5 md:py-6 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-2xl text-[12px] font-bold focus:border-orange-500 transition-all outline-none resize-none"></textarea>
                    <button type="submit" class="w-full py-6 md:py-8 bg-orange-600 hover:bg-orange-700 text-white rounded-3xl font-black uppercase tracking-[0.3em] text-[11px] md:text-[13px] transition-all shadow-2xl shadow-orange-600/40">Request Authorized Pricing</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
