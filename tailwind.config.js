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
                sans: ['"Plus Jakarta Sans"', 'Inter', ...defaultTheme.fontFamily.sans],
                display: ['"Cabinet Grotesk"', '"Syne"', '"Outfit"', 'sans-serif'],
                mono: ['"JetBrains Mono"', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                onemove: {
                    orange: '#FF4D00',
                    'orange-light': '#FF6A1A',
                    amber: '#FF7A00',
                    glow: '#FF3300',
                    yellow: '#FFAA00',
                    dark: '#08090C',
                    deep: '#040507',
                    card: '#0F1117',
                    surface: '#151821',
                    'surface-light': '#1E222D',
                    muted: '#8B949E',
                    silver: '#E6EDF3',
                }
            },
            boxShadow: {
                'glow-orange': '0 0 35px -5px rgba(255, 77, 0, 0.45)',
                'glow-orange-sm': '0 0 15px -3px rgba(255, 77, 0, 0.35)',
                'glow-orange-lg': '0 0 60px -10px rgba(255, 77, 0, 0.6)',
                'glow-white': '0 0 25px -5px rgba(255, 255, 255, 0.3)',
                'card-depth': '0 20px 40px -15px rgba(0, 0, 0, 0.8), 0 0 1px 1px rgba(255, 255, 255, 0.05)',
            },
            animation: {
                'pulse-slow': 'pulse 3.5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'float': 'float 6s ease-in-out infinite',
                'shimmer': 'shimmer 2.5s infinite linear',
                'laser': 'laser 2s infinite ease-in-out',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                shimmer: {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(100%)' },
                },
                laser: {
                    '0%': { transform: 'scaleX(0)', transformOrigin: 'left' },
                    '50%': { transform: 'scaleX(1)', transformOrigin: 'left' },
                    '50.1%': { transform: 'scaleX(1)', transformOrigin: 'right' },
                    '100%': { transform: 'scaleX(0)', transformOrigin: 'right' },
                }
            }
        },
    },

    plugins: [forms],
};
