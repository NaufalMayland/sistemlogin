/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
         slate:{
          50:'#f8fafc',
          100:'#f1f5f9',
          200:'#e2e8f0',
          300:'#cbd5e1',
         },
         orange:{
          500:'#f97316',
         }
      },
    },
  },
  plugins: [],
}

