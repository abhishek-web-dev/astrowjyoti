<?php
// Admin Screen: Add User
$current_page = 'Add-User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - AstroJyoti Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .table-scroll::-webkit-scrollbar { height: 6px; width: 6px; }
        .table-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        /* Custom radio button styles */
        input[type="radio"]:checked + div {
            border-color: #f97316;
            background-color: #fff7ed;
        }
        input[type="radio"]:checked + div .radio-inner {
            background-color: #f97316;
            border-color: #f97316;
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
        
        <!-- SCROLLABLE CONTENT -->
        <main class="flex-1 overflow-y-auto p-6 lg:p-8 table-scroll">
            
            <div class="max-w-7xl mx-auto space-y-6">
                <!-- Breadcrumb & Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <nav class="flex items-center text-sm text-slate-500 mb-2">
                            <a href="/Admin/Users" class="hover:text-[#dd5c23] transition-colors font-medium">Users</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            <span class="text-slate-800 font-medium">Add User</span>
                        </nav>
                        <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Add User</h1>
                        <p class="text-sm text-slate-500 mt-1 font-medium">Create a new user account for the AstroJyoti platform.</p>
                    </div>
                    <a href="/Admin/Users" class="h-10 px-5 flex items-center gap-2 bg-white border border-orange-200 hover:border-orange-300 hover:bg-orange-50 text-[#dd5c23] font-bold rounded-lg shadow-sm transition-colors text-sm shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        Back to Users
                    </a>
                </div>
                
                <!-- Main Layout -->
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">
                    
                    <!-- Left: Form -->
                    <div class="xl:col-span-2 bg-white border border-slate-200 rounded-2xl shadow-sm p-6 lg:p-8">
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-slate-800">User Information</h2>
                            <p class="text-sm text-slate-500">Fill in the details to create a new user account.</p>
                        </div>
                        
                        <form id="addUserForm" class="space-y-6" onsubmit="event.preventDefault(); validateForm();">
                            
                            <!-- Profile Photo -->
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Profile Photo</label>
                                <div class="flex items-center gap-6">
                                    <div class="relative group cursor-pointer">
                                        <div class="w-20 h-20 rounded-full bg-slate-100 flex items-center justify-center border-2 border-slate-200 overflow-hidden shrink-0">
                                            <img id="profileImagePreview" src="" alt="Profile" class="w-full h-full object-cover hidden">
                                            <svg id="profileImagePlaceholder" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-slate-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="absolute bottom-0 right-0 bg-white border border-slate-200 rounded-full p-1.5 shadow-sm text-slate-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12a9 9 0 1018 0 9 9 0 00-18 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" /></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex flex-col items-center justify-center p-4 border border-dashed border-slate-300 rounded-xl bg-slate-50 hover:bg-slate-100 transition-colors relative">
                                        <input type="file" id="photoInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/jpeg, image/png">
                                        <div class="flex items-center gap-2 text-sm font-semibold text-slate-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                            Upload Profile Photo
                                        </div>
                                        <p class="text-xs text-slate-500 mt-1">JPG, PNG (Max 2MB)</p>
                                        <button type="button" class="mt-3 px-4 py-1.5 bg-white border border-slate-200 rounded-lg text-xs font-semibold text-slate-700 shadow-sm hover:bg-slate-50 pointer-events-none">Choose File</button>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                
                                <!-- Full Name -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        </div>
                                        <input type="text" id="fullName" placeholder="Enter full name" class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all" oninput="updatePreview()">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Email Address <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        </div>
                                        <input type="email" id="email" placeholder="Enter email address" class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all" oninput="updatePreview()">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                                    <div class="flex rounded-xl shadow-sm bg-white border border-slate-200 focus-within:ring-2 focus-within:ring-[#f97316]/20 focus-within:border-[#f97316] transition-all overflow-hidden" id="phoneContainer">
                                        <div class="flex items-center pl-3 pr-2 bg-slate-50 border-r border-slate-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                            <span class="text-sm text-slate-500 font-medium">+91</span>
                                        </div>
                                        <input type="tel" id="phone" placeholder="Enter phone number" class="flex-1 w-full pl-3 pr-3 py-2.5 bg-white border-none text-sm focus:outline-none focus:ring-0" oninput="updatePreview()">
                                    </div>
                                </div>

                                <!-- Date of Birth -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Date of Birth <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        </div>
                                        <input type="date" id="dob" class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all text-slate-600" onchange="updatePreview()">
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Gender <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="gender" value="Male" class="peer sr-only" onchange="updatePreview()" checked>
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Male</span>
                                            </div>
                                        </label>
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="gender" value="Female" class="peer sr-only" onchange="updatePreview()">
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Female</span>
                                            </div>
                                        </label>
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="gender" value="Other" class="peer sr-only" onchange="updatePreview()">
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Other</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Preferred Language -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Preferred Language <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="language" value="English" class="peer sr-only" onchange="updatePreview()" checked>
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">English</span>
                                            </div>
                                        </label>
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="language" value="Hindi" class="peer sr-only" onchange="updatePreview()">
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Hindi</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Password <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                        </div>
                                        <input type="password" id="password" placeholder="Enter password" class="w-full pl-9 pr-10 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                        <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Confirm Password <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                                        </div>
                                        <input type="password" id="confirmPassword" placeholder="Confirm password" class="w-full pl-9 pr-10 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                        <button type="button" onclick="togglePassword('confirmPassword')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Status <span class="text-red-500">*</span></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="status" value="Active" class="peer sr-only" onchange="updatePreview()" checked>
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Active</span>
                                            </div>
                                        </label>
                                        <label class="relative cursor-pointer">
                                            <input type="radio" name="status" value="Inactive" class="peer sr-only" onchange="updatePreview()">
                                            <div class="flex items-center gap-2 px-3 py-2 border border-slate-200 rounded-xl bg-white hover:bg-slate-50 transition-all">
                                                <div class="w-4 h-4 rounded-full border border-slate-300 flex items-center justify-center radio-inner bg-white shrink-0">
                                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                                </div>
                                                <span class="text-sm font-medium text-slate-700 peer-checked:text-[#f97316]">Inactive</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            
                            <hr class="border-slate-100 my-8">
                            
                            <!-- Action Buttons -->
                            <div class="flex gap-4">
                                <button type="submit" class="px-6 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                                    Create User
                                </button>
                                <a href="/Admin/Users" class="px-6 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                    Cancel
                                </a>
                            </div>

                        </form>
                    </div>
                    
                    <!-- Right: Preview -->
                    <div class="xl:col-span-1 space-y-6">
                        
                        <div>
                            <h2 class="text-lg font-bold text-slate-800">Account Preview</h2>
                            <p class="text-sm text-slate-500">This is how the user information will appear in the system.</p>
                        </div>
                        
                        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-6 relative overflow-hidden flex flex-col items-center">
                            <!-- Background subtle rectangle matching reference -->
                            <div class="absolute inset-4 bg-slate-50/50 rounded-xl -z-0"></div>
                            
                            <div class="w-24 h-24 rounded-full bg-slate-100 border-4 border-white shadow-sm flex items-center justify-center overflow-hidden z-10 mb-4 mt-6">
                                <img id="previewImage" src="" alt="Profile" class="w-full h-full object-cover hidden">
                                <!-- Default SVG matching screenshot reference (boy with orange shirt) -->
                                <svg id="previewPlaceholder" width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                                    <rect width="96" height="96" fill="#F8E5D5"/>
                                    <path d="M48 51C56.2843 51 63 44.2843 63 36C63 27.7157 56.2843 21 48 21C39.7157 21 33 27.7157 33 36C33 44.2843 39.7157 51 48 51Z" fill="#222B45"/>
                                    <path d="M72.5 75C72.5 75 73.5 66.5 65.5 60.5C57.5 54.5 38.5 54.5 30.5 60.5C22.5 66.5 23.5 75 23.5 75" fill="#F97316"/>
                                </svg>
                            </div>
                            
                            <h3 id="previewName" class="text-lg font-extrabold text-slate-800 z-10 text-center w-full truncate px-4">User Name</h3>
                            <p id="previewEmail" class="text-sm text-slate-500 mb-6 z-10 text-center w-full truncate px-4">user@example.com</p>
                            
                            <div class="w-full space-y-3 pb-4 z-10 text-sm px-2">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        <span class="truncate">Full Name</span>
                                    </div>
                                    <span id="previewNameRow" class="font-medium text-slate-700 truncate">User Name</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        <span class="truncate">Email Address</span>
                                    </div>
                                    <span id="previewEmailRow" class="font-medium text-slate-700 truncate">user@example.com</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        <span class="truncate">Phone Number</span>
                                    </div>
                                    <span id="previewPhoneRow" class="font-medium text-slate-700 truncate">+91 98765 43210</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        <span class="truncate">Gender</span>
                                    </div>
                                    <span id="previewGenderRow" class="font-medium text-slate-700 truncate">Male</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        <span class="truncate">Date of Birth</span>
                                    </div>
                                    <span id="previewDobRow" class="font-medium text-slate-700 truncate">12 Jan 2000</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" /></svg>
                                        <span class="truncate">Preferred Language</span>
                                    </div>
                                    <span id="previewLangRow" class="font-medium text-slate-700 truncate">English</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 items-center">
                                    <div class="flex items-center gap-2 text-slate-500">
                                        <div class="w-3 h-3 rounded-full bg-emerald-500 shrink-0" id="previewStatusDot"></div>
                                        <span class="truncate">Status</span>
                                    </div>
                                    <div class="truncate">
                                        <span id="previewStatusRow" class="px-2 py-0.5 rounded-md text-xs font-bold bg-emerald-50 text-emerald-600">Active</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="bg-blue-50/80 border border-blue-100 rounded-2xl p-4 flex gap-3 text-sm">
                            <div class="w-6 h-6 rounded-full bg-blue-500 text-white flex items-center justify-center font-bold shrink-0 shadow-sm mt-0.5 text-xs">i</div>
                            <div>
                                <p class="font-bold text-slate-800 mb-1">Preview Information</p>
                                <p class="text-slate-500 leading-relaxed">This preview shows how the user details will appear in the admin panel after creation.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            
            <!-- Toast Notification -->
            <div id="toast" class="fixed bottom-6 right-6 transform translate-y-20 opacity-0 transition-all duration-300 z-50 pointer-events-none">
                <div class="bg-slate-800 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span class="font-medium text-sm">User created successfully!</span>
                </div>
            </div>

        </main>
    </div>
    
    <script>
        // Set active sidebar item via JS to ensure robust highlighting since it's a sub-page
        // Actually handled by PHP via $current_page = 'Add-User', mapping logic in AdminSidebar.php

        // Photo Upload Preview
        const photoInput = document.getElementById('photoInput');
        photoInput.addEventListener('change', function(e) {
            if(this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const result = e.target.result;
                    // Update form preview
                    document.getElementById('profileImagePreview').src = result;
                    document.getElementById('profileImagePreview').classList.remove('hidden');
                    document.getElementById('profileImagePlaceholder').classList.add('hidden');
                    
                    // Update card preview
                    document.getElementById('previewImage').src = result;
                    document.getElementById('previewImage').classList.remove('hidden');
                    document.getElementById('previewPlaceholder').classList.add('hidden');
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        // Date format helper
        function formatDate(dateStr) {
            if(!dateStr) return '12 Jan 2000'; // default
            const date = new Date(dateStr);
            if(isNaN(date.getTime())) return '12 Jan 2000';
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return `${date.getDate().toString().padStart(2, '0')} ${months[date.getMonth()]} ${date.getFullYear()}`;
        }

        // Live Preview Logic
        function updatePreview() {
            // Text fields
            const name = document.getElementById('fullName').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const dob = document.getElementById('dob').value;
            
            // Radio fields
            const gender = document.querySelector('input[name="gender"]:checked').value;
            const lang = document.querySelector('input[name="language"]:checked').value;
            const status = document.querySelector('input[name="status"]:checked').value;

            // Update DOM
            document.getElementById('previewName').textContent = name || 'User Name';
            document.getElementById('previewNameRow').textContent = name || 'User Name';
            
            document.getElementById('previewEmail').textContent = email || 'user@example.com';
            document.getElementById('previewEmailRow').textContent = email || 'user@example.com';
            
            document.getElementById('previewPhoneRow').textContent = phone ? '+91 ' + phone : '+91 98765 43210';
            document.getElementById('previewGenderRow').textContent = gender;
            document.getElementById('previewLangRow').textContent = lang;
            document.getElementById('previewDobRow').textContent = formatDate(dob);
            
            // Status styling
            const statusRow = document.getElementById('previewStatusRow');
            const statusDot = document.getElementById('previewStatusDot');
            
            statusRow.textContent = status;
            
            if(status === 'Active') {
                statusRow.className = 'px-2 py-0.5 rounded-md text-xs font-bold bg-emerald-50 text-emerald-600';
                statusDot.className = 'w-3 h-3 rounded-full bg-emerald-500 shrink-0';
            } else {
                statusRow.className = 'px-2 py-0.5 rounded-md text-xs font-bold bg-slate-100 text-slate-500';
                statusDot.className = 'w-3 h-3 rounded-full bg-slate-400 shrink-0';
            }
        }

        // Password Toggle
        function togglePassword(id) {
            const input = document.getElementById(id);
            if(input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }

        // Form Validation
        function validateForm() {
            const requiredFields = [
                { id: 'fullName', type: 'input' },
                { id: 'email', type: 'input' },
                { id: 'phone', type: 'input', container: 'phoneContainer' },
                { id: 'dob', type: 'input' },
                { id: 'password', type: 'input' },
                { id: 'confirmPassword', type: 'input' }
            ];
            
            let isValid = true;
            
            requiredFields.forEach(field => {
                const el = document.getElementById(field.id);
                const val = el.value.trim();
                const target = field.container ? document.getElementById(field.container) : el;
                
                if(!val) {
                    isValid = false;
                    target.classList.remove('border-slate-200');
                    target.classList.add('border-red-400', 'ring-1', 'ring-red-400');
                    
                    // Remove error on input
                    el.addEventListener('input', function removeError() {
                        target.classList.remove('border-red-400', 'ring-1', 'ring-red-400');
                        target.classList.add('border-slate-200');
                        el.removeEventListener('input', removeError);
                    });
                }
            });
            
            // Password match check
            const pwd = document.getElementById('password').value;
            const cpwd = document.getElementById('confirmPassword').value;
            if (pwd && cpwd && pwd !== cpwd) {
                isValid = false;
                const cpTarget = document.getElementById('confirmPassword');
                cpTarget.classList.remove('border-slate-200');
                cpTarget.classList.add('border-red-400', 'ring-1', 'ring-red-400');
                alert("Passwords do not match!");
            }
            
            if(isValid) {
                showToast();
                // Reset form
                document.getElementById('addUserForm').reset();
                updatePreview();
                // Reset images
                document.getElementById('profileImagePreview').classList.add('hidden');
                document.getElementById('profileImagePlaceholder').classList.remove('hidden');
                document.getElementById('previewImage').classList.add('hidden');
                document.getElementById('previewPlaceholder').classList.remove('hidden');
            }
        }

        // Toast Notification
        function showToast() {
            const toast = document.getElementById('toast');
            toast.classList.remove('translate-y-20', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }
    </script>
</body>
</html>
