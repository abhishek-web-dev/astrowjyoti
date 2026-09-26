const fs = require('fs');

const htmlPath = '/media/abhishekn/New Volume1/BKM/Astrojyoti/Frontend/Astrology/Weekly-Horoscope.html';
let content = fs.readFileSync(htmlPath, 'utf-8');

// The marker where we insert the Left Column additions
const leftColEndMarker = `              </div>\n            </div>\n          </div>\n\n          <!-- Right Column (Sidebar) -->`;

const leftColAdditions = `
            <!-- Key Highlights This Week -->
            <div>
              <h3 class="text-[26px] md:text-[30px] font-bold text-[#111827] mb-2" style="font-family: 'Playfair Display', serif;">
                Key Highlights This Week
              </h3>
              <p class="text-[14px] text-gray-500 font-medium mb-8">
                A quick overview of what this week brings for all zodiac signs.
              </p>
              
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="bg-white rounded-[20px] p-6 border border-gray-100 flex flex-col hover:shadow-md transition">
                  <div class="w-10 h-10 rounded-full bg-yellow-50 flex items-center justify-center mb-4 text-yellow-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                  </div>
                  <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Positive Opportunities</h4>
                  <p class="text-gray-500 text-[12.5px] leading-relaxed">Favourable planetary alignments bring new growth opportunities.</p>
                </div>

                <div class="bg-white rounded-[20px] p-6 border border-gray-100 flex flex-col hover:shadow-md transition">
                  <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center mb-4 text-red-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                  </div>
                  <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Areas to Be Careful</h4>
                  <p class="text-gray-500 text-[12.5px] leading-relaxed">Be mindful of communication and impulsive decisions.</p>
                </div>

                <div class="bg-white rounded-[20px] p-6 border border-gray-100 flex flex-col hover:shadow-md transition">
                  <div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center mb-4 text-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.951-2.895 2.541-3.417C9.697 5.214 10.82 5 12 5c1.18 0 2.304.214 3.43.583 1.59.522 2.452 1.871 2.541 3.417h1.946c-.092-2.528-1.536-4.63-4.004-5.438A13.564 13.564 0 0012 3a13.564 13.564 0 00-3.913.562c-2.468.808-3.912 2.91-4.004 5.438zM2 13c0 3.866 3.134 7 7 7 3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7zm7-5a5 5 0 100 10 5 5 0 000-10z" clip-rule="evenodd"/></svg>
                  </div>
                  <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Focus & Balance</h4>
                  <p class="text-gray-500 text-[12.5px] leading-relaxed">A good time to maintain balance and stay consistent.</p>
                </div>

                <div class="bg-white rounded-[20px] p-6 border border-gray-100 flex flex-col hover:shadow-md transition">
                  <div class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center mb-4 text-amber-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l2.4 7.2h7.6l-6 4.8 2.4 7.2-6-4.8-6 4.8 2.4-7.2-6-4.8h7.6z"/></svg>
                  </div>
                  <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Lucky Influences</h4>
                  <p class="text-gray-500 text-[12.5px] leading-relaxed">Certain signs may see special support in love, career and finance.</p>
                </div>
              </div>
            </div>

            <!-- Weekly Horoscope for All Zodiac Signs -->
            <div>
              <h3 class="text-[26px] md:text-[30px] font-bold text-[#111827] mb-2" style="font-family: 'Playfair Display', serif;">
                Weekly Horoscope for All Zodiac Signs
              </h3>
              <p class="text-[14px] text-gray-500 font-medium mb-8">
                Read detailed weekly predictions for your zodiac sign. Click on your sign to explore love, career, finance, health and overall guidance for the week.
              </p>
              
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
`;

const zodiacs = [
  { name: 'Aries', date: 'Mar 21 - Apr 19', img: 'aries' },
  { name: 'Taurus', date: 'Apr 20 - May 20', img: 'taurus' },
  { name: 'Gemini', date: 'May 21 - Jun 20', img: 'gemini' },
  { name: 'Cancer', date: 'Jun 21 - Jul 22', img: 'cancer' },
  { name: 'Leo', date: 'Jul 23 - Aug 22', img: 'leo' },
  { name: 'Virgo', date: 'Aug 23 - Sep 22', img: 'virgo' },
  { name: 'Libra', date: 'Sep 23 - Oct 22', img: 'libra' },
  { name: 'Scorpio', date: 'Oct 23 - Nov 21', img: 'scorpio' },
  { name: 'Sagittarius', date: 'Nov 22 - Dec 21', img: 'sagittarius' },
  { name: 'Capricorn', date: 'Dec 22 - Jan 19', img: 'capricorn' },
  { name: 'Aquarius', date: 'Jan 20 - Feb 18', img: 'aquarius' },
  { name: 'Pisces', date: 'Feb 19 - Mar 20', img: 'pisces' }
];

let zodiacHtml = '';
for(let z of zodiacs) {
  zodiacHtml += \`
                <a href="#" class="bg-white rounded-[20px] p-5 border border-gray-100 flex items-center gap-4 hover:shadow-md hover:border-orange-200 transition group">
                  <div class="w-14 h-14 rounded-full overflow-hidden bg-orange-50/50 flex items-center justify-center shrink-0 group-hover:bg-orange-100/50 transition">
                    <img src="/zodiac-\${z.img}.png" alt="\${z.name}" class="w-12 h-12 object-contain group-hover:scale-110 transition duration-300" />
                  </div>
                  <div>
                    <h4 class="font-bold text-gray-900 text-[15.5px]">\${z.name}</h4>
                    <p class="text-[11.5px] text-gray-400 font-medium mt-0.5 mb-1.5">\${z.date}</p>
                    <span class="text-[#EA580C] text-[12px] font-semibold flex items-center gap-1 group-hover:gap-1.5 transition-all">Read Horoscope <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></span>
                  </div>
                </a>\`;
}

const stepsHtml = \`
              </div>
            </div>

            <!-- How to Read Your Weekly Horoscope? -->
            <div>
              <h3 class="text-[26px] md:text-[30px] font-bold text-[#111827] mb-2" style="font-family: 'Playfair Display', serif;">
                How to Read Your Weekly Horoscope?
              </h3>
              <p class="text-[14px] text-gray-500 font-medium mb-8">
                Follow these simple steps to get the most out of your weekly predictions.
              </p>
              
              <div class="flex flex-col md:flex-row gap-4 items-stretch relative">
                 <div class="bg-white rounded-[20px] p-5 border border-gray-100 flex-1 relative z-10 flex flex-col items-center text-center">
                   <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center mb-4 text-amber-500">
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg>
                   </div>
                   <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Select Your Sign</h4>
                   <p class="text-gray-500 text-[12.5px] leading-relaxed">Choose your zodiac sign from the list above.</p>
                 </div>
                 
                 <div class="hidden md:flex items-center justify-center text-orange-400">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                 </div>
                 
                 <div class="bg-white rounded-[20px] p-5 border border-gray-100 flex-1 relative z-10 flex flex-col items-center text-center">
                   <div class="w-12 h-12 rounded-full bg-rose-50 flex items-center justify-center mb-4 text-rose-500">
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                   </div>
                   <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Read Predictions</h4>
                   <p class="text-gray-500 text-[12.5px] leading-relaxed">Explore detailed insights for love, career, finance and more.</p>
                 </div>
                 
                 <div class="hidden md:flex items-center justify-center text-orange-400">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                 </div>
                 
                 <div class="bg-white rounded-[20px] p-5 border border-gray-100 flex-1 relative z-10 flex flex-col items-center text-center">
                   <div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center mb-4 text-emerald-500">
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                   </div>
                   <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Understand Guidance</h4>
                   <p class="text-gray-500 text-[12.5px] leading-relaxed">Learn how planetary movements influence your week.</p>
                 </div>
                 
                 <div class="hidden md:flex items-center justify-center text-orange-400">
                   <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                 </div>
                 
                 <div class="bg-white rounded-[20px] p-5 border border-gray-100 flex-1 relative z-10 flex flex-col items-center text-center">
                   <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center mb-4 text-amber-500 font-bold text-[22px]">
                     4
                   </div>
                   <h4 class="font-bold text-gray-900 text-[14.5px] mb-2">Plan Your Week</h4>
                   <p class="text-gray-500 text-[12.5px] leading-relaxed">Use the insights to make better decisions and stay prepared.</p>
                 </div>
                 
              </div>
            </div>
`;

content = content.replace(leftColEndMarker, leftColAdditions + zodiacHtml + stepsHtml + '\n              </div>\n            </div>\n          </div>\n\n          <!-- Right Column (Sidebar) -->');


const rightColEndMarker = `              </ul>\n            </div>\n          </div>`;

let astrologersHtml = `
            <!-- Top Astrologers -->
            <div class="bg-white rounded-[24px] p-7 md:p-8 shadow-[0_4px_24px_rgba(0,0,0,0.03)] border border-gray-100 mt-8">
              <h3 class="font-bold text-gray-900 text-[18px] mb-2" style="font-family: 'Playfair Display', serif;">
                Top Astrologers for Weekly Horoscope
              </h3>
              <p class="text-[13px] text-gray-500 font-medium mb-6">
                Get detailed weekly guidance from our experts.
              </p>
              
              <div class="flex flex-col gap-4 mb-6">`;

const astros = [
  { name: "Acharya Neelima", rating: "4.8", reviews: "2.1k", img: "68" },
  { name: "Pandit Vikram Joshi", rating: "4.7", reviews: "1.8k", img: "11" },
  { name: "Dr. Meera Joshi", rating: "4.8", reviews: "2.1k", img: "5" },
  { name: "Sadhvi Priya Nand", rating: "4.7", reviews: "2.4k", img: "9" },
  { name: "Astro Kunal Verma", rating: "4.6", reviews: "1.2k", img: "12" }
];

for(let a of astros) {
  astrologersHtml += \`
                 <div class="flex items-center justify-between">
                   <div class="flex items-center gap-3">
                     <div class="relative w-11 h-11 rounded-full overflow-hidden bg-gray-100 border border-gray-200 shrink-0">
                       <img src="https://i.pravatar.cc/150?img=\${a.img}" alt="\${a.name}" class="w-full h-full object-cover"/>
                       <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                     </div>
                     <div>
                       <h5 class="text-[13.5px] font-bold text-gray-900">\${a.name}</h5>
                       <div class="flex items-center text-[12px] font-medium text-gray-500 mt-0.5">
                         <svg class="w-3.5 h-3.5 text-orange-500 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                         <span class="text-gray-900 font-bold mr-1">\${a.rating}</span> (\${a.reviews})
                       </div>
                     </div>
                   </div>
                   <button class="border border-orange-200 text-[#EA580C] font-semibold text-[13px] px-4 py-1.5 rounded-full hover:bg-orange-50 transition ml-2">Chat</button>
                 </div>\`;
}

astrologersHtml += \`
              </div>

              <a href="#" class="w-full flex justify-center border-2 border-orange-100 text-[#EA580C] font-semibold text-[14px] py-2.5 rounded-full hover:bg-orange-50 transition group">
                View All Astrologers <span class="ml-1 group-hover:translate-x-1 transition-transform">→</span>
              </a>
            </div>

            <!-- Personalised Banner -->
            <div class="relative w-full rounded-[24px] overflow-hidden shadow-lg mt-8" style="min-height: 280px;">
              <img src="/want-weekly-horoscope.png" alt="Want Personalised Weekly Horoscope" class="absolute inset-0 w-full h-full object-cover z-0" />
              <!-- Dark gradient overlay for text readability -->
              <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent z-0"></div>
              
              <div class="relative z-10 p-8 flex flex-col justify-center h-full text-white">
                <h3 class="font-bold text-[24px] mb-3 leading-snug text-white" style="font-family: 'Playfair Display', serif;">
                  Want Personalised<br/>Weekly Horoscope?
                </h3>
                <p class="text-gray-200 text-[13.5px] leading-relaxed mb-6 max-w-[220px]">
                  Get custom predictions based on your birth chart from our expert astrologers.
                </p>
                <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#FDE047] text-gray-900 font-bold py-3 px-6 rounded-full text-[14px] hover:bg-yellow-400 transition shadow-lg w-max">
                  Talk to Astrologer
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
              </div>
            </div>
\`;

content = content.replace(rightColEndMarker, rightColEndMarker + '\n' + astrologersHtml);

fs.writeFileSync(htmlPath, content);
console.log("Successfully updated Weekly Horoscope page!");
