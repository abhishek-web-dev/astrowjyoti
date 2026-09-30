<?php
require_once __DIR__ . '/../auth_guard.php';

// Dashboard.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Astrowjyoti</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Tailwind CSS via Vite -->
  <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-[#f9fafb] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include 'sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fafafa]">
    
    <?php include 'header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 custom-scrollbar">
      <div class="max-w-7xl mx-auto grid grid-cols-1 xl:grid-cols-10 gap-6 lg:gap-8">
        
        <!-- LEFT COLUMN (70%) -->
        <div class="xl:col-span-7 space-y-6 lg:space-y-8">
          
          <!-- Welcome Banner -->
          <div class="relative bg-orange-50 rounded-[1.5rem] overflow-hidden shadow-sm h-[220px] md:h-[260px] w-full border border-orange-100">
            <!-- Background Image -->
            <img src="/Auth/Dashboard-banner.png" alt="Welcome Background" class="absolute inset-0 w-full h-full object-cover object-left" onerror="this.src='/lady.png'">
            
            <!-- Dynamic Text Overlay (Absolute positioning to align with image elements if needed) -->
            <div class="absolute inset-0 flex items-center">
               <!-- Centered Welcome Text -->
               <div class="mx-auto max-w-sm z-10 hidden md:flex flex-col items-center text-center">
                 <h1 class="text-[#1e293b] text-2xl md:text-3xl font-semibold mb-0">Welcome Back,</h1>
                 <h2 id="welcome-name" class="text-[#ea580c] text-4xl md:text-5xl font-bold mb-3 flex items-center justify-center gap-2">User <span class="text-3xl">👋</span></h2>
                 <p class="text-[#0f172a] text-xs md:text-sm max-w-[280px] font-bold leading-relaxed drop-shadow-sm">Continue your spiritual journey with guidance, clarity and positive energy.</p>
               </div>

               <!-- Quote removed as requested -->
            </div>
          </div>

          <!-- Quick Actions -->
          <div>
            <div class="flex justify-between items-end mb-4">
              <h3 class="text-lg md:text-xl font-bold text-[#1e293b]">Quick Actions</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4">
              <!-- Action 1 -->
              <a href="/Dashboard/Talk-to-Astrologer" class="bg-[#fef4e8] hover:bg-[#faeedc] transition-colors p-4 lg:p-5 rounded-2xl group relative overflow-hidden flex items-start gap-3 lg:gap-4 min-h-[110px]">
                <div class="w-11 h-11 rounded-full bg-[#fce5c8] flex items-center justify-center text-[#d97706] shrink-0 transition-transform">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div class="flex-1 pr-4">
                  <h4 class="font-bold text-[#1e293b] text-[13px] lg:text-sm mb-1 leading-tight">Talk to Astrologer</h4>
                  <p class="text-[11px] lg:text-xs text-[#475569] leading-relaxed">Get instant guidance on a call</p>
                </div>
                <span class="absolute bottom-3 right-3 text-[#ea580c] text-sm">&rarr;</span>
              </a>
              <!-- Action 2 -->
              <a href="/Chat/Chat" class="bg-[#fdf2f2] hover:bg-[#fce9e9] transition-colors p-4 lg:p-5 rounded-2xl group relative overflow-hidden flex items-start gap-3 lg:gap-4 min-h-[110px]">
                <div class="w-11 h-11 rounded-full bg-[#fadcdc] flex items-center justify-center text-[#ef4444] shrink-0 transition-transform">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <div class="flex-1 pr-4">
                  <h4 class="font-bold text-[#1e293b] text-[13px] lg:text-sm mb-1 leading-tight">Chat with Astrologer</h4>
                  <p class="text-[11px] lg:text-xs text-[#475569] leading-relaxed">Ask your questions anytime</p>
                </div>
                <span class="absolute bottom-3 right-3 text-[#ef4444] text-sm">&rarr;</span>
              </a>
              <!-- Action 3 -->
              <a href="/Video/Video-Consultation" class="bg-[#f3f0ff] hover:bg-[#ede9fe] transition-colors p-4 lg:p-5 rounded-2xl group relative overflow-hidden flex items-start gap-3 lg:gap-4 min-h-[110px]">
                <div class="w-11 h-11 rounded-full bg-[#e8e2fa] flex items-center justify-center text-[#8b5cf6] shrink-0 transition-transform">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <div class="flex-1 pr-4">
                  <h4 class="font-bold text-[#1e293b] text-[13px] lg:text-sm mb-1 leading-tight">Video Consultation</h4>
                  <p class="text-[11px] lg:text-xs text-[#475569] leading-relaxed">Face-to-face consultation</p>
                </div>
                <span class="absolute bottom-3 right-3 text-[#8b5cf6] text-sm">&rarr;</span>
              </a>
              <!-- Action 4 -->
              <a href="/Booking/Consultation-Form" class="bg-[#f0fdf4] hover:bg-[#e7fceb] transition-colors p-4 lg:p-5 rounded-2xl group relative overflow-hidden flex items-start gap-3 lg:gap-4 min-h-[110px]">
                <div class="w-11 h-11 rounded-full bg-[#dcfce7] flex items-center justify-center text-[#22c55e] shrink-0 transition-transform">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div class="flex-1 pr-4">
                  <h4 class="font-bold text-[#1e293b] text-[13px] lg:text-sm mb-1 leading-tight">Book a Consultation</h4>
                  <p class="text-[11px] lg:text-xs text-[#475569] leading-relaxed">Schedule at your convenience</p>
                </div>
                <span class="absolute bottom-3 right-3 text-[#22c55e] text-sm">&rarr;</span>
              </a>
            </div>
          </div>

          <!-- Upcoming & Horoscope Row -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Upcoming Consultation -->
            <div>
              <div class="flex justify-between items-end mb-4">
                <h3 class="text-xl font-bold text-gray-800">Upcoming Consultation</h3>
                <a href="/Dashboard/My-Consultations" class="text-sm font-medium text-astro-orange hover:text-orange-700">View All &rarr;</a>
              </div>
              <div id="upcoming-consultation-container" class="bg-white p-5 rounded-3xl border border-gray-100 shadow-sm flex flex-col h-full justify-center items-center">
                <!-- Skeleton or Empty State initially -->
                <div class="animate-pulse flex flex-col items-center">
                  <div class="w-16 h-16 bg-gray-200 rounded-2xl mb-4"></div>
                  <div class="h-4 bg-gray-200 rounded w-24 mb-2"></div>
                  <div class="h-3 bg-gray-200 rounded w-32"></div>
                </div>
              </div>
            </div>

            <!-- Today's Horoscope -->
            <div>
              <div class="flex justify-between items-end mb-4">
                <h3 class="text-xl font-bold text-gray-800">Today's Horoscope</h3>
                <a href="/Astrology/Daily-Horoscope" class="text-sm font-medium text-astro-orange hover:text-orange-700">View All &rarr;</a>
              </div>
              <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-5 rounded-3xl border border-amber-100 shadow-sm flex flex-col h-full relative overflow-hidden">
                <div class="flex items-center gap-3 mb-3 relative z-10">
                  <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm text-astro-orange border border-amber-100 text-2xl font-serif">
                    ♌
                  </div>
                  <div>
                    <h4 class="font-bold text-gray-900 text-lg">Leo</h4>
                    <p class="text-xs text-gray-500">(Jul 23 - Aug 22)</p>
                  </div>
                </div>
                <p class="text-sm text-gray-700 mb-5 relative z-10 leading-relaxed">
                  Today brings new opportunities in your career. Stay focused and trust your instincts. A positive conversation may bring good news.
                </p>
                <button class="mt-auto w-max px-5 py-2 bg-white text-astro-orange border border-orange-200 rounded-xl text-sm font-medium hover:bg-orange-100 transition-colors relative z-10">
                  Read Full Horoscope &rarr;
                </button>
                <!-- Decorative background pattern -->
                <div class="absolute right-0 top-0 opacity-10 pointer-events-none w-32 h-32" style="background-image: radial-gradient(circle, #ea580c 2px, transparent 2.5px); background-size: 10px 10px;"></div>
              </div>
            </div>

          </div>

          <!-- Recommended Astrologers -->
          <div class="pt-8 lg:pt-10">
            <div class="flex justify-between items-end mb-4">
              <h3 class="text-xl font-bold text-gray-800">Recommended Astrologers</h3>
              <a href="/Consultations/Talk-to-Astrologer" class="text-sm font-medium text-astro-orange hover:text-orange-700">View All &rarr;</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <!-- Astro 1 -->
              <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm relative hover:border-orange-200 transition-colors">
                <button class="absolute top-3 right-3 text-gray-300 hover:text-red-500 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </button>
                <div class="flex flex-col items-center text-center">
                  <div class="relative mb-2">
                    <img src="/assets/images/astrologers/astro_2.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm" alt="Astrologer" onerror="this.src='https://placehold.co/100x100'">
                    <span class="absolute -top-2 left-1/2 -translate-x-1/2 bg-green-100 text-green-700 text-[9px] font-bold px-1.5 py-0.5 rounded-full border border-green-200 flex items-center gap-1 whitespace-nowrap">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Online
                    </span>
                  </div>
                  <h4 class="font-bold text-gray-900 text-sm">Pandit Rajesh Sharma</h4>
                  <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                    <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="font-bold text-gray-700">4.8</span> (1.2k)
                  </div>
                  <p class="text-xs text-gray-500 mb-2 truncate w-full">Vedic Astrology</p>
                  <p class="font-bold text-gray-900 text-sm mb-3">₹30/min</p>
                  <button class="w-full flex items-center justify-center gap-1.5 border border-orange-200 text-astro-orange hover:bg-orange-50 py-1.5 rounded-xl text-xs font-semibold transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> Talk Now
                  </button>
                </div>
              </div>

              <!-- Astro 2 -->
              <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm relative hover:border-orange-200 transition-colors">
                <button class="absolute top-3 right-3 text-red-500 hover:text-red-600 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </button>
                <div class="flex flex-col items-center text-center">
                  <div class="relative mb-2">
                    <img src="/assets/images/astrologers/astro_1.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm" alt="Astrologer" onerror="this.src='https://placehold.co/100x100'">
                    <span class="absolute -top-2 left-1/2 -translate-x-1/2 bg-green-100 text-green-700 text-[9px] font-bold px-1.5 py-0.5 rounded-full border border-green-200 flex items-center gap-1 whitespace-nowrap">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Online
                    </span>
                  </div>
                  <h4 class="font-bold text-gray-900 text-sm">Acharya Neelima</h4>
                  <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                    <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="font-bold text-gray-700">4.9</span> (2.1k)
                  </div>
                  <p class="text-xs text-gray-500 mb-2 truncate w-full">Numerology</p>
                  <p class="font-bold text-gray-900 text-sm mb-3">₹40/min</p>
                  <button class="w-full flex items-center justify-center gap-1.5 border border-red-200 text-red-500 hover:bg-red-50 py-1.5 rounded-xl text-xs font-semibold transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg> Chat Now
                  </button>
                </div>
              </div>

              <!-- Astro 3 -->
              <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm relative hover:border-orange-200 transition-colors">
                <button class="absolute top-3 right-3 text-red-500 hover:text-red-600 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </button>
                <div class="flex flex-col items-center text-center">
                  <div class="relative mb-2">
                    <img src="/assets/images/astrologers/astro_3.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm" alt="Astrologer" onerror="this.src='https://placehold.co/100x100'">
                    <span class="absolute -top-2 left-1/2 -translate-x-1/2 bg-green-100 text-green-700 text-[9px] font-bold px-1.5 py-0.5 rounded-full border border-green-200 flex items-center gap-1 whitespace-nowrap">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Online
                    </span>
                  </div>
                  <h4 class="font-bold text-gray-900 text-sm">Dr. Vikram Joshi</h4>
                  <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                    <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="font-bold text-gray-700">4.7</span> (980)
                  </div>
                  <p class="text-xs text-gray-500 mb-2 truncate w-full">Career & Finance</p>
                  <p class="font-bold text-gray-900 text-sm mb-3">₹35/min</p>
                  <button class="w-full flex items-center justify-center gap-1.5 border border-purple-200 text-purple-600 hover:bg-purple-50 py-1.5 rounded-xl text-xs font-semibold transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg> Video Call
                  </button>
                </div>
              </div>

              <!-- Astro 4 -->
              <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm relative hover:border-orange-200 transition-colors">
                <button class="absolute top-3 right-3 text-gray-300 hover:text-red-500 transition-colors">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </button>
                <div class="flex flex-col items-center text-center">
                  <div class="relative mb-2">
                    <img src="/assets/images/astrologers/astro_4.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-sm" alt="Astrologer" onerror="this.src='https://placehold.co/100x100'">
                    <span class="absolute -top-2 left-1/2 -translate-x-1/2 bg-green-100 text-green-700 text-[9px] font-bold px-1.5 py-0.5 rounded-full border border-green-200 flex items-center gap-1 whitespace-nowrap">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Online
                    </span>
                  </div>
                  <h4 class="font-bold text-gray-900 text-sm">Acharya Devendra</h4>
                  <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                    <svg class="w-3.5 h-3.5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <span class="font-bold text-gray-700">4.8</span> (1.5k)
                  </div>
                  <p class="text-xs text-gray-500 mb-2 truncate w-full">Love & Relationship</p>
                  <p class="font-bold text-gray-900 text-sm mb-3">₹30/min</p>
                  <button class="w-full flex items-center justify-center gap-1.5 border border-green-200 text-green-600 hover:bg-green-50 py-1.5 rounded-xl text-xs font-semibold transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> Book Now
                  </button>
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- RIGHT COLUMN (30%) -->
        <div class="xl:col-span-3 space-y-6 lg:space-y-8 sticky top-0 self-start">
          
          <!-- Wallet Balance -->
          <div class="bg-gradient-to-br from-[#fff7ed] to-[#fff1f2] p-5 lg:p-6 rounded-3xl border border-orange-50 shadow-sm relative overflow-hidden flex flex-col justify-center">
            <!-- Optional subtle decoration -->
            <div class="absolute right-0 bottom-0 w-32 h-32 bg-orange-100 rounded-full blur-3xl opacity-50"></div>
            
            <div class="relative z-10 flex items-center gap-3 mb-3">
              <div class="w-12 h-12 bg-[#ffe4c4] rounded-2xl flex items-center justify-center text-[#ea580c] shadow-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
              </div>
              <div class="text-left">
                 <h4 class="text-[#475569] text-[13px] font-semibold">Wallet Balance</h4>
                 <p id="wallet-balance" class="text-[2rem] lg:text-[2.2rem] font-bold text-[#1e293b] leading-none mt-1">₹0</p>
              </div>
            </div>
            
            <a href="/Dashboard/Wallet-and-Payments" class="w-full mt-3 py-2.5 bg-white text-[#ea580c] border border-[#f97316] rounded-xl text-sm font-bold hover:bg-orange-50 transition-colors shadow-sm relative z-10 text-center block">Add Money</a>
          </div>

          <!-- Stats -->
          <div class="bg-white rounded-3xl border border-gray-100 shadow-sm py-5 px-2 flex justify-between items-center text-center">
            
            <div class="flex-1 px-1 flex flex-col items-center justify-center">
              <svg class="w-6 h-6 text-red-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              <p id="stat-upcoming" class="font-bold text-[#1e293b] text-xl leading-none mb-1">0</p>
              <p class="text-[11px] text-[#64748b] font-medium mt-1">Upcoming</p>
            </div>
            
            <div class="flex-1 px-1 border-x border-gray-50 flex flex-col items-center justify-center">
              <svg class="w-6 h-6 text-red-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
              <p id="stat-favorites" class="font-bold text-[#1e293b] text-xl leading-none mb-1">0</p>
              <p class="text-[11px] text-[#64748b] font-medium mt-1">Favorites</p>
            </div>
            
            <div class="flex-1 px-1 flex flex-col items-center justify-center">
              <svg class="w-6 h-6 text-red-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
              <p id="stat-consultations" class="font-bold text-[#1e293b] text-xl leading-none mb-1">0</p>
              <p class="text-[11px] text-[#64748b] font-medium mt-1">Consultations</p>
            </div>
            
          </div>

          <!-- Recent Consultations -->
          <div>
            <div class="flex justify-between items-end mb-4">
              <h3 class="text-lg font-bold text-gray-800">Recent Consultations</h3>
              <a href="/Dashboard/My-Consultations" class="text-xs font-medium text-astro-orange hover:text-orange-700">View All &rarr;</a>
            </div>
            <div id="recent-consultations-container" class="bg-white p-4 rounded-3xl border border-gray-100 shadow-sm space-y-4">
              <!-- Loading Skeleton -->
              <div class="animate-pulse flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                <div class="flex-1">
                  <div class="h-3 bg-gray-200 rounded w-24 mb-1"></div>
                  <div class="h-2 bg-gray-200 rounded w-16"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Promo Card -->
          <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-6 rounded-3xl border border-orange-100 shadow-sm relative overflow-hidden text-gray-900 mt-auto">
             <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/stardust.png');"></div>
             <!-- Yantra/Diya placeholder graphic -->
             <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-orange-400 rounded-full opacity-10 blur-3xl"></div>
             
             <div class="relative z-10">
               <h3 class="text-xl font-serif font-bold mb-2 text-[#1e293b]">Get Personalized<br>Remedies</h3>
               <p class="text-xs text-gray-600 mb-6">Based on your birth chart</p>
               <button class="bg-astro-orange hover:bg-orange-700 text-white px-5 py-2 rounded-xl text-xs font-bold transition-colors shadow-sm">Explore Now &rarr;</button>
             </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <script src="/js/api.js"></script>
  <script>
    // Simple mobile sidebar toggle logic
    document.addEventListener('DOMContentLoaded', () => {
      const openBtn = document.getElementById('open-sidebar');
      const closeBtn = document.getElementById('close-sidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobile-overlay');

      function openSidebar() {
        if(sidebar) sidebar.classList.remove('-translate-x-full');
        if(overlay) overlay.classList.remove('hidden');
      }

      function closeSidebar() {
        if(sidebar) sidebar.classList.add('-translate-x-full');
        if(overlay) overlay.classList.add('hidden');
      }

      if(openBtn) openBtn.addEventListener('click', openSidebar);
      if(closeBtn) closeBtn.addEventListener('click', closeSidebar);
      if(overlay) overlay.addEventListener('click', closeSidebar);
      
      // Load Dashboard Data
      loadDashboardData();
    });

    async function loadDashboardData() {
      try {
        const res = await window.api.get('/user/dashboard');
        
        if (res && res.data) {
          const data = res.data;
          
          // Welcome Name
          if (data.user && data.user.name) {
            const firstName = data.user.name.split(' ')[0];
            document.getElementById('welcome-name').innerHTML = `${firstName} <span class="text-3xl">👋</span>`;
            
            // Sync Header Profile Avatar
            const headerAvatar = document.getElementById('header-avatar');
            const headerUsername = document.getElementById('header-username');
            if (headerUsername) headerUsername.innerText = firstName;
            if (headerAvatar) {
              if (data.user.profile_image) {
                headerAvatar.src = window.api.resolveImageUrl ? window.api.resolveImageUrl(data.user.profile_image) : data.user.profile_image;
              } else {
                headerAvatar.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(firstName)}&background=ea580c&color=fff`;
              }
            }
          }

          // Wallet Balance
          if (data.wallet) {
            const bal = parseFloat(data.wallet.balance || 0).toFixed(2);
            document.getElementById('wallet-balance').textContent = `₹${bal}`;
          }

          // Stats
          if (data.stats) {
            document.getElementById('stat-upcoming').textContent = data.stats.upcoming || 0;
            document.getElementById('stat-consultations').textContent = data.stats.total_bookings || 0;
            // Since dashboard API doesn't return favorites specifically, let's leave it as 0 or query it if we had to.
          }

          // Recent Consultations
          const recentContainer = document.getElementById('recent-consultations-container');
          const recents = data.consultations?.recent || [];
          if (recents.length > 0) {
            recentContainer.innerHTML = recents.map(item => `
              <div class="flex items-center gap-3">
                <img src="${item.astrologer_image || '/lady.png'}" alt="Astro" class="w-10 h-10 rounded-full object-cover" onerror="this.src='https://placehold.co/50x50'">
                <div class="flex-1 min-w-0">
                  <h5 class="text-sm font-bold text-gray-900 truncate">${item.astrologer_name || 'Astrologer'}</h5>
                  <p class="text-[10px] text-gray-500 truncate">${new Date(item.booking_date).toLocaleDateString()} &nbsp;&bull;&nbsp; ${item.consultation_type}</p>
                </div>
                <span class="px-2 py-1 ${item.status === 'completed' ? 'bg-green-50 text-green-600' : 'bg-orange-50 text-orange-600'} text-[9px] font-bold rounded-md whitespace-nowrap capitalize">${item.status}</span>
              </div>
            `).join('');
          } else {
            recentContainer.innerHTML = `<p class="text-sm text-gray-500 text-center py-4">No recent consultations found.</p>`;
          }

          // Upcoming Consultation
          const upcomingContainer = document.getElementById('upcoming-consultation-container');
          
          // Since the API only returned counts for upcoming, let's see if we can use my-consultations to get the real upcoming item if we really wanted to, or rely on if recent contains an upcoming.
          // Let's filter recents for an upcoming one
          const upcomingItem = recents.find(i => i.status === 'pending' || i.status === 'confirmed');
          if (upcomingItem) {
            upcomingContainer.classList.remove('justify-center', 'items-center');
            upcomingContainer.innerHTML = `
                <div class="flex items-start gap-4 mb-4">
                  <img src="${upcomingItem.astrologer_image || '/lady.png'}" class="w-16 h-16 rounded-2xl object-cover" onerror="this.src='https://placehold.co/100x100'">
                  <div class="flex-1">
                    <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700 mb-1 border border-green-200">
                      <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> ${upcomingItem.status}
                    </span>
                    <h4 class="font-bold text-gray-900 text-lg">${upcomingItem.astrologer_name}</h4>
                  </div>
                </div>
                <div class="flex items-center gap-4 text-xs font-medium text-gray-600 mb-5 bg-gray-50 p-2.5 rounded-xl">
                  <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> ${new Date(upcomingItem.booking_date).toLocaleDateString()}</div>
                  <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> ${upcomingItem.start_time}</div>
                  <div class="flex items-center gap-1.5"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg> ${upcomingItem.consultation_type}</div>
                </div>
                <div class="flex gap-3 mt-auto">
                  <a href="/Dashboard/My-Consultations" class="text-center flex-1 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 py-2.5 rounded-xl text-sm font-semibold transition-colors">View Details</a>
                  <a href="${upcomingItem.consultation_type === 'chat' ? '/Chat/Chat?consultation_id=' + upcomingItem.id : (upcomingItem.consultation_type === 'video' ? '/Video/Video-Consultation?consultation_id=' + upcomingItem.id : (upcomingItem.consultation_type === 'audio' || upcomingItem.consultation_type === 'call' ? 'javascript:alert(\\'Dedicated Audio/Call page does not exist yet.\\')' : '/Dashboard/My-Consultations'))}" class="text-center flex-1 bg-astro-orange hover:bg-orange-700 text-white py-2.5 rounded-xl text-sm font-semibold shadow-sm shadow-orange-200 transition-colors">Join Now</a>
                </div>
            `;
          } else {
            upcomingContainer.innerHTML = `
              <div class="text-center py-6">
                <div class="w-16 h-16 bg-orange-50 text-orange-400 rounded-full flex items-center justify-center mx-auto mb-3">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h4 class="text-gray-900 font-bold mb-1">No upcoming consultations</h4>
                <p class="text-xs text-gray-500 mb-4">Book a session to get guidance from our experts.</p>
                <a href="/Dashboard/Talk-to-Astrologer" class="inline-block px-5 py-2 bg-astro-orange text-white text-xs font-bold rounded-lg shadow-sm">Book Now</a>
              </div>
            `;
          }
        }
      } catch (error) {
        console.error("Dashboard Load Error:", error);
      }
    }
  </script>
</body>
</html>
