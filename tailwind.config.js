import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                bgDark: "#111827",
                bgLight: "#e6e7eb",
                textDark: "#e6e7eb",
                textLight: "#111827",
                textOrange: "#f97316",
                borderDark: "#6b7280",
                borderLight: "#d1d5db",
                borderGray: "#2f3336",
                borderOrange: "#f97316",
                inputGray: "#202327",
                iconOrange: "#f97316",
                iconRed: "#ef4444",
                iconBlue: "#1d9bf0",
                iconGreen: "#00ba7c",
                iconPink: "#f91880",
            },
        },
    },

    plugins: [
        forms,
        typography,
        require('flowbite/plugin'),
    ],
};
