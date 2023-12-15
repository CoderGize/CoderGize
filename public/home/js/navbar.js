const header = document.querySelector('.navbar');
let isScrolled = false;

window.addEventListener('scroll', function() {
  const scrollPos = window.scrollY;

  if (scrollPos > 50 && !isScrolled) { // Adjust the threshold value as needed
    header.classList.add('shrunk');
    isScrolled = true;
  } else if (scrollPos <= 50 && isScrolled) {
    header.classList.remove('shrunk');
    isScrolled = false;
  }
});


$(document).ready(function() {
    gsap.to('.homeli', { duration: 3, opacity: 0.3, x: -300, ease: 'power2.out' });
});

