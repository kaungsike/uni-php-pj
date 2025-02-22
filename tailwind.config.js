/** @type {import('tailwindcss').Config} */

// const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = ({
  darkMode : 'class',
  content: ["./src/**/*.{html,js,php}","*.php","./template/*.php",
    //  "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
})