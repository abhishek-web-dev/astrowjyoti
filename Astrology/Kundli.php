<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <title>Free Kundli - Astrojyoti</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
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
        <img src="/Kundali-banner.png" alt="Free Kundli Background"
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
                  <a href="#" class="text-[#F2780C] hover:text-orange-600 transition-colors">Astrology</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <span class="mx-2 text-gray-400 font-light">&gt;</span>
                  <span class="text-gray-900 font-bold">Kundli</span>
                </div>
              </li>
            </ol>
          </nav>

          <!-- Heading -->
          <h1 class="font-bold text-[#111] mb-5 md:mb-6"
            style="font-family: 'Playfair Display', serif; font-size: clamp(40px, 5vw, 64px); line-height: 1.1; letter-spacing: -0.01em;">
            Free <span class="text-[#F2780C]">Kundli</span>
          </h1>

          <!-- Subheading -->
          <p class="text-gray-800 font-medium mb-8 md:mb-10 max-w-[90%] md:max-w-2xl"
            style="font-size: clamp(15px, 1.5vw, 18px); line-height: 1.6;">
            Generate your free online Janam Kundli and explore in-depth astrological insights. Discover planetary positions, doshas, and predictions tailored just for you based on Vedic Astrology.
          </p>

          <!-- CTA Button -->
          <div class="mt-4">
            <button
              class="bg-[#EA580C] text-white font-bold py-3.5 px-6 rounded-full text-[14px] flex items-center justify-center gap-2 hover:bg-orange-600 transition shadow-lg shadow-orange-500/20 border border-transparent">
              Create Your Kundli
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3">
                </path>
              </svg>
            </button>
          </div>

        </div>
      </div>
    </section>

    <!-- Kundli Navigation Tabs -->
    <section class="relative z-20 w-full -mt-10 mb-16">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <div class="bg-white rounded-[20px] shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-gray-100 flex items-center justify-between p-2 overflow-x-auto hide-scrollbar">
          
          <!-- Tab: Birth Kundli -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <!-- Calendar-like icon -->
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Birth Kundli</span>
          </a>

          <!-- Inactive Tab: Matching -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Matching</span>
          </a>

          <!-- Inactive Tab: Career -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Career</span>
          </a>

          <!-- Inactive Tab: Love -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Love</span>
          </a>

          <!-- Inactive Tab: Finance -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Finance</span>
          </a>

          <!-- Inactive Tab: Health -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Health</span>
          </a>

          <!-- Inactive Tab: Remedies -->
          <a href="#" class="flex flex-col items-center justify-center gap-2 min-w-[120px] py-4 px-6 rounded-[14px] hover:bg-orange-50/50 transition group">
            <svg class="w-7 h-7 text-[#EA580C]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
            </svg>
            <span class="text-gray-600 font-bold text-[13px] group-hover:text-gray-900">Remedies</span>
          </a>

        </div>
      </div>
    </section>

    <!-- Custom scrollbar styles for the tabs if needed on mobile -->
    <style>
      .hide-scrollbar::-webkit-scrollbar {
        display: none;
      }
      .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>

    <!-- Kundli Main Content Section -->
    <section class="w-full py-10 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
          
          <!-- Column 1: Form -->
          <div class="bg-white rounded-[24px] p-6 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col h-full">
            <h3 class="font-bold text-gray-900 text-[24px] mb-1" style="font-family: 'Playfair Display', serif;">Enter Your Birth Details</h3>
            <p class="text-gray-500 text-[13px] mb-6">Fill in your details to generate an accurate Kundli.</p>
            
            <form class="flex flex-col gap-5 flex-1">
              <div>
                <label class="block text-[13px] font-bold text-gray-900 mb-2">Full Name</label>
                <input type="text" placeholder="Enter your full name" class="w-full border border-gray-200 rounded-[12px] px-4 py-3 text-[14px] outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition placeholder-gray-400" />
              </div>
              
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-[13px] font-bold text-gray-900 mb-2">Date of Birth</label>
                  <div class="relative">
                    <input type="text" placeholder="Select date" class="w-full border border-gray-200 rounded-[12px] px-4 py-3 text-[14px] outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition placeholder-gray-400" />
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                </div>
                <div>
                  <label class="block text-[13px] font-bold text-gray-900 mb-2">Time of Birth</label>
                  <div class="relative">
                    <input type="text" placeholder="-- : --" class="w-full border border-gray-200 rounded-[12px] px-4 py-3 text-[14px] outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition placeholder-gray-400" />
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                </div>
              </div>
              
              <div>
                <label class="block text-[13px] font-bold text-gray-900 mb-2">Place of Birth</label>
                <div class="relative">
                  <input type="text" placeholder="Enter city name" class="w-full border border-gray-200 rounded-[12px] px-4 py-3 text-[14px] outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition placeholder-gray-400" />
                  <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
              </div>
              
              <button type="button" class="w-full bg-[#EA580C] text-white font-bold py-3.5 px-6 rounded-[12px] text-[15px] mt-6 hover:bg-orange-600 transition flex items-center justify-center gap-2">
                Generate Kundli
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </button>
            </form>
          </div>

          <!-- Column 2: Sample Chart -->
          <div class="flex flex-col h-full px-2 lg:px-6">
            <h3 class="font-bold text-gray-900 text-[22px] mb-1" style="font-family: 'Playfair Display', serif;">Sample Kundli Chart</h3>
            <p class="text-gray-500 text-[13px] mb-6">See a sample of how your kundli will look like.</p>
            
            <div class="flex items-center gap-3 mb-8">
              <button class="bg-[#EA580C] text-white text-[12px] font-semibold py-2 px-5 rounded-full shadow-md shadow-orange-500/20">North Indian Style</button>
              <button class="bg-white border border-gray-100 shadow-sm text-gray-600 text-[12px] font-semibold py-2 px-5 rounded-full hover:bg-gray-50 transition">South Indian Style</button>
            </div>
            
            <!-- Kundli Image -->
            <div class="w-full max-w-[320px] mx-auto flex items-center justify-center p-2">
              <img src="/kundali.png" alt="Sample Kundli Chart" class="w-full h-auto object-contain drop-shadow-sm mix-blend-multiply" />
            </div>
          </div>

          <!-- Column 3: Why Get Your Kundli? -->
          <div class="flex flex-col h-full">
            <h3 class="font-bold text-gray-900 text-[22px] mb-6 flex items-center" style="font-family: 'Playfair Display', serif;">
              <span class="text-orange-400 mr-2 text-[26px] leading-none">-</span> Why Get Your Kundli?
            </h3>
            
            <div class="bg-white rounded-[24px] p-6 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col gap-6 flex-1">
              
              <!-- Item 1 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Know Your Personality</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">Understand your natural traits and behavior.</p>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Career Guidance</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">Find the right career path based on your strengths.</p>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-pink-50 text-pink-500 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Love & Relationships</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">Get insights about your relationships and marriage.</p>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-yellow-50 text-yellow-600 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Financial Growth</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">See your wealth and financial opportunities.</p>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-teal-50 text-teal-500 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Health Insights</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">Understand potential health trends and remedies.</p>
                </div>
              </div>

              <!-- Item 6 -->
              <div class="flex gap-4">
                <div class="w-[50px] h-[50px] rounded-full bg-orange-100 text-orange-500 flex items-center justify-center shrink-0">
                  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 text-[14px] mb-0.5">Life Predictions</h4>
                  <p class="text-[13px] text-gray-500 leading-snug">Get overall guidance for a better future.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- What You Will Get Section -->
    <section class="w-full pb-16 pt-6 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <!-- Header -->
        <div class="flex flex-col items-center justify-center text-center mb-10">
          <div class="flex items-center justify-center gap-4 w-full max-w-[800px]">
            <div class="flex-1 flex items-center hidden md:flex">
              <div class="h-px bg-orange-200 flex-1"></div>
            </div>
            <h2 class="text-[26px] md:text-[32px] font-bold text-gray-900 shrink-0" style="font-family: 'Playfair Display', serif;">
              What You Will Get in Your Kundli
            </h2>
            <div class="flex-1 flex items-center hidden md:flex">
              <div class="h-px bg-orange-200 flex-1"></div>
              <div class="w-2 h-2 rotate-45 bg-orange-500 mx-2"></div>
              <div class="h-px bg-orange-200 flex-1"></div>
            </div>
          </div>
        </div>

        <!-- Grid of Features -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
          
          <!-- Card 1 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-red-50 text-red-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm0 6h16M10 4v16"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Lagna Chart</h4>
              <p class="text-[12px] text-gray-400">Your birth chart with all 12 houses</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"></circle><path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm0 18a8 8 0 118-8 8.009 8.009 0 01-8 8z" opacity="0.3"></path><path d="M4.929 4.929l14.142 14.142" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Graha Positions</h4>
              <p class="text-[12px] text-gray-400">Position of all planets in your chart</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-red-50 text-red-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Dasha Analysis</h4>
              <p class="text-[12px] text-gray-400">Detailed planetary periods</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-pink-50 text-pink-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Ashtakavarga</h4>
              <p class="text-[12px] text-gray-400">Strength of planets</p>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-indigo-50 text-indigo-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Moon Chart</h4>
              <p class="text-[12px] text-gray-400">Your mental and emotional side</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-pink-50 text-pink-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="6"></circle><path d="M3.75 12a8.25 8.25 0 0115.01-4.74l1.37-1.37A10.22 10.22 0 0012 1.75c-5.66 0-10.25 4.59-10.25 10.25a10.22 10.22 0 004.12 8.12l1.37-1.37A8.25 8.25 0 013.75 12z"></path><path d="M20.25 12a8.25 8.25 0 01-15.01 4.74l-1.37 1.37A10.22 10.22 0 0012 22.25c5.66 0 10.25-4.59 10.25-10.25a10.22 10.22 0 00-4.12-8.12l-1.37 1.37A8.25 8.25 0 0120.25 12z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Planetary Insights</h4>
              <p class="text-[12px] text-gray-400">Effects of planets on your life</p>
            </div>
          </div>

          <!-- Card 7 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-green-50 text-green-500 flex items-center justify-center shrink-0">
               <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM5.354 14.646a.5.5 0 11-.708-.708 6 6 0 018.485-8.485.5.5 0 11-.708.708 5 5 0 00-7.07 7.07z" clip-rule="evenodd"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Remedies</h4>
              <p class="text-[12px] text-gray-400">Personalised Vedic remedies</p>
            </div>
          </div>

          <!-- Card 8 -->
          <div class="bg-white rounded-[16px] p-5 shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition">
            <div class="w-12 h-12 rounded-[12px] bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Detailed Report</h4>
              <p class="text-[12px] text-gray-400">Complete downloadable PDF</p>
            </div>
          </div>

        </div>

        <!-- Call to Action Banner -->
        <div class="relative w-full rounded-[24px] overflow-hidden flex items-center p-8 md:p-12 shadow-[0_4px_24px_rgba(0,0,0,0.06)] min-h-[200px]">
          <!-- Background Image -->
          <img src="/Get-detail-kundali-report.png" alt="Detailed Kundli Report" class="absolute inset-0 w-full h-full object-cover z-0" />
          
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-r from-[#1E1236] via-[#1E1236]/90 to-transparent z-10 w-full md:w-[70%]"></div>
          
          <!-- Content -->
          <div class="relative z-20 max-w-xl">
            <h2 class="text-[28px] md:text-[34px] font-bold text-white mb-3 leading-tight" style="font-family: 'Playfair Display', serif;">
              Get a Detailed Kundli Report
            </h2>
            <p class="text-white opacity-90 text-[14px] md:text-[15px] mb-12 leading-relaxed">
              Receive a comprehensive analysis of your birth chart with detailed predictions and remedies from expert astrologers.
            </p>
            <button class="bg-yellow-400 hover:bg-yellow-300 text-yellow-900 font-bold py-3.5 px-8 rounded-full text-[14px] transition inline-flex items-center gap-2">
              Generate My Kundli
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- Types of Kundli We Offer -->
    <section class="w-full py-12 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <h2 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-8" style="font-family: 'Playfair Display', serif;">
          Types of Kundli We Offer
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          
          <!-- Card 1 (Birth Kundli) -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col items-start gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4 w-full">
              <div class="w-12 h-12 rounded-[12px] bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm0 6h16M10 4v16"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Birth Kundli</h4>
                <p class="text-[12px] text-gray-400">Complete life analysis</p>
              </div>
            </div>
            <button class="w-full mt-2 border border-orange-200 text-orange-500 font-bold py-2 rounded-full text-[13px] hover:bg-orange-50 transition flex justify-center items-center gap-1">
              Generate Now <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
          </div>

          <!-- Card 2 (Kundli Matching) -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col items-start gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4 w-full">
              <div class="w-12 h-12 rounded-[12px] bg-pink-50 text-pink-500 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Kundli Matching</h4>
                <p class="text-[12px] text-gray-400">Check compatibility</p>
              </div>
            </div>
            <button class="w-full mt-2 border border-orange-200 text-orange-500 font-bold py-2 rounded-full text-[13px] hover:bg-orange-50 transition flex justify-center items-center gap-1">
              Check Now <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
          </div>

          <!-- Card 3 (Career Kundli) -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col items-start gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4 w-full">
              <div class="w-12 h-12 rounded-[12px] bg-orange-50 text-orange-500 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Career Kundli</h4>
                <p class="text-[12px] text-gray-400">Career and profession insights</p>
              </div>
            </div>
            <button class="w-full mt-2 border border-orange-200 text-orange-500 font-bold py-2 rounded-full text-[13px] hover:bg-orange-50 transition flex justify-center items-center gap-1">
              Generate Now <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
          </div>

          <!-- Card 4 (Health Kundli) -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col items-start gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4 w-full">
              <div class="w-12 h-12 rounded-[12px] bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[15px] mb-0.5">Health Kundli</h4>
                <p class="text-[12px] text-gray-400">Health trends and remedies</p>
              </div>
            </div>
            <button class="w-full mt-2 border border-orange-200 text-orange-500 font-bold py-2 rounded-full text-[13px] hover:bg-orange-50 transition flex justify-center items-center gap-1">
              Generate Now <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
          </div>

        </div>
      </div>
    </section>

    <!-- How to Generate Your Kundli -->
    <section class="w-full pb-10 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <h2 class="text-[24px] md:text-[28px] font-bold text-gray-900 mb-8" style="font-family: 'Playfair Display', serif;">
          How to Generate Your Kundli?
        </h2>
        
        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
          
          <!-- Step 1 -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex items-start gap-4 flex-1">
            <div class="w-9 h-9 rounded-full bg-[#EA580C] text-white font-bold flex items-center justify-center shrink-0 shadow-md">1</div>
            <div>
              <h4 class="font-bold text-gray-900 text-[14px] mb-1">Enter Birth Details</h4>
              <p class="text-[12px] text-gray-500 leading-snug">Provide your name, date, time and place of birth.</p>
            </div>
          </div>
          
          <div class="hidden md:flex text-orange-400 items-center justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
          </div>

          <!-- Step 2 -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex items-start gap-4 flex-1">
            <div class="w-9 h-9 rounded-full bg-[#EA580C] text-white font-bold flex items-center justify-center shrink-0 shadow-md">2</div>
            <div>
              <h4 class="font-bold text-gray-900 text-[14px] mb-1">Our System Analyses</h4>
              <p class="text-[12px] text-gray-500 leading-snug">We calculate your kundli using Vedic astrology.</p>
            </div>
          </div>

          <div class="hidden md:flex text-orange-400 items-center justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
          </div>

          <!-- Step 3 -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex items-start gap-4 flex-1">
            <div class="w-9 h-9 rounded-full bg-[#EA580C] text-white font-bold flex items-center justify-center shrink-0 shadow-md">3</div>
            <div>
              <h4 class="font-bold text-gray-900 text-[14px] mb-1">Get Detailed Report</h4>
              <p class="text-[12px] text-gray-500 leading-snug">View your kundli with insights and remedies.</p>
            </div>
          </div>

          <div class="hidden md:flex text-orange-400 items-center justify-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
          </div>

          <!-- Step 4 -->
          <div class="bg-white rounded-[16px] p-5 shadow-[0_2px_15px_rgba(0,0,0,0.02)] border border-gray-100 flex items-start gap-4 flex-1">
            <div class="w-9 h-9 rounded-full bg-[#EA580C] text-white font-bold flex items-center justify-center shrink-0 shadow-md">4</div>
            <div>
              <h4 class="font-bold text-gray-900 text-[14px] mb-1">Consult an Astrologer</h4>
              <p class="text-[12px] text-gray-500 leading-snug">For personalised guidance.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- You May Also Like Section -->
    <section class="w-full pb-16 pt-6 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-[26px] md:text-[30px] font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">
            You May Also Like
          </h2>
          <a href="#" class="border border-orange-200 text-orange-500 font-bold py-2 px-6 rounded-full text-[13px] md:text-[14px] hover:bg-orange-50 transition flex items-center gap-2">
            View All
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Card 1 -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col transition hover:shadow-md cursor-pointer">
            <div class="h-48 w-full relative overflow-hidden bg-gray-100 shrink-0">
              <img src="/article1.png" alt="Understanding the 12 Houses" class="w-full h-full object-cover transition duration-300 hover:scale-105" onerror="this.src='/Get-detail-kundali-report.png'"/>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h3 class="font-bold text-gray-900 text-base mb-4 leading-snug flex-1">
                Understanding the 12 Houses in Your Kundli
              </h3>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <img src="/lady.png" alt="Astro Team" class="w-6 h-6 rounded-full object-cover" onerror="this.src='/acharya.png'"/>
                  <span class="text-xs text-gray-500 font-medium">Astro Team | 20 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-yellow-400 flex items-center justify-center text-gray-900 shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col transition hover:shadow-md cursor-pointer">
            <div class="h-48 w-full relative overflow-hidden bg-gray-100 shrink-0">
              <img src="/article2.png" alt="Effects of Planets" class="w-full h-full object-cover transition duration-300 hover:scale-105" onerror="this.src='/Get-detail-kundali-report.png'"/>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h3 class="font-bold text-gray-900 text-base mb-4 leading-snug flex-1">
                Effects of Planets in Your Birth Chart
              </h3>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <img src="/lady.png" alt="Astro Team" class="w-6 h-6 rounded-full object-cover" onerror="this.src='/acharya.png'"/>
                  <span class="text-xs text-gray-500 font-medium">Astro Team | 20 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-yellow-400 flex items-center justify-center text-gray-900 shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col transition hover:shadow-md cursor-pointer">
            <div class="h-48 w-full relative overflow-hidden bg-gray-100 shrink-0">
              <img src="/article3.png" alt="Kundli Matching" class="w-full h-full object-cover transition duration-300 hover:scale-105" onerror="this.src='/Get-detail-kundali-report.png'"/>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h3 class="font-bold text-gray-900 text-base mb-4 leading-snug flex-1">
                Kundli Matching: Is Your Partner Right for You?
              </h3>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <img src="/lady.png" alt="Astro Team" class="w-6 h-6 rounded-full object-cover" onerror="this.src='/acharya.png'"/>
                  <span class="text-xs text-gray-500 font-medium">Astro Team | 30 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-yellow-400 flex items-center justify-center text-gray-900 shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col transition hover:shadow-md cursor-pointer">
            <div class="h-48 w-full relative overflow-hidden bg-gray-100 shrink-0">
              <img src="/ChatGPT Image Sep 27, 2026, 02_27_30 AM.png" alt="Simple Remedies" class="w-full h-full object-cover transition duration-300 hover:scale-105" onerror="this.src='/Get-detail-kundali-report.png'"/>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h3 class="font-bold text-gray-900 text-base mb-4 leading-snug flex-1">
                Simple Remedies to Strengthen Your Kundli
              </h3>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <img src="/lady.png" alt="Astro Team" class="w-6 h-6 rounded-full object-cover" onerror="this.src='/acharya.png'"/>
                  <span class="text-xs text-gray-500 font-medium">Astro Team | 30 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-yellow-400 flex items-center justify-center text-gray-900 shrink-0">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="w-full pb-16 bg-[#FFFDF9]">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <h2 class="text-[26px] md:text-[30px] font-bold text-slate-800 mb-6" style="font-family: 'Playfair Display', serif;">
          Frequently Asked Questions
        </h2>
        
        <div class="flex flex-col gap-3">
          
          <!-- FAQ 1 -->
          <details name="faq" class="group bg-white rounded-lg border border-gray-100 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:border-orange-200 transition">
            <summary class="p-4 flex justify-between items-center cursor-pointer list-none [&::-webkit-details-marker]:hidden">
              <h4 class="font-semibold text-gray-700 text-sm md:text-[15px]">Is the kundli really accurate?</h4>
              <div class="text-orange-500 border border-orange-500 rounded-full w-5 h-5 flex items-center justify-center shrink-0 group-open:rotate-45 transition-transform duration-300">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
              </div>
            </summary>
            <div class="px-4 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-3">
              Yes, our Kundli is generated using highly precise Vedic astrology algorithms based on your exact birth details, providing an accurate reading of your planetary positions.
            </div>
          </details>

          <!-- FAQ 2 -->
          <details name="faq" class="group bg-white rounded-lg border border-gray-100 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:border-orange-200 transition">
            <summary class="p-4 flex justify-between items-center cursor-pointer list-none [&::-webkit-details-marker]:hidden">
              <h4 class="font-semibold text-gray-700 text-sm md:text-[15px]">What details are required to generate a kundli?</h4>
              <div class="text-orange-500 border border-orange-500 rounded-full w-5 h-5 flex items-center justify-center shrink-0 group-open:rotate-45 transition-transform duration-300">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
              </div>
            </summary>
            <div class="px-4 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-3">
              To generate a Kundli, you will need to provide your exact date of birth, time of birth, and place of birth. These details ensure that the calculations are fully customized to you.
            </div>
          </details>

          <!-- FAQ 3 -->
          <details name="faq" class="group bg-white rounded-lg border border-gray-100 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:border-orange-200 transition">
            <summary class="p-4 flex justify-between items-center cursor-pointer list-none [&::-webkit-details-marker]:hidden">
              <h4 class="font-semibold text-gray-700 text-sm md:text-[15px]">Can I get my kundli in both North and South Indian style?</h4>
              <div class="text-orange-500 border border-orange-500 rounded-full w-5 h-5 flex items-center justify-center shrink-0 group-open:rotate-45 transition-transform duration-300">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
              </div>
            </summary>
            <div class="px-4 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-3">
              Yes! You can choose between the traditional North Indian style (diamond chart) or the South Indian style (square chart) based on your personal preference.
            </div>
          </details>

          <!-- FAQ 4 -->
          <details name="faq" class="group bg-white rounded-lg border border-gray-100 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:border-orange-200 transition">
            <summary class="p-4 flex justify-between items-center cursor-pointer list-none [&::-webkit-details-marker]:hidden">
              <h4 class="font-semibold text-gray-700 text-sm md:text-[15px]">How is kundli matching done?</h4>
              <div class="text-orange-500 border border-orange-500 rounded-full w-5 h-5 flex items-center justify-center shrink-0 group-open:rotate-45 transition-transform duration-300">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
              </div>
            </summary>
            <div class="px-4 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-3">
              Kundli matching is based on the Ashtakoot Guna Milan system, which compares the moon charts of both partners and scores compatibility out of 36 points across 8 distinct categories.
            </div>
          </details>

          <!-- FAQ 5 -->
          <details name="faq" class="group bg-white rounded-lg border border-gray-100 shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:border-orange-200 transition">
            <summary class="p-4 flex justify-between items-center cursor-pointer list-none [&::-webkit-details-marker]:hidden">
              <h4 class="font-semibold text-gray-700 text-sm md:text-[15px]">Will I get remedies in the kundli report?</h4>
              <div class="text-orange-500 border border-orange-500 rounded-full w-5 h-5 flex items-center justify-center shrink-0 group-open:rotate-45 transition-transform duration-300">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
              </div>
            </summary>
            <div class="px-4 pb-4 text-sm text-gray-500 leading-relaxed border-t border-gray-50 pt-3">
              Yes, our detailed Kundli reports include specific, personalized remedies based on any unfavorable planetary positions, to help strengthen your chart and attract positive energy.
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
