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
            fontFamily: {
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
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
                'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
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
                    'Noto Color Emoji',
                    'Figtree',
                    ...defaultTheme.fontFamily.sans
                ],

                'castoro': ['Castoro', 'serif'],
                'poppins': ['Poppins', 'sans-serif']
            },
            colors: {
                // contoh custom color
                'BLUE-OCEAN': '#4f42b5',
                'darker-white' : '#F7F7FA',
                'subs-brown': '#756D6D',
                'fin-blue': '#23273C',
                primary: {
                    "50": "#eff6ff",
                    "100": "#dbeafe",
                    "200": "#bfdbfe",
                    "300": "#93c5fd",
                    "400": "#60a5fa",
                    "500": "#3b82f6",
                    "600": "#2563eb",
                    "700": "#1d4ed8",
                    "800": "#1e40af",
                    "900": "#1e3a8a"
                }
            },
            dropShadow: {
                'subs-card': '2px 2px 4px rgba(0, 0, 0, 0.25)'
            },
            backgroundImage: {
                'customer-center': "url(..assets/customer-center/pic.png')",
            }
        },

    },

    plugins: [require('@tailwindcss/forms')],
};
