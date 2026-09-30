<?php
// Admin Screen: Deleted Users Management
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Users - AstroJyoti Admin</title>
    
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
            padding: 0.125rem 0.625rem;
            border-radius: 9999px;
            font-size: 0.6875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }
        .badge-female { background: #ffe4e6; color: #e11d48; }
        .badge-male { background: #e0f2fe; color: #0284c7; }
        
        .badge-reason-user { background: #dbeafe; color: #2563eb; } /* User Request */
        .badge-reason-violation { background: #fee2e2; color: #dc2626; } /* Violation */
        .badge-reason-inactive { background: #fef3c7; color: #d97706; } /* Inactive */
        .badge-reason-spam { background: #fee2e2; color: #ef4444; } /* Spam */
        
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
                    <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Deleted Users</h1>
                    <p class="text-sm text-slate-500 mt-1 font-medium">View and manage all deleted users. You can restore or permanently delete them.</p>
                </div>
                
                <!-- SUMMARY STATISTICS CARDS (4 Cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">2,323</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Deleted Users</div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-green-50 text-green-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">1,845</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Restored Users</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +12%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">478</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Permanently Deleted</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-red-600 bg-red-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7-7-7-7" /></svg>
                                    -8%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800">156</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Deleted This Month</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +18%
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
                            <div class="relative shrink-0" style="width: 280px;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                <input type="text" id="searchInput" placeholder="Search by name, email, phone..." class="w-full h-9 pl-9 pr-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all text-slate-700 placeholder-slate-400">
                            </div>

                            <!-- Filters -->
                            <select id="filterGender" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>

                            <select id="filterLanguage" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer">
                                <option value="All">All Language</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
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

                    <!-- BULK ACTION BAR -->
                    <div id="bulkActionBar" class="bg-slate-50 border-b border-slate-100 px-5 py-2.5 flex items-center gap-4 transition-all overflow-x-auto">
                        <div class="flex items-center gap-2 shrink-0">
                            <input type="checkbox" id="selectAllCheckbox" class="w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer">
                            <span class="text-sm font-semibold text-slate-600"><span id="selectedCountText">0</span> selected</span>
                        </div>
                        
                        <div class="h-4 w-px bg-slate-300 mx-2"></div>
                        
                        <div class="flex items-center gap-3 shrink-0">
                            <button id="bulkRestoreBtn" disabled class="h-8 px-3 flex items-center gap-1.5 text-xs font-bold text-slate-400 bg-white border border-slate-200 rounded-md transition-colors disabled:opacity-60" onclick="openBulkModal('restore')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                                Restore Selected
                            </button>
                            <button id="bulkDeleteBtn" disabled class="h-8 px-3 flex items-center gap-1.5 text-xs font-bold text-slate-400 bg-white border border-slate-200 rounded-md transition-colors disabled:opacity-60" onclick="openBulkModal('delete')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                Delete Permanently
                            </button>
                        </div>
                    </div>

                    <!-- DELETED USERS TABLE -->
                    <div class="overflow-x-auto table-scroll w-full">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50 text-[11px] uppercase tracking-wider text-slate-500 font-extrabold">
                                    <th class="py-3.5 pl-5 pr-2 w-10"></th>
                                    <th class="py-3.5 px-3">#</th>
                                    <th class="py-3.5 px-3">Name</th>
                                    <th class="py-3.5 px-3">Email</th>
                                    <th class="py-3.5 px-3">Phone</th>
                                    <th class="py-3.5 px-3">Gender</th>
                                    <th class="py-3.5 px-3">Deleted Date</th>
                                    <th class="py-3.5 px-3">Deleted By</th>
                                    <th class="py-3.5 px-3">Reason</th>
                                    <th class="py-3.5 pl-3 pr-5 text-right">Actions</th>
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
                            <h3 class="text-base font-bold text-slate-800">No deleted users found</h3>
                            <p class="text-sm text-slate-500 mt-1">Try adjusting your search or filters.</p>
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    <div id="paginationWrapper" class="p-4 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="text-sm font-medium text-slate-500" id="paginationText">
                            Showing 1 to 10 of 2,323 deleted users
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

    <!-- Restore Modal -->
    <div id="restoreModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('restoreModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-sm p-6 overflow-hidden">
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2" id="restoreModalTitle">Restore User?</h3>
                <p class="text-sm text-slate-500 mb-6" id="restoreModalText">Are you sure you want to restore this user?</p>
                <div class="flex items-center gap-3 w-full">
                    <button class="flex-1 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('restoreModal')">Cancel</button>
                    <button class="flex-1 py-2.5 rounded-lg bg-green-600 text-white font-bold text-sm shadow-md hover:bg-green-700 transition-colors" onclick="confirmRestore()">Restore</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Permanent Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('deleteModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-sm p-6 overflow-hidden">
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 bg-red-100 text-red-600 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-2" id="deleteModalTitle">Permanently Delete User?</h3>
                <p class="text-sm text-slate-500 mb-6" id="deleteModalText">This action cannot be undone. Are you sure you want to permanently delete this user?</p>
                <div class="flex items-center gap-3 w-full">
                    <button class="flex-1 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('deleteModal')">Cancel</button>
                    <button class="flex-1 py-2.5 rounded-lg bg-red-600 text-white font-bold text-sm shadow-md hover:bg-red-700 transition-colors" onclick="confirmDelete()">Delete Permanently</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // MOCK DATA GENERATION
        const hardcodedFirst10 = [
            { id: 1, name: "Riya Sharma", email: "riya@gmail.com", phone: "+91 98765 43210", gender: "Female", language: "English", deletedDate: "30 Sep 2026, 02:14 PM", deletedBy: "Admin User", reason: "User Request" },
            { id: 2, name: "Deepak Verma", email: "deepak@gmail.com", phone: "+91 87654 32109", gender: "Male", language: "Hindi", deletedDate: "29 Sep 2026, 11:32 AM", deletedBy: "Admin User", reason: "Violation" },
            { id: 3, name: "Kavita Singh", email: "kavita@gmail.com", phone: "+91 76543 21098", gender: "Female", language: "English", deletedDate: "28 Sep 2026, 05:20 PM", deletedBy: "System", reason: "Inactive" },
            { id: 4, name: "Suresh Kumar", email: "suresh@gmail.com", phone: "+91 65432 10987", gender: "Male", language: "Hindi", deletedDate: "27 Sep 2026, 09:45 AM", deletedBy: "Admin User", reason: "Spam" },
            { id: 5, name: "Anjali Patel", email: "anjali@gmail.com", phone: "+91 54321 09876", gender: "Female", language: "English", deletedDate: "26 Sep 2026, 04:18 PM", deletedBy: "Admin User", reason: "User Request" },
            { id: 6, name: "Manish Yadav", email: "manish@gmail.com", phone: "+91 98761 23456", gender: "Male", language: "Hindi", deletedDate: "25 Sep 2026, 01:12 PM", deletedBy: "System", reason: "Inactive" },
            { id: 7, name: "Pooja Mishra", email: "pooja@gmail.com", phone: "+91 91234 56789", gender: "Female", language: "English", deletedDate: "24 Sep 2026, 10:30 AM", deletedBy: "Admin User", reason: "Violation" },
            { id: 8, name: "Rahul Jain", email: "rahuljain@gmail.com", phone: "+91 99887 76655", gender: "Male", language: "Hindi", deletedDate: "23 Sep 2026, 06:40 PM", deletedBy: "Admin User", reason: "Spam" },
            { id: 9, name: "Neha Gupta", email: "neha123@gmail.com", phone: "+91 96543 22110", gender: "Female", language: "English", deletedDate: "22 Sep 2026, 03:15 PM", deletedBy: "System", reason: "Inactive" },
            { id: 10, name: "Arjun Malhotra", email: "arjun@gmail.com", phone: "+91 90123 44321", gender: "Male", language: "Hindi", deletedDate: "21 Sep 2026, 12:08 PM", deletedBy: "Admin User", reason: "User Request" }
        ];

        let allUsers = [];
        let filteredUsers = [];
        
        // Generate 2323 users
        for (let i = 1; i <= 2323; i++) {
            if (i <= 10) {
                allUsers.push(hardcodedFirst10[i-1]);
            } else {
                let base = hardcodedFirst10[(i-1) % 10];
                allUsers.push({
                    id: i,
                    name: base.name + (i > 10 ? ` ${i}` : ''),
                    email: `user${i}@example.com`,
                    phone: `+91 9${String(i).padStart(9, '0')}`,
                    gender: base.gender,
                    language: base.language,
                    deletedDate: base.deletedDate,
                    deletedBy: base.deletedBy,
                    reason: base.reason
                });
            }
        }
        
        // State
        let currentPage = 1;
        let itemsPerPage = 10;
        let selectedRowIds = new Set();
        
        // Modal State
        let actionTargetId = null; 
        let isBulkAction = false;

        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const filterGender = document.getElementById('filterGender');
        const filterLanguage = document.getElementById('filterLanguage');
        const paginationControls = document.getElementById('paginationControls');
        const paginationText = document.getElementById('paginationText');
        const emptyState = document.getElementById('emptyState');
        const selectAllCheckbox = document.getElementById('selectAllCheckbox');
        const selectedCountText = document.getElementById('selectedCountText');
        const paginationWrapper = document.getElementById('paginationWrapper');
        
        const bulkRestoreBtn = document.getElementById('bulkRestoreBtn');
        const bulkDeleteBtn = document.getElementById('bulkDeleteBtn');

        // Initialize
        function init() {
            // Set active sidebar item via JS for pure frontend mock
            const sidebarLinks = document.querySelectorAll('aside a');
            sidebarLinks.forEach(link => {
                link.classList.remove('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                link.classList.add('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                if(link.textContent.trim().includes('Deleted Users')) {
                    link.classList.add('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                    link.classList.remove('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                    const svg = link.querySelector('svg');
                    if(svg) svg.classList.add('text-[#dd5c23]');
                }
            });

            filteredUsers = [...allUsers];
            
            searchInput.addEventListener('input', debounce(applyFilters, 300));
            filterGender.addEventListener('change', applyFilters);
            filterLanguage.addEventListener('change', applyFilters);
            selectAllCheckbox.addEventListener('change', handleSelectAll);
            
            renderTableAndPagination();
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const gender = filterGender.value;
            const lang = filterLanguage.value;
            
            filteredUsers = allUsers.filter(u => {
                let matchQuery = true;
                if (query) {
                    matchQuery = u.name.toLowerCase().includes(query) || 
                                 u.email.toLowerCase().includes(query) || 
                                 u.phone.includes(query);
                }
                let matchGender = gender === 'All' || u.gender === gender;
                let matchLang = lang === 'All' || u.language === lang;
                
                return matchQuery && matchGender && matchLang;
            });
            
            currentPage = 1;
            selectedRowIds.clear();
            updateBulkActionBar();
            renderTableAndPagination();
        }

        function handleSelectAll(e) {
            if (e.target.checked) {
                const startIdx = (currentPage - 1) * itemsPerPage;
                const endIdx = Math.min(startIdx + itemsPerPage, filteredUsers.length);
                const pageData = filteredUsers.slice(startIdx, endIdx);
                pageData.forEach(u => selectedRowIds.add(u.id));
            } else {
                selectedRowIds.clear();
            }
            updateBulkActionBar();
            renderTableAndPagination();
        }

        function handleRowCheckbox(id, checked) {
            if (checked) {
                selectedRowIds.add(id);
            } else {
                selectedRowIds.delete(id);
                selectAllCheckbox.checked = false;
            }
            updateBulkActionBar();
            renderTableAndPagination();
        }

        function updateBulkActionBar() {
            const count = selectedRowIds.size;
            selectedCountText.innerText = count;
            
            if (count > 0) {
                bulkRestoreBtn.disabled = false;
                bulkDeleteBtn.disabled = false;
                bulkRestoreBtn.classList.remove('text-slate-400');
                bulkRestoreBtn.classList.add('text-green-600', 'border-green-200', 'hover:bg-green-50');
                bulkDeleteBtn.classList.remove('text-slate-400');
                bulkDeleteBtn.classList.add('text-red-600', 'border-red-200', 'hover:bg-red-50');
            } else {
                bulkRestoreBtn.disabled = true;
                bulkDeleteBtn.disabled = true;
                bulkRestoreBtn.classList.add('text-slate-400');
                bulkRestoreBtn.classList.remove('text-green-600', 'border-green-200', 'hover:bg-green-50');
                bulkDeleteBtn.classList.add('text-slate-400');
                bulkDeleteBtn.classList.remove('text-red-600', 'border-red-200', 'hover:bg-red-50');
            }
        }

        function getReasonBadgeClass(reason) {
            switch(reason) {
                case 'User Request': return 'badge-reason-user';
                case 'Violation': return 'badge-reason-violation';
                case 'Inactive': return 'badge-reason-inactive';
                case 'Spam': return 'badge-reason-spam';
                default: return 'bg-slate-100 text-slate-600';
            }
        }

        function renderTableAndPagination() {
            const total = filteredUsers.length;
            
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
            
            const pageData = filteredUsers.slice(startIdx, endIdx);
            
            // Check if all current page items are selected
            const allOnPageSelected = pageData.length > 0 && pageData.every(u => selectedRowIds.has(u.id));
            selectAllCheckbox.checked = allOnPageSelected;
            
            // Render Rows
            tableBody.innerHTML = '';
            pageData.forEach((u, idx) => {
                const globalIndex = startIdx + idx + 1;
                const isSelected = selectedRowIds.has(u.id);
                
                const tr = document.createElement('tr');
                tr.className = `border-b border-slate-50 transition-colors ${isSelected ? 'bg-orange-50/50' : 'hover:bg-slate-50'}`;
                
                let genderBadge = `<span class="badge ${u.gender === 'Female' ? 'badge-female' : (u.gender === 'Male' ? 'badge-male' : 'bg-slate-100 text-slate-600')}">${u.gender}</span>`;
                let reasonBadge = `<span class="badge ${getReasonBadgeClass(u.reason)}">${u.reason}</span>`;
                
                // Get initials or placeholder image
                let avatarUrl = u.gender === 'Female' ? 'https://i.pravatar.cc/150?u=fem'+u.id : 'https://i.pravatar.cc/150?u=male'+u.id;
                
                tr.innerHTML = `
                    <td class="py-3.5 pl-8 pr-2">
                        <input type="checkbox" class="row-checkbox w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer" data-id="${u.id}" ${isSelected ? 'checked' : ''}>
                    </td>
                    <td class="py-3.5 px-3 text-slate-400 font-bold">${globalIndex}</td>
                    <td class="py-3.5 px-3">
                        <div class="flex items-center gap-3">
                            <img src="${avatarUrl}" class="w-8 h-8 rounded-full object-cover border border-slate-200" alt="">
                            <span class="font-bold text-slate-800">${u.name}</span>
                        </div>
                    </td>
                    <td class="py-3.5 px-3">${u.email}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.phone}</td>
                    <td class="py-3.5 px-3">${genderBadge}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.deletedDate}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.deletedBy}</td>
                    <td class="py-3.5 px-3">${reasonBadge}</td>
                    <td class="py-3.5 pl-3 pr-8 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-green-500 hover:bg-green-50 transition-colors" onclick="openSingleModal('restore', ${u.id})" title="Restore">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-red-400 hover:bg-red-50 hover:text-red-600 transition-colors" onclick="openSingleModal('delete', ${u.id})" title="Delete Permanently">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(tr);
            });
            
            // Add listeners to checkboxes
            document.querySelectorAll('.row-checkbox').forEach(cb => {
                cb.addEventListener('change', (e) => {
                    handleRowCheckbox(parseInt(e.target.getAttribute('data-id')), e.target.checked);
                });
            });

            // Update Pagination Text
            paginationText.innerText = `Showing ${total === 0 ? 0 : startIdx + 1} to ${endIdx} of ${total.toLocaleString()} deleted users`;
            
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
            
            // First page if not in range
            if (startPage > 1) {
                paginationControls.appendChild(createPageBtn(1));
                if (startPage > 2) {
                    paginationControls.appendChild(createEllipsis());
                }
            }
            
            for (let i = startPage; i <= endPage; i++) {
                paginationControls.appendChild(createPageBtn(i));
            }
            
            // Last page if not in range
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationControls.appendChild(createEllipsis());
                }
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
        function openSingleModal(type, id) {
            isBulkAction = false;
            actionTargetId = id;
            if (type === 'restore') {
                document.getElementById('restoreModalTitle').innerText = 'Restore User?';
                document.getElementById('restoreModalText').innerText = 'Are you sure you want to restore this user?';
                const el = document.getElementById('restoreModal');
                el.classList.remove('hidden', 'modal-close');
                el.classList.add('flex', 'modal-open');
            } else {
                document.getElementById('deleteModalTitle').innerText = 'Permanently Delete User?';
                document.getElementById('deleteModalText').innerText = 'This action cannot be undone. Are you sure you want to permanently delete this user?';
                const el = document.getElementById('deleteModal');
                el.classList.remove('hidden', 'modal-close');
                el.classList.add('flex', 'modal-open');
            }
        }
        
        function openBulkModal(type) {
            isBulkAction = true;
            const count = selectedRowIds.size;
            if (type === 'restore') {
                document.getElementById('restoreModalTitle').innerText = 'Restore Selected Users?';
                document.getElementById('restoreModalText').innerText = `Are you sure you want to restore ${count} selected users?`;
                const el = document.getElementById('restoreModal');
                el.classList.remove('hidden', 'modal-close');
                el.classList.add('flex', 'modal-open');
            } else {
                document.getElementById('deleteModalTitle').innerText = 'Permanently Delete Selected?';
                document.getElementById('deleteModalText').innerText = `This action cannot be undone. Are you sure you want to permanently delete ${count} selected users?`;
                const el = document.getElementById('deleteModal');
                el.classList.remove('hidden', 'modal-close');
                el.classList.add('flex', 'modal-open');
            }
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

        function confirmRestore() {
            closeModal('restoreModal');
            if (isBulkAction) {
                allUsers = allUsers.filter(u => !selectedRowIds.has(u.id));
                selectedRowIds.clear();
            } else {
                allUsers = allUsers.filter(u => u.id !== actionTargetId);
                selectedRowIds.delete(actionTargetId);
            }
            applyFilters();
        }

        function confirmDelete() {
            closeModal('deleteModal');
            if (isBulkAction) {
                allUsers = allUsers.filter(u => !selectedRowIds.has(u.id));
                selectedRowIds.clear();
            } else {
                allUsers = allUsers.filter(u => u.id !== actionTargetId);
                selectedRowIds.delete(actionTargetId);
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
