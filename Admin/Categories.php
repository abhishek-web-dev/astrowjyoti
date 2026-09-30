<?php
// Admin Screen: Categories Management
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - AstroJyoti Admin</title>
    
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
        
        .badge-active { background: #dcfce7; color: #166534; }
        .badge-inactive { background: #fee2e2; color: #dc2626; }

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
        
        .cat-icon-container {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff7ed;
            color: #ea580c;
            border: 1px solid #ffedd5;
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
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Categories Management</h1>
                        <p class="text-sm text-slate-500 mt-1 font-medium">Manage astrologer categories and specializations on the AstroJyoti platform.</p>
                    </div>
                    <a href="/Admin/Add-Category" class="h-10 px-5 flex items-center gap-2 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold rounded-lg shadow-sm transition-colors text-sm shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                        Add Category
                    </a>
                </div>
                
                <!-- SUMMARY STATISTICS CARDS (4 Cards) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800" id="statTotal">8</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Categories</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +0%
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
                            <div class="text-2xl font-extrabold text-slate-800" id="statActive">8</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Active Categories</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +0%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800" id="statInactive">0</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Inactive Categories</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +0%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                        </div>
                        <div>
                            <div class="text-2xl font-extrabold text-slate-800" id="statDisplayed">8</div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Displayed on Website</div>
                            <div class="flex items-center gap-1 mt-1">
                                <span class="text-[10px] font-bold text-green-600 bg-green-100 px-1.5 rounded flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" /></svg>
                                    +0%
                                </span>
                                <span class="text-[10px] font-medium text-slate-400">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CONTENT AREA: Toolbar + Table -->
                <div class="bg-white border border-slate-100 shadow-sm rounded-2xl flex flex-col overflow-hidden">
                    
                    <!-- FILTER / SEARCH TOOLBAR -->
                    <div class="p-4 border-b border-slate-100 flex items-center gap-4 overflow-x-auto">
                        <!-- Search -->
                        <div class="relative shrink-0" style="width: 300px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            <input type="text" id="searchInput" placeholder="Search category name or description..." class="w-full h-9 pl-9 pr-3 text-sm border border-slate-200 rounded-lg bg-slate-50 focus:bg-white focus:border-slate-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all text-slate-700 placeholder-slate-400">
                        </div>

                        <!-- Filters -->
                        <select id="filterStatus" class="h-9 px-3 text-sm border border-slate-200 rounded-lg bg-white text-slate-600 focus:border-slate-300 outline-none cursor-pointer shrink-0">
                            <option value="All">All Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- TABLE -->
                    <div class="overflow-x-auto table-scroll w-full">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50 text-[11px] uppercase tracking-wider text-slate-500 font-extrabold">
                                    <th class="py-3.5 pl-6 pr-3">#</th>
                                    <th class="py-3.5 px-3">Icon</th>
                                    <th class="py-3.5 px-3">Category Name</th>
                                    <th class="py-3.5 px-3">Description</th>
                                    <th class="py-3.5 px-3 text-center">Astrologers</th>
                                    <th class="py-3.5 px-3 text-center">Status</th>
                                    <th class="py-3.5 px-3 text-center">Display Order</th>
                                    <th class="py-3.5 pl-3 pr-6 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody" class="text-[13px] font-medium text-slate-600">
                                <!-- Rendered via JS -->
                            </tbody>
                        </table>
                        
                        <!-- Empty State -->
                        <div id="emptyState" class="hidden flex-col items-center justify-center py-12 px-4 text-center">
                            <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4 text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6z" /></svg>
                            </div>
                            <h3 class="text-base font-bold text-slate-800">No categories found</h3>
                            <p class="text-sm text-slate-500 mt-1">Try adjusting your search or filters.</p>
                        </div>
                    </div>

                    <!-- PAGINATION -->
                    <div id="paginationWrapper" class="p-4 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="text-sm font-medium text-slate-500" id="paginationText">
                            Showing 1 to 8 of 8 categories
                        </div>
                        <div class="flex items-center gap-1.5" id="paginationControls">
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-100 text-slate-300 cursor-not-allowed">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg text-sm font-bold bg-[#f97316] text-white shadow-sm">1</button>
                            <button class="w-8 h-8 flex items-center justify-center rounded-lg border border-slate-100 text-slate-300 cursor-not-allowed">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Spacer for bottom -->
            <div class="h-8"></div>
        </main>
    </div>

    <!-- MODALS -->

    <!-- Add/Edit Category Modal -->
    <div id="formModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('formModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-[500px] p-6 overflow-hidden">
            <div class="flex justify-between items-start mb-5 border-b border-slate-100 pb-4">
                <div>
                    <h3 class="text-lg font-bold text-slate-800" id="formModalTitle">Add Category</h3>
                    <p class="text-xs text-slate-500 mt-0.5 font-medium">Create a new astrologer specialization.</p>
                </div>
                <button class="text-slate-400 hover:text-slate-600 transition-colors" onclick="closeModal('formModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            
            <div class="flex flex-col gap-4">
                <input type="hidden" id="formId">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Category Name <span class="text-red-500">*</span></label>
                    <input type="text" id="formName" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg focus:border-orange-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all" placeholder="e.g. Love & Relationship">
                </div>
                
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Description <span class="text-red-500">*</span></label>
                    <textarea id="formDesc" rows="3" class="w-full p-3 text-sm border border-slate-200 rounded-lg focus:border-orange-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all" placeholder="Briefly describe this specialization..."></textarea>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Status</label>
                        <select id="formStatus" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg focus:border-orange-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Display Order</label>
                        <input type="number" id="formOrder" class="w-full h-10 px-3 text-sm border border-slate-200 rounded-lg focus:border-orange-300 focus:ring-2 focus:ring-orange-100 outline-none transition-all" placeholder="e.g. 1">
                    </div>
                </div>
                
                <div class="flex justify-end gap-3 w-full mt-4 pt-4 border-t border-slate-100">
                    <button class="px-5 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('formModal')">Cancel</button>
                    <button class="px-5 py-2.5 rounded-lg bg-[#f97316] text-white font-bold text-sm shadow-md hover:bg-[#dd5c23] transition-colors" onclick="saveCategory()">Save Category</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div id="viewModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('viewModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-[400px] p-6 overflow-hidden">
            <div class="flex justify-between items-start mb-5 border-b border-slate-100 pb-4">
                <div>
                    <h3 class="text-lg font-bold text-slate-800">Category Details</h3>
                </div>
                <button class="text-slate-400 hover:text-slate-600 transition-colors" onclick="closeModal('viewModal')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            
            <div class="flex flex-col gap-5">
                <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div class="cat-icon-container shadow-sm" id="viewIcon">
                        <!-- icon SVG -->
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 text-base" id="viewName">Love & Relationship</h4>
                        <span id="viewStatus" class="mt-1 inline-block"></span>
                    </div>
                </div>
                
                <div>
                    <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Description</span>
                    <p class="text-sm text-slate-700 font-medium" id="viewDesc"></p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 border-t border-slate-100 pt-4">
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Total Astrologers</span>
                        <p class="font-bold text-slate-800 text-lg" id="viewAstros">128</p>
                    </div>
                    <div>
                        <span class="block text-slate-400 text-xs font-bold uppercase mb-1">Display Order</span>
                        <p class="font-bold text-slate-800 text-lg" id="viewOrder">1</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 w-full mt-2 pt-4 border-t border-slate-100">
                    <button class="w-full py-2.5 rounded-lg bg-[#f97316] text-white font-bold text-sm shadow-md hover:bg-[#dd5c23] transition-colors" onclick="closeModal('viewModal')">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="closeModal('deleteModal')"></div>
        <div class="relative bg-white rounded-2xl shadow-xl w-full max-w-[350px] p-6 overflow-hidden text-center">
            <div class="w-14 h-14 bg-red-100 text-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-800 mb-2">Delete Category?</h3>
            <p class="text-sm text-slate-500 font-medium mb-6">Are you sure you want to delete "<span id="deleteCatName" class="font-bold text-slate-700"></span>"? This action cannot be undone.</p>
            <input type="hidden" id="deleteId">
            <div class="flex gap-3">
                <button class="flex-1 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 transition-colors" onclick="closeModal('deleteModal')">Cancel</button>
                <button class="flex-1 py-2.5 rounded-lg bg-red-500 text-white font-bold text-sm shadow-md hover:bg-red-600 transition-colors" onclick="confirmDelete()">Delete</button>
            </div>
        </div>
    </div>

    <script>
        // MOCK DATA
        let categories = [
            { id: 1, name: "Love & Relationship", desc: "Relationship, marriage, love life and compatibility guidance.", astros: 128, status: "Active", order: 1, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />' },
            { id: 2, name: "Career & Job", desc: "Career, job, business growth and professional life guidance.", astros: 96, status: "Active", order: 2, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />' },
            { id: 3, name: "Marriage & Kundli", desc: "Marriage, kundli matching and marital life predictions.", astros: 112, status: "Active", order: 3, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />' },
            { id: 4, name: "Business", desc: "Business, finance, investment and economic growth guidance.", astros: 84, status: "Active", order: 4, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />' },
            { id: 5, name: "Health", desc: "Health, wellness and remedy related guidance.", astros: 76, status: "Active", order: 5, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />' },
            { id: 6, name: "Finance", desc: "Money, wealth, property and financial stability guidance.", astros: 92, status: "Active", order: 6, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />' },
            { id: 7, name: "Education", desc: "Education, studies, competition and academic success guidance.", astros: 68, status: "Active", order: 7, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />' },
            { id: 8, name: "Property", desc: "Property, real estate, land and vehicle related guidance.", astros: 54, status: "Active", order: 8, icon: '<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />' }
        ];

        let filteredItems = [...categories];

        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const searchInput = document.getElementById('searchInput');
        const filterStatus = document.getElementById('filterStatus');
        const paginationText = document.getElementById('paginationText');
        const emptyState = document.getElementById('emptyState');
        const formModal = document.getElementById('formModal');
        const viewModal = document.getElementById('viewModal');
        const deleteModal = document.getElementById('deleteModal');

        function init() {
            // Set active sidebar item
            const sidebarLinks = document.querySelectorAll('aside a');
            sidebarLinks.forEach(link => {
                link.classList.remove('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                link.classList.add('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                if(link.textContent.trim().includes('Categories')) {
                    link.classList.add('bg-orange-50', 'text-[#dd5c23]', 'border-r-4', 'border-[#dd5c23]', 'font-bold');
                    link.classList.remove('text-slate-600', 'font-medium', 'hover:bg-slate-50', 'hover:text-slate-900');
                    const svg = link.querySelector('svg');
                    if(svg) svg.classList.add('text-[#dd5c23]');
                }
            });

            searchInput.addEventListener('input', applyFilters);
            filterStatus.addEventListener('change', applyFilters);
            
            updateStats();
            renderTable();
        }

        function updateStats() {
            const total = categories.length;
            const active = categories.filter(c => c.status === 'Active').length;
            const inactive = categories.filter(c => c.status === 'Inactive').length;
            
            document.getElementById('statTotal').innerText = total;
            document.getElementById('statActive').innerText = active;
            document.getElementById('statInactive').innerText = inactive;
            document.getElementById('statDisplayed').innerText = active; // Assuming active are displayed
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const status = filterStatus.value;
            
            filteredItems = categories.filter(item => {
                let matchQuery = true;
                if (query) {
                    matchQuery = item.name.toLowerCase().includes(query) || 
                                 item.desc.toLowerCase().includes(query);
                }
                let matchStatus = status === 'All' || item.status === status;
                return matchQuery && matchStatus;
            });
            
            renderTable();
        }

        function getBadge(status) {
            return `<span class="badge ${status === 'Active' ? 'badge-active' : 'badge-inactive'}">${status}</span>`;
        }

        function renderTable() {
            const total = filteredItems.length;
            
            if (total === 0) {
                tableBody.innerHTML = '';
                emptyState.classList.remove('hidden');
                emptyState.classList.add('flex');
                paginationText.innerText = `Showing 0 of 0 categories`;
                return;
            }
            
            emptyState.classList.add('hidden');
            emptyState.classList.remove('flex');
            
            // Sort by display order
            filteredItems.sort((a, b) => a.order - b.order);
            
            tableBody.innerHTML = '';
            filteredItems.forEach((item, idx) => {
                const tr = document.createElement('tr');
                tr.className = `border-b border-slate-50 hover:bg-slate-50 transition-colors`;
                
                tr.innerHTML = `
                    <td class="py-3.5 pl-6 pr-3 font-bold text-slate-400">${idx + 1}</td>
                    <td class="py-3.5 px-3">
                        <div class="cat-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                ${item.icon}
                            </svg>
                        </div>
                    </td>
                    <td class="py-3.5 px-3 font-bold text-slate-800">${item.name}</td>
                    <td class="py-3.5 px-3 text-slate-500 whitespace-normal min-w-[250px] max-w-[300px] leading-snug">${item.desc}</td>
                    <td class="py-3.5 px-3 text-center font-bold text-slate-700">${item.astros}</td>
                    <td class="py-3.5 px-3 text-center">${getBadge(item.status)}</td>
                    <td class="py-3.5 px-3 text-center font-bold text-slate-600">${item.order}</td>
                    <td class="py-3.5 pl-3 pr-6 text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-colors" onclick="openViewModal(${item.id})" title="View">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-orange-500 hover:bg-orange-50 transition-colors" onclick="openEditModal(${item.id})" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                            </button>
                            <button class="w-7 h-7 rounded-md flex items-center justify-center text-slate-400 hover:text-red-500 hover:bg-red-50 transition-colors" onclick="openDeleteModal(${item.id})" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </button>
                        </div>
                    </td>
                `;
                tableBody.appendChild(tr);
            });

            paginationText.innerText = `Showing 1 to ${total} of ${categories.length} categories`;
        }

        // Modals
        function openModal(id) {
            const el = document.getElementById(id);
            if(id === 'formModal') {
                document.getElementById('formId').value = '';
                document.getElementById('formName').value = '';
                document.getElementById('formDesc').value = '';
                document.getElementById('formStatus').value = 'Active';
                document.getElementById('formOrder').value = categories.length + 1;
                document.getElementById('formModalTitle').innerText = 'Add Category';
            }
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

        function openViewModal(id) {
            const item = categories.find(c => c.id === id);
            if(!item) return;
            
            document.getElementById('viewIcon').innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">${item.icon}</svg>`;
            document.getElementById('viewName').innerText = item.name;
            document.getElementById('viewStatus').innerHTML = getBadge(item.status);
            document.getElementById('viewDesc').innerText = item.desc;
            document.getElementById('viewAstros').innerText = item.astros;
            document.getElementById('viewOrder').innerText = item.order;
            
            const el = document.getElementById('viewModal');
            el.classList.remove('hidden', 'modal-close');
            el.classList.add('flex', 'modal-open');
        }

        function openEditModal(id) {
            const item = categories.find(c => c.id === id);
            if(!item) return;
            
            document.getElementById('formId').value = item.id;
            document.getElementById('formName').value = item.name;
            document.getElementById('formDesc').value = item.desc;
            document.getElementById('formStatus').value = item.status;
            document.getElementById('formOrder').value = item.order;
            document.getElementById('formModalTitle').innerText = 'Edit Category';
            
            const el = document.getElementById('formModal');
            el.classList.remove('hidden', 'modal-close');
            el.classList.add('flex', 'modal-open');
        }

        function saveCategory() {
            const id = document.getElementById('formId').value;
            const name = document.getElementById('formName').value.trim();
            const desc = document.getElementById('formDesc').value.trim();
            const status = document.getElementById('formStatus').value;
            const order = parseInt(document.getElementById('formOrder').value) || (categories.length + 1);
            
            if(!name || !desc) {
                alert("Name and description are required.");
                return;
            }
            
            if(id) {
                // Edit
                const index = categories.findIndex(c => c.id == id);
                if(index !== -1) {
                    categories[index].name = name;
                    categories[index].desc = desc;
                    categories[index].status = status;
                    categories[index].order = order;
                }
            } else {
                // Add
                const newId = Math.max(...categories.map(c => c.id)) + 1;
                // generic star icon for new
                const genericIcon = '<path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />';
                categories.push({
                    id: newId,
                    name: name,
                    desc: desc,
                    astros: 0,
                    status: status,
                    order: order,
                    icon: genericIcon
                });
            }
            
            closeModal('formModal');
            applyFilters();
            updateStats();
        }

        function openDeleteModal(id) {
            const item = categories.find(c => c.id === id);
            if(!item) return;
            
            document.getElementById('deleteId').value = item.id;
            document.getElementById('deleteCatName').innerText = item.name;
            
            const el = document.getElementById('deleteModal');
            el.classList.remove('hidden', 'modal-close');
            el.classList.add('flex', 'modal-open');
        }

        function confirmDelete() {
            const id = document.getElementById('deleteId').value;
            categories = categories.filter(c => c.id != id);
            
            closeModal('deleteModal');
            applyFilters();
            updateStats();
        }

        // Init
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
