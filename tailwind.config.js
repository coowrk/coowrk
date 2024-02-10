/** @type {import('tailwindcss').Config} */
export default {
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
            yellow: "#FCCD03",
        },
    },
},
  },
  plugins: [],
}

