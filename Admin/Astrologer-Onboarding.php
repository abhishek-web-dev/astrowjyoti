<?php
// Admin Screen: Astrologer Onboarding
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrologer Onboarding - AstroJyoti Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (via CDN for local dev) -->
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
        
        /* Custom Scrollbar for table */
        .table-scroll::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        .table-scroll::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }
        .table-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.625rem;
            border-radius: 9999px;
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: 0.025em;
        }
        .badge-approved { background: #dcfce7; color: #166534; }
        .badge-review { background: #fef9c3; color: #a16207; }
        .badge-rejected { background: #fee2e2; color: #991b1b; }
        
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
                    <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Astrologer Onboarding</h1>
                    <p class="text-sm text-slate-500 mt-1 font-medium">Manage astrologer applications and onboarding process.</p>
                </div>
                
                <!-- SUMMARY STATISTICS CARDS (4 Cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-orange-50 text-[#dd5c23] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">128</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Applications</div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-green-50 text-green-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">72</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Approved Onboarded</div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-yellow-50 text-yellow-600 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">38</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Under Review</div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">18</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Rejected Applications</div>
                        </div>
                    </div>
                </div>
                
                <!-- CONTENT AREA: Toolbar + Table -->
                <div class="bg-white border border-slate-100 shadow-sm rounded-2xl flex flex-col overflow-hidden">
                    
                    <!-- FILTER / SEARCH TOOLBAR -->
                    <div class="p-4 border-b border-slate-100 flex items-center justify-between gap-4 overflow-x-auto">
                        <div class="flex items-center gap-3 shrink-0">
                            
                            <!-- Search -->
                            <div class="relative shrink-0" style="width: 280px;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                <input type="text" id="searchInput" placeholder="Search by name, email, phone..." class="w-full h-9 pl-9 pr-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all text-slate-700 placeholder-slate-400">
                            </div>

                            <!-- Filters -->
                            <select id="filterStatus" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Status</option>
                                <option value="Approved">Approved</option>
                                <option value="Under Review">Under Review</option>
                                <option value="Rejected">Rejected</option>
                            </select>

                            <select id="filterSpecialization" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Specialization</option>
                                <option value="Vedic Astrology">Vedic Astrology</option>
                                <option value="Numerology">Numerology</option>
                                <option value="Tarot Reading">Tarot Reading</option>
                                <option value="Vastu Shastra">Vastu Shastra</option>
                                <option value="Kundli Analysis">Kundli Analysis</option>
                                <option value="Horoscope">Horoscope</option>
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

                    <!-- APPLICATIONS TABLE -->
                    <div class="overflow-x-auto table-scroll w-full">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50 text-[11px] uppercase tracking-wider text-slate-500 font-extrabold">
                                    <th class="py-3.5 pl-8 pr-2 w-10">
                                        <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer" disabled>
                                    </th>
                                    <th class="py-3.5 px-3">#</th>
                                    <th class="py-3.5 px-3">Name</th>
                                    <th class="py-3.5 px-3">Email</th>
                                    <th class="py-3.5 px-3">Phone</th>
                                    <th class="py-3.5 px-3">Specialization</th>
                                    <th class="py-3.5 px-3">Application Date</th>
                                    <th class="py-3.5 px-3">Status</th>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-800">No applications found</h3>
                            <p class="text-sm text-slate-500 mt-1">Try adjusting your search or filters.</p>
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    <div id="paginationWrapper" class="p-4 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="text-sm font-medium text-slate-500" id="paginationText">
                            Showing 1 to 10 of 128 applications
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

    <!-- Details/Edit Modal -->
    <div id="detailsModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('detailsModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-md p-6 overflow-hidden">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-lg font-bold text-slate-800">Application Details</h3>
                <button class="text-slate-400 hover:text-slate-600 transition-colors" onclick="closeModal('detailsModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                    <img id="modalImg" src="" class="w-16 h-16 rounded-full object-cover border border-slate-200">
                    <div>
                        <h4 class="font-bold text-slate-800 text-base" id="modalName">Name</h4>
                        <p class="text-sm text-slate-500" id="modalEmail">Email</p>
                        <p class="text-sm text-slate-500" id="modalPhone">Phone</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-y-4 gap-x-4 text-sm">
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Specialization</span>
                        <span class="font-bold text-slate-700" id="modalSpec">Vedic</span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Experience</span>
                        <span class="font-bold text-slate-700">8 Years</span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Languages</span>
                        <span class="font-bold text-slate-700">English, Hindi</span>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Status</span>
                        <span id="modalStatusBadge"></span>
                    </div>
                    <div class="col-span-2">
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Short Bio</span>
                        <p class="font-medium text-slate-600 text-[13px] leading-relaxed bg-slate-50 p-3 rounded-lg border border-slate-100">I am an experienced astrologer providing accurate readings and guidance for over 8 years. I specialize in Vedic astrology and Vastu Shastra.</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 w-full mt-4 pt-4 border-t border-slate-100">
                    <button class="flex-1 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('detailsModal')">Close</button>
                    <button class="flex-1 py-2.5 rounded-lg bg-green-600 text-white font-bold text-sm shadow-md hover:bg-green-700 transition-colors" onclick="handleAction('approve')">Approve</button>
                    <button class="flex-1 py-2.5 rounded-lg bg-red-600 text-white font-bold text-sm shadow-md hover:bg-red-700 transition-colors" onclick="handleAction('reject')">Reject</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('deleteModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-sm p-6 overflow-hidden">
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 bg-red-100 text-red-600 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Delete Application?</h3>
                <p class="text-sm text-slate-500 mb-6">Are you sure you want to delete this astrologer application? This action cannot be undone.</p>
                <div class="flex items-center gap-3 w-full">
                    <button class="flex-1 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('deleteModal')">Cancel</button>
                    <button class="flex-1 py-2.5 rounded-lg bg-red-600 text-white font-bold text-sm shadow-md hover:bg-red-700 transition-colors" onclick="handleAction('delete')">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // MOCK DATA GENERATION
        const hardcodedFirst10 = [
            { id: 1, name: "Pandit Rajesh Sharma", email: "rajesh.sharma@gmail.com", phone: "+91 98765 43210", spec: "Vedic Astrology", date: "30 Sep 2026", status: "Approved" },
            { id: 2, name: "Dr. Neha Tripathi", email: "neha.tripathi@gmail.com", phone: "+91 87654 32109", spec: "Numerology", date: "29 Sep 2026", status: "Under Review" },
            { id: 3, name: "Acharya Vivek Gupta", email: "vivek.gupta@gmail.com", phone: "+91 76543 21098", spec: "Tarot Reading", date: "29 Sep 2026", status: "Approved" },
            { id: 4, name: "Sushma Tiwari", email: "sushma.tiwari@gmail.com", phone: "+91 65432 10987", spec: "Vastu Shastra", date: "28 Sep 2026", status: "Rejected" },
            { id: 5, name: "Prakash Singh", email: "prakash.singh@gmail.com", phone: "+91 54321 09876", spec: "Vedic Astrology", date: "28 Sep 2026", status: "Under Review" },
            { id: 6, name: "Meera Joshi", email: "meera.joshi@gmail.com", phone: "+91 98761 23456", spec: "Kundli Analysis", date: "27 Sep 2026", status: "Approved" },
            { id: 7, name: "Arun Pandey", email: "arun.pandey@gmail.com", phone: "+91 91234 56789", spec: "Horoscope", date: "27 Sep 2026", status: "Under Review" },
            { id: 8, name: "Kavita Verma", email: "kavita.verma@gmail.com", phone: "+91 99887 76655", spec: "Numerology", date: "26 Sep 2026", status: "Approved" },
            { id: 9, name: "Devansh Patel", email: "devansh.patel@gmail.com", phone: "+91 96543 22110", spec: "Tarot Reading", date: "26 Sep 2026", status: "Rejected" },
            { id: 10, name: "Pooja Agarwal", email: "pooja.agarwal@gmail.com", phone: "+91 90123 44321", spec: "Vastu Shastra", date: "25 Sep 2026", status: "Under Review" }
        ];

        let allApps = [];
        let filteredApps = [];
        
        // Generate 128 apps
        for (let i = 1; i <= 128; i++) {
            if (i <= 10) {
                allApps.push({...hardcodedFirst10[i-1], uid: i});
            } else {
                let base = hardcodedFirst10[(i-1) % 10];
                allApps.push({
                    uid: i,
                    name: base.name + (i > 10 ? ` ${i}` : ''),
                    email: `astro${i}@example.com`,
                    phone: `+91 9${String(i).padStart(9, '0')}`,
                    spec: base.spec,
                    date: base.date,
                    status: base.status
                });
            }
        }
        
        // State
        let currentPage = 1;
        let itemsPerPage = 10;
        let activeActionId = null;

        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const filterStatus = document.getElementById('filterStatus');
        const filterSpecialization = document.getElementById('filterSpecialization');
        const paginationControls = document.getElementById('paginationControls');
        const paginationText = document.getElementById('paginationText');
        const emptyState = document.getElementById('emptyState');
        const paginationWrapper = document.getElementById('paginationWrapper');

        // Initialize
        function init() {
            // Set active sidebar item via JS
            const sidebarLinks = document.querySelectorAll('aside a');
            sidebarLinks.forEach(link => {
                link.classList.remove('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                link.classList.add('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                if(link.textContent.trim().includes('Astrologer Onboarding')) {
                    link.classList.add('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                    link.classList.remove('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                    const svg = link.querySelector('svg');
                    if(svg) svg.classList.add('text-[#dd5c23]');
                }
            });

            filteredApps = [...allApps];
            
            searchInput.addEventListener('input', debounce(applyFilters, 300));
            filterStatus.addEventListener('change', applyFilters);
            filterSpecialization.addEventListener('change', applyFilters);
            
            renderTableAndPagination();
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const status = filterStatus.value;
            const spec = filterSpecialization.value;
            
            filteredApps = allApps.filter(a => {
                let matchQuery = true;
                if (query) {
                    matchQuery = a.name.toLowerCase().includes(query) || 
                                 a.email.toLowerCase().includes(query) || 
                                 a.phone.includes(query);
                }
                let matchStatus = status === 'All' || a.status === status;
                let matchSpec = spec === 'All' || a.spec === spec;
                
                return matchQuery && matchStatus && matchSpec;
            });
            
            currentPage = 1;
            renderTableAndPagination();
        }

        function getStatusBadge(status) {
            switch(status) {
                case 'Approved': return `<span class="badge badge-approved">Approved</span>`;
                case 'Under Review': return `<span class="badge badge-review">Under Review</span>`;
                case 'Rejected': return `<span class="badge badge-rejected">Rejected</span>`;
                default: return `<span class="badge bg-slate-100 text-slate-600">${status}</span>`;
            }
        }

        function renderTableAndPagination() {
            const total = filteredApps.length;
            
            if (total === 0) {
                tableBody.innerHTML = '';
                emptyState.classList.remove('hidden');
                emptyState.classList.add('flex');
                paginationWrapper.classList.add('hidden');
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
            
            const pageData = filteredApps.slice(startIdx, endIdx);
            
            // Render Rows
            tableBody.innerHTML = '';
            pageData.forEach((a, idx) => {
                const globalIndex = startIdx + idx + 1;
                
                const tr = document.createElement('tr');
                tr.className = `border-b border-slate-50 transition-colors hover:bg-slate-50`;
                
                let avatarUrl = `https://i.pravatar.cc/150?u=astro${a.uid}`;
                
                tr.innerHTML = `
                    <td class="py-3.5 pl-8 pr-2">
                        <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-slate-300 cursor-not-allowed" disabled>
                    </td>
                    <td class="py-3.5 px-3 text-slate-400 font-bold">${globalIndex}</td>
                    <td class="py-3.5 px-3">
                        <div class="flex items-center gap-3">
                            <img src="${avatarUrl}" class="w-8 h-8 rounded-full object-cover border border-slate-200" alt="">
                            <span class="font-bold text-slate-800">${a.name}</span>
                        </div>
                    </td>
                    <td class="py-3.5 px-3">${a.email}</td>
                    <td class="py-3.5 px-3 text-slate-500">${a.phone}</td>
                    <td class="py-3.5 px-3 text-slate-600 font-medium">${a.spec}</td>
                    <td class="py-3.5 px-3 text-slate-500">${a.date}</td>
                    <td class="py-3.5 px-3">${getStatusBadge(a.status)}</td>
                    <td class="py-3.5 pl-3 pr-8 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors" onclick="openDetailsModal(${a.uid})" title="View Details">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-colors" onclick="openDetailsModal(${a.uid})" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:bg-red-50 hover:text-red-600 transition-colors" onclick="openDeleteModal(${a.uid})" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(tr);
            });
            
            // Update Pagination Text
            paginationText.innerText = `Showing ${total === 0 ? 0 : startIdx + 1} to ${endIdx} of ${total.toLocaleString()} applications`;
            
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
            activeActionId = id;
            const app = allApps.find(a => a.uid === id);
            if(!app) return;
            
            document.getElementById('modalImg').src = `https://i.pravatar.cc/150?u=astro${app.uid}`;
            document.getElementById('modalName').innerText = app.name;
            document.getElementById('modalEmail').innerText = app.email;
            document.getElementById('modalPhone').innerText = app.phone;
            document.getElementById('modalSpec').innerText = app.spec;
            document.getElementById('modalStatusBadge').innerHTML = getStatusBadge(app.status);
            
            const el = document.getElementById('detailsModal');
            el.classList.remove('hidden', 'modal-close');
            el.classList.add('flex', 'modal-open');
        }
        
        function openDeleteModal(id) {
            activeActionId = id;
            const el = document.getElementById('deleteModal');
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

        function handleAction(type) {
            if (type === 'delete') {
                closeModal('deleteModal');
                allApps = allApps.filter(a => a.uid !== activeActionId);
            } else if (type === 'approve' || type === 'reject') {
                closeModal('detailsModal');
                const app = allApps.find(a => a.uid === activeActionId);
                if (app) {
                    app.status = type === 'approve' ? 'Approved' : 'Rejected';
                }
            }
            applyFilters();
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
