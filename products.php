<?php
$title = "IT Products - Nexhop Computers";
$description = "Discover enterprise-grade IT products, including business laptops, servers, and networking equipment from leading brands like Lenovo, Dell, HP, Cisco, and Fortinet.";
$keywords = "IT products, business laptops, servers, networking equipment, Lenovo, Dell, HP, Cisco, Fortinet, Dubai, UAE";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="bg-gray-900 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-bold">IT Products & Hardware</h1>
        <p class="mt-4 text-lg md:text-xl">Enterprise-Grade Solutions from Leading Technology Brands</p>
    </div>
</div>

<!-- Featured Brands -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Trusted Technology Partners</h2>
            <p class="mt-4 text-gray-600">We partner with the world's leading technology manufacturers to deliver reliable and innovative solutions.</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
            <img src="/assets/images/brands/lenovo.svg" alt="Lenovo" class="h-12 filter grayscale hover:grayscale-0 transition-all duration-300">
            <img src="/assets/images/brands/dell.svg" alt="Dell" class="h-12 filter grayscale hover:grayscale-0 transition-all duration-300">
            <img src="/assets/images/brands/hp.svg" alt="HP" class="h-12 filter grayscale hover:grayscale-0 transition-all duration-300">
            <img src="/assets/images/brands/cisco.svg" alt="Cisco" class="h-12 filter grayscale hover:grayscale-0 transition-all duration-300">
            <img src="/assets/images/brands/fortinet.svg" alt="Fortinet" class="h-10 filter grayscale hover:grayscale-0 transition-all duration-300">
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Business Laptops -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Business Laptops</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Professional laptops from ThinkPad, Latitude, and EliteBook series, designed for productivity, security, and reliability.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Enterprise-Grade Security</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Durable & Reliable</li>
                    </ul>
                </div>
            </div>

            <!-- Desktop Computers -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Desktop Computers</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Reliable desktops from ThinkCentre, OptiPlex, and EliteDesk series, perfect for office productivity and business applications.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Scalable Performance</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Advanced Management</li>
                    </ul>
                </div>
            </div>

            <!-- Servers & Storage -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Servers & Storage</h3>
                    </div>
                    <p class="text-gray-600 mb-4">High-performance servers and storage from ThinkSystem and PowerEdge for business-critical applications and data management.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>High-Performance Computing</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Scalable Architecture</li>
                    </ul>
                </div>
            </div>

            <!-- Networking Equipment -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Networking Equipment</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Enterprise networking solutions from Cisco and Fortinet for reliable connectivity, security, and performance.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Switches, Routers & APs</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Next-Gen Firewalls</li>
                    </ul>
                </div>
            </div>

            <!-- Accessories -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H5v-2H3v-2H1v-4a6 6 0 016-6h4a6 6 0 016 6z"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Accessories</h3>
                    </div>
                    <p class="text-gray-600 mb-4">A complete range of IT accessories, including monitors, input devices, printers, cables, and power solutions.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Monitors & Displays</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Power & Cable Management</li>
                    </ul>
                </div>
            </div>

            <!-- Components -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white rounded-full p-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="ml-4 text-2xl font-bold text-gray-800">Components</h3>
                    </div>
                    <p class="text-gray-600 mb-4">High-quality computer components for upgrades and custom builds, including memory, storage, and processors.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Memory & Storage Upgrades</li>
                        <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Processors & Motherboards</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-blue-600 text-white">
    <div class="container mx-auto px-6 py-20 text-center">
        <h2 class="text-3xl font-bold">Need a Custom IT Hardware Quote?</h2>
        <p class="mt-4 text-lg">Contact us for competitive pricing and expert consultation on the right hardware for your business.</p>
        <a href="/contact.php" class="mt-8 inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-200">Request a Quote</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>