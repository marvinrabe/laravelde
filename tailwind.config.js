const colors = require('tailwindcss/colors')

module.exports = {
  purge: ['./pages/**/*.{js,ts,jsx,tsx}', './components/**/*.{js,ts,jsx,tsx}'],
  darkMode: 'media',
  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito Sans', 'sans'],
      }
    },
    colors: {
      ...colors,
      gray: colors.warmGray
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
