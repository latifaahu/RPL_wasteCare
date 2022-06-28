/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          colors: {
            'green-450': '#BABD43',
            'green-650': '#527540',
            'green-950':'#2F4A21'
          },
          fontFamily: {
            'nunito': ['Nunito', 'sans-serif'],
      }
      },
  },
  variants: {
    backgroundColor: [
      'hover',
      'focus',
      'active',
      'odd',
    ],
    display: ['responsive'],
    textColor: [
      'focus-within',
      'hover',
      'active',
    ],
    placeholderColor: ['focus'],
    borderColor: ['focus', 'hover'],
    divideColor: ['dark'],
    boxShadow: ['focus'],
  },
  plugins: [ ],
}
