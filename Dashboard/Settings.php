<?php
require_once __DIR__ . '/../auth_guard.php';

// Settings.php (Dashboard)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - Astrowjyoti Dashboard</title>
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
      color: #4b5563;
      border-color: #f3f4f6;
    }
    .tab-inactive:hover {
      background-color: #f9fafb;
    }

    .settings-section {
      display: none;
    }
    .settings-section.active {
      display: block;
    }

    /* Circular Progress */
    .circular-chart {
      display: block;
      margin: 0 auto;
      max-width: 80%;
      max-height: 250px;
    }
    .circle-bg {
      fill: none;
      stroke: #fff7ed;
      stroke-width: 3.8;
    }
    .circle {
      fill: none;
      stroke-width: 2.8;
      stroke-linecap: round;
      animation: progress 1s ease-out forwards;
    }
    @keyframes progress {
      0% { stroke-dasharray: 0 100; }
    }
    .percentage {
      fill: #ea580c;
      font-family: sans-serif;
      font-weight: bold;
      font-size: 0.5em;
      text-anchor: middle;
    }
    
    .mandala-bg {
      background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23f97316' fill-opacity='0.03' d='M50 100c-27.614 0-50-22.386-50-50S22.386 0 50 0s50 22.386 50 50-22.386 50-50 50zm0-2c26.51 0 48-21.49 48-48S76.51 2 50 2 2 23.49 2 50s21.49 48 48 48zm0-10c-21.054 0-38-16.946-38-38s16.946-38 38-38 38 16.946 38 38-16.946 38-38 38zm0-2c19.95 0 36-16.05 36-36s-16.05-36-36-36-36 16.05-36 36 16.05 36 36 36zm0-10c-14.432 0-26-11.568-26-26s11.568-26 26-26 26 11.568 26 26-11.568 26-26 26zm0-2c13.327 0 24-10.673 24-24s-10.673-24-24-24-24 10.673-24 24 10.673 24 24 24zm0-10c-7.808 0-14-6.192-14-14s6.192-14 14-14 14 6.192 14 14-6.192 14-14 14zm0-2c6.704 0 12-5.296 12-12s-5.296-12-12-12-12 5.296-12 12 5.296 12 12 12z'/%3E%3C/svg%3E");
    }
  </style>
</head>
<body class="bg-[#fdfaf5] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include 'sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fdfaf5] relative">
    
    <?php include 'header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 custom-scrollbar relative z-10">
      <div class="absolute top-0 right-0 w-full h-64 pointer-events-none mandala-bg z-0 opacity-80" style="background-size: 400px; background-position: top right;"></div>
      
      <!-- Main Layout -->
      <div class="max-w-[1400px] mx-auto relative z-10">
        
        <!-- Page Header -->
        <div class="mb-8">
          <h1 class="text-2xl md:text-3xl font-bold text-[#111827]">Settings</h1>
          <p class="text-gray-500 mt-1 text-sm md:text-base">Manage your account settings, preferences, and more.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar pb-1 mb-6 -mx-4 px-4 sm:mx-0 sm:px-0">
          <button onclick="switchTab('profile', this)" class="set-tab tab-active px-6 py-3 rounded-xl text-sm font-semibold border border-astro-orange shadow-sm whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            Profile
          </button>
          <button onclick="switchTab('security', this)" class="set-tab tab-inactive px-6 py-3 rounded-xl text-sm font-semibold border whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            Security
          </button>
          <button onclick="switchTab('notifications', this)" class="set-tab tab-inactive px-6 py-3 rounded-xl text-sm font-semibold border whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            Notifications
          </button>
          <button onclick="switchTab('preferences', this)" class="set-tab tab-inactive px-6 py-3 rounded-xl text-sm font-semibold border whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            Preferences
          </button>
          <button onclick="switchTab('language', this)" class="set-tab tab-inactive px-6 py-3 rounded-xl text-sm font-semibold border whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Language
          </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
          
          <!-- LEFT COLUMN: Content Areas -->
          <div class="lg:col-span-8 flex flex-col gap-6">
            
            <!-- PROFILE SECTION -->
            <div id="sec-profile" class="settings-section active bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
              <h2 class="text-xl font-bold text-gray-900">Profile Information</h2>
              <p class="text-sm text-gray-500 mt-1 mb-8">Update your personal details and profile information.</p>
              
              <div class="flex flex-col md:flex-row gap-8">
                <!-- Avatar -->
                <div class="flex flex-col items-center gap-4 shrink-0 mx-auto md:mx-0">
                  <div class="relative">
                    <img id="settings-profile-img" src="/lady.png" alt="Profile" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-md bg-white">
                    <button id="btn-camera-icon" class="absolute bottom-0 right-2 bg-[#1e293b] text-white p-2 rounded-full shadow-lg border-2 border-white hover:bg-gray-800 transition-colors">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </button>
                  </div>
                  <input type="file" id="profile-photo-input" class="hidden" accept=".jpg,.jpeg,.png">
                  <button id="btn-change-photo" class="text-astro-orange font-semibold border border-orange-200 px-4 py-1.5 rounded-lg text-sm hover:bg-orange-50 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Change Photo
                  </button>
                  <p class="text-[11px] text-gray-400">JPG, PNG up to 5MB</p>
                </div>
                
                <!-- Form Fields -->
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5">
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" id="profile-name" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="profile-email" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm text-gray-500 focus:bg-white focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Mobile Number <span class="text-red-500">*</span></label>
                    <input type="tel" id="profile-phone" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Date of Birth</label>
                    <div class="relative">
                      <input type="text" id="profile-dob" placeholder="YYYY-MM-DD" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                      <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                      </div>
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Gender</label>
                    <select id="profile-gender" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors appearance-none">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Location</label>
                    <div class="relative">
                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                      </div>
                      <input type="text" id="profile-location" class="w-full pl-9 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex justify-end mt-6">
                <button id="btn-save-profile" class="bg-astro-orange hover:bg-orange-600 text-white font-bold py-2.5 px-6 rounded-xl transition-colors shadow-sm">
                  Save Changes
                </button>
              </div>
            </div>

            <!-- SECURITY SECTION -->
            <div id="sec-security" class="settings-section bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
              <h2 class="text-xl font-bold text-gray-900">Change Password</h2>
              <p class="text-sm text-gray-500 mt-1 mb-8">Keep your account secure with a strong password.</p>
              
              <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <div class="lg:col-span-3 space-y-5">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-1.5">Current Password</label>
                      <div class="relative">
                        <input type="password" id="current-password" placeholder="Enter current password" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:bg-white focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                        <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                      </div>
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-1.5">New Password</label>
                      <div class="relative">
                        <input type="password" id="new-password" placeholder="Enter new password" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                        <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="sm:w-[calc(50%-10px)]">
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Confirm New Password</label>
                    <div class="relative">
                      <input type="password" id="confirm-password" placeholder="Confirm new password" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none transition-colors">
                      <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                      </button>
                    </div>
                  </div>
                </div>
                
                <div class="lg:col-span-2 bg-[#fffcf5] border border-orange-100 rounded-2xl p-5">
                  <h4 class="text-sm font-bold text-gray-900 flex items-center gap-2 mb-3">
                    <svg class="w-4 h-4 text-astro-orange" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                    Password Requirements:
                  </h4>
                  <ul class="space-y-2 text-xs text-gray-600">
                    <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> At least 8 characters long</li>
                    <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Include uppercase letter</li>
                    <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Include lowercase letter</li>
                    <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Include a number</li>
                    <li class="flex items-center gap-2"><svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Include a special character</li>
                  </ul>
                </div>
              </div>
              <div class="flex justify-end mt-6">
                <button id="btn-update-password" class="bg-astro-orange hover:bg-orange-600 text-white font-bold py-2.5 px-6 rounded-xl transition-colors shadow-sm">
                  Update Password
                </button>
              </div>
            </div>

            <!-- NOTIFICATIONS SECTION -->
            <div id="sec-notifications" class="settings-section bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
              <h2 class="text-xl font-bold text-gray-900">Notification Preferences</h2>
              <p class="text-sm text-gray-500 mt-1 mb-8">Choose what notifications you want to receive.</p>
              
              <div class="space-y-6">
                <div class="flex items-start justify-between gap-4 border-b border-gray-50 pb-6">
                  <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-900">Consultation Updates</h4>
                      <p class="text-[13px] text-gray-500 mt-0.5">Get notified about booking confirmations, reminders, and consultation updates.</p>
                    </div>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                    <input type="checkbox" class="sr-only peer" id="notif-consultation">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-astro-orange"></div>
                  </label>
                </div>
                
                <div class="flex items-start justify-between gap-4 border-b border-gray-50 pb-6">
                  <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-900">Offers & Promotions</h4>
                      <p class="text-[13px] text-gray-500 mt-0.5">Receive updates about special offers, discounts, and new features.</p>
                    </div>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                    <input type="checkbox" class="sr-only peer" id="notif-consultation">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-astro-orange"></div>
                  </label>
                </div>
                
                <div class="flex items-start justify-between gap-4">
                  <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-900">Email Notifications</h4>
                      <p class="text-[13px] text-gray-500 mt-0.5">Receive important updates and summaries via email.</p>
                    </div>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer shrink-0 mt-1">
                    <input type="checkbox" class="sr-only peer" id="notif-consultation">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-astro-orange"></div>
                  </label>
                </div>
              </div>
            </div>

            <!-- PREFERENCES SECTION -->
            <div id="sec-preferences" class="settings-section bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
              <h2 class="text-xl font-bold text-gray-900">App Preferences</h2>
              <p class="text-sm text-gray-500 mt-1 mb-8">Customize your application experience.</p>
              
              <div class="space-y-6 max-w-xl">
                <!-- Time Zone -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                  <label class="font-semibold text-gray-800 text-sm flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Time Zone
                  </label>
                  <select class="w-full sm:w-64 px-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-astro-orange appearance-none">
                    <option>(GMT+05:30) India Time</option>
                    <option>(GMT+00:00) UTC</option>
                    <option>(GMT-05:00) Eastern Time</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- LANGUAGE SECTION -->
            <div id="sec-language" class="settings-section bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
              <h2 class="text-xl font-bold text-gray-900">Language</h2>
              <p class="text-sm text-gray-500 mt-1 mb-8">Select your preferred language for the application.</p>
              
              <div class="max-w-xl">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                  <label class="font-semibold text-gray-800 text-sm flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Language
                  </label>
                  <select class="lang-select w-full sm:w-64 px-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-astro-orange appearance-none">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <!-- RIGHT COLUMN: Sidebar Cards -->
          <div class="lg:col-span-4 space-y-6 lg:sticky lg:top-0 lg:self-start lg:h-max">
            
            <!-- Profile Completion -->
            <div class="bg-white rounded-3xl shadow-sm border border-orange-100 p-6">
              <h3 class="font-bold text-gray-900 mb-4 text-lg">Profile Completion</h3>
              
              <div class="flex items-center gap-4 mb-4">
                <div class="w-20 h-20 shrink-0">
                  <svg viewBox="0 0 36 36" class="circular-chart">
                    <path class="circle-bg"
                      d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <path class="circle"
                      stroke="#ea580c"
                      stroke-dasharray="<?= $user['profileCompletion'] ?>, 100"
                      d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                    />
                    <text x="18" y="20.35" class="percentage"><?= $user['profileCompletion'] ?>%</text>
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-sm">Your profile is <span class="profile-completion-text">0</span>% complete</h4>
                  <p class="text-[11px] text-gray-500 mt-1">Complete your profile to get better recommendations from our astrologers.</p>
                </div>
              </div>
              
              <button class="w-full border border-orange-200 text-astro-orange hover:bg-orange-50 font-bold py-2 rounded-xl transition-colors shadow-sm text-sm">
                Complete Profile &rarr;
              </button>
            </div>

            <!-- Account Information -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">
              <h3 class="font-bold text-gray-900 mb-5 text-lg">Account Information</h3>
              
              <div class="space-y-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span class="text-gray-600">Member Since</span>
                  </div>
                  <span class="font-semibold text-gray-900 text-sm"><?= $user['memberSince'] ?></span>
                </div>
                
                <div class="flex items-start justify-between">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-gray-600">Account Type</span>
                  </div>
                  <div class="text-right">
                    <div class="font-semibold text-gray-900 text-sm"><?= $user['accountType'] ?></div>
                    <button class="text-[10px] text-astro-orange font-bold border border-orange-200 px-2 py-0.5 rounded-full mt-1 hover:bg-orange-50">Upgrade to Premium</button>
                  </div>
                </div>
                
                <div class="flex items-center justify-between pt-2">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <span class="text-gray-600">Email Verified</span>
                  </div>
                  <span class="px-2 py-1 bg-green-50 text-green-600 border border-green-100 rounded-md text-[10px] font-bold flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Verified
                  </span>
                </div>
                
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span class="text-gray-600">Phone Verified</span>
                  </div>
                  <span class="px-2 py-1 bg-green-50 text-green-600 border border-green-100 rounded-md text-[10px] font-bold flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Verified
                  </span>
                </div>
              </div>
            </div>

            <!-- App Preferences Mini View -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">
              <h3 class="font-bold text-gray-900 mb-5 text-lg">App Preferences</h3>
              <div class="space-y-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="text-gray-600">Language</span>
                  </div>
                  <select class="lang-select w-32 px-2 py-1 bg-gray-50 border border-gray-200 rounded-lg text-xs font-semibold focus:outline-none appearance-none">
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                  </select>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3 text-sm">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="text-gray-600">Time Zone</span>
                  </div>
                  <select class="w-32 px-2 py-1 bg-gray-50 border border-gray-200 rounded-lg text-xs font-semibold focus:outline-none appearance-none text-ellipsis">
                    <option>(GMT+05:30) India</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Delete Account -->
            <div class="bg-red-50/50 rounded-3xl border border-red-100 p-6 flex gap-4">
              <div class="w-10 h-10 rounded-full bg-red-100 text-red-500 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-red-600 text-sm mb-1">Delete Account</h4>
                <p class="text-[11px] text-gray-600 leading-snug mb-3">This action cannot be undone. All your data will be permanently removed.</p>
                <button class="border border-red-300 text-red-600 hover:bg-red-100 font-bold py-1.5 px-4 rounded-xl transition-colors shadow-sm text-xs">
                  Delete My Account
                </button>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>

  <script>
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
    });

    // Settings Tab Switching Logic
    function switchTab(type, btnElement) {
      // Hide all sections first
      const allSections = document.querySelectorAll('.settings-section');
      allSections.forEach(sec => sec.classList.remove('active'));
      
      // Update Tab Styles
      const allTabs = document.querySelectorAll('.set-tab');
      allTabs.forEach(tab => {
        tab.classList.remove('tab-active', 'border-astro-orange', 'shadow-sm', 'text-white');
        tab.classList.add('tab-inactive', 'border-transparent');
        // Reset SVG classes just in case
        tab.className = 'set-tab tab-inactive px-6 py-3 rounded-xl text-sm font-semibold border border-transparent whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]';
      });

      // Show selected section
      const targetSec = document.getElementById('sec-' + type);
      if(targetSec) {
        targetSec.classList.add('active');
      }

      // Make clicked tab active
      btnElement.className = 'set-tab tab-active px-6 py-3 rounded-xl text-sm font-semibold border border-astro-orange shadow-sm whitespace-nowrap flex items-center justify-center gap-2 min-w-[140px]';
    }
  </script>
<script src="/js/api.js"></script>
<script src="/js/component.js"></script>
<script src="/js/settings.js"></script>
</body>
</html>
