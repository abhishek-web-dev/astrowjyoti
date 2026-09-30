<?php
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function getSidebarClass($path, $current_path) {
    if ($current_path === $path || $current_path === $path . '.php') {
        return 'flex items-center px-4 py-3 text-sm font-medium text-astro-orange bg-orange-50 rounded-xl transition-colors';
    }
    return 'flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-astro-orange hover:bg-orange-50 rounded-xl transition-colors';
}
?>
<!-- Left Sidebar -->
<style>
.hide-sidebar-scrollbar {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
.hide-sidebar-scrollbar::-webkit-scrollbar {
  display: none;
  width: 0;
}
</style>
<aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-100 z-50 transform -translate-x-full lg:translate-x-0 lg:static lg:flex flex-col transition-transform duration-300 ease-in-out">
  <div class="h-20 flex items-center px-6 border-b border-gray-50">
    <a href="/index" class="flex-shrink-0 flex items-center gap-3">
      <img class="h-10 w-auto object-contain" src="/asset/logo.png" alt="Astrowjyoti Logo" onerror="this.src='https://placehold.co/100x40/ea580c/ffffff?text=LOGO'">
    </a>
    <button id="close-sidebar" class="ml-auto lg:hidden text-gray-500 hover:text-gray-700">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
  </div>

  <div class="flex-1 overflow-y-auto py-4 px-3 space-y-1 hide-sidebar-scrollbar">
    <a href="/Dashboard/Dashboard" class="<?= getSidebarClass('/Dashboard/Dashboard', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
      Dashboard
    </a>
    <a href="/Dashboard/Talk-to-Astrologer" class="<?= getSidebarClass('/Dashboard/Talk-to-Astrologer', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
      Talk to Astrologer
    </a>
    <a href="/Chat/Chat" class="<?= getSidebarClass('/Chat/Chat', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
      Chat with Astrologer
    </a>
    <a href="/Video/Video-Consultation" class="<?= getSidebarClass('/Video/Video-Consultation', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
      Video Consultation
    </a>
    <a href="/Dashboard/My-Consultations" class="<?= getSidebarClass('/Dashboard/My-Consultations', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
      My Consultations
    </a>
    <a href="/Dashboard/Favorites" class="<?= getSidebarClass('/Dashboard/Favorites', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
      Favorites
    </a>
    <a href="/Dashboard/Wallet-and-Payments" class="<?= getSidebarClass('/Dashboard/Wallet-and-Payments', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
      Wallet & Payments
    </a>
    <a href="/Booking/Consultation-Form" class="<?= getSidebarClass('/Booking/Consultation-Form', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
      Booking
    </a>
    <a href="/Booking/Payment" class="<?= getSidebarClass('/Booking/Payment', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
      Payment
    </a>
    <a href="/Dashboard/Profile" class="<?= getSidebarClass('/Dashboard/Profile', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
      My Profile
    </a>
    <a href="/Dashboard/Settings" class="<?= getSidebarClass('/Dashboard/Settings', $current_path) ?>">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
      Settings
    </a>
    
    <button id="logoutBtn" class="flex items-center w-full px-4 py-3 text-sm font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-xl transition-colors text-left mt-2">
      <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
      <span id="logoutText">Logout</span>
    </button>
  </div>

  <!-- Need Help Card -->
  <div class="p-4 mt-auto mb-4 mx-4 bg-orange-50/70 rounded-2xl border border-orange-100 relative overflow-hidden">
    <div class="relative z-10">
      <div class="flex items-center gap-2 mb-2 text-astro-orange font-semibold text-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zM12 9h.01M12 15h.01M15 12h.01M9 12h.01"></path></svg>
        Need Help?
      </div>
      <p class="text-xs text-gray-600 mb-3">Our support team is always here for you.</p>
      <button class="w-full bg-white text-astro-orange border border-orange-200 py-2 rounded-xl text-sm font-medium hover:bg-orange-50 transition-colors">Contact Support &rarr;</button>
    </div>
    <!-- Subtle BG graphic -->
    <svg class="absolute -bottom-4 -right-4 w-24 h-24 text-orange-100 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4.5l6.5 13h-13L12 6.5z"/></svg>
  </div>
</aside>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', async () => {
            if (logoutBtn.disabled) return;
            const originalHtml = logoutBtn.innerHTML;
            logoutBtn.disabled = true;
            document.getElementById('logoutText').innerText = 'Logging out...';
            
            try {
                const res = await window.api.post('/auth/logout', {});
                if (res) {
                    window.location.href = '/Auth/Login';
                }
            } catch (error) {
                console.error("Logout failed:", error);
                logoutBtn.disabled = false;
                logoutBtn.innerHTML = originalHtml;
            }
        });
    }
});
</script>
