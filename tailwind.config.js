/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./main.js",
    "./src/**/*.{js,ts,jsx,tsx,html}",
    "./Consultations/**/*.html"
  ],
  theme: {
    extend: {
      colors: {
        astro: {
          orange: '#ea580c', // Deeper orange for primary
          amber: '#f59e0b',  // Amber for secondary/accents
          gold: '#eab308',   // Gold for premium touches
          cream: '#fffbeb',  // Cream for soft backgrounds
          white: '#ffffff',  // Pure white
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
