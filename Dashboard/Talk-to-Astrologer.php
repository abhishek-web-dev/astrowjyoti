<?php
require_once __DIR__ . '/../auth_guard.php';

// Talk-to-Astrologer.php (Dashboard)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talk to Astrologer - Astrowjyoti Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
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
      
      <!-- HERO BANNER -->
      <div class="w-full bg-[#fdf5e6] rounded-3xl overflow-hidden mb-8 relative border border-orange-100 flex shadow-sm h-[200px]">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: url('/Auth/Dashboard-banner.png'); background-size: cover; background-position: right; mix-blend-mode: multiply;"></div>
        
        <div class="hidden md:block w-1/3 relative z-10 h-full overflow-hidden">
          <img src="/Talk-to-Astrologer-banner.png" alt="Astrologer" class="w-full h-full object-cover object-left-top scale-110">
          <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#fdf5e6]"></div>
        </div>
        
        <div class="relative z-20 flex-1 p-6 md:p-8 flex flex-col justify-center">
          <h1 class="text-3xl md:text-4xl font-serif font-bold text-[#1e293b] mb-2">
            Talk to Expert <span class="text-astro-orange">Astrologers</span>
          </h1>
          <p class="text-sm md:text-base text-gray-600 font-medium mb-6 max-w-xl">
            Get personalized guidance for your life's important questions from verified and experienced astrologers.
          </p>
          
          <div class="flex items-center gap-4 md:gap-8">
            <div class="flex items-center gap-2 text-sm font-semibold text-gray-800">
              <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-astro-orange shadow-sm border border-orange-100">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
              </div>
              Audio Call
            </div>
            <div class="flex items-center gap-2 text-sm font-semibold text-gray-800">
              <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-astro-orange shadow-sm border border-orange-100">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
              </div>
              Chat
            </div>
            <div class="flex items-center gap-2 text-sm font-semibold text-gray-800">
              <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-astro-orange shadow-sm border border-orange-100">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
              </div>
              Video Call
            </div>
          </div>
        </div>
      </div>

      <!-- MAIN CONTENT AREA -->
      <div class="flex flex-col xl:flex-row gap-8">
        
        <!-- LEFT: FILTER SIDEBAR -->
        <div class="w-full xl:w-64 shrink-0 xl:sticky xl:top-0 xl:self-start xl:max-h-[calc(100vh-8rem)] xl:overflow-y-auto hide-scrollbar xl:-mt-2 xl:pt-2">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-base font-bold text-[#1e293b]">Filters</h2>
            <button id="clear_all_filters" class="text-xs font-semibold text-astro-orange hover:text-orange-600">Clear All</button>
          </div>

          <div class="mb-6 relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" placeholder="Search by name..." class="w-full pl-9 pr-4 py-2 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none shadow-sm transition-colors">
          </div>

          <div class="space-y-6">
            <div class="filter-group" id="consultation_type_group">
              <h3 class="text-sm font-bold text-gray-800 mb-3">Consultation Type</h3>
              <div class="space-y-2">
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input type="radio" name="consultation_type" value="" class="hidden filter-input" checked>
                  <div class="w-4 h-4 rounded border flex items-center justify-center border-gray-300 text-transparent transition-colors box-indicator">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  </div>
                  <span class="text-sm text-gray-600 font-semibold group-hover:text-gray-800 transition-colors label-text">All Types</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input type="radio" name="consultation_type" value="Chat" class="hidden filter-input">
                  <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  </div>
                  <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Chat</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input type="radio" name="consultation_type" value="Audio Call" class="hidden filter-input">
                  <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  </div>
                  <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Audio Call</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input type="radio" name="consultation_type" value="Video Call" class="hidden filter-input">
                  <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  </div>
                  <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Video Call</span>
                </label>
              </div>
            </div>

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
<div class="astro-grid-layout" id="astrologer-grid">
  <!-- Dynamic Content loaded via astrologer-list.js -->
</div>


        </div>
      </div>
    </div>
  </main>
  
  <script src="/js/api.js"></script>
  <script src="/js/astrologer-list.js"></script>
  <script>
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
  </script>
<script src="/js/api.js"></script>
<script src="/js/astrologer-list.js"></script>
</body>
</html>
