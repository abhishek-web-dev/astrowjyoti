
const navbarHTML = `
<style>
  /* Guaranteed Spacing and Layout (Bypasses Tailwind omission for component.js) */
  @media (min-width: 768px) {
    .desktop-nav-links { 
      gap: 1rem; 
      display: flex !important; 
      align-items: stretch !important; 
      height: 100%; 
    }
    .desktop-nav-links > a { 
      display: flex; 
      align-items: center; 
    }
  }
  @media (min-width: 1024px) {
    .desktop-nav-links {
      gap: 1.5rem;
    }
  }
  @media (min-width: 1280px) {
    .desktop-nav-links {
      gap: 2rem;
    }
  }

  /* Hardcoded CTA Button to bypass Tailwind purge */
  .nav-cta-btn {
    padding: 0 1.25rem;
    height: 44px;
    background-color: #ea580c;
    color: #ffffff;
    font-weight: 600;
    font-size: 0.875rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
    align-self: center;
  }
  .nav-cta-btn:hover {
    background-color: #c2410c;
    transform: translateY(-2px);
  }

  /* Dropdown CSS (Flawless Hover & Click) */
  .astro-dropdown { 
    position: relative; 
    display: flex; 
    align-items: center; 
    outline: none; 
    cursor: pointer;
  }
  .astro-dropdown > a { outline: none; }
  .astro-dropdown:hover > a, .astro-dropdown:focus > a, .astro-dropdown:focus-within > a { color: #ea580c; }
  .astro-dropdown-menu {
    position: absolute; top: 100%; left: 0;
    display: none;
    background-color: white; border-radius: 0.375rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    border: 1px solid #f3f4f6; border-top: 3px solid #ea580c;
    z-index: 50; min-width: 14rem;
  }
  .astro-dropdown-menu.show {
    display: block !important;
  }
  
  /* Mobile Accordion CSS */
  .mobile-accordion summary::-webkit-details-marker { display: none; }
  .mobile-accordion summary { list-style: none; outline: none; }
  .mobile-accordion[open] summary svg.chevron { transform: rotate(180deg); }
</style>
<nav class="bg-astro-white sticky top-0 z-50" style="position: sticky; top: 0; z-index: 50;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20" style="height: 5rem;">
        <div class="flex items-center">
          <!-- Logo area -->
          <a href="/index" class="flex-shrink-0 flex items-center gap-3">
            <img class="h-12 w-auto object-contain" src="/asset/logo.png" alt="Astrowjyoti Logo"
              onerror="this.src='https://placehold.co/100x40/ea580c/ffffff?text=LOGO'">
            
          </a>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex md:items-center desktop-nav-links" style="height: 100%;">
          <a href="/index" class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">Home</a>
            
          <!-- Astrology Dropdown -->
          <div class="astro-dropdown" tabindex="0">
            <a href="javascript:void(0)" class="flex items-center text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">
              Astrology
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <div class="astro-dropdown-menu">
              <div class="py-1" role="menu" aria-orientation="vertical">
                <a href="/Astrology/Kundli" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Free Kundli</a>
                <a href="/Astrology/Kundli-Matching" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Kundli Matching</a>
                <a href="/Astrology/Daily-Horoscope" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Daily Horoscope</a>
                <a href="/Astrology/Weekly-Horoscope" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Weekly Horoscope</a>
                <a href="/Astrology/Monthly-Horoscope" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Monthly Horoscope</a>
                <a href="/Astrology/Yearly-Horoscope" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Yearly Horoscope</a>
                <a href="/Astrology/Tarot-Reading" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Tarot Reading</a>
                <a href="/Astrology/Numerology" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Numerology</a>
              </div>
            </div>
          </div>

          <!-- Consultations Dropdown -->
          <div class="astro-dropdown" tabindex="0">
            <a href="javascript:void(0)" class="flex items-center text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">
              Consultations
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <div class="astro-dropdown-menu">
              <div class="py-1" role="menu" aria-orientation="vertical">
                <a href="/Consultations/Chat-with-Astrologer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Chat with Astrologer</a>
                <a href="/Consultations/Talk-to-Astrologer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Talk to Astrologer</a>
                <a href="/Consultations/Video-Consultation" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Video Consultation</a>
              </div>
            </div>
          </div>

          <!-- Services Dropdown -->
          <div class="astro-dropdown" tabindex="0">
            <a href="javascript:void(0)" class="flex items-center text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">
              Services
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <div class="astro-dropdown-menu">
              <div class="py-1" role="menu" aria-orientation="vertical">
                <a href="/Services/Free-Kundli" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Free Kundli</a>
                <a href="/Services/Kundli-Matching" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Kundli Matching</a>
                <a href="/Services/Compatibility" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Compatibility</a>
                <a href="/Services/Tarot" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Tarot</a>
              </div>
            </div>
          </div>

          <a href="/About" class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">About Us</a>
          
          <!-- Language Selector -->
          <div class="astro-dropdown" tabindex="0">
            <a href="javascript:void(0)" class="flex items-center text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">
              <span id="current-lang-desktop">English</span>
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <div class="astro-dropdown-menu">
              <div class="py-1" role="menu" aria-orientation="vertical">
                <a href="javascript:void(0)" onclick="setLang('en', 'English')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">English</a>
                <a href="javascript:void(0)" onclick="setLang('hi', 'हिंदी')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">हिंदी</a>
              </div>
            </div>
          </div>

          <!-- Auth Container Desktop -->
          <div id="desktop-auth-container" class="flex items-center">
            <a href="/Auth/Login" class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">Login</a>
          </div>
            
          <!-- Consult Astrologer Button -->
          <a href="/Consultations/Talk-to-Astrologer" class="nav-cta-btn inline-block">Consult Astrologer</a>
        </div>
        
        <!-- Mobile menu button -->
        <div class="flex items-center md:hidden">
          <button id="mobile-menu-btn" type="button"
            class="inline-flex items-center justify-center p-2 rounded-md text-astro-orange hover:text-astro-amber focus:outline-none"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-astro-white border-t border-gray-100 max-h-screen overflow-y-auto">
      <div class="px-2 pt-2 pb-6 space-y-1 sm:px-3">
        <a href="/index" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">Home</a>
        
        <details class="mobile-accordion group">
          <summary class="flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md cursor-pointer">
            Astrology
            <svg class="chevron w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </summary>
          <div class="pl-6 pb-2 space-y-1 bg-gray-50/50 rounded-b-md">
            <a href="/Astrology/Kundli" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Free Kundli</a>
            <a href="/Astrology/Kundli-Matching" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Kundli Matching</a>
            <a href="/Astrology/Daily-Horoscope" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Daily Horoscope</a>
            <a href="/Astrology/Weekly-Horoscope" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Weekly Horoscope</a>
            <a href="/Astrology/Monthly-Horoscope" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Monthly Horoscope</a>
            <a href="/Astrology/Yearly-Horoscope" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Yearly Horoscope</a>
            <a href="/Astrology/Tarot-Reading" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Tarot Reading</a>
            <a href="/Astrology/Numerology" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Numerology</a>
          </div>
        </details>

        <details class="mobile-accordion group">
          <summary class="flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md cursor-pointer">
            Consultations
            <svg class="chevron w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </summary>
          <div class="pl-6 pb-2 space-y-1 bg-gray-50/50 rounded-b-md">
            <a href="/Consultations/Chat-with-Astrologer" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Chat with Astrologer</a>
            <a href="/Consultations/Talk-to-Astrologer" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Talk to Astrologer</a>
            <a href="/Consultations/Video-Consultation" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Video Consultation</a>
          </div>
        </details>

        <details class="mobile-accordion group">
          <summary class="flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md cursor-pointer">
            Services
            <svg class="chevron w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </summary>
          <div class="pl-6 pb-2 space-y-1 bg-gray-50/50 rounded-b-md">
            <a href="/Services/Free-Kundli" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Free Kundli</a>
            <a href="/Services/Kundli-Matching" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Kundli Matching</a>
            <a href="/Services/Compatibility" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Compatibility</a>
            <a href="/Services/Tarot" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Tarot</a>
          </div>
        </details>

        <a href="/About" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">About Us</a>

        <!-- Mobile Language Selector -->
        <div class="px-3 py-2 border-t border-gray-100 mt-2">
          <label class="block text-sm font-medium text-gray-500 mb-1">Language</label>
          <select id="mobile-lang" onchange="setLang(this.value, this.options[this.selectedIndex].text)" class="w-full bg-gray-50 border border-gray-200 rounded-md py-2 px-2 text-base text-gray-700 focus:outline-none focus:border-[#EA580C]">
            <option value="en">English</option>
            <option value="hi">हिंदी</option>
          </select>
        </div>

        <!-- Auth Container Mobile -->
        <div id="mobile-auth-container">
          <a href="/Auth/Login" class="block px-3 py-2 text-base font-bold text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">Login</a>
        </div>

        <a href="/Consultations/Talk-to-Astrologer" class="block w-full text-center mt-4 nav-cta-btn">Consult Astrologer</a>
      </div>
    </div>
  </nav>
`;

const footerHTML = `
<footer class="bg-[#FFFDF9] pt-12 md:pt-16 pb-8 border-t border-orange-100">
    <div class="w-full px-4 md:px-[8%]">

      <!-- Footer Top (Responsive Grid) -->
      <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-12 gap-x-4 gap-y-10 lg:gap-6 xl:gap-8 mb-12">

        <!-- Brand & Info (Full width on mobile, 3 cols on desktop) -->
        <div
          class="col-span-2 lg:col-span-3 pr-0 lg:pr-8 flex flex-col items-center md:items-start text-center md:text-left">
          <a href="#" class="inline-block mb-5">
            <img class="h-12 md:h-[52px] w-auto object-contain" src="/asset/logo.png" alt="Astrowjyoti Logo"
              onerror="this.src='https://placehold.co/100x40/ea580c/ffffff?text=LOGO'">
            <p class="text-[10px] md:text-[11px] text-gray-500 font-medium mt-1 text-right md:pr-1 tracking-wide">Real
              Guidance. Brighter Tomorrows.</p>
          </a>

          <p class="text-gray-600 text-sm md:text-[15px] leading-relaxed mb-6 font-medium max-w-[280px] md:max-w-sm">
            Your trusted astrology platform for consultations, horoscopes, kundli and more.
          </p>

          <!-- Social Icons -->
          <div class="flex items-center gap-3">
            <a href="#"
              class="w-[34px] h-[34px] rounded-full bg-[#FFF5EB] text-[#F2780C] flex items-center justify-center hover:bg-[#F2780C] hover:text-white transition-colors">
              <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
              </svg>
            </a>
            <a href="#"
              class="w-[34px] h-[34px] rounded-full bg-[#FFF5EB] text-[#F2780C] flex items-center justify-center hover:bg-[#F2780C] hover:text-white transition-colors">
              <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
              </svg>
            </a>
            <a href="#"
              class="w-[34px] h-[34px] rounded-full bg-[#FFF5EB] text-[#F2780C] flex items-center justify-center hover:bg-[#F2780C] hover:text-white transition-colors">
              <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 00-2.122 2.136C0 8.082 0 12 0 12s0 3.918.501 5.814a3.016 3.016 0 002.122 2.136C4.495 20.5 12 20.5 12 20.5s7.505 0 9.377-.55a3.016 3.016 0 002.122-2.136C24 15.918 24 12 24 12s0-3.918-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
              </svg>
            </a>
            <a href="#"
              class="w-[34px] h-[34px] rounded-full bg-[#FFF5EB] text-[#F2780C] flex items-center justify-center hover:bg-[#F2780C] hover:text-white transition-colors">
              <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
              </svg>
            </a>
            <a href="#"
              class="w-[34px] h-[34px] rounded-full bg-[#FFF5EB] text-[#F2780C] flex items-center justify-center hover:bg-[#F2780C] hover:text-white transition-colors">
              <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick Links (Half width on mobile) -->
        <div class="col-span-1 lg:col-span-2 text-left mt-0">
          <h4 class="font-bold text-[14px] sm:text-[15px] md:text-base text-gray-900 mb-3 md:mb-5">Quick Links</h4>
          <ul class="space-y-2 md:space-y-3">
            <li><a href="/index"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Home</a>
            </li>
            <li><a href="/Consultations/Talk-to-Astrologer"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Astrologers</a>
            </li>
            <li><a href="/Astrology/Daily-Horoscope"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Horoscope</a>
            </li>
            <li><a href="/Astrology/Kundli"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Kundli</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Blog</a>
            </li>
            <li><a href="/About"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Contact
                Us</a></li>
          </ul>
        </div>

        <!-- Our Services (Half width on mobile) -->
        <div class="col-span-1 lg:col-span-2 text-left mt-0">
          <h4 class="font-bold text-[14px] sm:text-[15px] md:text-base text-gray-900 mb-3 md:mb-5">Our Services</h4>
          <ul class="space-y-2 md:space-y-3">
            <li><a href="/Consultations/Talk-to-Astrologer"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Talk
                to Astrologer</a></li>
            <li><a href="/Consultations/Chat-with-Astrologer"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Chat
                Consultation</a></li>
            <li><a href="/Consultations/Video-Consultation"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Video
                Call</a></li>
            <li><a href="/Astrology/Kundli-Matching"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Kundli
                Matching</a></li>
            <li><a href="/Astrology/Numerology"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Numerology</a>
            </li>
            <li><a href="/Astrology/Tarot-Reading"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Tarot
                Reading</a></li>
          </ul>
        </div>

        <!-- Help & Support (Half width on mobile) -->
        <div class="col-span-1 lg:col-span-2 text-left mt-0">
          <h4 class="font-bold text-[14px] sm:text-[15px] md:text-base text-gray-900 mb-3 md:mb-5">Help & Support</h4>
          <ul class="space-y-2 md:space-y-3">
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">FAQ</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Privacy
                Policy</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Terms
                & Conditions</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Refund
                Policy</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Disclaimer</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Support</a>
            </li>
          </ul>
        </div>

        <!-- Newsletter (Half width on mobile, stacks on very small screens) -->
        <div class="col-span-1 md:col-span-2 lg:col-span-3 relative lg:pl-6 xl:pl-8 text-left mt-0">
          <!-- Subtle separator line for large screens -->
          <div class="hidden lg:block absolute left-0 top-0 bottom-0 w-[1px] bg-gradient-to-b from-transparent via-orange-200 to-transparent"></div>

          <h4 class="font-bold text-[14px] sm:text-[15px] md:text-base text-gray-900 mb-2 md:mb-3">Newsletter</h4>
          <p class="text-gray-500 text-[11px] sm:text-[12px] md:text-[13px] font-medium mb-4 md:mb-6 leading-relaxed">
            Get the latest updates, articles and offers.
          </p>

          <form class="flex flex-col sm:flex-row gap-2 max-w-sm w-full mx-0">
            <input type="email" placeholder="Email address" required
              class="w-full min-w-0 bg-white border border-gray-200 rounded-lg px-2.5 py-2 sm:px-3.5 sm:py-2.5 text-[12px] sm:text-sm focus:outline-none focus:border-[#F2780C] focus:ring-1 focus:ring-[#F2780C] placeholder:text-gray-400">
            <button type="submit"
              class="bg-[#F2780C] hover:bg-[#E66A00] text-white px-3 py-2 sm:px-4 sm:py-2.5 rounded-lg transition-colors flex items-center justify-center shrink-0 w-full sm:w-auto">
              <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </button>
          </form>
        </div>

      </div>

      <!-- Bottom Copyright & Footer Note -->
      <div
        class="border-t border-orange-100/60 pt-6 pb-2 flex flex-col md:flex-row justify-between items-center gap-3 text-[12px] md:text-[13px] text-gray-500 font-medium text-center md:text-left">
        <p>&copy; 2026 Astrowjyoti. All rights reserved.</p>
        <p>Crafted with <span class="text-red-500 text-sm leading-none align-middle">&hearts;</span> for the stars.</p>
      </div>
    </div>
  </footer>
`;

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.app-navbar').forEach(el => {
    el.innerHTML = navbarHTML;
  });

  document.querySelectorAll('.app-footer').forEach(el => {
    el.innerHTML = footerHTML;
  });

  initLanguage();

  // Centralized Dropdown State Manager
  window.activeDropdown = null;
  window.closeAllDropdowns = function() {
    document.querySelectorAll('.astro-dropdown-menu.show').forEach(menu => {
      menu.classList.remove('show');
    });
    window.activeDropdown = null;
  };

  // Event Delegation for dropdown triggers and click outside
  document.addEventListener('click', (e) => {
    // Check if clicked on a dropdown trigger
    const trigger = e.target.closest('.astro-dropdown > a');
    if (trigger) {
      e.preventDefault();
      e.stopPropagation();
      const parent = trigger.parentElement;
      const menu = parent.querySelector('.astro-dropdown-menu');
      if (menu) {
        if (menu.classList.contains('show')) {
          menu.classList.remove('show');
          window.activeDropdown = null;
        } else {
          window.closeAllDropdowns();
          menu.classList.add('show');
          window.activeDropdown = parent;
        }
      }
      return;
    }

    // Rule 4: Click outside closes all
    if (window.activeDropdown && !window.activeDropdown.contains(e.target)) {
      window.closeAllDropdowns();
    }
    
    // Rule 6: Navigation closes all (real links inside menus)
    const menuLink = e.target.closest('.astro-dropdown-menu a:not([href="javascript:void(0)"])');
    if (menuLink) {
      window.closeAllDropdowns();
    }
  });

  // Rule 5: Escape closes all
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      window.closeAllDropdowns();
    }
  });

  // Fix: Bind mobile menu events AFTER the navbar is injected into the DOM
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      mobileMenu.classList.toggle('hidden');
    });

    // Close menu when clicking outside of it
    document.addEventListener('click', (event) => {
      if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
        mobileMenu.classList.add('hidden');
      }
    });
  }

  // Handle Authentication State dynamically
  if (typeof api !== 'undefined') {
    api.get('/user/profile', { silent: true })
      .then(response => {
        if (response && response.user) {
          const user = response.user;
          const nameParts = user.name ? user.name.split(' ') : ['U'];
          const initials = nameParts.length > 1 
            ? (nameParts[0][0] + nameParts[nameParts.length - 1][0]).toUpperCase() 
            : nameParts[0].substring(0, 2).toUpperCase();
            
          let avatarHtml = '';
          if (user.profile_image) {
            avatarHtml = `<img src="${user.profile_image}" alt="Profile" class="w-9 h-9 rounded-full object-cover border border-gray-200">`;
          } else {
            avatarHtml = `<div class="w-9 h-9 rounded-full bg-orange-100 text-astro-orange flex items-center justify-center font-bold border border-orange-200 text-sm">${initials}</div>`;
          }

          // Desktop Authenticated Dropdown
          const desktopAuth = document.getElementById('desktop-auth-container');
          if (desktopAuth) {
            desktopAuth.innerHTML = `
              <div class="astro-dropdown" tabindex="0">
                <a href="javascript:void(0)" class="flex items-center text-gray-600 hover:text-astro-orange px-2 py-2 transition-colors outline-none rounded-full focus:ring-2 focus:ring-orange-500">
                  ${avatarHtml}
                </a>
                <div class="astro-dropdown-menu" style="right: 0; left: auto; margin-top: 0.5rem;">
                  <div class="py-1" role="menu" aria-orientation="vertical">
                    <div class="px-4 py-2 text-xs text-gray-500 border-b border-gray-50 mb-1">Signed in as <br><span class="font-medium text-gray-800">${user.name}</span></div>
                    <a href="/Dashboard/Dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Dashboard</a>
                    <a href="/Dashboard/Profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">My Profile</a>
                    <a href="/Dashboard/My-Consultations" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">My Consultations</a>
                    <a href="/Dashboard/Wallet-and-Payments" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Wallet & Payments</a>
                    <a href="/Dashboard/Favorites" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-astro-orange transition-colors">Favorites</a>
                    <div class="border-t border-gray-100 my-1"></div>
                    <a href="#" onclick="handleNavLogout(event)" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">Logout</a>
                  </div>
                </div>
              </div>
            `;
          }

          // Mobile Authenticated Accordion
          const mobileAuth = document.getElementById('mobile-auth-container');
          if (mobileAuth) {
            mobileAuth.innerHTML = `
              <details class="mobile-accordion group mt-2 border-t border-gray-100 pt-2">
                <summary class="flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md cursor-pointer">
                  <div class="flex items-center">
                    ${avatarHtml.replace('w-9 h-9', 'w-8 h-8').replace('mr-0', 'mr-3')}
                    <span class="ml-3">${user.name.split(' ')[0]}</span>
                  </div>
                  <svg class="chevron w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="pl-12 pb-2 space-y-1 bg-gray-50/50 rounded-b-md">
                  <a href="/Dashboard/Dashboard" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Dashboard</a>
                  <a href="/Dashboard/Profile" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">My Profile</a>
                  <a href="/Dashboard/My-Consultations" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">My Consultations</a>
                  <a href="/Dashboard/Wallet-and-Payments" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Wallet & Payments</a>
                  <a href="/Dashboard/Favorites" class="block px-3 py-2 text-sm text-gray-600 hover:text-astro-orange">Favorites</a>
                  <a href="#" onclick="handleNavLogout(event)" class="block px-3 py-2 text-sm text-red-600 hover:text-red-700 font-medium mt-1">Logout</a>
                </div>
              </details>
            `;
          }
        }
      })
      .catch(err => {
        // Silently fail, keep Login button
      });
  }
});

window.handleNavLogout = async function(e) {
  e.preventDefault();
  if (typeof api !== 'undefined') {
    try {
      await api.post('/auth/logout');
    } catch (err) {}
  }
  window.location.href = '/index';
};

// Google Translate Integration (Invisible UI)
const style = document.createElement('style');
style.innerHTML = `
  .skiptranslate { display: none !important; }
  body { top: 0px !important; }
`;
document.head.appendChild(style);

const gtDiv = document.createElement('div');
gtDiv.id = 'google_translate_element';
gtDiv.style.display = 'none';
document.body.appendChild(gtDiv);

window.googleTranslateElementInit = function() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,hi',
    autoDisplay: false
  }, 'google_translate_element');
};

const script = document.createElement('script');
script.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
document.head.appendChild(script);

window.setLang = async function(langCode, langName) {
  if (typeof window.closeAllDropdowns === 'function') {
    window.closeAllDropdowns();
  }

  localStorage.setItem('astro_lang', langCode);
  localStorage.setItem('astro_lang_name', langName);
  
  // Set Google Translate cookie directly for persistence
  document.cookie = `googtrans=/en/${langCode}; path=/;`;
  document.cookie = `googtrans=/en/${langCode}; domain=.${location.hostname}; path=/;`;

  // Update Custom UI
  const desk = document.getElementById('current-lang-desktop');
  if (desk) desk.innerText = langName;
  const mob = document.getElementById('mobile-lang');
  if (mob) mob.value = langCode;
  
  // Persist to backend if API is available and user is authenticated
  if (typeof api !== 'undefined') {
    try {
      await api.put('/settings/language', { language: langCode }, { silent: true });
      if(window.showNotification) window.showNotification('Language updated successfully', 'success');
    } catch (e) {
      console.error('Could not save language to backend:', e);
    }
  }

  // Trigger translate on current page
  let select = document.querySelector('.goog-te-combo');
  if (select) {
    select.value = langCode;
    select.dispatchEvent(new Event('change'));
  } else {
    // Fallback: reload page to apply cookie
    window.location.reload();
  }
};

function initLanguage() {
  const savedLang = localStorage.getItem('astro_lang') || 'en';
  const savedName = localStorage.getItem('astro_lang_name') || 'English';
  
  const desk = document.getElementById('current-lang-desktop');
  if (desk) desk.innerText = savedName;
  const mob = document.getElementById('mobile-lang');
  if (mob) mob.value = savedLang;
}

// ==========================================
// CENTRALIZED NOTIFICATION SYSTEM
// ==========================================

window.showNotification = function(message, type = 'info') {
  let container = document.getElementById('astrowjyoti-notifications');
  if (!container) {
    container = document.createElement('div');
    container.id = 'astrowjyoti-notifications';
    container.className = 'fixed flex flex-col gap-3 pointer-events-none z-[9999]';
    container.style.top = '24px';
    container.style.left = '50%';
    container.style.transform = 'translateX(-50%)';
    container.style.width = '100%';
    container.style.maxWidth = '450px';
    container.style.zIndex = '9999';
    document.body.appendChild(container);
  }

  const notification = document.createElement('div');
  
  let duration = 3000;
  if (type === 'error') duration = 5000;
  if (type === 'warning') duration = 4000;

  const logoDarkColor = '#800000'; // Astrowjyoti logo maroon
  const lightBgColor = '#fcf5f5'; // Very light maroon tint
  
  // Icon based on type, but colored in the logo's dark color as requested
  let iconHtml = '';
  if (type === 'success') {
    iconHtml = `<svg class="w-5 h-5" style="color: ${logoDarkColor};" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`;
  } else if (type === 'error') {
    iconHtml = `<svg class="w-5 h-5" style="color: ${logoDarkColor};" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;
  } else if (type === 'warning') {
    iconHtml = `<svg class="w-5 h-5" style="color: ${logoDarkColor};" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>`;
  } else {
    iconHtml = `<svg class="w-5 h-5" style="color: ${logoDarkColor};" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`;
  }

  notification.className = `flex items-center px-4 py-3 shadow-lg rounded-xl pointer-events-auto transform transition-all duration-300 translate-y-[-20px] opacity-0`;
  notification.style.backgroundColor = lightBgColor;
  notification.style.border = `1px solid ${logoDarkColor}`;
  
  notification.innerHTML = `
    <div class="flex-shrink-0 mr-3 flex items-center justify-center rounded-full bg-white shadow-sm p-1" style="border: 1px solid ${logoDarkColor}20;">
      ${iconHtml}
    </div>
    <div class="flex-1 mr-2 flex items-center">
      <p class="text-[15px] font-bold break-words" style="color: ${logoDarkColor}; margin: 0;">${message}</p>
    </div>
    <button class="flex-shrink-0 focus:outline-none flex items-center transition-opacity hover:opacity-70" onclick="this.parentElement.remove()">
      <svg class="w-4 h-4" style="color: ${logoDarkColor};" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
  `;

  container.appendChild(notification);
  
  requestAnimationFrame(() => {
    notification.classList.remove('translate-y-[-20px]', 'opacity-0');
    notification.classList.add('translate-y-0', 'opacity-100');
  });

  setTimeout(() => {
    notification.classList.remove('translate-y-0', 'opacity-100');
    notification.classList.add('translate-x-full', 'opacity-0');
    setTimeout(() => {
      if (notification.parentElement) notification.remove();
    }, 300);
  }, duration);
};
