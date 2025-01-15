import {initFlowbite} from 'flowbite';
// import 'fslightbox';
initFlowbite;

const burgerIcon = document.getElementById('burger-icon');
const closeIcon = document.getElementById('close-icon');
const mobileMenu = document.getElementById('mobile-menu');

function showMenu() {
    mobileMenu.classList.remove('-translate-x-full', 'slide-out');
    mobileMenu.classList.add('slide-in');
    closeIcon.classList.remove('hidden');
    burgerIcon.classList.add('hidden');
}

function hideMenu() {
    mobileMenu.classList.remove('slide-in');
    mobileMenu.classList.add('slide-out', '-translate-x-full');
    closeIcon.classList.add('hidden');
    burgerIcon.classList.remove('hidden');
}

burgerIcon.addEventListener('click', showMenu);
closeIcon.addEventListener('click', hideMenu);

// Production Dropdown Menu Functionality
const productionBtn = document.getElementById('production-mob-btn');
const dropdown = document.getElementById('production-mob-content');
const arrowSvg = document.getElementById('arrow-mob-svg');

productionBtn.addEventListener('click', function () {
    dropdown.classList.toggle('max-h-0');
    dropdown.classList.toggle('opacity-0');
    dropdown.classList.toggle('max-h-screen');
    dropdown.classList.toggle('opacity-100');

    productionBtn.classList.toggle('border-storex-red');
    productionBtn.classList.toggle('text-storex-red');
    productionBtn.classList.toggle('border-transparent');

    arrowSvg.classList.toggle('rotate-180');
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

            // Check if cells are available before attempting to access them
            if (cells && cells.length > 0) {
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
            } else {
                console.warn('No cells available in the carousel');
            }
        }

        // Update the inactive item on initialization and on selection change
        updateInactiveItem();
        flkty.on('select', updateInactiveItem);
    });
});

// Accordion Functionality and Styling
let acc = document.getElementsByClassName('faq-accordion');
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener('click', function () {
        let panel = this.nextElementSibling;
        let svg = this.querySelector('.acc-svg');
        let h4 = this.querySelector('h4');

        // Toggling the expanded state and aria-hidden attribute
        let isExpanded = this.getAttribute('aria-expanded') === 'true';

        // Update aria-expanded and aria-hidden
        this.setAttribute('aria-expanded', !isExpanded); // Toggle expanded state
        panel.setAttribute('aria-hidden', isExpanded); // Toggle hidden state

        // Panel animation and styling
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            panel.classList.toggle('border-storex-red');
            h4.classList.toggle('text-storex-red');
        } else {
            panel.style.maxHeight = panel.scrollHeight + 'px';
            panel.classList.toggle('border-storex-red');
            h4.classList.toggle('text-storex-red');
        }

        // SVG icon animation
        if (svg.classList.contains('rotate-180')) {
            svg.classList.remove('rotate-180');
            svg.classList.add('rotate-0');
            svg.classList.toggle('text-storex-red');
        } else {
            svg.classList.remove('rotate-0');
            svg.classList.add('rotate-180');
            svg.classList.toggle('text-storex-red');
        }
    });
}

// Since nav is fixed, offset the scrolling.
document.querySelectorAll('.scroll-btn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        const offset = 100; // Adjust this value based on your fixed navigation height

        const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = elementPosition - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth', // Add smooth scroll
        });
    });
});
