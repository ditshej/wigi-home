const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            sans: ['Sniglet', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            orange: colors.orange,
            amber: colors.amber,
            cyan: colors.cyan,
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/forms')
  ],
}
