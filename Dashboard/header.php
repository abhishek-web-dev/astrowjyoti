<!-- Top Header -->
<header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-6 lg:px-8 z-30 shrink-0">
  <div class="flex items-center flex-1">
    <button id="open-sidebar" class="mr-4 lg:hidden text-gray-500 hover:text-gray-700">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
    <!-- Search -->
    <div class="relative w-full max-w-md hidden sm:block">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
      </div>
      <input type="text" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-2xl leading-5 bg-gray-50 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-1 focus:ring-astro-orange focus:border-astro-orange sm:text-sm transition-colors" placeholder="Search astrologers, services, or questions...">
    </div>
  </div>
  
  <div class="flex items-center gap-4 sm:gap-6 ml-4">
    <!-- Language -->
    <div class="relative group hidden sm:block">
      <button id="dash-lang-btn" class="flex items-center gap-1 text-sm font-medium text-gray-700 hover:text-astro-orange px-3 py-1.5 rounded-full bg-gray-50 border border-gray-200">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
        <span id="dash-current-lang">English</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
      </button>
      <div id="dash-lang-menu" class="absolute top-full mt-2 right-0 hidden bg-white rounded-lg shadow-lg border border-gray-100 min-w-[120px] z-50">
        <div class="py-1">
          <a href="javascript:void(0)" onclick="if(window.setLang) window.setLang('en', 'English'); document.getElementById('dash-lang-menu').classList.add('hidden');" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">English</a>
          <a href="javascript:void(0)" onclick="if(window.setLang) window.setLang('hi', 'हिंदी'); document.getElementById('dash-lang-menu').classList.add('hidden');" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">हिंदी</a>
        </div>
      </div>
    </div>
    <!-- Notification -->
    <button class="relative text-gray-500 hover:text-astro-orange p-2 bg-gray-50 rounded-full border border-gray-100 transition-colors">
      <span class="absolute top-0 right-0 block h-4 w-4 rounded-full bg-red-500 ring-2 ring-white text-[9px] text-white font-bold leading-4 text-center">3</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
    </button>
    <!-- Profile -->
    <a href="/Dashboard/Profile" class="flex items-center gap-3 border-l border-gray-200 pl-4 sm:pl-6 cursor-pointer group hover:opacity-90">
      <img id="header-avatar" class="h-10 w-10 rounded-full object-cover border-2 border-white shadow-sm group-hover:border-astro-orange transition-colors" src="https://ui-avatars.com/api/?name=User&background=ea580c&color=fff" alt="User Avatar">
      <div class="hidden sm:block">
        <p id="header-username" class="text-sm font-semibold text-gray-800">User</p>
        <p class="text-xs text-gray-500 group-hover:text-astro-orange transition-colors">View Profile &rarr;</p>
      </div>
    </a>
  </div>
</header>
<script>
  document.getElementById('dash-lang-btn')?.addEventListener('click', function(e) {
    e.stopPropagation();
    document.getElementById('dash-lang-menu')?.classList.toggle('hidden');
  });
  document.addEventListener('click', function(e) {
    if (!e.target.closest('#dash-lang-btn') && !e.target.closest('#dash-lang-menu')) {
      document.getElementById('dash-lang-menu')?.classList.add('hidden');
    }
  });

  // Sync language display
  document.addEventListener('DOMContentLoaded', () => {
    const savedName = localStorage.getItem('astro_lang_name');
    if (savedName && document.getElementById('dash-current-lang')) {
      document.getElementById('dash-current-lang').innerText = savedName;
    }
  });
</script>
