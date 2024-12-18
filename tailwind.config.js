/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './views/**/*.twig',
    './templates/**/*.twig',
    './src/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        'micah': ['"Funnel Sans"', 'sans-serif'],
        'shu': ['"Bebas Neue"', 'sans-serif']  
      },
    },
  },
  plugins: [],
}

