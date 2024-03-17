/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/**/*.blade.php",
  ],
  theme: {
    extend: {},
    fontFamily: {
    'poppins' : 'Poppins'
    }
  },
  plugins: [
  ],
}

