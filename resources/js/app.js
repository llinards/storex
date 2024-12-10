import { initFlowbite } from 'flowbite';
import Flickity from 'flickity';

initFlowbite;

// Hamburger for Nav
const menuOpenIcon = 'M1 1h15M1 7h15M1 13h15';
const menuCloseIcon =
    'M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z';
const hamburgerMenu = document.getElementById('hamburger-menu');
const hamburgerMenuPath = document.getElementById('hamburger-path');

let iconLink = hamburgerMenuPath.getAttribute('d');

hamburgerMenu.addEventListener('click', () => {
    if (iconLink == menuOpenIcon) {
        iconLink = menuCloseIcon;
    } else if ((iconLink = menuCloseIcon)) {
        iconLink = menuOpenIcon;
    }
    hamburgerMenuPath.setAttribute('d', iconLink);
});

// Carousel Opacity Effect
document.addEventListener('DOMContentLoaded', function () {
    // Find all carousel elements
    let carousels = document.querySelectorAll('.carousel');

    carousels.forEach((carousel) => {
        let flkty = new Flickity(carousel, {
            contain: true,
        });

        // Function to update the next or previous item as inactive
        function updateInactiveItem() {
            let currentIndex = flkty.selectedIndex;
            let cells = flkty.cells;

            // Remove 'inactive' class from all cells
            cells.forEach((cell) => {
                cell.element.classList.remove('inactive');
            });

            // Get the next item (if any) and add the 'inactive' class
            let nextIndex = currentIndex + 1;
            let prevIndex = currentIndex - 1;

            if (nextIndex < cells.length) {
                cells[nextIndex].element.classList.add('inactive');
            }

            // If it's the last item, mark the previous item as inactive
            if (currentIndex === cells.length - 1 && prevIndex >= 0) {
                cells[prevIndex].element.classList.add('inactive');
            }
        }

        // Update the inactive item on initialization and on selection change
        updateInactiveItem();
        flkty.on('select', updateInactiveItem);
    });
});

// Accordion Functionality
document.addEventListener('DOMContentLoaded', function () {
    let firstSvg = document.querySelector('.faq-accordion svg');
    if (firstSvg) {
        firstSvg.classList.remove('rotate-180');
        firstSvg.classList.add('rotate-0');
    }
});

let acc = document.getElementsByClassName('faq-accordion');
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function () {
        let panel = this.nextElementSibling;
        let svg = this.querySelector('svg');

        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + 'px';
        }

        if (svg.classList.contains('rotate-180')) {
            svg.classList.remove('rotate-180');
            svg.classList.add('rotate-0');
        } else {
            svg.classList.remove('rotate-0');
            svg.classList.add('rotate-180');
        }
    });
}
