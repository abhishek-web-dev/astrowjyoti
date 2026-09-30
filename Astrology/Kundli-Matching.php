<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <title>Kundli Matching - Astrojyoti</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFFDF9] text-gray-900 font-sans antialiased overflow-x-hidden">

  <!-- Navbar Component -->
  <div class="app-navbar"></div>

  <main>
    <!-- Hero Section -->
    <section class="relative w-full bg-[#FFFDF9] overflow-hidden flex flex-col justify-center" style="min-height: 540px;">
      
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0">
        <img src="/kundali-matching-banner.png" alt="Kundli Matching Background"
          class="w-full h-full object-cover object-right md:object-center" onerror="this.src='/Kundali-banner.png'"/>
      </div>

      <!-- Left Gradient Overlay for readability -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9] via-[#FFFDF9]/90 to-transparent w-full md:w-[60%] z-0">
      </div>

      <!-- Bottom Gradient Overlay for seamless blend with feature bar -->
      <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-white to-transparent z-0">
      </div>

      <!-- Content -->
      <div class="relative z-10 w-full pt-20 pb-16" style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <div class="w-full md:w-3/4 lg:w-1/2 pr-4 md:pr-10 lg:pr-16">

          <!-- Breadcrumb -->
          <nav class="flex text-gray-500 font-medium mb-6 md:mb-8" style="font-size: 14px;" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
              <li class="inline-flex items-center">
                <a href="/" class="hover:text-orange-500 transition-colors">Home</a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
                  </svg>
                  <a href="/Astrology/Kundli" class="ml-1 hover:text-orange-500 transition-colors">Kundli</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
                  </svg>
                  <span class="ml-1 text-slate-800 font-bold">Kundli Matching</span>
                </div>
              </li>
            </ol>
          </nav>

          <!-- Pill badge -->
          <div class="inline-block px-3.5 py-1 mb-5 border border-orange-200 rounded-full bg-white/80 backdrop-blur-sm text-[11px] font-bold text-slate-800 uppercase tracking-widest shadow-sm">
            COMPATIBILITY ANALYSIS
          </div>

          <!-- Title -->
          <h1 class="text-[34px] md:text-[44px] lg:text-[52px] font-bold text-[#1e293b] mb-4 leading-tight"
            style="font-family: 'Playfair Display', serif;">
            Kundli <span class="text-orange-500">Matching</span>
          </h1>

          <!-- Description -->
          <p class="text-slate-600 text-[15px] md:text-base leading-relaxed mb-8 max-w-lg">
            Discover the compatibility between you and your partner with accurate Vedic Kundli Matching.<br class="hidden md:block" />
            Get detailed analysis of Guna Milan, planetary positions and astrological insights for a happy and harmonious life together.
          </p>

          <!-- Button -->
          <a href="#" class="inline-flex items-center justify-center bg-[#F2780C] text-white font-bold py-3.5 px-8 rounded-full hover:bg-[#E66A00] transition duration-300 shadow-sm text-sm">
            Check Compatibility Now
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>

        </div>
      </div>
    </section>

    <!-- Features Bar -->
    <section class="w-full bg-white/95 backdrop-blur-sm py-6 relative z-20" style="margin-top: -10px;">
        <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-6 lg:gap-0 lg:divide-x lg:divide-gray-100">
              
              <!-- Item 1 -->
              <div class="flex items-start gap-3 lg:px-6 first:lg:pl-0">
                 <div class="w-10 h-10 shrink-0 text-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                 </div>
                 <div>
                    <h4 class="font-bold text-gray-900 text-[14px] leading-tight mb-0.5">Accurate Guna Milan</h4>
                    <p class="text-[12px] text-gray-500">Based on Vedic astrology</p>
                 </div>
              </div>
              
              <!-- Item 2 -->
              <div class="flex items-start gap-3 lg:px-6">
                 <div class="w-10 h-10 shrink-0 text-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                 </div>
                 <div>
                    <h4 class="font-bold text-gray-900 text-[14px] leading-tight mb-0.5">Detailed Compatibility Report</h4>
                    <p class="text-[12px] text-gray-500">Get complete analysis</p>
                 </div>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-3 lg:px-6">
                 <div class="w-10 h-10 shrink-0 text-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                 </div>
                 <div>
                    <h4 class="font-bold text-gray-900 text-[14px] leading-tight mb-0.5">Relationship Insights</h4>
                    <p class="text-[12px] text-gray-500">Understand strengths & challenges</p>
                 </div>
              </div>

              <!-- Item 4 -->
              <div class="flex items-start gap-3 lg:px-6 pr-0">
                 <div class="w-10 h-10 shrink-0 text-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                 </div>
                 <div>
                    <h4 class="font-bold text-gray-900 text-[14px] leading-tight mb-0.5">100% Private & Secure</h4>
                    <p class="text-[12px] text-gray-500">Your data is safe with us</p>
                 </div>
              </div>

           </div>
        </div>
    </section>

    <!-- Match Kundli Form Section -->
    <section class="w-full bg-[#FFF5EB] pt-12 pb-20">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
          <!-- Left Column (Form) -->
          <div class="lg:col-span-2 bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-8">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mb-2" style="font-family: 'Playfair Display', serif;">
              Enter Birth Details to Match Kundli
            </h2>
            <p class="text-gray-500 text-sm md:text-base mb-8">
              Provide birth details of both individuals to get an accurate compatibility analysis.
            </p>

            <form>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                
                <!-- Person 1 (You) -->
                <div class="border border-gray-100 bg-[#FFF5EB] rounded-2xl p-5">
                  <div class="flex flex-wrap gap-4 items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                      <div class="w-9 h-9 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </div>
                      <span class="font-bold text-slate-800 text-sm">Person 1 (You)</span>
                    </div>
                    <div class="flex bg-white rounded-full p-1 border border-gray-100 shadow-sm shrink-0">
                      <button type="button" class="bg-[#F2780C] text-white font-bold text-xs px-4 py-1.5 rounded-full shadow-sm">Male</button>
                      <button type="button" class="text-gray-500 font-medium text-xs px-4 py-1.5 rounded-full hover:text-gray-700">Female</button>
                    </div>
                  </div>

                  <div class="space-y-4">
                    <div>
                      <label class="block text-sm font-bold text-slate-800 mb-2">Full Name</label>
                      <input type="text" placeholder="Enter full name" class="w-full bg-white border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        <label class="block text-sm font-bold text-slate-800 mb-2">Date of Birth</label>
                        <div class="relative">
                          <input type="text" placeholder="Select date" class="w-full bg-white border border-gray-100 rounded-xl pl-4 pr-10 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                          <svg class="w-4 h-4 text-gray-400 absolute right-3.5 top-3.5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                      </div>
                      <div>
                        <label class="block text-sm font-bold text-slate-800 mb-2">Time of Birth</label>
                        <div class="relative">
                          <input type="text" placeholder="-- : --" class="w-full bg-white border border-gray-100 rounded-xl pl-4 pr-10 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition text-center shadow-sm" />
                          <svg class="w-4 h-4 text-gray-400 absolute right-3.5 top-3.5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                      </div>
                    </div>
                    <div>
                      <label class="block text-sm font-bold text-slate-800 mb-2">Place of Birth</label>
                      <input type="text" placeholder="Enter city name" class="w-full bg-white border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                    </div>
                  </div>
                </div>

                <!-- Person 2 (Partner) -->
                <div class="border border-gray-100 bg-[#FFF5EB] rounded-2xl p-5">
                  <div class="flex flex-wrap gap-4 items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                      <div class="w-9 h-9 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </div>
                      <span class="font-bold text-slate-800 text-sm">Person 2 (Partner)</span>
                    </div>
                    <div class="flex bg-white rounded-full p-1 border border-gray-100 shadow-sm shrink-0">
                      <button type="button" class="text-gray-500 font-medium text-xs px-4 py-1.5 rounded-full hover:text-gray-700">Male</button>
                      <button type="button" class="bg-[#F2780C] text-white font-bold text-xs px-4 py-1.5 rounded-full shadow-sm">Female</button>
                    </div>
                  </div>

                  <div class="space-y-4">
                    <div>
                      <label class="block text-sm font-bold text-slate-800 mb-2">Full Name</label>
                      <input type="text" placeholder="Enter full name" class="w-full bg-white border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        <label class="block text-sm font-bold text-slate-800 mb-2">Date of Birth</label>
                        <div class="relative">
                          <input type="text" placeholder="Select date" class="w-full bg-white border border-gray-100 rounded-xl pl-4 pr-10 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                          <svg class="w-4 h-4 text-gray-400 absolute right-3.5 top-3.5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                      </div>
                      <div>
                        <label class="block text-sm font-bold text-slate-800 mb-2">Time of Birth</label>
                        <div class="relative">
                          <input type="text" placeholder="-- : --" class="w-full bg-white border border-gray-100 rounded-xl pl-4 pr-10 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition text-center shadow-sm" />
                          <svg class="w-4 h-4 text-gray-400 absolute right-3.5 top-3.5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                      </div>
                    </div>
                    <div>
                      <label class="block text-sm font-bold text-slate-800 mb-2">Place of Birth</label>
                      <input type="text" placeholder="Enter city name" class="w-full bg-white border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-700 focus:outline-none focus:border-orange-300 focus:ring-1 focus:ring-orange-300 transition shadow-sm" />
                    </div>
                  </div>
                </div>

              </div>
              
              <button type="submit" class="w-full bg-[#F2780C] hover:bg-[#E66A00] text-white font-bold py-3.5 rounded-full transition duration-300 shadow-sm text-base flex justify-center items-center">
                Check Kundli Compatibility
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </button>
            </form>
          </div>

          <!-- Right Column (Sample Card) -->
          <div class="lg:col-span-1 bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col items-center text-center shrink-0">
            <h2 class="text-xl md:text-2xl font-bold text-slate-800 mb-1 w-full text-left" style="font-family: 'Playfair Display', serif;">
              Sample Kundli Matching
            </h2>
            <p class="text-gray-500 text-sm mb-8 w-full text-left">
              See an example of compatibility report.
            </p>

            <div class="flex items-center justify-between w-full max-w-[280px] mb-8">
              <!-- Rahul Profile -->
              <div class="flex items-center gap-3">
                <img src="/pandit.png" alt="Rahul" class="w-12 h-12 rounded-full object-cover border border-gray-200 p-0.5" onerror="this.src='/acharya.png'"/>
                <div class="text-left flex flex-col">
                  <span class="font-bold text-slate-800 text-sm">Rahul</span>
                  <span class="text-xs text-gray-400 font-medium">12 Jan 1995</span>
                </div>
              </div>
              
              <!-- Heart icon -->
              <div class="text-red-500 shrink-0 mx-2">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </div>

              <!-- Priya Profile -->
              <div class="flex items-center gap-3 flex-row-reverse">
                <img src="/lady.png" alt="Priya" class="w-12 h-12 rounded-full object-cover border border-gray-200 p-0.5" />
                <div class="text-right flex flex-col">
                  <span class="font-bold text-slate-800 text-sm">Priya</span>
                  <span class="text-xs text-gray-400 font-medium">10 Mar 1997</span>
                </div>
              </div>
            </div>

            <!-- Chart Circle -->
            <div class="relative w-40 h-40 mb-5">
              <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                <!-- Background Circle -->
                <path class="text-gray-100" stroke-width="2.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <!-- Progress Circle (28/36 is ~77%) -->
                <path class="text-[#F2780C] transition-all duration-1000 ease-out" stroke-dasharray="77, 100" stroke-linecap="round" stroke-width="2.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
              </svg>
              <div class="absolute inset-0 flex flex-col items-center justify-center pt-2">
                <div class="flex items-baseline">
                  <span class="text-4xl font-bold text-[#F2780C] leading-none">28</span>
                  <span class="text-base font-bold text-gray-400 leading-none">/36</span>
                </div>
                <span class="text-xs font-semibold text-gray-500 mt-1">Guna Milan</span>
              </div>
            </div>

            <!-- Match Badge -->
            <div class="bg-green-50 text-green-600 border border-green-200/60 font-bold text-xs px-6 py-1.5 rounded-full mb-4">
              Excellent Match
            </div>
            
            <p class="text-sm text-gray-500 leading-relaxed mb-6 px-4">
              This match shows excellent compatibility and is considered highly favourable.
            </p>

            <a href="#" class="w-full inline-block text-[#F2780C] font-bold py-3 rounded-full hover:bg-[#FFF5EB] transition duration-300 text-sm" style="border: 1px solid #F2780C;">
              View Detailed Report &rarr;
            </a>

          </div>

        </div>
      </div>
    </section>

    <!-- What You Get Section -->
    <section class="w-full bg-white pt-24 pb-20">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <h2 class="text-xl md:text-[24px] font-bold text-slate-800 mb-6" style="font-family: 'Playfair Display', serif;">
          What You Get in Kundli Matching
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          
          <!-- Item 1 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #FDFBEE; border-color: #FAEFD6;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FEF4DC; color: #F59E0B;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2l2.4 7.4h7.6l-6.2 4.5 2.4 7.4-6.2-4.5-6.2 4.5 2.4-7.4-6.2-4.5h7.6z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">Guna Milan Score</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Complete 36 points analysis</p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #FFF6F6; border-color: #FDE8E8;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FDE3E3; color: #EF4444;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M21 16.5C21 16.5 17 19 12 19S3 16.5 3 16.5 3.5 15 12 15s9 1.5 9 1.5zM12 5a6 6 0 0 0-5.8 7.5A13.8 13.8 0 0 1 12 13a13.8 13.8 0 0 1 5.8-.5A6 6 0 0 0 12 5z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">Detailed Compatibility</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Planetary positions & aspects</p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #FFF5F7; border-color: #FDE4EB;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FDE1E9; color: #EC4899;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">Strengths & Challenges</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Relationship insights</p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #FFF8F3; border-color: #FCE8D8;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FCE1CE; color: #F97316;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M8.5 6a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm0 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm7-7a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm0 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">Marriage Prospects</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Timing & future predictions</p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #F4FBF7; border-color: #E2F5EA;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #DCF2E4; color: #10B981;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M17 8C8 10 5 16 5 22c0 0 3-4 8-4s6-4 6-10a11.4 11.4 0 0 0-2 0z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">Remedies (If Needed)</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Personalised Vedic remedies</p>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="rounded-xl p-4 flex items-center gap-4 border" style="background-color: #F4F8FC; border-color: #E6F0F9;">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #DFEDFA; color: #3B82F6;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 2.5L17.5 9H13V4.5zM6 20V4h5v6h6v10H6zm2-8h8v2H8v-2zm0 4h5v2H8v-2z"/></svg>
            </div>
            <div>
              <h4 class="font-bold text-[14px] text-slate-800 mb-0.5">PDF Report</h4>
              <p class="text-[12px] text-gray-500 leading-tight">Complete downloadable report</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Understanding Guna Milan Section -->
    <section class="w-full bg-[#FFFDF9] py-16">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          
          <!-- Left Column (Guna Milan) -->
          <div class="lg:col-span-2 bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100">
            <h2 class="text-xl md:text-[24px] font-bold text-slate-800 mb-2" style="font-family: 'Playfair Display', serif;">
              Understanding Guna Milan
            </h2>
            <p class="text-gray-500 text-sm md:text-[15px] leading-relaxed mb-8">
              Guna Milan is a traditional Vedic method used to check the compatibility between two people. It is based on 8 important parameters.
            </p>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
              
              <!-- Card 1 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">1. Varna</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Spiritual Compatibility</p>
              </div>

              <!-- Card 2 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">2. Vashya</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Control & Attraction</p>
              </div>

              <!-- Card 3 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">3. Tara</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Destiny & Health</p>
              </div>

              <!-- Card 4 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 4c4.41 0 8 3.59 8 8s-3.59 8-8 8-8-3.59-8-8 3.59-8 8-8m0-2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm0-4.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">4. Yoni</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Natural Instincts</p>
              </div>

              <!-- Card 5 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.19 14A8.13 8.13 0 0 1 12 20a8.13 8.13 0 0 1-7.19-4A7.88 7.88 0 0 0 12 18.5 7.88 7.88 0 0 0 19.19 16zm1.75-4A9.9 9.9 0 0 1 20 15a8 8 0 0 1-16 0 9.9 9.9 0 0 1-.94-3C3.62 12.8 7.63 13.5 12 13.5s8.38-.7 8.94-1.5z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">5. Graha Maitri</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Planetary Friendship</p>
              </div>

              <!-- Card 6 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3-8c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">6. Gana</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Temperament Match</p>
              </div>

              <!-- Card 7 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">7. Bhakoot</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Emotional Harmony</p>
              </div>

              <!-- Card 8 -->
              <div class="border border-gray-100 rounded-2xl p-4 flex flex-col items-center text-center hover:border-[#F2780C]/30 transition-colors bg-white">
                <div class="w-12 h-12 rounded-full mb-3 flex items-center justify-center bg-[#FFF5EB] text-[#F2780C]">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zM12 13c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h4 class="font-bold text-slate-800 text-[13px] mb-1">8. Nadi</h4>
                <p class="text-[11px] text-gray-500 leading-tight">Health & Progeny</p>
              </div>

            </div>
          </div>

          <!-- Right Column (Why Important) -->
          <div class="lg:col-span-1 bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100 flex flex-col">
            <img src="/why-kundali-matching-important.png" alt="Why Kundli Matching is Important" class="w-full h-48 md:h-64 object-cover rounded-2xl mb-6 shadow-sm" />
            
            <h2 class="text-xl md:text-[22px] font-bold text-slate-800 mb-6" style="font-family: 'Playfair Display', serif;">
              Why Kundli Matching is Important?
            </h2>

            <ul class="space-y-4 flex-1">
              <li class="flex items-start gap-3">
                <div class="text-[#F2780C] mt-0.5 shrink-0">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="text-[14px] text-slate-700 leading-snug">Helps in understanding compatibility before marriage</span>
              </li>
              <li class="flex items-start gap-3">
                <div class="text-[#F2780C] mt-0.5 shrink-0">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="text-[14px] text-slate-700 leading-snug">Identifies potential challenges and their remedies</span>
              </li>
              <li class="flex items-start gap-3">
                <div class="text-[#F2780C] mt-0.5 shrink-0">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="text-[14px] text-slate-700 leading-snug">Guides towards a happier and more harmonious relationship</span>
              </li>
              <li class="flex items-start gap-3">
                <div class="text-[#F2780C] mt-0.5 shrink-0">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="text-[14px] text-slate-700 leading-snug">Provides insights into future married life</span>
              </li>
              <li class="flex items-start gap-3">
                <div class="text-[#F2780C] mt-0.5 shrink-0">
                  <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="text-[14px] text-slate-700 leading-snug">Based on ancient Vedic wisdom and planetary analysis</span>
              </li>
            </ul>

          </div>

        </div>
      </div>
        </div>
      </div>
    </section>





    <!-- Expert Advice Banner -->
    <section class="w-full bg-white pb-20">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <div class="relative w-full rounded-2xl overflow-hidden shadow-sm flex flex-col md:flex-row items-center" style="background: linear-gradient(to right, #5c2725, #7a312a);">
          
          <!-- Background image overlay -->
          <div class="absolute inset-0 z-0">
             <img src="/get-expert-advice.png" alt="" class="w-full h-full object-cover opacity-80" onerror="this.style.display='none';" />
          </div>
          <div class="absolute inset-0 z-0" style="background: linear-gradient(to right, rgba(92,39,37,0.95) 0%, rgba(122,49,42,0.6) 100%);"></div>

          <!-- Content -->
          <div class="relative z-10 w-full flex flex-col md:flex-row items-center justify-between p-8 md:p-12 lg:p-14 gap-10 md:gap-8">
            
            <!-- Left Text -->
            <div class="md:w-[55%] text-white text-center md:text-left">
              <h2 class="text-2xl md:text-[32px] font-bold mb-4 leading-tight" style="font-family: 'Playfair Display', serif;">
                Get Expert Advice on Kundli Matching
              </h2>
              <p class="text-[14px] md:text-[15px] text-white/90 leading-relaxed mb-8 max-w-lg mx-auto md:mx-0">
                Confused about your compatibility? Talk to our experienced astrologers and get personalised guidance for your relationship and marriage.
              </p>
              <a href="#" class="inline-flex items-center justify-center bg-[#F2780C] text-white font-bold py-3.5 px-8 rounded-full hover:bg-[#E66A00] transition duration-300 shadow-md text-sm border border-[#F2780C]/20">
                Talk to an Astrologer &rarr;
              </a>
            </div>

            <!-- Right Icons -->
            <div class="md:w-[45%] flex flex-wrap items-center justify-center gap-3 md:gap-5 lg:gap-8">
              
              <!-- Icon 1 -->
              <div class="flex flex-col items-center text-center w-[85px] md:w-24">
                <div class="w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center mb-3 shadow-lg" style="background: linear-gradient(135deg, rgba(242,120,12,0.9) 0%, rgba(242,120,12,0.5) 100%); border: 1px solid rgba(255,255,255,0.15);">
                  <svg class="w-7 h-7 md:w-8 md:h-8 text-white fill-current" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <p class="text-white text-[11px] md:text-[12px] font-medium leading-tight">Experienced Astrologers</p>
              </div>

              <!-- Arrow -->
              <div class="text-white/40 pb-8 hidden sm:block">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
              </div>

              <!-- Icon 2 -->
              <div class="flex flex-col items-center text-center w-[85px] md:w-24">
                <div class="w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center mb-3 shadow-lg" style="background: linear-gradient(135deg, rgba(255,255,255,0.25) 0%, rgba(255,255,255,0.05) 100%); border: 1px solid rgba(255,255,255,0.15); backdrop-filter: blur(4px);">
                  <svg class="w-6 h-6 md:w-7 md:h-7 text-white fill-current" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <p class="text-white text-[11px] md:text-[12px] font-medium leading-tight">Personalised Guidance</p>
              </div>

              <!-- Arrow -->
              <div class="text-white/40 pb-8 hidden sm:block">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
              </div>

              <!-- Icon 3 -->
              <div class="flex flex-col items-center text-center w-[85px] md:w-24">
                <div class="w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center mb-3 shadow-lg" style="background: linear-gradient(135deg, rgba(219,39,119,0.8) 0%, rgba(219,39,119,0.4) 100%); border: 1px solid rgba(255,255,255,0.15);">
                  <svg class="w-6 h-6 md:w-7 md:h-7 text-white fill-current" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/></svg>
                </div>
                <p class="text-white text-[11px] md:text-[12px] font-medium leading-tight">Chat / Call Consultation</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Types of Kundli Matching -->
    <section class="w-full bg-white pt-32 pb-16">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <h2 class="text-xl md:text-[24px] font-bold text-slate-800 mb-2" style="font-family: 'Playfair Display', serif;">
          Types of Kundli Matching
        </h2>
        <p class="text-gray-500 text-sm md:text-[15px] leading-relaxed mb-8">
          We offer different types of compatibility analysis to suit your needs.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
          
          <!-- Card 1 -->
          <div class="border border-gray-100 rounded-2xl p-5 bg-white flex items-start gap-4 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FEF4DC; color: #F59E0B;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-slate-800 text-[14px] mb-1 leading-tight">Basic Kundli Matching</h4>
              <p class="text-[12px] text-gray-500 mb-4 leading-relaxed">Get your Guna Milan score and basic compatibility.</p>
              <a href="#" class="inline-block px-5 py-1.5 rounded-full font-bold text-[12px] text-[#F2780C] hover:bg-[#FFF5EB] transition text-center" style="border: 1px solid #F2780C;">Check Now &rarr;</a>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="border border-gray-100 rounded-2xl p-5 bg-white flex items-start gap-4 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FDE3E3; color: #EF4444;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-slate-800 text-[14px] mb-1 leading-tight">Detailed Kundli Matching</h4>
              <p class="text-[12px] text-gray-500 mb-4 leading-relaxed">Complete analysis with planetary aspects.</p>
              <a href="#" class="inline-block px-5 py-1.5 rounded-full font-bold text-[12px] text-[#F2780C] hover:bg-[#FFF5EB] transition text-center" style="border: 1px solid #F2780C;">Check Now &rarr;</a>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="border border-gray-100 rounded-2xl p-5 bg-white flex items-start gap-4 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FDE1E9; color: #EC4899;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-slate-800 text-[14px] mb-1 leading-tight">Love Compatibility</h4>
              <p class="text-[12px] text-gray-500 mb-4 leading-relaxed">Understand emotional and mental compatibility.</p>
              <a href="#" class="inline-block px-5 py-1.5 rounded-full font-bold text-[12px] text-[#F2780C] hover:bg-[#FFF5EB] transition text-center" style="border: 1px solid #F2780C;">Check Now &rarr;</a>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="border border-gray-100 rounded-2xl p-5 bg-white flex items-start gap-4 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full flex flex-shrink-0 items-center justify-center" style="background-color: #FCE1CE; color: #F97316;">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M8.5 6a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm0 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm7-7a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm0 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
            </div>
            <div class="flex-1">
              <h4 class="font-bold text-slate-800 text-[14px] mb-1 leading-tight">Marriage Compatibility</h4>
              <p class="text-[12px] text-gray-500 mb-4 leading-relaxed">Detailed insights for married life and future.</p>
              <a href="#" class="inline-block px-5 py-1.5 rounded-full font-bold text-[12px] text-[#F2780C] hover:bg-[#FFF5EB] transition text-center" style="border: 1px solid #F2780C;">Check Now &rarr;</a>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- How to Check Kundli Matching -->
    <section class="w-full bg-white pb-16">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <h2 class="text-xl md:text-[24px] font-bold text-slate-800 mb-8" style="font-family: 'Playfair Display', serif;">
          How to Check Kundli Matching?
        </h2>

        <div class="flex flex-col lg:flex-row items-center gap-3 lg:gap-4">
          
          <!-- Step 1 -->
          <div class="flex-1 w-full border border-gray-100 rounded-2xl p-4 md:p-5 bg-white flex items-center gap-3 shadow-sm">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex flex-shrink-0 items-center justify-center bg-[#F2780C] text-white font-bold text-lg">1</div>
            <div>
              <h4 class="font-bold text-slate-800 text-[13px] md:text-[14px] mb-0.5">Enter Birth Details</h4>
              <p class="text-[11px] md:text-[12px] text-gray-500 leading-tight">Provide details of both individuals.</p>
            </div>
          </div>
          
          <!-- Arrow -->
          <div class="hidden lg:block text-[#F2780C] shrink-0">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </div>

          <!-- Step 2 -->
          <div class="flex-1 w-full border border-gray-100 rounded-2xl p-4 md:p-5 bg-white flex items-center gap-3 shadow-sm">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex flex-shrink-0 items-center justify-center bg-[#F2780C] text-white font-bold text-lg">2</div>
            <div>
              <h4 class="font-bold text-slate-800 text-[13px] md:text-[14px] mb-0.5">Our System Analyses</h4>
              <p class="text-[11px] md:text-[12px] text-gray-500 leading-tight">We calculate Guna Milan and planetary positions.</p>
            </div>
          </div>

          <!-- Arrow -->
          <div class="hidden lg:block text-[#F2780C] shrink-0">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </div>

          <!-- Step 3 -->
          <div class="flex-1 w-full border border-gray-100 rounded-2xl p-4 md:p-5 bg-white flex items-center gap-3 shadow-sm">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex flex-shrink-0 items-center justify-center bg-[#F2780C] text-white font-bold text-lg">3</div>
            <div>
              <h4 class="font-bold text-slate-800 text-[13px] md:text-[14px] mb-0.5">Get Detailed Report</h4>
              <p class="text-[11px] md:text-[12px] text-gray-500 leading-tight">View your compatibility score and insights.</p>
            </div>
          </div>

          <!-- Arrow -->
          <div class="hidden lg:block text-[#F2780C] shrink-0">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
          </div>

          <!-- Step 4 -->
          <div class="flex-1 w-full border border-gray-100 rounded-2xl p-4 md:p-5 bg-white flex items-center gap-3 shadow-sm">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full flex flex-shrink-0 items-center justify-center bg-[#F2780C] text-white font-bold text-lg">4</div>
            <div>
              <h4 class="font-bold text-slate-800 text-[13px] md:text-[14px] mb-0.5">Consult an Astrologer</h4>
              <p class="text-[11px] md:text-[12px] text-gray-500 leading-tight">For personalised guidance and remedies.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- You May Also Like Section -->
    <section class="w-full bg-white pb-20">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-xl md:text-[28px] font-bold text-[#1E293B]" style="font-family: 'Playfair Display', serif;">
            You May Also Like
          </h2>
          <a href="#" class="inline-flex items-center justify-center border border-[#F2780C] text-[#F2780C] font-bold text-[13px] px-6 py-2 rounded-full hover:bg-[#FFF5EB] transition">
            View All Articles &rarr;
          </a>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
          
          <!-- Card 1 -->
          <div class="border border-gray-100 rounded-2xl bg-white shadow-sm overflow-hidden flex flex-col hover:shadow-md transition">
            <div class="h-40 bg-gray-200 w-full relative">
              <img src="/article1.png" alt="Article 1" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
              <div class="absolute inset-0 hidden items-center justify-center text-gray-400 text-sm font-medium">Image placeholder</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h4 class="text-[#1E293B] font-bold text-[15px] leading-snug mb-6 flex-1">
                How Planetary Positions Affect Marriage Compatibility
              </h4>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <div class="w-6 h-6 rounded-full bg-gray-300 overflow-hidden shrink-0">
                    <img src="/acharya.png" alt="Author" class="w-full h-full object-cover" onerror="this.style.display='none';" />
                  </div>
                  <span class="text-[12px] text-gray-500 font-medium">Astro Team | 25 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-[#FACC15] flex items-center justify-center text-[#1E293B] shrink-0 hover:bg-[#EAB308] transition cursor-pointer">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="border border-gray-100 rounded-2xl bg-white shadow-sm overflow-hidden flex flex-col hover:shadow-md transition">
            <div class="h-40 bg-gray-200 w-full relative">
              <img src="/article2.png" alt="Article 2" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
              <div class="absolute inset-0 hidden items-center justify-center text-gray-400 text-sm font-medium">Image placeholder</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h4 class="text-[#1E293B] font-bold text-[15px] leading-snug mb-6 flex-1">
                Understanding Guna Milan in Kundli Matching
              </h4>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <div class="w-6 h-6 rounded-full bg-gray-300 overflow-hidden shrink-0">
                    <img src="/pandit.png" alt="Author" class="w-full h-full object-cover" onerror="this.style.display='none';" />
                  </div>
                  <span class="text-[12px] text-gray-500 font-medium">Astro Team | 22 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-[#FACC15] flex items-center justify-center text-[#1E293B] shrink-0 hover:bg-[#EAB308] transition cursor-pointer">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="border border-gray-100 rounded-2xl bg-white shadow-sm overflow-hidden flex flex-col hover:shadow-md transition">
            <div class="h-40 bg-gray-200 w-full relative">
              <img src="/article3.png" alt="Article 3" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
              <div class="absolute inset-0 hidden items-center justify-center text-gray-400 text-sm font-medium">Image placeholder</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h4 class="text-[#1E293B] font-bold text-[15px] leading-snug mb-6 flex-1">
                Astrological Remedies for Better Relationship Harmony
              </h4>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <div class="w-6 h-6 rounded-full bg-gray-300 overflow-hidden shrink-0">
                    <img src="/acharya.png" alt="Author" class="w-full h-full object-cover" onerror="this.style.display='none';" />
                  </div>
                  <span class="text-[12px] text-gray-500 font-medium">Astro Team | 20 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-[#FACC15] flex items-center justify-center text-[#1E293B] shrink-0 hover:bg-[#EAB308] transition cursor-pointer">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="border border-gray-100 rounded-2xl bg-white shadow-sm overflow-hidden flex flex-col hover:shadow-md transition">
            <div class="h-40 bg-gray-200 w-full relative">
              <img src="/kundali.png" alt="Article 4" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
              <div class="absolute inset-0 hidden items-center justify-center text-gray-400 text-sm font-medium">Image placeholder</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
              <h4 class="text-[#1E293B] font-bold text-[15px] leading-snug mb-6 flex-1">
                Kundli Matching: Myths vs Facts
              </h4>
              <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2">
                  <div class="w-6 h-6 rounded-full bg-gray-300 overflow-hidden shrink-0">
                    <img src="/pandit.png" alt="Author" class="w-full h-full object-cover" onerror="this.style.display='none';" />
                  </div>
                  <span class="text-[12px] text-gray-500 font-medium">Astro Team | 18 Sep, 2026</span>
                </div>
                <div class="w-7 h-7 rounded-full bg-[#FACC15] flex items-center justify-center text-[#1E293B] shrink-0 hover:bg-[#EAB308] transition cursor-pointer">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="w-full bg-white py-16">
      <div style="width: 90%; margin: 0 auto; max-w: 1200px;">
        <h2 class="text-xl md:text-[28px] font-bold text-[#1E293B] mb-8" style="font-family: 'Playfair Display', serif;">
          Frequently Asked Questions
        </h2>
        
        <div class="flex flex-col gap-3" id="faq-container">
          <!-- FAQ Item 1 -->
          <div class="bg-white border border-gray-100 rounded-[10px] overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.02)]">
            <button class="w-full flex items-center justify-between p-4 md:p-5 text-left faq-button" aria-expanded="false">
              <span class="font-semibold text-[14px] md:text-[15px] text-[#374151]">What is Kundli Matching?</span>
              <svg class="w-5 h-5 md:w-6 md:h-6 text-[#EA580C] shrink-0 transition-transform duration-300 faq-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path></svg>
            </button>
            <div class="faq-content hidden px-4 md:px-5 pb-4 md:pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
              Kundli Matching, also known as Guna Milan, is an ancient Vedic astrology practice used to check the compatibility between two individuals before marriage based on their birth details and planetary positions.
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="bg-white border border-gray-100 rounded-[10px] overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.02)]">
            <button class="w-full flex items-center justify-between p-4 md:p-5 text-left faq-button" aria-expanded="false">
              <span class="font-semibold text-[14px] md:text-[15px] text-[#374151]">How accurate is Kundli Matching?</span>
              <svg class="w-5 h-5 md:w-6 md:h-6 text-[#EA580C] shrink-0 transition-transform duration-300 faq-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path></svg>
            </button>
            <div class="faq-content hidden px-4 md:px-5 pb-4 md:pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
              When based on precise birth details (date, time, and place), Kundli Matching is highly accurate in predicting the fundamental harmony, strengths, and potential challenges in a relationship according to Vedic astrology.
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="bg-white border border-gray-100 rounded-[10px] overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.02)]">
            <button class="w-full flex items-center justify-between p-4 md:p-5 text-left faq-button" aria-expanded="false">
              <span class="font-semibold text-[14px] md:text-[15px] text-[#374151]">What is the ideal Guna Milan score for marriage?</span>
              <svg class="w-5 h-5 md:w-6 md:h-6 text-[#EA580C] shrink-0 transition-transform duration-300 faq-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path></svg>
            </button>
            <div class="faq-content hidden px-4 md:px-5 pb-4 md:pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
              Out of a total 36 Gunas, a minimum score of 18 is considered acceptable for marriage. A score between 25 and 32 is excellent, indicating high compatibility and a harmonious relationship.
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="bg-white border border-gray-100 rounded-[10px] overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.02)]">
            <button class="w-full flex items-center justify-between p-4 md:p-5 text-left faq-button" aria-expanded="false">
              <span class="font-semibold text-[14px] md:text-[15px] text-[#374151]">Can we do Kundli Matching for love marriage?</span>
              <svg class="w-5 h-5 md:w-6 md:h-6 text-[#EA580C] shrink-0 transition-transform duration-300 faq-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path></svg>
            </button>
            <div class="faq-content hidden px-4 md:px-5 pb-4 md:pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
              Yes, absolutely. Kundli Matching for love marriage helps couples understand their deeper cosmic compatibility and prepares them for any astrological challenges they might face, allowing them to perform remedies if necessary.
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="bg-white border border-gray-100 rounded-[10px] overflow-hidden shadow-[0_2px_8px_rgba(0,0,0,0.02)]">
            <button class="w-full flex items-center justify-between p-4 md:p-5 text-left faq-button" aria-expanded="false">
              <span class="font-semibold text-[14px] md:text-[15px] text-[#374151]">What if the Guna Milan score is low?</span>
              <svg class="w-5 h-5 md:w-6 md:h-6 text-[#EA580C] shrink-0 transition-transform duration-300 faq-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path></svg>
            </button>
            <div class="faq-content hidden px-4 md:px-5 pb-4 md:pb-5 text-gray-500 text-[13px] md:text-[14px] leading-relaxed">
              A low Guna Milan score isn't the end of the road. Expert astrologers can analyze the full chart to identify compensating factors and suggest specific Vedic remedies or Poojas to balance out the negative effects.
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FAQ Script -->
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const faqButtons = document.querySelectorAll('.faq-button');
        
        faqButtons.forEach(button => {
          button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            
            // Close all others first
            document.querySelectorAll('.faq-content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.faq-button').forEach(btn => {
              btn.setAttribute('aria-expanded', 'false');
              const btnIcon = btn.querySelector('.faq-icon');
              // Reset icon to plus
              if (btnIcon) {
                btnIcon.innerHTML = '<circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8"></path>';
                btnIcon.style.transform = 'rotate(0deg)';
              }
            });
            
            if (!isExpanded) {
              // Open this one
              content.classList.remove('hidden');
              button.setAttribute('aria-expanded', 'true');
              // Change icon to minus
              if (icon) {
                icon.innerHTML = '<circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8"></path>';
                icon.style.transform = 'rotate(180deg)';
              }
            }
          });
        });
      });
    </script>
  </main>

  <!-- Footer Component -->
  <div class="app-footer"></div>

  <!-- Component Script -->
  <script src="/js/api.js"></script>
  <script src="/js/component.js"></script>
  <script type="module" src="/src/main.js"></script>
</body>

</html>
