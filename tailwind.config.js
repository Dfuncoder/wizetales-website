/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'F2FFE1' : '#F2FFE1',
        '3A3F4F' : '#3A3F4F',
        '3E3E3E' : '#3E3E3E',
        '4EAE4C' : '#4EAE4C',
        '453416' : '#453416',
        '2E2E2E' : '#2E2E2E',
        'E155F8' : '#E155F8',
        'FF4343' : '#FF4343',
        '863B3B' : '#863B3B',
        'F2FFE1' : '#F2FFE1',
        'F2FFE1' : '#F2FFE1',
      }
    },
    fontFamily: {
      'Bungee': ['Bungee_Inline'],
      'Bangers': ['Bangers'],
      'Nunito': ['Nunito'],
      'poppins':['poppins'],
  },
  },
  plugins: [],
}

