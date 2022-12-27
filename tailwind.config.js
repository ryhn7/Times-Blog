/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{blade.php,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'chelten': ['Cheltenham', 'serif'],
        'imperial' : ['Imperial', 'serif'],
      },
    },
  },
  plugins: [],
}
