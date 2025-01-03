/** @type {import('tailwindcss').Config} */
import flowbitePlugin from 'flowbite/plugin';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'storex-red': '#ee3439',
                'storex-grey': '#353535',
                'storex-inactive-grey': '#7E898C',
                'storex-light-grey': '#F7F7F7',
                'storex-medium-grey': '#eff0ee',
                'storex-medium-grey-bg': '#eff0eecc',
                'storex-outline-grey': '#d0d9db'
            },
            fontFamily: {
                'storex': ['MyriadPro', 'sans-serif']
            },
            borderWidth: {
                '1': '1px',
            },
            height: {
                '104': '28rem',
                '110': '30rem',
            },
            fontSize: {
                'xs': '8px'
            }

        },
    },
    plugins: [
        flowbitePlugin
    ]
}
