/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            merriweather: ['Merriweather', 'serif'],
            nunito: ['Nunito', 'sans-serif'],
            oswald: ['Oswald', 'sans-serif'],
            roboto: ['Roboto', 'sans-serif'],
          },
    },
  },
  plugins: [],
}

