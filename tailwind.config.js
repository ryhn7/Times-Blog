/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{blade.php,js}"],
  theme: {
    extend: {
      fontFamily: {
        'chelten': ['Cheltenham', 'serif'],
        'imperial' : ['Imperial', 'serif'],
        'karnak' : ['Karnak', 'serif'],
        'franklin' : ['Franklin', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
