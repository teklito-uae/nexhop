<?php
$title = "Backup as a Service (BaaS) Dubai - Secure Cloud Backup | Nexhop";
$description = "Flexible and scalable Backup as a Service (BaaS) solutions in Dubai, UAE. Securely backup your data to the cloud with automated processes and easy recovery options.";
$keywords = "BaaS Dubai, Backup as a Service, cloud backup, data backup, secure backup, automated backup, data protection, Dubai, UAE";
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="bg-gray-50 dark:bg-base dot-pattern">
    <!-- Hero Section -->
    <section class="relative pt-20 pb-12 overflow-hidden bg-white dark:bg-surface">
        <div class="absolute right-[-5%] top-0 opacity-[0.03] dark:opacity-[0.05] pointer-events-none">
            <svg width="500" height="500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                class="text-blue-500">
                <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"></path>
                <path d="M12 18V7M7 12l5 5 5-5"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav
                class="flex mb-4 text-[10px] font-extrabold uppercase tracking-widest text-gray-400 dark:text-slate-500">
                <a href="/" class="hover:text-blue-500 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="/services.php" class="hover:text-blue-500 transition-colors">Services</a>
                <span class="mx-2">/</span>
                <span class="text-blue-600 dark:text-blue-400">BaaS</span>
            </nav>

            <div class="max-w-3xl">
                <span
                    class="inline-block px-2 py-0.5 bg-blue-600/10 text-blue-600 dark:text-blue-400 text-[9px] font-extrabold uppercase tracking-widest rounded-full mb-3">Data
                    Protection</span>
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white leading-tight mb-3 tracking-tight font-[Poppins]">
                    Automated <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Backup as a
                        Service</span>
                </h1>
                <p class="text-xs sm:text-sm text-gray-500 dark:text-slate-400 mb-6 leading-relaxed max-w-2xl">
                    Never lose a byte again. Our BaaS solutions provide secure, automated, and immutable backups for
                    your servers, workstations, and cloud applications with rapid recovery.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="/contact.php"
                        class="px-6 py-2 bg-blue-600 text-white text-[11px] font-extrabold rounded-full hover:bg-blue-700 transition-all shadow-lg shadow-blue-600/20 uppercase tracking-widest">Setup
                        Auto-Backup</a>
                    <a href="tel:+971505050505"
                        class="px-6 py-2 bg-transparent text-gray-900 dark:text-white border border-gray-200 dark:border-white/10 text-[11px] font-extrabold rounded-full hover:bg-gray-50 dark:hover:bg-white/5 transition-all uppercase tracking-widest">Talk
                        to Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Problems / Challenges Section -->
    <section class="py-12 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center lg:text-left">
                <span
                    class="text-[10px] tracking-widest uppercase font-bold text-red-500 mb-2 block font-extrabold">Data
                    Risks</span>
                <h2
                    class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white tracking-tight font-[Poppins]">
                    Why Manual Backups Fail</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 p-6 hover:shadow-md transition-all group overflow-hidden relative">
                    <div
                        class="absolute -top-12 -right-12 w-24 h-24 bg-red-500/5 rounded-full blur-2xl group-hover:bg-red-500/10 transition-colors">
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl bg-red-500/10 text-red-500 flex items-center justify-center mb-4 relative z-10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-2 relative z-10">Verification
                        Lack</h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-0 relative z-10">Backups
                        are running, but nobody checks if they are actually restorable. You only find out it's corrupted
                        when you need it.</p>
                </div>

                <div
                    class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 p-6 hover:shadow-md transition-all group overflow-hidden relative">
                    <div
                        class="absolute -top-12 -right-12 w-24 h-24 bg-orange-500/5 rounded-full blur-2xl group-hover:bg-orange-500/10 transition-colors">
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl bg-orange-500/10 text-orange-500 flex items-center justify-center mb-4 relative z-10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-2 relative z-10">Ransomware Risk
                    </h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-0 relative z-10">Local
                        backups are often the first thing ransomware encrypts. Without off-site air-gapped copies,
                        recovery is impossible.</p>
                </div>

                <div
                    class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 p-6 hover:shadow-md transition-all group overflow-hidden relative">
                    <div
                        class="absolute -top-12 -right-12 w-24 h-24 bg-blue-500/5 rounded-full blur-2xl group-hover:bg-blue-500/10 transition-colors">
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-500/10 text-blue-500 flex items-center justify-center mb-4 relative z-10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-2 relative z-10">Human Error</h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-0 relative z-10">Someone
                        forgets to swap a tape or drive, leaving gaps in your recovery history. One mistake can lose
                        days of work.</p>
                </div>

                <div
                    class="bg-white dark:bg-surface rounded-[2rem] border border-gray-100 dark:border-white/5 p-6 hover:shadow-md transition-all group overflow-hidden relative">
                    <div
                        class="absolute -top-12 -right-12 w-24 h-24 bg-cyan-500/5 rounded-full blur-2xl group-hover:bg-cyan-500/10 transition-colors">
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl bg-cyan-500/10 text-cyan-600 flex items-center justify-center mb-4 relative z-10">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-extrabold text-gray-900 dark:text-white mb-2 relative z-10">Scaling Pain
                    </h3>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-0 relative z-10">Buying
                        new drives every time your data grows. Physical storage management is a full-time task for IT
                        teams.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nexhop Advantage Section -->
    <section class="py-16 bg-white dark:bg-surface relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <span
                        class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-2 block font-extrabold italic">The
                        BaaS Advantage</span>
                    <h2
                        class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white leading-tight mb-4 font-[Poppins]">
                        Reliable Data Shield</h2>
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-slate-400 mb-6 leading-relaxed">
                        We take the complexity out of data protection. Our BaaS encrypts your data locally before it
                        ever leaves your network, then stores it in immutable cloud storage that even ransomware can't
                        touch.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-blue-600/10 text-blue-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg></div>
                            <div>
                                <h4 class="text-[13px] font-extrabold text-gray-900 dark:text-white mb-0.5">End-to-End
                                    Encryption</h4>
                                <p class="text-[10px] text-gray-500">AES-256 secure transfer.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div
                                class="w-8 h-8 rounded-lg bg-emerald-600/10 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg></div>
                            <div>
                                <h4 class="text-[13px] font-extrabold text-gray-900 dark:text-white mb-0.5">Instant
                                    Recovery</h4>
                                <p class="text-[10px] text-gray-500">Fast file-level restoration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 dark:bg-base p-6 rounded-[2rem] border border-gray-100 dark:border-white/5">
                        <h4 class="text-2xl font-extrabold text-blue-600 mb-1">100%</h4>
                        <p class="text-[9px] uppercase font-bold tracking-widest text-gray-400">Automated</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-6 rounded-[2rem] border border-gray-100 dark:border-white/5">
                        <h4 class="text-2xl font-extrabold text-emerald-500 mb-1">Immutable</h4>
                        <p class="text-[9px] uppercase font-bold tracking-widest text-gray-400">Storage Tier</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-6 rounded-[2rem] border border-gray-100 dark:border-white/5">
                        <h4 class="text-2xl font-extrabold text-blue-600 mb-1">Global</h4>
                        <p class="text-[9px] uppercase font-bold tracking-widest text-gray-400">Compliant DCs</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-base p-6 rounded-[2rem] border border-gray-100 dark:border-white/5">
                        <h4 class="text-2xl font-extrabold text-emerald-500 mb-1">Managed</h4>
                        <p class="text-[9px] uppercase font-bold tracking-widest text-gray-400">By Experts</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section class="py-16 relative bg-gray-50 dark:bg-base overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span
                    class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-2 block font-extrabold">Workflow</span>
                <h2
                    class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white tracking-tight font-[Poppins]">
                    BaaS Onboarding</h2>
            </div>

            <div class="relative">
                <div class="absolute top-[40px] left-0 w-full h-0.5 bg-gray-200 dark:bg-white/5 hidden lg:block"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="relative group text-center lg:text-left flex flex-col items-center lg:items-start transition-all">
                        <div
                            class="w-12 h-12 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-extrabold text-lg mb-6 shadow-xl shadow-blue-600/20 group-hover:scale-110 transition-transform relative z-10">
                            1</div>
                        <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-2 font-[Poppins]">Agent
                            Install</h4>
                        <p class="text-[11px] text-gray-500 dark:text-slate-500 leading-relaxed font-medium">Deploying
                            lightweight agents to your on-premise or cloud servers.</p>
                    </div>
                    <div
                        class="relative group text-center lg:text-left flex flex-col items-center lg:items-start transition-all">
                        <div
                            class="w-12 h-12 rounded-2xl bg-white dark:bg-surface border border-gray-200 dark:border-white/10 text-blue-600 flex items-center justify-center font-extrabold text-lg mb-6 shadow-sm group-hover:scale-110 transition-transform relative z-10">
                            2</div>
                        <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-2 font-[Poppins]">Policy
                            Mapping</h4>
                        <p class="text-[11px] text-gray-500 dark:text-slate-500 leading-relaxed font-medium">Defining
                            RPOs (How often) and Retention (How long) for each data set.</p>
                    </div>
                    <div
                        class="relative group text-center lg:text-left flex flex-col items-center lg:items-start transition-all">
                        <div
                            class="w-12 h-12 rounded-2xl bg-white dark:bg-surface border border-gray-200 dark:border-white/10 text-blue-600 flex items-center justify-center font-extrabold text-lg mb-6 shadow-sm group-hover:scale-110 transition-transform relative z-10">
                            3</div>
                        <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-2 font-[Poppins]">Initial
                            Seed</h4>
                        <p class="text-[11px] text-gray-500 dark:text-slate-500 leading-relaxed font-medium">The first
                            bulk transfer of data to the cloud, followed by incremental updates.</p>
                    </div>
                    <div
                        class="relative group text-center lg:text-left flex flex-col items-center lg:items-start transition-all">
                        <div
                            class="w-12 h-12 rounded-2xl bg-white dark:bg-surface border border-gray-200 dark:border-white/10 text-blue-600 flex items-center justify-center font-extrabold text-lg mb-6 shadow-sm group-hover:scale-110 transition-transform relative z-10">
                            4</div>
                        <h4 class="text-base font-extrabold text-gray-900 dark:text-white mb-2 font-[Poppins]">24/7
                            Monitoring</h4>
                        <p class="text-[11px] text-gray-500 dark:text-slate-500 leading-relaxed font-medium">Our SOC
                            monitors for backup failures and remediates them immediately.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Stack -->
    <section class="py-16 bg-white dark:bg-surface relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span
                    class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-2 block italic text-center italic font-extrabold">Backup
                    Stack</span>
                <h2
                    class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white tracking-tight font-[Poppins]">
                    BaaS Capabilities Stack</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">Server Backups
                    </h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Protecting Windows,
                        Linux, and Virtual Server (VMware/Hyper-V) environments.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> Bare Metal Recovery
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> Granular Restore
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-emerald-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">SaaS Backup
                    </h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Dedicated backups for
                        Microsoft 365, Google Workspace, and Salesforce.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Exchange/OneDrive
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Audit Log sync
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">DB Backups</h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Application-aware
                        backups for SQL, SQL Server, Oracle, and SAP HANA.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> Log Truncation
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> PIT Recovery
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-emerald-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">Encrypted
                        Storage</h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">All data is encrypted
                        with uniquely managed keys before being sent to the cloud.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> FIPS 140-2 ready
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> SOC2 Compliant
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-blue-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">Global Sync
                    </h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Data replication
                        across multiple geographical regions for ultimate disaster resilience.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> Geo-Redundant
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-blue-500 rounded-full"></div> Local Compliance
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-gray-50 dark:bg-base p-8 rounded-[2rem] border border-gray-100 dark:border-white/5 hover:border-emerald-500/30 transition-all group">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg></div>
                    <h4 class="text-md font-extrabold text-gray-900 dark:text-white mb-3 font-[Poppins]">Reporting</h4>
                    <p class="text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed mb-4">Daily automated
                        reports showing backup status and success rates for every agent.</p>
                    <ul class="text-[10px] space-y-2 text-gray-400 font-bold uppercase tracking-widest">
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> CSV/PDF Export
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1 h-1 bg-emerald-500 rounded-full"></div> Audit-Ready
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50 dark:bg-base overflow-hidden">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center">
                <span
                    class="text-[10px] tracking-widest uppercase font-bold text-blue-600 mb-2 block font-extrabold">Backup
                    Help</span>
                <h2
                    class="text-xl sm:text-2xl font-extrabold text-gray-900 dark:text-white tracking-tight font-[Poppins]">
                    Common Queries</h2>
            </div>

            <div class="space-y-3">
                <div
                    class="bg-white dark:bg-surface border border-gray-100 dark:border-white/5 rounded-2xl overflow-hidden shadow-sm">
                    <button class="w-full p-4 flex items-center justify-between text-left" onclick="toggleFaq(this)">
                        <h4 class="text-xs sm:text-sm font-extrabold text-gray-900 dark:text-white font-[Poppins]">How
                            is BaaS different from a simple cloud drive like Google Drive?</h4>
                        <svg class="w-4 h-4 text-blue-600 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 bg-gray-50/50 dark:bg-base/50">
                        <div class="p-4 pt-0 text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">
                            Cloud drives are for sync; BaaS is for protection. BaaS keeps version history (retention),
                            supports server-level recovery, and uses encryption/immutability that sync tools don't
                            provide.
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-surface border border-gray-100 dark:border-white/5 rounded-2xl overflow-hidden shadow-sm">
                    <button class="w-full p-4 flex items-center justify-between text-left" onclick="toggleFaq(this)">
                        <h4 class="text-xs sm:text-sm font-extrabold text-gray-900 dark:text-white font-[Poppins]">Will
                            backups slow down our office internet?</h4>
                        <svg class="w-4 h-4 text-blue-600 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 bg-gray-50/50 dark:bg-base/50">
                        <div class="p-4 pt-0 text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">
                            No. We implement bandwidth throttling during office hours and leverage deduplication
                            technology, which only sends changed bits of data rather than full files.
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-surface border border-gray-100 dark:border-white/5 rounded-2xl overflow-hidden shadow-sm">
                    <button class="w-full p-4 flex items-center justify-between text-left" onclick="toggleFaq(this)">
                        <h4 class="text-xs sm:text-sm font-extrabold text-gray-900 dark:text-white font-[Poppins]">Do we
                            need to buy any new servers for this?</h4>
                        <svg class="w-4 h-4 text-blue-600 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 bg-gray-50/50 dark:bg-base/50">
                        <div class="p-4 pt-0 text-[11px] text-gray-500 dark:text-slate-400 leading-relaxed">
                            Typically, no. BaaS is designed to use your existing infrastructure. We simply install
                            agents or connect via APIs to begin the protection cycle.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keywords Section -->
    <section
        class="py-12 bg-white dark:bg-surface border-t border-gray-100 dark:border-white/5 relative overflow-hidden text-center">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-[10px] font-extrabold text-gray-900 dark:text-white uppercase tracking-[0.2em] mb-6">
                Recently searched keywords</h2>
            <div class="flex flex-wrap justify-center gap-x-4 gap-y-3">
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">BaaS
                    Providers Dubai</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Cloud
                    Backup Services UAE</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Managed
                    Data Protection Sharjah</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Enterprise
                    Cloud Backup Abu Dhabi</a>
                <span class="text-gray-200 dark:text-slate-800">|</span>
                <a href="#"
                    class="text-[10px] text-gray-500 dark:text-slate-400 hover:text-blue-600 transition-colors">Off-site
                    Data Storage Dubai</a>
            </div>
        </div>
    </section>

    <!-- CTA Banner (Full Width) -->
    <section class="bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-500 relative overflow-hidden">
        <!-- Mesh Glows -->
        <div class="absolute -top-12 -right-12 w-64 h-64 bg-white/10 rounded-full blur-[80px]"></div>
        <div class="absolute -bottom-12 -left-12 w-64 h-64 bg-indigo-400/10 rounded-full blur-[80px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left max-w-2xl">
                    <span
                        class="px-2.5 py-0.5 bg-white/10 text-white text-[8px] font-extrabold uppercase tracking-[0.2em] rounded-full border border-white/20 backdrop-blur-md mb-4 inline-block font-extrabold">Flash
                        Fix BaaS</span>
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-white mb-2 tracking-tight">Protect
                        Your Data Today?</h2>
                    <p class="text-xs text-blue-50/70">From small offices to data center scale, we build backup shields
                        that never fail.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 items-center flex-shrink-0">
                    <a href="/contact.php"
                        class="px-7 py-2.5 bg-white text-blue-700 rounded-full font-extrabold text-xs hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">Start
                        Protection Audit</a>
                    <a href="tel:+971505050505"
                        class="px-6 py-2.5 bg-transparent text-white border border-white/30 rounded-full font-extrabold text-xs hover:bg-white/10 transition-all">Talk
                        to Expert</a>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    function toggleFaq(button) {
        var content = button.nextElementSibling;
        var icon = button.querySelector('svg');
        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0px';
            icon.style.transform = 'rotate(0deg)';
        } else {
            document.querySelectorAll('.max-h-0').forEach(function (c) {
                c.style.maxHeight = '0px';
                var i = c.previousElementSibling.querySelector('svg');
                if (i) i.style.transform = 'rotate(0deg)';
            });
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.style.transform = 'rotate(180deg)';
        }
    }
</script>

<?php include '../includes/footer.php'; ?>