<?php
// Admin Screen: Dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AstroJyoti Admin</title>
    
    <!-- Tailwind CSS (via Vite) -->
    <link rel="stylesheet" href="/src/style.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="module" src="/src/main.js"></script>
    
    <style>
        body { margin: 0; padding: 0; background-color: #f8fafc; }
        .font-serif-custom { font-family: 'Playfair Display', serif; }
        .font-sans-custom { font-family: 'Inter', sans-serif; }
        
        .primary-text { color: #dd5c23; }
        .primary-bg { background-color: #dd5c23; }
        
        /* Custom scrollbar for main area */
        .main-scroll::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        .main-scroll::-webkit-scrollbar-track {
            background: #f1f5f9; 
        }
        .main-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        .main-scroll::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        
        .stat-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
    </style>
</head>
<body class="font-sans-custom overflow-hidden text-slate-800">
    
    <div class="flex h-screen w-full">
        
        <!-- SIDEBAR COMPONENT -->
        <?php include __DIR__ . '/Components/AdminSidebar.php'; ?>
        
        <!-- MAIN CONTENT AREA -->
        <main class="flex-1 flex flex-col h-screen overflow-hidden relative bg-[#f8fafc]">
            
            <!-- HEADER COMPONENT -->
            <?php include __DIR__ . '/Components/AdminHeader.php'; ?>
            
            <!-- SCROLLABLE DASHBOARD CONTENT -->
            <div class="flex-1 overflow-y-auto p-8 main-scroll">
                
                <!-- Page Title Row -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-slate-800 mb-1 tracking-tight">Dashboard</h1>
                        <p class="text-slate-500 font-medium text-sm">Welcome back, Admin! Here's an overview of your AstroJyoti platform.</p>
                    </div>
                    
                    <button class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm font-bold text-slate-700 shadow-sm hover:bg-slate-50 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        1 Sep 2026 - 30 Sep 2026
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                
                <!-- KPI STATS (10 Cards in 2 Rows) -->
                <div class="grid grid-cols-2 lg:grid-cols-5 gap-5 mb-8">
                    
                    <!-- KPI 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-orange-50 text-[#f97316]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">12,568</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Users</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +12%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-emerald-50 text-emerald-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">10,245</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Active Users</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +8%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-red-50 text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">2,323</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Deleted Users</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-red-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg> -3%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-purple-50 text-purple-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">842</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Astrologers</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +15%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 5 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-amber-50 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">56</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Pending Onboarding</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-red-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg> -5%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 6 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-blue-50 text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">1,248</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Active Consultations</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +18%
                            </span>
                            <span class="text-xs font-medium text-slate-400">from last month</span>
                        </div>
                    </div>

                    <!-- KPI 7 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-rose-50 text-rose-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">32</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Ongoing Calls</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +10%
                            </span>
                        </div>
                    </div>

                    <!-- KPI 8 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-emerald-50 text-emerald-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 11.25v-1.5a3.375 3.375 0 013.375-3.375h3.937m-3.937 0v1.5a3.375 3.375 0 01-3.375 3.375h-3.937m3.937 0v1.5a3.375 3.375 0 013.375 3.375h3.937" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">₹ 12,48,320</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Revenue</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +22%
                            </span>
                        </div>
                    </div>

                    <!-- KPI 9 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-indigo-50 text-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">1,856</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Payments</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +14%
                            </span>
                        </div>
                    </div>

                    <!-- KPI 10 -->
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="stat-card-icon bg-orange-50 text-orange-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                            <div class="pt-1">
                                <div class="text-2xl font-extrabold text-slate-800 leading-none mb-1.5">3,420</div>
                                <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Completed Consultations</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> +19%
                            </span>
                        </div>
                    </div>

                </div>

                <!-- CHARTS ROW -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    
                    <!-- Consultations Line Chart (Spans 2 cols) -->
                    <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#f97316]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-[15px]">Consultations Overview</h3>
                            </div>
                            <button class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg px-3 py-1.5 text-xs font-bold text-slate-600 shadow-sm">
                                Last 30 Days
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                            </button>
                        </div>
                        <div class="relative flex-1 w-full" style="min-height: 250px;">
                            <canvas id="consultationsChart"></canvas>
                        </div>
                    </div>

                    <!-- Revenue Bar Chart (Spans 1 col) -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#f97316]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 11.25v-1.5a3.375 3.375 0 013.375-3.375h3.937m-3.937 0v1.5a3.375 3.375 0 01-3.375 3.375h-3.937m3.937 0v1.5a3.375 3.375 0 013.375 3.375h3.937" /></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-[15px]">Revenue Overview</h3>
                            </div>
                            <button class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg px-3 py-1.5 text-xs font-bold text-slate-600 shadow-sm">
                                Last 30 Days
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                            </button>
                        </div>
                        
                        <div class="mb-4">
                            <div class="flex items-end gap-3 mb-1">
                                <div class="text-2xl font-extrabold text-slate-800">₹ 12,48,320</div>
                                <span class="text-xs font-bold text-green-500 flex items-center mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg> 22%
                                </span>
                            </div>
                            <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wide">Total Revenue</div>
                        </div>

                        <div class="relative flex-1 w-full" style="min-height: 180px;">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>

                </div>

                <!-- BOTTOM TABLES ROW -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pb-6">
                    
                    <!-- Table 1: Recent Users -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex flex-col">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-full bg-orange-50 flex items-center justify-center text-[#f97316]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-[14.5px]">Recent Users</h3>
                            </div>
                            <a href="#" class="text-[#f97316] font-bold text-xs hover:underline flex items-center gap-1">View All <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 text-[11px] uppercase tracking-wider text-slate-400 font-bold">
                                        <th class="pb-3 font-bold pl-1 w-8">#</th>
                                        <th class="pb-3 font-bold">Name</th>
                                        <th class="pb-3 font-bold">Email</th>
                                        <th class="pb-3 font-bold">Date</th>
                                        <th class="pb-3 font-bold text-right pr-1">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-[12px] font-medium text-slate-600">
                                    <?php 
                                    $mock_users = [
                                        ['Priya Sharma', 'priya@gmail.com', '30 Sep 2026', 'Active', 'bg-green-100 text-green-700'],
                                        ['Rahul Verma', 'rahul@gmail.com', '29 Sep 2026', 'Active', 'bg-green-100 text-green-700'],
                                        ['Neha Singh', 'neha@gmail.com', '29 Sep 2026', 'Active', 'bg-green-100 text-green-700'],
                                        ['Amit Kumar', 'amit@gmail.com', '28 Sep 2026', 'Inactive', 'bg-red-100 text-red-700'],
                                        ['Sneha Patel', 'sneha@gmail.com', '28 Sep 2026', 'Active', 'bg-green-100 text-green-700'],
                                    ];
                                    foreach($mock_users as $index => $u) {
                                        echo '<tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">';
                                        echo '<td class="py-3 pl-1 text-slate-400">' . ($index+1) . '</td>';
                                        echo '<td class="py-3 flex items-center gap-2.5"><img src="https://ui-avatars.com/api/?name=' . urlencode($u[0]) . '&background=random&color=fff&size=24" class="w-6 h-6 rounded-full"><span class="font-bold text-slate-700 whitespace-nowrap">' . $u[0] . '</span></td>';
                                        echo '<td class="py-3 text-slate-500">' . $u[1] . '</td>';
                                        echo '<td class="py-3 text-slate-500 whitespace-nowrap">' . $u[2] . '</td>';
                                        echo '<td class="py-3 text-right pr-1"><span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wide ' . $u[4] . '">' . $u[3] . '</span></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Table 2: Recent Consultations -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex flex-col">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-full bg-orange-50 flex items-center justify-center text-[#f97316]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" /></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-[14.5px]">Recent Consultations</h3>
                            </div>
                            <a href="#" class="text-[#f97316] font-bold text-xs hover:underline flex items-center gap-1">View All <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 text-[11px] uppercase tracking-wider text-slate-400 font-bold">
                                        <th class="pb-3 font-bold pl-1 w-6">#</th>
                                        <th class="pb-3 font-bold">User</th>
                                        <th class="pb-3 font-bold">Astrologer</th>
                                        <th class="pb-3 font-bold">Type</th>
                                        <th class="pb-3 font-bold">Date</th>
                                        <th class="pb-3 font-bold text-right pr-1">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-[12px] font-medium text-slate-600">
                                    <?php 
                                    $mock_consults = [
                                        ['Priya S.', 'Astrologer R.', 'Chat', 'bg-orange-100 text-orange-700', '30 Sep', 'Success', 'bg-green-100 text-green-700'],
                                        ['Rahul V.', 'Astrologer M.', 'Video', 'bg-purple-100 text-purple-700', '30 Sep', 'Completed', 'bg-blue-100 text-blue-700'],
                                        ['Neha S.', 'Astrologer K.', 'Audio', 'bg-blue-100 text-blue-700', '29 Sep', 'Completed', 'bg-blue-100 text-blue-700'],
                                        ['Amit K.', 'Astrologer P.', 'Video', 'bg-purple-100 text-purple-700', '29 Sep', 'Cancelled', 'bg-red-100 text-red-700'],
                                        ['Sneha P.', 'Astrologer D.', 'Chat', 'bg-orange-100 text-orange-700', '28 Sep', 'Completed', 'bg-blue-100 text-blue-700'],
                                    ];
                                    foreach($mock_consults as $index => $c) {
                                        echo '<tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">';
                                        echo '<td class="py-3 pl-1 text-slate-400">' . ($index+1) . '</td>';
                                        echo '<td class="py-3 flex items-center gap-2"><img src="https://ui-avatars.com/api/?name=' . urlencode($c[0]) . '&background=random&color=fff&size=24" class="w-5 h-5 rounded-full"><span class="font-bold text-slate-700 whitespace-nowrap">' . $c[0] . '</span></td>';
                                        echo '<td class="py-3 text-slate-500 whitespace-nowrap">' . $c[1] . '</td>';
                                        echo '<td class="py-3"><span class="px-2 py-0.5 rounded text-[10.5px] font-bold ' . $c[3] . '">' . $c[2] . '</span></td>';
                                        echo '<td class="py-3 text-slate-500 whitespace-nowrap">' . $c[4] . '</td>';
                                        echo '<td class="py-3 text-right pr-1"><span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wide ' . $c[6] . '">' . $c[5] . '</span></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Table 3: Recent Payments -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 flex flex-col">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-2.5">
                                <div class="w-7 h-7 rounded-full bg-orange-50 flex items-center justify-center text-[#f97316]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                </div>
                                <h3 class="font-bold text-slate-800 text-[14.5px]">Recent Payments</h3>
                            </div>
                            <a href="#" class="text-[#f97316] font-bold text-xs hover:underline flex items-center gap-1">View All <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg></a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 text-[11px] uppercase tracking-wider text-slate-400 font-bold">
                                        <th class="pb-3 font-bold pl-1 w-6">#</th>
                                        <th class="pb-3 font-bold">User</th>
                                        <th class="pb-3 font-bold">Amount</th>
                                        <th class="pb-3 font-bold">Date</th>
                                        <th class="pb-3 font-bold text-right pr-1">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-[12px] font-medium text-slate-600">
                                    <?php 
                                    $mock_payments = [
                                        ['Priya S.', '₹ 599', '30 Sep 2026', 'Success', 'bg-green-100 text-green-700'],
                                        ['Rahul V.', '₹ 1,199', '30 Sep 2026', 'Success', 'bg-green-100 text-green-700'],
                                        ['Neha S.', '₹ 299', '29 Sep 2026', 'Pending', 'bg-amber-100 text-amber-700'],
                                        ['Amit K.', '₹ 1,999', '29 Sep 2026', 'Failed', 'bg-red-100 text-red-700'],
                                        ['Sneha P.', '₹ 499', '28 Sep 2026', 'Success', 'bg-green-100 text-green-700'],
                                    ];
                                    foreach($mock_payments as $index => $p) {
                                        echo '<tr class="border-b border-slate-50 hover:bg-slate-50 transition-colors">';
                                        echo '<td class="py-3 pl-1 text-slate-400">' . ($index+1) . '</td>';
                                        echo '<td class="py-3 flex items-center gap-2"><img src="https://ui-avatars.com/api/?name=' . urlencode($p[0]) . '&background=random&color=fff&size=24" class="w-5 h-5 rounded-full"><span class="font-bold text-slate-700 whitespace-nowrap">' . $p[0] . '</span></td>';
                                        echo '<td class="py-3 text-slate-800 font-bold whitespace-nowrap">' . $p[1] . '</td>';
                                        echo '<td class="py-3 text-slate-500 whitespace-nowrap">' . $p[2] . '</td>';
                                        echo '<td class="py-3 text-right pr-1"><span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wide ' . $p[4] . '">' . $p[3] . '</span></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                
            </div>
        </main>
    </div>

    <!-- Chart.js Mock Data Initialization -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // Shared Chart Options
            Chart.defaults.font.family = "'Inter', sans-serif";
            Chart.defaults.color = '#94a3b8'; // slate-400
            
            // --- Consultations Overview Line Chart ---
            const ctxConsultations = document.getElementById('consultationsChart').getContext('2d');
            
            // Mock Data for Last 7 days (representing exactly what is in screenshot)
            const labels = ['1 Sep', '5 Sep', '10 Sep', '15 Sep', '20 Sep', '25 Sep', '30 Sep'];
            
            new Chart(ctxConsultations, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Chat',
                            data: [80, 110, 140, 110, 140, 100, 140],
                            borderColor: '#f97316', // orange-500
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            pointBackgroundColor: '#f97316'
                        },
                        {
                            label: 'Audio',
                            data: [50, 90, 100, 80, 110, 80, 100],
                            borderColor: '#a855f7', // purple-500
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            pointBackgroundColor: '#a855f7'
                        },
                        {
                            label: 'Video',
                            data: [20, 50, 40, 50, 60, 40, 60],
                            borderColor: '#3b82f6', // blue-500
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            tension: 0.4,
                            pointRadius: 3,
                            pointBackgroundColor: '#3b82f6'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                boxWidth: 6,
                                padding: 20,
                                font: { size: 12, weight: '600' }
                            }
                        },
                        tooltip: { mode: 'index', intersect: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 200,
                            ticks: { stepSize: 50, font: { size: 11 } },
                            grid: { color: '#f1f5f9', drawBorder: false }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: { font: { size: 11 } }
                        }
                    },
                    interaction: { mode: 'nearest', axis: 'x', intersect: false }
                }
            });

            // --- Revenue Overview Bar Chart ---
            const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
            
            // Granular data points to match screenshot bars
            const revLabels = ['1 Sep','','','','5 Sep','','','','10 Sep','','','','15 Sep','','','','20 Sep','','','','25 Sep','','','','30 Sep'];
            const revData = [30, 40, 60, 50, 100, 80, 120, 140, 150, 100, 100, 100, 80, 80, 100, 90, 150, 140, 180, 240, 320, 200, 240, 180, 240];
            
            new Chart(ctxRevenue, {
                type: 'bar',
                data: {
                    labels: revLabels,
                    datasets: [{
                        label: 'Revenue',
                        data: revData,
                        backgroundColor: '#f97316', // orange-500
                        borderRadius: 2,
                        barPercentage: 0.6,
                        categoryPercentage: 1.0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 400,
                            ticks: {
                                stepSize: 100,
                                callback: function(value) { return value + 'K'; },
                                font: { size: 10 }
                            },
                            grid: { color: '#f1f5f9', drawBorder: false }
                        },
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: {
                                autoSkip: false,
                                maxRotation: 0,
                                font: { size: 10 },
                                callback: function(val, index) {
                                    return revLabels[index] ? revLabels[index] : '';
                                }
                            }
                        }
                    }
                }
            });

        });
    </script>
</body>
</html>
