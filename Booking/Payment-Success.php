<?php
require_once __DIR__ . '/../auth_guard.php';

// Payment-Success.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-[#f9fafb] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include __DIR__ . '/../Dashboard/sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fafafa]">
    
    <?php include __DIR__ . '/../Dashboard/header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
      
      <div id="loading-state" class="flex items-center justify-center h-full">
         <div class="animate-pulse text-center">
             <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-4"></div>
             <div class="h-6 w-32 bg-gray-200 rounded mx-auto"></div>
         </div>
      </div>

      <div id="success-state" class="max-w-2xl mx-auto bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hidden">
        <div class="bg-green-500 p-8 text-center text-white">
          <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
            <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
          </div>
          <h1 class="text-3xl font-bold font-serif mb-2">Payment Successful!</h1>
          <p class="text-green-50 font-medium">Your consultation has been confirmed.</p>
        </div>
        
        <div class="p-6 md:p-8">
          <h2 class="text-lg font-bold text-gray-900 mb-6">Booking Details</h2>
          
          <div class="flex items-center gap-4 mb-8">
            <img id="astro-img" src="/lady.png" alt="Astrologer" class="w-16 h-16 rounded-xl object-cover border border-gray-100 shadow-sm">
            <div>
              <p class="text-sm text-gray-500 mb-1">Consultation with</p>
              <h3 id="astro-name" class="font-bold text-gray-900 text-lg leading-tight">...</h3>
            </div>
          </div>
          
          <div class="space-y-4 text-sm mb-8 bg-gray-50 rounded-2xl p-6 border border-gray-100">
            <div class="flex justify-between items-center pb-4 border-b border-gray-200">
              <span class="text-gray-500">Consultation Type</span>
              <span id="booking-type" class="font-bold text-gray-900">...</span>
            </div>
            <div class="flex justify-between items-center pb-4 border-b border-gray-200">
              <span class="text-gray-500">Date & Time</span>
              <span id="booking-datetime" class="font-bold text-gray-900">...</span>
            </div>
            <div class="flex justify-between items-center pb-4 border-b border-gray-200">
              <span class="text-gray-500">Duration</span>
              <span id="booking-duration" class="font-bold text-gray-900">...</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-500">Amount Paid</span>
              <span id="booking-amount" class="font-bold text-green-600 text-lg">...</span>
            </div>
          </div>
          
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/Dashboard/Dashboard" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3.5 px-4 rounded-xl transition-colors">
              Go to Dashboard
            </a>
            <a href="/Dashboard/My-Consultations" id="primary-action-btn" class="flex-1 text-center bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-4 rounded-xl shadow-md shadow-orange-200 transition-colors">
              View My Consultations
            </a>
          </div>
        </div>
      </div>
      
      <div id="error-state" class="max-w-xl mx-auto bg-white rounded-3xl shadow-sm border border-red-100 overflow-hidden hidden">
          <div class="p-8 text-center">
              <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
              </div>
              <h1 class="text-2xl font-bold text-gray-900 mb-2">Payment Not Confirmed</h1>
              <p id="error-message" class="text-gray-500 mb-8">We could not verify your payment. If money was deducted, it will be refunded automatically.</p>
              
              <a href="/Dashboard/Dashboard" class="block w-full text-center bg-gray-900 hover:bg-black text-white font-bold py-3.5 px-4 rounded-xl transition-colors">
                Return to Dashboard
              </a>
          </div>
      </div>

    </div>
  </main>
  
  <script src="/js/api.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', async () => {
      // Sidebar logic
      const openBtn = document.getElementById('open-sidebar');
      const closeBtn = document.getElementById('close-sidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobile-overlay');

      if (openBtn && sidebar && overlay && closeBtn) {
        openBtn.addEventListener('click', () => { sidebar.classList.remove('-translate-x-full'); overlay.classList.remove('hidden'); });
        closeBtn.addEventListener('click', () => { sidebar.classList.add('-translate-x-full'); overlay.classList.add('hidden'); });
        overlay.addEventListener('click', () => { sidebar.classList.add('-translate-x-full'); overlay.classList.add('hidden'); });
      }

      const urlParams = new URLSearchParams(window.location.search);
      const id = urlParams.get('id');
      
      if (!id) {
          showError('Invalid consultation link.');
          return;
      }

      try {
          const res = await window.api.get(`/consultations/${id}`);
          if (res && res.data) {
              const booking = res.data;
              
              if (booking.payment_status === 'paid') {
                  // Show success
                  document.getElementById('loading-state').classList.add('hidden');
                  document.getElementById('success-state').classList.remove('hidden');
                  
                  document.getElementById('astro-name').innerText = booking.display_name || booking.astrologer_name;
                  if (booking.profile_image) document.getElementById('astro-img').src = booking.profile_image;
                  
                  const type = booking.consultation_type.toLowerCase();
                  let displayType = type.charAt(0).toUpperCase() + type.slice(1);
                  if (type === 'audio' || type === 'video') displayType += ' Call';
                  document.getElementById('booking-type').innerText = displayType;

                  const actionBtn = document.getElementById('primary-action-btn');
                  if (actionBtn) {
                      if (type === 'chat') {
                          actionBtn.href = `/Chat/Chat?consultation_id=${booking.id}`;
                          actionBtn.innerText = 'Open Chat Session';
                      } else if (type === 'video') {
                          actionBtn.href = `/Video/Video-Consultation?consultation_id=${booking.id}`;
                          actionBtn.innerText = 'Open Video Session';
                      } else if (type === 'audio' || type === 'call') {
                          // Dedicated Audio/Call page does not exist yet.
                          // Fallback to My Consultations as instructed, or leave it as View My Consultations
                          actionBtn.href = `/Dashboard/My-Consultations`;
                          actionBtn.innerText = 'View in My Consultations';
                      } else {
                          actionBtn.href = `/Dashboard/My-Consultations`;
                          actionBtn.innerText = 'View My Consultations';
                      }
                  }
                  
                  const d = new Date(booking.booking_date);
                  const dateStr = d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
                  
                  const t = booking.start_time.split(':');
                  let hours = parseInt(t[0]);
                  const mins = t[1];
                  const ampm = hours >= 12 ? 'PM' : 'AM';
                  hours = hours % 12;
                  hours = hours ? hours : 12;
                  const timeStr = `${hours}:${mins} ${ampm} (IST)`;
                  
                  document.getElementById('booking-datetime').innerText = `${dateStr} at ${timeStr}`;
                  document.getElementById('booking-duration').innerText = `${booking.duration_minutes} Minutes`;
                  document.getElementById('booking-amount').innerText = `₹${parseFloat(booking.price).toLocaleString()}`;
              } else {
                  showError('Your payment is pending or failed. Please check your wallet or try again.');
              }
          }
      } catch (err) {
          showError('Unable to verify consultation status. Please contact support.');
      }
    });
    
    function showError(msg) {
        document.getElementById('loading-state').classList.add('hidden');
        document.getElementById('success-state').classList.add('hidden');
        document.getElementById('error-state').classList.remove('hidden');
        if (msg) document.getElementById('error-message').innerText = msg;
    }
  </script>
</body>
</html>
