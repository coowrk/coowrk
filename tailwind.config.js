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

    // Generate class names
    safelist: [
        "data-[hover]:border-zinc-950/20",
        "dark:data-[hover]:border-white/20",
        "after:pointer-events-none",
        "after:absolute",
        "after:inset-0",
        "after:rounded-lg",
        "after:ring-inset",
        "after:ring-transparent",
        "sm:after:focus-within:ring-2",
        "sm:after:focus-within:ring-blue-500",
    ],
};
