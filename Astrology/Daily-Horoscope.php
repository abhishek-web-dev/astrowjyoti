<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <title>Daily Horoscope - Astrowjyoti</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <!-- Include Tailwind script for dev if needed, or rely on index.css if compiled -->
  <!-- Assuming index.css or vite handles the css injection -->
</head>

<body class="bg-[#FFFDF9] text-gray-900 font-sans antialiased overflow-x-hidden">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <main>
    <!-- Hero Section -->
    <section class="relative w-full bg-[#FFFDF9] overflow-hidden flex flex-col justify-center"
      style="min-height: 480px;">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0">
        <img src="/Daily-Horoscope-banner.png" alt="Daily Horoscope Background"
          class="w-full h-full object-cover object-right lg:object-center" />
      </div>

      <!-- Left Gradient Overlay for readability -->
      <div
        class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9] via-[#FFFDF9]/80 to-transparent w-full md:w-[50%] z-0">
      </div>

      <!-- Content -->
      <div class="relative z-10 w-full py-12 md:py-20 lg:py-24" style="width: 90%; margin: 0 auto;">
        <div class="max-w-3xl">

          <!-- Breadcrumb -->
          <nav class="flex text-gray-500 font-medium mb-6 md:mb-8" style="font-size: 14px;" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">
              <li class="inline-flex items-center">
                <a href="/" class="hover:text-[#F2780C] transition-colors">Home</a>
              </li>
              <li>
                <div class="flex items-center">
                  <span class="mx-2 text-gray-400 font-light">&gt;</span>
                  <a href="#" class="text-[#F2780C] hover:text-orange-600 transition-colors">Horoscope</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <span class="mx-2 text-gray-400 font-light">&gt;</span>
                  <span class="text-gray-900 font-bold">Daily Horoscope</span>
                </div>
              </li>
            </ol>
          </nav>

          <!-- Heading -->
          <h1 class="font-bold text-[#111] mb-5 md:mb-6"
            style="font-family: 'Playfair Display', serif; font-size: clamp(40px, 5vw, 64px); line-height: 1.1; letter-spacing: -0.01em;">
            Daily <span class="text-[#F2780C]">Horoscope</span>
          </h1>

          <!-- Subheading -->
          <p class="text-gray-800 font-medium mb-8 md:mb-10 max-w-[90%] md:max-w-2xl"
            style="font-size: clamp(15px, 1.5vw, 18px); line-height: 1.6;">
            Discover what the stars have in store for you today. Get accurate and detailed horoscope predictions for
            love, career, finance, health and more. Read your daily horoscope and plan your day with positive guidance.
          </p>

          <!-- CTA Button -->
          <div class="mt-4">
            <button
              class="bg-[#EA580C] text-white font-bold py-3.5 px-6 rounded-full text-[14px] flex items-center justify-center gap-2 hover:bg-orange-600 transition shadow-lg shadow-orange-500/20 border border-transparent">
              Get Personalised Horoscope
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </button>
          </div>

        </div>
      </div>
    </section>


    <!-- Zodiac Selection Section -->
    <section class="w-full py-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;">

        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
          <div>
            <h2 class="text-[28px] md:text-[32px] font-bold text-gray-900 mb-2"
              style="font-family: 'Playfair Display', serif;">
              Choose Your Zodiac Sign
            </h2>
            <p class="text-[14px] text-gray-500 font-medium">
              Select your zodiac sign to read today's horoscope
            </p>
          </div>

          <button
            class="bg-white border border-orange-100 text-gray-700 font-semibold py-2.5 px-5 rounded-full text-[13px] flex items-center gap-2 hover:border-orange-200 hover:shadow-sm transition shrink-0">
            <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Today, 25 September 2026
            <svg class="w-4 h-4 text-[#EA580C] ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 gap-4 md:gap-6">

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-aries.png" alt="Aries"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Aries</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Mar 21 - Apr 19</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-taurus.png" alt="Taurus"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Taurus</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Apr 20 - May 20</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-gemini.png" alt="Gemini"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Gemini</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">May 21 - Jun 20</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-cancer.png" alt="Cancer"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Cancer</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Jun 21 - Jul 22</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-leo.png" alt="Leo"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Leo</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Jul 23 - Aug 22</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-virgo.png" alt="Virgo"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Virgo</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Aug 23 - Sep 22</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-libra.png" alt="Libra"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Libra</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Sep 23 - Oct 22</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-scorpio.png" alt="Scorpio"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Scorpio</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Oct 23 - Nov 21</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-sagittarius.png" alt="Sagittarius"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Sagittarius</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Nov 22 - Dec 21</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-capricorn.png" alt="Capricorn"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Capricorn</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Dec 22 - Jan 19</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-aquarius.png" alt="Aquarius"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Aquarius</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Jan 20 - Feb 18</p>
            </div>
          </a>

          <a href="#"
            class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-orange-200 transition group">
            <div
              class="relative w-16 h-16 flex items-center justify-center rounded-full overflow-hidden bg-orange-50/50 group-hover:bg-orange-100/50 transition">
              <img src="/zodiac-pisces.png" alt="Pisces"
                class="w-14 h-14 object-contain group-hover:scale-110 transition duration-300" />
            </div>
            <div class="text-center">
              <h4 class="font-bold text-gray-900 text-[15px]">Pisces</h4>
              <p class="text-[12px] text-gray-400 font-medium mt-0.5">Feb 19 - Mar 20</p>
            </div>
          </a>

        </div>

      </div>
    </section>

    <!-- Planetary Movements and More Horoscopes Section -->
    <section class="w-full py-8 md:py-12 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;" class="flex flex-col lg:flex-row gap-6 md:gap-8">

        <!-- Left Content Area -->
        <div class="w-full lg:w-[68%] xl:w-[72%] flex flex-col gap-8 md:gap-10">

          <!-- Today's Planetary Movements Banner -->
          <div
            class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-sm border border-orange-100 bg-white">
            <!-- Background Image for md and above -->
            <div class="absolute inset-0 z-0 hidden md:block">
              <div class="w-full h-full flex justify-end">
                <div class="w-[70%] h-full relative">
                  <div
                    class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent z-10 w-48 -left-1">
                  </div>
                  <img src="/Today-planatery-movements.png" class="w-full h-full object-cover object-left"
                    alt="Planetary Movements" />
                </div>
              </div>
            </div>

            <!-- Mobile Image -->
            <div class="w-full h-48 md:hidden relative">
              <img src="/Today-planatery-movements.png" class="w-full h-full object-cover" alt="Planetary Movements" />
              <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent"></div>
            </div>

            <div class="relative z-10 w-full md:w-[60%] p-6 md:p-8 lg:p-10 flex flex-col justify-center">
              <h3 class="text-[22px] md:text-[26px] font-bold text-gray-900 mb-3 md:mb-4"
                style="font-family: 'Playfair Display', serif;">Today's Planetary Movements</h3>
              <p class="text-[13px] md:text-[14px] text-gray-600 mb-6 md:mb-8 leading-relaxed">
                The position of planets plays an important role in shaping your day. Today's planetary transits may
                bring new opportunities, help you overcome challenges and guide you towards the right decisions. Read
                your daily horoscope to know how these movements affect your zodiac sign tomorrow.
              </p>
              <div>
                <a href="#"
                  class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full border border-[#F2780C] text-[#F2780C] font-semibold text-[14px] hover:bg-[#F2780C] hover:text-white transition-all duration-300 group w-full md:w-auto shadow-sm">
                  View Detailed Planetary Analysis
                  <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Daily Horoscope by Life Areas -->
          <div>
            <h3 class="text-[22px] md:text-[26px] font-bold text-gray-900 mb-2"
              style="font-family: 'Playfair Display', serif;">Daily Horoscope by Life Areas</h3>
            <p class="text-[14px] text-gray-500 mb-6 md:mb-8">Get detailed predictions for every important aspect of
              your life.</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5">
              <!-- Love Card -->
              <a href="#"
                class="bg-[#FFF5F8] border border-pink-100/60 rounded-2xl p-5 hover:shadow-md transition flex flex-col group">
                <div
                  class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center mb-4 text-pink-500 group-hover:scale-110 transition-transform">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                  </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-2">Love Horoscope</h4>
                <p class="text-[13px] text-gray-500 leading-relaxed mt-auto">Find out what's in store for your
                  relationships today.</p>
              </a>

              <!-- Career Card -->
              <a href="#"
                class="bg-[#FFF8F2] border border-orange-100/60 rounded-2xl p-5 hover:shadow-md transition flex flex-col group">
                <div
                  class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mb-4 text-orange-500 group-hover:scale-110 transition-transform">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                  </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-2">Career Horoscope</h4>
                <p class="text-[13px] text-gray-500 leading-relaxed mt-auto">Know your career growth and opportunities.
                </p>
              </a>

              <!-- Finance Card -->
              <a href="#"
                class="bg-[#F2FBF5] border border-green-100/60 rounded-2xl p-5 hover:shadow-md transition flex flex-col group">
                <div
                  class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mb-4 text-green-600 group-hover:scale-110 transition-transform">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                  </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-2">Finance Horoscope</h4>
                <p class="text-[13px] text-gray-500 leading-relaxed mt-auto">Check your financial stability and gains.
                </p>
              </a>

              <!-- Health Card -->
              <a href="#"
                class="bg-[#F2F8FF] border border-blue-100/60 rounded-2xl p-5 hover:shadow-md transition flex flex-col group">
                <div
                  class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-4 text-blue-500 group-hover:scale-110 transition-transform">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                  </svg>
                </div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-2">Health Horoscope</h4>
                <p class="text-[13px] text-gray-500 leading-relaxed mt-auto">Get advice for your health and well-being.
                </p>
              </a>
            </div>
          </div>
        </div>

        <!-- Right Sidebar -->
        <div class="w-full lg:w-[32%] xl:w-[28%]">
          <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
            <h4 class="font-bold text-gray-900 text-[17px] mb-5">More Horoscopes</h4>

            <ul class="flex flex-col gap-1.5">
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 bg-[#FFF8F2] rounded-2xl text-[#EA580C] font-semibold text-[14px] transition">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                    Daily Horoscope
                  </div>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                    Tomorrow's Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                    Weekly Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                    Monthly Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                      </path>
                    </svg>
                    Yearly Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg>
                    Love Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                      </path>
                    </svg>
                    Career Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                      </path>
                    </svg>
                    Finance Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#"
                  class="flex items-center justify-between p-3.5 hover:bg-gray-50 rounded-2xl text-gray-700 font-medium text-[14px] transition group">
                  <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                      </path>
                    </svg>
                    Health Horoscope
                  </div>
                  <svg class="w-4 h-4 text-gray-300 group-hover:text-gray-400 transition" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <!-- Benefits Section -->
    <section class="w-full py-12 md:py-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;">
        <h3 class="text-[22px] md:text-[28px] font-bold text-gray-900 mb-6 md:mb-8" style="font-family: 'Playfair Display', serif;">
          Benefits of Reading Your Daily Horoscope
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
          
          <!-- Card 1 -->
          <div class="bg-white border border-gray-100 rounded-2xl p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex gap-4 items-center md:items-start hover:shadow-md transition">
            <div class="w-14 h-14 rounded-full bg-[#FFF9E6] flex items-center justify-center shrink-0">
              <svg class="w-7 h-7 text-[#F5B041]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="5"></circle>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path>
              </svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900 text-[15px] mb-1">Better Decision Making</h4>
              <p class="text-[13.5px] text-gray-500 leading-snug">Helps you make informed choices throughout the day.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white border border-gray-100 rounded-2xl p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex gap-4 items-center md:items-start hover:shadow-md transition">
            <div class="w-14 h-14 rounded-full bg-[#FFF0E6] flex items-center justify-center shrink-0">
              <svg class="w-7 h-7 text-[#FF5722]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9"></circle>
                <circle cx="12" cy="12" r="5"></circle>
                <circle cx="12" cy="12" r="1" fill="currentColor"></circle>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 5l-4.5 4.5"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 5h-3m3 0v3"></path>
              </svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900 text-[15px] mb-1">Stay Prepared</h4>
              <p class="text-[13.5px] text-gray-500 leading-snug">Lets you know about opportunities and challenges ahead.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white border border-gray-100 rounded-2xl p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex gap-4 items-center md:items-start hover:shadow-md transition">
            <div class="w-14 h-14 rounded-full bg-[#E8F8F5] flex items-center justify-center shrink-0">
              <svg class="w-7 h-7 text-[#2ECC71]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5C6 5 4 10 4 15c4-1 9 1 12 5 3-4 3-10-5-15z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 20c-5-2-9-5-12-5"></path>
              </svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900 text-[15px] mb-1">Peace of Mind</h4>
              <p class="text-[13.5px] text-gray-500 leading-snug">Provides guidance and positive energy.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="bg-white border border-gray-100 rounded-2xl p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex gap-4 items-center md:items-start hover:shadow-md transition">
            <div class="w-14 h-14 rounded-full bg-[#FFF0E6] flex items-center justify-center shrink-0">
              <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
              </svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-gray-900 text-[15px] mb-1">Personal Growth</h4>
              <p class="text-[13.5px] text-gray-500 leading-snug">Helps you understand yourself better and plan brighter future.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Personalised Horoscope Banner -->
    <section class="w-full pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;">
        <div class="relative w-full rounded-[24px] overflow-hidden flex shadow-lg min-h-[220px] md:min-h-[260px] group">
          
          <!-- Background Image -->
          <div class="absolute inset-0 z-0">
            <img src="/Personalize-horroscope.png" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700" alt="Personalised Horoscope" />
          </div>
          
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#3E2723]/90 via-[#3E2723]/60 to-transparent w-full md:w-[75%]"></div>
          
          <!-- Content -->
          <div class="relative z-20 w-full p-8 md:p-12 lg:px-16 flex flex-col justify-center">
            <h4 class="text-[#FDF2E9] text-[18px] md:text-[22px] mb-1 font-medium" style="font-family: 'Playfair Display', serif;">
              Get Deeper Insights with
            </h4>
            <h2 class="text-white text-[32px] md:text-[44px] font-bold mb-6 md:mb-8 leading-tight drop-shadow-sm" style="font-family: 'Playfair Display', serif;">
              Personalised Horoscope
            </h2>
            <div>
              <a href="#" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-[#F6C022] text-[#3E2723] font-bold text-[15px] hover:bg-[#F4B400] transition-all hover:-translate-y-0.5 shadow-[0_4px_14px_rgba(246,192,34,0.4)]">
                Talk to Astrologer
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <!-- 12 Houses and Planets Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;">
        
        <div class="mb-10 max-w-none">
          <h2 class="text-[28px] md:text-[34px] font-bold text-gray-900 mb-4" style="font-family: 'Playfair Display', serif;">
            How Do the 12 Houses and Planets Influence Your Life?
          </h2>
          <p class="text-[14px] md:text-[15px] text-gray-600 mb-2 leading-relaxed">
            In astrology, your daily horoscope is based on the movement of the nine planets and their influence on the 12 houses of your birth chart.
          </p>
          <p class="text-[14px] md:text-[15px] text-gray-600 leading-relaxed">
            Each planet represents a unique energy, and their position today can affect different areas of your life such as love, career, health, finance and relationships.
          </p>
        </div>
        
        <!-- Planets Grid -->
        <div class="flex flex-wrap justify-center gap-3 md:gap-4 lg:gap-5">
          <!-- Card 1: Sun -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #FDE047, #EA580C);"></div>
               <img src="/planet-sun.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Sun" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Sun</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Identity & Confidence</p>
             </div>
          </div>
          <!-- Card 2: Moon -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #F3F4F6, #9CA3AF);"></div>
               <img src="/planet-moon.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Moon" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Moon</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Mind & Emotions</p>
             </div>
          </div>
          <!-- Card 3: Mercury -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #86EFAC, #166534);"></div>
               <img src="/planet-mercury.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Mercury" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Mercury</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Communication</p>
             </div>
          </div>
          <!-- Card 4: Venus -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #F472B6, #9D174D);"></div>
               <img src="/planet-venus.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Venus" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Venus</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Love & Relationships</p>
             </div>
          </div>
          <!-- Card 5: Mars -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #FCA5A5, #7F1D1D);"></div>
               <img src="/planet-mars.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Mars" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Mars</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Energy & Action</p>
             </div>
          </div>
          
          <!-- Next Row (4 items centered) -->
          <!-- Card 6: Jupiter -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #FDBA74, #9A3412);"></div>
               <img src="/planet-jupiter.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Jupiter" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Jupiter</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Growth & Wisdom</p>
             </div>
          </div>
          <!-- Card 7: Saturn -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #D4D4D8, #713F12);"></div>
               <img src="/planet-saturn.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Saturn" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Saturn</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Discipline & Karma</p>
             </div>
          </div>
          <!-- Card 8: Rahu -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #60A5FA, #1E3A8A);"></div>
               <img src="/planet-rahu.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Rahu" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Rahu</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Desires & Ambition</p>
             </div>
          </div>
          <!-- Card 9: Ketu -->
          <div class="w-full sm:w-[calc(50%-12px)] md:w-[calc(33.33%-16px)] lg:w-[calc(20%-16px)] bg-white border border-gray-100 rounded-2xl p-4 flex items-center gap-3 shadow-[0_2px_8px_rgb(0,0,0,0.03)] hover:shadow-md hover:border-gray-200 transition cursor-pointer group">
             <div class="relative w-12 h-12 shrink-0 group-hover:scale-110 transition-transform">
               <div class="absolute inset-0 rounded-full shadow-[inset_-4px_-4px_8px_rgba(0,0,0,0.2)]" style="background: radial-gradient(circle at 30% 30%, #9CA3AF, #374151);"></div>
               <img src="/planet-ketu.png" class="absolute inset-0 w-full h-full object-contain z-10 drop-shadow-md" alt="Ketu" onerror="this.style.display='none'" />
             </div>
             <div>
               <h4 class="font-bold text-gray-900 text-[14.5px] mb-0.5">Ketu</h4>
               <p class="text-[12px] text-gray-500 leading-tight">Spirituality & Detachment</p>
             </div>
          </div>
          
        </div>
        
      </div>
    </section>

    <!-- Interactive Horoscope Insights & Astrologers Section -->
    <section class="w-full pb-12 md:pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;" class="flex flex-col gap-10">
        
        <!-- Top Pink Banner -->
        <div class="bg-[#FFF0F5] rounded-[24px] p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-sm border border-pink-100/50">
          <div>
            <h3 class="text-[22px] md:text-[26px] font-bold text-gray-900 mb-1" style="font-family: 'Playfair Display', serif;">How will today be for your sign?</h3>
            <p class="text-[14.5px] text-gray-600">Get a quick glimpse of your day ahead</p>
          </div>
          <div class="flex flex-col sm:flex-row items-center gap-4 w-full md:w-auto">
            <!-- Select Aries -->
            <div class="relative w-full sm:w-44">
              <select class="w-full appearance-none bg-white border border-gray-200/80 text-gray-700 py-3 px-5 rounded-full pr-10 focus:outline-none focus:border-pink-300 font-medium text-[14.5px] shadow-[0_2px_10px_rgb(0,0,0,0.02)]">
                <option>Aries</option>
                <option>Taurus</option>
                <option>Gemini</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#EA580C]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
              </div>
            </div>
            
            <!-- Select Topic -->
            <div class="relative w-full sm:w-44">
              <select class="w-full appearance-none bg-white border border-gray-200/80 text-gray-700 py-3 px-5 rounded-full pr-10 focus:outline-none focus:border-pink-300 font-medium text-[14.5px] shadow-[0_2px_10px_rgb(0,0,0,0.02)]">
                <option>Love</option>
                <option>Career</option>
                <option>Finance</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#EA580C]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
              </div>
            </div>

            <button class="w-full sm:w-auto bg-[#FF6B8B] hover:bg-[#FF4F76] text-white font-bold py-3 px-8 rounded-full shadow-md transition whitespace-nowrap text-[15px]">
              Check Now
            </button>
          </div>
        </div>

        <!-- Main Content Grid -->
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-10">
          
          <!-- Left Column (Insights & Guide) -->
          <div class="w-full lg:w-[68%] xl:w-[72%] flex flex-col gap-12">
            
            <!-- Today's Horoscope Insights -->
            <div>
              <h3 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-1" style="font-family: 'Playfair Display', serif;">Today's Horoscope Insights</h3>
              <p class="text-[14.5px] text-gray-600 mb-6">Short insights to help you plan your day better.</p>
              
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                <!-- Insight 1: Love -->
                <div class="bg-white border border-gray-100 rounded-[20px] p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex flex-col gap-4 hover:shadow-md transition">
                  <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                  </div>
                  <div>
                    <h4 class="font-bold text-gray-900 text-[15px] mb-2">Love & Relationship</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Check how your day looks in matters of love and relationships.</p>
                  </div>
                </div>

                <!-- Insight 2: Career -->
                <div class="bg-white border border-gray-100 rounded-[20px] p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex flex-col gap-4 hover:shadow-md transition">
                  <div class="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                  </div>
                  <div>
                    <h4 class="font-bold text-gray-900 text-[15px] mb-2">Career & Work</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Find opportunities and potential challenges at work.</p>
                  </div>
                </div>

                <!-- Insight 3: Health -->
                <div class="bg-white border border-gray-100 rounded-[20px] p-5 md:p-6 shadow-[0_2px_8px_rgb(0,0,0,0.03)] flex flex-col gap-4 hover:shadow-md transition">
                  <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11 5C6 5 4 10 4 15c4-1 9 1 12 5 3-4 3-10-5-15z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16 20c-5-2-9-5-12-5"></path>
                    </svg>
                  </div>
                  <div>
                    <h4 class="font-bold text-gray-900 text-[15px] mb-2">Health & Wellness</h4>
                    <p class="text-[13px] text-gray-500 leading-relaxed">Know about your energy levels and health guidance.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Step-by-Step Guide -->
            <div>
              <h3 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-6" style="font-family: 'Playfair Display', serif;">Step-by-Step Guide to Read Your Daily Horoscope</h3>
              
              <div class="flex flex-col gap-4">
                <!-- Step 1 -->
                <div class="flex items-start gap-5 pb-5 border-b border-gray-100">
                  <div class="w-10 h-10 rounded-full bg-[#F59E0B] text-white flex items-center justify-center font-bold shrink-0 shadow-md">1</div>
                  <div class="pt-1">
                    <h4 class="font-bold text-gray-900 text-[15px] mb-1.5">Select Your Zodiac Sign</h4>
                    <p class="text-[13.5px] text-gray-500">Click on your zodiac sign from the list above.</p>
                  </div>
                </div>
                <!-- Step 2 -->
                <div class="flex items-start gap-5 pb-5 border-b border-gray-100">
                  <div class="w-10 h-10 rounded-full bg-[#F59E0B] text-white flex items-center justify-center font-bold shrink-0 shadow-md">2</div>
                  <div class="pt-1">
                    <h4 class="font-bold text-gray-900 text-[15px] mb-1.5">Read Key Predictions</h4>
                    <p class="text-[13.5px] text-gray-500">Check detailed predictions for love, career, finance, health and more.</p>
                  </div>
                </div>
                <!-- Step 3 -->
                <div class="flex items-start gap-5 pb-5 border-b border-gray-100">
                  <div class="w-10 h-10 rounded-full bg-[#F59E0B] text-white flex items-center justify-center font-bold shrink-0 shadow-md">3</div>
                  <div class="pt-1">
                    <h4 class="font-bold text-gray-900 text-[15px] mb-1.5">Understand Planetary Influence</h4>
                    <p class="text-[13.5px] text-gray-500">Learn how today's planetary movements affect your sign.</p>
                  </div>
                </div>
                <!-- Step 4 -->
                <div class="flex items-start gap-5">
                  <div class="w-10 h-10 rounded-full bg-[#F59E0B] text-white flex items-center justify-center font-bold shrink-0 shadow-md">4</div>
                  <div class="pt-1">
                    <h4 class="font-bold text-gray-900 text-[15px] mb-1.5">Plan Your Day</h4>
                    <p class="text-[13.5px] text-gray-500">Use these insights to make better decisions and stay prepared.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Right Column (Top Astrologers) -->
          <div class="w-full lg:w-[32%] xl:w-[28%]">
            <div class="bg-white rounded-3xl shadow-[0_4px_16px_rgb(0,0,0,0.04)] border border-gray-100 p-6 md:p-8 sticky top-6">
              <h4 class="font-bold text-gray-900 text-[17px] mb-1.5">Top Astrologers for Daily Horoscope</h4>
              <p class="text-[12.5px] text-gray-500 mb-6">Consult our expert astrologers for detailed guidance.</p>
              
              <ul class="flex flex-col gap-5 mb-6">
                <!-- Astro 1 -->
                <li class="flex items-center justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full overflow-hidden bg-gray-100 shrink-0 border border-orange-100">
                      <img src="/lady.png" alt="Astrologer" class="w-full h-full object-cover" onerror="this.src='/asset/logo.png'" />
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 text-[14px]">Acharya Neelima</h5>
                      <div class="flex items-center gap-1 text-[12px]">
                        <svg class="w-3.5 h-3.5 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="text-[#F59E0B] font-semibold">4.8</span>
                        <span class="text-gray-400">(2.1K)</span>
                      </div>
                    </div>
                  </div>
                  <button class="px-5 py-1.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[13px] hover:bg-orange-50 transition">Chat</button>
                </li>
                <!-- Astro 2 -->
                <li class="flex items-center justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full overflow-hidden bg-gray-100 shrink-0 border border-orange-100">
                      <img src="/pandit.png" alt="Astrologer" class="w-full h-full object-cover" onerror="this.src='/asset/logo.png'" />
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 text-[14px]">Pandit Vikram Joshi</h5>
                      <div class="flex items-center gap-1 text-[12px]">
                        <svg class="w-3.5 h-3.5 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="text-[#F59E0B] font-semibold">4.7</span>
                        <span class="text-gray-400">(1.8K)</span>
                      </div>
                    </div>
                  </div>
                  <button class="px-5 py-1.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[13px] hover:bg-orange-50 transition">Chat</button>
                </li>
                <!-- Astro 3 -->
                <li class="flex items-center justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full overflow-hidden bg-gray-100 shrink-0 border border-orange-100">
                      <img src="/lady.png" alt="Astrologer" class="w-full h-full object-cover" onerror="this.src='/asset/logo.png'" />
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 text-[14px]">Dr. Meera Joshi</h5>
                      <div class="flex items-center gap-1 text-[12px]">
                        <svg class="w-3.5 h-3.5 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="text-[#F59E0B] font-semibold">4.8</span>
                        <span class="text-gray-400">(3.1K)</span>
                      </div>
                    </div>
                  </div>
                  <button class="px-5 py-1.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[13px] hover:bg-orange-50 transition">Chat</button>
                </li>
                <!-- Astro 4 -->
                <li class="flex items-center justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full overflow-hidden bg-gray-100 shrink-0 border border-orange-100">
                      <img src="/lady.png" alt="Astrologer" class="w-full h-full object-cover" onerror="this.src='/asset/logo.png'" />
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 text-[14px]">Sadhvi Priya Nand</h5>
                      <div class="flex items-center gap-1 text-[12px]">
                        <svg class="w-3.5 h-3.5 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="text-[#F59E0B] font-semibold">4.7</span>
                        <span class="text-gray-400">(2.4K)</span>
                      </div>
                    </div>
                  </div>
                  <button class="px-5 py-1.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[13px] hover:bg-orange-50 transition">Chat</button>
                </li>
                <!-- Astro 5 -->
                <li class="flex items-center justify-between gap-3">
                  <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full overflow-hidden bg-gray-100 shrink-0 border border-orange-100">
                      <img src="/pandit.png" alt="Astrologer" class="w-full h-full object-cover" onerror="this.src='/asset/logo.png'" />
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 text-[14px]">Astro Kunal Verma</h5>
                      <div class="flex items-center gap-1 text-[12px]">
                        <svg class="w-3.5 h-3.5 text-[#F59E0B]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="text-[#F59E0B] font-semibold">4.6</span>
                        <span class="text-gray-400">(1.2K)</span>
                      </div>
                    </div>
                  </div>
                  <button class="px-5 py-1.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[13px] hover:bg-orange-50 transition">Chat</button>
                </li>
              </ul>

              <a href="/Chat-with-Astrologer" class="w-full py-3.5 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[14.5px] flex items-center justify-center gap-2 hover:bg-orange-50 transition group">
                View All Astrologers
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <!-- You May Also Like Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto;">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-[26px] md:text-[32px] font-bold text-[#111827]" style="font-family: 'Playfair Display', serif;">
            You May Also Like
          </h2>
          <a href="#" class="px-6 py-2 rounded-full border border-orange-200 text-[#EA580C] font-semibold text-[14px] hover:bg-orange-50 transition flex items-center gap-2 group">
            View All
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>
        
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <!-- Card 1 -->
          <div class="bg-white rounded-2xl border border-gray-100 p-4 shadow-[0_4px_12px_rgb(0,0,0,0.03)] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col group cursor-pointer">
            <div class="w-full h-48 md:h-52 rounded-xl overflow-hidden mb-4">
              <img src="/article1.png" alt="Daily Horoscope" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            </div>
            <h3 class="font-bold text-gray-900 text-[15px] md:text-[16px] leading-snug mb-5 flex-grow">
              Daily Horoscope 25 September 2026: What the Stars Predict for Your Sign Today?
            </h3>
            <div class="flex items-center justify-between pt-4 border-t border-gray-50">
              <div class="flex items-center gap-2">
                <img src="/lady.png" alt="Author" class="w-7 h-7 rounded-full object-cover border border-gray-200" onerror="this.src='/asset/logo.png'" />
                <span class="text-[12px] font-medium text-gray-500">Astro Team <span class="mx-1">|</span> 25 Sep, 2026</span>
              </div>
              <div class="w-8 h-8 rounded-full bg-[#F6C022] flex items-center justify-center text-white shrink-0 group-hover:bg-[#F4B400] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="bg-white rounded-2xl border border-gray-100 p-4 shadow-[0_4px_12px_rgb(0,0,0,0.03)] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col group cursor-pointer">
            <div class="w-full h-48 md:h-52 rounded-xl overflow-hidden mb-4">
              <img src="/article2.png" alt="Daily Love Horoscope" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            </div>
            <h3 class="font-bold text-gray-900 text-[15px] md:text-[16px] leading-snug mb-5 flex-grow">
              Daily Love Horoscope 25 September 2026: Romance, Relationships & Compatibility
            </h3>
            <div class="flex items-center justify-between pt-4 border-t border-gray-50">
              <div class="flex items-center gap-2">
                <img src="/pandit.png" alt="Author" class="w-7 h-7 rounded-full object-cover border border-gray-200" onerror="this.src='/asset/logo.png'" />
                <span class="text-[12px] font-medium text-gray-500">Astro Team <span class="mx-1">|</span> 25 Sep, 2026</span>
              </div>
              <div class="w-8 h-8 rounded-full bg-[#F6C022] flex items-center justify-center text-white shrink-0 group-hover:bg-[#F4B400] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl border border-gray-100 p-4 shadow-[0_4px_12px_rgb(0,0,0,0.03)] hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col group cursor-pointer">
            <div class="w-full h-48 md:h-52 rounded-xl overflow-hidden mb-4">
              <img src="/article3.png" alt="Daily Career Horoscope" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            </div>
            <h3 class="font-bold text-gray-900 text-[15px] md:text-[16px] leading-snug mb-5 flex-grow">
              Daily Career Horoscope 25 September 2026: Opportunities and Growth Ahead
            </h3>
            <div class="flex items-center justify-between pt-4 border-t border-gray-50">
              <div class="flex items-center gap-2">
                <img src="/lady.png" alt="Author" class="w-7 h-7 rounded-full object-cover border border-gray-200" onerror="this.src='/asset/logo.png'" />
                <span class="text-[12px] font-medium text-gray-500">Astro Team <span class="mx-1">|</span> 25 Sep, 2026</span>
              </div>
              <div class="w-8 h-8 rounded-full bg-[#F6C022] flex items-center justify-center text-white shrink-0 group-hover:bg-[#F4B400] transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </div>
            </div>
          </div>

        </div>
        
      </div>
    </section>
    <!-- FAQ Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-width: 1000px;">
        <h2 class="text-[26px] md:text-[32px] font-bold text-[#111827] mb-6" style="font-family: 'Playfair Display', serif;">
          Frequently Asked Questions
        </h2>
        
        <div class="flex flex-col gap-3">
          
          <!-- FAQ Item 1 -->
          <details name="faq" class="group bg-white border border-gray-200/60 rounded-[14px] shadow-[0_2px_8px_rgb(0,0,0,0.02)] overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none py-4 px-5 md:px-6 text-[14.5px] text-gray-800 hover:text-[#EA580C] transition-colors select-none [&::-webkit-details-marker]:hidden">
              <span>How accurate is the daily horoscope?</span>
              <span class="transition-transform duration-300 group-open:rotate-45 shrink-0 text-[#EA580C]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>
                </svg>
              </span>
            </summary>
            <div class="text-gray-600 px-5 md:px-6 pb-5 pt-1 text-[13.5px] leading-relaxed">
              Our daily horoscopes are crafted by expert astrologers who deeply analyze planetary transits and their impact on your specific zodiac sign, providing highly accurate and insightful guidance for your day.
            </div>
          </details>

          <!-- FAQ Item 2 -->
          <details name="faq" class="group bg-white border border-gray-200/60 rounded-[14px] shadow-[0_2px_8px_rgb(0,0,0,0.02)] overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none py-4 px-5 md:px-6 text-[14.5px] text-gray-800 hover:text-[#EA580C] transition-colors select-none [&::-webkit-details-marker]:hidden">
              <span>Is the daily horoscope based on my birth chart?</span>
              <span class="transition-transform duration-300 group-open:rotate-45 shrink-0 text-[#EA580C]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>
                </svg>
              </span>
            </summary>
            <div class="text-gray-600 px-5 md:px-6 pb-5 pt-1 text-[13.5px] leading-relaxed">
              While daily horoscopes are based on the general sun sign or moon sign transits, a personalized reading requires your exact birth time, date, and place to calculate your unique birth chart.
            </div>
          </details>

          <!-- FAQ Item 3 -->
          <details name="faq" class="group bg-white border border-gray-200/60 rounded-[14px] shadow-[0_2px_8px_rgb(0,0,0,0.02)] overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none py-4 px-5 md:px-6 text-[14.5px] text-gray-800 hover:text-[#EA580C] transition-colors select-none [&::-webkit-details-marker]:hidden">
              <span>Can I read horoscope for all zodiac signs?</span>
              <span class="transition-transform duration-300 group-open:rotate-45 shrink-0 text-[#EA580C]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>
                </svg>
              </span>
            </summary>
            <div class="text-gray-600 px-5 md:px-6 pb-5 pt-1 text-[13.5px] leading-relaxed">
              Yes! You can easily switch between different zodiac signs using our interactive sign selector to read the daily horoscope for your friends, family, or partner.
            </div>
          </details>

          <!-- FAQ Item 4 -->
          <details name="faq" class="group bg-white border border-gray-200/60 rounded-[14px] shadow-[0_2px_8px_rgb(0,0,0,0.02)] overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none py-4 px-5 md:px-6 text-[14.5px] text-gray-800 hover:text-[#EA580C] transition-colors select-none [&::-webkit-details-marker]:hidden">
              <span>When is the daily horoscope updated?</span>
              <span class="transition-transform duration-300 group-open:rotate-45 shrink-0 text-[#EA580C]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>
                </svg>
              </span>
            </summary>
            <div class="text-gray-600 px-5 md:px-6 pb-5 pt-1 text-[13.5px] leading-relaxed">
              Our daily horoscopes are updated every day at midnight (IST), ensuring you start your morning with the freshest astrological insights and guidance.
            </div>
          </details>

          <!-- FAQ Item 5 -->
          <details name="faq" class="group bg-white border border-gray-200/60 rounded-[14px] shadow-[0_2px_8px_rgb(0,0,0,0.02)] overflow-hidden transition-all duration-300">
            <summary class="flex justify-between items-center font-medium cursor-pointer list-none py-4 px-5 md:px-6 text-[14.5px] text-gray-800 hover:text-[#EA580C] transition-colors select-none [&::-webkit-details-marker]:hidden">
              <span>Can I get a personalised horoscope instead of the daily horoscope?</span>
              <span class="transition-transform duration-300 group-open:rotate-45 shrink-0 text-[#EA580C]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>
                </svg>
              </span>
            </summary>
            <div class="text-gray-600 px-5 md:px-6 pb-5 pt-1 text-[13.5px] leading-relaxed">
              Absolutely! You can use the "Talk to Astrologer" or "Chat" features available on our platform to connect with expert astrologers and get a deeply personalized reading based on your exact birth details.
            </div>
          </details>

        </div>
      </div>
    </section>

  </main>

  <!-- Footer Component -->
  <div class="app-footer"></div>

  <!-- Component Script -->
  <script src="/js/api.js"></script>
  <script src="/js/component.js"></script>
  <script type="module" src="/src/main.js"></script>
</body>

</html>