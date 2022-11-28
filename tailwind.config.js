/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./client/src/*.{php,html}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
