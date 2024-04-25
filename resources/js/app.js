import './bootstrap';
import gsap from 'gsap';

// Function to handle intersection observer callback
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // If the element is intersecting (visible), animate it
            gsap.to(entry.target, { 
                duration: 1, 
                x: 0, // Move to its original position (x: 0)
                opacity: 1, // Transition opacity from 0 to 1
                ease: 'power1.inOut',
                onComplete: () => observer.unobserve(entry.target) // Stop observing after animation
            });
        }
    });
}

// Create an Intersection Observer instance
const observer = new IntersectionObserver(handleIntersection, {
    root: null, // Use the viewport as the root
    threshold: 0.5 // Trigger when at least 50% of the element is visible
});

document.addEventListener('DOMContentLoaded', function () {
    // Select the element to animate
    const elementToAnimate = document.querySelector('.test');

    // Set initial properties before animation
    gsap.set(elementToAnimate, { opacity: 0, x: 300 });

    // Start observing the element
    observer.observe(elementToAnimate);
});