<?php
$brand_id = "dlink";
$brand_name = "D-Link";

$pageTitle = "D-Link Supplier Dubai — D-Link DGS Switches & Networking Distributor UAE | Nexhop";
$pageDescription = "D-Link networking supplier in Dubai. DGS managed switches, DAP access points, DWC wireless controllers, cloud cameras, structured cabling at wholesale for UAE resellers and integrators.";

include '../includes/header.php';
include '../includes/navbar.php';

$products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true)['products'] ?? [];
$brand_products = array_filter($products, fn($p) => $p['brand'] === 'dlink');
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
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">D-Link Networking Distributor</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 mt-2 leading-tight">D-Link Supplier in Dubai, UAE</h1>
                    <p class="text-sm text-blue-100 max-w-xl">End-to-end networking from SOHO to enterprise. DGS L2/L3 managed switches, DAP access points, DWC wireless controllers, cloud cameras, and structured cabling — wholesale pricing from our Dubai warehouse for UAE resellers and system integrators.</p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request D-Link Pricing</a>
                        <a href="https://wa.me/971559026521" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp Sales</a>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 hidden sm:flex bg-white/10 rounded-2xl border border-white/20 flex items-center justify-center backdrop-blur-sm">
                        <span class="text-5xl font-black text-white/30">DL</span>
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">About D-Link</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">D-Link Networking & Switching Products Available in UAE</h2>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-4">D-Link, founded in 1986 in Taipei, is a decades-old networking brand with deep distribution channels across the Middle East. Nexhop supplies DGS managed switches (DGS-1210 Smart, DGS-1510 Stackable, DGS-3630 chassis), DWC wireless controllers, DAP access points (DAP-2610, DAP-3662, DAP-X2830), cloud cameras (DCS series), and structured cabling from Dubai warehouse — covering everything from SOHO networks to mid-size business campus deployments for UAE resellers and integrators.</p>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-6">Nexhop Computers is a trusted D-Link supplier and distributor operating from our Dubai warehouse. We maintain stock across the full D-Link product portfolio including DGS managed switches, DWC wireless controllers, DAP access points, DCS cloud cameras, DIR broadband routers, and DNS network storage for resellers, system integrators, and enterprise deployments across the UAE, GCC, and Africa.</p>
                <div class="grid grid-cols-2 sm:grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">1986</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Founded</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">Taipei</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">HQ TW</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">4K+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Employees</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">100+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Countries</div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 text-white">
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">D-Link Product Categories We Supply in UAE</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From DGS-1210 Smart switches to DGS-3630 chassis, we stock the complete D-Link networking range at wholesale Dubai prices.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">DGS Managed Switches</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DGS-1210 Smart, DGS-1510 Stackable, DGS-1712X, DGS-3630 chassis — L2/L3 managed switches with PoE, SFP, and stackable core for business.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Switch Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">DWC Wireless Controllers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DWC-1000, DWC-2000 — centralized wireless management for large DAP deployments with roaming and VLAN support.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Controller Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.394c5.858-5.857 15.355-5.857 21.213 0"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">DAP Access Points</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DAP-2610 AC1200, DAP-3662 AC2600, DAP-X2830 AX1800 — ceiling/wall-mount enterprise APs with Wi-Fi 6 and PoE support.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get AP Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Cloud Cameras & NVR</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DCS cloud surveillance cameras and NVR/DVR recording systems — integrated security with remote mobile app viewing.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Camera Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Broadband Routers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DIR series consumer, DWR cellular 4G/5G routers — ADSL/VDSL, cable, and fiber WAN routers with dual-WAN failover.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Router Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-600/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 3 3 8 3s8-1 8-3V7M4 7c0 2 3 3 8 3s8-1 8-3M4 7c0-2 3-3 8-3s8 1 8 3"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">NAS & Structublue Cabling</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DNS-327L network storage + Cat6/Cat6A structured cabling, patch panels, media converters for complete physical layer deployment.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Cabling Pricing →</span>
            </a>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Use Cases</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Who Uses D-Link in the UAE?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">SOHO & Small Office</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">D-Link wireless routers + cloud cameras + DGS-1210 switches for plug-and-play connectivity in Dubai home offices and small businesses.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Mid-Size Campus</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DGS-1510/3630 core switching + DWC controller + DAP APs for managed wireless/wireless campus with centralized administration.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Surveillance Networks</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">NVR + DCS cameras + DGS PoE switches for end-to-end SMB security with one-vendor procurement for UAE installers.</p>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Popular D-Link Products</h2>
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
            <a href="/contact.php" class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 hover:opacity-90 text-white font-semibold px-6 py-2.5 rounded-full transition-all text-sm">Request Full D-Link Quote</a>
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
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers about D-Link networking solutions, product availability, and wholesale pricing from our Dubai warehouse.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <!-- FAQ Item 1 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Are you an authorized D-Link distributor in UAE?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Nexhop Computers is an authorized D-Link supplier operating from our Dubai warehouse. We stock the complete D-Link networking range including DGS managed switches, DAP access points, DWC wireless controllers, DCS cloud cameras, and structured cabling with full manufacturer warranty.</div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Which D-Link switch is right for a 50-port office?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Two DGS-1210-28 switches can cover 50 ports at the access layer with a DGS-1510-28 for uplink aggregation. For PoE camera deployments, the DGS-1210-28MP provides 370W PoE budget. Contact our team for a customized switch topology.</div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Does D-Link offer Wi-Fi 6 access points?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, the DAP-X2830 AX1800 is D-Link's Wi-Fi 6 ceiling-mount AP with PoE support. For Wi-Fi 5, the DAP-2610 AC1200 and DAP-3662 AC2600 remain popular cost-effective options. All APs integrate with DWC controllers for centralized management.</div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you ship D-Link products to other GCC countries?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we export D-Link equipment to over 15 countries across GCC and Africa. We handle air freight and sea freight logistics from our Dubai hub. Same-day dispatch for UAE orders; 3-5 day delivery for GCC and African markets.</div>
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
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Get D-Link Wholesale Pricing from Dubai</h2>
        <p class="text-sm text-blue-100 max-w-xl mx-auto mb-6">Authorized D-Link products with genuine warranty. Bulk pricing for resellers and system integrators across UAE, GCC, and Africa.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-lg">Request a Quote</a>
            <a href="https://wa.me/971559026521?text=I%27m%20looking%20for%20D-Link%20networking%20products.%20Can%20you%20send%20me%20your%20pricing%3F" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">WhatsApp Us</a>
            <a href="/brands/mikrotik-supplier-uae.php" class="bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">Also Check MikroTik</a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
