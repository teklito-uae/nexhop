<?php
/**
 * Fetches products from the JSON database
 * @param string|null $brand Filter by brand (optional)
 * @param int|null $limit Limit the number of products (optional)
 * @return array
 */
function getProducts($brand = null, $limit = null) {
    $jsonPath = __DIR__ . '/../data/products.json';
    if (!file_exists($jsonPath)) return [];

    $jsonData = file_get_contents($jsonPath);
    $data = json_decode($jsonData, true);

    if (!isset($data['products'])) return [];

    $products = $data['products'];

    if ($brand) {
        $products = array_filter($products, function($p) use ($brand) {
            return strtolower($p['brand']) === strtolower($brand);
        });
    }

    if ($limit) {
        $products = array_slice($products, 0, $limit);
    }

    return array_values($products);
}

/**
 * Renders a single product card
 * @param array $product
 */
function renderProductCard($product) {
    $brand = isset($product['brand']) ? $product['brand'] : '';
    $name = isset($product['name']) ? $product['name'] : '';
    $description = isset($product['description']) ? $product['description'] : '';
    $image = isset($product['image']) ? $product['image'] : '';
    $whatsapp_msg = urlencode('Hi, I am interested in ' . $name);
    ?>
    <div class="group bg-white dark:bg-surface rounded-xl border border-gray-100 dark:border-white/5 overflow-hidden hover:border-blue-500/30 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex flex-col">
        <!-- Product Image -->
        <div class="relative bg-gray-50 dark:bg-black/10 p-3 sm:p-4 flex items-center justify-center aspect-square">
            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 bg-blue-600/10 text-blue-600 text-[8px] font-extrabold uppercase rounded-full tracking-wider"><?php echo ucfirst($brand); ?></span>
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500" onerror="this.parentElement.innerHTML='<span class=\'text-2xl sm:text-3xl text-gray-300\'>📦</span>'">
        </div>

        <!-- Product Info -->
        <div class="p-3 sm:p-4 flex flex-col flex-grow">
            <h3 class="text-xs sm:text-sm font-extrabold text-gray-900 dark:text-white leading-snug mb-1 line-clamp-2"><?php echo $name; ?></h3>
            <p class="text-[10px] sm:text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed line-clamp-2 mb-3 hidden sm:block"><?php echo $description; ?></p>

            <!-- CTA -->
            <div class="mt-auto pt-2 sm:pt-3 border-t border-gray-100 dark:border-white/5">
                <a href="https://wa.me/971559026521?text=<?php echo $whatsapp_msg; ?>"
                   target="_blank"
                   class="w-full inline-flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-[10px] sm:text-xs font-bold py-2 sm:py-2.5 rounded-lg transition-colors">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Request Quote
                </a>
            </div>
        </div>
    </div>
    <?php
}
?>
