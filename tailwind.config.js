module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {},
      colors: {
        blue: {
            DEFAULT: '#96D4E5'
        },
          gray: {
            light: '#F6F6F6',
              DEFAULT: '#BDCCD0',
              dark: '#C4C4C4'
          },
          green: {
              light: '#A4EC8B',
              DEFAULT: '#3FEF22',
              dark: '#53753E'
        },
          red: {
            DEFAULT: '#EA4242'
          }
      }
  },
  variants: {},
  plugins: [
  ]
}
