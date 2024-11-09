import { initFlowbite } from 'flowbite';

initFlowbite;

document.addEventListener('DOMContentLoaded', (event) => {
    const button = document.getElementById('lang-dropdown-link');
    const svg = button.querySelector('svg');

    button.addEventListener('click', () => {
        svg.classList.toggle('globe-toggled');
    });
});
