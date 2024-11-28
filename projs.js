
function scrollCarousel(direction) {
    const carousel = document.getElementById('carousel');
    const scrollAmount = 300; // Adjust as needed
    carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
  }
  
  