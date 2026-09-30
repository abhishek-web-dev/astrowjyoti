/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.{html,php}",
    "./main.js",
    "./src/**/*.{js,ts,jsx,tsx,html,php}",
    "./Consultations/**/*.{html,php}",
    "./Astrology/**/*.{html,php}",
    "./Auth/**/*.{html,php}",
    "./Dashboard/**/*.{html,php}",
    "./Booking/**/*.{html,php}",
    "./Chat/**/*.{html,php}",
    "./Video/**/*.{html,php}",
    "./Services/**/*.{html,php}",
    "./services/**/*.{html,php}",
    "./Admin/**/*.{html,php}",
    "./Components/**/*.{html,php}"
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
