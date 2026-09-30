<?php
require_once __DIR__ . '/../auth_guard.php';

// Consultation-Details.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation Details - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-[#f9fafb] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include __DIR__ . '/sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fafafa]">
    
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
      
      <div class="max-w-3xl mx-auto mb-6 flex items-center justify-between">
        <a href="/Dashboard/My-Consultations" class="inline-flex items-center text-sm font-semibold text-astro-orange hover:text-orange-700 transition-colors">
          <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
          Back to Consultations
        </a>
      </div>

      <div id="loading-state" class="flex items-center justify-center h-64">
         <div class="animate-pulse text-center">
             <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-4"></div>
             <div class="h-6 w-32 bg-gray-200 rounded mx-auto"></div>
         </div>
      </div>

      <div id="details-state" class="max-w-3xl mx-auto bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hidden">
        
        <div class="p-6 md:p-8">
          <div class="flex justify-between items-start mb-8">
            <div>
              <h1 class="text-2xl font-bold font-serif text-gray-900 mb-1">Consultation Details</h1>
              <p class="text-gray-500 text-sm">Booking ID: #<span id="booking-id">...</span></p>
            </div>
            <span id="status-badge" class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600">Loading</span>
          </div>
          
          <div class="flex items-center gap-4 mb-8">
            <img id="astro-img" src="/lady.png" alt="Astrologer" class="w-20 h-20 rounded-xl object-cover border border-gray-100 shadow-sm">
            <div>
              <p class="text-sm text-gray-500 mb-1">Consultation with</p>
              <h3 id="astro-name" class="font-bold text-gray-900 text-xl leading-tight">...</h3>
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
            <div class="flex justify-between items-center pb-4 border-b border-gray-200">
              <span class="text-gray-500">Amount Paid</span>
              <span id="booking-amount" class="font-bold text-green-600 text-lg">...</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-500">Payment Status</span>
              <span id="payment-status" class="font-bold text-gray-900 uppercase">...</span>
            </div>
          </div>

          <div id="notes-container" class="mb-8 hidden">
            <h3 class="text-sm font-bold text-gray-900 mb-3">Notes</h3>
            <div class="bg-blue-50 p-4 rounded-xl border border-blue-100 text-sm text-gray-700">
              <p id="booking-notes"></p>
            </div>
          </div>
          
          <div class="flex flex-col sm:flex-row gap-4" id="action-container">
            <!-- Buttons dynamically inserted here -->
          </div>
        </div>
      </div>
      
      <div id="error-state" class="max-w-xl mx-auto bg-white rounded-3xl shadow-sm border border-red-100 overflow-hidden hidden">
          <div class="p-8 text-center">
              <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
              </div>
              <h1 class="text-2xl font-bold text-gray-900 mb-2">Error Loading Details</h1>
              <p id="error-message" class="text-gray-500 mb-8">We could not load this consultation. It may not exist or you don't have access.</p>
              
              <a href="/Dashboard/My-Consultations" class="block w-full text-center bg-gray-900 hover:bg-black text-white font-bold py-3.5 px-4 rounded-xl transition-colors">
                Return to Consultations
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
          showError('Invalid consultation ID.');
          return;
      }

      try {
          const res = await window.api.get(`/my-consultations/${id}`);
          if (res && res.data) {
              const booking = res.data;
              
              document.getElementById('loading-state').classList.add('hidden');
              document.getElementById('details-state').classList.remove('hidden');
              
              document.getElementById('booking-id').innerText = booking.consultation_id || id;
              document.getElementById('astro-name').innerText = booking.astrologer?.display_name || booking.astrologer?.name || 'Astrologer';
              if (booking.astrologer?.profile_image) {
                document.getElementById('astro-img').src = booking.astrologer.profile_image;
              }
              
              const type = booking.consultation_type;
              let displayType = type.charAt(0).toUpperCase() + type.slice(1);
              if (type === 'audio' || type === 'video') displayType += ' Call';
              document.getElementById('booking-type').innerText = displayType;
              
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
              document.getElementById('payment-status').innerText = booking.payment_status;

              if (booking.payment_status === 'paid') {
                document.getElementById('payment-status').classList.add('text-green-600');
              } else if (booking.payment_status === 'refunded') {
                document.getElementById('payment-status').classList.add('text-orange-500');
              } else {
                document.getElementById('payment-status').classList.add('text-red-500');
              }

              const statusBadge = document.getElementById('status-badge');
              statusBadge.innerText = booking.status;
              if (booking.status === 'confirmed' || booking.status === 'pending') {
                  statusBadge.className = 'px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide bg-green-50 text-green-700';
                  if (booking.status === 'confirmed') statusBadge.innerText = 'Upcoming';
              } else if (booking.status === 'active' || booking.status === 'in_progress') {
                  statusBadge.className = 'px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide bg-green-100 text-green-700 animate-pulse';
                  statusBadge.innerText = 'In Progress';
              } else if (booking.status === 'completed') {
                  statusBadge.className = 'px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600';
              } else if (booking.status === 'cancelled') {
                  statusBadge.className = 'px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide bg-red-50 text-red-600';
              }

              if (booking.notes) {
                  document.getElementById('notes-container').classList.remove('hidden');
                  document.getElementById('booking-notes').innerText = booking.notes;
              }

              // Actions
              const actionContainer = document.getElementById('action-container');
              actionContainer.innerHTML = '';

              if (booking.status === 'confirmed' || booking.status === 'pending') {
                  let joinUrl = '';
                  const cType = (booking.consultation_type || '').toLowerCase();
                  if (cType === 'chat') {
                      joinUrl = `/Chat/Chat?consultation_id=${booking.consultation_id || id}`;
                  } else if (cType === 'video') {
                      joinUrl = `/Video/Video-Consultation?consultation_id=${booking.consultation_id || id}`;
                  } else if (cType === 'audio' || cType === 'call') {
                      joinUrl = `javascript:alert('Dedicated Audio/Call page does not exist yet.')`;
                  } else {
                      joinUrl = `/Video/Video-Consultation?consultation_id=${booking.consultation_id || id}`;
                  }

                  actionContainer.innerHTML = `
                    <a href="${joinUrl}" class="flex-1 text-center bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-4 rounded-xl shadow-md shadow-orange-200 transition-colors flex items-center justify-center gap-2">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                      Join Session
                    </a>
                  `;
              } else if (booking.status === 'completed') {
                  actionContainer.innerHTML = `
                    <button class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3.5 px-4 rounded-xl transition-colors">
                      Leave Review
                    </button>
                    <a href="/Dashboard/Talk-to-Astrologer" class="flex-1 text-center bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-4 rounded-xl shadow-md shadow-orange-200 transition-colors">
                      Book Again
                    </a>
                  `;
              }

          }
      } catch (err) {
          showError('Unable to load consultation details. Please try again later.');
      }
    });
    
    function showError(msg) {
        document.getElementById('loading-state').classList.add('hidden');
        document.getElementById('details-state').classList.add('hidden');
        document.getElementById('error-state').classList.remove('hidden');
        if (msg) document.getElementById('error-message').innerText = msg;
    }
  </script>
</body>
</html>
