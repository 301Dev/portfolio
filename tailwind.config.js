const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            screens: {
              '1440': '1440px'
            },
            fontFamily: {
                fira: ['fira-code', 'sans-serif'],
            },
            colors: {
                gdark: '#282C33',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
