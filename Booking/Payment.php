<?php
require_once __DIR__ . '/../auth_guard.php';

// Payment.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    input[type="radio"]:checked + div {
      border-color: #EA580C !important;
      background-color: #FFF7ED !important;
    }
    input[type="radio"]:checked + div .radio-inner {
      border-color: #EA580C !important;
      border-width: 6px !important;
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
        <div class="lg:col-span-3">
          <a href="javascript:history.back()" class="inline-flex items-center text-sm font-semibold text-astro-orange hover:text-orange-700 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Booking
          </a>
        </div>
        
        <div class="lg:col-span-6 flex justify-center w-full mb-6 lg:mb-0">
          <div class="flex items-start justify-between w-full max-w-2xl px-2">
            
            <!-- Step 1 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-default">
                <div class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
              </button>
              <span class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Consultation<br class="sm:hidden"> Type</span>
              <div class="absolute top-4 left-[50%] w-full h-[2px] bg-astro-orange z-0 transition-colors"></div>
            </div>
            
            <!-- Step 2 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-default">
                <div class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
              </button>
              <span class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Date &<br class="sm:hidden"> Time</span>
              <div class="absolute top-4 left-[50%] w-full h-[2px] bg-astro-orange z-0 transition-colors"></div>
            </div>
            
            <!-- Step 3 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-default">
                <div class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
              </button>
              <span class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Details</span>
              <div class="absolute top-4 left-[50%] w-full h-[2px] bg-astro-orange z-0 transition-colors"></div>
            </div>
            
            <!-- Step 4 -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-default">
                <div class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
              </button>
              <span class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Review</span>
              <div class="absolute top-4 left-[50%] w-full h-[2px] bg-astro-orange z-0 transition-colors"></div>
            </div>

            <!-- Step 5 (Payment - ACTIVE) -->
            <div class="flex flex-col items-center flex-1 relative group">
              <button class="focus:outline-none relative z-10 cursor-default">
                <div class="w-8 h-8 rounded-full bg-astro-orange text-white flex items-center justify-center text-sm font-bold shadow-sm transition-colors mx-auto">5</div>
              </button>
              <span class="text-[10px] sm:text-xs font-bold text-gray-900 mt-2 text-center leading-tight transition-colors">Payment</span>
            </div>

          </div>
        </div>
        
        <div class="lg:col-span-3"></div>
      </div>

      <!-- Main Layout Grid -->
      <div class="grid grid-cols-1 xl:grid-cols-12 gap-8 pb-20">
        
        <!-- LEFT COLUMN: PAYMENT METHODS -->
        <div class="xl:col-span-8">
          
          <div class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-gray-100">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 gap-4">
              <div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">4. Make Payment</h1>
                <p class="text-sm text-gray-500">Choose a payment method to confirm your consultation booking.</p>
              </div>
              <div class="flex items-center gap-2 bg-yellow-50 text-yellow-700 px-3 py-1.5 rounded-lg border border-yellow-100 text-sm font-medium">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                Secure Payment
              </div>
            </div>

            <!-- Payment Methods List -->
            <div class="space-y-4">
              
              <!-- UPI -->
              <label class="block cursor-pointer relative">
                <input type="radio" name="payment_method" value="upi" class="peer sr-only" checked>
                <div class="border border-gray-200 rounded-xl p-5 hover:border-orange-300 transition-all bg-white group flex items-start sm:items-center gap-4">
                  <!-- Radio Circle -->
                  <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 flex-shrink-0 transition-colors mt-0.5 sm:mt-0 bg-white"></div>
                  
                  <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/></svg>
                  </div>
                  
                  <div class="flex-1">
                    <h3 class="font-bold text-gray-900">UPI (Recommended)</h3>
                    <p class="text-sm text-gray-500 mt-1">Pay using Google Pay, PhonePe, Paytm, or any UPI app</p>
                  </div>
                  
                  <div class="hidden md:flex items-center gap-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Google_Pay_Logo.svg" alt="GPay" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/PhonePe_Logo.svg" alt="PhonePe" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Paytm_Logo_%28standalone%29.svg" alt="Paytm" class="h-5">
                  </div>
                </div>
              </label>

              <!-- Credit / Debit Card -->
              <label class="block cursor-pointer relative">
                <input type="radio" name="payment_method" value="card" class="peer sr-only">
                <div class="border border-gray-200 rounded-xl p-5 hover:border-orange-300 transition-all bg-white group flex items-start sm:items-center gap-4">
                  <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 flex-shrink-0 transition-colors mt-0.5 sm:mt-0 bg-white"></div>
                  <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0 text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h3 class="font-bold text-gray-900">Credit / Debit Card</h3>
                    <p class="text-sm text-gray-500 mt-1">Visa, Mastercard, RuPay and other cards</p>
                  </div>
                  <div class="hidden md:flex items-center gap-2 opacity-80">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="h-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Rupay-Logo.png" alt="RuPay" class="h-6 object-contain">
                  </div>
                </div>
              </label>

              <!-- Net Banking -->
              <label class="block cursor-pointer relative">
                <input type="radio" name="payment_method" value="netbanking" class="peer sr-only">
                <div class="border border-gray-200 rounded-xl p-5 hover:border-orange-300 transition-all bg-white group flex items-start sm:items-center gap-4">
                  <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 flex-shrink-0 transition-colors mt-0.5 sm:mt-0 bg-white"></div>
                  <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center flex-shrink-0 text-purple-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h3 class="font-bold text-gray-900">Net Banking</h3>
                    <p class="text-sm text-gray-500 mt-1">All major banks supported</p>
                  </div>
                </div>
              </label>

              <!-- Wallets -->
              <label class="block cursor-pointer relative">
                <input type="radio" name="payment_method" value="wallet" class="peer sr-only">
                <div class="border border-gray-200 rounded-xl p-5 hover:border-orange-300 transition-all bg-white group flex items-start sm:items-center gap-4">
                  <div class="radio-inner w-5 h-5 rounded-full border-2 border-gray-300 flex-shrink-0 transition-colors mt-0.5 sm:mt-0 bg-white"></div>
                  <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center flex-shrink-0 text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                  </div>
                  <div class="flex-1">
                    <h3 class="font-bold text-gray-900">Wallets</h3>
                    <p class="text-sm text-gray-500 mt-1">Pay using Amazon Pay, MobiKwik, etc.</p>
                  </div>
                </div>
              </label>
              
            </div>

            <!-- Coupon Code -->
            <div class="mt-8 border-t border-gray-100 pt-8">
              <label class="flex items-center gap-3 cursor-pointer group w-max">
                <div class="w-5 h-5 rounded border-2 border-gray-300 flex items-center justify-center group-hover:border-astro-orange transition-colors">
                  <svg class="w-3 h-3 text-white transition-opacity opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="font-semibold text-gray-700 group-hover:text-astro-orange transition-colors">Apply Coupon Code</span>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-astro-orange transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </label>
            </div>

          </div>

          <!-- Security Strip -->
          <div class="mt-6 bg-white rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100 flex flex-wrap gap-4 sm:gap-6 justify-between items-center text-sm">
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
              </div>
              <div>
                <p class="font-bold text-gray-900">100% Secure Payment</p>
                <p class="text-xs text-gray-500 mt-0.5">Your information is protected.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-full bg-yellow-50 text-yellow-500 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              </div>
              <div>
                <p class="font-bold text-gray-900">Instant Confirmation</p>
                <p class="text-xs text-gray-500 mt-0.5">Get booking confirmation instantly.</p>
              </div>
            </div>
            
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
              </div>
              <div>
                <p class="font-bold text-gray-900">24/7 Support</p>
                <p class="text-xs text-gray-500 mt-0.5">We're always here to help.</p>
              </div>
            </div>
          </div>
          
        </div>
        
        <!-- RIGHT COLUMN: PAYMENT SUMMARY -->
        <div class="xl:col-span-4">
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 sticky top-0 overflow-hidden flex flex-col">
            
            <div class="p-5 md:p-6 border-b border-gray-100 flex items-center justify-between">
              <h2 class="text-lg font-bold text-gray-900">Payment Summary</h2>
              <div class="bg-orange-50 text-astro-orange px-2 py-1 rounded text-xs font-bold flex items-center gap-1 border border-orange-100">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span id="countdown">09:52</span>
              </div>
            </div>

            <!-- Astrologer Profile -->
            <div class="p-5 md:p-6 border-b border-gray-100">
              <p class="text-xs text-gray-500 text-center mb-4">Complete your payment within this time</p>
              
              <div class="flex items-center gap-4">
                <img id="summary-img" src="/acharya.png" alt="Astrologer" class="w-14 h-14 rounded-xl object-cover border border-gray-100">
                <div>
                  <h3 id="summary-name" class="font-bold text-gray-900 leading-tight">Acharya Neelima</h3>
                  <div class="flex items-center gap-2 mt-1.5 text-xs text-gray-500">
                    <span class="flex items-center text-yellow-500 font-medium">
                      <svg class="w-3.5 h-3.5 mr-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                      <span id="summary-rating">4.9</span>
                    </span>
                    <span id="summary-reviews" class="opacity-80">(2.1k reviews)</span>
                    <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                    <span id="summary-exp">12+ Years Exp.</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Booking Details -->
            <div class="p-5 md:p-6 bg-gray-50/50">
              <div class="space-y-3.5 text-sm">
                <div class="flex justify-between items-center">
                  <span class="text-gray-500">Consultation Type</span>
                  <span id="summary-type" class="font-semibold text-gray-900 flex items-center gap-1.5">
                    <!-- Icon will be inserted here dynamically -->
                    Audio Call
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-gray-500">Date</span>
                  <span id="summary-date" class="font-semibold text-gray-900 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    25 Sep 2026
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-gray-500">Time</span>
                  <span id="summary-time" class="font-semibold text-gray-900 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    10:00 AM (IST)
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-gray-500">Duration</span>
                  <span id="summary-duration" class="font-semibold text-gray-900 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    30 Minutes
                  </span>
                </div>
              </div>
            </div>

            <!-- Price Breakdown -->
            <div class="p-5 md:p-6 border-t border-gray-100 flex-1">
              <div class="space-y-3.5 text-sm mb-6">
                <div class="flex justify-between items-start">
                  <span class="text-gray-500">Consultation Fee</span>
                  <div class="text-right">
                    <div id="summary-fee" class="font-bold text-gray-900">₹1,200</div>
                    <div id="summary-rate-calc" class="text-xs text-gray-400 mt-0.5">(₹40/min × 30 min)</div>
                  </div>
                </div>
                <div class="flex justify-between items-center">
                  <span class="text-gray-500 flex items-center gap-1 cursor-help group relative">
                    Platform Fee
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </span>
                  <span class="font-medium text-gray-900">₹0</span>
                </div>
                <div class="flex justify-between items-center text-green-600 font-medium">
                  <span>Discount</span>
                  <span id="summary-discount">- ₹0</span>
                </div>
              </div>
              
              <div class="border-t border-gray-100 pt-5 mb-6">
                <div class="flex justify-between items-end">
                  <div>
                    <h4 class="font-bold text-gray-900 text-lg">Total Amount</h4>
                  </div>
                  <div class="text-right">
                    <div id="summary-total" class="font-bold text-gray-900 text-2xl">₹1,200</div>
                    <div class="text-[10px] text-gray-400 mt-1 uppercase tracking-wider font-semibold">Inclusive of all taxes</div>
                  </div>
                </div>
              </div>

              <!-- Payment Button -->
              <button onclick="processPayment()" class="w-full bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-6 rounded-xl transition-all shadow-md shadow-orange-500/20 flex items-center justify-center gap-2 group">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                <span id="pay-btn-text">Pay ₹1,200</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
              </button>
              
              <p class="text-xs text-gray-400 text-center mt-4">
                By proceeding, you agree to our <a href="#" class="text-gray-500 hover:text-astro-orange underline">Terms & Conditions</a> and <a href="#" class="text-gray-500 hover:text-astro-orange underline">Privacy Policy</a>.
              </p>
            </div>

          </div>
        </div>
        
      </div>
    </div>
  </main>

  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="/js/api.js"></script>
  <script>
    let currentConsultation = null;

    document.addEventListener('DOMContentLoaded', () => {
      // Sidebar toggle logic
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

      loadBookingData();
    });

    async function loadBookingData() {
      const urlParams = new URLSearchParams(window.location.search);
      const id = urlParams.get('id');
      
      if (!id) {
        if (window.showNotification) {
            window.showNotification('Invalid consultation ID', 'error');
        }
        return;
      }

      try {
        const res = await window.api.get(`/consultations/${id}`);
        if (res && res.data) {
          const booking = res.data;
          currentConsultation = booking;

          // Check if already paid or cancelled
          const btn = document.querySelector('button[onclick="processPayment()"]');
          if (booking.payment_status === 'paid' || booking.status === 'cancelled') {
            document.getElementById('pay-btn-text').innerText = booking.payment_status === 'paid' ? 'Already Paid' : 'Cancelled';
            btn.disabled = true;
            btn.classList.add('opacity-50', 'cursor-not-allowed');
          }

          const type = booking.consultation_type;
          const duration = booking.duration_minutes;
          const total = parseFloat(booking.price);
          const rate = total / duration;

          document.getElementById('summary-name').innerText = booking.display_name || booking.astrologer_name;
          document.getElementById('summary-img').src = booking.profile_image || '/lady.png';
          
          let displayType = type.charAt(0).toUpperCase() + type.slice(1);
          if (type === 'audio' || type === 'video') displayType += ' Call';
          
          document.getElementById('summary-type').innerHTML = getIconHTMLForType(type) + displayType;
          
          const d = new Date(booking.booking_date);
          const dateStr = d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
          
          document.getElementById('summary-date').innerHTML = `<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>` + dateStr;
          
          const t = booking.start_time.split(':');
          let hours = parseInt(t[0]);
          const mins = t[1];
          const ampm = hours >= 12 ? 'PM' : 'AM';
          hours = hours % 12;
          hours = hours ? hours : 12;
          const timeStr = `${hours}:${mins} ${ampm} (IST)`;
          
          document.getElementById('summary-time').innerHTML = `<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>` + timeStr;
          document.getElementById('summary-duration').innerHTML = `<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>` + duration + ' Minutes';
          
          document.getElementById('summary-fee').innerText = '₹' + total.toLocaleString();
          document.getElementById('summary-rate-calc').innerText = `(₹${rate.toFixed(2)}/min × ${duration} min)`;
          document.getElementById('summary-total').innerText = '₹' + total.toLocaleString();
          if(booking.payment_status !== 'paid' && booking.status !== 'cancelled') {
             document.getElementById('pay-btn-text').innerText = 'Pay ₹' + total.toLocaleString();
          }
        }
      } catch (err) {
        if (window.showNotification) {
            window.showNotification('Failed to load consultation details.', 'error');
        }
      }
    }
    
    function getIconHTMLForType(type) {
      if (type === 'video') {
        return `<svg class="w-4 h-4 text-purple-500 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>`;
      } else if (type === 'chat') {
        return `<svg class="w-4 h-4 text-red-500 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>`;
      } else {
        return `<svg class="w-4 h-4 text-astro-orange mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>`;
      }
    }

    async function processPayment() {
      if (!currentConsultation) return;

      const btn = document.querySelector('button[onclick="processPayment()"]');
      const btnText = document.getElementById('pay-btn-text');
      const originalText = btnText.innerText;
      
      btnText.innerText = 'Processing...';
      btn.disabled = true;

      try {
        const res = await window.api.post('/payments/create-order', {
          consultation_id: currentConsultation.id
        });

        if (res && res.data && res.data.razorpay_order_id) {
          const rzpData = res.data;
          
          const options = {
            "key": rzpData.razorpay_key_id,
            "amount": rzpData.amount,
            "currency": rzpData.currency,
            "name": "Astrowjyoti",
            "description": "Consultation Booking",
            "order_id": rzpData.razorpay_order_id,
            "handler": async function (response) {
              try {
                  const verifyRes = await window.api.post('/payments/verify', {
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature,
                    consultation_id: rzpData.consultation_id
                  });
                  
                  if (verifyRes && verifyRes.message) {
                    window.location.href = '/Booking/Payment-Success?id=' + rzpData.consultation_id;
                  } else {
                    window.location.href = '/Booking/Payment-Failed';
                  }
              } catch (e) {
                 window.location.href = '/Booking/Payment-Failed';
              }
            },
            "theme": {
              "color": "#EA580C"
            },
            "modal": {
              "ondismiss": function() {
                 btnText.innerText = originalText;
                 btn.disabled = false;
              }
            }
          };
          
          const rzp1 = new Razorpay(options);
          rzp1.on('payment.failed', function (response){
              window.location.href = '/Booking/Payment-Failed';
          });
          rzp1.open();

        } else {
          throw new Error("Invalid response from server");
        }
      } catch (err) {
        if (window.showNotification) {
            window.showNotification(err.message || "Failed to initiate payment.", 'error');
        } else {
            console.error(err);
        }
        btnText.innerText = originalText;
        btn.disabled = false;
      }
    }
  </script>
</body>
</html>
