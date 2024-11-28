<?php 
$pageTitle = "Custom PC Creations"; // Define the page title
include 'header.php'; // Include the header

?>
<link rel="stylesheet" href="projstyle.css?v=2">
<script src="projs.js"></script>


<section class="hero">
    <div class="hero-content">
        <h1>Build Your Dream PC</h1>
        <p>Explore the best custom PC options for gamers, creators, and professionals.</p>
        
    </div>
</section>

<!-- Category -->
<div class="carousel-container">
  <button class="carousel-btn left" onclick="scrollCarousel(-1)">&#8249;</button>
  <div class="category-carousel" id="carousel">
    <!-- Category Items -->
    <a href="processor.php" class="category-item">
    <img src="processor.jpg" alt="Processor">
    <h3>Processor</h3>
</a>

    <a href="motherboard.php" class="category-item">
      <img src="motherboard.jpg" alt="Motherboard">
      <h3>Motherboard</h3>
    </a>
    <a href="graphicscard.php" class="category-item">
      <img src="graphics-card.jpg" alt="Graphics Card">
      <h3>Graphics Card</h3>
    </a>
    <a href="memory.php" class="category-item">
      <img src="memory.jpg" alt="Memory">
      <h3>Memory</h3>
    </a>
    <a href="ssd.php" class="category-item">
      <img src="ssd.jpg" alt="Solid State Drives">
      <h3>Solid State Drives</h3>
    </a>
    <a href="psu.php" class="category-item">
      <img src="power-supply.jpg" alt="Power Supply">
      <h3>Power Supply</h3>
    </a>
    <a href="pccase.php" class="category-item">
      <img src="pc-case.jpg" alt="PC Case">
      <h3>PC Case</h3>
    </a>
    <a href="laptops.php" class="category-item">
      <img src="laptop.jpg" alt="Laptops">
      <h3>Laptops</h3>
    </a>
    <a href="monitor.php" class="category-item">
      <img src="monitor.jpg" alt="Monitor">
      <h3>Monitor</h3>
    </a>
    <a href="keyboard.php" class="category-item">
      <img src="keyboard.jpg" alt="Keyboard">
      <h3>Keyboard</h3>
    </a>
    <a href="mouse.php" class="category-item">
      <img src="mouse.jpg" alt="Mouse">
      <h3>Mouse</h3>
    </a>
    <a href="ups.php" class="category-item">
      <img src="ups.jpg" alt="UPS & AVR">
      <h3>UPS & AVR</h3>
    </a>
  </div>
  <button class="carousel-btn right" onclick="scrollCarousel(1)">&#8250;</button>
</div>






<!-- Featured Products -->
    <section class="featured">
        <h2>Featured Products</h2>
        <div class="product-grid">
        <div class="product">
            <a href="product-details.php?product=rtx4070super">
                <img src="fp1.jpg" alt="Nvidia GeForce RTX 4070 Super">
            </a>
            <h3>Nvidia GeForce RTX 4070 Super</h3>
            <p>The latest in GPU technology, delivering stunning graphics and high performance for gaming and creative workflows.</p>
            <a href="product-details.php?product=rtx4070super" class="btn-secondary">View Details</a>
        </div>

        <div class="product">
            <a href="product-details.php?product=AMDRyzen79800X3D">
                <img src="fp2.jpg" alt="AMD Ryzen 7 9800X3D">
            </a>
            <h3>AMD Ryzen 7 9800X3D</h3>
            <p>.</p>
            <a href="product-details.php?product=AMDRyzen79800X3D" class="btn-secondary">View Details</a>
        </div>
   


 
        <div class="product">
            <a href="product-details.php?product=AMDRyzen79800X3D">
                <img src="fp3.jpg" alt="AMD Ryzen 7 9800X3D">
            </a>
            <h3>ASRock X870E Taichi</h3>
            <p>.</p>
            <a href="product-details.php?product=AMDRyzen79800X3D" class="btn-secondary">View Details</a>
        </div>
        </div>
    </section>

<?php include 'footer.php'; // Include the footer ?>
<script>
    function scrollCarousel(direction) {
        const carousel = document.getElementById('carousel');
        const scrollAmount = 300; // Adjust as needed
        carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    }

</script>
