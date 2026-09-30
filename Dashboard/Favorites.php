<?php
require_once __DIR__ . '/../auth_guard.php';

// Favorites.php (Dashboard)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Favorites - Astrowjyoti</title>
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
    
    .astro-grid-layout {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 20px;
    }
    @media (max-width: 1280px) {
      .astro-grid-layout {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }
    @media (max-width: 768px) {
      .astro-grid-layout {
        grid-template-columns: minmax(0, 1fr);
      }
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
      
      <!-- Main Layout -->
      <div class="max-w-[1400px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- LEFT COLUMN: Favorites List Area -->
        <div class="lg:col-span-8 flex flex-col gap-6">
          
          <!-- Page Header & Search -->
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
              <h1 class="text-2xl md:text-3xl font-bold text-[#111827] flex items-center gap-2">
                <svg class="w-8 h-8 text-red-500 fill-current" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                My Favorites
              </h1>
              <p class="text-gray-500 mt-1 text-sm md:text-base">Your favorite astrologers for quick and easy access.</p>
            </div>
            
            <div class="relative max-w-sm w-full sm:w-auto">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="text" placeholder="Search in favorites..." class="w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-orange-100 focus:border-astro-orange shadow-sm">
            </div>
          </div>

          <!-- Filter Tabs -->
          <div class="flex items-center gap-3 overflow-x-auto hide-scrollbar pb-1 -mx-4 px-4 sm:mx-0 sm:px-0 mt-2">
            <button onclick="switchTab('all')" id="btn-all" class="tab-btn tab-active px-5 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2 shadow-sm">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              All Favorites (<span id="count-all">0</span>)
            </button>
            <button onclick="switchTab('online')" id="btn-online" class="tab-btn tab-inactive px-5 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-green-500"></span>
              Online (<span id="count-online">0</span>)
            </button>
            <button onclick="switchTab('offline')" id="btn-offline" class="tab-btn tab-inactive px-5 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2">
              <span class="w-2.5 h-2.5 rounded-full bg-gray-400"></span>
              Offline (<span id="count-offline">0</span>)
            </button>
          </div>

          <!-- EMPTY STATE -->
          <div id="empty-state" class="hidden bg-white rounded-3xl border border-gray-100 shadow-sm p-12 flex flex-col items-center justify-center text-center mt-4">
            <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center text-astro-orange mb-4">
              <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">No favorite astrologers yet</h3>
            <p class="text-gray-500 mb-6 max-w-sm">Add astrologers to your favorites for quick access. You can favorite them from the astrologers listing page.</p>
            <a href="/Consultations/Talk-to-Astrologer" class="bg-astro-orange hover:bg-orange-600 text-white font-bold py-2.5 px-6 rounded-xl transition-colors shadow-sm inline-flex items-center gap-2">
              Find Astrologers <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
          
          <div id="loading-state" class="mt-4 p-8 text-center text-gray-500">
             Loading favorites...
          </div>
          
          <!-- ASTROLOGER GRID (All) -->
          <div id="grid-all" class="astro-grid-layout mt-4 hidden"></div>
          
          <!-- ASTROLOGER GRID (Online) -->
          <div id="grid-online" class="astro-grid-layout mt-4 hidden"></div>
          
          <!-- ASTROLOGER GRID (Offline) -->
          <div id="grid-offline" class="astro-grid-layout mt-4 hidden"></div>

        </div>

        <!-- RIGHT COLUMN: Favorites Summary & Quick Actions -->
        <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-0 lg:self-start lg:h-max">
          
          <!-- Favorites Summary -->
          <div class="bg-white rounded-2xl shadow-sm border border-orange-100 p-6 flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            </div>
            <div>
              <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Your Favorites</h4>
              <h3 class="text-xl font-bold text-gray-900 mb-1"><span id="summary-count">0</span> Astrologers</h3>
              <p class="text-xs text-gray-500 leading-relaxed">Quick access to your trusted astrologers.</p>
            </div>
          </div>

          <!-- Quick Actions -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <h3 class="font-bold text-gray-900 mb-4">Quick Actions</h3>
            
            <div class="space-y-3">
              <a href="/Consultations/Talk-to-Astrologer" class="w-full flex items-center gap-4 text-left group p-2 hover:bg-gray-50 rounded-xl transition-colors">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0 group-hover:bg-blue-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Find More Astrologers</h4>
                  <p class="text-[11px] text-gray-500 mt-0.5">Explore and add to favorites</p>
                </div>
              </a>
              
              <a href="/Dashboard/My-Consultations" class="w-full flex items-center gap-4 text-left group p-2 hover:bg-gray-50 rounded-xl transition-colors">
                <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center shrink-0 group-hover:bg-green-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-green-600 transition-colors">View Consultation History</h4>
                  <p class="text-[11px] text-gray-500 mt-0.5">Check your past consultations</p>
                </div>
              </a>
              
              <a href="/Dashboard/Dashboard" class="w-full flex items-center gap-4 text-left group p-2 hover:bg-gray-50 rounded-xl transition-colors">
                <div class="w-10 h-10 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0 group-hover:bg-red-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-red-600 transition-colors">Manage Notifications</h4>
                  <p class="text-[11px] text-gray-500 mt-0.5">Get updates from your favorites</p>
                </div>
              </a>
            </div>
          </div>

          <!-- Why Add to Favorites -->
          <div class="bg-[#fffdf9] rounded-2xl border border-orange-100 shadow-sm p-6 relative overflow-hidden">
            <h4 class="font-bold text-gray-900 text-sm mb-4 relative z-10 flex items-center gap-2">
              <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              Why Add to Favorites?
            </h4>
            
            <ul class="space-y-3 relative z-10">
              <li class="flex items-start gap-2.5">
                <div class="w-4 h-4 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                <span class="text-xs text-gray-600 leading-relaxed">Quick access to your trusted astrologers.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <div class="w-4 h-4 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                <span class="text-xs text-gray-600 leading-relaxed">Easy booking and consultation.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <div class="w-4 h-4 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                <span class="text-xs text-gray-600 leading-relaxed">Get notified about their availability.</span>
              </li>
              <li class="flex items-start gap-2.5">
                <div class="w-4 h-4 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5"><svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                <span class="text-xs text-gray-600 leading-relaxed">Build long-term guidance relationship.</span>
              </li>
            </ul>
            
            <!-- decorative bg icon -->
            <svg class="absolute -bottom-10 -right-10 w-40 h-40 text-orange-50 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          </div>

        </div>

      </div>
    </div>
  </main>

  <script src="/js/api.js"></script>
  <script>
    let allFavorites = [];
    let isProcessingFav = false;
    let activeTab = 'all';
    
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
      
      loadFavorites();
    });
    
    async function loadFavorites() {
        try {
            const res = await window.api.get('/favorites');
            if(res && res.data) {
                allFavorites = res.data;
                renderFavorites();
            }
        } catch(err) {
            console.error('Failed to load favorites', err);
            document.getElementById('loading-state').innerText = 'Failed to load favorites. Please try again.';
        }
    }

    function renderFavorites() {
        document.getElementById('loading-state').classList.add('hidden');
        
        const countAll = allFavorites.length;
        const countOnline = allFavorites.filter(a => a.is_available == 1).length;
        const countOffline = countAll - countOnline;
        
        document.getElementById('count-all').innerText = countAll;
        document.getElementById('summary-count').innerText = countAll;
        document.getElementById('count-online').innerText = countOnline;
        document.getElementById('count-offline').innerText = countOffline;
        
        if (countAll === 0) {
            document.getElementById('empty-state').classList.remove('hidden');
            document.getElementById('grid-all').classList.add('hidden');
            document.getElementById('grid-online').classList.add('hidden');
            document.getElementById('grid-offline').classList.add('hidden');
            return;
        } else {
            document.getElementById('empty-state').classList.add('hidden');
        }
        
        document.getElementById('grid-all').innerHTML = allFavorites.map(a => renderCard(a)).join('');
        document.getElementById('grid-online').innerHTML = allFavorites.filter(a => a.is_available == 1).map(a => renderCard(a)).join('');
        document.getElementById('grid-offline').innerHTML = allFavorites.filter(a => a.is_available != 1).map(a => renderCard(a)).join('');
        
        switchTab(activeTab);
    }
    
    function renderCard(astro) {
        const isOnline = astro.is_available == 1;
        const statusStr = isOnline ? 'Online' : 'Offline';
        const statusColor = isOnline ? 'bg-[#F0FDF4] text-[#15803D] border-green-100' : 'bg-gray-50 text-gray-600 border-gray-200';
        const statusDot = isOnline ? 'bg-[#22C55E]' : 'bg-gray-400';
        
        const rating = astro.rating ? parseFloat(astro.rating).toFixed(1) : '0.0';
        const reviews = astro.total_reviews || '0';
        const specs = (typeof astro.specializations === 'string' ? astro.specializations.split(',').map(s=>s.trim()) : (astro.specializations || [])).slice(0, 4).map(s => `<span class="bg-gray-50 border border-gray-100 text-gray-600 font-medium px-2 py-1 rounded-full whitespace-nowrap" style="font-size: 10px;">${s}</span>`).join('');
        
        const cPrice = astro.chat_price || astro.price || '0';
        const aPrice = astro.audio_price || astro.price || '0';
        const vPrice = astro.video_price || astro.price || '0';
        
        return `
        <div class="bg-[#FFFDF9] rounded-3xl border border-orange-100 shadow-sm p-4 relative flex-col hover:shadow-md transition-shadow group w-full mx-auto" style="max-width: 280px; display: flex;">
          <div class="w-full rounded-2xl bg-orange-50 overflow-hidden relative flex justify-center items-end border border-orange-50/50" style="height: 160px; position: relative;">
            <div class="absolute inset-0 bg-gradient-to-b from-orange-100/40 to-transparent" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
            <span class="shadow-sm border ${statusColor}" style="position: absolute; top: 10px; left: 10px; font-size: 11px; font-weight: bold; padding: 4px 8px; border-radius: 9999px; display: flex; align-items: center; gap: 4px; z-index: 10;">
              <span class="${statusDot}" style="width: 6px; height: 6px; border-radius: 50%;"></span> ${statusStr}
            </span>
            <button onclick="toggleFavorite(${astro.astrologer_id || astro.id}, this)" class="shadow-sm border border-gray-100 transition-colors" style="position: absolute; top: 10px; right: 10px; background-color: white; padding: 6px; border-radius: 50%; z-index: 10; cursor: pointer;">
              <svg style="width: 18px; height: 18px;" class="text-[#EF4444] fill-current transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
            </button>
            <img src="${astro.profile_image || '/lady.png'}" alt="${astro.display_name || astro.name}" class="w-full h-full relative z-0 transition-transform duration-500" style="width: 100%; height: 100%; object-fit: cover; object-position: top; z-index: 0;" onerror="this.src='https://placehold.co/200x200/ea580c/fff?text=A'">
          </div>
          <div class="pt-4 flex flex-col flex-grow">
            <h3 class="font-bold text-gray-900 leading-tight truncate" style="font-size: 16px;">${astro.display_name || astro.name}
               <svg class="w-4 h-4 text-orange-500 inline-block ml-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            </h3>
            <div class="flex items-center gap-1" style="margin-top: 4px;">
              <svg style="width: 14px; height: 14px; color: #F97316; fill: #F97316;" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              <span class="font-bold text-gray-900" style="font-size: 13px;">${rating}</span>
              <span class="font-medium text-gray-400" style="font-size: 11px;">(${reviews} reviews) &nbsp;|&nbsp; ${astro.experience_years}+ Exp.</span>
            </div>
            <div class="flex flex-wrap gap-1.5 mb-3" style="margin-top: 10px;">${specs}</div>
            
            <div class="grid grid-cols-3 gap-2 mt-auto mb-3 border-t border-gray-100 pt-3">
              <div class="text-center">
                <div class="font-bold text-gray-900 text-xs">₹ ${cPrice}<span class="text-gray-500 font-medium text-[10px]">/min</span></div>
                <div class="text-[10px] text-gray-500 mt-0.5">Chat</div>
              </div>
              <div class="text-center border-l border-gray-100">
                <div class="font-bold text-gray-900 text-xs">₹ ${aPrice}<span class="text-gray-500 font-medium text-[10px]">/min</span></div>
                <div class="text-[10px] text-gray-500 mt-0.5">Audio</div>
              </div>
              <div class="text-center border-l border-gray-100">
                <div class="font-bold text-gray-900 text-xs">₹ ${vPrice}<span class="text-gray-500 font-medium text-[10px]">/min</span></div>
                <div class="text-[10px] text-gray-500 mt-0.5">Video</div>
              </div>
            </div>
            
            <div class="grid grid-cols-3 gap-2">
              <button onclick="window.location.href='/Booking/Consultation-Form?id=${astro.astrologer_id || astro.id}&type=chat'" class="w-full text-astro-orange bg-white border border-orange-200 font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-50" style="padding: 6px 0; font-size: 11px;">
                <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Chat
              </button>
              <button onclick="window.location.href='/Booking/Consultation-Form?id=${astro.astrologer_id || astro.id}&type=audio'" class="w-full text-astro-orange bg-white border border-orange-200 font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-50" style="padding: 6px 0; font-size: 11px;">
                <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                Call
              </button>
              <button onclick="window.location.href='/Booking/Consultation-Form?id=${astro.astrologer_id || astro.id}&type=video'" class="w-full text-white bg-astro-orange border border-astro-orange font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-600" style="padding: 6px 0; font-size: 11px;">
                <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                Video
              </button>
            </div>
          </div>
        </div>
        `;
    }

    async function toggleFavorite(id, btnElement) {
      if (isProcessingFav) return;
      isProcessingFav = true;
      
      const svg = btnElement.querySelector('svg');
      const isCurrentlyFav = svg.classList.contains('fill-current');
      
      try {
          if(isCurrentlyFav) {
              // Unfavorite
              const res = await window.api.delete(`/favorites/${id}`);
              if(res) {
                  svg.classList.remove('fill-current', 'text-[#EF4444]');
                  svg.classList.add('text-gray-400');
                  
                  // Hide visually
                  const card = btnElement.closest('.bg-\\[\\#FFFDF9\\]');
                  if(card) {
                      card.style.opacity = '0.5';
                      setTimeout(() => { 
                          card.style.display = 'none'; 
                          allFavorites = allFavorites.filter(a => (a.astrologer_id || a.id) != id);
                          renderFavorites();
                      }, 300);
                  }
              }
          } else {
              // Add to Favorite (should not happen on this page but keeping logic)
              const res = await window.api.post(`/favorites/${id}`);
              if(res) {
                  svg.classList.add('fill-current', 'text-[#EF4444]');
                  svg.classList.remove('text-gray-400');
              }
          }
      } catch (err) {
          console.error('Favorite action failed', err);
          if (window.showNotification) {
              window.showNotification('Failed to update favorite status.', 'error');
          }
      } finally {
          isProcessingFav = false;
      }
    }

    function switchTab(tabId) {
      activeTab = tabId;
      const tabs = ['all', 'online', 'offline'];
      
      tabs.forEach(t => {
        const btn = document.getElementById('btn-' + t);
        const grid = document.getElementById('grid-' + t);
        
        if (t === tabId) {
          btn.className = 'tab-btn tab-active px-5 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2 shadow-sm';
          if(grid && allFavorites.length > 0) {
            grid.classList.remove('hidden');
          }
        } else {
          btn.className = 'tab-btn tab-inactive px-5 py-2.5 rounded-full text-sm font-semibold border whitespace-nowrap flex items-center gap-2';
          if(grid) {
            grid.classList.add('hidden');
          }
        }
      });
    }
  </script>
</body>
</html>
