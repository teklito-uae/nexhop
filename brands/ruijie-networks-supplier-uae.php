<?php
$brand_id = "ruijie";
$brand_name = "Ruijie Networks";

$pageTitle = "Ruijie Networks Supplier UAE — Ruijie Campus Switching Distributor Dubai | Nexhop";
$pageDescription = "Ruijie Networks supplier in Dubai. Wholesale RG-S campus switches, RG-AP WiFi 6/7 access points, Reyee cloud-managed platform, Ruijie Cloud at wholesale prices for UAE resellers.";

include '../includes/header.php';
include '../includes/navbar.php';

$products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true)['products'] ?? [];
$brand_products = array_filter($products, fn($p) => $p['brand'] === 'ruijie');
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
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">Ruijie Networks Distributor UAE</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 mt-2 leading-tight">Ruijie Networks Supplier in Dubai, UAE</h1>
                    <p class="text-sm text-blue-100 max-w-xl">Enterprise networking at disruptive pricing. Ruijie RG-S campus switches, RG-AP WiFi 6/7 access points, Reyee cloud-managed platform, and RG-RSR routers — wholesale from our Dubai warehouse for UAE, GCC, and Africa.</p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request Ruijie Pricing</a>
                        <a href="https://wa.me/971559026521" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp Sales</a>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 hidden sm:flex bg-white/10 rounded-2xl border border-white/20 flex items-center justify-center backdrop-blur-sm">
                        <span class="text-5xl font-black text-white/30">RG</span>
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">About Ruijie Networks</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">Ruijie Campus Switching & WiFi Products Available in UAE</h2>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Ruijie Networks, founded in 2000 in Beijing, is one of China's largest networking manufacturers competing with Cisco and Aruba at significantly lower price points. Nexhop supplies Ruijie Reyee cloud-managed ecosystems, RG-S core and access switches, RG-AP access points, and RG-RSR enterprise routers from our Dubai warehouse at highly competitive wholesale prices for UAE resellers, system integrators, and MSPs across the GCC and Africa.</p>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-6">Nexhop Computers is a trusted Ruijie Networks supplier and distributor operating from our Dubai warehouse. We maintain stock across the Ruijie product portfolio including Reyee cloud-managed platform, RG-S campus switches, RG-AP WiFi 6/7 access points, RG-RSR routers, and RG-WALL firewalls for resellers, system integrators, and enterprise project deployments across the UAE, GCC, and Africa.</p>
                <div class="grid grid-cols-2 sm:grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">2000</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Founded</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">Beijing</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">HQ CN</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">5K+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Employees</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">100+</div>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">Ruijie Networks Product Categories We Supply in UAE</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From Reyee cloud-managed SMB networks to RG-S core campus switching, we stock the complete Ruijie range at wholesale Dubai prices.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Reyee Cloud Platform</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Cloud-managed APs, switches, gateways via Ruijie Cloud mobile app — zero-license, zero-config SMB networking for multi-site deployments.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Reyee Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">RG-S Campus Switches</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">RG-S2910 access, S5300 aggregation, S5750/S6510 core — L3 campus switching with PoE++, SFP+, and stackable options.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Switch Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.394c5.858-5.857 15.355-5.857 21.213 0"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">RG-AP Access Points</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">RG-AP9861 indoor Wi-Fi 7, AP880 wall-plate, AP860 outdoor — enterprise APs with cloud management and RF tuning.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get AP Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">RG-RSR Routers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">RG-RSR77-XA core, RSR830 mobile/WAN — enterprise edge routing with 4G/5G cellular backup support.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Router Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">RG-WALL Firewalls</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">RG-WALL 1600-Z next-gen firewalls — deep packet inspection, threat protection, application-level gateway filtering.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get FW Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Optical Ethernet</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Fiber-to-the-desk optical LAN solutions — simplified campus architecture with optical switches and ONTs for high-bandwidth.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Optical Pricing →</span>
            </a>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Use Cases</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Who Uses Ruijie Networks in the UAE?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Higher Education Campus</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Ruijie has massive university deployment pedigree globally — Wi-Fi 7 campus switching + data center core switches with Ruijie Cloud management.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Hospitality & Retail</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Reyee cloud-managed platform for multi-site SMB with mobile app provisioning and automatic AP onboarding for hotels and retail chains.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Smart City Infrastructure</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Industrial-grade RG-RSR routing + RG-S core switching for municipal infrastructure deployments across the Gulf.</p>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Popular Ruijie Networks Products</h2>
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
            <a href="/contact.php" class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 hover:opacity-90 text-white font-semibold px-6 py-2.5 rounded-full transition-all text-sm">Request Full Ruijie Quote</a>
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
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers about Ruijie Networks products, cloud management, and wholesale pricing from our Dubai warehouse.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Are you an authorized Ruijie Networks distributor in UAE?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Nexhop Computers is an authorized Ruijie Networks supplier operating from our Dubai warehouse. We stock the complete Ruijie range including Reyee cloud-managed platform, RG-S campus switches, RG-AP access points, RG-RSR routers, and RG-WALL firewalls with full manufacturer warranty.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What advantage does Ruijie have over Cisco or Aruba?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Ruijie delivers comparable enterprise features at 30-50% lower cost with no perpetual licensing fees. The Reyee platform offers zero-touch cloud provisioning via a mobile app, making it ideal for multi-site SMB and hotel deployments without expensive controller hardware.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Which Ruijie Reyee model is best for hotel WiFi?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">For hotel deployments, we recommend the Reyee RG-EAP662 WiFi 6 wall-plate AP per room, managed by an RG-EG gateway and cloud-managed via Ruijie Cloud app. Contact our team for a customized hotel networking bill of materials.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Does Ruijie offer WiFi 6 and WiFi 7 access points?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Ruijie offers WiFi 6 (RG-AP860, AP880 series) and WiFi 7 (RG-AP9861 indoor Wi-Fi 7) access points. All models support cloud management via Ruijie Cloud and enterprise features like RF auto-tuning, band steering, and seamless roaming.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you ship Ruijie products to other GCC countries?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we export Ruijie equipment to over 15 countries across GCC and Africa. We handle air freight and sea freight logistics from our Dubai hub. Same-day dispatch for UAE orders; 3-5 day delivery for GCC and African markets.</div>
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
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Get Ruijie Wholesale Pricing from Dubai</h2>
        <p class="text-sm text-blue-100 max-w-xl mx-auto mb-6">Authorized Ruijie Networks products with genuine warranty. Bulk pricing for resellers and system integrators across UAE, GCC, and Africa.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-lg">Request a Quote</a>
            <a href="https://wa.me/971559026521?text=I%27m%20looking%20for%20Ruijie%20Networks%20products.%20Can%20you%20send%20me%20your%20pricing%3F" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">WhatsApp Us</a>
            <a href="/brands/tp-link-omada-distributor-uae.php" class="bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">Also Check TP-Link</a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
