// Navbar scroll effect - changes from transparent to gradient and makes it sticky
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector('.header-sticky');
    
    // Function to toggle sticky class based on scroll position
    function toggleStickyClass() {
        if (window.scrollY > 50) { // After scrolling 50px
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }
    
    // Check on page load
    toggleStickyClass();
    
    // Check on scroll
    window.addEventListener('scroll', toggleStickyClass);
}); 