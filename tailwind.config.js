const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/views/be/components/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'default-bg': colors.zinc[100],
                'primary-50': colors.sky[50],
                'primary-100': colors.sky[100],
                'primary-200': colors.sky[200],
                'primary-300': colors.sky[300],
                'primary': colors.sky[500],
                'primary-600': colors.sky[600],
                'primary-700': colors.sky[700],
                'primary-900': colors.sky[900],
                'primary-950': colors.sky[950],
                'primary-950': colors.sky[950],
                'black': colors.gray[900],
            },
        },
        fontFamily: {
            sans: ['Noto Sans JP', 'sans-serif'],
            serif: ['Noto Serif JP', 'serif'],
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
    safelist: [
        'pb-4', 'mb-4', 'flex', 'md:hidden', 'border-b-2', 'border-gray-100'
    ]
  }
