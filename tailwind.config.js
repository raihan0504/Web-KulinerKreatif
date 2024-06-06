/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      colors: {
        'mainColor': '#161616',
        'headerColor': '#0d0d0d',
        'secondColor': '#FFFAD0',
        'white': '#ffff',
        'orange': '#ff7f00',
        'blue' : '#5a7bff',
        'gray-800': '#484848',
        'gray-300': '#e2e8f0',
        'gray-700': '#4a5568',
        'gray-600': '#718096',
        'green-500': '#4CAF50',
        'yellow-500': '#FFEB3B',
        'red-500': '#F44336',
        'black': '#000000',

      }
    },
    plugins: [],
  }
