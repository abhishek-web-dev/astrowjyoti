<?php
require_once __DIR__ . '/../auth_guard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Consultation - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Background subtle pattern for provider ready state */
    .bg-astrology-pattern {
        background-color: #fff7ed;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23fdba74' fill-opacity='0.15' fill-rule='evenodd'%3E%3Ccircle cx='50' cy='50' r='40' fill='none' stroke='%23fdba74' stroke-width='1'/%3E%3Ccircle cx='50' cy='50' r='30' fill='none' stroke='%23fdba74' stroke-width='0.5'/%3E%3Cpath d='M50 10 L50 90 M10 50 L90 50' stroke='%23fdba74' stroke-width='0.5'/%3E%3C/g%3E%3C/svg%3E");
        background-position: center;
        background-size: 500px 500px;
    }
  </style>
</head>
<body class="bg-[#faf8f5] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include __DIR__ . '/../Dashboard/sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#faf8f5]">
    
    <?php include __DIR__ . '/../Dashboard/header.php'; ?>

    <!-- Full Height Content -->
    <div class="flex-1 p-4 sm:p-6 lg:p-8 flex flex-col h-full overflow-hidden min-h-0 relative max-w-[1600px] mx-auto w-full">
      
      <!-- Back Link -->
      <a href="/Dashboard/My-Consultations" class="inline-flex items-center text-sm font-bold text-astro-orange hover:text-orange-700 transition-colors mb-4 shrink-0 w-max">
        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Back to Consultations
      </a>

      <!-- Full Page Loading State -->
      <div id="page-loading" class="absolute inset-0 flex flex-col items-center justify-center bg-[#faf8f5] z-50">
          <svg class="w-10 h-10 text-astro-orange animate-spin mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
          <p class="text-gray-500 font-medium">Initializing Workspace...</p>
      </div>

      <!-- No Session State (Landing State) -->
      <div id="no-session-workspace" class="hidden flex-1 flex flex-col min-h-0 h-full overflow-y-auto hide-scrollbar">
          <div class="mb-6 shrink-0">
              <h2 class="text-2xl font-bold text-gray-900">Video Consultation</h2>
              <p class="text-sm text-gray-500 mt-1">Connect with expert astrologers through a private video consultation.</p>
          </div>
          
          <!-- MAIN CONTENT AREA -->
          <div class="flex flex-col xl:flex-row gap-8 pb-8">
            
            <!-- LEFT: FILTER SIDEBAR -->
            <div class="w-full xl:w-64 shrink-0 xl:sticky xl:top-0 xl:self-start xl:max-h-[calc(100vh-8rem)] xl:overflow-y-auto hide-scrollbar xl:-mt-2 xl:pt-2 bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
              <div class="flex justify-between items-center mb-4">
                <h2 class="text-base font-bold text-[#1e293b]">Filters</h2>
                <button id="clear_all_filters" class="text-xs font-semibold text-astro-orange hover:text-orange-600">Clear All</button>
              </div>

              <div class="mb-6 relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" placeholder="Search by name..." class="w-full pl-9 pr-4 py-2 bg-[#f9fafb] border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none shadow-sm transition-colors">
              </div>

              <div class="space-y-6">
                <!-- Specialization Filter -->
                <div class="filter-group" id="specialization_group">
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Specialization</h3>
                  <div class="space-y-2 max-h-48 overflow-y-auto hide-scrollbar pr-2">
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="" class="hidden filter-input" checked>
                      <div class="w-4 h-4 rounded border flex items-center justify-center border-gray-300 text-transparent transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 font-semibold group-hover:text-gray-800 transition-colors label-text">All Specializations</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Love & Relationship" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Love & Relationship</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Career & Finance" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Career & Finance</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Marriage" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Marriage</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Health" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Health</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Education" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Education</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Business" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Business</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Numerology" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Numerology</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Vastu" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Vastu</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Kundli Reading" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Kundli Reading</span>
                    </label>
                  </div>
                </div>

                <!-- Language Filter -->
                <div class="filter-group" id="language_group">
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Language</h3>
                  <div class="space-y-2">
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="" class="hidden filter-input" checked>
                      <div class="w-4 h-4 rounded border flex items-center justify-center border-gray-300 text-transparent transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 font-semibold group-hover:text-gray-800 transition-colors label-text">All Languages</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="Hindi" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Hindi</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="English" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">English</span>
                    </label>
                  </div>
                </div>

                <!-- Availability -->
                <div>
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Availability</h3>
                  <label class="flex items-center justify-between cursor-pointer group" id="availability_toggle_label">
                    <span class="text-sm text-gray-700 font-medium">Available Now</span>
                    <input type="checkbox" id="availability_toggle" class="hidden filter-input" checked>
                    <div id="availability_track" class="relative inline-flex items-center h-5 rounded-full w-9 transition-colors bg-astro-orange">
                      <span id="availability_knob" class="translate-x-4 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px ml-1 shadow"></span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <!-- RIGHT: ASTROLOGER LIST -->
            <div class="flex-1">
              <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h2 class="text-xl font-bold text-[#1e293b]">Our Expert Astrologers <span id="astrologer-count" class="text-gray-400 font-medium text-lg"></span></h2>
                
                <div class="flex items-center gap-2">
                  <span class="text-sm text-gray-500 font-medium">Sort by:</span>
                  <div class="relative">
                    <select class="appearance-none bg-white border border-gray-200 text-gray-700 text-sm rounded-lg pl-3 pr-8 py-1.5 outline-none focus:border-astro-orange font-semibold shadow-sm cursor-pointer">
                      <option>Most Popular</option>
                      <option>Experience: High to Low</option>
                      <option>Price: Low to High</option>
                      <option>Price: High to Low</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </div>
              </div>
              <style>
                .astro-grid-layout {
                  display: grid;
                  grid-template-columns: repeat(3, minmax(0, 1fr));
                  gap: 16px;
                }
                @media (max-width: 1280px) {
                  .astro-grid-layout {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                  }
                }
                @media (max-width: 640px) {
                  .astro-grid-layout {
                    grid-template-columns: minmax(0, 1fr);
                  }
                }
                .hide-scrollbar::-webkit-scrollbar { display: none; }
                .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
              </style>
              <div class="astro-grid-layout" id="astrologer-grid">
                <!-- Dynamic Content loaded via video-astrologer-list.js -->
              </div>
            </div>
          </div>
      </div>

      <!-- Missing/Invalid Session State -->
      <div id="invalid-session-workspace" class="hidden flex-1 flex flex-col items-center justify-center text-center">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 max-w-md w-full">
              <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-4 text-red-500">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
              </div>
              <h3 id="invalid-title" class="text-xl font-bold text-gray-900 mb-2">Video consultation session not found</h3>
              <p id="invalid-msg" class="text-sm text-gray-500 mb-6">Please open a valid video consultation from My Consultations.</p>
              <a href="/Dashboard/My-Consultations" class="inline-flex items-center justify-center w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-xl transition-colors shadow-md">
                  Go to My Consultations
              </a>
          </div>
      </div>

      <!-- 2-Column Layout Grid (Valid Workspace) -->
      <div id="valid-session-workspace" class="hidden flex-1 flex flex-col lg:flex-row gap-6 min-h-0">
        
        <!-- LEFT COLUMN: VIDEO AREA -->
        <div class="flex-1 flex flex-col min-h-0 gap-4 w-full lg:w-[68%]">
          
          <!-- Session Header (Matched to reference) -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 lg:p-5 shrink-0 flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <img id="video-astro-img" src="/lady.png" alt="Astrologer" class="w-14 h-14 rounded-full object-cover border border-gray-100">
                    <div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white rounded-full"></div>
                </div>
                <div>
                    <div class="flex items-center gap-3">
                        <h3 class="text-lg font-bold text-gray-900" id="video-astro-name">Astrologer Name</h3>
                        <span id="video-status-badge" class="flex items-center gap-1.5 px-2.5 py-1 bg-green-50 text-green-700 rounded-full text-xs font-bold border border-green-100/50">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            <span id="video-status-text">Session Ready</span>
                        </span>
                    </div>
                    <div class="flex items-center gap-2 mt-0.5">
                        <p class="text-[13px] text-gray-500" id="video-astro-spec">Vedic Astrology</p>
                        <span class="text-gray-300">•</span>
                        <p class="text-[13px] font-bold text-gray-800"><span class="text-yellow-500">★</span> <span id="video-astro-rating">4.9</span> <span class="text-gray-500 font-normal">(<span id="video-astro-reviews">2.8k</span>)</span></p>
                    </div>
                    <p class="text-[13px] text-gray-500 mt-0.5" id="video-status-msg">Your astrologer is ready for the session</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3 bg-orange-50/50 p-2.5 rounded-xl border border-orange-100/50">
                <div class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center text-astro-orange shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <h4 class="text-[13px] font-bold text-gray-900">Video Consultation</h4>
                    <p class="text-[11px] text-gray-500 font-medium">1:1 Live Session</p>
                </div>
            </div>
          </div>
          
          <!-- Main Video Container -->
          <div id="video-container" class="flex-1 rounded-2xl shadow-sm border border-orange-100/60 overflow-hidden relative min-h-[450px] flex flex-col group bg-astrology-pattern transition-colors duration-500">
            
            <!-- Provider-ready badge -->
            <div id="provider-badge" class="absolute top-5 right-5 bg-orange-100/80 backdrop-blur-sm text-orange-700 px-3.5 py-1.5 rounded-full text-[11px] font-bold flex items-center gap-1.5 shadow-sm border border-orange-200/50 z-20">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Provider-ready
            </div>
            
            <!-- Waiting / Ready State -->
            <div id="video-state-layer" class="absolute inset-0 flex items-center justify-center flex-col z-10 p-6 text-center transition-opacity duration-300 pb-20">
               
               <!-- Centered Avatar -->
               <div class="relative mb-6 shadow-2xl rounded-full">
                   <img id="state-astro-img" src="/lady.png" alt="Astrologer" class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-[6px] border-white/80 backdrop-blur-sm">
                   <div class="absolute bottom-2 right-3 w-7 h-7 bg-green-500 border-[3px] border-white rounded-full shadow-md"></div>
               </div>
               
               <h2 id="video-state-astro-name" class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Dr. Ananya Sharma</h2>
               <h3 id="video-state-title" class="text-lg md:text-xl font-bold text-gray-800 mb-6 font-serif">Your video consultation is ready</h3>
               
               <div id="video-state-cam-badge" class="bg-green-100/90 backdrop-blur-sm text-green-700 px-5 py-2 rounded-full text-[13px] font-bold flex items-center gap-2 mb-8 shadow-sm border border-green-200/50">
                   <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                   Camera and microphone are ready
               </div>
               
               <button id="btn-join-session" onclick="joinSession()" class="bg-[#ea580c] hover:bg-[#c2410c] text-white font-bold text-base md:text-lg py-3.5 px-8 md:px-12 rounded-xl transition-all shadow-xl shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 flex items-center gap-3">
                 <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                 Join Video Consultation
               </button>
            </div>

            <!-- Active Video Stream Placeholder -->
            <div id="video-stream-layer" class="hidden absolute inset-0 w-full h-full bg-gray-900 z-10">
              <div class="absolute inset-0 flex items-center justify-center flex-col text-gray-500">
                  <svg class="w-16 h-16 mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                  <p class="text-sm font-medium uppercase tracking-wider">Provider Stream Active</p>
              </div>
              
              <!-- User Self Preview -->
              <div id="self-preview" class="absolute top-6 right-6 w-32 h-44 md:w-44 md:h-60 bg-gray-800 rounded-2xl overflow-hidden shadow-2xl border-2 border-white/20 z-20">
                <div class="absolute inset-0 flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1.5 rounded-lg flex items-center gap-2">
                  You
                </div>
              </div>
  
              <!-- Astrologer Name Badge -->
              <div class="absolute bottom-28 left-8 bg-black/60 backdrop-blur-md text-white text-sm font-bold px-5 py-2.5 rounded-xl flex items-center gap-3 z-20 shadow-xl border border-white/10">
                <div class="w-2.5 h-2.5 rounded-full bg-green-400 animate-pulse"></div>
                <span id="video-stream-astro-name">Dr. Ananya Sharma</span>
              </div>
            </div>
            
            <!-- Controls Bar (Floats on top of everything) -->
            <div class="absolute bottom-6 inset-x-0 mx-auto w-max bg-white/95 backdrop-blur-md rounded-2xl shadow-xl border border-gray-100 px-6 py-3 flex items-center gap-6 sm:gap-8 z-30 transition-transform">
                
                <button onclick="if(window.showNotification) window.showNotification('Microphone muted', 'info')" class="flex flex-col items-center gap-1.5 text-gray-600 hover:text-gray-900 transition-colors group">
                    <div class="p-2 rounded-xl group-hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide">Mic</span>
                </button>
                
                <button onclick="if(window.showNotification) window.showNotification('Camera disabled', 'info')" class="flex flex-col items-center gap-1.5 text-gray-600 hover:text-gray-900 transition-colors group">
                    <div class="p-2 rounded-xl group-hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide">Camera</span>
                </button>
                
                <button onclick="if(window.showNotification) window.showNotification('Speaker adjusted', 'info')" class="flex flex-col items-center gap-1.5 text-gray-600 hover:text-gray-900 transition-colors group">
                    <div class="p-2 rounded-xl group-hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5 19h4.586a2 2 0 001.414-.586l4.829-4.829A2 2 0 0017 12.172V7.828a2 2 0 00-.586-1.414l-4.829-4.829A2 2 0 0010.172 1H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide">Speaker</span>
                </button>
                
                <button onclick="if(window.showNotification) window.showNotification('Fullscreen mode', 'info')" class="flex flex-col items-center gap-1.5 text-gray-600 hover:text-gray-900 transition-colors group">
                    <div class="p-2 rounded-xl group-hover:bg-gray-100 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide">Fullscreen</span>
                </button>
                
                <div class="w-px h-10 bg-gray-200 mx-1 sm:mx-3"></div>
                
                <button onclick="confirmEndSession()" class="flex flex-col items-center gap-1.5 text-red-500 hover:text-red-600 transition-colors group">
                    <div class="w-12 h-12 rounded-full bg-red-500 group-hover:bg-red-600 transition-colors flex items-center justify-center text-white shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.516l2.257-1.13a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-wide mt-0.5">Leave Call</span>
                </button>
            </div>
          </div>
        </div>
        
        <!-- RIGHT COLUMN: DETAILS, ASTRO INFO, ACTIONS -->
        <div class="w-full lg:w-[32%] flex flex-col gap-4 min-h-0 h-full overflow-y-auto pb-6 hide-scrollbar">
          
          <!-- Session Details -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 shrink-0">
            <div class="flex justify-between items-center mb-5">
                <h4 class="font-bold text-gray-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-astro-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Session Details
                </h4>
                <span class="bg-green-50 text-green-700 text-[11px] font-bold px-3 py-1 rounded-full border border-green-100" id="dtl-badge">Upcoming Session</span>
            </div>
            
            <div class="space-y-4 text-[13px]">
              <div class="flex justify-between items-center">
                <span class="text-gray-500 flex items-center gap-2.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Date
                </span>
                <span id="dtl-date" class="font-semibold text-gray-900">-</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-500 flex items-center gap-2.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Time
                </span>
                <span id="dtl-time" class="font-semibold text-gray-900">-</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-500 flex items-center gap-2.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    Duration
                </span>
                <span id="dtl-duration" class="font-semibold text-gray-900">-</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-500 flex items-center gap-2.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    Consultation Type
                </span>
                <span class="font-semibold text-gray-900">Video Consultation</span>
              </div>
              <div class="flex justify-between items-center pt-2 mt-2 border-t border-gray-50">
                <span class="text-gray-500 flex items-center gap-2.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Status
                </span>
                <span id="dtl-status" class="font-bold text-green-600 flex items-center gap-1.5 capitalize"><span class="w-2 h-2 rounded-full bg-green-500"></span> Ready</span>
              </div>
            </div>
          </div>

          <!-- Astrologer Info -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 shrink-0">
            <h3 class="font-bold text-gray-900 mb-5 flex items-center gap-2">
                <svg class="w-5 h-5 text-astro-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                Astrologer
            </h3>
            <div class="flex items-center gap-4 mb-5">
              <div class="relative shrink-0">
                <img id="info-astro-img" src="/lady.png" alt="Astrologer" class="w-14 h-14 rounded-full object-cover border border-gray-100">
                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
              </div>
              <div>
                <h4 id="info-astro-name" class="text-sm font-bold text-gray-900">Astrologer</h4>
                <div class="flex items-center text-xs font-bold text-gray-500 mt-1">
                  <span class="text-yellow-500 mr-1">★ <span id="info-astro-rating" class="text-gray-900">5.0</span></span>
                  <span class="font-normal text-gray-400">(<span id="info-astro-reviews">2.1k</span> reviews)</span>
                </div>
              </div>
            </div>
            <div class="text-[12px] space-y-3 pt-3 border-t border-gray-50">
                <div class="grid grid-cols-[100px_1fr] items-start gap-2">
                    <span class="text-gray-500 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        Specialization
                    </span>
                    <span id="info-astro-skills" class="font-semibold text-gray-900 leading-tight">-</span>
                </div>
                <div class="grid grid-cols-[100px_1fr] items-start gap-2">
                    <span class="text-gray-500 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        Languages
                    </span>
                    <span id="info-astro-langs" class="font-semibold text-gray-900 leading-tight">-</span>
                </div>
            </div>
          </div>

          <!-- Quick Actions -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 shrink-0">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-astro-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Quick Actions
            </h3>
            <div class="grid grid-cols-2 gap-3">
              <button onclick="if(window.showNotification) window.showNotification('This feature is coming soon.', 'info')" class="flex items-center justify-center gap-2 p-3 rounded-xl border border-orange-100 bg-white hover:bg-orange-50 text-astro-orange transition-colors">
                  <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                  <span class="text-xs font-semibold whitespace-nowrap">Share Chart</span>
              </button>
              
              <button onclick="if(window.showNotification) window.showNotification('This feature is coming soon.', 'info')" class="flex items-center justify-center gap-2 p-3 rounded-xl border border-orange-100 bg-white hover:bg-orange-50 text-astro-orange transition-colors">
                  <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                  <span class="text-xs font-semibold whitespace-nowrap">Request Notes</span>
              </button>
              
              <button onclick="if(window.showNotification) window.showNotification('Switched to Audio Only', 'info')" class="flex items-center justify-center gap-2 p-3 rounded-xl border border-orange-100 bg-white hover:bg-orange-50 text-astro-orange transition-colors">
                  <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                  <span class="text-xs font-semibold whitespace-nowrap">Audio Only</span>
              </button>
              
              <button onclick="if(window.showNotification) window.showNotification('Report dialog opened', 'info')" class="flex items-center justify-center gap-2 p-3 rounded-xl border border-red-100 bg-white hover:bg-red-50 text-red-500 transition-colors">
                  <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                  <span class="text-xs font-semibold whitespace-nowrap">Report Issue</span>
              </button>
            </div>
          </div>
          
          <!-- Chat Panel (Empty state) -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 shrink-0 flex flex-col min-h-[140px]">
             <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-astro-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Chat
             </h3>
             <div class="flex items-start gap-4">
                 <div class="w-10 h-10 bg-gray-50 border border-gray-100 rounded-full flex items-center justify-center text-gray-400 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                 </div>
                 <div>
                    <h4 class="text-[13px] font-bold text-gray-800 mb-0.5">No active chat</h4>
                    <p class="text-[11px] text-gray-500 leading-relaxed max-w-[200px]">This video consultation does not currently have a chat conversation.</p>
                 </div>
             </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </main>

  <script src="/js/api.js"></script>
  <script src="/js/video-astrologer-list.js"></script>
  <script>
    let activeSessionId = null;
    let sessionData = null;

    document.addEventListener('DOMContentLoaded', async () => {
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
      
      await initSession();
    });
    
    async function initSession() {
        const urlParams = new URLSearchParams(window.location.search);
        const consultationId = urlParams.get('consultation_id');
        let sessionId = urlParams.get('id');
        
        try {
            if (!consultationId && !sessionId) {
                showNoSessionState();
                return;
            }

            if (consultationId) {
                const res = await window.api.post('/video/sessions', { consultation_id: consultationId });
                if (res && res.data) {
                    sessionId = res.data.session_id || res.data.id;
                }
            }
            
            if (!sessionId) {
                showVideoError('No valid session ID or consultation ID provided.');
                return;
            }
            
            activeSessionId = sessionId;
            await loadSessionDetails();
            
        } catch (err) {
            console.error('Init session error', err);
            showVideoError(err.message || 'Failed to initialize session.');
        }
    }
    
    async function loadSessionDetails() {
        try {
            const res = await window.api.get(`/video/sessions/${activeSessionId}`);
            if (res && res.data) {
                sessionData = res.data;
                
                // Hide page loading, show valid workspace
                document.getElementById('page-loading').classList.add('hidden');
                document.getElementById('invalid-session-workspace').classList.add('hidden');
                const noSess = document.getElementById('no-session-workspace');
                if (noSess) noSess.classList.add('hidden');
                document.getElementById('valid-session-workspace').classList.remove('hidden');
                document.getElementById('valid-session-workspace').classList.add('flex');
                
                populateUI();
            }
        } catch (err) {
            console.error('Load details error', err);
            showVideoError('Failed to load session details.');
        }
    }
    
    function populateUI() {
        if (!sessionData) return;
        
        const astro = sessionData.astrologer || {};
        const name = astro.display_name || 'Astrologer';
        const img = astro.profile_image || '/lady.png';
        const spec = astro.specializations || 'Vedic Astrology';
        
        // Headers & Avatars
        document.getElementById('video-astro-name').innerText = name;
        document.getElementById('video-astro-img').src = img;
        document.getElementById('video-astro-spec').innerText = spec;
        
        document.getElementById('video-stream-astro-name').innerText = name;
        document.getElementById('state-astro-img').src = img;
        document.getElementById('video-state-astro-name').innerText = name;
        
        // Astrologer Info Card
        const infoAstroName = document.getElementById('info-astro-name');
        if (infoAstroName) {
            infoAstroName.innerText = name;
            document.getElementById('info-astro-img').src = img;
            const rating = parseFloat(astro.rating || 5.0).toFixed(1);
            document.getElementById('info-astro-rating').innerText = rating;
            document.getElementById('video-astro-rating').innerText = rating;
            
            const reviewsCount = '2.8k'; // Fallback if no real review count API
            document.getElementById('info-astro-reviews').innerText = reviewsCount;
            document.getElementById('video-astro-reviews').innerText = reviewsCount;
            
            document.getElementById('info-astro-skills').innerText = spec;
            document.getElementById('info-astro-langs').innerText = astro.languages || 'Hindi, English';
        }
        
        // Details Tab
        const dateObj = new Date(sessionData.scheduled_datetime);
        document.getElementById('dtl-date').innerText = dateObj.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
        document.getElementById('dtl-time').innerText = dateObj.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'}) + ' (IST)';
        document.getElementById('dtl-status').innerText = sessionData.status;
        if(sessionData.duration_minutes) {
             document.getElementById('dtl-duration').innerText = sessionData.duration_minutes + ' minutes';
        }
        
        const stateLayer = document.getElementById('video-state-layer');
        const streamLayer = document.getElementById('video-stream-layer');
        const stateTitle = document.getElementById('video-state-title');
        const btnJoin = document.getElementById('btn-join-session');
        const videoContainer = document.getElementById('video-container');
        
        const dtlBadge = document.getElementById('dtl-badge');
        const videoStatusText = document.getElementById('video-status-text');
        const videoStatusMsg = document.getElementById('video-status-msg');
        
        const providerBadge = document.getElementById('provider-badge');
        const stateCamBadge = document.getElementById('video-state-cam-badge');
        
        if (sessionData.status === 'scheduled') {
            stateLayer.classList.remove('hidden');
            streamLayer.classList.add('hidden');
            
            videoContainer.classList.add('bg-astrology-pattern');
            videoContainer.classList.remove('bg-gray-900');
            
            stateTitle.innerText = 'Your video consultation is ready';
            
            btnJoin.classList.remove('hidden');
            btnJoin.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg> Join Video Consultation';
            btnJoin.disabled = false;
            
            dtlBadge.innerText = 'Upcoming Session';
            dtlBadge.className = 'bg-green-50 text-green-700 text-[11px] font-bold px-3 py-1 rounded-full border border-green-100';
            
            videoStatusText.innerText = 'Session Ready';
            videoStatusMsg.innerText = 'Your astrologer is ready for the session';
            
            providerBadge.classList.remove('hidden');
            stateCamBadge.classList.remove('hidden');
        } 
        else if (sessionData.status === 'active') {
            stateLayer.classList.add('hidden');
            streamLayer.classList.remove('hidden');
            
            videoContainer.classList.remove('bg-astrology-pattern');
            videoContainer.classList.add('bg-gray-900');
            
            dtlBadge.innerText = 'Active Session';
            dtlBadge.className = 'bg-red-50 text-red-600 text-[11px] font-bold px-3 py-1 rounded-full border border-red-100 animate-pulse';
            
            videoStatusText.innerText = 'Active Now';
            videoStatusMsg.innerText = 'Session is currently in progress';
            
            providerBadge.classList.add('hidden');
        }
        else if (sessionData.status === 'ended' || sessionData.status === 'cancelled') {
            stateLayer.classList.remove('hidden');
            streamLayer.classList.add('hidden');
            
            videoContainer.classList.add('bg-astrology-pattern');
            videoContainer.classList.remove('bg-gray-900');
            
            stateTitle.innerText = `Session ${sessionData.status.charAt(0).toUpperCase() + sessionData.status.slice(1)}`;
            btnJoin.classList.add('hidden');
            
            dtlBadge.innerText = `${sessionData.status.charAt(0).toUpperCase() + sessionData.status.slice(1)}`;
            dtlBadge.className = 'bg-gray-100 text-gray-600 text-[11px] font-bold px-3 py-1 rounded-full border border-gray-200';
            
            videoStatusText.innerText = 'Session Ended';
            videoStatusMsg.innerText = 'This consultation is no longer active.';
            
            providerBadge.classList.add('hidden');
            stateCamBadge.classList.add('hidden');
        }
    }
    
    async function joinSession() {
        if (!activeSessionId) return;
        
        const btnJoin = document.getElementById('btn-join-session');
        const stateTitle = document.getElementById('video-state-title');
        
        btnJoin.disabled = true;
        btnJoin.innerText = 'Joining...';
        
        try {
            const res = await window.api.post(`/video/sessions/${activeSessionId}/join`, {});
            if (res && res.data) {
                sessionData = res.data;
                populateUI();
            }
        } catch (err) {
            console.error('Join error', err);
            btnJoin.disabled = false;
            btnJoin.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg> Join Video Consultation';
            stateTitle.innerText = 'Cannot Join Yet';
            stateTitle.classList.add('text-red-500');
            if(window.showNotification) window.showNotification(err.message || 'You can only join during the scheduled time window.', 'error');
        }
    }
    
    async function confirmEndSession() {
      if(!activeSessionId) return;
      if(confirm('Are you sure you want to end this consultation session?')) {
        try {
            await window.api.post(`/video/sessions/${activeSessionId}/leave`, {});
            window.location.href = '/Dashboard/My-Consultations';
        } catch (err) {
            console.error('Leave error', err);
            if(window.showNotification) window.showNotification('Failed to end session properly.', 'error');
            window.location.href = '/Dashboard/My-Consultations';
        }
      }
    }
    
    function showNoSessionState() {
        document.getElementById('page-loading').classList.add('hidden');
        document.getElementById('valid-session-workspace').classList.add('hidden');
        document.getElementById('invalid-session-workspace').classList.add('hidden');
        document.getElementById('no-session-workspace').classList.remove('hidden');
        document.getElementById('no-session-workspace').classList.add('flex');
    }

    function showVideoError(msg) {
        document.getElementById('page-loading').classList.add('hidden');
        document.getElementById('valid-session-workspace').classList.add('hidden');
        document.getElementById('no-session-workspace').classList.add('hidden');
        document.getElementById('invalid-session-workspace').classList.remove('hidden');
        document.getElementById('invalid-session-workspace').classList.add('flex');
        
        let title = 'Error';
        if (!msg || msg.includes('No valid session') || msg.includes('not found') || msg.includes('access denied')) {
            title = 'Video consultation session not found';
            msg = 'Please open a valid video consultation from My Consultations.';
        }
        
        document.getElementById('invalid-title').innerText = title;
        document.getElementById('invalid-msg').innerText = msg;
    }
  </script>
</body>
</html>
