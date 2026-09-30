<?php
require_once __DIR__ . '/../auth_guard.php';

// Profile.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile - Astrowjyoti</title>
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
      
      <!-- Top Section: Hero + Quote (Grid) -->
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        
        <!-- Profile Hero Card (Span 2) -->
        <div class="lg:col-span-2 bg-[#fdf5e6] rounded-3xl border border-orange-100 p-6 relative overflow-hidden flex items-center shadow-sm">
          <!-- Decorative BG -->
          <div class="absolute right-0 top-0 bottom-0 w-2/3 opacity-30 pointer-events-none" style="background-image: url('/Auth/Dashboard-banner.png'); background-size: cover; background-position: right; mix-blend-mode: multiply;"></div>
          <div class="absolute right-0 top-0 bottom-0 w-2/3 bg-gradient-to-l from-transparent to-[#fdf5e6] z-0"></div>
          
          <div class="relative z-10 flex flex-col sm:flex-row items-center sm:items-start gap-6 w-full">
            <div class="relative shrink-0">
              <img id="profile-img" src="/lady.png" alt="Profile" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-md bg-white">
            </div>
            
            <div class="flex-1 flex flex-col sm:flex-row justify-between items-start sm:items-center w-full gap-4">
              <div>
                <div class="flex items-center gap-3 mb-2 justify-center sm:justify-start">
                  <h1 id="profile-name" class="text-2xl font-bold text-[#1e293b]">Loading...</h1>
                </div>
                
                <div class="space-y-1.5 text-sm text-[#475569]">
                  <p class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> <span id="profile-email">--</span></p>
                  <p class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg> <span id="profile-phone">--</span></p>
                  <p class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> <span id="profile-location">--</span></p>
                </div>
              </div>
              
              <a href="/Dashboard/Settings" class="self-center sm:self-start mt-2 sm:mt-0 px-4 py-2 bg-white text-astro-orange border border-orange-200 rounded-xl text-sm font-semibold shadow-sm hover:bg-orange-50 transition-colors inline-flex items-center gap-2">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                Edit Profile
              </a>
            </div>
          </div>
        </div>

        <!-- Astrology Quote Card -->
        <div class="bg-[#fdfcf8] rounded-3xl border border-orange-50 p-6 relative overflow-hidden shadow-sm flex flex-col justify-center">
          <!-- Decorative BG -->
          <div class="absolute -right-10 -bottom-10 opacity-10 pointer-events-none">
            <svg class="w-48 h-48 text-astro-orange" fill="currentColor" viewBox="0 0 100 100"><path d="M50 0 L55 40 L95 45 L55 50 L50 90 L45 50 L5 45 L45 40 Z"/></svg>
          </div>
          
          <div class="relative z-10">
            <div class="text-4xl text-orange-200 mb-2 font-serif leading-none">"</div>
            <p class="text-[15px] font-medium text-[#334155] leading-relaxed mb-4">
              The stars don't control your destiny, they guide you towards a better tomorrow.
            </p>
            <div class="w-8 h-1 bg-astro-orange rounded-full"></div>
          </div>
        </div>
      </div>

      <!-- Main Layout: View Only Data -->
      <div class="max-w-7xl mx-auto grid grid-cols-1 xl:grid-cols-10 gap-6 lg:gap-8 mb-6">
        <div class="xl:col-span-7 space-y-6">
          <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6 lg:p-8">
            <h2 class="text-lg font-bold text-[#1e293b] mb-6 pb-4 border-b border-gray-100">Personal Information</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Date of Birth</p>
                <p id="profile-dob" class="font-medium text-gray-900">--</p>
              </div>
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Gender</p>
                <p id="profile-gender" class="font-medium text-gray-900">--</p>
              </div>
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Account Status</p>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                  <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Verified
                </span>
              </div>
              <div>
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-1">Member Since</p>
                <p id="profile-since" class="font-medium text-gray-900">--</p>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN (30%) -->
        <div class="xl:col-span-3 space-y-6 lg:space-y-8 sticky top-0 self-start">
            
            <!-- Quick Info -->
            <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6">
              <h3 class="text-base font-bold text-[#1e293b] mb-4">Quick Info</h3>
              <div class="grid grid-cols-2 gap-3">
                <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-astro-orange mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                  <p class="text-[11px] text-gray-500 font-medium">Total Consultations</p>
                  <p class="text-lg font-bold text-[#1e293b] leading-tight mt-0.5">12</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-red-500 mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                  </div>
                  <p class="text-[11px] text-gray-500 font-medium">Favorites</p>
                  <p class="text-lg font-bold text-[#1e293b] leading-tight mt-0.5">5</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-orange-400 mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                  </div>
                  <p class="text-[11px] text-gray-500 font-medium">Wallet Balance</p>
                  <p class="text-lg font-bold text-[#1e293b] leading-tight mt-0.5">₹500</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100">
                  <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-orange-500 mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                  </div>
                  <p class="text-[11px] text-gray-500 font-medium">Member Since</p>
                  <p class="text-sm font-bold text-[#1e293b] leading-tight mt-0.5 whitespace-nowrap">Sep 2026</p>
                </div>
              </div>
            </div>

            <!-- Communication Preferences -->
            <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-6">
              <div class="flex justify-between items-center mb-1">
                <h3 class="text-base font-bold text-[#1e293b]">Communication Preferences</h3>
                <button class="flex items-center gap-1.5 text-astro-orange text-xs font-semibold px-3 py-1 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors">
                  <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg> Edit
                </button>
              </div>
              <p class="text-xs text-gray-500 mb-5">Choose how you want to receive updates and notifications.</p>

              <div class="space-y-4">
                <!-- Toggle 1 -->
                <div class="flex items-start gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-astro-orange shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-sm font-semibold text-gray-800">Email Notifications</h4>
                    <p class="text-[11px] text-gray-500">Consultation updates, offers, and more</p>
                  </div>
                  <!-- Switch On -->
                  <div class="relative inline-flex items-center h-5 rounded-full w-9 shrink-0 cursor-pointer bg-astro-orange">
                    <span class="translate-x-4 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px ml-1 shadow"></span>
                  </div>
                </div>
                <!-- Toggle 2 -->
                <div class="flex items-start gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-astro-orange shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-sm font-semibold text-gray-800">SMS Notifications</h4>
                    <p class="text-[11px] text-gray-500">Important alerts and booking updates</p>
                  </div>
                  <!-- Switch On -->
                  <div class="relative inline-flex items-center h-5 rounded-full w-9 shrink-0 cursor-pointer bg-astro-orange">
                    <span class="translate-x-4 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px ml-1 shadow"></span>
                  </div>
                </div>
                <!-- Toggle 3 -->
                <div class="flex items-start gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-astro-orange shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-sm font-semibold text-gray-800">Push Notifications</h4>
                    <p class="text-[11px] text-gray-500">Real-time notifications in browser/app</p>
                  </div>
                  <!-- Switch On -->
                  <div class="relative inline-flex items-center h-5 rounded-full w-9 shrink-0 cursor-pointer bg-astro-orange">
                    <span class="translate-x-4 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px ml-1 shadow"></span>
                  </div>
                </div>
                <!-- Toggle 4 -->
                <div class="flex items-start gap-3">
                  <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 shrink-0 mt-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h4 class="text-sm font-semibold text-gray-800">Marketing Communications</h4>
                    <p class="text-[11px] text-gray-500">Offers, discounts and new features</p>
                  </div>
                  <!-- Switch Off -->
                  <div class="relative inline-flex items-center h-5 rounded-full w-9 shrink-0 cursor-pointer bg-gray-200">
                    <span class="translate-x-0.5 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px shadow"></span>
                  </div>
                </div>
              </div>

            </div>

          </div>
      </div>
    </div>
  </main>
  
  <script src="/js/api.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        fetchProfileData();
    });

    async function fetchProfileData() {
        try {
            const response = await window.api.get('/user/profile');
            if (response && response.user) {
                const u = response.user;
                
                document.getElementById('profile-name').textContent = u.name || 'User';
                document.getElementById('profile-email').textContent = u.email || 'Not provided';
                document.getElementById('profile-phone').textContent = u.phone || 'Not provided';
                document.getElementById('profile-location').textContent = u.location || 'Not provided';
                
                const dobStr = u.date_of_birth || u.dob;
                document.getElementById('profile-dob').textContent = dobStr ? dobStr : 'Not provided';
                
                if (u.profile_image) {
                    document.getElementById('profile-img').src = u.profile_image;
                }
                
                if (u.gender) {
                    document.getElementById('profile-gender').textContent = u.gender.charAt(0).toUpperCase() + u.gender.slice(1);
                } else {
                    document.getElementById('profile-gender').textContent = 'Not provided';
                }
                
                if (u.created_at) {
                    const d = new Date(u.created_at);
                    document.getElementById('profile-since').textContent = d.toLocaleDateString('en-IN', { month: 'short', year: 'numeric' });
                }
            }
        } catch (err) {
            console.error('Error fetching profile', err);
            if(window.showNotification) window.showNotification('Failed to load profile data', 'error');
        }
    }

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
  </script>
</body>
</html>
