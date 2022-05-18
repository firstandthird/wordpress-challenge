module.exports = {
  content: [
    './themes/example-theme/**/*.php',
    './src/**/*.css'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
