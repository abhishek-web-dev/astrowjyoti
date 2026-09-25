import sys

with open("Consultations/Talk-to-Astrologer.html", "r") as f:
    lines = f.readlines()

start = -1
end = -1
for i, line in enumerate(lines):
    if "<main>" in line:
        start = i
    if "</main>" in line:
        end = i

if start != -1 and end != -1:
    new_main = """  <main>
    <section class="relative w-full bg-[#FFFDF9] overflow-hidden flex items-center">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0">
        <img src="/Talk-to-Astrologer-banner.png" alt="Talk to Astrologer Background" class="w-full h-full object-cover object-right md:object-center" />
      </div>

      <!-- Left Gradient Overlay for readability -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9] via-[#FFFDF9]/95 to-transparent w-full md:w-[70%] z-0"></div>

      <!-- Content -->
      <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-[5%] py-12 md:py-20 lg:py-24">
        <div class="max-w-3xl">
          
          <!-- Breadcrumb -->
          <nav class="flex text-[11px] md:text-[13px] text-gray-500 font-medium mb-6 md:mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
              <li class="inline-flex items-center">
                <a href="/" class="hover:text-[#F2780C] transition-colors">Home</a>
              </li>
              <li>
                <div class="flex items-center">
                  <span class="mx-1 text-gray-400 font-light">&gt;</span>
                  <a href="#" class="hover:text-[#F2780C] transition-colors">Consultations</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <span class="mx-1 text-gray-400 font-light">&gt;</span>
                  <span class="text-[#F2780C]">Talk to Astrologer</span>
                </div>
              </li>
            </ol>
          </nav>

          <!-- Heading -->
          <h1 class="text-[32px] sm:text-4xl md:text-5xl lg:text-[56px] font-serif font-bold text-[#111] leading-[1.15] tracking-tight mb-4 md:mb-5">
            Talk to <span class="text-[#F2780C]">Astrologer</span>
          </h1>

          <!-- Subheading -->
          <p class="text-[#4F5665] text-sm md:text-[17px] leading-relaxed font-medium mb-10 max-w-[90%] md:max-w-xl">
            Get instant voice consultation with our experienced astrologer and find solutions to life's important questions.
          </p>

          <!-- Features -->
          <div class="flex flex-col sm:flex-row flex-wrap gap-6 lg:gap-10">
            
            <!-- Feature 1 -->
            <div class="flex items-center gap-3 md:gap-4">
              <div class="w-[42px] h-[42px] md:w-[50px] md:h-[50px] rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_10px_rgba(242,120,12,0.1)] shrink-0 border border-[#F2780C]/10">
                 <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[13px] md:text-[15px] mb-0.5">Instant Connect</h4>
                <p class="text-gray-500 text-[11px] md:text-[13px] font-medium">Talk to astrologer now</p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-center gap-3 md:gap-4">
              <div class="w-[42px] h-[42px] md:w-[50px] md:h-[50px] rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_10px_rgba(242,120,12,0.1)] shrink-0 border border-[#F2780C]/10">
                 <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[13px] md:text-[15px] mb-0.5">100% Private</h4>
                <p class="text-gray-500 text-[11px] md:text-[13px] font-medium">Your conversations are secure</p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-center gap-3 md:gap-4">
              <div class="w-[42px] h-[42px] md:w-[50px] md:h-[50px] rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_10px_rgba(242,120,12,0.1)] shrink-0 border border-[#F2780C]/10">
                 <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 text-[13px] md:text-[15px] mb-0.5">Expert Guidance</h4>
                <p class="text-gray-500 text-[11px] md:text-[13px] font-medium">Get solutions for life's problems</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>\n"""
    lines = lines[:start] + [new_main] + lines[end+1:]
    
    with open("Consultations/Talk-to-Astrologer.html", "w") as out:
        out.writelines(lines)
        
