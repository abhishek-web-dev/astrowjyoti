
const navbarHTML = `
<nav class="bg-astro-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20">
        <div class="flex items-center">
          <!-- Logo area -->
          <a href="#" class="flex-shrink-0 flex items-center gap-3">
            <img class="h-12 w-auto object-contain" src="/asset/logo.png" alt="Astrowjyoti Logo"
              onerror="this.src='https://placehold.co/100x40/ea580c/ffffff?text=LOGO'">
            <span class="font-bold text-2xl text-astro-orange tracking-tight">Astrowjyoti</span>
          </a>
        </div>
        <!-- Desktop Menu -->
        <div class="hidden md:flex md:items-center md:space-x-8">
          <a href="#"
            class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">Home</a>
          <a href="#"
            class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">Horoscope</a>
          <a href="#"
            class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">Services</a>
          <a href="#"
            class="text-gray-600 hover:text-astro-orange px-3 py-2 text-sm font-medium transition-colors">About Us</a>
          <a href="#" class="btn-primary">Consult Astrologer</a>
        </div>
        <!-- Mobile menu button -->
        <div class="flex items-center md:hidden">
          <button id="mobile-menu-btn" type="button"
            class="inline-flex items-center justify-center p-2 rounded-md text-astro-orange hover:text-astro-amber focus:outline-none"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Hamburger icon -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-astro-white border-t border-gray-100">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#" class="block px-3 py-2 text-base font-medium text-astro-orange bg-astro-cream rounded-md">Home</a>
        <a href="#"
          class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">Horoscope</a>
        <a href="#"
          class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">Services</a>
        <a href="#"
          class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-astro-orange hover:bg-gray-50 rounded-md">About
          Us</a>
        <a href="#" class="block w-full text-center mt-4 btn-primary">Consult Astrologer</a>
      </div>
    </div>
  </nav>
`;

const footerHTML = `
<footer class="bg-[#FFFDF9] pt-12 md:pt-16 pb-8 border-t border-orange-100">
    <div class="w-full px-4 md:px-[8%]">

      <!-- Footer Top (5 columns) -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-6 xl:gap-8 mb-12">

        <!-- Brand & Info (Takes 3 columns on large screens) -->
        <div
          class="col-span-1 md:col-span-2 lg:col-span-3 pr-0 lg:pr-8 flex flex-col items-center md:items-start text-center md:text-left">
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

        <!-- Quick Links (col-span-2) -->
        <div class="col-span-1 lg:col-span-2 text-center md:text-left mt-4 md:mt-0">
          <h4 class="font-bold text-[15px] md:text-base text-gray-900 mb-4 md:mb-5">Quick Links</h4>
          <ul class="space-y-2 md:space-y-3">
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Home</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Astrologers</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Horoscope</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Kundli</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Blog</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Contact
                Us</a></li>
          </ul>
        </div>

        <!-- Our Services (col-span-2) -->
        <div class="col-span-1 lg:col-span-2 text-center md:text-left mt-4 md:mt-0">
          <h4 class="font-bold text-[15px] md:text-base text-gray-900 mb-4 md:mb-5">Our Services</h4>
          <ul class="space-y-2 md:space-y-3">
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Talk
                to Astrologer</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Chat
                Consultation</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Video
                Call</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Kundli
                Matching</a></li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Numerology</a>
            </li>
            <li><a href="#"
                class="text-gray-600 hover:text-[#F2780C] text-[13px] md:text-[14px] font-medium transition-colors">Tarot
                Reading</a></li>
          </ul>
        </div>

        <!-- Help & Support (col-span-2) -->
        <div class="col-span-1 lg:col-span-2 text-center md:text-left mt-4 md:mt-0">
          <h4 class="font-bold text-[15px] md:text-base text-gray-900 mb-4 md:mb-5">Help & Support</h4>
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

        <!-- Newsletter (Takes 3 columns on large screens) -->
        <div
          class="col-span-1 md:col-span-2 lg:col-span-3 relative lg:pl-6 xl:pl-8 text-center md:text-left mt-6 md:mt-0">
          <!-- Subtle separator line for large screens -->
          <div
            class="hidden lg:block absolute left-0 top-0 bottom-0 w-[1px] bg-gradient-to-b from-transparent via-orange-200 to-transparent">
          </div>

          <h4 class="font-bold text-[15px] md:text-base text-gray-900 mb-2 md:mb-3">Subscribe to our Newsletter</h4>
          <p class="text-gray-500 text-[12px] md:text-[13px] font-medium mb-4 md:mb-6 leading-relaxed">
            Get the latest updates, articles and offers.
          </p>

          <form class="flex gap-2 max-w-sm mx-auto md:mx-0">
            <input type="email" placeholder="Enter your email" required
              class="flex-1 min-w-0 bg-white border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm focus:outline-none focus:border-[#F2780C] focus:ring-1 focus:ring-[#F2780C] placeholder:text-gray-400">
            <button type="submit"
              class="bg-[#F2780C] hover:bg-[#E66A00] text-white px-4 py-2.5 rounded-lg transition-colors flex items-center justify-center shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
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
});
