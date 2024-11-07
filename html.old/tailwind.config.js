import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Which one is the 2024 color and which one is the 2023 color? I can't remember. Oh no...
                // https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExc203bHZqemtzZHA3M2JscWd2M2tvcndtdzNnaDAwb2dvMWltdDZiZCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/ukqBV7WM4BQ4w/giphy.gif
                // 'primary': '#BF9B30',
                'primary': '#00A7B5',
            }
        },

    },

    safelist: [
        'border-zinc-500',
        'border-red-600'
    ],

    plugins: [forms],
};
