import sys

with open("Consultations/Talk-to-Astrologer.html", "r") as f:
    html = f.read()

# Let's insert the Google Font for Playfair Display in the head if it's not there
if "Playfair+Display" not in html:
    head_end = html.find("</head>")
    if head_end != -1:
        font_link = '  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">\n'
        html = html[:head_end] + font_link + html[head_end:]

with open("Consultations/Talk-to-Astrologer.html", "w") as f:
    f.write(html)

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
    <section class="relative w-full bg-[#FFFDF9] overflow-hidden flex items-center" style="min-height: 600px;">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0">
        <img src="/Talk-to-Astrologer-banner.png" alt="Talk to Astrologer Background" class="w-full h-full object-cover object-right lg:object-center" />
      </div>

      <!-- Left Gradient Overlay for readability -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#FFFDF9] via-[#FFFDF9]/95 to-transparent w-full md:w-[75%] z-0"></div>

      <!-- Content -->
      <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-[5%] py-12 md:py-24 lg:py-28">
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
          <h1 class="font-bold text-[#111] mb-6" style="font-family: 'Playfair Display', serif; font-size: clamp(48px, 6vw, 84px); line-height: 1.1; letter-spacing: -0.02em;">
            Talk to <span class="text-[#F2780C]">Astrologer</span>
          </h1>

          <!-- Subheading -->
          <p class="text-[#4F5665] font-medium mb-12 max-w-[90%] md:max-w-2xl" style="font-size: clamp(16px, 2vw, 22px); line-height: 1.6;">
            Get instant voice consultation with our experienced astrologer and find solutions to life's important questions.
          </p>

          <!-- Features -->
          <div class="flex flex-col sm:flex-row flex-wrap gap-8 lg:gap-14 pt-2">
            
            <!-- Feature 1 -->
            <div class="flex items-center gap-5">
              <div class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10" style="width: 68px; height: 68px;">
                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1" style="font-size: 20px;">Instant Connect</h4>
                <p class="text-gray-500 font-medium" style="font-size: 15px;">Talk to astrologer now</p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-center gap-5">
              <div class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10" style="width: 68px; height: 68px;">
                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1" style="font-size: 20px;">100% Private</h4>
                <p class="text-gray-500 font-medium" style="font-size: 15px;">Your conversations are secure</p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-center gap-5">
              <div class="rounded-full bg-white flex items-center justify-center text-[#F2780C] shadow-[0_4px_15px_rgba(242,120,12,0.12)] shrink-0 border border-[#F2780C]/10" style="width: 68px; height: 68px;">
                 <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1" style="font-size: 20px;">Expert Guidance</h4>
                <p class="text-gray-500 font-medium" style="font-size: 15px;">Get solutions for life's problems</p>
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
        
