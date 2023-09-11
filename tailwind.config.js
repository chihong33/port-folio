/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./src/**/*.{html,js}",

  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("./plugin"),
    require("tw-elements/dist/plugin.cjs")
  ],
}
