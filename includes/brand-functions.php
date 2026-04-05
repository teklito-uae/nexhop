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
    ?>
    <div class="bg-white dark:bg-surface rounded-2xl md:rounded-[2rem] p-4 md:p-8 shadow-sm border border-gray-100 dark:border-white/5 hover:shadow-2xl transition-all duration-500 group flex flex-col h-full font-[Poppins]">
        <!-- Product Image -->
        <div class="aspect-square rounded-xl md:rounded-[1.5rem] bg-gray-50 dark:bg-black/20 mb-4 md:mb-8 overflow-hidden flex items-center justify-center p-2 md:p-8 relative">
             <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="max-w-full max-h-full object-contain group-hover:scale-110 transition-transform duration-700" onerror="this.src='https://t4.ftcdn.net/jpg/06/71/92/37/360_F_671923740_x0zOL3OIuUAnSF6sr7PuznCI5bQFKhI0.jpg'">
             <span class="absolute top-2 left-2 md:top-4 md:left-4 px-2 md:px-3 py-1 bg-blue-600/10 text-blue-600 text-[8px] md:text-[9px] font-black uppercase rounded-md md:rounded-lg tracking-widest"><?php echo $product['brand']; ?></span>
        </div>
        
        <!-- Product Info -->
        <div class="flex-grow">
            <h3 class="text-xs md:text-base font-black text-gray-900 dark:text-white mb-2 md:mb-3 leading-tight tracking-tight line-clamp-2 uppercase italic"><?php echo $product['name']; ?></h3>
            <p class="hidden sm:block text-[11px] text-gray-500 dark:text-slate-400 mb-6 line-clamp-2 leading-relaxed font-medium"><?php echo $product['description']; ?></p>
        </div>

        <!-- CTA -->
        <div class="mt-auto pt-4 md:pt-6 border-t border-gray-100 dark:border-white/5 flex items-center justify-between gap-4">
             <a href="https://wa.me/971559026521?text=Inquiry for <?php echo urlencode($product['name']); ?>" 
                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-[9px] md:text-[10px] font-black py-3 md:py-4 rounded-xl md:rounded-2xl transition-all text-center uppercase tracking-[0.2em] shadow-xl shadow-blue-600/20">
                Request Quote
             </a>
        </div>
    </div>
    <?php
}
?>
