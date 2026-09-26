const fs = require('fs');

const filePath = '/media/abhishekn/New Volume1/BKM/Astrojyoti/Frontend/Astrology/Daily-Horoscope.html';
let content = fs.readFileSync(filePath, 'utf-8');

// Find the Interactive Insights Section
const insightsStartTag = '    <!-- Interactive Horoscope Insights & Astrologers Section -->';
const insightsEndTag = '    </section>\n\n    <!-- Benefits Section -->';

const startIndex = content.indexOf(insightsStartTag);
const endIndex = content.indexOf('    <!-- Benefits Section -->');

if (startIndex !== -1 && endIndex !== -1) {
  const sectionContent = content.substring(startIndex, endIndex);
  
  // Remove the section from its original place
  content = content.substring(0, startIndex) + content.substring(endIndex);
  
  // Find where to insert it (after 12 Houses and Planets section)
  // The 12 Houses section ends right before the closing </main> tag.
  const insertIndex = content.lastIndexOf('  </main>');
  
  if (insertIndex !== -1) {
    content = content.substring(0, insertIndex) + sectionContent + content.substring(insertIndex);
    fs.writeFileSync(filePath, content, 'utf-8');
    console.log("Successfully moved the section.");
  } else {
    console.log("Could not find </main>");
  }
} else {
  console.log("Could not find the section bounds.");
}
