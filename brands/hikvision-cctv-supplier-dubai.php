<?php
$brand_id = "hikvision";
$brand_name = "Hikvision";

$pageTitle = "Hikvision Supplier Dubai — Authorized CCTV Distributor UAE, AcuSense & ColorVu | Nexhop";
$pageDescription = "Hikvision supplier in Dubai. Wholesale Turbo HD cameras, AcuSense NVRs, DeepinView analytics, DS-K access control, and intercom systems at wholesale prices for UAE resellers and integrators.";

include '../includes/header.php';
include '../includes/navbar.php';

$products = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true)['products'] ?? [];
$brand_products = array_filter($products, fn($p) => $p['brand'] === 'hikvision');
?>

<!-- Brand Hero Banner -->
<section class="mt-4 sm:mt-8 py-6 md:py-12 bg-gray-50 dark:bg-base">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-xl md:rounded-2xl overflow-hidden">
            <!-- Gradient Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900"></div>
            <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M0%200h60v60H0z%22%20fill%3D%22%23fff%22%20fill-opacity%3D%220.05%22%2F%3E%3C%2Fsvg%3E'); background-size: 20px 20px;"></div>
            <div class="relative px-6 py-10 md:py-14 md:px-10 flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="flex-1 text-white">
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">Hikvision Authorized Distributor</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 mt-2 leading-tight">Hikvision Supplier in Dubai, UAE</h1>
                    <p class="text-sm text-blue-100 max-w-xl">World's leading video surveillance manufacturer. Turbo HD cameras, AcuSense NVRs, ColorVu 24/7 series, DeepinView analytics, DS-K access control, and IP intercom systems — wholesale Dubai pricing for UAE, GCC, and Africa.</p>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <a href="/contact.php" class="bg-white text-blue-600 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request Hikvision Pricing</a>
                        <a href="https://wa.me/971559026521" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp Sales</a>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 hidden sm:flex bg-white/10 rounded-2xl border border-white/20 flex items-center justify-center backdrop-blur-sm">
                        <img src="https://www.hikvision.com/content/dam/hikvision/images/logo/hikvision-logo.svg" alt="Hikvision" class="w-20 md:w-24 h-auto" onerror="this.parentElement.innerHTML='<span class=\'text-5xl font-black text-white/30\'>HK</span>'">
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
                <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">About Hikvision</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">Hikvision CCTV & Security Products Available in UAE</h2>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Hikvision, founded in 2001 and headquartered in Hangzhou, China, is the world's largest video surveillance manufacturer with over 40,000 employees.</p>
                <p class="text-sm text-gray-500 dark:text-slate-400 leading-relaxed mb-6">Nexhop Computers is an authorized Hikvision dealer in Dubai. We supply Turbo HD cameras, AcuSense NVRs, ColorVu 24/7 full-color cameras, DeepinView analytics cameras, DS-K access control terminals, and IP intercom systems at wholesale prices for UAE resellers, SIRA-approved installers, and system integrators across the GCC and Africa.</p>
                <div class="grid grid-cols-2 sm:grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">2001</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Founded</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">Hangzhou</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">HQ CN</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">#1</div>
                        <div class="text-[8px] uppercase font-bold tracking-wider text-gray-400 mt-1">Video Global</div>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-3 rounded-lg text-center">
                        <div class="text-xl font-extrabold text-blue-600">40K+</div>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3 tracking-tight">Hikvision Product Categories We Supply in UAE</h2>
            <p class="text-sm text-gray-500 dark:text-slate-400 max-w-xl mx-auto">From Turbo HD DVRs to DeepinView analytics cameras, we stock the complete Hikvision security range at wholesale Dubai prices.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">Turbo HD DVRs</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Analog HD over coax DVRs — HiWatch sub-brand for budget, DS-7200/7600 series for mid-range, 8/16 channel with smart encoding.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get DVR Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">AcuSense IP Cameras</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">AI-powered cameras with human/vehicle classification — DS-2CD bullet/turret, DS-2CE series, 7608/7616 NVRs with smart search.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get AcuSense Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">ColorVu 24/7 Series</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Full-color imaging in complete darkness — ColorVu 3.0 technology with F1.0 aperture and advanced low-light sensors.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get ColorVu Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">DeepinView Analytics</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Advanced analytics cameras with deep learning for behavior analysis, facial recognition, and perimeter protection.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Analytics Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">DS-K Access Control</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Card readers, facial terminals, door controllers — DS-K1T, DS-K2T, DS-KD door stations for building entry security.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Access Control Pricing →</span>
            </a>
            <a href="/contact.php" class="group bg-white dark:bg-surface rounded-xl sm:rounded-2xl border border-gray-100 dark:border-white/5 p-4 sm:p-5 md:p-6 hover:shadow-lg hover:border-blue-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <h3 class="text-base font-extrabold text-gray-900 dark:text-white mb-2">IP Intercom Systems</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DS-KV door stations, DS-KH indoor monitors — SIP-compatible intercoms integrated with Hikvision NVR and access control.</p>
                <span class="inline-block mt-3 text-xs font-bold text-blue-600 group-hover:translate-x-1 transition-transform">Get Intercom Pricing →</span>
            </a>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="py-16 md:py-24 bg-white dark:bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Use Cases</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Who Uses Hikvision in the UAE?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Retail & Warehousing</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">AcuSense perimeter protection and intelligent inspection reduce false alarms and provide accurate incident detection for commercial properties.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Government Facilities</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">DS-K access control + intercom + surveillance for unified building security with facial recognition and visitor tracking.</p>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-xl sm:rounded-2xl p-5 sm:p-6 md:p-8 border border-gray-100 dark:border-white/5">
                <div class="w-12 h-12 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <h3 class="text-lg font-extrabold text-gray-900 dark:text-white mb-2">Residential Compounds</h3>
                <p class="text-xs text-gray-500 dark:text-slate-400 leading-relaxed">Turbo HD for cost-effective coverage + ColorVu 24/7 for security lighting replacement + IP intercom for gate and lobby access.</p>
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
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-3">Popular Hikvision Products</h2>
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
            <a href="/contact.php" class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 hover:opacity-90 text-white font-semibold px-6 py-2.5 rounded-full transition-all text-sm">Request Full Hikvision Quote</a>
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
            <p class="text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Find quick answers about Hikvision CCTV products, SIRA compliance, and wholesale pricing from our Dubai warehouse.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-4 items-start">
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Are you an authorized Hikvision dealer in Dubai?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, Nexhop Computers is an authorized Hikvision dealer operating from our Dubai warehouse. We supply genuine Hikvision products across the full portfolio with manufacturer warranty for UAE resellers and SIRA-approved installers.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">What is the difference between AcuSense and ColorVu cameras?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">AcuSense cameras use AI-driven deep learning to filter out false alarms by classifying humans and vehicles, with smart search on compatible NVRs. ColorVu cameras focus on full-color image capture 24/7 using F1.0 aperture lenses and supplemental warm light, even in complete darkness. We stock both series at our Dubai warehouse.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Can Hikvision products be deployed for SIRA-compliant installations?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes. Hikvision is one of the most widely used brands for SIRA-compliant security installations in Dubai and the UAE. We supply appropriate camera models, NVRs, and storage configurations that meet SIRA requirements for retail, commercial, and residential properties.</div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-base rounded-[1.5rem] overflow-hidden border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-colors h-fit text-left">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none group" onclick="toggleFaq(this)">
                    <span class="text-sm font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-cyan-400 transition-colors">Do you supply HiWatch products?</span>
                    <div class="w-8 h-8 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 dark:group-hover:bg-blue-600/20 transition-colors">
                        <svg class="w-4 h-4 text-gray-500 dark:text-slate-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-300">
                    <div class="px-6 pb-4 text-gray-500 dark:text-slate-400 text-xs leading-relaxed">Yes, we stock HiWatch alongside the full Hikvision range. HiWatch is Hikvision's budget-friendly sub-brand, offering reliable Turbo HD DVRs, analog cameras, and basic IP cameras at significantly lower price points for small offices and residential CCTV.</div>
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
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Get Hikvision Wholesale Pricing from Dubai</h2>
        <p class="text-sm text-blue-100 max-w-xl mx-auto mb-6">Genuine Hikvision AcuSense, ColorVu, and access control products. Wholesale pricing for resellers, SIRA installers, and system integrators across UAE, GCC, and Africa.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/contact.php" class="bg-white text-blue-600 hover:bg-blue-50 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all shadow-lg">Request a Quote</a>
            <a href="https://wa.me/971559026521?text=Hi%20Nexhop%2C%20I%27m%20looking%20for%20Hikvision%20CCTV%20products.%20Can%20you%20send%20me%20your%20price%20list%3F" target="_blank" class="bg-white/20 hover:bg-white/30 border border-white/30 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">WhatsApp Us</a>
            <a href="/brands/zkteco-biometric-supplier-dubai.php" class="bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl font-bold text-xs sm:text-sm transition-all backdrop-blur-sm">Also Check ZKTeco</a>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
