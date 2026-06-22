/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    50:  '#eff6ff',
                    100: '#dbeafe',
                    200: '#bfdbfe',
                    300: '#93c5fd',
                    400: '#60a5fa',
                    500: '#3b82f6',
                    600: '#1e88e5',
                    700: '#1a6bbf',
                    800: '#1e4e8c',
                    900: '#0d2a47',
                    950: '#071525',
                },
                accent: {
                    DEFAULT: '#0f7b8a',
                    50:  '#e6f7f9',
                    100: '#c0eaee',
                    200: '#90d8e0',
                    300: '#56c1cd',
                    400: '#2daab8',
                    500: '#0f7b8a',
                    600: '#0b6270',
                    700: '#094e59',
                    800: '#083c45',
                    900: '#062d35',
                },
            },
            fontFamily: {
                sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                poppins: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            borderRadius: {
                '4xl': '2rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
