<?php
require_once __DIR__ . '/../auth_guard.php';

// My-Consultations.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Consultations - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    .tab-btn {
      transition: all 0.2s ease;
    }
    .tab-active {
      background-color: #ea580c;
      color: white;
      border-color: #ea580c;
    }
    .tab-inactive {
      background-color: white;
      color: #6b7280;
      border-color: #e5e7eb;
    }
    .tab-inactive:hover {
      background-color: #f9fafb;
    }
  </style>
</head>
<body class="bg-[#fdfaf5] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include 'sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fdfaf5]">
    
    <?php include 'header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 custom-scrollbar">
      
      <!-- Page Header -->
      <div class="mb-6 lg:mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-[#111827]">My Consultations</h1>
        <p class="text-gray-500 mt-1 text-sm md:text-base">View, manage and continue your consultations with astrologers.</p>
      </div>

      <!-- Main Layout -->
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- LEFT COLUMN: Main Consultations Area -->
        <div class="lg:col-span-8 flex flex-col gap-6">
          
          <!-- Filter Tabs -->
          <div class="flex items-center gap-3 overflow-x-auto hide-scrollbar pb-1 -mx-4 px-4 sm:mx-0 sm:px-0">
            <button onclick="switchTab('upcoming')" id="btn-upcoming" class="tab-btn tab-active px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2 shadow-sm">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              Upcoming (<span id="count-upcoming">0</span>)
            </button>
            <button onclick="switchTab('active')" id="btn-active" class="tab-btn tab-inactive px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-green-500"></span>
              Active (<span id="count-active">0</span>)
            </button>
            <button onclick="switchTab('completed')" id="btn-completed" class="tab-btn tab-inactive px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              Completed (<span id="count-completed">0</span>)
            </button>
            <button onclick="switchTab('cancelled')" id="btn-cancelled" class="tab-btn tab-inactive px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              Cancelled (<span id="count-cancelled">0</span>)
            </button>
          </div>

          <div id="content-loading" class="flex items-center justify-center py-20 text-gray-500">
             <svg class="animate-spin -ml-1 mr-3 h-8 w-8 text-astro-orange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
             Loading consultations...
          </div>
          <!-- TAB CONTENT: UPCOMING -->
          <div id="content-upcoming" class="space-y-4 hidden">
            
            <!-- Upcoming Card 1 -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-orange-200 shadow-sm relative overflow-hidden group hover:border-orange-300 transition-colors">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="/acharya.png" alt="Acharya Neelima" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-orange-50">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-green-700 bg-green-50 uppercase tracking-wide mb-1">Upcoming</span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Acharya Neelima
                      <svg class="w-4 h-4 text-orange-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Vedic Astrology &nbsp;|&nbsp; Love & Relationship</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">25 Sep 2026 (Thu)</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>10:00 AM (IST)</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Audio Call</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>30 Minutes</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="/Consultations/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-astro-orange hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-lg text-sm transition-colors shadow-sm flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Join Now
                  </a>
                  <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Reschedule
                  </a>
                  <button class="p-2 text-gray-400 hover:text-gray-600 hidden sm:block">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Upcoming Card 2 -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-100 shadow-sm relative overflow-hidden group hover:border-gray-200 transition-colors">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="https://i.pravatar.cc/150?u=pandit" alt="Pandit Rajesh Sharma" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gray-100">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-green-700 bg-green-50 uppercase tracking-wide mb-1">Upcoming</span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Pandit Rajesh Sharma
                      <svg class="w-4 h-4 text-orange-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Career Astrology &nbsp;|&nbsp; Finance & Business</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">28 Sep 2026 (Sun)</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>04:30 PM (IST)</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    <span>Video Call</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>45 Minutes</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="#" class="flex-1 sm:flex-none text-center bg-astro-orange hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-lg text-sm transition-colors shadow-sm flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    Join Now
                  </a>
                  <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Reschedule
                  </a>
                  <button class="p-2 text-gray-400 hover:text-gray-600 hidden sm:block">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          <!-- TAB CONTENT: ACTIVE -->
          <div id="content-active" class="hidden space-y-4">
            
            <h3 class="text-sm font-bold text-gray-900 flex items-center gap-2 mt-2">
              <span class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
              </span>
              Active Consultation
            </h3>

            <!-- Active Card -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-green-200 shadow-sm relative overflow-hidden group ring-1 ring-green-100">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="https://i.pravatar.cc/150?u=vikram" alt="Dr. Vikram Joshi" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-green-50">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-green-700 bg-green-50 uppercase tracking-wide mb-1 flex items-center gap-1 w-fit">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                      Live Session
                    </span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Dr. Vikram Joshi
                      <svg class="w-4 h-4 text-orange-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Vedic Astrology &nbsp;|&nbsp; Health & Wellness</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Started at <span class="font-medium">10:20 AM</span></span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Duration <span class="font-bold text-gray-900">24 Minutes</span></span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Audio Call</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="/Consultations/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 font-medium py-2 px-6 rounded-lg text-sm transition-colors shadow-sm flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Continue Call
                  </a>
                  <button class="p-2 text-gray-400 hover:text-gray-600 hidden sm:block mx-auto">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          <!-- TAB CONTENT: COMPLETED -->
          <div id="content-completed" class="hidden space-y-4">
            
            <h3 class="text-sm font-bold text-gray-900 flex items-center gap-2 mt-2">
              <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              </span>
              Completed Consultations
            </h3>

            <!-- Completed Card 1 -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-100 shadow-sm relative overflow-hidden">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="https://i.pravatar.cc/150?u=meera" alt="Astro Meera Singh" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gray-100">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-gray-600 bg-gray-100 uppercase tracking-wide mb-1">Completed</span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Astro Meera Singh
                      <svg class="w-4 h-4 text-orange-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Love & Relationship &nbsp;|&nbsp; Marriage Guidance</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>18 Sep 2026</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>11:00 AM <span class="text-gray-400">(30 min)</span></span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    <span>Video Call</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="/Dashboard/Dashboard" class="flex-1 sm:flex-none text-center bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    View Details
                  </a>
                  <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-orange-50 text-astro-orange hover:bg-orange-100 font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    Book Again
                  </a>
                  <button class="p-2 text-gray-400 hover:text-gray-600 hidden sm:block mx-auto">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Completed Card 2 -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-100 shadow-sm relative overflow-hidden">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="https://i.pravatar.cc/150?u=rohan" alt="Acharya Rohan" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gray-100">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-gray-600 bg-gray-100 uppercase tracking-wide mb-1">Completed</span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Acharya Rohan
                      <svg class="w-4 h-4 text-orange-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Career Astrology &nbsp;|&nbsp; Business & Finance</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>12 Sep 2026</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>04:00 PM <span class="text-gray-400">(45 min)</span></span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>Audio Call</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="/Dashboard/Dashboard" class="flex-1 sm:flex-none text-center bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    View Details
                  </a>
                  <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-orange-50 text-astro-orange hover:bg-orange-100 font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    Book Again
                  </a>
                  <button class="p-2 text-gray-400 hover:text-gray-600 hidden sm:block mx-auto">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                </div>
              </div>
            </div>

          </div>

          <!-- TAB CONTENT: CANCELLED -->
          <div id="content-cancelled" class="hidden space-y-4">
            
            <!-- Cancelled Card -->
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-100 shadow-sm relative overflow-hidden">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 opacity-80">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="https://i.pravatar.cc/150?u=meera" alt="Astro Meera Singh" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gray-100 grayscale">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold text-gray-600 bg-gray-100 uppercase tracking-wide mb-1">Cancelled</span>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900 flex items-center gap-1.5">
                      Astro Meera Singh
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">Cancelled by User</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="line-through text-gray-400">10 Sep 2026</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="line-through text-gray-400">02:00 PM</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 sm:flex-none text-center bg-orange-50 text-astro-orange hover:bg-orange-100 font-medium py-2 px-4 rounded-lg text-sm transition-colors opacity-100">
                    Book Again
                  </a>
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- RIGHT COLUMN: Schedule & Reschedule & Popular -->
        <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-0 lg:self-start lg:h-max">
          
          <!-- Upcoming Schedule -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <div class="flex justify-between items-center mb-4">
              <h3 class="font-bold text-gray-900">Upcoming Schedule</h3>
              <a href="#" class="text-xs font-semibold text-astro-orange hover:text-orange-700">View All &rarr;</a>
            </div>
            
            <div id="date-selector-container" class="flex gap-2 mb-5">
              <!-- Dynamically populated via JS -->
            </div>
            
            <!-- Scheduled Items -->
            <div id="upcoming-sidebar-list" class="space-y-4">
               <div class="text-sm text-gray-400 text-center py-4">Loading schedule...</div>
            </div>
          </div>

          <!-- Need to reschedule info -->
          <div class="bg-[#fff9f2] rounded-2xl border border-orange-100 p-5 relative overflow-hidden">
            <h4 class="font-bold text-astro-orange text-sm mb-2 relative z-10 flex items-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              Need to reschedule?
            </h4>
            <p class="text-xs text-gray-600 relative z-10 leading-relaxed mb-3">You can reschedule or cancel your consultation up to 2 hours before the scheduled time.</p>
            <a href="#" class="text-xs font-semibold text-astro-orange hover:text-orange-700 relative z-10">Learn More &rarr;</a>
            
            <svg class="absolute -bottom-4 -right-4 w-24 h-24 text-orange-200 opacity-30" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4.5l6.5 13h-13L12 6.5z"/></svg>
          </div>

          <!-- Popular Astrologers -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <div class="flex justify-between items-center mb-4">
              <h3 class="font-bold text-gray-900">Popular Astrologers</h3>
              <a href="/Dashboard/Dashboard" class="text-xs font-semibold text-astro-orange hover:text-orange-700">View All &rarr;</a>
            </div>
            
            <div class="space-y-4">
              <!-- Astro 1 -->
              <div class="flex items-center gap-3">
                <img src="/acharya.png" alt="Acharya Neelima" class="w-12 h-12 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-bold text-gray-900">Acharya Neelima</h4>
                  <div class="flex items-center gap-1 text-[10px] text-gray-500 mt-0.5">
                    <span class="text-yellow-500 font-bold">★ 4.9</span>
                    <span>(2.1k reviews)</span>
                  </div>
                  <p class="text-[11px] text-gray-500 mt-0.5">Love & Relationship</p>
                </div>
                <a href="/Dashboard/Talk-to-Astrologer" class="shrink-0 bg-white border border-orange-200 text-astro-orange hover:bg-orange-50 font-medium px-3 py-1.5 rounded-lg text-xs transition-colors">Book Now</a>
              </div>
              
              <!-- Astro 2 -->
              <div class="flex items-center gap-3">
                <img src="https://i.pravatar.cc/150?u=pandit" alt="Pandit Rajesh" class="w-12 h-12 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-bold text-gray-900">Pandit Rajesh Sharma</h4>
                  <div class="flex items-center gap-1 text-[10px] text-gray-500 mt-0.5">
                    <span class="text-yellow-500 font-bold">★ 4.8</span>
                    <span>(1.4k reviews)</span>
                  </div>
                  <p class="text-[11px] text-gray-500 mt-0.5">Career & Finance</p>
                </div>
                <a href="/Dashboard/Talk-to-Astrologer" class="shrink-0 bg-white border border-orange-200 text-astro-orange hover:bg-orange-50 font-medium px-3 py-1.5 rounded-lg text-xs transition-colors">Book Now</a>
              </div>
              
              <!-- Astro 3 -->
              <div class="flex items-center gap-3">
                <img src="https://i.pravatar.cc/150?u=meera" alt="Astro Meera" class="w-12 h-12 rounded-full object-cover">
                <div class="flex-1">
                  <h4 class="text-sm font-bold text-gray-900">Astro Meera Singh</h4>
                  <div class="flex items-center gap-1 text-[10px] text-gray-500 mt-0.5">
                    <span class="text-yellow-500 font-bold">★ 4.9</span>
                    <span>(1.9k reviews)</span>
                  </div>
                  <p class="text-[11px] text-gray-500 mt-0.5">Marriage Guidance</p>
                </div>
                <a href="/Dashboard/Talk-to-Astrologer" class="shrink-0 bg-white border border-orange-200 text-astro-orange hover:bg-orange-50 font-medium px-3 py-1.5 rounded-lg text-xs transition-colors">Book Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </main>

  <script src="/js/api.js"></script>
  <script>
    let consultations = [];
    
    document.addEventListener('DOMContentLoaded', () => {
      // Sidebar toggle logic for mobile
      const openBtn = document.getElementById('open-sidebar');
      const closeBtn = document.getElementById('close-sidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobile-overlay');

      if (openBtn && sidebar && overlay && closeBtn) {
        openBtn.addEventListener('click', () => {
          sidebar.classList.remove('-translate-x-full');
          overlay.classList.remove('hidden');
        });
        closeBtn.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
        overlay.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
      }

      fetchConsultations();
    });
    
    async function fetchConsultations() {
        try {
            const res = await window.api.get('/my-consultations');
            if (res && res.data) {
                consultations = res.data;
                renderTabs();
            }
        } catch (err) {
            console.error('Failed to load consultations', err);
            document.getElementById('content-loading').innerHTML = '<div class="text-red-500 font-medium">Failed to load consultations.</div>';
        }
    }
    
    function renderTabs() {
        document.getElementById('content-loading').classList.add('hidden');
        
        const now = new Date();
        const upcoming = consultations.filter(c => {
            if (c.status !== 'pending' && c.status !== 'confirmed') return false;
            const cDate = new Date(c.booking_date + 'T' + c.start_time);
            return cDate >= now;
        });
        const active = consultations.filter(c => c.status === 'active' || c.status === 'in_progress' || c.chat_status === 'in_progress' || c.video_status === 'in_progress');
        const completed = consultations.filter(c => c.status === 'completed');
        const cancelled = consultations.filter(c => c.status === 'cancelled');
        
        document.getElementById('count-upcoming').innerText = upcoming.length;
        document.getElementById('count-active').innerText = active.length;
        document.getElementById('count-completed').innerText = completed.length;
        document.getElementById('count-cancelled').innerText = cancelled.length;
        
        renderList('content-upcoming', upcoming, 'upcoming');
        renderList('content-active', active, 'active');
        renderList('content-completed', completed, 'completed');
        renderList('content-cancelled', cancelled, 'cancelled');
        
        renderUpcomingSidebar(upcoming);
        
        // Initial tab
        switchTab('upcoming');
    }
    
    function renderUpcomingSidebar(upcoming) {
        const container = document.getElementById('upcoming-sidebar-list');
        if(!container) return;
        
        if(upcoming.length === 0) {
            container.innerHTML = '<div class="text-sm text-gray-500 text-center py-4">No upcoming scheduled consultations.</div>';
            const dateContainer = document.getElementById('date-selector-container');
            if(dateContainer) dateContainer.innerHTML = '';
            return;
        }
        
        const dateContainer = document.getElementById('date-selector-container');
        if (dateContainer) {
            let startDate = new Date();
            const now = new Date();
            const hasTodaySlot = upcoming.some(c => {
                const cDate = new Date(c.booking_date + 'T' + c.start_time);
                return cDate >= now && c.booking_date === now.toISOString().split('T')[0];
            });
            if (!hasTodaySlot) {
                startDate.setDate(startDate.getDate() + 1);
            }
            
            let dateHtml = '';
            for(let i=0; i<4; i++) {
                const d = new Date(startDate);
                d.setDate(startDate.getDate() + i);
                const dayName = d.toLocaleDateString('en-US', {weekday: 'short'});
                const dateNum = d.getDate();
                const monthName = d.toLocaleDateString('en-US', {month: 'short'});
                
                const activeClass = i === 0 ? 'bg-astro-orange text-white shadow-sm border-astro-orange' : 'bg-gray-50 text-gray-600 hover:bg-orange-50 hover:text-astro-orange border-gray-100';
                const opacityClass = i === 0 ? 'opacity-90' : 'opacity-70';
                
                dateHtml += `
                  <div class="flex-1 rounded-xl py-2 px-1 text-center cursor-pointer border transition-colors ${activeClass}">
                    <div class="text-[10px] font-medium uppercase tracking-wider ${opacityClass}">${dayName}</div>
                    <div class="text-sm font-bold">${dateNum} ${monthName}</div>
                  </div>
                `;
            }
            dateContainer.innerHTML = dateHtml;
        }
        
        let html = '';
        upcoming.slice(0, 3).forEach((c, index) => {
            const t = c.start_time.split(':');
            let hours = parseInt(t[0]);
            const mins = t[1];
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            const timeStr = `${hours}:${mins} ${ampm}`;
            
            let displayType = c.consultation_type.charAt(0).toUpperCase() + c.consultation_type.slice(1);
            if (c.consultation_type === 'audio' || c.consultation_type === 'video') displayType += ' Call';
            
            html += `
              <div class="flex items-start gap-3">
                <img src="${c.astrologer?.profile_image || '/lady.png'}" alt="${c.astrologer?.display_name}" class="w-10 h-10 rounded-full object-cover">
                <div>
                  <h4 class="text-sm font-bold text-gray-900">${c.astrologer?.display_name || 'Astrologer'}</h4>
                  <div class="flex flex-wrap items-center gap-x-2 gap-y-1 text-xs text-gray-500 mt-1">
                    <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5 text-astro-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> ${displayType}</span>
                    <span class="flex items-center gap-1"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> ${timeStr} (${c.duration_minutes} min)</span>
                  </div>
                </div>
              </div>
            `;
            if (index < Math.min(upcoming.length, 3) - 1) {
                html += '<div class="w-full h-px bg-gray-100"></div>';
            }
        });
        
        container.innerHTML = html;
    }
    
    function renderList(containerId, list, type) {
        const container = document.getElementById(containerId);
        if (list.length === 0) {
            container.innerHTML = `
               <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm text-center">
                   <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                       <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                   </div>
                   <h3 class="text-lg font-bold text-gray-900 mb-1">No ${type} consultations</h3>
                   <p class="text-sm text-gray-500 mb-6">You don't have any ${type} consultations right now.</p>
                   <a href="/Dashboard/Talk-to-Astrologer" class="inline-block bg-astro-orange hover:bg-orange-700 text-white font-bold py-2.5 px-6 rounded-xl transition-colors">Book New Consultation</a>
               </div>
            `;
            return;
        }
        
        let html = '';
        list.forEach(c => {
            const d = new Date(c.booking_date);
            const dateStr = d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
            
            const t = c.start_time.split(':');
            let hours = parseInt(t[0]);
            const mins = t[1];
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            const timeStr = `${hours}:${mins} ${ampm} (IST)`;
            
            let displayType = c.consultation_type.charAt(0).toUpperCase() + c.consultation_type.slice(1);
            if (c.consultation_type === 'audio' || c.consultation_type === 'video') displayType += ' Call';
            
            let badgeClass = 'text-green-700 bg-green-50';
            let badgeText = 'Upcoming';
            if (type === 'active') { badgeClass = 'text-green-700 bg-green-100 animate-pulse'; badgeText = 'In Progress'; }
            if (type === 'completed') { badgeClass = 'text-gray-600 bg-gray-100'; badgeText = 'Completed'; }
            if (type === 'cancelled') { badgeClass = 'text-red-600 bg-red-50'; badgeText = 'Cancelled'; }
            
            let actionHtml = '';
            if (type === 'upcoming' || type === 'active') {
                let joinUrl = '';
                const cType = (c.consultation_type || '').toLowerCase();
                if (cType === 'chat') {
                    joinUrl = `/Chat/Chat?consultation_id=${c.consultation_id}`;
                } else if (cType === 'video') {
                    joinUrl = `/Video/Video-Consultation?consultation_id=${c.consultation_id}`;
                } else if (cType === 'audio' || cType === 'call') {
                    joinUrl = `javascript:alert('Dedicated Audio/Call page does not exist yet.')`;
                } else {
                    joinUrl = `/Video/Video-Consultation?consultation_id=${c.consultation_id}`;
                }
                
                let joinBtnText = type === 'active' ? 'Continue Call' : 'Join Now';
                let joinBtnClass = type === 'active' 
                    ? 'bg-red-50 hover:bg-red-100 text-red-600 border border-red-200' 
                    : 'bg-astro-orange hover:bg-orange-600 text-white shadow-sm';
                
                actionHtml = `
                  <a href="/Dashboard/Consultation-Details?id=${c.consultation_id}" class="flex-1 sm:flex-none text-center bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Details
                  </a>
                  <a href="${joinUrl}" class="flex-1 sm:flex-none text-center ${joinBtnClass} font-medium py-2 px-4 rounded-lg text-sm transition-colors flex items-center justify-center gap-1.5">
                    ${joinBtnText}
                  </a>
                `;
            } else {
                actionHtml = `
                  <a href="/Dashboard/Consultation-Details?id=${c.consultation_id}" class="bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 font-medium py-1.5 px-3 rounded-lg text-xs transition-colors">
                    View Details
                  </a>
                `;
            }
            
            html += `
            <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-100 shadow-sm relative overflow-hidden group hover:border-gray-200 transition-colors ${type === 'cancelled' ? 'opacity-75' : ''}">
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <!-- Astrologer Info -->
                <div class="flex items-center gap-4 flex-1">
                  <div class="relative shrink-0">
                    <img src="${c.astrologer?.profile_image || '/lady.png'}" alt="${c.astrologer?.display_name}" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gray-100 ${type === 'completed' || type === 'cancelled' ? 'grayscale-[0.2]' : ''}">
                  </div>
                  <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[10px] font-bold ${badgeClass} uppercase tracking-wide mb-1">${badgeText}</span>
                    <h3 class="text-base sm:text-lg font-bold ${type === 'cancelled' ? 'text-gray-500 line-through' : 'text-gray-900'} flex items-center gap-1.5">
                      ${c.astrologer?.display_name || c.astrologer?.name}
                    </h3>
                    <p class="text-xs text-gray-500 mt-0.5">${displayType} &nbsp;|&nbsp; ${c.payment_status === 'paid' ? 'Paid' : (c.payment_status === 'refunded' ? 'Refunded' : 'Unpaid')}</p>
                  </div>
                </div>
                
                <!-- Details -->
                <div class="grid grid-cols-2 gap-y-2 gap-x-4 sm:block sm:space-y-1.5 text-sm shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="font-medium">${dateStr}</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>${timeStr}</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>${c.duration_minutes} Minutes</span>
                  </div>
                  <div class="flex items-center gap-2 text-gray-600">
                     <span class="font-medium text-gray-900">₹${c.price}</span>
                  </div>
                </div>
                
                <!-- Actions -->
                <div class="flex sm:flex-col items-center sm:items-stretch gap-2 shrink-0 border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                  ${actionHtml}
                </div>
              </div>
            </div>
            `;
        });
        
        container.innerHTML = html;
    }

    // Tab Switching Logic
    function switchTab(tabId) {
      const tabs = ['upcoming', 'active', 'completed', 'cancelled'];
      
      tabs.forEach(t => {
        const btn = document.getElementById('btn-' + t);
        const content = document.getElementById('content-' + t);
        if(!btn || !content) return;
        
        if (t === tabId) {
          // Active state
          btn.className = 'tab-btn tab-active px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2 shadow-sm';
          content.classList.remove('hidden');
        } else {
          // Inactive state
          btn.className = 'tab-btn tab-inactive px-6 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2';
          content.classList.add('hidden');
        }
      });
    }
  </script>
</body>
</html>
