<?php
$brand_id = "cisco";
$brand_name = "Cisco";

$pageTitle = "Cisco Supplier UAE — Cisco Catalyst & Meraki Networking Distributor Dubai | Nexhop";
$pageDescription = "Authorized Cisco networking supplier in Dubai. Wholesale Catalyst 9000 switches, Meraki cloud-managed networking, ISR routers, Aironet APs at wholesale prices for enterprise and government.";

include '../includes/header.php';
include '../includes/navbar.php';

$products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true)['products'] ?? [];
$brand_products = array_filter($products, fn($p) => $p['brand'] === 'cisco');
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
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">Cisco Authorized Networking Supplier</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 mt-2 leading-tight">Cisco Supplier in Dubai, UAE</h1>
                    <p class="text-sm text-blue-100 max-w-xl">Enterprise networking standard for UAE data centers. Catalyst 9000 switches, Meraki cloud-managed networking, ISR/SD-WAN routers, and SecureFirewall — all stocked in Dubai for 24-hour deployment.</p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request Cisco Pricing</a>
                        <a href="https://wa.me/971559026521" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp Sales</a>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 hidden sm:flex bg-white/10 rounded-2xl border border-white/20 flex items-center justify-center backdrop-blur-sm">
                        <img src="https://www.cisco.com/c/dam/en/us/support/docs/visual/brand/logo/cisco-logo.svg" alt="Cisco" class="w-20 md:w-24 h-auto" onerror="this.parentElement.innerHTML='<span class=\'text-5xl font-black text-white/30\'>CI</span>'">
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">About Cisco</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">Cisco Catalyst & Meraki Products Available in UAE</h2>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Cisco, founded in 1984 in San Jose, California, is the world's leading networking company. From campus switching to cloud-managed Meraki, ISR routing to Catalyst Wireless — Cisco sets the industry standard for enterprise networking.</p>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-6">Nexhop supplies Catalyst 9000 switches, Meraki cloud networking, ISR routers, Aironet/Catalyst Wireless access points, and Secure Firewall from our Dubai warehouse for UAE enterprises, government departments, and oil & gas sector deployments.</p>
                <div class="grid grid-cols-2 sm:grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">1984</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Founded</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">San Jose</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">HQ CA</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">Fortune 50</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Ranking</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">83K+</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Employees</div>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">Cisco Product Categories We Supply in UAE</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From Catalyst 9000 campus switching to Meraki cloud management, we stock the complete Cisco networking range at wholesale Dubai prices.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Catalyst 9000 Switches</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">C9200 Lite/Plus, C9300 stackable access, C9400 modular, C9500 core/aggregation — AI-ready campus switching with DNA Center.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Catalyst Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Meraki Cloud Managed</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">MR APs, MS switches, MX security appliances — 100% cloud-managed via Meraki dashboard with zero-touch deployment.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Meraki Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M7.394 9.394c5.858-5.857 15.355-5.857 21.213 0"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">ISR/SD-WAN Routers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Catalyst 8000, ISR 1000/4000 — enterprise edge routing with integrated SD-WAN, security, and LTE/5G uplink.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get ISR Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Aironet APs</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">CW9166, CW9164 Catalyst Wireless — Wi-Fi 6/7 enterprise APs with DNA Center integration.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Aironet Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Secure Firewall ASA</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Firepower 1000/2100/4100, ASA 5500-X — threat defense with Firepower Management Center.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Firewall Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">UCS Mini Servers</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">UCS E-Series embedded, UCS C-Series rack — compute for converged infrastructure at the edge.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get UCS Pricing →</span>
            </a>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Use Cases</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Who Uses Cisco Networking in the UAE?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Large Enterprise Campus</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Catalyst 9000 access/core switching with DNA Center automation delivers scalable campus network infrastructure for 1000+ user deployments.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-emerald-600/10 text-emerald-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Multi-Site SD-WAN</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">ISR/Catalyst 8000 or Meraki MX for branch connectivity with centralized WAN management across UAE branches.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-amber-600/10 text-amber-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Government & Defense</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Cisco Secure Firewall with TrustSec segmentation, ISE NAC, and SecureX platform enables classified network protection for government agencies.</p>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Popular Cisco Products</h2>
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
            <a href="/contact.php" class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 hover:opacity-90 text-white font-semibold px-6 py-2.5 rounded-full transition-all text-sm">Request Full Cisco Quote</a>
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
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers about product availability, wholesale pricing, and delivery from our Dubai warehouse.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <!-- FAQ Item 1 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you supply genuine Cisco products with warranty in UAE?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Nexhop Computers supplies 100% genuine Cisco products with full manufacturer warranty from our Dubai warehouse. All Catalyst switches, Meraki devices, ISR routers, and Firepower appliances come with standard Cisco warranty and Smart Net support entitlements.</div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What Cisco products can you supply from Dubai stock?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">We maintain local Dubai stock across the Cisco portfolio including Catalyst 9200/9300/9400/9500 switches, Meraki MR/MS/MX series, ISR 1000/4000 routers, Catalyst 8000 SD-WAN, Aironet/Catalyst Wireless APs, and Firepower firewalls. For specialized models, we provide lead-time quotes from global distribution centers.</div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Can you help with Cisco licensing and Smart Account setup?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Absolutely. We assist with Cisco DNA licensing, Meraki subscription tiers, Smart Account provisioning, and PAK license registration. Our team handles end-to-end setup so your Catalyst and Meraki deployments are fully operational from day one.</div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you offer bulk wholesale pricing for Cisco resellers?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we offer tiered wholesale pricing for registered Cisco resellers, system integrators, and VARs across the UAE and GCC. Volume discounts apply on Catalyst, Meraki, and Firepower product lines. Contact our sales team with your project requirements for a competitive quote.</div>
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
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Get Cisco Wholesale Pricing from Dubai</h2>
        <p class="text-sm text-blue-100 max-w-xl mx-auto mb-6">Genuine Cisco Catalyst, Meraki, and ISR products with warranty. Bulk pricing for resellers, integrators, and enterprise buyers across UAE and GCC.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact.php" class="bg-white text-blue-700 hover:bg-blue-50 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-lg">Request a Quote</a>
            <a href="https://wa.me/971559026521?text=Hi%20Nexhop%2C%20I%27m%20looking%20for%20Cisco%20Catalyst%2FMeraki%20products.%20Can%20you%20send%20me%20your%20pricing%3F" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">WhatsApp Us</a>
            <a href="/brands/aruba-networking-supplier-dubai.php" class="bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">Also Check Aruba</a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
