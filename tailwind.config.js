import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import 'flowbite';
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    "50":  "#eff6ff",
                    "100": "#dbeafe",
                    "10": "#bfdbfe",
                    "300": "#93c5fd",
                    "400": "#60a5fa",
                    "500": "#3b82f6",
                    "600": "#2563eb",
                    "700": "#1d4ed8",
                    "800": "#1e40af",
                    "900": "#1e3a8a",
                    "950": "#172554"
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    plugins: [
        require('flowbite-typography'),
    ],

  safelist: [
    'bg-green-100',
    'bg-red-100',
    'bg-blue-100',
    'bg-cyan-100',
    'bg-primary-700',
    'text-primary-500',
    'text-primary-600',
    'text-primary-700',
    'text-primary-800',
    'text-primary-900',
    'dark:bg-primary-100',
    'dark:text-primary-500',
    'dark:text-primary-600',
    'dark:text-primary-700',
    'dark:text-primary-800',
    'dark:text-primary-900',
  ],
};