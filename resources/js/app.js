import { initFlowbite } from 'flowbite';

initFlowbite;

// document.addEventListener('DOMContentLoaded', (event) => {
//     const button = document.getElementById('lang-dropdown-link');
//     button.addEventListener('click', () => {
//         svg.classList.toggle('icon-toggled');
//     });
// });

const menuOpenIcon = 'M1 1h15M1 7h15M1 13h15';
const menuCloseIcon =
    'M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z';
const hamburgerMenu = document.getElementById('hamburger-menu');
const hamburgerMenuPath = document.getElementById('hamburger-path');

let iconLink = hamburgerMenuPath.getAttribute('d');
console.log(iconLink);

hamburgerMenu.addEventListener('click', () => {
    if (iconLink == menuOpenIcon) {
        iconLink = menuCloseIcon;
    } else if ((iconLink = menuCloseIcon)) {
        iconLink = menuOpenIcon;
    }
    hamburgerMenuPath.setAttribute('d', iconLink);
    console.log(iconLink);
});
