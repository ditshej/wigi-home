const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
      './resources/**/*.{html,js,php,vue}',
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
      require('@tailwindcss/forms'),
      function({addBase, theme}) {
          if (process.env.NODE_ENV === "production") return

          const screens = theme('screens', {})
          const breakpoints = Object.keys(screens)

          addBase({
              'body::after': {
                  content: `"xs"`,
                  position: 'fixed',
                  right: '.5rem',
                  bottom: '.5rem',
                  padding: '.5rem',
                  background: '#eee',
                  border: '1px solid',
                  borderColor: '#ddd',
                  color: '#e50478',
                  fontSize: '1rem',
                  fontWeight: '600',
                  zIndex: '99999',
              },
              ...breakpoints.reduce((acc, current) => {
                  acc[`@media (min-width: ${screens[current]})`] = {
                      'body::after': {
                          content: `"${current}"`
                      }
                  }
                  return acc
              }, {})
          })
      }
  ],
}
