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
        'chomsky' : ['Chomsky', 'sans-serif'],
      },
      backgroundImage: {
        'radial-gradient': 'radial-gradient( ellipse 50% 30px at 50% 100%,#e2e2e2 0%,#fff 110% )',
      }
    },
  },
  plugins: [],
}
