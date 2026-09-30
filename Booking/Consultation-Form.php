<?php
require_once __DIR__ . '/../auth_guard.php';

// Consultation-Form.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation Booking - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    /* Custom utility for active radio styling */
    input[type="radio"].type-radio:checked + div {
      border-color: #EA580C !important;
      background-color: #FFF7ED !important;
    }
    input[type="radio"].type-radio:checked + div .radio-inner {
      border-color: #EA580C !important;
      border-width: 6px !important;
    }
    input[type="radio"]:checked + div .icon-container {
      background-color: #FFF7ED !important;
      color: #EA580C !important;
    }
  </style>
</head>
<body class="bg-[#f9fafb] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include __DIR__ . '/../Dashboard/sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fafafa]">
    
    <?php include __DIR__ . '/../Dashboard/header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 custom-scrollbar">
      
      <!-- Top Bar: Back & Progress -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-8 items-start">
        <!-- Back Link in Left Column -->
        <div class="lg:col-span-3">
          <a href="/Dashboard/Talk-to-Astrologer" class="inline-flex items-center text-sm font-semibold text-astro-orange hover:text-orange-700 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Astrologers
          </a>
        </div>
        
        <!-- Progress Tabs in Middle Column -->
        <div class="lg:col-span-6 flex justify-center w-full mb-6 lg:mb-0">
          <!-- Interactive Tabs Navigation -->
          <div class="flex items-start justify-between w-full max-w-2xl px-2">
            
            <!-- Step 1 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button onclick="goToTab(1)" id="nav-tab-1" class="focus:outline-none relative z-10">
                <div id="nav-icon-1" class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">1</div>
              </button>
              <span id="nav-text-1" class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Consultation<br class="sm:hidden"> Type</span>
              <div id="nav-line-1" class="absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors"></div>
            </div>
            
            <!-- Step 2 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button onclick="goToTab(2)" id="nav-tab-2" class="focus:outline-none relative z-10">
                <div id="nav-icon-2" class="w-8 h-8 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">2</div>
              </button>
              <span id="nav-text-2" class="text-[10px] sm:text-xs font-medium text-gray-400 mt-2 text-center leading-tight transition-colors">Date &<br class="sm:hidden"> Time</span>
              <div id="nav-line-2" class="absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors"></div>
            </div>
            
            <!-- Step 3 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button onclick="goToTab(3)" id="nav-tab-3" class="focus:outline-none relative z-10">
                <div id="nav-icon-3" class="w-8 h-8 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">3</div>
              </button>
              <span id="nav-text-3" class="text-[10px] sm:text-xs font-medium text-gray-400 mt-2 text-center leading-tight transition-colors">Details</span>
              <div id="nav-line-3" class="absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors"></div>
            </div>
            
            <!-- Step 4 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button onclick="goToTab(4)" id="nav-tab-4" class="focus:outline-none relative z-10">
                <div id="nav-icon-4" class="w-8 h-8 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">4</div>
              </button>
              <span id="nav-text-4" class="text-[10px] sm:text-xs font-medium text-gray-400 mt-2 text-center leading-tight transition-colors">Review</span>
              <div id="nav-line-4" class="absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors"></div>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-not-allowed">
                <div id="nav-icon-5" class="w-8 h-8 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">5</div>
              </button>
              <span id="nav-text-5" class="text-[10px] sm:text-xs font-medium text-gray-400 mt-2 text-center leading-tight transition-colors">Payment</span>
            </div>

          </div>
        </div>
        
        <!-- Empty Right Column for Balance -->
        <div class="lg:col-span-3"></div>
      </div>

      <!-- 3-Column Layout Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pb-20">
        
        <!-- LEFT COLUMN: ASTROLOGER PROFILE -->
        <div class="lg:col-span-3" id="astrologer-profile-container">
          <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 sticky top-0 animate-pulse">
            <div class="w-full aspect-square bg-gray-200 rounded-xl mb-4"></div>
            <div class="h-6 bg-gray-200 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-200 rounded w-1/2 mb-6"></div>
            <div class="space-y-2 mb-6">
              <div class="h-4 bg-gray-200 rounded w-full"></div>
              <div class="h-4 bg-gray-200 rounded w-5/6"></div>
            </div>
            <div class="h-8 bg-gray-200 rounded w-full"></div>
          </div>
        </div>
        
        <!-- MIDDLE COLUMN: BOOKING PANES -->
        <div class="lg:col-span-6">
          
          <!-- =============================== -->
          <!-- TAB 1: CONSULTATION TYPE        -->
          <!-- =============================== -->
          <div id="pane-1" class="tab-pane block">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Select Consultation Type</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
              <?php
                $reqType = isset($_GET['type']) ? strtolower($_GET['type']) : '';
                $isChat = ($reqType === 'chat');
                $isAudio = ($reqType === 'audio' || $reqType === 'call' || $reqType === ''); // fallback to audio if none provided
                $isVideo = ($reqType === 'video');
              ?>
              
              <label class="relative cursor-pointer">
                <input type="radio" name="consultation_type" value="chat" data-label="Chat" data-rate="0" class="peer sr-only type-radio" onchange="updateSummary()" <?= $isChat ? 'checked' : '' ?> disabled>
                <div class="bg-white border-2 border-gray-100 rounded-xl p-4 transition-all hover:border-orange-200 shadow-sm h-full flex flex-col peer-disabled:opacity-50 peer-disabled:cursor-not-allowed">
                  <div class="flex justify-between items-start mb-2">
                    <div class="icon-container w-10 h-10 rounded-full bg-red-50 flex items-center justify-center text-red-500 transition-colors">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 bg-white transition-all"></div>
                  </div>
                  <h4 class="font-bold text-gray-900">Chat</h4>
                  <div class="text-sm font-semibold text-gray-700 mb-1" id="rate-chat">--/min</div>
                  <p class="text-xs text-gray-500 font-medium leading-tight mt-auto break-words min-w-0">Text chat with astrologer</p>
                </div>
              </label>

              <label class="relative cursor-pointer">
                <input type="radio" name="consultation_type" value="audio" data-label="Audio Call" data-rate="0" class="peer sr-only type-radio" <?= $isAudio ? 'checked' : '' ?> onchange="updateSummary()" disabled>
                <div class="bg-white border-2 border-gray-100 rounded-xl p-4 transition-all hover:border-orange-200 shadow-sm h-full flex flex-col peer-disabled:opacity-50 peer-disabled:cursor-not-allowed">
                  <div class="flex justify-between items-start mb-2">
                    <div class="icon-container w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center text-orange-500 transition-colors">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 bg-white transition-all shadow-sm"></div>
                  </div>
                  <h4 class="font-bold text-gray-900">Audio Call</h4>
                  <div class="text-sm font-semibold text-gray-700 mb-1" id="rate-audio">--/min</div>
                  <p class="text-xs text-gray-500 font-medium leading-tight mt-auto break-words min-w-0">Talk directly with astrologer</p>
                </div>
              </label>

              <label class="relative cursor-pointer">
                <input type="radio" name="consultation_type" value="video" data-label="Video Call" data-rate="0" class="peer sr-only type-radio" onchange="updateSummary()" <?= $isVideo ? 'checked' : '' ?> disabled>
                <div class="bg-white border-2 border-gray-100 rounded-xl p-4 transition-all hover:border-orange-200 shadow-sm h-full flex flex-col peer-disabled:opacity-50 peer-disabled:cursor-not-allowed">
                  <div class="flex justify-between items-start mb-2">
                    <div class="icon-container w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-purple-500 transition-colors">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 bg-white transition-all"></div>
                  </div>
                  <h4 class="font-bold text-gray-900">Video Call</h4>
                  <div class="text-sm font-semibold text-gray-700 mb-1" id="rate-video">--/min</div>
                  <p class="text-xs text-gray-500 font-medium leading-tight mt-auto break-words min-w-0">Face-to-face consultation</p>
                </div>
              </label>
              
            </div>
            
            <div class="flex justify-end pt-6 border-t border-gray-100 mt-auto">
              <button id="next-btn-1" onclick="goToTab(2)" class="bg-astro-orange hover:bg-orange-700 text-white font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center shadow-md disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                Next <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>
          </div>

          <!-- =============================== -->
          <!-- TAB 2: DATE & TIME              -->
          <!-- =============================== -->
          <div id="pane-2" class="tab-pane hidden">
            <div class="flex justify-between items-end mb-4">
              <h3 class="text-lg font-bold text-gray-900">Select Date & Time</h3>
              <span class="text-xs font-medium text-gray-500 flex items-center"><svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> (IST)</span>
            </div>
            
            <!-- Dates Carousel -->
            <div id="dates-carousel-container" class="flex items-center gap-2 mb-8 overflow-x-auto hide-scrollbar pb-2">
            </div>

            <!-- Time Slots -->
            <div id="time-slots-container" class="space-y-6 mb-8">
            </div>

            <h3 class="text-lg font-bold text-gray-900 mb-4">Select Duration</h3>
            <div id="durations-container" class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3 mb-8">
            </div>
            
            <div class="flex justify-between pt-6 border-t border-gray-100 mt-auto">
              <button onclick="goToTab(1)" class="border border-gray-300 text-gray-600 hover:bg-gray-50 font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Back
              </button>
              <button onclick="goToTab(3)" class="bg-astro-orange hover:bg-orange-700 text-white font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center shadow-md">
                Next <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>
          </div>

          <!-- =============================== -->
          <!-- TAB 3: DETAILS                  -->
          <!-- =============================== -->
          <div id="pane-3" class="tab-pane hidden">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Additional Details <span class="text-gray-500 font-medium text-base">(Optional)</span></h3>
            <p class="text-sm text-gray-600 mb-4">Provide any context or specific questions to help the astrologer prepare for your consultation.</p>
            
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm focus-within:border-astro-orange focus-within:ring-1 focus-within:ring-astro-orange transition-all mb-8">
              <textarea id="consultation-notes" class="w-full p-4 text-sm text-gray-700 outline-none resize-none h-40" placeholder="Share your question or specific area you need guidance on...&#10;(e.g. career, marriage, health, finance, etc.)" oninput="updateSummary()"></textarea>
              <div class="bg-gray-50 px-4 py-2 border-t border-gray-100 flex justify-end text-xs font-medium text-gray-400">
                0/500
              </div>
            </div>
            
            <div class="flex justify-between pt-6 border-t border-gray-100 mt-auto">
              <button onclick="goToTab(2)" class="border border-gray-300 text-gray-600 hover:bg-gray-50 font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Back
              </button>
              <button onclick="goToTab(4)" class="bg-astro-orange hover:bg-orange-700 text-white font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center shadow-md">
                Review Booking <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>
          </div>

          <!-- =============================== -->
          <!-- TAB 4: REVIEW                   -->
          <!-- =============================== -->
          <div id="pane-4" class="tab-pane hidden">
            <h3 class="text-lg font-bold text-gray-900 mb-6">Review Your Booking</h3>
            
            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm mb-8 relative overflow-hidden">
              <div class="absolute top-0 left-0 w-1 h-full bg-astro-orange"></div>
              
              <h4 class="font-bold text-gray-800 border-b border-gray-100 pb-3 mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Ready to confirm
              </h4>
              
              <div class="flex items-center gap-4 mb-6 pb-6 border-b border-gray-100">
                <img id="review-astro-img" src="/lady.png" alt="Astrologer" class="w-16 h-16 rounded-full object-cover">
                <div>
                  <div class="text-sm text-gray-500 font-medium">Selected Astrologer</div>
                  <h4 id="review-astro-name" class="font-bold text-gray-900 text-lg">Loading...</h4>
                </div>
              </div>
              
              <div class="space-y-4">
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Consultation Type</div>
                  <div class="col-span-2 text-sm font-bold text-gray-900" id="review-type">Audio Call</div>
                </div>
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Date</div>
                  <div class="col-span-2 text-sm font-bold text-gray-900" id="review-date">25 Sep 2026</div>
                </div>
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Time</div>
                  <div class="col-span-2 text-sm font-bold text-gray-900" id="review-time">10:00 AM (IST)</div>
                </div>
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Duration</div>
                  <div class="col-span-2 text-sm font-bold text-gray-900" id="review-duration">30 Minutes</div>
                </div>
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Rate</div>
                  <div class="col-span-2 text-sm font-bold text-gray-900" id="review-rate">₹40/min</div>
                </div>
                <div class="grid grid-cols-3">
                  <div class="text-sm text-gray-500 font-medium">Notes</div>
                  <div class="col-span-2 text-sm text-gray-700 italic" id="review-notes">None</div>
                </div>
                <div class="grid grid-cols-3 border-t border-gray-100 pt-4 mt-4">
                  <div class="text-base font-bold text-gray-900">Total Amount</div>
                  <div class="col-span-2 text-xl font-bold text-astro-orange" id="review-total">₹1,200</div>
                </div>
              </div>
            </div>
            
            <div class="flex justify-between pt-6 border-t border-gray-100 mt-auto">
              <button onclick="goToTab(3)" class="border border-gray-300 text-gray-600 hover:bg-gray-50 font-bold py-2.5 px-6 rounded-lg transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Back
              </button>
              <!-- Next button hidden on final tab, they use "Proceed to Payment" in the summary -->
            </div>
          </div>

        </div>

        <!-- RIGHT COLUMN: SUMMARY -->
        <div class="lg:col-span-3">
          <div class="sticky top-0 space-y-6">
            
            <!-- Booking Summary Card -->
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
              <h3 class="font-bold text-lg text-gray-900 mb-4">Booking Summary</h3>
              
              <div class="flex items-center gap-3 pb-4 border-b border-gray-100 mb-4">
                <img id="summary-img" src="/lady.png" alt="Astrologer" class="w-12 h-12 rounded-full object-cover">
                <div>
                  <h4 id="summary-name" class="font-bold text-gray-900 text-sm">Loading...</h4>
                  <div id="summary-meta" class="flex items-center text-xs text-gray-500 font-medium mt-0.5">
                    Loading profile details...
                  </div>
                </div>
              </div>
              
              <div class="space-y-3 mb-6">
                <div class="flex justify-between items-center">
                  <span class="text-sm text-gray-500 font-medium">Type</span>
                  <span class="text-sm font-bold text-gray-900 flex items-center" id="summary-type">
                    <svg class="w-4 h-4 text-astro-orange mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Audio Call
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-gray-500 font-medium">Date</span>
                  <span class="text-sm font-bold text-gray-900 flex items-center" id="summary-date">
                    25 Sep 2026
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-gray-500 font-medium">Time</span>
                  <span class="text-sm font-bold text-gray-900 flex items-center" id="summary-time">
                    10:00 AM (IST)
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-gray-500 font-medium">Duration</span>
                  <span class="text-sm font-bold text-gray-900 flex items-center" id="summary-duration">
                    30 Minutes
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-sm text-gray-500 font-medium">Rate</span>
                  <span class="text-sm font-bold text-gray-900" id="summary-rate">₹40/min</span>
                </div>
              </div>
              
              <div class="border-t border-gray-100 pt-4 mb-6">
                <div class="flex justify-between items-end">
                  <span class="text-sm font-bold text-gray-900">Total Amount</span>
                  <div class="text-right">
                    <div class="text-2xl font-bold text-gray-900 leading-none" id="summary-total">₹1,200</div>
                    <div class="text-xs text-gray-500 font-medium mt-1">(Inclusive of all taxes)</div>
                  </div>
                </div>
              </div>
              
              <button id="proceed-payment-btn" type="button" onclick="submitBooking(this)" class="w-full block text-center bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-4 rounded-xl shadow-md shadow-orange-200 transition-colors mb-4 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                Proceed to Payment &rarr;
              </button>
              <div id="booking-error-msg" class="text-red-500 text-xs font-bold text-center mb-4 hidden"></div>
              
              <div class="flex items-center justify-center gap-2 text-xs font-semibold text-gray-500">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                Your booking details are secure with us.
              </div>
            </div>
            
            <!-- What Happens Next? -->
            <div class="bg-transparent pt-2 hidden lg:block">
              <h3 class="font-bold text-gray-900 mb-4">What Happens Next?</h3>
              <ul class="space-y-4">
                <li class="flex gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-gray-900">Complete Your Payment</h4>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Proceed to payment to confirm your booking.</p>
                  </div>
                </li>
                <li class="flex gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-gray-900">Get Confirmation</h4>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">You will receive a booking confirmation.</p>
                  </div>
                </li>
                <li class="flex gap-3">
                  <div class="w-8 h-8 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-gray-900">Be Available on Time</h4>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">The astrologer will call you at the selected time.</p>
                  </div>
                </li>
              </ul>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </main>
  
  <script>
    // --- TABS LOGIC ---
    let currentTab = 1;
    const totalTabs = 4;

    function goToTab(tabIndex) {
      const errorMsg = document.getElementById('booking-error-msg');
      if(errorMsg) errorMsg.classList.add('hidden');
      
      // Validation for moving forward
      if (tabIndex > currentTab) {
          // Check if astrologer is loaded
          const summaryName = document.getElementById('summary-name');
          if (!summaryName || summaryName.textContent === 'Loading...' || summaryName.textContent === 'Astrologer not found.' || summaryName.textContent === 'Failed to load profile.') {
              if(errorMsg) {
                  errorMsg.textContent = "Please wait for astrologer details to load or select a valid astrologer.";
                  errorMsg.classList.remove('hidden');
              }
              return;
          }

          if (tabIndex >= 2) {
              const typeInput = document.querySelector('input[name="consultation_type"]:checked');
              if (!typeInput) {
                  if(errorMsg) {
                      errorMsg.textContent = "Please select a consultation type.";
                      errorMsg.classList.remove('hidden');
                  }
                  return;
              }
          }
          if (tabIndex >= 3) {
              const dateInput = document.querySelector('input[name="date"]:checked');
              const timeInput = document.querySelector('input[name="time"]:checked');
              const durationInput = document.querySelector('input[name="duration"]:checked');
              if (!dateInput || !timeInput || !durationInput) {
                  if(errorMsg) {
                      errorMsg.textContent = "Please select date, time, and duration.";
                      errorMsg.classList.remove('hidden');
                  }
                  return;
              }
          }
      }

      // Hide all panes
      for(let i = 1; i <= totalTabs; i++) {
        const pane = document.getElementById('pane-' + i);
        if(pane) {
          pane.classList.add('hidden');
          pane.classList.remove('block');
        }
      }
      // Show selected pane
      const targetPane = document.getElementById('pane-' + tabIndex);
      if(targetPane) {
        targetPane.classList.remove('hidden');
        targetPane.classList.add('block');
      }
      currentTab = tabIndex;
      updateTabUI();
    }

    function updateTabUI() {
      for(let i = 1; i <= totalTabs; i++) {
        const icon = document.getElementById('nav-icon-' + i);
        const text = document.getElementById('nav-text-' + i);
        const line = document.getElementById('nav-line-' + i);
        
        if (i < currentTab) {
          // Completed
          icon.className = "w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto";
          icon.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>';
          text.className = "text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors";
          if (line) line.className = "absolute top-4 left-[50%] w-full h-[2px] bg-astro-orange z-0 transition-colors";
        } else if (i === currentTab) {
          // Active
          icon.className = "w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto";
          icon.innerHTML = i;
          text.className = "text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors";
          if (line) line.className = "absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors";
        } else {
          // Pending
          icon.className = "w-8 h-8 rounded-full bg-white border-2 border-gray-200 text-gray-400 flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto";
          icon.innerHTML = i;
          text.className = "text-[10px] sm:text-xs font-medium text-gray-400 mt-2 text-center leading-tight transition-colors";
          if (line) line.className = "absolute top-4 left-[50%] w-full h-[2px] bg-gray-200 z-0 transition-colors";
        }
      }
    }

    // --- DYNAMIC SUMMARY LOGIC ---
    function updateSummary() {
      // Get selected inputs
      const typeInput = document.querySelector('input[name="consultation_type"]:checked');
      const dateInput = document.querySelector('input[name="date"]:checked');
      const timeInput = document.querySelector('input[name="time"]:checked');
      const durationInput = document.querySelector('input[name="duration"]:checked');

      if (!typeInput || !dateInput || !timeInput || !durationInput) return;

      const type = typeInput.getAttribute('data-label');
      const rate = parseInt(typeInput.getAttribute('data-rate'));
      const date = dateInput.value;
      const time = timeInput.value;
      const duration = parseInt(durationInput.value);
      
      const total = rate * duration;

      // Update Summary UI
      document.getElementById('summary-type').innerHTML = type;
      document.getElementById('summary-date').innerText = date;
      document.getElementById('summary-time').innerText = time;
      document.getElementById('summary-duration').innerText = duration + ' Minutes';
      document.getElementById('summary-rate').innerText = '₹' + rate + '/min';
      document.getElementById('summary-total').innerText = '₹' + total.toLocaleString();

      // Update Review Tab UI
      document.getElementById('review-type').innerText = type;
      document.getElementById('review-date').innerText = date;
      document.getElementById('review-time').innerText = time;
      document.getElementById('review-duration').innerText = duration + ' Minutes';
      document.getElementById('review-rate').innerText = '₹' + rate + '/min';
      document.getElementById('review-total').innerText = '₹' + total.toLocaleString();
      
      const notesInput = document.getElementById('consultation-notes');
      const reviewNotes = document.getElementById('review-notes');
      if(notesInput && reviewNotes) {
          reviewNotes.innerText = notesInput.value.trim() || 'None';
      }
      
      // Update duration prices dynamically based on rate
      const durPrices = document.querySelectorAll('.duration-price');
      durPrices.forEach(el => {
        const mins = parseInt(el.getAttribute('data-mins'));
        el.innerText = '₹' + (rate * mins).toLocaleString();
      });
    }

    // --- INITIALIZE ---
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
      
      // Initialize tabs and summary
      goToTab(1);
      updateSummary();
    }); // End DOMContentLoaded

    window.generateBookingUI = function(astro) {
        const datesContainer = document.getElementById('dates-carousel-container');
        const timesContainer = document.getElementById('time-slots-container');
        const durationsContainer = document.getElementById('durations-container');
        
        const IST_OFFSET = 5.5 * 60 * 60 * 1000;
        const getISTDate = () => {
           const now = new Date();
           const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
           return new Date(utc + IST_OFFSET);
        };
        
        const nowIST = getISTDate();
        let datesHTML = '';
        let availableDates = [];
        
        for(let i = 0; i < 7; i++) {
           let d = new Date(nowIST.getTime() + i * 24 * 60 * 60 * 1000);
           if (i === 0 && nowIST.getHours() >= 21) {
              continue; // Skip today if it's past 9 PM
           }
           availableDates.push(d);
        }
        
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        
        availableDates.forEach((d, idx) => {
           const dateStr = d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
           const dayName = days[d.getDay()];
           const displayDate = d.getDate() + ' ' + months[d.getMonth()];
           const isChecked = idx === 0 ? 'checked' : '';
           
           datesHTML += `
              <label class="cursor-pointer shrink-0">
                <input type="radio" name="date" value="${dateStr}" class="peer sr-only" ${isChecked} onchange="renderTimeSlots(this.value)">
                <div class="w-16 h-16 rounded-xl border-2 border-transparent bg-gray-50 text-gray-600 flex flex-col items-center justify-center transition-all peer-checked:bg-astro-orange peer-checked:text-white shadow-sm hover:bg-gray-100">
                  <span class="text-sm font-bold">${dayName}</span>
                  <span class="text-xs font-semibold opacity-90">${displayDate}</span>
                </div>
              </label>
           `;
        });
        datesContainer.innerHTML = datesHTML;
        
        window.renderTimeSlots = function(selectedDateStr) {
           const selectedDate = new Date(selectedDateStr);
           const isToday = selectedDate.getDate() === nowIST.getDate() && selectedDate.getMonth() === nowIST.getMonth() && selectedDate.getFullYear() === nowIST.getFullYear();
           
           let timesHTML = '';
           const generateSlots = (startHour, endHour, label) => {
               let slots = [];
               for(let h = startHour; h < endHour; h++) {
                   for(let m = 0; m < 60; m += 30) {
                       if (isToday) {
                           if (h < nowIST.getHours() || (h === nowIST.getHours() && m <= nowIST.getMinutes())) {
                               continue;
                           }
                       }
                       const timeStr = `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}:00`;
                       
                       let isBooked = false;
                       const selectedDateFormatted = `${selectedDate.getFullYear()}-${(selectedDate.getMonth() + 1).toString().padStart(2, '0')}-${selectedDate.getDate().toString().padStart(2, '0')}`;
                       (astro.booked_slots || []).forEach(b => {
                           if (b.booking_date === selectedDateFormatted) {
                               if (timeStr >= b.start_time && timeStr < b.end_time) {
                                   isBooked = true;
                               }
                           }
                       });
                       
                       if (!isBooked) {
                           const ampm = h >= 12 ? 'PM' : 'AM';
                           const displayH = h > 12 ? h - 12 : (h === 0 ? 12 : h);
                           const displayTime = `${displayH}:${m.toString().padStart(2, '0')} ${ampm}`;
                           slots.push(displayTime);
                       }
                   }
               }
               
               if (slots.length > 0) {
                   timesHTML += `<div><h4 class="text-sm font-bold text-gray-800 mb-3">${label}</h4><div class="flex flex-wrap gap-2.5">`;
                   slots.forEach((s) => {
                       timesHTML += `
                           <label class="cursor-pointer">
                             <input type="radio" name="time" value="${s} (IST)" class="peer sr-only" onchange="updateSummary()">
                             <div class="px-4 py-2 text-sm font-semibold rounded-lg border border-gray-200 bg-white text-gray-600 transition-all peer-checked:border-astro-orange peer-checked:bg-astro-orange peer-checked:text-white shadow-sm">${s}</div>
                           </label>
                       `;
                   });
                   timesHTML += `</div></div>`;
               }
           };
           
           generateSlots(9, 12, 'Morning');
           generateSlots(12, 16, 'Afternoon');
           generateSlots(16, 21, 'Evening');
           
           if (!timesHTML) timesHTML = '<p class="text-gray-500 text-sm font-bold">No available slots for this date.</p>';
           timesContainer.innerHTML = timesHTML;
           
           const firstTime = timesContainer.querySelector('input[name="time"]');
           if (firstTime) firstTime.checked = true;
           
           if(typeof updateSummary === 'function') updateSummary();
        };
        
        if (availableDates.length > 0) {
            const firstDateStr = availableDates[0].getDate() + ' ' + months[availableDates[0].getMonth()] + ' ' + availableDates[0].getFullYear();
            renderTimeSlots(firstDateStr);
        }

        let durHTML = '';
        for(let m = 5; m <= 60; m += 5) {
            const isChecked = m === 5 ? 'checked' : '';
            durHTML += `
              <label class="cursor-pointer">
                <input type="radio" name="duration" value="${m}" class="peer sr-only" ${isChecked} onchange="updateSummary()">
                <div class="flex flex-col items-center justify-center p-3 border-2 border-gray-200 rounded-xl bg-white transition-all hover:border-orange-200 peer-checked:border-astro-orange peer-checked:bg-[#FFF7ED]">
                  <span class="font-bold text-gray-900 text-sm">${m} Min</span>
                  <span class="text-sm font-semibold text-gray-600 duration-price" data-mins="${m}">--</span>
                </div>
              </label>
            `;
        }
        durationsContainer.innerHTML = durHTML;
        
        if(typeof updateSummary === 'function') updateSummary();
    };

    async function submitBooking(btn) {
      const typeInput = document.querySelector('input[name="consultation_type"]:checked');
      const dateInput = document.querySelector('input[name="date"]:checked');
      const timeInput = document.querySelector('input[name="time"]:checked');
      const durationInput = document.querySelector('input[name="duration"]:checked');
      const notesInput = document.getElementById('consultation-notes');
      const errorMsg = document.getElementById('booking-error-msg');
      
      if(errorMsg) errorMsg.classList.add('hidden');
      
      if (!typeInput || !dateInput || !timeInput || !durationInput) {
        if(errorMsg) {
          errorMsg.textContent = "Please complete all previous steps before proceeding.";
          errorMsg.classList.remove('hidden');
        }
        return;
      }
      
      const urlParams = new URLSearchParams(window.location.search);
      const astrologerId = urlParams.get('id');
      if (!astrologerId) {
        if(errorMsg) {
          errorMsg.textContent = "Astrologer ID is missing.";
          errorMsg.classList.remove('hidden');
        }
        return;
      }
      
      const originalText = btn.innerHTML;
      btn.innerHTML = "Processing...";
      btn.disabled = true;

      try {
          let cleanTime = timeInput.value.replace(' (IST)', '').trim();
          const timeMatch = cleanTime.match(/(\d+):(\d+)\s*(AM|PM)/i);
          let hours = 0; let mins = 0;
          if (timeMatch) {
            hours = parseInt(timeMatch[1]);
            mins = parseInt(timeMatch[2]);
            const ampm = timeMatch[3].toUpperCase();
            if (ampm === 'PM' && hours < 12) hours += 12;
            if (ampm === 'AM' && hours === 12) hours = 0;
          } else {
             // Fallback if formatting was different
             const parts = cleanTime.split(':');
             if(parts.length >= 2) {
                 hours = parseInt(parts[0]);
                 mins = parseInt(parts[1]);
             }
          }
          
          const startTimeFormatted = `${hours.toString().padStart(2, '0')}:${mins.toString().padStart(2, '0')}:00`;

          const duration = parseInt(durationInput.value);
          const endDate = new Date(0, 0, 0, hours, mins + duration, 0);
          const endTimeFormatted = `${endDate.getHours().toString().padStart(2, '0')}:${endDate.getMinutes().toString().padStart(2, '0')}:00`;

          const d = new Date(dateInput.value);
          if (isNaN(d.getTime())) {
              throw new Error("Invalid date selected");
          }
          const dateFormatted = `${d.getFullYear()}-${(d.getMonth() + 1).toString().padStart(2, '0')}-${d.getDate().toString().padStart(2, '0')}`;

          const payload = {
            astrologer_id: astrologerId,
            consultation_type: typeInput.value,
            booking_date: dateFormatted,
            start_time: startTimeFormatted,
            end_time: endTimeFormatted,
            duration_minutes: duration,
            notes: notesInput ? notesInput.value : ''
          };

          const res = await window.api.post('/consultations', payload);
          if (res && res.consultation && res.consultation.id) {
            window.location.href = `/Booking/Payment?id=${res.consultation.id}`;
          } else if (res && res.data && res.data.id) {
            window.location.href = `/Booking/Payment?id=${res.data.id}`;
          } else {
            throw new Error(res.message || "Failed to create consultation.");
          }
      } catch (err) {
        if(errorMsg) {
          errorMsg.textContent = err.message || "An error occurred while booking.";
          errorMsg.classList.remove('hidden');
        }
        btn.innerHTML = originalText;
        btn.disabled = false;
      }
    }
      // Initialize tabs and summary is now inside DOMContentLoaded
    </script>
    <script src="/js/api.js"></script>
  <script src="/js/astrologer-profile.js"></script>
</body>
</html>
