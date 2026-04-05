<?php
$title = "Product Catalog - Nexhop Computers UAE | IT Networking & Infrastructure";
$description = "Browse our comprehensive B2B catalog of enterprise networking hardware. From Ubiquiti APs to MikroTik routers and Aruba switches, we supply the best in UAE.";
$keywords = "Networking Catalog, Buy IT Hardware UAE, Ubiquiti UAE, MikroTik Dubai, Aruba Switches, Grandstream PBX, B2B Networking Supplier";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/brand-functions.php';

// Get all products or filter by category if needed
$featured_products = getProducts(null, 6); // Get first 6 products for featured section
?>

<div class="bg-gray-50 dark:bg-base pt-48 pb-64 min-h-screen font-[Poppins]">
    <div class="container mx-auto px-6">
        
        <!-- Page Header -->
        <div class="mb-24 md:mb-32 text-center lg:text-left">
            <h1 class="text-4xl md:text-8xl font-black text-gray-900 dark:text-white tracking-tighter uppercase leading-none mb-6">Master <span class="text-blue-600 italic">Catalog</span></h1>
            <p class="text-gray-500 dark:text-slate-400 text-[11px] md:text-[13px] font-black uppercase tracking-[0.5em]">Enterprise IT & Networking Solutions UAE</p>
        </div>

        <!-- Featured Section (Matching User Screenshot Layout) -->
        <div class="bg-white dark:bg-surface rounded-[2.5rem] md:rounded-[3rem] shadow-sm border border-gray-100 dark:border-white/5 overflow-hidden mb-16 flex flex-col lg:flex-row">
            <!-- Left Side: Product Grid -->
            <div class="flex-1 p-8 md:p-16">
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                    <h2 class="text-2xl md:text-3xl font-black text-gray-900 dark:text-white uppercase tracking-tighter">Featured Hardware</h2>
                    <a href="/shop.php" class="text-blue-600 text-[10px] font-black uppercase tracking-widest flex items-center gap-2 hover:gap-3 transition-all">View All Products <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    <?php 
                    foreach (array_slice($featured_products, 0, 3) as $product) {
                        renderProductCard($product);
                    }
                    ?>
                </div>
            </div>

            <!-- Right Side: Collection Feature (Matching Screenshot) -->
            <div class="w-full lg:w-[450px] relative bg-gray-900 text-white p-12 md:p-16 flex flex-col justify-end min-h-[450px]">
                <!-- Background Image (Conceptualized Network Rack) -->
                <div class="absolute inset-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1558494949-ef010cbdcc48?auto=format&fit=crop&q=80&w=1000')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-blue-950/60 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/20 to-transparent"></div>
                
                <div class="relative z-10">
                    <h3 class="text-3xl md:text-4xl font-black uppercase mb-3 tracking-tighter leading-none">Network Equipment</h3>
                    <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-10">Direct from Authorized UAE Hub</p>
                    <a href="/brands/ubiquiti.php" class="inline-flex items-center px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/20 rounded-2xl text-[10px] font-black uppercase tracking-widest transition-all backdrop-blur-md">
                        Browse Collection <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Catalog Filter Bar (B2B Style) -->
        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 mb-16">
            <button class="px-8 py-4 bg-blue-600 text-white rounded-2xl text-[10px] font-black uppercase tracking-widest shadow-2xl shadow-blue-600/30 transition-all">All Brands</button>
            <a href="/brands/ubiquiti.php" class="px-8 py-4 bg-white dark:bg-surface text-gray-500 border border-gray-100 dark:border-white/5 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:border-blue-500 transition-all shadow-sm">Ubiquiti</a>
            <a href="/brands/mikrotik.php" class="px-8 py-4 bg-white dark:bg-surface text-gray-500 border border-gray-100 dark:border-white/5 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:border-blue-500 transition-all shadow-sm">MikroTik</a>
            <a href="/brands/aruba.php" class="px-8 py-4 bg-white dark:bg-surface text-gray-500 border border-gray-100 dark:border-white/5 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:border-blue-500 transition-all shadow-sm">Aruba</a>
            <a href="/brands/grandstream.php" class="px-8 py-4 bg-white dark:bg-surface text-gray-500 border border-gray-100 dark:border-white/5 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:border-blue-500 transition-all shadow-sm">Grandstream</a>
        </div>

        <!-- Full Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 mb-32">
            <?php 
            $all_products = getProducts();
            foreach ($all_products as $product) {
                renderProductCard($product);
            }
            ?>
        </div>

        <!-- Bottom B2B CTA -->
        <div class="bg-blue-600 rounded-[2.5rem] md:rounded-[4rem] p-12 md:p-20 text-center text-white relative overflow-hidden shadow-2xl shadow-blue-600/30">
             <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-[100px] rounded-full"></div>
             <h3 class="text-3xl md:text-5xl font-black uppercase mb-6 tracking-tighter leading-none">Need specialized pricing?</h3>
             <p class="text-blue-100 text-sm md:text-base max-w-2xl mx-auto mb-12 leading-relaxed font-medium">Request customized quotes for your project registrations, bulk distribution, or export orders to GCC and Africa.</p>
             <div class="flex flex-wrap justify-center gap-6">
                 <a href="/contact.php" class="bg-white text-blue-600 px-10 py-5 rounded-2xl font-black text-xs uppercase transition-all hover:scale-105 shadow-xl">Request B2B Quote</a>
                 <a href="https://wa.me/971559026521" target="_blank" class="bg-blue-700 text-white border border-blue-500/50 px-10 py-5 rounded-2xl font-black text-xs uppercase transition-all hover:bg-blue-800">WhatsApp Sales</a>
             </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
