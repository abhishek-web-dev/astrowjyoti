<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Fonts for Typography -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <title>Astrowjyoti - Discover Your Cosmic Path</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-astro-cream text-gray-900 font-sans antialiased overflow-x-hidden">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <!-- Hero Section Component -->
  <main>
    <section class="relative w-full bg-[#FFFDF9] overflow-hidden flex items-center" style="min-height: 600px;">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0">
        <img src="/Talk-to-Astrologer-banner.png" alt="Talk to Astrologer Background"
          class="w-full h-full object-cover object-right lg:object-center" />
      </div>


      <!-- Left Gradient Overlay for readability -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9]/80 via-[#FFFDF9]/40 to-transparent w-full md:w-[35%] z-0">
      </div>

      <!-- Content -->
      <div class="relative z-10 w-full py-12 md:py-24 lg:py-28" style="width: 90%; margin: 0 auto;">
        <div class="max-w-3xl">

          <!-- Breadcrumb -->
          <nav class="flex text-gray-500 font-medium mb-8" style="font-size: 15px;" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">
              <li class="inline-flex items-center">
                <a href="/" class="hover:text-[#F2780C] transition-colors">Home</a>
              </li>
              <li>
                <div class="flex items-center">
                  <span class="mx-2 text-gray-400 font-light">&gt;</span>
                  <a href="#" class="hover:text-[#F2780C] transition-colors">Consultations</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <span class="mx-2 text-gray-400 font-light">&gt;</span>
                  <span class="text-[#F2780C]">Talk to Astrologer</span>
                </div>
              </li>
            </ol>
          </nav>

          <!-- Heading -->
          <h1 class="font-bold text-[#111] mb-6"
            style="font-family: 'Playfair Display', serif; font-size: clamp(48px, 6vw, 84px); line-height: 1.1; letter-spacing: -0.02em;">
            Talk to <span class="text-[#F2780C]">Astrologer</span>
          </h1>

          <!-- Subheading -->
          <p class="text-gray-900 font-bold mb-12 max-w-[90%] md:max-w-2xl"
            style="font-size: clamp(16px, 2vw, 22px); line-height: 1.6;">
            Get instant voice consultation with our experienced astrologer and find solutions to life's important
            questions.
          </p>
        </div>

        <!-- Features -->
        <div
          class="flex flex-row flex-nowrap items-center justify-start gap-8 md:gap-12 lg:gap-16 pt-4 whitespace-nowrap overflow-x-auto hide-scrollbar">

          <!-- Feature 1 -->
          <div class="flex items-center gap-4">
            <div
              class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10"
              style="width: 52px; height: 52px;">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-0.5" style="font-size: 16px;">Instant Connect</h4>
              <p class="text-gray-800 font-semibold" style="font-size: 13px;">Talk to astrologer now</p>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="flex items-center gap-4">
            <div
              class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10"
              style="width: 52px; height: 52px;">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-0.5" style="font-size: 16px;">100% Private</h4>
              <p class="text-gray-800 font-semibold" style="font-size: 13px;">Your conversations are secure</p>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="flex items-center gap-4">
            <div
              class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10"
              style="width: 52px; height: 52px;">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 mb-0.5" style="font-size: 16px;">Expert Guidance</h4>
              <p class="text-gray-800 font-semibold" style="font-size: 13px;">Get solutions for life's problems</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Topics Filter Bar Section -->
    <section class="w-full relative z-20"
      style="background: linear-gradient(to bottom, transparent 50%, #FFFDF9 50%); padding-bottom: 3rem;">
      <div style="width: 90%; margin: 0 auto; transform: translateY(-30%);">
        <div
          class="bg-white rounded-[24px] shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-gray-100 p-2 md:p-3 flex items-center justify-between overflow-x-auto hide-scrollbar gap-2 w-full">

          <!-- All Topics (Active) -->
          <button
            class="flex flex-col items-center justify-center min-w-[100px] md:min-w-[110px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">All
              Topics</span>
          </button>

          <!-- Love & Relationship -->
          <button
            class="flex flex-col items-center justify-center min-w-[110px] md:min-w-[130px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Love
              & Relationship</span>
          </button>

          <!-- Marriage -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Marriage</span>
          </button>

          <!-- Career & Job -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[110px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Career
              & Job</span>
          </button>

          <!-- Finance -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Finance</span>
          </button>

          <!-- Health -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0zM12 9v6m3-3H9">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Health</span>
          </button>

          <!-- Family -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Family</span>
          </button>

          <!-- Education -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14l9-5-9-5-9 5 9 5z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
              </path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 14v7"></path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Education</span>
          </button>

          <!-- Business -->
          <button
            class="flex flex-col items-center justify-center min-w-[90px] md:min-w-[100px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Business</span>
          </button>

          <!-- Other -->
          <button
            class="flex flex-col items-center justify-center min-w-[70px] md:min-w-[90px] px-2 py-4 md:py-5 rounded-2xl hover:bg-[#FFF6EF] transition-all group shrink-0">
            <svg class="w-7 h-7 md:w-8 md:h-8 text-[#F2780C] mb-1.5 group-hover:scale-110 transition-transform"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
              </path>
            </svg>
            <span
              class="text-[#4F5665] group-hover:text-[#F2780C] text-[11px] md:text-[13px] font-semibold whitespace-nowrap">Other</span>
          </button>

        </div>
      </div>
    </section>

    <!-- Astrologers Section -->
    <section class="w-full pb-24 bg-[#FFFDF9] relative z-10">
      <div style="width: 90%; margin: 0 auto;" class="pt-4">

        <!-- Filters Row -->
        <div class="flex flex-col lg:flex-row gap-4 mb-10 w-full lg:w-[68%] xl:w-[72%]">
          <div class="relative flex-grow">
            <div class="absolute top-1/2 -translate-y-1/2 pointer-events-none text-[#334155]" style="left: 16px;">
              <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                </path>
              </svg>
            </div>
            <input type="text"
              class="block w-full pr-4 py-3 border border-[#E2E8F0] rounded-full bg-white text-[13px] font-semibold text-gray-900 placeholder-[#64748B] focus:border-[#F2780C] focus:ring-1 focus:ring-[#F2780C] outline-none"
              style="padding-left: 48px;" placeholder="Search astrologer by name, expertise, or keyword...">
          </div>

          <div class="flex flex-wrap gap-3 pb-2 lg:pb-0" id="filters-container">
            <!-- Language -->
            <div style="position: relative; display: inline-block;">
              <button onclick="toggleDropdown(this)"
                class="flex items-center gap-2 bg-white px-5 py-3 rounded-full border border-[#E2E8F0] text-[13px] font-bold text-[#1E293B] whitespace-nowrap hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 text-[#334155]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                  </path>
                </svg>
                Language
                <svg class="w-4 h-4 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="3"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="filter-dropdown"
                style="display: none; position: absolute; top: 100%; left: 0; margin-top: 8px; width: 180px; background-color: white; border: 1px solid #E2E8F0; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); z-index: 50; padding: 8px 0;">
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">English</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Hindi</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Tamil</span>
                </label>
              </div>
            </div>

            <!-- Experience -->
            <div style="position: relative; display: inline-block;">
              <button onclick="toggleDropdown(this)"
                class="flex items-center gap-2 bg-white px-5 py-3 rounded-full border border-[#E2E8F0] text-[13px] font-bold text-[#1E293B] whitespace-nowrap hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 text-[#334155]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                  </path>
                </svg>
                Experience
                <svg class="w-4 h-4 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="3"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="filter-dropdown"
                style="display: none; position: absolute; top: 100%; left: 0; margin-top: 8px; width: 180px; background-color: white; border: 1px solid #E2E8F0; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); z-index: 50; padding: 8px 0;">
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">0-2 Years</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">3-5 Years</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">5+ Years</span>
                </label>
              </div>
            </div>

            <!-- Availability -->
            <div style="position: relative; display: inline-block;">
              <button onclick="toggleDropdown(this)"
                class="flex items-center gap-2 bg-white px-5 py-3 rounded-full border border-[#E2E8F0] text-[13px] font-bold text-[#1E293B] whitespace-nowrap hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 text-[#334155]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
                </svg>
                Availability
                <svg class="w-4 h-4 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="3"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="filter-dropdown"
                style="display: none; position: absolute; top: 100%; left: 0; margin-top: 8px; width: 180px; background-color: white; border: 1px solid #E2E8F0; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); z-index: 50; padding: 8px 0;">
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Available Now</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="checkbox"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Offline</span>
                </label>
              </div>
            </div>

            <!-- Sort by -->
            <div style="position: relative; display: inline-block;">
              <button onclick="toggleDropdown(this)"
                class="flex items-center gap-2 bg-white px-5 py-3 rounded-full border border-[#E2E8F0] text-[13px] font-bold text-[#1E293B] whitespace-nowrap hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 text-[#334155]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12">
                  </path>
                </svg>
                Sort by
                <svg class="w-4 h-4 text-[#0F172A]" fill="none" stroke="currentColor" stroke-width="3"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div class="filter-dropdown"
                style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; width: 200px; background-color: white; border: 1px solid #E2E8F0; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); z-index: 50; padding: 8px 0;">
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="radio" name="sort"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Price: Low to High</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="radio" name="sort"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Price: High to Low</span>
                </label>
                <label style="display: flex; align-items: center; padding: 8px 16px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='#F9FAFB'"
                  onmouseout="this.style.backgroundColor='transparent'">
                  <input type="radio" name="sort"
                    style="margin-right: 12px; accent-color: #F2780C; width: 16px; height: 16px; cursor: pointer;">
                  <span style="font-size: 13px; font-weight: 600; color: #1E293B;">Highest Rated</span>
                </label>
              </div>
            </div>

            <script>
              function toggleDropdown(btn) {
                var d = btn.nextElementSibling;
                var isVisible = d.style.display === 'block';
                document.querySelectorAll('.filter-dropdown').forEach(function (el) { el.style.display = 'none'; });
                if (!isVisible) {
                  d.style.display = 'block';
                }
              }
              document.addEventListener('click', function (e) {
                document.querySelectorAll('.filter-dropdown').forEach(function (d) {
                  if (!d.parentElement.contains(e.target)) {
                    d.style.display = 'none';
                  }
                });
              });
            </script>
          </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 lg:gap-10">

          <!-- Left Content (Grid) -->
          <div class="w-full lg:w-[68%] xl:w-[72%]">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 gap-4">
              <div>
                <h2 class="text-[24px] md:text-[28px] font-bold text-gray-900"
                  style="font-family: 'Playfair Display', serif;">Available Astrologer</h2>
                <p class="text-[13px] text-gray-500 font-medium mt-1">Connect instantly with our astrologer for
                  personalized guidance.</p>
              </div>
              <div class="flex items-center gap-2.5 text-[12px] font-bold text-gray-500">
                24/7 Available
                <div
                  class="w-9 h-5 bg-[#009E52] rounded-full flex items-center p-0.5 relative cursor-pointer shadow-inner">
                  <div class="w-4 h-4 bg-white rounded-full absolute right-0.5 shadow-sm"></div>
                </div>
              </div>
            </div>

            <style>
              .astro-grid-layout {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 16px;
              }

              @media (max-width: 640px) {
                .astro-grid-layout {
                  grid-template-columns: minmax(0, 1fr);
                }
              }
            </style>
            <div class="astro-grid-layout" id="astrologer-grid">
              <!-- Dynamically populated via JS -->
            </div>
            
            <input type="hidden" id="consultation_type_filter" value="audio">
            
            <div class="mt-8 mb-6 flex justify-center">
              <button class="bg-[#FFFDF9] border border-orange-100 text-[#EA580C] font-bold py-3 px-8 rounded-full shadow-sm hover:shadow-md transition-all flex items-center gap-2" style="font-size: 14px;">
                View More Astrologers
                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </button>
            </div>
          </div>
          
          <!-- Right Content (Sidebar) -->
          <div class="w-full lg:w-[32%] xl:w-[28%] relative">
            <div class="sticky top-6 flex flex-col gap-6">

              <!-- Most Consulted -->
              <div class="bg-[#FFFDF9] border border-[#FDECE2] shadow-[0_8px_30px_rgba(0,0,0,0.02)] rounded-[24px] p-6">
                <h3 class="font-bold text-gray-900 text-[20px] mb-1" style="font-family: 'Playfair Display', serif;">
                  Most Consulted This Week</h3>
                <p class="text-gray-500 text-[11px] font-medium mb-6">Our most popular astrologer for quick guidance.
                </p>

                <div class="flex flex-col gap-5">

                  <!-- Mini Item -->
                  <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                      <img src="/acharya.png" class="w-12 h-12 rounded-full object-cover shadow-sm bg-[#FFF6EF]"
                        alt="Acharya Neelima" onerror="this.src='https://placehold.co/100x100/ea580c/ffffff?text=A'">
                      <div
                        class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#009E52] border-2 border-white rounded-full">
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h4 class="font-bold text-gray-900 text-[13px]">Acharya Neelima</h4>
                      <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-orange-400 fill-current" viewBox="0 0 20 20">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <span class="text-[12px] font-bold text-gray-900">4.8</span>
                        <span class="text-[10px] font-semibold text-gray-400">(2.1K)</span>
                      </div>
                    </div>
                    <button
                      class="shrink-0 bg-white border border-[#F2780C] text-[#F2780C] hover:bg-[#FFF6EF] font-bold px-3.5 py-1.5 rounded-full text-[11px] flex items-center gap-1.5 transition-colors">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                      </svg>
                      Call
                    </button>
                  </div>
                  <!-- Mini Item -->
                  <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                      <img src="/pandit.png" class="w-12 h-12 rounded-full object-cover shadow-sm bg-[#FFF6EF]"
                        alt="Pandit Vikram Joshi"
                        onerror="this.src='https://placehold.co/100x100/ea580c/ffffff?text=A'">
                      <div
                        class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#009E52] border-2 border-white rounded-full">
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h4 class="font-bold text-gray-900 text-[13px]">Pandit Vikram Joshi</h4>
                      <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-orange-400 fill-current" viewBox="0 0 20 20">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <span class="text-[12px] font-bold text-gray-900">4.7</span>
                        <span class="text-[10px] font-semibold text-gray-400">(1.8K)</span>
                      </div>
                    </div>
                    <button
                      class="shrink-0 bg-white border border-[#F2780C] text-[#F2780C] hover:bg-[#FFF6EF] font-bold px-3.5 py-1.5 rounded-full text-[11px] flex items-center gap-1.5 transition-colors">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                      </svg>
                      Call
                    </button>
                  </div>
                  <!-- Mini Item -->
                  <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                      <img src="/acharya.png" class="w-12 h-12 rounded-full object-cover shadow-sm bg-[#FFF6EF]"
                        alt="Dr. Meera Joshi" onerror="this.src='https://placehold.co/100x100/ea580c/ffffff?text=A'">
                      <div
                        class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#009E52] border-2 border-white rounded-full">
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h4 class="font-bold text-gray-900 text-[13px]">Dr. Meera Joshi</h4>
                      <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-orange-400 fill-current" viewBox="0 0 20 20">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <span class="text-[12px] font-bold text-gray-900">4.8</span>
                        <span class="text-[10px] font-semibold text-gray-400">(3.1K)</span>
                      </div>
                    </div>
                    <button
                      class="shrink-0 bg-white border border-[#F2780C] text-[#F2780C] hover:bg-[#FFF6EF] font-bold px-3.5 py-1.5 rounded-full text-[11px] flex items-center gap-1.5 transition-colors">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                      </svg>
                      Call
                    </button>
                  </div>
                  <!-- Mini Item -->
                  <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                      <img src="/acharya.png" class="w-12 h-12 rounded-full object-cover shadow-sm bg-[#FFF6EF]"
                        alt="Sadhvi Priya Nand" onerror="this.src='https://placehold.co/100x100/ea580c/ffffff?text=A'">
                      <div
                        class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#009E52] border-2 border-white rounded-full">
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h4 class="font-bold text-gray-900 text-[13px]">Sadhvi Priya Nand</h4>
                      <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-orange-400 fill-current" viewBox="0 0 20 20">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <span class="text-[12px] font-bold text-gray-900">4.7</span>
                        <span class="text-[10px] font-semibold text-gray-400">(2.4K)</span>
                      </div>
                    </div>
                    <button
                      class="shrink-0 bg-white border border-[#F2780C] text-[#F2780C] hover:bg-[#FFF6EF] font-bold px-3.5 py-1.5 rounded-full text-[11px] flex items-center gap-1.5 transition-colors">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                      </svg>
                      Call
                    </button>
                  </div>
                  <!-- Mini Item -->
                  <div class="flex items-center gap-3">
                    <div class="relative shrink-0">
                      <img src="/pandit.png" class="w-12 h-12 rounded-full object-cover shadow-sm bg-[#FFF6EF]"
                        alt="Astro Kunal Verma" onerror="this.src='https://placehold.co/100x100/ea580c/ffffff?text=A'">
                      <div
                        class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-[#009E52] border-2 border-white rounded-full">
                      </div>
                    </div>
                    <div class="flex-grow">
                      <h4 class="font-bold text-gray-900 text-[13px]">Astro Kunal Verma</h4>
                      <div class="flex items-center gap-1 mt-0.5">
                        <svg class="w-3.5 h-3.5 text-orange-400 fill-current" viewBox="0 0 20 20">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <span class="text-[12px] font-bold text-gray-900">4.6</span>
                        <span class="text-[10px] font-semibold text-gray-400">(1.2K)</span>
                      </div>
                    </div>
                    <button
                      class="shrink-0 bg-white border border-[#F2780C] text-[#F2780C] hover:bg-[#FFF6EF] font-bold px-3.5 py-1.5 rounded-full text-[11px] flex items-center gap-1.5 transition-colors">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                      </svg>
                      Call
                    </button>
                  </div>
                </div>
              </div>

              <!-- Need Help Choosing -->
              <div
                class="bg-gradient-to-b from-[#FFFDF9] to-[#FFF6EF] border border-[#FDECE2] shadow-[0_8px_30px_rgba(0,0,0,0.02)] rounded-[24px] p-8 text-center flex flex-col items-center">
                <div
                  class="w-[72px] h-[72px] bg-white rounded-2xl flex items-center justify-center text-[#F2780C] shadow-sm mb-5 border border-orange-50 relative">
                  <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                    </path>
                  </svg>
                  <div class="absolute top-3 right-3 w-2.5 h-2.5 bg-orange-400 rounded-full border border-white"></div>
                </div>
                <h3 class="font-bold text-gray-900 text-[22px] mb-1.5" style="font-family: 'Playfair Display', serif;">
                  Need Help Choosing?</h3>
                <p class="text-gray-500 text-[14px] font-medium mb-8">Talk to us on WhatsApp</p>

                <button
                  class="w-full bg-white border border-[#F2780C] hover:bg-[#FFF6EF] text-[#F2780C] font-bold py-3.5 rounded-full text-[14px] flex items-center justify-center gap-2 transition-colors shadow-sm">
                  <svg class="w-5 h-5 text-[#009E52]" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M12 2C6.48 2 2 6.48 2 12c0 2.17.7 4.19 1.94 5.86L3 22l4.14-.94A9.96 9.96 0 0012 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm5.29 14.5c-.24.68-1.39 1.25-1.95 1.3-.53.05-1.18.25-3.82-1.02-3.19-1.53-5.26-4.96-5.42-5.18-.16-.21-1.28-1.74-1.28-3.32s.82-2.38 1.11-2.69c.29-.31.64-.38.86-.38.22 0 .44 0 .64.01.21.01.49-.07.76.57.27.65.92 2.3.99 2.45.08.15.14.33.03.55-.1.21-.16.34-.32.53-.16.19-.34.42-.48.55-.16.16-.33.34-.14.67.19.33.85 1.45 1.83 2.33 1.26 1.13 2.33 1.48 2.65 1.63.32.15.52.13.72-.09.2-.22.86-1.01 1.09-1.36.23-.35.46-.29.76-.18.29.1 1.85.89 2.16 1.05.32.16.53.25.61.38.08.14.08.82-.16 1.5z"
                      clip-rule="evenodd" />
                  </svg>
                  Chat on WhatsApp
                </button>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>



<!-- Stats Section -->
    <section class="w-full py-12 bg-[#FFFDF9] relative border-t border-orange-50/50">
      <div style="width: 90%; margin: 0 auto;">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center justify-between">

          <!-- Left Text -->
          <div class="w-full lg:w-5/12">
            <h2 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-3"
              style="font-family: 'Playfair Display', serif;">
              India's Trusted Astrology Guidance
            </h2>
            <p class="text-[14px] text-gray-500 font-medium leading-relaxed max-w-md">
              Thousands of people trust Astrowjyoti for genuine and practical solutions to their life's questions.
            </p>
          </div>

          <!-- Right Stats Cards -->
          <div class="w-full lg:w-7/12">
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
              <!-- Stat 1 -->
              <div
                class="bg-white rounded-2xl p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-orange-50/50 text-center flex flex-col justify-center min-h-[110px]">
                <h4 class="text-[26px] font-bold text-[#EA580C] mb-1">5K+</h4>
                <p class="text-[12px] font-semibold text-[#475569]">Happy Consultations</p>
              </div>
              <!-- Stat 2 -->
              <div
                class="bg-white rounded-2xl p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-orange-50/50 text-center flex flex-col justify-center min-h-[110px]">
                <h4 class="text-[26px] font-bold text-[#EA580C] mb-1">10+</h4>
                <p class="text-[12px] font-semibold text-[#475569]">Years of Experience</p>
              </div>
              <!-- Stat 3 -->
              <div
                class="bg-white rounded-2xl p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-orange-50/50 text-center flex flex-col justify-center min-h-[110px]">
                <h4 class="text-[26px] font-bold text-[#EA580C] mb-1">4.8</h4>
                <p class="text-[12px] font-semibold text-[#475569]">Average Rating</p>
              </div>
              <!-- Stat 4 -->
              <div
                class="bg-white rounded-2xl p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-orange-50/50 text-center flex flex-col justify-center min-h-[110px]">
                <h4 class="text-[26px] font-bold text-[#EA580C] mb-1">98%</h4>
                <p class="text-[12px] font-semibold text-[#475569]">Satisfied Users</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<!-- Why Consult Section -->
    <section class="w-full py-16 bg-[#FFFDF9] relative border-t border-orange-50/30">
      <div style="width: 90%; margin: 0 auto;">
        <h2 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-10"
          style="font-family: 'Playfair Display', serif;">
          Why Consult at <span class="text-[#F2780C]">Astrowjyoti?</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Card 1 -->
          <div
            class="bg-white rounded-3xl p-7 shadow-[0_4px_20px_rgba(0,0,0,0.02)] border border-orange-100/50 hover:shadow-md transition-all">
            <svg class="w-10 h-10 text-[#F2780C] mb-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
              </path>
            </svg>
            <h3 class="text-[16px] font-bold text-[#1E293B] mb-2.5">Verified & Trusted</h3>
            <p class="text-[13px] font-medium text-gray-500 leading-relaxed">Consult with a certified and experienced
              astrologer.</p>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-white rounded-3xl p-7 shadow-[0_4px_20px_rgba(0,0,0,0.02)] border border-orange-100/50 hover:shadow-md transition-all">
            <svg class="w-10 h-10 text-[#F2780C] mb-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
              </path>
            </svg>
            <h3 class="text-[16px] font-bold text-[#1E293B] mb-2.5">100% Private</h3>
            <p class="text-[13px] font-medium text-gray-500 leading-relaxed">Your conversations are completely
              confidential and secure.</p>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-white rounded-3xl p-7 shadow-[0_4px_20px_rgba(0,0,0,0.02)] border border-orange-100/50 hover:shadow-md transition-all">
            <svg class="w-10 h-10 text-[#F2780C] mb-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-[16px] font-bold text-[#1E293B] mb-2.5">24/7 Available</h3>
            <p class="text-[13px] font-medium text-gray-500 leading-relaxed">Get guidance anytime, anywhere.</p>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-white rounded-3xl p-7 shadow-[0_4px_20px_rgba(0,0,0,0.02)] border border-orange-100/50 hover:shadow-md transition-all">
            <svg class="w-10 h-10 text-[#F2780C] mb-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
              </path>
            </svg>
            <h3 class="text-[16px] font-bold text-[#1E293B] mb-2.5">Personalized Solutions</h3>
            <p class="text-[13px] font-medium text-gray-500 leading-relaxed">Answers tailored to your unique life
              situation.</p>
          </div>
        </div>
      </div>
    </section>

<!-- Chat Info Section -->
    <section class="w-full py-16 bg-[#FFFDF9] relative border-t border-orange-50/50">
      <div style="width: 90%; margin: 0 auto;">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

          <!-- Left Content -->
          <div class="flex flex-col">
            <h2 class="text-[28px] md:text-[34px] font-bold text-gray-900 mb-6 leading-tight"
              style="font-family: 'Playfair Display', serif;">
              Chat with an Astrologer on Astrowjyoti
            </h2>
            <p class="text-gray-500 font-medium text-[15px] leading-relaxed mb-4">
              Life can be full of questions — and sometimes, all you need is the right guidance from an experienced
              astrologer. At Astrowjyoti, you can talk to our astrologer and get personalized advice for love, marriage,
              career, finance, health, family and more.
            </p>
            <p class="text-gray-500 font-medium text-[15px] leading-relaxed mb-8">
              Our astrologer uses the wisdom of Vedic astrology, numerology, tarot and other ancient sciences to help
              you understand your present situation and find the best path for your future.
            </p>
            <div>
              <button
                class="bg-[#EA580C] hover:bg-orange-700 text-white font-bold py-3.5 px-8 rounded-full text-[15px] flex items-center justify-center gap-2 transition-colors shadow-sm">
                Talk Now
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </button>
            </div>
          </div>

          <!-- Right Content (Card) -->
          <div
            class="bg-white rounded-3xl border border-orange-100 shadow-[0_4px_20px_rgba(0,0,0,0.02)] p-8 relative overflow-hidden">
            <!-- Decorative background mandala/circle -->
            <div class="absolute -right-24 top-1/2 -translate-y-1/2 w-64 h-64 opacity-5 pointer-events-none">
              <svg viewBox="0 0 100 100" fill="none" stroke="#EA580C" stroke-width="0.5">
                <circle cx="50" cy="50" r="45"></circle>
                <circle cx="50" cy="50" r="35"></circle>
                <circle cx="50" cy="50" r="25"></circle>
                <path d="M50 5 L50 95 M5 50 L95 50 M18 18 L82 82 M18 82 L82 18"></path>
                <circle cx="50" cy="50" r="8"></circle>
              </svg>
            </div>

            <h3 class="font-bold text-[#EA580C] text-[18px] mb-6 relative z-10">Topics You Can Discuss</h3>

            <div class="flex flex-col gap-4 relative z-10">

              <!-- Topic 1 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Love & Relationship</span>
              </div>

              <!-- Topic 2 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Marriage & Kundli Matching</span>
              </div>

              <!-- Topic 3 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Career & Job</span>
              </div>

              <!-- Topic 4 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Finance & Wealth</span>
              </div>

              <!-- Topic 5 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Health & Well-being</span>
              </div>

              <!-- Topic 6 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Family & Children</span>
              </div>

              <!-- Topic 7 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                    </path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Education</span>
              </div>

              <!-- Topic 8 -->
              <div class="flex items-center gap-4">
                <div class="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center text-[#EA580C] shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>
                </div>
                <span class="text-[14px] font-bold text-[#334155]">Business & Growth</span>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

<!-- FAQ Section -->
    <section class="w-full py-20 relative bg-cover bg-center bg-no-repeat mt-4"
      style="background-image: url('/Talk-to-Astrologer-banner-faq.png');">
      <div style="width: 90%; margin: 0 auto;" class="relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">

          <!-- Left Text -->
          <div class="lg:col-span-4 lg:col-start-2 flex flex-col justify-start -mt-2 lg:-mt-6 lg:pl-24 xl:pl-32">
            <h2 class="text-[38px] md:text-[48px] font-bold text-gray-900 leading-[1.1] mb-6"
              style="font-family: 'Playfair Display', serif;">
              First time?<br>
              <span class="text-[#EA580C]">Read these</span><br>
              first.
            </h2>
          </div>

          <!-- Right Accordion -->
          <div class="lg:col-span-7">
            <div
              class="bg-white/95 backdrop-blur-sm rounded-3xl border border-orange-50 shadow-[0_4px_25px_rgba(0,0,0,0.03)] p-2 md:p-3">

              <div class="border-b border-gray-100">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">How
                    does the consultation work?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
              <div class="border-b border-gray-100">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">What
                    can I ask during the consultation?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
              <div class="border-b border-gray-100">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">Is
                    my conversation private?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
              <div class="border-b border-gray-100">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">How
                    do I choose the right mode (call, chat or video)?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
              <div class="border-b border-gray-100">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">What
                    languages are available?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
              <div class="">
                <button
                  class="w-full py-4 px-2 md:px-5 flex items-center justify-between text-left focus:outline-none group"
                  onclick="toggleFaq(this)">
                  <span
                    class="font-bold text-[#334155] text-[14px] md:text-[15px] group-hover:text-[#EA580C] transition-colors">Can
                    I talk to the astrologer anytime?</span>
                  <span
                    class="shrink-0 w-6 h-6 rounded-full border border-orange-200 text-[#EA580C] flex items-center justify-center transition-transform group-hover:bg-orange-50 ml-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                  </span>
                </button>
                <div class="hidden px-2 md:px-5 pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
                  Our astrologers are available 24/7 to help you. Simply select an astrologer, choose your preferred
                  mode of communication (chat, call, or video), and start your session instantly to find answers to your
                  questions.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <script>
        function toggleFaq(btn) {
          var content = btn.nextElementSibling;
          var isHidden = content.classList.contains('hidden');

          // Close all open FAQs
          var allBtns = btn.closest('.lg\\:col-span-7').querySelectorAll('button');
          allBtns.forEach(function (b) {
            b.nextElementSibling.classList.add('hidden');
            b.querySelector('svg path').setAttribute('d', 'M12 4v16m8-8H4');
            b.querySelector('span:nth-child(1)').classList.remove('text-[#EA580C]');
          });

          // Open clicked one if it was previously hidden
          if (isHidden) {
            content.classList.remove('hidden');
            btn.querySelector('svg path').setAttribute('d', 'M20 12H4');
            btn.querySelector('span:nth-child(1)').classList.add('text-[#EA580C]');
          }
        }
      </script>
    </section>

  </main>

  <!-- Footer Section -->
  <div class="app-footer"></div>

  <!-- App Logic -->
  <script type="module" src="/src/main.js"></script>
  <style>
    /* Custom utility for spin-slow animation */
    @keyframes spin-slow {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .animate-spin-slow {
      animation: spin-slow linear infinite;
    }

    @keyframes bounce-slow {

      0%,
      100% {
        transform: translateY(-5%);
      }

      50% {
        transform: translateY(5%);
      }
    }

    .animate-bounce-slow {
      animation: bounce-slow infinite ease-in-out;
    }

    /* Hide scrollbar for horizontal scrolling menus */
    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>

  <!-- Review Carousel Auto-slide Logic -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const track = document.getElementById('review-track');
      const prevBtn = document.getElementById('review-prev');
      const nextBtn = document.getElementById('review-next');

      const slides = Array.from(track.children);
      const totalCards = slides.length;

      // Clone first and last slides for infinite loop
      const firstClone = slides[0].cloneNode(true);
      const lastClone = slides[totalCards - 1].cloneNode(true);

      track.appendChild(firstClone);
      track.insertBefore(lastClone, slides[0]);

      let currentIndex = 1; // start at the first real slide
      let autoSlideInterval;

      // Position to the first real slide instantly
      track.style.transition = 'none';
      track.style.transform = `translateX(-${currentIndex * 100}%)`;

      function updateCarousel(instant = false) {
        if (instant) {
          track.style.transition = 'none';
        } else {
          track.style.transition = 'transform 0.5s ease-in-out';
        }
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
      }

      function nextSlide() {
        if (currentIndex >= totalCards + 1) return;
        currentIndex++;
        updateCarousel();
      }

      function prevSlide() {
        if (currentIndex <= 0) return;
        currentIndex--;
        updateCarousel();
      }

      track.addEventListener('transitionend', () => {
        if (currentIndex === totalCards + 1) {
          // Reached the cloned first slide, instantly jump to real first slide
          currentIndex = 1;
          updateCarousel(true);
        } else if (currentIndex === 0) {
          // Reached the cloned last slide, instantly jump to real last slide
          currentIndex = totalCards;
          updateCarousel(true);
        }
      });

      function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 3500); // 3.5 seconds
      }

      function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
      }

      nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoSlide();
      });

      prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoSlide();
      });

      // Pause on hover
      track.parentElement.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
      track.parentElement.addEventListener('mouseleave', startAutoSlide);

      setTimeout(startAutoSlide, 50);
    });
  </script>
  <script src="/js/component.js"></script>
  <script src="/js/api.js"></script>
  <script src="/js/astrologer-list.js"></script>
</body>

</html>