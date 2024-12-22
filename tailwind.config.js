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
        container: {
        center: true,
        padding: '16px'
        },
        extend: {
        colors: {
            primary: '#9333ea',
            secondary: '#6b21a8',
            thiry: '#d8b4fe',
            slate: '#374151',
            dark: '#0f172a'
        },
        screen: {
            '2xl': '1320px' 
        }
        },
    },
    plugins: [
        // require('tailwind-typewriter')({
        // wordsets: {
        //     myTitle: {
        //     words: ["College Student", "Laravel Enthusiast"],
        //     delay: 2
        //     }
        // }
        // })
    ],
};
