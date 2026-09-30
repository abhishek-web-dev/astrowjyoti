<?php
// Reusable Admin Header Component
?>
<!-- Header -->
<header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8 sticky top-0 z-10">
    
    <!-- Left: Search Bar -->
    <div class="flex-1 max-w-2xl">
        <div class="relative flex items-center w-full h-11 rounded-full bg-slate-50 border border-slate-200 px-4 focus-within:bg-white focus-within:border-slate-300 focus-within:ring-2 focus-within:ring-orange-100 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search users, astrologers, consultations, payments..." class="w-full bg-transparent border-none outline-none pl-3 text-slate-600 text-sm placeholder-slate-400">
        </div>
    </div>

    <!-- Right: Profile & Notifications -->
    <div class="flex items-center gap-6 ml-4">
        
        <!-- Notification Bell -->
        <button class="relative p-2 text-slate-400 hover:text-slate-600 transition-colors focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></span>
        </button>

        <!-- Divider -->
        <div class="h-8 w-px bg-slate-200"></div>

        <!-- Profile Dropdown -->
        <div class="relative group">
            <button class="flex items-center gap-3 focus:outline-none">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=f97316&color=fff" alt="Admin Avatar" class="w-10 h-10 rounded-full object-cover shadow-sm">
                <div class="flex flex-col items-start hidden sm:flex">
                    <span class="text-sm font-bold text-slate-800 group-hover:text-[#f97316] transition-colors">Admin User</span>
                    <span class="text-xs font-medium text-slate-500">Super Admin</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 group-hover:text-slate-600 transition-colors hidden sm:block ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            
            <!-- Dropdown Menu -->
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 overflow-hidden transform origin-top-right scale-95 group-hover:scale-100">
                <div class="py-1">
                    <a href="/Admin/Login" class="flex items-center gap-2 px-4 py-2.5 text-sm font-bold text-red-600 hover:bg-red-50 transition-colors w-full text-left">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </a>
                </div>
            </div>
        </div>
</header>
