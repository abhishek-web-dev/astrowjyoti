<?php
require_once __DIR__ . '/../auth_guard.php';

// Payment-Failed.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Failed - Astrowjyoti</title>
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
    <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 flex items-center justify-center">
      
      <div class="max-w-xl w-full bg-white rounded-3xl shadow-sm border border-red-100 overflow-hidden">
          <div class="p-8 text-center">
              <div class="w-20 h-20 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-4 border-4 border-red-100">
                  <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
              </div>
              <h1 class="text-2xl font-bold text-gray-900 mb-2">Payment Failed or Cancelled</h1>
              <p class="text-gray-500 mb-8">We could not process your payment. If any amount was deducted, it will be refunded to your source account within 5-7 business days.</p>
              
              <div class="flex flex-col sm:flex-row gap-4">
                  <button onclick="window.history.back()" class="flex-1 block w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-3.5 px-4 rounded-xl transition-colors">
                    Try Again
                  </button>
                  <a href="/Dashboard/Dashboard" class="flex-1 block w-full text-center bg-astro-orange hover:bg-orange-700 text-white font-bold py-3.5 px-4 rounded-xl transition-colors">
                    Return to Dashboard
                  </a>
              </div>
          </div>
      </div>

    </div>
  </main>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
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
    });
  </script>
</body>
</html>
