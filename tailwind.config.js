import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                background: "hsl(var(--background) / <alpha-value>)",
                foreground: "hsl(var(--foreground) / <alpha-value>)",

                card: "hsl(var(--card) / <alpha-value>)",
                card: {
                    foreground: "hsl(var(--card-foreground) / <alpha-value>)",
                },

                popover: "hsl(var(--popover) / <alpha-value>)",
                popover: {
                    foreground: "hsl(var(--popover-foreground) / <alpha-value>)",
                },

                primary: "hsl(var(--primary) / <alpha-value>)",
                primary: {
                    foreground: "hsl(var(--primary-foreground) / <alpha-value>)",
                },

                secondary: "hsl(var(--secondary) / <alpha-value>)",
                secondary: {
                    foreground: "hsl(var(--secondary-foreground) / <alpha-value>)",
                },

                muted: "hsl(var(--muted) / <alpha-value>)",
                muted: {
                    foreground: "hsl(var(--muted-foreground) / <alpha-value>)",
                },

                accent: "hsl(var(--accent) / <alpha-value>)",
                accent: {
                    foreground: "hsl(var(--accent-foreground) / <alpha-value>)",
                },

                destructive: "hsl(var(--destructive) / <alpha-value>)",
                destructive: {
                    foreground: "hsl(var(--destructive-foreground) / <alpha-value>)",
                },

                border: "hsl(var(--border) / <alpha-value>)",
                input: "hsl(var(--input) / <alpha-value>)",
                ring: "hsl(var(--ring) / <alpha-value>)",

                sidebar: {
                    background: "hsl(var(--sidebar-background) / <alpha-value>)",
                    foreground: "hsl(var(--sidebar-foreground) / <alpha-value>)",

                    primary: "hsl(var(--sidebar-primary) / <alpha-value>)",
                    primary: {
                        foreground: "hsl(var(--sidebar-primary-foreground) / <alpha-value>)",
                    },

                    accent: "hsl(var(--sidebar-accent) / <alpha-value>)",
                    accent: {
                        foreground: "hsl(var(--sidebar-accent-foreground) / <alpha-value>)",
                    },

                    border: "hsl(var(--sidebar-border) / <alpha-value>)",
                    ring: "hsl(var(--sidebar-ring) / <alpha-value>)",    
                },

                radius: "hsl(var(--foreground) / <alpha-value>)",
              },
        },
    },

    plugins: [
        // 
    ],
};
