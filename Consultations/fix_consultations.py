import re

files = [
    'Talk-to-Astrologer.php',
    'Chat-with-Astrologer.php',
    'Video-Consultation.php'
]

type_map = {
    'Talk-to-Astrologer.php': 'audio',
    'Chat-with-Astrologer.php': 'chat',
    'Video-Consultation.php': 'video'
}

for f in files:
    with open(f, 'r') as file:
        content = file.read()

    # The start marker is .astro-grid-layout { ... } </style> \n <div class="astro-grid-layout">
    # Because of my last edit, Talk-to-Astrologer has <div class="astro-grid-layout" id="astrologer-grid">
    # Let's match from .astro-grid-layout { ... </style> to <!-- Right Content (Sidebar) -->
    
    start_pattern = r'(\.astro-grid-layout\s*\{.*?</style>)'
    end_pattern = r'(<!-- Right Content \(Sidebar\) -->)'
    
    match_start = re.search(start_pattern, content, flags=re.DOTALL)
    match_end = re.search(end_pattern, content)
    
    if match_start and match_end:
        start_idx = match_start.end()
        # Find the View More Astrologers div to preserve it or just rewrite it
        # Actually, let's just replace everything between <style> and Right Sidebar with the dynamic grid
        
        replacement = f"""
            <div class="astro-grid-layout" id="astrologer-grid">
              <!-- Dynamically populated via JS -->
            </div>
            
            <input type="hidden" id="consultation_type_filter" value="{type_map[f]}">
            
            <div class="mt-8 mb-6 flex justify-center">
              <button class="bg-[#FFFDF9] border border-orange-100 text-[#EA580C] font-bold py-3 px-8 rounded-full shadow-sm hover:shadow-md transition-all flex items-center gap-2" style="font-size: 14px;">
                View More Astrologers
                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </button>
            </div>
          </div>
          
          """
        
        new_content = content[:start_idx] + replacement + content[match_end.start():]
        
        # Inject script at the bottom before </body>
        if '<script src="/js/astrologer-list.js"></script>' not in new_content:
            new_content = new_content.replace('</body>', '  <script src="/js/api.js"></script>\n  <script src="/js/astrologer-list.js"></script>\n</body>')
            
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Updated {f}")

