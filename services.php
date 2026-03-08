<?php
$title = "Services Directory - Flash Fix Technologies";
$description = "Explore our comprehensive directory of IT services in Dubai, covering Workspace Solutions, Infrastructure, Cyber Security, and Cloud AV solutions.";
$keywords = "IT services dubai, IT directory, infrastructure services, cybersecurity companies dubai, cloud solutions uae";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Grid Background -->
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]">
    </div>
    <div class="absolute inset-0 bg-hero-gradient opacity-5 dark:opacity-10"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center animate-fade-in-up">
            <span
                class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-blue-600 uppercase bg-blue-50 dark:bg-blue-500/10 dark:text-blue-400 rounded-full">
                Service Directory
            </span>
            <h1
                class="text-2xl md:text-4xl lg:text-5xl font-black text-gray-900 dark:text-white mb-6 tracking-tighter leading-tight min-h-[1.2em] flex flex-wrap justify-center items-center">
                <span>Comprehensive IT&nbsp;</span><span id="typewriter" class="text-gradient-accent"></span><span
                    class="text-blue-600 animate-cursor ml-1">|</span>
            </h1>

            <script>
                const words = ["Solutions", "Ecosystems", "Infrastructure", "Innovation", "Performance"];
                let i = 0;
                let j = 0;
                let currentWord = "";
                let isDeleting = false;
                let typeSpeed = 150;

                function type() {
                    currentWord = words[i];
                    if (isDeleting) {
                        document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
                        j--;
                        typeSpeed = 100;
                    } else {
                        document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
                        j++;
                        typeSpeed = 150;
                    }

                    if (!isDeleting && j === currentWord.length) {
                        isDeleting = true;
                        typeSpeed = 2000;
                    } else if (isDeleting && j === 0) {
                        isDeleting = false;
                        i = (i + 1) % words.length;
                        typeSpeed = 500;
                    }

                    setTimeout(type, typeSpeed);
                }

                document.addEventListener("DOMContentLoaded", type);
            </script>
            <p
                class="text-sm md:text-base text-gray-500 dark:text-slate-400 mb-8 leading-relaxed max-w-2xl mx-auto italic">
                Discover our full range of technology services designed to empower your business. From core
                infrastructure to advanced cybersecurity and cloud solutions.
            </p>

            <!-- Value Badges -->
            <div class="flex flex-wrap justify-center items-center gap-3 md:gap-6 animate-fade-in-up"
                style="animation-delay: 600ms;">
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 dark:bg-blue-500/5 border border-blue-100 dark:border-blue-500/10 transition-all hover:scale-105">
                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span
                        class="text-[10px] font-bold text-gray-700 dark:text-blue-200 uppercase tracking-tighter">Reliable</span>
                </div>
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-50 dark:bg-cyan-500/5 border border-cyan-100 dark:border-cyan-500/10 transition-all hover:scale-105">
                    <svg class="w-4 h-4 text-cyan-600 dark:text-cyan-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span class="text-[10px] font-bold text-gray-700 dark:text-cyan-200 uppercase tracking-tighter">Fast
                        Response</span>
                </div>
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 dark:bg-indigo-500/5 border border-indigo-100 dark:border-indigo-500/10 transition-all hover:scale-105">
                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <span
                        class="text-[10px] font-bold text-gray-700 dark:text-indigo-200 uppercase tracking-tighter">Innovative</span>
                </div>
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-50 dark:bg-green-500/5 border border-green-100 dark:border-green-500/10 transition-all hover:scale-105">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span
                        class="text-[10px] font-bold text-gray-700 dark:text-green-200 uppercase tracking-tighter">Proactive</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Mascot Character -->
    <div class="absolute bottom-0 left-[5%] md:left-[8%] lg:left-[10%] w-32 md:w-48 lg:w-64 h-auto z-10 hidden md:block opacity-0 animate-fade-in-left pointer-events-none"
        style="animation-delay: 400ms; animation-fill-mode: forwards;">
        <img src="/assets/images/flash-fix-charactor.png" alt="Flash Fix Character"
            class="w-full h-auto object-contain">
    </div>
</section>

<!-- Services Grid -->
<section class="pb-32 relative pt-20"> <!-- Added pt-20 for margin top -->
    <div class="container mx-auto px-6">

        <!-- Pillar 1: IT & Workspace -->
        <div class="mb-24">
            <div class="flex items-center gap-4 mb-12 animate-fade-in-left">
                <div
                    class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-500/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white tracking-tight">IT &
                        Workspace
                        Solutions</h2>
                    <p class="text-gray-500 dark:text-slate-400 text-sm">Empowering your team with seamless hardware and
                        support.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php
                $it_services = [
                    ['title' => 'IT AMC Solutions', 'link' => '/services/it-amc.php', 'desc' => 'Comprehensive annual maintenance for all IT assets.'],
                    ['title' => 'On-Call IT Support', 'link' => '/services/on-call-support.php', 'desc' => 'Rapid response technical assistance when you need it.'],
                    ['title' => 'Remote Assistance', 'link' => '/services/remote-it-support.php', 'desc' => 'Instant software and troubleshooting support globally.'],
                    ['title' => 'New Office Setup', 'link' => '/services/new-office-it-setup.php', 'desc' => 'End-to-end IT deployment for growing businesses.'],
                    ['title' => 'IT Relocation', 'link' => '/services/it-relocation.php', 'desc' => 'Safe and secure moving of critical server infrastructure.'],
                    ['title' => 'WFH Enablement', 'link' => '/services/work-from-home.php', 'desc' => 'Secure remote work setups and VPN connectivity.'],
                    ['title' => 'Enterprise Mobility', 'link' => '/services/enterprise-mobility.php', 'desc' => 'Managing mobile devices and secure field access.'],
                    ['title' => 'Collaboration Tools', 'link' => '/services/user-collaboration-tools.php', 'desc' => 'Teams, Slack, and Zoom integration services.'],
                    ['title' => 'Microsoft 365', 'link' => '/services/microsoft-business-plans.php', 'desc' => 'Deployment and license management for MS 365.'],
                    ['title' => 'IT Consulting', 'link' => '/services/it-consulting.php', 'desc' => 'Strategic roadmap and technology auditing services.'],
                ];
                foreach ($it_services as $service): ?>
                    <a href="<?php echo $service['link']; ?>"
                        class="glass-card p-6 group hover:border-blue-500/50 transition-all duration-300">
                        <div class="desktop-sub-bullet mb-4"></div>
                        <h3
                            class="text-sm font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-500 transition-colors">
                            <?php echo $service['title']; ?>
                        </h3>
                        <p class="text-xs text-gray-500 dark:text-slate-500 leading-relaxed"><?php echo $service['desc']; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pillar 2: Infrastructure -->
        <div class="mb-24">
            <div class="flex items-center gap-4 mb-12 animate-fade-in-left">
                <div
                    class="w-14 h-14 rounded-2xl bg-cyan-500 flex items-center justify-center text-white shadow-lg shadow-cyan-500/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white tracking-tight">
                        Infrastructure &
                        Networking</h2>
                    <p class="text-gray-500 dark:text-slate-400 text-sm">Building the backbone of your digital
                        transformation.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php
                $infra_services = [
                    ['title' => 'Structured Cabling', 'link' => '/services/structured-cabling.php', 'desc' => 'Data, voice, and fiber optic cabling solutions.'],
                    ['title' => 'Switching & Routing', 'link' => '/services/switching-routing.php', 'desc' => 'High-performance core network design.'],
                    ['title' => 'Managed WiFi', 'link' => '/services/managed-wifi.php', 'desc' => 'Enterprise-grade wireless coverage and security.'],
                    ['title' => 'Server Solutions', 'link' => '/services/server-solutions.php', 'desc' => 'Physical and virtual server deployments (Dell/HP).'],
                    ['title' => 'Hardware Storage', 'link' => '/services/server-storage.php', 'desc' => 'Reliable enterprise storage array management.'],
                    ['title' => 'NAS & SAN Storage', 'link' => '/services/nas-storage.php', 'desc' => 'High-speed data access and shared storage.'],
                    ['title' => 'Data Sync', 'link' => '/services/synchronized-data-storage.php', 'desc' => 'Real-time multi-site data synchronization.'],
                    ['title' => 'Network Firewall', 'link' => '/services/next-gen-firewall.php', 'desc' => 'Next-gen perimeter threat protection.'],
                    ['title' => 'Enterprise VPN', 'link' => '/services/vpn-solutions.php', 'desc' => 'Secure site-to-site and client-to-site tunneling.'],
                    ['title' => 'Proxy Servers', 'link' => '/services/proxy-services.php', 'desc' => 'Filtering, performance, and anonymity solutions.'],
                ];
                foreach ($infra_services as $service): ?>
                    <a href="<?php echo $service['link']; ?>"
                        class="glass-card p-6 group hover:border-cyan-500/50 transition-all duration-300">
                        <div class="desktop-sub-bullet mb-4 !bg-cyan-500"></div>
                        <h3
                            class="text-sm font-bold text-gray-900 dark:text-white mb-2 group-hover:text-cyan-500 transition-colors">
                            <?php echo $service['title']; ?>
                        </h3>
                        <p class="text-xs text-gray-500 dark:text-slate-500 leading-relaxed"><?php echo $service['desc']; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pillar 3: Security & ELV -->
        <div class="mb-24">
            <div class="flex items-center gap-4 mb-12 animate-fade-in-left">
                <div
                    class="w-14 h-14 rounded-2xl bg-red-500 flex items-center justify-center text-white shadow-lg shadow-red-500/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white tracking-tight">Security &
                        ELV Systems
                    </h2>
                    <p class="text-gray-500 dark:text-slate-400 text-sm">Protecting assets and monitoring physical
                        environments.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php
                $sec_services = [
                    ['title' => 'Cyber Security', 'link' => '/services/cyber-security-solutions.php', 'desc' => 'Full-spectrum digital threat management.'],
                    ['title' => 'Endpoint Protection', 'link' => '/services/endpoint-security.php', 'desc' => 'Antivirus and EDR for all company devices.'],
                    ['title' => 'Email Security', 'link' => '/services/email-security.php', 'desc' => 'Anti-phishing and anti-spam protection.'],
                    ['title' => 'DLP Solutions', 'link' => '/services/dlp-solution.php', 'desc' => 'Preventing unauthorized data leaks and sharing.'],
                    ['title' => 'Security Audit', 'link' => '/services/vulnerability-management.php', 'desc' => 'Regular scanning for network vulnerabilities.'],
                    ['title' => 'CCTV Systems', 'link' => '/services/cctv-surveillance.php', 'desc' => 'High-definition surveillance and recording.'],
                    ['title' => 'Access Control', 'link' => '/services/access-control.php', 'desc' => 'Biometric and card-based entry management.'],
                    ['title' => 'Time Attendance', 'link' => '/services/biometric-attendance.php', 'desc' => 'Automated staff tracking and reporting.'],
                    ['title' => 'Intercom Systems', 'link' => '/services/intercom-systems.php', 'desc' => 'Advanced audio and video door communication.'],
                    ['title' => 'IP Telephony', 'link' => '/services/ip-phone-solutions.php', 'desc' => 'Modern VoIP and PBX communications.'],
                ];
                foreach ($sec_services as $service): ?>
                    <a href="<?php echo $service['link']; ?>"
                        class="glass-card p-6 group hover:border-red-500/50 transition-all duration-300">
                        <div class="desktop-sub-bullet mb-4 !bg-red-500"></div>
                        <h3
                            class="text-sm font-bold text-gray-900 dark:text-white mb-2 group-hover:text-red-500 transition-colors">
                            <?php echo $service['title']; ?>
                        </h3>
                        <p class="text-xs text-gray-500 dark:text-slate-500 leading-relaxed"><?php echo $service['desc']; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pillar 4: Cloud & AV -->
        <div class="mb-24">
            <div class="flex items-center gap-4 mb-12 animate-fade-in-left">
                <div
                    class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center text-white shadow-lg shadow-indigo-500/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 dark:text-white tracking-tight">Cloud & AV
                        Solutions
                    </h2>
                    <p class="text-gray-500 dark:text-slate-400 text-sm">Next-gen hosting and immersive visual
                        experiences.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <?php
                $cloud_services = [
                    ['title' => 'Azure Solutions', 'link' => '/services/azure-cloud-solutions.php', 'desc' => 'Microsoft Azure infrastructure setup.'],
                    ['title' => 'Cloud Migration', 'link' => '/services/cloud-migration.php', 'desc' => 'Moving legacy data to modern cloud platforms.'],
                    ['title' => 'Backup (BaaS)', 'link' => '/services/backup-as-a-service.php', 'desc' => 'Cloud-native data backup and protection.'],
                    ['title' => 'Disaster Recovery', 'link' => '/services/disaster-recovery-solutions.php', 'desc' => 'Ensuring business continuity after outages.'],
                    ['title' => 'BCP Planning', 'link' => '/services/business-continuity-plan.php', 'desc' => 'Strategic risk management and resilience.'],
                    ['title' => 'Video Conferencing', 'link' => '/services/video-conferencing.php', 'desc' => 'Zoom, Poly, and Logitech hardware setups.'],
                    ['title' => 'Meeting Rooms', 'link' => '/services/meeting-room-solutions.php', 'desc' => 'Acoustic and visual optimization for offices.'],
                    ['title' => 'Video Walls', 'link' => '/services/video-wall.php', 'desc' => 'Immersive LED and multi-screen displays.'],
                    ['title' => 'Digital Signage', 'link' => '/services/digital-signage.php', 'desc' => 'Content management for digital advertising.'],
                    ['title' => 'Education Tech', 'link' => '/services/smart-classroom-solutions.php', 'desc' => 'Smart boards and interactive school solutions.'],
                ];
                foreach ($cloud_services as $service): ?>
                    <a href="<?php echo $service['link']; ?>"
                        class="glass-card p-6 group hover:border-indigo-500/50 transition-all duration-300">
                        <div class="desktop-sub-bullet mb-4 !bg-indigo-600"></div>
                        <h3
                            class="text-sm font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 transition-colors">
                            <?php echo $service['title']; ?>
                        </h3>
                        <p class="text-xs text-gray-500 dark:text-slate-500 leading-relaxed"><?php echo $service['desc']; ?>
                        </p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<!-- Testimonials -->
<section
    class="py-12 md:py-20 bg-gray-50 dark:bg-base relative overflow-hidden border-t border-gray-100 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-left mb-10 md:mb-12">
            <span class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-3 block">Testimonials</span>
            <h2
                class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4 tracking-tight">
                What Our Clients Say</h2>
        </div>

        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <?php
                $testimonials = [
                    ["Ahmed Khalid", "CEO, Zenix Logistics", "Flash Fix transformed our connectivity overnight. Professional, fast, and unconditional support. The team's expertise is unmatched in the region."],
                    ["Sarah Bennett", "IT Manager, Nexus Corp", "The automated security audit they deployed was incredibly eye-opening. We patched three critical vulnerabilities. We feel completely secure now."],
                    ["Rajesh Kumar", "Operations, Al-Futtaim", "A massive server outage brought our commerce system offline. FlashFix resolved the routing issue in an hour. Absolute lifesavers."],
                    ["James Wilson", "Director, Cloud9 Tech", "Scaling our infrastructure was a nightmare until Flash Fix took over. Zero downtime migrations are their specialty."],
                    ["Fatima Al-Sayed", "Founder, Bloom Media", "The most reliable IT AMC partner in Dubai. Their preventive maintenance saved us from multiple potential crashes."],
                    ["David Chen", "CTO, Fintech Solutions", "Their cybersecurity framework is world-class. We passed our compliance audit with flying colors thanks to their team."],
                    ["Amir Hassan", "Manager, Gulf Trading", "Seamless transition to Microsoft 365. Their training and support made it easy for our team to adapt."],
                    ["Elena Petrova", "Head of IT, Grand Hotel", "The 24/7 monitoring service gives me peace of mind. They always detect and fix issues before we even notice."],
                    ["Marcus Thorne", "Founder, Elite Estates", "Custom networking solutions that actually work. Our multi-site office connectivity is now rock solid."],
                    ["Laila Mansour", "COO, Tradewinds Co", "Flash Fix delivers on their promises. Their response time for emergency support is genuinely under 60 minutes."]
                ];

                foreach ($testimonials as $i => $t) {
                    echo '
                    <div class="swiper-slide h-auto">
                        <div class="bg-white dark:bg-surface rounded-[2rem] p-8 lg:p-10 border border-gray-100 dark:border-white/5 shadow-sm hover:shadow-xl transition-all duration-300 relative group/card overflow-hidden h-full flex flex-col">
                            <div class="absolute -top-4 -right-4 text-blue-100 dark:text-white/5 opacity-50 group-hover/card:text-blue-200 dark:group-hover/card:text-white/10 transition-colors">
                                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 32 32">
                                    <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H9.2c.4-2.2 2.3-4 4.8-4V8zm14 0c-3.3 0-6 2.7-6 6v10h10V14h-4.8c.4-2.2 2.3-4 4.8-4V8z"></path>
                                </svg>
                            </div>
                            <div class="relative z-10 flex flex-col h-full">
                                <p class="text-gray-600 dark:text-slate-300 text-sm leading-relaxed mb-8 flex-grow">"' . $t[2] . '"</p>
                                <div class="flex items-center">
                                    <img src="https://i.pravatar.cc/150?u=' . $i . '" class="w-12 h-12 rounded-full mr-4 border-2 border-white dark:border-surface shadow-md" alt="' . $t[0] . '">
                                    <div>
                                        <h4 class="font-extrabold text-sm text-gray-900 dark:text-white leading-tight">' . $t[0] . '</h4>
                                        <p class="text-[10px] text-blue-600 dark:text-cyan-400 font-bold uppercase tracking-wider mt-1">' . $t[1] . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <div class="swiper-pagination !static mt-10"></div>
        </div>
    </div>
</section>

<!-- Full Width CTA Banner -->
<section class="bg-gradient-to-r from-blue-700 via-blue-600 to-cyan-500 relative overflow-hidden">
    <div class="absolute -top-12 -right-12 w-64 h-64 bg-white/10 rounded-full blur-[80px]"></div>
    <div class="absolute -bottom-12 -left-12 w-64 h-64 bg-cyan-400/10 rounded-full blur-[80px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
            <div class="text-center lg:text-left max-w-2xl">
                <span
                    class="px-2.5 py-0.5 bg-white/10 text-white text-[8px] font-extrabold uppercase tracking-[0.2em] rounded-full border border-white/20 backdrop-blur-md mb-4 inline-block">Flash
                    Fix Enterprise</span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight">Ready to
                    Revolutionize Your Business IT?</h2>
                <p class="text-xs text-blue-50/70">Join hundreds of thriving enterprises in Dubai. Get an elite strategy
                    session today.</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 items-center flex-shrink-0">
                <a href="/contact.php"
                    class="px-7 py-2.5 bg-white text-blue-700 rounded-full font-extrabold text-xs hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">
                    Book Free Consultation
                </a>
                <a href="tel:+971505050505"
                    class="px-6 py-2.5 bg-transparent text-white border border-white/30 rounded-full font-extrabold text-xs hover:bg-white/10 transition-all">
                    Call Our Experts
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Swiper Initializer
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: { delay: 3000 },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 4 }
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>