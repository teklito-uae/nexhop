<?php
$title = "All Products - Nexhop Computers UAE | IT Networking & Infrastructure";
$description = "Browse our comprehensive catalog of enterprise networking hardware.";
$keywords = "Networking products, IT hardware UAE";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/brand-functions.php';

$all_products = getProducts();
$brands = array_values(array_unique(array_column($all_products, 'brand')));
$brands = array_map('ucfirst', $brands);

$selected_brand = isset($_GET['brand']) ? $_GET['brand'] : '';
$filtered_products = $selected_brand ? getProducts(strtolower($selected_brand)) : $all_products;
?>

<div class="">

    <!-- Page Header -->
    <section class="py-6 md:py-8 bg-gray-50 dark:bg-base">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-xl md:rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-blue-700 to-blue-900"></div>
                <div class="absolute inset-0 opacity-10"
                    style="background-image: url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M0%200h60v60H0z%22%20fill%3D%22%23fff%22%20fill-opacity%3D%220.05%22%2F%3E%3C%2Fsvg%3E'); background-size: 20px 20px;">
                </div>
                <div class="relative px-6 py-8 md:py-12 md:px-10 text-center lg:text-left">
                    <span class="text-[10px] font-bold text-blue-200 uppercase tracking-widest">Product Catalog</span>
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white mt-2 mb-3 leading-tight">
                        Enterprise IT Hardware & Networking</h1>
                    <p class="text-sm text-blue-100 max-w-xl">Browse 150+ enterprise products from Cisco, Fortinet,
                        Ubiquiti, Aruba, and more — stocked in Dubai for same-day UAE dispatch.</p>
                    <div class="flex flex-wrap gap-4 mt-6 justify-center lg:justify-start">
                        <a href="/contact.php"
                            class="bg-white text-blue-600 hover:bg-blue-50 px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg">Request
                            a Quote</a>
                        <a href="https://wa.me/971559026521" target="_blank"
                            class="bg-white/20 hover:bg-white/30 border border-white/30 text-white px-6 py-2.5 rounded-xl font-bold text-sm transition-all backdrop-blur-sm">WhatsApp
                            Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Filter Tabs -->
    <section class="py-6 md:py-10 bg-white dark:bg-surface border-b border-gray-100 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-5">
                <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                    </path>
                </svg>
                <span class="text-[10px] font-bold text-gray-400 dark:text-slate-500 uppercase tracking-widest">Filter
                    by Brand</span>
            </div>
            <div class="flex flex-wrap gap-2">
                <a href="/shop.php"
                    class="inline-flex items-center px-5 py-2.5 rounded-full text-sm font-semibold transition-all <?php echo !$selected_brand ? 'bg-blue-600 text-white' : 'bg-gray-100 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-600 dark:text-slate-400 hover:text-blue-600'; ?>">
                    All Brands
                </a>
                <?php foreach ($brands as $brand_slug): ?>
                    <a href="/shop.php?brand=<?php echo strtolower($brand_slug); ?>"
                        class="inline-flex items-center px-5 py-2.5 rounded-full text-sm font-semibold transition-all <?php echo strtolower($selected_brand) === strtolower($brand_slug) ? 'bg-blue-600 text-white' : 'bg-gray-100 dark:bg-surface border border-gray-200 dark:border-white/5 text-gray-600 dark:text-slate-400 hover:text-blue-600'; ?>">
                        <?php echo $brand_slug; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Product Grid -->
    <section class="py-8 md:py-12 bg-gray-50 dark:bg-base">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-2 block">
                        <?php echo $selected_brand ? ucfirst($selected_brand) : 'Shop'; ?>
                    </span>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white mb-1 tracking-tight">
                        <?php echo $selected_brand ? ucfirst($selected_brand) . ' Products' : 'All Products'; ?>
                    </h2>
                    <p class="text-xs text-gray-500 dark:text-slate-400"><?php echo count($filtered_products); ?>
                        products available</p>
                </div>
            </div>

            <?php if (empty($filtered_products)): ?>
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-300 dark:text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                    <h3 class="text-base font-bold text-gray-900 dark:text-white mb-2">No products found</h3>
                    <p class="text-sm text-gray-500 dark:text-slate-400 mb-4">This category doesn't have products yet.</p>
                    <a href="/shop.php"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg text-xs font-bold hover:bg-blue-700 transition-colors">
                        View All Products
                    </a>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-5">
                    <?php foreach ($filtered_products as $product) {
                        renderProductCard($product);
                    } ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="pb-16 md:pb-20 bg-gray-50 dark:bg-base">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-br from-blue-500 via-blue-700 to-blue-900 rounded-2xl p-6 sm:p-8 md:p-12 text-center relative overflow-hidden">
                <div
                    class="absolute -top-8 -right-8 sm:-top-12 sm:-right-12 w-40 h-40 sm:w-64 sm:h-64 bg-white/10 rounded-full blur-[80px]">
                </div>
                <div
                    class="absolute -bottom-8 -left-8 sm:-bottom-12 sm:-left-12 w-40 h-40 sm:w-64 sm:h-64 bg-blue-400/10 rounded-full blur-[80px]">
                </div>
                <div class="relative z-10">
                    <h3 class="text-lg sm:text-xl md:text-2xl font-extrabold text-white mb-2">Need Specialized Pricing?
                    </h3>
                    <p class="text-xs sm:text-sm text-blue-100 max-w-lg mx-auto mb-5">Request quotes for bulk orders,
                        project registrations, or export to GCC and Africa.</p>
                    <div class="flex flex-wrap gap-3 justify-center">
                        <a href="/contact.php"
                            class="bg-white text-blue-700 px-6 py-2.5 rounded-xl font-bold text-xs hover:bg-blue-50 transition-colors shadow-lg">Request
                            B2B Quote</a>
                        <a href="https://wa.me/971559026521?text=Hi%20Nexhop%2C%20I%27m%20looking%20for%20IT%20products.%20Can%20you%20send%20pricing%3F"
                            target="_blank"
                            class="bg-white/20 hover:bg-white/30 border border-white/30 px-6 py-2.5 rounded-xl font-bold text-xs text-white transition-all backdrop-blur-sm">WhatsApp
                            Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>