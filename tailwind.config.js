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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            camel: {
                DEFAULT: '#bd9553',
                dark: '#a37f45',
                light: '#d1aa6a',
            },
        },
        fontFamily: {
          sans: [
            'Arial"',
            'Helvetica',
            'sans-serif',
          ],
        },
    },
    plugins: [],
};
