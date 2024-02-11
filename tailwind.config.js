/** @type {import('tailwindcss').Config} */
export default {
  darkMode: ["class", '[data-mode="dark"]'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ["Inter"],
  },
  extend: {
    colors: {
        app: {
            yellow: "#f5cb5c",
        },
    },
},
  },
  plugins: [],
}

