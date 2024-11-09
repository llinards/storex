/** @type {import('tailwindcss').Config} */
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
                'storex-light-grey': '#eff0ee',
                'storex-light-grey-bg': 'eff0eecc',
            },
            fontFamily: {
                'storex': ['MyriadPro', 'sans-serif']
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ]
}
