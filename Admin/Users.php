<?php
// Admin Screen: Users Management
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - AstroJyoti Admin</title>
    
    <!-- Tailwind CSS (via Vite) -->
    <link rel="stylesheet" href="/src/style.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script type="module" src="/src/main.js"></script>
    
    <style>
        body { margin: 0; padding: 0; background-color: #f8fafc; }
        .font-sans-custom { font-family: 'Inter', sans-serif; }
        
        .main-scroll::-webkit-scrollbar { width: 8px; height: 8px; }
        .main-scroll::-webkit-scrollbar-track { background: #f1f5f9; }
        .main-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .main-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        .stat-icon { width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        
        /* Table styles */
        .table-scroll::-webkit-scrollbar { height: 8px; }
        .table-scroll::-webkit-scrollbar-track { background: #f8fafc; }
        .table-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        
        .badge { padding: 0.25rem 0.6rem; border-radius: 9999px; font-size: 0.65rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.025em; }
        .badge-female { background-color: #fee2e2; color: #ef4444; }
        .badge-male { background-color: #e0e7ff; color: #3b82f6; }
        .badge-english { background-color: #e0f2fe; color: #0284c7; }
        .badge-hindi { background-color: #fef3c7; color: #d97706; }
        .badge-active { background-color: #dcfce3; color: #16a34a; }
        .badge-inactive { background-color: #fee2e2; color: #ef4444; }
        
        .pagination-btn { width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; border-radius: 6px; font-size: 13px; font-weight: 600; color: #475569; background: white; border: 1px solid #e2e8f0; transition: all 0.2s; }
        .pagination-btn:hover:not(:disabled) { background: #f1f5f9; }
        .pagination-btn.active { background: #f97316; color: white; border-color: #f97316; }
        .pagination-btn:disabled { opacity: 0.5; cursor: not-allowed; }
        .pagination-ellipsis { width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; font-size: 13px; font-weight: 600; color: #94a3b8; }
        
        /* Modals */
        .modal-overlay { background-color: rgba(15, 23, 42, 0.4); backdrop-filter: blur(2px); }
    </style>
</head>
<body class="font-sans-custom overflow-hidden text-slate-800">
    
    <div class="flex h-screen w-full overflow-hidden">
        
        <!-- SIDEBAR COMPONENT -->
        <?php include __DIR__ . '/Components/AdminSidebar.php'; ?>
        
        <!-- MAIN CONTENT AREA -->
        <main class="flex-1 flex flex-col h-screen overflow-hidden relative bg-[#f8fafc]">
            
            <!-- HEADER COMPONENT -->
            <?php include __DIR__ . '/Components/AdminHeader.php'; ?>
            
            <!-- SCROLLABLE PAGE CONTENT -->
            <div class="flex-1 overflow-y-auto p-8 main-scroll" id="main-content-area">
                
                <!-- Page Title Row -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-slate-800 mb-1 tracking-tight">Users</h1>
                        <p class="text-slate-500 font-medium text-sm">Manage all registered users on the AstroJyoti platform.</p>
                    </div>
                    <a href="/Admin/Add-User" class="flex items-center gap-2 text-white rounded-lg px-5 py-2.5 text-sm font-bold shadow-md transition-colors hover:bg-[#ea580c]" style="background-color: #f97316;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                        Add User
                    </a>
                </div>
                
                <!-- SUMMARY STATISTICS -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
                    
                    <!-- Stat 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="stat-icon bg-orange-50 text-[#f97316]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1">12,568</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Users</div>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="text-[11px] font-bold text-green-500 flex items-center mb-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +12%</span>
                            <span class="text-[10px] font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="stat-icon bg-emerald-50 text-emerald-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1">10,245</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Active Users</div>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="text-[11px] font-bold text-green-500 flex items-center mb-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +8%</span>
                            <span class="text-[10px] font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="stat-icon bg-red-50 text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" /></svg>
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1">1,856</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Inactive Users</div>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="text-[11px] font-bold text-red-500 flex items-center mb-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg> -5%</span>
                            <span class="text-[10px] font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="stat-icon bg-purple-50 text-purple-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1">324</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">New Users <span class="text-[9px] lowercase font-medium text-slate-400">(This Month)</span></div>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="text-[11px] font-bold text-green-500 flex items-center mb-0.5"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +18%</span>
                            <span class="text-[10px] font-medium text-slate-400">from last month</span>
                        </div>
                    </div>
                </div>

                <!-- CONTENT AREA: Toolbar + Table -->
                <div class="bg-white border border-slate-100 shadow-sm rounded-2xl flex flex-col">
                    
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
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Blocked">Blocked</option>
                            </select>


                            <!-- Date Range -->
                            <div class="flex items-center gap-2 h-9 px-3 border border-slate-200 rounded-lg bg-white text-slate-600 text-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <span>1 Sep 2026 - 30 Sep 2026</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-slate-400 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 shrink-0">
                            <button class="h-9 px-4 flex items-center gap-1.5 text-sm font-semibold text-[#f97316] border border-orange-200 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                                Export
                            </button>
                            <button class="h-9 px-4 flex items-center gap-1.5 text-sm font-semibold text-slate-600 border border-slate-200 bg-white rounded-lg hover:bg-slate-50 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" /></svg>
                                Filters
                            </button>
                        </div>
                    </div>

                    <!-- BULK ACTION BAR (Hidden by default) -->
                    <div id="bulkActionBar" class="hidden bg-orange-50 border-b border-orange-100 px-5 py-2.5 flex items-center justify-between transition-all">
                        <div class="text-sm font-bold text-slate-700">
                            <span id="selectedCountText" class="text-[#f97316]">0</span> users selected
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="text-xs font-bold text-green-700 bg-green-100 border border-green-200 rounded-md px-3 py-1.5 hover:bg-green-200">Activate</button>
                            <button class="text-xs font-bold text-slate-700 bg-slate-200 border border-slate-300 rounded-md px-3 py-1.5 hover:bg-slate-300">Deactivate</button>
                            <button class="text-xs font-bold text-red-600 bg-red-100 border border-red-200 rounded-md px-3 py-1.5 hover:bg-red-200" onclick="openModal('deleteModal')">Delete</button>
                        </div>
                    </div>

                    <!-- USERS TABLE -->
                    <div class="overflow-x-auto table-scroll w-full">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50/50 text-[11px] uppercase tracking-wider text-slate-500 font-extrabold">
                                    <th class="py-3.5 pl-8 pr-2 w-10">
                                        <input type="checkbox" id="selectAllCheckbox" class="w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer">
                                    </th>
                                    <th class="py-3.5 px-3">#</th>
                                    <th class="py-3.5 px-3">Name</th>
                                    <th class="py-3.5 px-3">Email</th>
                                    <th class="py-3.5 px-3">Phone</th>
                                    <th class="py-3.5 px-3">Gender</th>
                                    <th class="py-3.5 px-3">DOB</th>
                                    <th class="py-3.5 px-3">Language</th>
                                    <th class="py-3.5 px-3">Status</th>
                                    <th class="py-3.5 px-3">Joined Date</th>
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
                            <h3 class="text-sm font-bold text-slate-800 mb-1">No users found</h3>
                            <p class="text-xs text-slate-500">Try adjusting your search or filters to find what you're looking for.</p>
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 bg-white rounded-b-2xl" id="paginationWrapper">
                        <div class="text-[12px] font-medium text-slate-500" id="paginationText">
                            Showing 1 to 10 of 12,568 users
                        </div>
                        <div class="flex items-center gap-1.5" id="paginationControls">
                            <!-- Rendered via JS -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>

    <!-- MODALS -->

    <!-- View User Modal -->
    <div id="viewModal" class="fixed inset-0 z-50 flex items-center justify-center modal-overlay hidden opacity-0 transition-opacity">
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 w-full max-w-md mx-4 overflow-hidden transform scale-95 transition-transform" id="viewModalContent">
            <div class="flex items-center justify-between p-5 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-800 text-lg">User Details</h3>
                <button class="text-slate-400 hover:text-slate-600 transition-colors focus:outline-none" onclick="closeModal('viewModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div class="p-6 flex flex-col gap-5">
                <div class="flex items-center gap-4">
                    <img id="viewAvatar" src="" class="w-16 h-16 rounded-full shadow-sm object-cover bg-slate-100">
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 leading-tight" id="viewName">Name</h4>
                        <div class="text-sm font-medium text-slate-500" id="viewEmail">Email</div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Phone</div>
                        <div class="text-sm font-bold text-slate-700" id="viewPhone">Phone</div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Joined Date</div>
                        <div class="text-sm font-bold text-slate-700" id="viewJoined">Date</div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Gender</div>
                        <div class="text-sm font-bold text-slate-700" id="viewGender">Gender</div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg border border-slate-100">
                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">DOB</div>
                        <div class="text-sm font-bold text-slate-700" id="viewDob">DOB</div>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 mt-1">
                    <span id="viewStatusBadge" class="badge">Status</span>
                    <span id="viewLangBadge" class="badge">Lang</span>
                </div>
            </div>
            <div class="p-5 border-t border-slate-100 flex justify-end gap-3 bg-slate-50/50">
                <button class="px-4 py-2 text-sm font-bold text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors" onclick="closeModal('viewModal')">Close</button>
                <button class="px-4 py-2 text-sm font-bold text-white bg-[#f97316] border border-[#f97316] rounded-lg hover:bg-[#ea580c] transition-colors" onclick="closeModal('viewModal'); openModal('editModal')">Edit User</button>
            </div>
        </div>
    </div>

    <!-- Edit/Add User Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center modal-overlay hidden opacity-0 transition-opacity overflow-y-auto py-10">
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 w-full max-w-lg mx-4 overflow-hidden transform scale-95 transition-transform my-auto" id="editModalContent">
            <div class="flex items-center justify-between p-5 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-800 text-lg" id="editModalTitle">Edit User</h3>
                <button class="text-slate-400 hover:text-slate-600 transition-colors focus:outline-none" onclick="closeModal('editModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div class="p-6 flex flex-col gap-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Full Name</label>
                        <input type="text" id="editName" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Email Address</label>
                        <input type="email" id="editEmail" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Phone Number</label>
                        <input type="text" id="editPhone" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Date of Birth</label>
                        <input type="text" id="editDob" placeholder="e.g. 12 Jan 2000" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Gender</label>
                        <select id="editGender" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700 cursor-pointer">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Language</label>
                        <select id="editLanguage" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700 cursor-pointer">
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wide mb-1.5">Status</label>
                        <select id="editStatus" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 outline-none transition-all text-slate-700 cursor-pointer">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Blocked">Blocked</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-5 border-t border-slate-100 flex justify-end gap-3 bg-slate-50/50">
                <button class="px-4 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors" onclick="closeModal('editModal')">Cancel</button>
                <button class="px-6 py-2.5 text-sm font-bold text-white bg-[#f97316] border border-[#f97316] rounded-lg hover:bg-[#ea580c] transition-colors" onclick="closeModal('editModal')">Save Changes</button>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center modal-overlay hidden opacity-0 transition-opacity">
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 w-full max-w-sm mx-4 overflow-hidden transform scale-95 transition-transform" id="deleteModalContent">
            <div class="p-6 flex flex-col items-center text-center">
                <div class="w-14 h-14 bg-red-50 text-red-500 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                </div>
                <h3 class="font-bold text-slate-800 text-lg mb-2">Delete User?</h3>
                <p class="text-sm font-medium text-slate-500 mb-6">Are you sure you want to delete this user? This action cannot be undone.</p>
                <div class="flex items-center gap-3 w-full">
                    <button class="flex-1 py-2.5 text-sm font-bold text-slate-600 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors" onclick="closeModal('deleteModal')">Cancel</button>
                    <button class="flex-1 py-2.5 text-sm font-bold text-white bg-red-500 border border-red-500 rounded-lg hover:bg-red-600 transition-colors" onclick="closeModal('deleteModal')">Delete User</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data Setup (Generates exactly 12,568 mock users for realistic pagination testing)
        const totalMockCount = 12568;
        const hardcodedFirst10 = [
            { id: 1, name: "Priya Sharma", email: "priya@gmail.com", phone: "+91 98765 43210", gender: "Female", dob: "12 Jan 2000", language: "English", status: "Active", joined: "30 Sep 2026" },
            { id: 2, name: "Rahul Verma", email: "rahul@gmail.com", phone: "+91 87654 32109", gender: "Male", dob: "25 Mar 1998", language: "Hindi", status: "Active", joined: "29 Sep 2026" },
            { id: 3, name: "Neha Singh", email: "neha@gmail.com", phone: "+91 76543 21098", gender: "Female", dob: "14 Aug 2001", language: "English", status: "Active", joined: "29 Sep 2026" },
            { id: 4, name: "Amit Kumar", email: "amit@gmail.com", phone: "+91 65432 10987", gender: "Male", dob: "03 Dec 1999", language: "Hindi", status: "Inactive", joined: "28 Sep 2026" },
            { id: 5, name: "Sneha Patel", email: "sneha@gmail.com", phone: "+91 54321 09876", gender: "Female", dob: "21 Jul 2002", language: "English", status: "Active", joined: "28 Sep 2026" },
            { id: 6, name: "Rohit Yadav", email: "rohit@gmail.com", phone: "+91 98761 23456", gender: "Male", dob: "10 Feb 1997", language: "Hindi", status: "Active", joined: "27 Sep 2026" },
            { id: 7, name: "Anjali Gupta", email: "anjali@gmail.com", phone: "+91 91234 56789", gender: "Female", dob: "18 Nov 2000", language: "English", status: "Active", joined: "27 Sep 2026" },
            { id: 8, name: "Vikash Singh", email: "vikash@gmail.com", phone: "+91 99887 76655", gender: "Male", dob: "05 May 1998", language: "Hindi", status: "Inactive", joined: "26 Sep 2026" },
            { id: 9, name: "Pooja Mishra", email: "pooja@gmail.com", phone: "+91 96543 22110", gender: "Female", dob: "19 Apr 2001", language: "English", status: "Active", joined: "26 Sep 2026" },
            { id: 10, name: "Karan Malhotra", email: "karan@gmail.com", phone: "+91 90123 44321", gender: "Male", dob: "30 Sep 1999", language: "Hindi", status: "Active", joined: "25 Sep 2026" }
        ];
        
        let allUsers = [];
        let filteredUsers = [];
        
        // Populate mock DB
        for (let i = 1; i <= totalMockCount; i++) {
            if (i <= 10) {
                allUsers.push(hardcodedFirst10[i-1]);
            } else {
                // Generate cyclical mock data for the rest
                let base = hardcodedFirst10[(i-1) % 10];
                allUsers.push({
                    id: i,
                    name: base.name + (i > 10 ? ` ${i}` : ''),
                    email: `user${i}@example.com`,
                    phone: `+91 9${String(i).padStart(9, '0')}`,
                    gender: base.gender,
                    dob: base.dob,
                    language: base.language,
                    status: (i % 15 === 0) ? 'Blocked' : base.status,
                    joined: base.joined
                });
            }
        }
        
        // State
        let currentPage = 1;
        let itemsPerPage = 10;
        let selectedRowIds = new Set();
        
        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const filterStatus = document.getElementById('filterStatus');

        const paginationControls = document.getElementById('paginationControls');
        const paginationText = document.getElementById('paginationText');
        const emptyState = document.getElementById('emptyState');
        const selectAllCheckbox = document.getElementById('selectAllCheckbox');
        const bulkActionBar = document.getElementById('bulkActionBar');
        const selectedCountText = document.getElementById('selectedCountText');
        const paginationWrapper = document.getElementById('paginationWrapper');

        // Initialize
        function init() {
            filteredUsers = [...allUsers];
            
            // Attach listeners
            searchInput.addEventListener('input', debounce(applyFilters, 300));
            filterStatus.addEventListener('change', applyFilters);

            
            selectAllCheckbox.addEventListener('change', handleSelectAll);
            
            renderTableAndPagination();
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const status = filterStatus.value;
            filteredUsers = allUsers.filter(u => {
                let matchQuery = true;
                if (query) {
                    matchQuery = u.name.toLowerCase().includes(query) || 
                                 u.email.toLowerCase().includes(query) || 
                                 u.phone.includes(query);
                }
                let matchStatus = status === 'All' || u.status === status;
                
                return matchQuery && matchStatus;
            });
            
            currentPage = 1;
            selectedRowIds.clear();
            updateBulkActionBar();
            selectAllCheckbox.checked = false;
            
            renderTableAndPagination();
        }

        function renderTableAndPagination() {
            const total = filteredUsers.length;
            
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
            
            const pageData = filteredUsers.slice(startIdx, endIdx);
            
            // Render Rows
            tableBody.innerHTML = '';
            pageData.forEach((u, idx) => {
                const globalIndex = startIdx + idx + 1;
                const isSelected = selectedRowIds.has(u.id);
                
                const tr = document.createElement('tr');
                tr.className = `border-b border-slate-50 transition-colors ${isSelected ? 'bg-orange-50/50' : 'hover:bg-slate-50'}`;
                
                // Badges HTML
                let genderBadge = `<span class="badge ${u.gender === 'Female' ? 'badge-female' : (u.gender === 'Male' ? 'badge-male' : 'bg-slate-100 text-slate-600')}">${u.gender}</span>`;
                let langBadge = `<span class="badge ${u.language === 'English' ? 'badge-english' : 'badge-hindi'}">${u.language}</span>`;
                let statusBadge = `<span class="badge ${u.status === 'Active' ? 'badge-active' : (u.status === 'Inactive' ? 'badge-inactive' : 'bg-red-100 text-red-600')}">${u.status}</span>`;
                
                tr.innerHTML = `
                    <td class="py-3.5 pl-8 pr-2">
                        <input type="checkbox" class="row-checkbox w-4 h-4 rounded border-slate-300 text-[#f97316] focus:ring-[#f97316] cursor-pointer" data-id="${u.id}" ${isSelected ? 'checked' : ''}>
                    </td>
                    <td class="py-3.5 px-3 text-slate-400 font-bold">${globalIndex}</td>
                    <td class="py-3.5 px-3 flex items-center gap-2.5 min-w-[150px]">
                        <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(u.name)}&background=random&color=fff&size=28" class="w-7 h-7 rounded-full shadow-sm">
                        <span class="font-bold text-slate-700">${u.name}</span>
                    </td>
                    <td class="py-3.5 px-3 text-slate-500">${u.email}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.phone}</td>
                    <td class="py-3.5 px-3">${genderBadge}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.dob}</td>
                    <td class="py-3.5 px-3">${langBadge}</td>
                    <td class="py-3.5 px-3">${statusBadge}</td>
                    <td class="py-3.5 px-3 text-slate-500">${u.joined}</td>
                    <td class="py-3.5 pl-3 pr-8 text-right">
                        <div class="flex items-center justify-end gap-1">
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors" onclick='viewUser(${JSON.stringify(u)})' title="View">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-[#f97316] hover:bg-orange-50 transition-colors" onclick="openModal('editModal')" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 transition-colors" onclick="openModal('deleteModal')" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(tr);
            });
            
            // Checkbox event listeners
            document.querySelectorAll('.row-checkbox').forEach(cb => {
                cb.addEventListener('change', (e) => {
                    const id = parseInt(e.target.dataset.id);
                    if (e.target.checked) selectedRowIds.add(id);
                    else selectedRowIds.delete(id);
                    
                    updateSelectAllCheckboxState(pageData);
                    updateBulkActionBar();
                    
                    // Toggle row highlight
                    const row = e.target.closest('tr');
                    if(e.target.checked) row.classList.add('bg-orange-50/50');
                    else row.classList.remove('bg-orange-50/50');
                });
            });
            
            updateSelectAllCheckboxState(pageData);
            
            // Render Pagination Text
            paginationText.innerText = `Showing ${startIdx + 1} to ${endIdx} of ${total.toLocaleString()} users`;
            
            // Render Pagination Buttons
            renderPaginationControls(totalPages);
        }

        function renderPaginationControls(totalPages) {
            paginationControls.innerHTML = '';
            
            // Prev
            const prevBtn = document.createElement('button');
            prevBtn.className = 'pagination-btn';
            prevBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = () => { if(currentPage > 1) { currentPage--; renderTableAndPagination(); } };
            paginationControls.appendChild(prevBtn);
            
            // Pages logic (Ellipsis compact view)
            let pages = [];
            if (totalPages <= 7) {
                for (let i = 1; i <= totalPages; i++) pages.push(i);
            } else {
                if (currentPage <= 4) {
                    pages = [1, 2, 3, 4, 5, '...', totalPages];
                } else if (currentPage >= totalPages - 3) {
                    pages = [1, '...', totalPages - 4, totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
                } else {
                    pages = [1, '...', currentPage - 1, currentPage, currentPage + 1, '...', totalPages];
                }
            }
            
            pages.forEach(p => {
                if (p === '...') {
                    const el = document.createElement('div');
                    el.className = 'pagination-ellipsis';
                    el.innerText = '...';
                    paginationControls.appendChild(el);
                } else {
                    const btn = document.createElement('button');
                    btn.className = `pagination-btn ${p === currentPage ? 'active' : ''}`;
                    btn.innerText = p.toLocaleString();
                    btn.onclick = () => { currentPage = p; renderTableAndPagination(); };
                    paginationControls.appendChild(btn);
                }
            });
            
            // Next
            const nextBtn = document.createElement('button');
            nextBtn.className = 'pagination-btn';
            nextBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>';
            nextBtn.disabled = currentPage === totalPages;
            nextBtn.onclick = () => { if(currentPage < totalPages) { currentPage++; renderTableAndPagination(); } };
            paginationControls.appendChild(nextBtn);
        }

        // Selection Logic
        function handleSelectAll(e) {
            const isChecked = e.target.checked;
            const startIdx = (currentPage - 1) * itemsPerPage;
            const endIdx = Math.min(startIdx + itemsPerPage, filteredUsers.length);
            const pageData = filteredUsers.slice(startIdx, endIdx);
            
            pageData.forEach(u => {
                if (isChecked) selectedRowIds.add(u.id);
                else selectedRowIds.delete(u.id);
            });
            
            // Re-render table rows to update checkboxes and highlights natively
            renderTableAndPagination();
            updateBulkActionBar();
        }

        function updateSelectAllCheckboxState(pageData) {
            if (pageData.length === 0) {
                selectAllCheckbox.checked = false;
                selectAllCheckbox.indeterminate = false;
                return;
            }
            const selectedOnPage = pageData.filter(u => selectedRowIds.has(u.id)).length;
            selectAllCheckbox.checked = selectedOnPage === pageData.length;
            selectAllCheckbox.indeterminate = selectedOnPage > 0 && selectedOnPage < pageData.length;
        }

        function updateBulkActionBar() {
            if (selectedRowIds.size > 0) {
                selectedCountText.innerText = selectedRowIds.size;
                bulkActionBar.classList.remove('hidden');
            } else {
                bulkActionBar.classList.add('hidden');
            }
        }

        // Utils
        function debounce(func, timeout = 300){
            let timer;
            return (...args) => {
                clearTimeout(timer);
                timer = setTimeout(() => { func.apply(this, args); }, timeout);
            };
        }

        // Modal Logic
        function openModal(id) {
            const modal = document.getElementById(id);
            const content = document.getElementById(id + 'Content');
            modal.classList.remove('hidden');
            // Small delay to allow display:block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                content.classList.remove('scale-95');
            }, 10);
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            const content = document.getElementById(id + 'Content');
            modal.classList.add('opacity-0');
            content.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 200); // match transition duration
        }

        function viewUser(u) {
            document.getElementById('viewName').innerText = u.name;
            document.getElementById('viewEmail').innerText = u.email;
            document.getElementById('viewPhone').innerText = u.phone;
            document.getElementById('viewJoined').innerText = u.joined;
            document.getElementById('viewGender').innerText = u.gender;
            document.getElementById('viewDob').innerText = u.dob;
            document.getElementById('viewAvatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(u.name)}&background=random&color=fff&size=64`;
            
            const sBadge = document.getElementById('viewStatusBadge');
            sBadge.innerText = u.status;
            sBadge.className = `badge ${u.status === 'Active' ? 'badge-active' : (u.status === 'Inactive' ? 'badge-inactive' : 'bg-red-100 text-red-600')}`;
            
            const lBadge = document.getElementById('viewLangBadge');
            lBadge.innerText = u.language;
            lBadge.className = `badge ${u.language === 'English' ? 'badge-english' : 'badge-hindi'}`;
            
            // Populate Edit Form implicitly
            document.getElementById('editName').value = u.name;
            document.getElementById('editEmail').value = u.email;
            document.getElementById('editPhone').value = u.phone;
            document.getElementById('editDob').value = u.dob;
            document.getElementById('editGender').value = u.gender;
            document.getElementById('editLanguage').value = u.language;
            document.getElementById('editStatus').value = u.status;
            document.getElementById('editModalTitle').innerText = "Edit User";
            
            openModal('viewModal');
        }

        // Close modals when clicking overlay background
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal(this.id);
                }
            });
        });

        // Run
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
