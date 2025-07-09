const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
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
        body: [
          'Inter',
          'ui-sans-serif',
          '-apple-system',
          'system-ui',
          'Segoe UI',
          'Roboto',
          'Helvetica Neue',
          'Arial',
          'Noto Sans',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji'
        ],
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('flowbite/typography'),
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
