<?php
// Admin Screen: System Logs
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Logs - AstroJyoti Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        astro: {
                            orange: '#dd5c23',
                            'orange-hover': '#c94e1a',
                            dark: '#1a1a1a',
                            light: '#fcfaf8'
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
        
        .table-scroll::-webkit-scrollbar { height: 6px; width: 6px; }
        .table-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.125rem 0.625rem;
            border-radius: 9999px;
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: 0.025em;
        }
        
        /* Log Levels */
        .badge-success { background: #dcfce7; color: #166534; }
        .badge-info { background: #e0f2fe; color: #0369a1; }
        .badge-warning { background: #ffedd5; color: #ea580c; }
        .badge-error { background: #fee2e2; color: #dc2626; }

        /* Modal Animation */
        .modal-open { animation: modalFadeIn 0.2s ease-out forwards; }
        .modal-close { animation: modalFadeOut 0.2s ease-out forwards; }
        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.95) translateY(-10px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        @keyframes modalFadeOut {
            from { opacity: 1; transform: scale(1) translateY(0); }
            to { opacity: 0; transform: scale(0.95) translateY(-10px); }
        }
    </style>
</head>
<body class="text-slate-800 antialiased overflow-hidden h-screen flex">

    <!-- GLOBAL SIDEBAR -->
    <?php include __DIR__ . '/Components/AdminSidebar.php'; ?>
    
    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden bg-slate-50 relative">
        
        <!-- GLOBAL HEADER -->
        <?php include __DIR__ . '/Components/AdminHeader.php'; ?>
        
        <!-- SCROLLABLE PAGE CONTENT -->
        <main class="flex-1 overflow-y-auto p-6 lg:p-8">
            <div class="max-w-7xl mx-auto space-y-6">
                
                <!-- PAGE HEADER -->
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">System Logs</h1>
                    <p class="text-sm text-slate-500 mt-1 font-medium">View and manage all system activity logs on the AstroJyoti platform.</p>
                </div>
                
                <!-- SUMMARY STATISTICS CARDS (4 Cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">12,458</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Logs</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +12%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-green-50 text-green-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">9,210</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Success Logs</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +18%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">2,126</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Warning Logs</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-red-600 bg-red-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                    -6%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">1,122</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Error Logs</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-red-600 bg-red-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                    -8%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CONTENT AREA: Toolbar + Table -->
                <div class="bg-white border border-slate-100 shadow-sm rounded-2xl flex flex-col overflow-hidden">
                    
                    <!-- FILTER / SEARCH TOOLBAR -->
                    <div class="p-4 border-b border-slate-100 flex items-center justify-between gap-4 overflow-x-auto">
                        <div class="flex items-center gap-3 shrink-0">
                            
                            <!-- Search -->
                            <div class="relative shrink-0" style="width: 250px;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                <input type="text" id="searchInput" placeholder="Search by message, module, user, IP..." class="w-full h-9 pl-9 pr-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all text-slate-700 placeholder-slate-400">
                            </div>

                            <!-- Filters -->
                            <select id="filterLevel" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Log Level</option>
                                <option value="Success">Success</option>
                                <option value="Info">Info</option>
                                <option value="Warning">Warning</option>
                                <option value="Error">Error</option>
                            </select>

                            <select id="filterModule" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Module</option>
                                <option value="Authentication">Authentication</option>
                                <option value="User Management">User Management</option>
                                <option value="Payment">Payment</option>
                                <option value="API">API</option>
                                <option value="Consultation">Consultation</option>
                                <option value="Astrologer">Astrologer</option>
                                <option value="Server">Server</option>
                                <option value="System">System</option>
                            </select>
                            
                            <select id="filterUser" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All User</option>
                                <option value="Admin User">Admin User</option>
                                <option value="System">System</option>
                            </select>

                            <!-- Date Range -->
                            <div class="flex items-center gap-2 h-9 px-3 border border-slate-200 rounded-lg bg-white text-slate-600 text-sm cursor-pointer shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <span>1 Sep 2026 - 30 Sep 2026</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-slate-400 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 shrink-0">
                            <button class="h-9 px-4 flex items-center gap-1.5 text-sm font-semibold text-[#f97316] border border-orange-200 bg-white rounded-lg hover:bg-orange-50 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#f97316]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" /></svg>
                                Filters
                            </button>
                        </div>
                    </div>

                    <!-- SELECTION BAR (Hidden initially) -->
                    <div id="selectionBar" class="hidden bg-orange-50/80 border-b border-slate-100 px-5 py-2 items-center justify-between text-sm transition-all">
                        <span class="font-bold text-[#dd5c23]"><span id="selectedCountText">0</span> selected</span>
                        <button class="text-slate-500 hover:text-slate-700 font-medium text-xs" onclick="clearSelection()">Clear Selection</button>
                    </div>

                    <!-- TABLE -->
                    <div class="overflow-x-auto table-scroll w-full">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50 text-[11px] uppercase tracking-wider text-slate-500 font-extrabold">
                                    <th class="py-3.5 pl-8 pr-2 w-10">
                                        <input type="checkbox" id="selectAllCheckbox" class="w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer">
                                    </th>
                                    <th class="py-3.5 px-3">#</th>
                                    <th class="py-3.5 px-3">Date & Time</th>
                                    <th class="py-3.5 px-3">Level</th>
                                    <th class="py-3.5 px-3">Module</th>
                                    <th class="py-3.5 px-3">User</th>
                                    <th class="py-3.5 px-3">Message</th>
                                    <th class="py-3.5 px-3">IP Address</th>
                                    <th class="py-3.5 pl-3 pr-8 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody" class="text-[13px] font-medium text-slate-600">
                                <!-- Rendered via JS -->
                            </tbody>
                        </table>
                        
                        <!-- Empty State -->
                        <div id="emptyState" class="hidden flex-col items-center justify-center py-12 px-4 text-center">
                            <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4 text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-800">No logs found</h3>
                            <p class="text-sm text-slate-500 mt-1">Try adjusting your search or filters.</p>
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    <div id="paginationWrapper" class="p-4 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="text-sm font-medium text-slate-500" id="paginationText">
                            Showing 1 to 10 of 12,458 logs
                        </div>
                        <div class="flex items-center gap-1.5" id="paginationControls">
                            <!-- Rendered via JS -->
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Spacer for bottom -->
            <div class="h-8"></div>
        </main>
    </div>

    <!-- MODALS -->

    <!-- Details Modal -->
    <div id="detailsModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('detailsModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-[450px] p-6 overflow-hidden">
            <div class="flex justify-between items-start mb-5 border-b border-slate-100 pb-4">
                <div>
                    <h3 class="text-lg font-bold text-slate-800">Log Details</h3>
                    <p class="text-xs text-slate-500 mt-0.5 font-medium" id="modalId">ID: #LOG-12458</p>
                </div>
                <button class="text-slate-400 hover:text-slate-600 transition-colors" onclick="closeModal('detailsModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            
            <div class="flex flex-col gap-4">
                <div class="grid grid-cols-2 gap-y-4 gap-x-4 text-sm bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div>
                        <span class="block text-slate-400 text-[10px] font-bold uppercase mb-1">Date & Time</span>
                        <span class="font-bold text-slate-700" id="modalDateTime"></span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-[10px] font-bold uppercase mb-1">Level</span>
                        <span id="modalLevelBadge"></span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-[10px] font-bold uppercase mb-1">Module</span>
                        <span class="font-semibold text-slate-800" id="modalModule"></span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-[10px] font-bold uppercase mb-1">User</span>
                        <span class="font-semibold text-slate-800" id="modalUser"></span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-[10px] font-bold uppercase mb-1">IP Address</span>
                        <span class="font-mono text-slate-700" id="modalIp"></span>
                    </div>
                </div>
                
                <div>
                    <span class="block text-slate-400 text-xs font-bold uppercase mb-1.5 pl-1">Message</span>
                    <div class="p-3 bg-slate-50 border border-slate-100 rounded-lg text-sm text-slate-700 font-mono" style="word-break: break-all;">
                        <span id="modalMessage"></span>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 w-full mt-2 pt-4 border-t border-slate-100">
                    <button class="w-full py-2.5 rounded-lg bg-[#f97316] text-white font-bold text-sm shadow-md hover:bg-[#dd5c23] transition-colors" onclick="closeModal('detailsModal')">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // MOCK DATA GENERATION
        const hardcodedFirst10 = [
            { id: 1, date: "30 Sep 2026, 02:14 PM", level: "Success", module: "Authentication", user: "Admin User", message: "Admin logged in successfully", ip: "192.168.1.10" },
            { id: 2, date: "30 Sep 2026, 01:58 PM", level: "Info", module: "User Management", user: "Admin User", message: "User profile updated (ID: 2456)", ip: "192.168.1.12" },
            { id: 3, date: "30 Sep 2026, 01:32 PM", level: "Warning", module: "Payment", user: "System", message: "Payment verification pending (ID: 7890)", ip: "192.168.1.15" },
            { id: 4, date: "30 Sep 2026, 12:45 PM", level: "Error", module: "API", user: "System", message: "Failed to connect to payment gateway", ip: "192.168.1.18" },
            { id: 5, date: "30 Sep 2026, 11:28 AM", level: "Success", module: "Consultation", user: "Admin User", message: "Consultation completed (ID: 5567)", ip: "192.168.1.10" },
            { id: 6, date: "30 Sep 2026, 10:15 AM", level: "Info", module: "Astrologer", user: "Admin User", message: "Astrologer application approved (ID: 1123)", ip: "192.168.1.22" },
            { id: 7, date: "30 Sep 2026, 09:40 AM", level: "Warning", module: "Server", user: "System", message: "High memory usage detected (82%)", ip: "192.168.1.1" },
            { id: 8, date: "30 Sep 2026, 08:18 AM", level: "Success", module: "Payment", user: "Admin User", message: "Refund processed (ID: 3344)", ip: "192.168.1.14" },
            { id: 9, date: "30 Sep 2026, 07:55 AM", level: "Error", module: "Authentication", user: "System", message: "Invalid login attempt from 203.0.113.5", ip: "203.0.113.5" },
            { id: 10, date: "30 Sep 2026, 06:40 AM", level: "Info", module: "System", user: "System", message: "Daily backup completed successfully", ip: "192.168.1.1" }
        ];

        let allItems = [];
        let filteredItems = [];
        let selectedRowIds = new Set();
        
        // Generate 12458 logs
        for (let i = 1; i <= 12458; i++) {
            if (i <= 10) {
                allItems.push({...hardcodedFirst10[i-1], uid: i});
            } else {
                let base = hardcodedFirst10[(i-1) % 10];
                allItems.push({
                    uid: i,
                    date: base.date,
                    level: base.level,
                    module: base.module,
                    user: base.user,
                    message: base.message + (i > 10 ? ` (Log #${i})` : ''),
                    ip: base.ip
                });
            }
        }
        
        // State
        let currentPage = 1;
        let itemsPerPage = 10;

        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const filterLevel = document.getElementById('filterLevel');
        const filterModule = document.getElementById('filterModule');
        const filterUser = document.getElementById('filterUser');
        const paginationControls = document.getElementById('paginationControls');
        const paginationText = document.getElementById('paginationText');
        const emptyState = document.getElementById('emptyState');
        const paginationWrapper = document.getElementById('paginationWrapper');
        const selectAllCheckbox = document.getElementById('selectAllCheckbox');
        const selectionBar = document.getElementById('selectionBar');
        const selectedCountText = document.getElementById('selectedCountText');

        // Initialize
        function init() {
            // Set active sidebar item via JS
            const sidebarLinks = document.querySelectorAll('aside a');
            sidebarLinks.forEach(link => {
                link.classList.remove('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                link.classList.add('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                if(link.textContent.trim().includes('System Logs')) {
                    link.classList.add('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                    link.classList.remove('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                    const svg = link.querySelector('svg');
                    if(svg) svg.classList.add('text-[#dd5c23]');
                }
            });

            filteredItems = [...allItems];
            
            searchInput.addEventListener('input', debounce(applyFilters, 300));
            filterLevel.addEventListener('change', applyFilters);
            filterModule.addEventListener('change', applyFilters);
            filterUser.addEventListener('change', applyFilters);
            selectAllCheckbox.addEventListener('change', handleSelectAll);
            
            renderTableAndPagination();
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const level = filterLevel.value;
            const mod = filterModule.value;
            const user = filterUser.value;
            
            filteredItems = allItems.filter(item => {
                let matchQuery = true;
                if (query) {
                    matchQuery = item.message.toLowerCase().includes(query) || 
                                 item.module.toLowerCase().includes(query) ||
                                 item.user.toLowerCase().includes(query) ||
                                 item.ip.toLowerCase().includes(query);
                }
                let matchLevel = level === 'All' || item.level === level;
                let matchModule = mod === 'All' || item.module === mod;
                let matchUser = user === 'All' || item.user === user;
                
                return matchQuery && matchLevel && matchModule && matchUser;
            });
            
            currentPage = 1;
            selectedRowIds.clear();
            updateSelectionBar();
            renderTableAndPagination();
        }

        function getBadge(value) {
            let className = '';
            if(value === 'Success') className = 'badge-success';
            else if(value === 'Info') className = 'badge-info';
            else if(value === 'Warning') className = 'badge-warning';
            else if(value === 'Error') className = 'badge-error';
            return `<span class="badge ${className}">${value}</span>`;
        }

        function handleSelectAll(e) {
            if (e.target.checked) {
                const startIdx = (currentPage - 1) * itemsPerPage;
                const endIdx = Math.min(startIdx + itemsPerPage, filteredItems.length);
                const pageData = filteredItems.slice(startIdx, endIdx);
                pageData.forEach(i => selectedRowIds.add(i.uid));
            } else {
                selectedRowIds.clear();
            }
            updateSelectionBar();
            renderTableAndPagination();
        }

        function handleRowCheckbox(id, checked) {
            if (checked) {
                selectedRowIds.add(id);
            } else {
                selectedRowIds.delete(id);
                selectAllCheckbox.checked = false;
            }
            updateSelectionBar();
            renderTableAndPagination();
        }

        function clearSelection() {
            selectedRowIds.clear();
            selectAllCheckbox.checked = false;
            updateSelectionBar();
            renderTableAndPagination();
        }

        function updateSelectionBar() {
            const count = selectedRowIds.size;
            selectedCountText.innerText = count;
            
            if (count > 0) {
                selectionBar.classList.remove('hidden');
                selectionBar.classList.add('flex');
            } else {
                selectionBar.classList.add('hidden');
                selectionBar.classList.remove('flex');
            }
        }

        function renderTableAndPagination() {
            const total = filteredItems.length;
            
            if (total === 0) {
                tableBody.innerHTML = '';
                emptyState.classList.remove('hidden');
                emptyState.classList.add('flex');
                paginationWrapper.classList.add('hidden');
                selectAllCheckbox.checked = false;
                return;
            }
            
            emptyState.classList.add('hidden');
            emptyState.classList.remove('flex');
            paginationWrapper.classList.remove('hidden');
            
            const totalPages = Math.ceil(total / itemsPerPage);
            if (currentPage > totalPages) currentPage = totalPages;
            if (currentPage < 1) currentPage = 1;
            
            const startIdx = (currentPage - 1) * itemsPerPage;
            const endIdx = Math.min(startIdx + itemsPerPage, total);
            
            const pageData = filteredItems.slice(startIdx, endIdx);
            
            const allOnPageSelected = pageData.length > 0 && pageData.every(i => selectedRowIds.has(i.uid));
            selectAllCheckbox.checked = allOnPageSelected;
            
            // Render Rows
            tableBody.innerHTML = '';
            pageData.forEach((item, idx) => {
                const globalIndex = startIdx + idx + 1;
                const isSelected = selectedRowIds.has(item.uid);
                
                const tr = document.createElement('tr');
                tr.className = `border-b border-slate-50 transition-colors ${isSelected ? 'bg-orange-50/50' : 'hover:bg-slate-50'}`;
                
                tr.innerHTML = `
                    <td class="py-3.5 pl-8 pr-2">
                        <input type="checkbox" class="row-checkbox w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer" data-id="${item.uid}" ${isSelected ? 'checked' : ''}>
                    </td>
                    <td class="py-3.5 px-3 text-slate-400 font-bold">${globalIndex}</td>
                    <td class="py-3.5 px-3 text-slate-500 font-medium">${item.date}</td>
                    <td class="py-3.5 px-3">${getBadge(item.level)}</td>
                    <td class="py-3.5 px-3 font-semibold text-slate-700">${item.module}</td>
                    <td class="py-3.5 px-3 text-slate-600">${item.user}</td>
                    <td class="py-3.5 px-3 text-slate-600 max-w-xs truncate" title="${item.message}">${item.message}</td>
                    <td class="py-3.5 px-3 font-mono text-slate-500">${item.ip}</td>
                    <td class="py-3.5 pl-3 pr-8 text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors" onclick="openDetailsModal(${item.uid})" title="View Details">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(tr);
            });
            
            document.querySelectorAll('.row-checkbox').forEach(cb => {
                cb.addEventListener('change', (e) => {
                    handleRowCheckbox(parseInt(e.target.getAttribute('data-id')), e.target.checked);
                });
            });

            // Update Pagination Text
            paginationText.innerText = `Showing ${total === 0 ? 0 : startIdx + 1} to ${endIdx} of ${total.toLocaleString()} logs`;
            
            // Render Pagination Buttons
            renderPaginationControls(totalPages);
        }
        
        function renderPaginationControls(totalPages) {
            paginationControls.innerHTML = '';
            
            if (totalPages <= 1) return;
            
            // Prev Button
            const prevBtn = document.createElement('button');
            prevBtn.className = `w-8 h-8 flex items-center justify-center rounded-lg border ${currentPage === 1 ? 'border-slate-100 text-slate-300 cursor-not-allowed' : 'border-slate-200 text-slate-600 hover:bg-slate-50'}`;
            prevBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>';
            prevBtn.onclick = () => { if (currentPage > 1) { currentPage--; renderTableAndPagination(); } };
            paginationControls.appendChild(prevBtn);
            
            // Maximum 5 visible pages logic
            let maxVisible = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisible / 2));
            let endPage = startPage + maxVisible - 1;
            
            if (endPage > totalPages) {
                endPage = totalPages;
                startPage = Math.max(1, endPage - maxVisible + 1);
            }
            
            if (startPage > 1) {
                paginationControls.appendChild(createPageBtn(1));
                if (startPage > 2) paginationControls.appendChild(createEllipsis());
            }
            
            for (let i = startPage; i <= endPage; i++) {
                paginationControls.appendChild(createPageBtn(i));
            }
            
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) paginationControls.appendChild(createEllipsis());
                paginationControls.appendChild(createPageBtn(totalPages));
            }
            
            // Next Button
            const nextBtn = document.createElement('button');
            nextBtn.className = `w-8 h-8 flex items-center justify-center rounded-lg border ${currentPage === totalPages ? 'border-slate-100 text-slate-300 cursor-not-allowed' : 'border-slate-200 text-slate-600 hover:bg-slate-50'}`;
            nextBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>';
            nextBtn.onclick = () => { if (currentPage < totalPages) { currentPage++; renderTableAndPagination(); } };
            paginationControls.appendChild(nextBtn);
        }
        
        function createPageBtn(num) {
            const btn = document.createElement('button');
            const isActive = num === currentPage;
            btn.className = `w-8 h-8 flex items-center justify-center rounded-lg text-sm font-bold transition-colors ${isActive ? 'bg-[#f97316] text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100'}`;
            btn.innerText = num;
            btn.onclick = () => {
                currentPage = num;
                renderTableAndPagination();
            };
            return btn;
        }
        
        function createEllipsis() {
            const span = document.createElement('span');
            span.className = 'w-6 flex items-center justify-center text-slate-400 text-sm tracking-widest';
            span.innerText = '...';
            return span;
        }

        // Modals
        function openDetailsModal(id) {
            const item = allItems.find(a => a.uid === id);
            if(!item) return;
            
            document.getElementById('modalId').innerText = `ID: #LOG-${item.uid}`;
            document.getElementById('modalDateTime').innerText = item.date;
            document.getElementById('modalLevelBadge').innerHTML = getBadge(item.level);
            document.getElementById('modalModule').innerText = item.module;
            document.getElementById('modalUser').innerText = item.user;
            document.getElementById('modalIp').innerText = item.ip;
            document.getElementById('modalMessage').innerText = item.message;
            
            const el = document.getElementById('detailsModal');
            el.classList.remove('hidden', 'modal-close');
            el.classList.add('flex', 'modal-open');
        }

        function closeModal(id) {
            const el = document.getElementById(id);
            el.classList.remove('modal-open');
            el.classList.add('modal-close');
            setTimeout(() => {
                el.classList.add('hidden');
                el.classList.remove('flex', 'modal-close');
            }, 200);
        }

        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => { clearTimeout(timeout); func(...args); };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Init
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
