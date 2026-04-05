<?php
$brand_id = "yealink";
$brand_name = "Yealink";

$pageTitle = "Yealink Supplier UAE — Yealink IP Phone & Video Conferencing Distributor Dubai | Nexhop";
$pageDescription = "Yealink supplier in Dubai. Wholesale T5/T4 IP phones, MeetingBar, MVC Teams/Zoom rooms, W-series DECT, WH headsets at wholesale prices for UAE resellers and VoIP integrators.";

include '../includes/header.php';
include '../includes/navbar.php';

$products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true)['products'] ?? [];
$brand_products = array_filter($products, fn($p) => $p['brand'] === 'yealink');
?>

<!-- Brand Hero Banner -->
<section class="mt-4 sm:mt-8 py-6 md:py-12 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-xl md:rounded-2xl overflow-hidden">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-blue-700 to-blue-900"></div>
            <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M0%200h60v60H0z%22%20fill%3D%22%23fff%22%20fill-opacity%3D%220.05%22%2F%3E%3C%2Fsvg%3E'); background-size: 20px 20px;"></div>
            <div class="relative px-6 py-10 md:py-14 md:px-10 flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="flex-1 text-white">
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">Yealink Authorized Partner UAE</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 mt-2 leading-tight">Yealink Supplier in Dubai, UAE</h1>
                    <p class="text-sm text-blue-100 max-w-xl">Unified communications from desk to boardroom. T5 Series flagship IP phones, MeetingBar video bars, MVC Teams/Zoom room systems, W-series DECT, and WH wireless headsets — wholesale pricing from our Dubai warehouse.</p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request Yealink Pricing</a>
                        <a href="https://wa.me/971559026521" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp Sales</a>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 hidden sm:flex bg-white/10 rounded-2xl border border-white/20 flex items-center justify-center backdrop-blur-sm">
                        <span class="text-5xl font-black text-white/30">YL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Brand -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">About Yealink</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">Yealink IP Phones & Video Conferencing Products Available in UAE</h2>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Yealink, founded in 2001 and headquartered in Xiamen, China, is one of the world's largest UC endpoint manufacturers with 6,000+ employees serving 140+ countries. Nexhop supplies Yealink T5/T4 Series SIP phones, MeetingBar A20/A30 video conferencing bars, MVC room systems for Teams/Zoom, W-series DECT cordless phones, and WH-series wireless headsets from our Dubai warehouse at wholesale prices for UAE resellers, VoIP integrators, and enterprises deploying modern UC solutions.</p>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-6">Nexhop Computers is a trusted Yealink supplier and distributor operating from our Dubai warehouse. We maintain stock across the full Yealink product portfolio including T5/T4 Series IP phones, MeetingBar A20/A30/A20-T video bars, MVC300/MVC400/MVC800 room systems, W60B/W70B DECT base stations, and WH62/WH67 wireless headsets for resellers, system integrators, and enterprise UC deployments across the UAE, GCC, and Africa.</p>
                <div class="grid grid-cols-2 sm:grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">2001</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Founded</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">Xiamen</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">HQ CN</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">6K+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Employees</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">140+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Countries</div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 text-white">
                <div class="grid grid-cols-2 gap-3 sm:gap-4 md:gap-6">
                    <div>
                        <div class="text-xl sm:text-2xl md:text-3xl font-extrabold mb-0.5 sm:mb-1">500+</div>
                        <div class="text-xs text-blue-100">SKUs in Stock UAE</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl md:text-3xl font-extrabold mb-0.5 sm:mb-1">24hr</div>
                        <div class="text-xs text-blue-100">UAE Dispatch</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl md:text-3xl font-extrabold mb-0.5 sm:mb-1">100%</div>
                        <div class="text-xs text-blue-100">Genuine Products</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl md:text-3xl font-extrabold mb-0.5 sm:mb-1">15+</div>
                        <div class="text-xs text-blue-100">Export Markets</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="py-16 md:py-24 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 md:mb-16">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Product Lines</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">Yealink Product Categories We Supply in UAE</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From T54W flagship phones to MVC840 boardroom systems, we stock the complete Yealink UC endpoint range at wholesale Dubai prices.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">T5 Series Flagship Phones</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">T54W, T58W, T57W — Android-based flagship SIP phones with color displays, Bluetooth, and USB headset support.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get T5 Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">T3/T4 Mid-Range Phones</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">T46W, T48G, T43U, T41S, T42S — mid-range SIP phones ideal for call center and executive desk deployments.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get T4 Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">MeetingBar Video Bars</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">A10, A20, A30 — all-in-one Android video bars for huddle rooms and medium rooms, MS Teams and Zoom certified.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get MeetingBar Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">MVC Room Systems</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">MVC300, MVC400, MVC800, MVC840 — modular video conferencing with camera, micspeakers, and MTouch controller.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get MVC Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">W-Series DECT Phones</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">W60B/W70B base + W73H/W76H cordless handsets — DECT IP phones for warehouses, hospitality, campus environments.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get DECT Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">WH Wireless Headsets</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">WH62, WH67 — dual-connect USB/Bluetooth wireless headsets for open office and remote work setups.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Headset Pricing →</span>
            </a>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Use Cases</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Who Uses Yealink in the UAE?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Contact Centers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">T5/T4 SIP phones with SIP trunk integration for enterprise VoIP call centers with advanced call queue management.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Teams/Zoom Rooms</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">MeetingBar A20/A30 and MVC800 for modern meeting rooms with one-touch join and 4K camera integration.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Hospitality & Campus</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">W-series DECT with roaming handsets for hotels, warehouses, and campus environments with seamless call handoff.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Grid (if products exist) -->
<?php if (!empty($brand_products)): ?>
<section class="py-16 md:py-24 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Current Stock</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Popular Yealink Products</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            <?php foreach (array_slice($brand_products, 0, 8) as $product): ?>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-2xl border border-gray-100 dark:border-white/5 p-4 hover:shadow-lg transition-all">
                <div class="aspect-square bg-gray-50 dark:bg-base rounded-xl mb-3 overflow-hidden flex items-center justify-center">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform" onerror="this.parentElement.innerHTML='<span class=\'text-2xl text-gray-300\'>📦</span>'">
                </div>
                <h3 class="text-xs font-extrabold text-gray-900 dark:text-white leading-tight"><?php echo $product['name']; ?></h3>
                <span class="inline-block mt-2 text-[10px] font-bold text-blue-600">Request Quote →</span>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-12">
            <a href="/contact.php" class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 hover:opacity-90 text-white font-semibold px-6 py-2.5 rounded-full transition-all text-sm">Request Full Yealink Quote</a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- FAQ -->
<section class="py-16 md:py-24 bg-white dark:bg-surface relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-10 md:mb-12 text-left max-w-2xl">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">FAQ</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight mb-3">
                Frequently Asked Questions</h2>
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers about Yealink IP phones, video conferencing, and wholesale pricing from our Dubai warehouse.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Are you an authorized Yealink distributor in UAE?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Nexhop Computers is an authorized Yealink supplier operating from our Dubai warehouse. We stock the complete Yealink UC endpoint range including T5/T4 Series IP phones, MeetingBar video conferencing systems, MVC Teams/Zoom room systems, W-series DECT, and WH wireless headsets with full manufacturer warranty.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Which Yealink IP phone is best for my desk?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">For executives, the T58W with 7-inch touchscreen and video calling. For general staff, the T54W offers excellent value. For call center agents, the T43U or T46W provide reliable SIP performance with programmable keys.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do Yealink MeetingBars work with Microsoft Teams and Zoom?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Yealink MeetingBar models include Teams-certified variants (MeetingBar A20-T, A30-T) and Zoom-certified variants (MeetingBar A20, A30). Both support one-touch join, built-in AI camera with auto-framing, and integrated microphone arrays.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you ship Yealink products to other GCC countries?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we export Yealink equipment to over 15 countries across GCC and Africa. We handle air freight and sea freight logistics from our Dubai hub. Same-day dispatch for UAE orders; 3-5 day delivery for GCC and African markets.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What is the range of Yealink W-series DECT?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">The W70B base supports up to 8 handsets with up to 300m outdoor and 50m indoor range per base. Multiple bases can be daisy-chained for warehouse, hotel, and campus-wide coverage with seamless roaming.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFaq(button) {
    var content = button.nextElementSibling;
    var icon = button.querySelector('svg');
    if (content.style.maxHeight) { content.style.maxHeight = null; icon.style.transform = 'rotate(0deg)'; }
    else {
        document.querySelectorAll('.max-h-0').forEach(function (c) { if (c !== content) { c.style.maxHeight = null; var i = c.previousElementSibling.querySelector('svg'); if (i) i.style.transform = 'rotate(0deg)'; } });
        content.style.maxHeight = content.scrollHeight + 'px'; icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<!-- CTA Section -->
<section class="py-12 sm:py-16 md:py-20 bg-gradient-to-br from-blue-500 via-blue-700 to-blue-900 relative overflow-hidden">
    <div class="absolute -top-8 -right-8 sm:-top-12 sm:-right-12 w-40 h-40 sm:w-64 sm:h-64 bg-white/10 rounded-full blur-[80px]"></div>
    <div class="absolute -bottom-8 -left-8 sm:-bottom-12 sm:-left-12 w-40 h-40 sm:w-64 sm:h-64 bg-blue-400/10 rounded-full blur-[80px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Get Yealink Wholesale Pricing from Dubai</h2>
        <p class="text-sm text-blue-100 max-w-xl mx-auto mb-6">Authorized Yealink products with genuine warranty. Bulk pricing for resellers and system integrators across UAE, GCC, and Africa.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-lg">Request a Quote</a>
            <a href="https://wa.me/971559026521?text=I%27m%20looking%20for%20Yealink%20IP%20phones%20and%20video%20conferencing.%20Can%20you%20send%20me%20pricing%3F" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">WhatsApp Us</a>
            <a href="/brands/grandstream-voip-distributor-uae.php" class="bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">Also Check Grandstream</a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
