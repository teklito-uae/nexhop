<?php
$title = "Contact Us - Nexhop Computers";
$description = "Get in touch with Nexhop Computers for expert IT, networking, and enterprise solutions in Dubai. Contact us for consultations, support, and services.";
$keywords = "contact IT company, IT support Dubai, IT services contact, Nexhop Computers, Dubai, UAE, Bur Dubai, networking solutions";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="pt-32 pb-16 bg-gray-50 dark:bg-base text-center dot-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">
            Contact Us</h1>
        <p class="text-xs sm:text-sm text-gray-500 dark:text-slate-400 uppercase tracking-widest font-semibold"><a
                href="/" class="hover:text-blue-600 transition-colors">Home</a> <span class="mx-2">/</span> Contact Us
        </p>
    </div>
</div>

<section class="py-10 bg-gray-50 dark:bg-base relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Contact Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 dark:text-white"><span
                    class="text-blue-600">Get in Touch</span> with Us</h2>
        </div>

        <!-- Split Layout Form & Info Box -->
        <div
            class="bg-white dark:bg-surface rounded-3xl shadow-sm border border-gray-100 dark:border-white/5 overflow-hidden flex flex-col lg:flex-row mb-20">

            <!-- Form Side -->
            <div class="w-full lg:w-3/5 p-8 lg:p-12">
                <form id="contactForm" method="POST" action="sendmail.php" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">First Name
                                *</label>
                            <input type="text" placeholder="Ex. John"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                                required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">Last Name
                                *</label>
                            <input type="text" placeholder="Ex. Doe"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                                required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">Email
                                *</label>
                            <input type="email" placeholder="example@domain.com"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                                required>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">Phone
                                *</label>
                            <input type="tel" placeholder="Enter Phone Number"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                                required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">Subject *</label>
                        <input type="text" placeholder="Enter subject here..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                            required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 dark:text-slate-300 mb-2">Your Message
                            *</label>
                        <textarea rows="4" placeholder="Enter your message here..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-white/10 bg-gray-50 dark:bg-base text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all font-medium text-sm"
                            required></textarea>
                    </div>
                    <div class="pt-2">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs sm:text-sm px-8 py-3.5 rounded-full shadow-lg shadow-blue-600/30 transition-all hover:-translate-y-0.5">Send
                            Message</button>
                    </div>
                </form>
            </div>

            <!-- Info Side -->
            <div class="w-full lg:w-2/5 p-4 hidden lg:block">
                <div
                    class="bg-blue-600 rounded-3xl h-full p-10 text-white flex flex-col justify-between relative overflow-hidden group">
                    <div
                        class="absolute -bottom-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-colors">
                    </div>
                    <div class="space-y-8 relative z-10">
                        <div>
                            <h4 class="text-xl font-extrabold mb-3 shadow-sm">Address</h4>
                            <p class="text-sm text-blue-100 leading-relaxed font-medium">#03, Sulthan Building, Computer Market<br>Burdubai - Al Souq Al Kabeer<br>Al Fahidi, Dubai, UAE</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-extrabold mb-3 shadow-sm">Contact</h4>
                            <p class="text-sm text-blue-100 flex flex-col gap-2 font-medium">
                                <span>Phone: +971 55 902 6521<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+971 50 395 8313</span>
                                <span>Email: sales@nexhop.ae<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salman@nexhop.ae</span>
                            </p>
                        </div>
                        <div>
                            <h4 class="text-xl font-extrabold mb-3 shadow-sm">Office Hours</h4>
                            <div class="text-sm text-blue-100 flex flex-col gap-2 font-medium">
                                <div class="flex justify-between w-48"><span>Monday to Friday</span><span>09:00 -
                                        18:00</span></div>
                                <div class="flex justify-between w-48"><span>Saturday</span><span>10:00 - 14:00</span>
                                </div>
                                <div class="flex justify-between w-48"><span>Sunday</span><span>Closed</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="relative z-10 mt-12">
                        <h4 class="text-lg font-extrabold mb-4">Stay Connected</h4>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-blue-600 hover:scale-110 transition-transform shadow-md">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-blue-600 hover:scale-110 transition-transform shadow-md">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-blue-600 hover:scale-110 transition-transform shadow-md">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-blue-600 hover:scale-110 transition-transform shadow-md">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile info side rendering below form -->
            <div class="w-full lg:hidden p-8 bg-blue-600 text-white flex flex-col gap-8">
                <div>
                    <h4 class="text-xl font-extrabold mb-3">Address</h4>
                    <p class="text-sm text-blue-100 leading-relaxed font-medium">#03, Sulthan Building, Computer Market<br>Burdubai - Al Souq Al Kabeer<br>Al Fahidi, Dubai, UAE</p>
                </div>
                <div>
                    <h4 class="text-xl font-extrabold mb-3">Contact</h4>
                    <p class="text-sm text-blue-100 flex flex-col gap-2 font-medium">
                        <span>Phone: +971 55 902 6521<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+971 50 395 8313</span>
                        <span>Email: sales@nexhop.ae<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salman@nexhop.ae</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div
            class="rounded-[2.5rem] overflow-hidden shadow-sm border border-gray-200 dark:border-white/5 h-[400px] mb-24 relative bg-white grayscale-[0.2]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.2819206985373!2d55.290345!3d25.2611001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43004f4ec825%3A0x71b2b1fa8d77e721!2sNEXHOP%20COMPUTER%20L.L.C!5e0!3m2!1sen!2sae!4v1774220622614!5m2!1sen!2sae" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="absolute inset-0"></iframe>
        </div>

        <!-- Newsletter Section -->
        <div class="max-w-3xl mx-auto text-center mb-10 pb-10">
            <span
                class="text-[10px] tracking-widest uppercase font-bold text-gray-400 dark:text-slate-500 mb-3 block">OUR
                NEWSLETTER</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-8">Subscribe to Our
                Newsletter for<br>the <span class="text-blue-600">Latest Updates and Offers</span></h2>

            <form
                class="relative max-w-xl mx-auto flex items-center shadow-lg shadow-blue-900/5 rounded-full bg-white dark:bg-surface border border-gray-200 dark:border-white/10 p-1.5 focus-within:ring-2 focus-within:ring-blue-500/50 transition-all">
                <div class="pl-5 text-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <input type="email" placeholder="Enter Email Address"
                    class="w-full pl-3 pr-32 py-3.5 bg-transparent border-none focus:outline-none focus:ring-0 text-gray-900 dark:text-white text-sm font-medium"
                    required>
                <button type="submit"
                    class="absolute right-1.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-6 py-3 rounded-full transition-colors">Subscribe</button>
            </form>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>