/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                app: {
                    yellow: "#FCCD03",
                },
            },
        },
    },
    plugins: [],

    // Generate class names
    safelist: [
        "bg-transparent",
        "dark:bg-white/5",
        "border",
        "border-zinc-950/10",
        "data-[hover]:border-zinc-950/20",
        "dark:border-white/10",
        "dark:data-[hover]:border-white/20",
        "after:pointer-events-none",
        "focus:outline-none",
        "after:absolute",
        "after:inset-0",
        "after:rounded-lg",
        "after:ring-inset",
        "after:ring-transparent",
        "sm:after:focus-within:ring-2",
        "sm:after:focus-within:ring-blue-500",
    ],
};
