const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        fontFamily: {
            'body' : ['"Open Sans"',],
        },
        extend: {
            backgroundImage: {
                'wisuda-26': 'url(../images/bg-wisuda-26.jpg)',
                'wisuda-27': 'url(../images/bg-wisuda-27.jpg)',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
