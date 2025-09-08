/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './assets/**/*.{js,css}',
    './template-parts/**/*.php',
    './inc/**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        clifford: '#da373d',
      }
    },
  },
  plugins: [],
}