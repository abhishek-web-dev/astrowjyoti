<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <title>About Us - Astrowjyoti</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFFDF9] text-gray-900 font-sans antialiased overflow-x-hidden">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <main>
    <!-- Hero Section -->
    <section class="relative w-full overflow-hidden flex flex-col pt-10"
      style="min-height: 600px; background-color: #FFFDF9;">

      <!-- Background Image (Right side) -->
      <div class="absolute inset-0 w-full h-full z-0 pointer-events-none flex justify-end">
        <div class="w-full md:w-[65%] h-full relative">
          <img src="/About-banner.png" alt="About Astrowjyoti" class="w-full h-full object-cover object-left"
            onerror="this.src='/Hero-banner.png';" />
          <!-- Gradient overlay to fade the image into the background color -->
          <div class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9] to-transparent w-full md:w-[60%]"></div>
        </div>
      </div>

      <!-- Content Container -->
      <div class="relative z-10 w-[90%] max-w-[1200px] mx-auto flex flex-col justify-center flex-1 pb-16 pt-8">

        <!-- Breadcrumbs -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-2 text-[13px] font-medium text-gray-500">
            <li class="inline-flex items-center">
              <a href="/" class="hover:text-orange-500 transition-colors">Home</a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
                </svg>
                <span class="ml-1 text-gray-800">About Us</span>
              </div>
            </li>
          </ol>
        </nav>

        <!-- Main Content -->
        <div class="w-full md:w-[60%] lg:w-[50%]">
          <!-- Pill Badge -->
          <div
            class="inline-block px-4 py-1.5 mb-6 border-2 rounded-full text-[11px] font-bold uppercase tracking-widest bg-white"
            style="border-color: #F2780C; color: #1E293B;">
            ABOUT ASTROWJYOTI
          </div>

          <!-- Headline -->
          <h1 class="text-[36px] md:text-[48px] lg:text-[54px] font-bold leading-tight mb-6"
            style="font-family: 'Playfair Display', serif; color: #0F172A;">
            Guiding You Towards <br />
            <span style="color: #F97316;">a Brighter Tomorrow</span>
          </h1>

          <!-- Description -->
          <p class="text-[15px] md:text-[16px] text-slate-700 leading-relaxed mb-8 max-w-[95%] font-medium">
            At Astrowjyoti, we believe that ancient wisdom can bring clarity, confidence and positivity to modern life.
            Our mission is to make astrology accessible, authentic and trustworthy for everyone.
          </p>

          <!-- CTA Button -->
          <a href="#"
            class="inline-flex items-center justify-center font-bold py-3.5 px-8 rounded-full transition duration-300 text-[15px] hover:-translate-y-0.5"
            style="background-color: #FACC15; color: #0F172A;">
            Talk to an Astrologer &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Bottom Features Bar -->
    <div
      class="relative z-20 w-[95%] max-w-[1200px] mx-auto -mt-16 mb-16 bg-white rounded-[20px] border border-gray-100 p-6 md:p-8">
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-4 divide-y sm:divide-y-0 sm:divide-x divide-gray-100">

        <!-- Feature 1 -->
        <div class="flex items-center gap-4 pt-4 sm:pt-0 sm:px-4 lg:px-6">
          <div
            class="w-10 h-10 rounded-lg shrink-0 flex items-center justify-center bg-orange-50 border border-orange-100">
            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div>
            <h4 class="text-[14px] font-bold text-slate-800 mb-0.5">Authentic Guidance</h4>
            <p class="text-[12px] text-slate-500">Based on Vedic wisdom</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex items-center gap-4 pt-4 sm:pt-0 sm:px-4 lg:px-6">
          <div
            class="w-10 h-10 rounded-lg shrink-0 flex items-center justify-center bg-orange-50 border border-orange-100">
            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
              </path>
            </svg>
          </div>
          <div>
            <h4 class="text-[14px] font-bold text-slate-800 mb-0.5">Experienced Astrologers</h4>
            <p class="text-[12px] text-slate-500">Verified and trusted experts</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex items-center gap-4 pt-4 sm:pt-0 sm:px-4 lg:px-6">
          <div
            class="w-10 h-10 rounded-lg shrink-0 flex items-center justify-center bg-orange-50 border border-orange-100">
            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4L15 4l-6-2-6 2v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V4l-6 2z"></path>
            </svg>
          </div>
          <div>
            <h4 class="text-[14px] font-bold text-slate-800 mb-0.5">100% Private & Secure</h4>
            <p class="text-[12px] text-slate-500">Your data is safe with us</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="flex items-center gap-4 pt-4 sm:pt-0 sm:px-4 lg:px-6">
          <div
            class="w-10 h-10 rounded-lg shrink-0 flex items-center justify-center bg-orange-50 border border-orange-100">
            <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
              </path>
            </svg>
          </div>
          <div>
            <h4 class="text-[14px] font-bold text-slate-800 mb-0.5">Personalised Solutions</h4>
            <p class="text-[12px] text-slate-500">For love, career, health and more</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Our Story Section -->
    <section class="w-full py-10 md:py-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div class="w-full max-w-[1100px] mx-auto">
        <div class="flex flex-col md:flex-row gap-8 md:gap-10 items-center justify-between">

          <!-- Left: Video Area (~55%) -->
          <div
            class="w-full md:w-[55%] relative rounded-2xl md:rounded-[24px] overflow-hidden shadow-md group cursor-pointer shrink-0"
            onclick="const v = this.querySelector('video'); v.play(); v.controls=true; this.querySelectorAll('.overlay').forEach(e => e.style.display='none');">
            <!-- Video -->
            <video class="w-full aspect-[4/3] md:aspect-[1.4] object-cover" playsinline>
              <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>

            <!-- Dark Subtle Overlay -->
            <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>

            <!-- Center Play Button Overlay -->
            <div class="overlay absolute inset-0 flex items-center justify-center pointer-events-none">
              <div
                class="w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center backdrop-blur-md shadow-lg border border-white/20"
                style="background: rgba(245, 158, 11, 0.8);">
                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </div>
            </div>

            <!-- Bottom-right Label -->
            <div
              class="overlay absolute bottom-4 right-4 md:bottom-5 md:right-5 bg-black/60 backdrop-blur-md rounded-xl p-2.5 md:p-3 flex items-center gap-3 text-white transition-transform duration-300 group-hover:scale-105">
              <div class="w-8 h-8 rounded-full flex items-center justify-center"
                style="background: rgba(245, 158, 11, 0.8);">
                <svg class="w-4 h-4 text-white ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </div>
              <div class="flex flex-col">
                <span class="text-[13px] md:text-[14px] font-bold leading-tight">Watch Our Story</span>
                <span class="text-[11px] md:text-[12px] text-gray-200">(2:00 min)</span>
              </div>
            </div>
          </div>

          <!-- Right: Text Content (~45%) -->
          <div class="w-full md:w-[43%] mt-2 md:mt-0">
            <span class="text-orange-500 font-bold tracking-wider text-[11px] md:text-[13px] uppercase mb-2 block">OUR
              STORY</span>
            <h2 class="text-[28px] md:text-[36px] font-bold text-[#0F172A] mb-4 leading-tight"
              style="font-family: 'Playfair Display', serif;">
              Bringing Ancient Astrology <br class="hidden xl:block" />Wisdom to Modern Lives
            </h2>
            <p class="text-slate-600 mb-4 leading-relaxed text-[14px] md:text-[15px]">
              Astrowjyoti was founded with a simple vision - to help people make better decisions in life through the
              power of Vedic astrology. What started as a small initiative has now grown into a trusted platform
              connecting thousands of users with verified astrologers across India.
            </p>
            <p class="text-slate-600 mb-6 leading-relaxed text-[14px] md:text-[15px]">
              We combine traditional knowledge with modern technology to offer personalised and accurate guidance for
              every aspect of life - love, career, health, finance and more.
            </p>
            <a href="#"
              class="inline-flex items-center justify-center font-bold py-3 px-8 rounded-full transition duration-300 text-[14px]"
              style="background-color: #FACC15; color: #0F172A;">
              Our Journey &rarr;
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- Statistics Bar -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div
        class="w-full max-w-[1100px] mx-auto bg-white rounded-2xl md:rounded-[20px] shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-100 p-6 md:py-8 md:px-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-4">

          <!-- Feature 1 -->
          <div class="flex items-center gap-4 sm:justify-center lg:justify-start">
            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
              <!-- Users Group Icon -->
              <svg class="w-6 h-6 md:w-7 md:h-7 text-[#EA580C]" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="text-[18px] md:text-[20px] font-bold text-[#1E293B] leading-tight">500K+</h4>
              <p class="text-[12px] md:text-[13px] font-medium text-slate-500 mt-0.5">Happy Users</p>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="flex items-center gap-4 sm:justify-center lg:justify-center">
            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
              <!-- Astrologer/Person Icon -->
              <svg class="w-6 h-6 md:w-7 md:h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="text-[18px] md:text-[20px] font-bold text-[#1E293B] leading-tight">100+</h4>
              <p class="text-[12px] md:text-[13px] font-medium text-slate-500 mt-0.5">Verified Astrologers</p>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="flex items-center gap-4 sm:justify-center lg:justify-center">
            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
              <!-- Clipboard Check Icon -->
              <svg class="w-6 h-6 md:w-7 md:h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="text-[18px] md:text-[20px] font-bold text-[#1E293B] leading-tight">1M+</h4>
              <p class="text-[12px] md:text-[13px] font-medium text-slate-500 mt-0.5">Consultations Completed</p>
            </div>
          </div>

          <!-- Feature 4 -->
          <div class="flex items-center gap-4 sm:justify-center lg:justify-end">
            <div class="w-12 h-12 md:w-14 md:h-14 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
              <!-- Star Icon -->
              <svg class="w-6 h-6 md:w-7 md:h-7 text-[#EA580C]" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
              </svg>
            </div>
            <div>
              <h4 class="text-[18px] md:text-[20px] font-bold text-[#1E293B] leading-tight">4.8/5</h4>
              <p class="text-[12px] md:text-[13px] font-medium text-slate-500 mt-0.5">Average Rating</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Our Mission Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div class="w-full max-w-[1100px] mx-auto flex flex-col md:flex-row gap-10 md:gap-16 items-center">

        <!-- Left: Text Content (~50%) -->
        <div class="w-full md:w-[50%]">
          <span class="text-orange-500 font-bold tracking-wider text-[11px] md:text-[13px] uppercase mb-2 block">OUR
            MISSION</span>
          <h2 class="text-[28px] md:text-[36px] font-bold text-[#0F172A] mb-5 leading-tight"
            style="font-family: 'Playfair Display', serif;">
            To Empower Lives with <br class="hidden xl:block" />Trusted Astrological Guidance
          </h2>
          <p class="text-slate-600 mb-8 leading-relaxed text-[14px] md:text-[15px]">
            Our mission is to make astrology simple, reliable and accessible for everyone. We are committed to providing
            authentic guidance that helps people overcome challenges, discover opportunities and live a happier, more
            fulfilling life.
          </p>
          <a href="#"
            class="inline-flex items-center justify-center font-bold py-3 px-8 rounded-full transition duration-300 text-[14px]"
            style="background-color: #FACC15; color: #0F172A;">
            Our Mission &rarr;
          </a>
        </div>

        <!-- Right: Features List (~50%) -->
        <div
          class="w-full md:w-[50%] bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-100 p-6 md:p-8">
          <div class="flex flex-col gap-6">

            <!-- Item 1 -->
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
                <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-0.5">Authentic & Reliable Guidance
                </h4>
                <p class="text-[13px] text-slate-500">Backed by Vedic knowledge and experienced astrologers</p>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
                <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                  </path>
                </svg>
              </div>
              <div>
                <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-0.5">Privacy & Security</h4>
                <p class="text-[13px] text-slate-500">Your personal information is always safe with us</p>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
                <svg class="w-5 h-5 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                  </path>
                </svg>
              </div>
              <div>
                <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-0.5">Accessible to Everyone</h4>
                <p class="text-[13px] text-slate-500">Quality astrological guidance for every individual</p>
              </div>
            </div>

            <!-- Item 4 -->
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full shrink-0 flex items-center justify-center bg-[#FFF7ED]">
                <svg class="w-5 h-5 text-[#EA580C]" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
              </div>
              <div>
                <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-0.5">Positive Impact</h4>
                <p class="text-[13px] text-slate-500">Help people make better decisions and live happier lives</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- Our Values Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div
        class="w-full max-w-[1200px] mx-auto rounded-xl md:rounded-[20px] overflow-hidden relative p-6 md:px-10 md:py-6 bg-cover bg-center shadow-lg"
        style="background-image: url('/our-values.png'); background-color: #231744;">

        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between w-full">

          <!-- Left: Heading -->
          <div class="shrink-0 text-center md:text-left mb-6 md:mb-0 md:pr-12 lg:pr-24">
            <h2 class="text-[24px] md:text-[28px] font-bold text-white mb-1 leading-tight"
              style="font-family: 'Playfair Display', serif;">Our Values</h2>
            <p class="text-xs md:text-[13px] text-gray-200">What drives us every day</p>
          </div>

          <!-- Right: 4 Icons closely packed -->
          <div
            class="flex-1 flex flex-wrap md:flex-nowrap justify-center md:justify-between items-start gap-4 md:gap-2 w-full max-w-[800px]">

            <!-- Value 1: Trust -->
            <div class="flex flex-col items-center text-center w-[45%] md:w-[24%] group">
              <div
                class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mb-3 transition-transform duration-300 group-hover:-translate-y-1">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                </svg>
              </div>
              <h4 class="text-[13px] md:text-[14px] font-bold text-white mb-0.5 tracking-wide">Trust</h4>
              <p class="text-[10px] md:text-[11px] text-gray-300 leading-tight">Honesty in every guidance</p>
            </div>

            <!-- Value 2: Authenticity -->
            <div class="flex flex-col items-center text-center w-[45%] md:w-[24%] group">
              <div
                class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mb-3 transition-transform duration-300 group-hover:-translate-y-1">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                  </path>
                </svg>
              </div>
              <h4 class="text-[13px] md:text-[14px] font-bold text-white mb-0.5 tracking-wide">Authenticity</h4>
              <p class="text-[10px] md:text-[11px] text-gray-300 leading-tight">Rooted in Vedic wisdom</p>
            </div>

            <!-- Value 3: Empathy -->
            <div class="flex flex-col items-center text-center w-[45%] md:w-[24%] group">
              <div
                class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mb-3 transition-transform duration-300 group-hover:-translate-y-1">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                  </path>
                </svg>
              </div>
              <h4 class="text-[13px] md:text-[14px] font-bold text-white mb-0.5 tracking-wide">Empathy</h4>
              <p class="text-[10px] md:text-[11px] text-gray-300 leading-tight">Understanding your journey</p>
            </div>

            <!-- Value 4: Innovation -->
            <div class="flex flex-col items-center text-center w-[45%] md:w-[24%] group">
              <div
                class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center mb-3 transition-transform duration-300 group-hover:-translate-y-1">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
              </div>
              <h4 class="text-[13px] md:text-[14px] font-bold text-white mb-0.5 tracking-wide">Innovation</h4>
              <p class="text-[10px] md:text-[11px] text-gray-300 leading-tight">Blending tradition with technology</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Astrowjyoti Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div class="w-full max-w-[1200px] mx-auto flex flex-col gap-6 md:gap-8">

        <h2 class="text-[28px] md:text-[36px] font-bold text-[#0F172A] leading-tight"
          style="font-family: 'Playfair Display', serif;">
          Why Choose Astrowjyoti?
        </h2>

        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">

          <!-- Left: Features Grid (approx 65%) -->
          <div class="w-full lg:w-[65%] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5">

            <!-- Card 1 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-orange-50">
                <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Verified Astrologers</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">Expert astrologers with years of
                experience</p>
            </div>

            <!-- Card 2 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-pink-50">
                <svg class="w-5 h-5 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Wide Range of Services</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">From consultations to horoscopes and
                remedies</p>
            </div>

            <!-- Card 3 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-green-50">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                  </path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Trusted by Thousands</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">A growing community of happy users
              </p>
            </div>

            <!-- Card 4 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-teal-50">
                <svg class="w-5 h-5 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Easy & Secure Platform</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">100% privacy and secure payments</p>
            </div>

            <!-- Card 5 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-orange-50">
                <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                  </path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Personalised Guidance</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">Solutions tailored to your unique
                needs</p>
            </div>

            <!-- Card 6 -->
            <div
              class="bg-white rounded-2xl p-5 border border-gray-100 shadow-[0_2px_15px_rgba(0,0,0,0.03)] hover:shadow-[0_4px_20px_rgba(0,0,0,0.06)] transition-shadow">
              <div class="w-10 h-10 rounded-full flex items-center justify-center mb-4 bg-blue-50">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
                </svg>
              </div>
              <h4 class="text-[14px] md:text-[15px] font-bold text-[#1E293B] mb-1">Support at Every Step</h4>
              <p class="text-[12px] md:text-[13px] text-slate-500 leading-relaxed">Our team is always here to help you
              </p>
            </div>

          </div>

          <!-- Right: Image (~35%) -->
          <div class="w-full lg:w-[35%] min-h-[300px] lg:h-auto relative rounded-2xl overflow-hidden shadow-md group">
            <img src="/your-star-our-guidance.png" alt="Astrology Guidance"
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div
              class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/10 to-transparent p-6 md:p-8 flex flex-col justify-start">
              <h3 class="text-white text-[22px] md:text-[26px] font-bold leading-snug tracking-wide"
                style="font-family: 'Playfair Display', serif;">
                Your Journey<br />Your Stars<br />Our Guidance
              </h3>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Message from Our Founder Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div class="w-full max-w-[1200px] mx-auto rounded-xl md:rounded-[24px] overflow-hidden relative shadow-[0_4px_25px_rgba(0,0,0,0.06)]">
        
        <!-- Background Image (reduced height by 30%, maintaining proportions via object-cover) -->
        <img src="/message-from-our-founder.png" alt="Founder Background" class="w-full h-[320px] md:h-[280px] lg:h-[300px] object-cover object-center md:object-[center_30%]">
        
        <!-- Foolproof CSS to guarantee Left Padding works regardless of Tailwind JIT state -->
        <style>
          .founder-text-wrapper { padding-left: 1.5rem; padding-right: 1.5rem; }
          @media (min-width: 768px) { .founder-text-wrapper { padding-left: 42%; padding-right: 2rem; } }
          @media (min-width: 1024px) { .founder-text-wrapper { padding-left: 38%; padding-right: 10%; } }
        </style>
        
        <!-- Content Overlay -->
        <div class="absolute inset-0 w-full h-full flex items-center founder-text-wrapper">
          
          <!-- Text Container (Centered in open space via guaranteed padding) -->
          <div class="w-full flex flex-col items-start gap-3 z-10 bg-white/90 md:bg-transparent p-6 md:p-0 rounded-2xl md:rounded-none backdrop-blur-md md:backdrop-blur-none">
            
            <!-- Quote Icon -->
            <div class="bg-[#FF6B2C] text-white w-8 h-8 md:w-9 md:h-9 rounded-lg flex items-center justify-center shadow-md">
              <svg class="w-4 h-4 md:w-4.5 md:h-4.5" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
            </div>
            
            <h2 class="text-[22px] md:text-[28px] lg:text-[32px] font-bold text-[#1E293B] leading-tight" style="font-family: 'Playfair Display', serif;">
              Message from Our Founder
            </h2>
            
            <p class="text-[14px] md:text-[15px] lg:text-[16px] text-[#475569] leading-[1.7] font-medium">
              "Astrowjyoti was created with the vision of making authentic astrology accessible to everyone. Our goal is to help people find clarity, peace and positivity in their lives through ancient Vedic wisdom, combined with modern technology."
            </p>
            
            <div class="mt-2">
              <h4 class="font-bold text-[#1E293B] text-[15px] md:text-[16px] tracking-wide">— Rahul Sharma</h4>
              <p class="text-[13px] md:text-[14px] text-slate-500 font-medium">Founder, Astrowjyoti</p>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Our Expert Astrologers Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]" style="padding-left: 5%; padding-right: 5%;">
      <div class="w-full max-w-[1200px] mx-auto flex flex-col gap-6 md:gap-8">
        
        <!-- Header Row -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
          <div>
            <h2 class="text-[28px] md:text-[36px] font-bold text-[#0F172A] leading-tight" style="font-family: 'Playfair Display', serif;">
              Our Expert Astrologers
            </h2>
            <p class="text-[15px] text-slate-500 mt-1">Learn from the best in the field of Vedic astrology</p>
          </div>
          <button class="flex items-center gap-2 text-[#FF6B2C] border border-[#FF6B2C] rounded-full px-6 py-2.5 font-semibold text-[14px] hover:bg-[#FF6B2C] hover:text-white transition-colors">
            View All Astrologers
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </button>
        </div>

        <!-- Guaranteed Responsive Grid CSS (Bypasses Tailwind JIT issues causing 3+2 wrap) -->
        <style>
          .astro-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 0.75rem; }
          @media (min-width: 768px) { .astro-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 1rem; } }
          @media (min-width: 1024px) { .astro-grid { grid-template-columns: repeat(5, minmax(0, 1fr)); } }
        </style>
        
        <!-- Astrologers Grid -->
        <div class="astro-grid">
          
          <!-- Card 1 -->
          <div class="bg-white rounded-[16px] p-3 border border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] flex flex-col items-center text-center hover:shadow-[0_4px_16px_rgba(0,0,0,0.06)] transition-shadow group">
            <div class="w-[64px] h-[64px] rounded-full overflow-hidden mb-2.5 bg-orange-50 relative group-hover:scale-105 transition-transform duration-300">
              <img src="/lady.png" alt="Acharya Neelima" class="w-full h-full object-cover">
            </div>
            <h4 class="text-[13px] md:text-[14px] font-bold text-[#1E293B] mb-0.5 whitespace-nowrap overflow-hidden text-ellipsis w-full">Acharya Neelima</h4>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-0.5">Vedic Astrology</p>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-2">12+ Years</p>
            <div class="flex items-center gap-1 mb-3 text-[12px] font-semibold text-slate-700">
              <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              4.8 <span class="text-slate-400 font-normal ml-0.5 text-[11px]">(2.1K)</span>
            </div>
            <button class="w-full py-1.5 rounded-full border border-[#FF6B2C] text-[#FF6B2C] text-[12px] font-semibold hover:bg-[#FF6B2C] hover:text-white transition-colors">
              View Profile
            </button>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-[16px] p-3 border border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] flex flex-col items-center text-center hover:shadow-[0_4px_16px_rgba(0,0,0,0.06)] transition-shadow group">
            <div class="w-[64px] h-[64px] rounded-full overflow-hidden mb-2.5 bg-orange-50 relative group-hover:scale-105 transition-transform duration-300">
              <img src="/pandit.png" alt="Pandit Vikram Joshi" class="w-full h-full object-cover object-top">
            </div>
            <h4 class="text-[13px] md:text-[14px] font-bold text-[#1E293B] mb-0.5 whitespace-nowrap overflow-hidden text-ellipsis w-full">Pandit Vikram Joshi</h4>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-0.5">Kundli & Match Making</p>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-2">15+ Years</p>
            <div class="flex items-center gap-1 mb-3 text-[12px] font-semibold text-slate-700">
              <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              4.7 <span class="text-slate-400 font-normal ml-0.5 text-[11px]">(1.6K)</span>
            </div>
            <button class="w-full py-1.5 rounded-full border border-[#FF6B2C] text-[#FF6B2C] text-[12px] font-semibold hover:bg-[#FF6B2C] hover:text-white transition-colors">
              View Profile
            </button>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-[16px] p-3 border border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] flex flex-col items-center text-center hover:shadow-[0_4px_16px_rgba(0,0,0,0.06)] transition-shadow group">
            <div class="w-[64px] h-[64px] rounded-full overflow-hidden mb-2.5 bg-orange-50 relative group-hover:scale-105 transition-transform duration-300">
              <img src="/lady.png" alt="Dr. Meera Joshi" class="w-full h-full object-cover object-top">
            </div>
            <h4 class="text-[13px] md:text-[14px] font-bold text-[#1E293B] mb-0.5 whitespace-nowrap overflow-hidden text-ellipsis w-full">Dr. Meera Joshi</h4>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-0.5">Tarot & Numerology</p>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-2">10+ Years</p>
            <div class="flex items-center gap-1 mb-3 text-[12px] font-semibold text-slate-700">
              <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              4.8 <span class="text-slate-400 font-normal ml-0.5 text-[11px]">(2.2K)</span>
            </div>
            <button class="w-full py-1.5 rounded-full border border-[#FF6B2C] text-[#FF6B2C] text-[12px] font-semibold hover:bg-[#FF6B2C] hover:text-white transition-colors">
              View Profile
            </button>
          </div>

          <!-- Card 4 -->
          <div class="bg-white rounded-[16px] p-3 border border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] flex flex-col items-center text-center hover:shadow-[0_4px_16px_rgba(0,0,0,0.06)] transition-shadow group">
            <div class="w-[64px] h-[64px] rounded-full overflow-hidden mb-2.5 bg-orange-50 relative group-hover:scale-105 transition-transform duration-300">
              <img src="/lady.png" alt="Sadhvi Priya Nand" class="w-full h-full object-cover object-top">
            </div>
            <h4 class="text-[13px] md:text-[14px] font-bold text-[#1E293B] mb-0.5 whitespace-nowrap overflow-hidden text-ellipsis w-full">Sadhvi Priya Nand</h4>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-0.5">Relationship Expert</p>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-2">8+ Years</p>
            <div class="flex items-center gap-1 mb-3 text-[12px] font-semibold text-slate-700">
              <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              4.7 <span class="text-slate-400 font-normal ml-0.5 text-[11px]">(2.4K)</span>
            </div>
            <button class="w-full py-1.5 rounded-full border border-[#FF6B2C] text-[#FF6B2C] text-[12px] font-semibold hover:bg-[#FF6B2C] hover:text-white transition-colors">
              View Profile
            </button>
          </div>

          <!-- Card 5 -->
          <div class="bg-white rounded-[16px] p-3 border border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] flex flex-col items-center text-center hover:shadow-[0_4px_16px_rgba(0,0,0,0.06)] transition-shadow group">
            <div class="w-[64px] h-[64px] rounded-full overflow-hidden mb-2.5 bg-orange-50 relative group-hover:scale-105 transition-transform duration-300">
              <img src="/acharya.png" alt="Astro Kunal Verma" class="w-full h-full object-cover">
            </div>
            <h4 class="text-[13px] md:text-[14px] font-bold text-[#1E293B] mb-0.5 whitespace-nowrap overflow-hidden text-ellipsis w-full">Astro Kunal Verma</h4>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-0.5">Career & Finance</p>
            <p class="text-[11px] md:text-[12px] text-slate-400 mb-2">9+ Years</p>
            <div class="flex items-center gap-1 mb-3 text-[12px] font-semibold text-slate-700">
              <svg class="w-3.5 h-3.5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              4.6 <span class="text-slate-400 font-normal ml-0.5 text-[11px]">(1.5K)</span>
            </div>
            <button class="w-full py-1.5 rounded-full border border-[#FF6B2C] text-[#FF6B2C] text-[12px] font-semibold hover:bg-[#FF6B2C] hover:text-white transition-colors">
              View Profile
            </button>
          </div>

        </div>
      </div>
    </section>
    <!-- Frequently Asked Questions Section -->
    <section class="py-12 md:py-24 w-full bg-cover bg-center bg-no-repeat relative z-20"
      style="background-image: url('/faq-banner.png');">
      <div class="w-full px-4 lg:px-[5%] flex flex-col justify-center min-h-[500px]">
        <div class="w-full md:w-[70%] lg:w-[60%] xl:w-[55%] max-w-3xl">
          <h2
            class="text-[28px] md:text-4xl lg:text-[42px] font-serif font-bold text-[#111] mb-6 md:mb-8 leading-tight drop-shadow-sm tracking-tight">
            Frequently Asked Questions
          </h2>

          <!-- Accordion List -->
          <div class="space-y-3" id="faq-accordion">
            <!-- FAQ 1 -->
            <details name="faq"
              class="group bg-white/95 backdrop-blur-sm rounded-[14px] shadow-sm border border-[#F2780C]/10 overflow-hidden transition-all duration-300 open:shadow-md"
              open>
              <summary
                class="flex justify-between items-center font-semibold cursor-pointer list-none p-4 md:p-5 text-gray-800 text-[13px] md:text-[15px] hover:bg-orange-50/50 transition-colors [&::-webkit-details-marker]:hidden">
                What is Kundli?
                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                  <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="20">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </summary>
              <div class="text-gray-600 text-xs md:text-sm px-4 md:px-5 pb-4 md:pb-5 leading-relaxed">
                A Kundli is an astrological chart created based on your exact date, time, and place of birth. It maps
                the positions of planets and constellations to provide insights into your personality, career,
                relationships, and future events.
              </div>
            </details>

            <!-- FAQ 2 -->
            <details name="faq"
              class="group bg-white/95 backdrop-blur-sm rounded-[14px] shadow-sm border border-[#F2780C]/10 overflow-hidden transition-all duration-300 open:shadow-md">
              <summary
                class="flex justify-between items-center font-semibold cursor-pointer list-none p-4 md:p-5 text-gray-800 text-[13px] md:text-[15px] hover:bg-orange-50/50 transition-colors [&::-webkit-details-marker]:hidden">
                How to choose the right astrologer?
                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                  <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="20">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </summary>
              <div class="text-gray-600 text-xs md:text-sm px-4 md:px-5 pb-4 md:pb-5 leading-relaxed">
                You can browse through our list of verified astrologers, read their profiles, expertise, languages
                spoken, and check reviews from other users. Pick one whose expertise aligns with your specific life
                questions.
              </div>
            </details>

            <!-- FAQ 3 -->
            <details name="faq"
              class="group bg-white/95 backdrop-blur-sm rounded-[14px] shadow-sm border border-[#F2780C]/10 overflow-hidden transition-all duration-300 open:shadow-md">
              <summary
                class="flex justify-between items-center font-semibold cursor-pointer list-none p-4 md:p-5 text-gray-800 text-[13px] md:text-[15px] hover:bg-orange-50/50 transition-colors [&::-webkit-details-marker]:hidden">
                Can I get a free consultation?
                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                  <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="20">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </summary>
              <div class="text-gray-600 text-xs md:text-sm px-4 md:px-5 pb-4 md:pb-5 leading-relaxed">
                Yes! We often provide the first consultation free or at a highly discounted rate for new users. Check
                out the current offers on our services page to start your journey.
              </div>
            </details>

            <!-- FAQ 4 -->
            <details name="faq"
              class="group bg-white/95 backdrop-blur-sm rounded-[14px] shadow-sm border border-[#F2780C]/10 overflow-hidden transition-all duration-300 open:shadow-md">
              <summary
                class="flex justify-between items-center font-semibold cursor-pointer list-none p-4 md:p-5 text-gray-800 text-[13px] md:text-[15px] hover:bg-orange-50/50 transition-colors [&::-webkit-details-marker]:hidden">
                What services are available on Astrowjyoti?
                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                  <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="20">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </summary>
              <div class="text-gray-600 text-xs md:text-sm px-4 md:px-5 pb-4 md:pb-5 leading-relaxed">
                We offer a wide range of services including Tarot Card Reading, Vedic Astrology, Vastu Shastra,
                Numerology, Palmistry, and specialized pooja consultations.
              </div>
            </details>

            <!-- FAQ 5 -->
            <details name="faq"
              class="group bg-white/95 backdrop-blur-sm rounded-[14px] shadow-sm border border-[#F2780C]/10 overflow-hidden transition-all duration-300 open:shadow-md">
              <summary
                class="flex justify-between items-center font-semibold cursor-pointer list-none p-4 md:p-5 text-gray-800 text-[13px] md:text-[15px] hover:bg-orange-50/50 transition-colors [&::-webkit-details-marker]:hidden">
                Is my information safe and private?
                <span class="transition-transform duration-300 group-open:rotate-180 text-gray-500">
                  <svg fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" width="20">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </summary>
              <div class="text-gray-600 text-xs md:text-sm px-4 md:px-5 pb-4 md:pb-5 leading-relaxed">
                Absolutely. 100% privacy is our priority. All your personal details and conversations with our
                astrologers remain strictly confidential and end-to-end encrypted.
              </div>
            </details>
          </div>

        </div>
      </div>

      <!-- Script for cross-browser single-open accordion behavior -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const detailsElements = document.querySelectorAll('#faq-accordion details');
          detailsElements.forEach((targetDetail) => {
            targetDetail.addEventListener('click', () => {
              detailsElements.forEach((detail) => {
                if (detail !== targetDetail) {
                  detail.removeAttribute('open');
                }
              });
            });
          });
        });
      </script>
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