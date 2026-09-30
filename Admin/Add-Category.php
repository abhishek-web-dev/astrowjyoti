<?php
// Admin Screen: Add Category
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category - AstroJyoti Admin</title>
    
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
        
        .icon-btn {
            border: 2px solid transparent;
            transition: all 0.2s ease;
        }
        .icon-btn.selected {
            border-color: #f97316;
            background-color: #fff7ed;
        }
        
        .status-card {
            border: 2px solid #e2e8f0;
            transition: all 0.2s ease;
        }
        .status-card.active {
            border-color: #22c55e;
            background-color: #f0fdf4;
        }
        .status-card.inactive {
            border-color: #ef4444;
            background-color: #fef2f2;
        }

        /* Radio hidden */
        .status-radio { display: none; }
        
        .toast {
            animation: slideUp 0.3s ease-out forwards, fadeOut 0.3s ease-in 2.7s forwards;
        }
        @keyframes slideUp {
            from { transform: translateY(100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
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
                
                <!-- BREADCRUMB -->
                <div class="text-sm font-medium text-slate-500 flex items-center gap-2">
                    <a href="/Admin/Categories" class="hover:text-orange-500 transition-colors">Categories</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    <span class="text-slate-700">Add Category</span>
                </div>

                <!-- PAGE HEADER -->
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Add Category</h1>
                        <p class="text-sm text-slate-500 mt-1 font-medium">Create a new astrologer category or specialization for the AstroJyoti platform.</p>
                    </div>
                    <a href="/Admin/Categories" class="h-10 px-4 flex items-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 font-bold rounded-lg shadow-sm transition-colors text-sm shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        Back to Categories
                    </a>
                </div>
                
                <!-- TWO COLUMN LAYOUT -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <!-- LEFT COLUMN: FORM -->
                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 lg:p-8">
                            <h2 class="text-lg font-bold text-slate-800 mb-1">Category Details</h2>
                            <p class="text-sm text-slate-500 font-medium mb-6">Fill in the category information and save to add it to the platform.</p>
                            
                            <form id="addCategoryForm" class="space-y-6">
                                
                                <!-- Category Name -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Category Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="catName" class="w-full h-11 px-4 text-sm border border-slate-200 rounded-xl focus:border-orange-300 focus:ring-4 focus:ring-orange-100 outline-none transition-all" placeholder="Enter category name (e.g. Love & Relationship)">
                                    <p class="text-xs text-red-500 mt-1 hidden" id="catNameError">Category Name is required.</p>
                                </div>
                                
                                <!-- Description -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Description <span class="text-red-500">*</span></label>
                                    <textarea id="catDesc" rows="4" class="w-full p-4 text-sm border border-slate-200 rounded-xl focus:border-orange-300 focus:ring-4 focus:ring-orange-100 outline-none transition-all" placeholder="Enter category description..."></textarea>
                                    <p class="text-xs text-red-500 mt-1 hidden" id="catDescError">Description is required.</p>
                                </div>
                                
                                <!-- Icon and Display Order -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    
                                    <!-- Category Icon -->
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Category Icon <span class="text-red-500">*</span></label>
                                        <div class="grid grid-cols-4 gap-3" id="iconGrid">
                                            <!-- Love -->
                                            <button type="button" class="icon-btn selected w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-orange-500 hover:bg-orange-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                            </button>
                                            <!-- Career -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-orange-400 hover:bg-orange-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                            </button>
                                            <!-- Marriage -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-purple-500 hover:bg-purple-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg>
                                            </button>
                                            <!-- Business -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-green-500 hover:bg-green-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                                            </button>
                                            <!-- Health -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-red-500 hover:bg-red-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                                            </button>
                                            <!-- Finance -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-yellow-500 hover:bg-yellow-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            </button>
                                            <!-- Education -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-orange-600 hover:bg-orange-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>
                                            </button>
                                            <!-- Property -->
                                            <button type="button" class="icon-btn w-12 h-12 flex items-center justify-center rounded-xl bg-slate-50 text-orange-700 hover:bg-orange-50 transition-colors" data-icon='<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                                            </button>
                                        </div>
                                        <p class="text-xs text-slate-500 mt-2 font-medium">Select an icon for this category. This icon will be displayed on the website.</p>
                                    </div>
                                    
                                    <!-- Display Order -->
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Display Order <span class="text-red-500">*</span></label>
                                        <input type="number" id="catOrder" value="1" min="1" class="w-full h-11 px-4 text-sm border border-slate-200 rounded-xl focus:border-orange-300 focus:ring-4 focus:ring-orange-100 outline-none transition-all">
                                        <p class="text-xs text-slate-500 mt-2 font-medium">Set the display order for this category (lower number will appear first).</p>
                                    </div>
                                    
                                </div>
                                
                                <!-- Status -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Status <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        
                                        <!-- Active -->
                                        <label class="status-card active rounded-xl p-4 flex gap-3 cursor-pointer relative" id="statusActiveCard">
                                            <input type="radio" name="status" value="Active" class="status-radio" checked onchange="updateStatusUI()">
                                            <div class="w-5 h-5 rounded-full border-2 border-green-500 flex items-center justify-center shrink-0 mt-0.5">
                                                <div class="w-2.5 h-2.5 bg-green-500 rounded-full" id="statusActiveDot"></div>
                                            </div>
                                            <div>
                                                <div class="text-sm font-bold text-slate-800">Active</div>
                                                <div class="text-xs text-slate-500 mt-0.5 font-medium">This category will be visible on the website.</div>
                                            </div>
                                        </label>
                                        
                                        <!-- Inactive -->
                                        <label class="status-card rounded-xl p-4 flex gap-3 cursor-pointer relative" id="statusInactiveCard">
                                            <input type="radio" name="status" value="Inactive" class="status-radio" onchange="updateStatusUI()">
                                            <div class="w-5 h-5 rounded-full border-2 border-slate-300 flex items-center justify-center shrink-0 mt-0.5" id="statusInactiveOuter">
                                                <div class="w-2.5 h-2.5 bg-red-500 rounded-full hidden" id="statusInactiveDot"></div>
                                            </div>
                                            <div>
                                                <div class="text-sm font-bold text-slate-800">Inactive</div>
                                                <div class="text-xs text-slate-500 mt-0.5 font-medium">This category will be hidden from the website.</div>
                                            </div>
                                        </label>
                                        
                                    </div>
                                </div>
                                
                                <!-- SEO -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Meta Title (SEO)</label>
                                        <input type="text" id="metaTitle" class="w-full h-11 px-4 text-sm border border-slate-200 rounded-xl focus:border-orange-300 focus:ring-4 focus:ring-orange-100 outline-none transition-all" placeholder="Enter meta title (optional)">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Meta Description (SEO)</label>
                                        <textarea id="metaDesc" rows="3" class="w-full p-4 text-sm border border-slate-200 rounded-xl focus:border-orange-300 focus:ring-4 focus:ring-orange-100 outline-none transition-all" placeholder="Enter meta description (optional)"></textarea>
                                    </div>
                                </div>
                                
                                <!-- Submit Buttons -->
                                <div class="pt-6 border-t border-slate-100 flex items-center gap-3">
                                    <button type="button" onclick="saveCategory()" class="h-11 px-6 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold rounded-xl shadow-md shadow-orange-500/20 transition-all text-sm flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" /></svg>
                                        Save Category
                                    </button>
                                    <a href="/Admin/Categories" class="h-11 px-6 border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 font-bold rounded-xl shadow-sm transition-colors text-sm flex items-center gap-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                        Cancel
                                    </a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    
                    <!-- RIGHT COLUMN: PREVIEW -->
                    <div class="space-y-6">
                        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 lg:p-8">
                            <h2 class="text-lg font-bold text-slate-800 mb-1">Category Preview</h2>
                            <p class="text-sm text-slate-500 font-medium mb-6">This is how the category will appear on the website.</p>
                            
                            <!-- The Preview Card itself -->
                            <div class="bg-[#fffdfb] border border-orange-50 rounded-2xl p-6 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden" style="min-height: 220px;">
                                <!-- Subtle bg pattern / blob could go here, leaving simple for now -->
                                
                                <div class="w-16 h-16 rounded-full bg-white shadow-sm border border-orange-100 text-orange-500 flex items-center justify-center mb-4 transition-all" id="previewIconContainer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" id="previewIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                
                                <h3 class="text-lg font-extrabold text-slate-800 tracking-tight transition-all" id="previewName">Love & Relationship</h3>
                                
                                <!-- Just a subtle arrow indicator like in the screenshot -->
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-orange-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                                </div>
                            </div>
                            
                            <!-- Info Box -->
                            <div class="mt-6 bg-blue-50 border border-blue-100 rounded-xl p-4 flex gap-3">
                                <div class="text-blue-500 shrink-0 mt-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 mb-1">Preview Information</h4>
                                    <ul class="text-xs text-slate-600 font-medium space-y-1 list-disc list-inside">
                                        <li>This is a live preview of how the category will appear on the website.</li>
                                        <li>The icon, name and description will be displayed as shown.</li>
                                        <li>You can change the icon and details anytime from the categories list.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!-- Spacer for bottom -->
            <div class="h-8"></div>
        </main>
    </div>

    <!-- Success Toast (Hidden by default) -->
    <div id="successToast" class="fixed bottom-6 right-6 bg-white border border-green-200 shadow-xl rounded-xl p-4 flex items-start gap-3 z-50 hidden">
        <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
        </div>
        <div>
            <h4 class="text-sm font-bold text-slate-800">Category Added Successfully!</h4>
            <p class="text-xs text-slate-500 mt-0.5 font-medium">The new category has been saved locally.</p>
        </div>
    </div>

    <script>
        // DOM Elements
        const catNameInput = document.getElementById('catName');
        const previewName = document.getElementById('previewName');
        
        const iconBtns = document.querySelectorAll('.icon-btn');
        const previewIconContainer = document.getElementById('previewIconContainer');
        const previewIcon = document.getElementById('previewIcon');
        
        const statusActiveCard = document.getElementById('statusActiveCard');
        const statusInactiveCard = document.getElementById('statusInactiveCard');
        const statusActiveDot = document.getElementById('statusActiveDot');
        const statusInactiveDot = document.getElementById('statusInactiveDot');
        const statusInactiveOuter = document.getElementById('statusInactiveOuter');

        let currentIconSVG = '<path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />';

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

            // Live Preview: Name
            catNameInput.addEventListener('input', (e) => {
                const val = e.target.value.trim();
                previewName.innerText = val ? val : 'Love & Relationship';
                document.getElementById('catNameError').classList.add('hidden');
                catNameInput.classList.remove('border-red-400', 'focus:border-red-400', 'focus:ring-red-100');
            });
            
            document.getElementById('catDesc').addEventListener('input', () => {
                document.getElementById('catDescError').classList.add('hidden');
                document.getElementById('catDesc').classList.remove('border-red-400', 'focus:border-red-400', 'focus:ring-red-100');
            });

            // Live Preview: Icon Selection
            iconBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove selected from all
                    iconBtns.forEach(b => b.classList.remove('selected'));
                    // Add to clicked
                    btn.classList.add('selected');
                    // Get SVG path
                    currentIconSVG = btn.getAttribute('data-icon');
                    // Update preview
                    previewIcon.innerHTML = currentIconSVG;
                    // Optional: sync color for preview icon from the clicked button's text color class
                    const colorClass = Array.from(btn.classList).find(c => c.startsWith('text-'));
                    if(colorClass) {
                        previewIconContainer.className = `w-16 h-16 rounded-full bg-white shadow-sm border border-orange-100 flex items-center justify-center mb-4 transition-all ${colorClass}`;
                    }
                });
            });
        }

        // Status UI Toggle
        function updateStatusUI() {
            const val = document.querySelector('input[name="status"]:checked').value;
            if(val === 'Active') {
                statusActiveCard.classList.add('active');
                statusActiveCard.classList.remove('inactive');
                statusInactiveCard.classList.remove('inactive', 'active');
                
                statusActiveCard.querySelector('.border-2').classList.add('border-green-500');
                statusActiveCard.querySelector('.border-2').classList.remove('border-slate-300');
                statusActiveDot.classList.remove('hidden');
                
                statusInactiveOuter.classList.remove('border-red-500');
                statusInactiveOuter.classList.add('border-slate-300');
                statusInactiveDot.classList.add('hidden');
            } else {
                statusInactiveCard.classList.add('inactive');
                statusActiveCard.classList.remove('active', 'inactive');
                
                statusInactiveOuter.classList.add('border-red-500');
                statusInactiveOuter.classList.remove('border-slate-300');
                statusInactiveDot.classList.remove('hidden');
                
                statusActiveCard.querySelector('.border-2').classList.remove('border-green-500');
                statusActiveCard.querySelector('.border-2').classList.add('border-slate-300');
                statusActiveDot.classList.add('hidden');
            }
        }

        // Save Function
        function saveCategory() {
            const name = catNameInput.value.trim();
            const desc = document.getElementById('catDesc').value.trim();
            let isValid = true;
            
            if(!name) {
                document.getElementById('catNameError').classList.remove('hidden');
                catNameInput.classList.add('border-red-400', 'focus:border-red-400', 'focus:ring-red-100');
                isValid = false;
            }
            if(!desc) {
                document.getElementById('catDescError').classList.remove('hidden');
                document.getElementById('catDesc').classList.add('border-red-400', 'focus:border-red-400', 'focus:ring-red-100');
                isValid = false;
            }
            
            if(isValid) {
                // Show toast
                const toast = document.getElementById('successToast');
                toast.classList.remove('hidden');
                toast.classList.add('toast');
                
                // Optional: clear form after brief delay
                setTimeout(() => {
                    catNameInput.value = '';
                    document.getElementById('catDesc').value = '';
                    document.getElementById('catOrder').value = '1';
                    document.getElementById('metaTitle').value = '';
                    document.getElementById('metaDesc').value = '';
                    document.querySelector('input[name="status"][value="Active"]').checked = true;
                    updateStatusUI();
                    
                    // Reset preview
                    previewName.innerText = 'Love & Relationship';
                    iconBtns[0].click(); // reset to first icon
                }, 1000);
            }
        }

        // Init on load
        document.addEventListener('DOMContentLoaded', init);
    </script>
</body>
</html>
