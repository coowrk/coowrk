/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["class", '[data-mode="dark"]'],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
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

    plugins: [require("@tailwindcss/typography")],
};
