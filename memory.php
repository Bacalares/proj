<?php  
$pageTitle = "Memory - Custom PC Creations"; // Page title for the memory category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Memory Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Memory</h2>
    </div>

    <div class="product-grid">
        <!-- Corsair Vengeance LPX 16GB DDR4 -->
        <div class="product">
            <img src="corsair-vengeance-lpx-16gb.jpg" alt="Corsair Vengeance LPX 16GB DDR4 Memory">
            <h3>Corsair Vengeance LPX 16GB DDR4</h3>
            <p>DDR4, 3200MHz, CL16, Dual Channel Kit</p>
            <p class="price">$79.99</p>
            <button class="btn-primary" onclick="addToCart('Corsair Vengeance LPX 16GB DDR4', 79.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Corsair Vengeance LPX 16GB DDR4', 79.99)">Buy Now</button>
        </div>

        <!-- G.Skill Ripjaws V 32GB DDR4 -->
        <div class="product">
            <img src="gskill-ripjaws-v-32gb.jpg" alt="G.Skill Ripjaws V 32GB DDR4 Memory">
            <h3>G.Skill Ripjaws V 32GB DDR4</h3>
            <p>DDR4, 3600MHz, CL16, Dual Channel Kit</p>
            <p class="price">$149.99</p>
            <button class="btn-primary" onclick="addToCart('G.Skill Ripjaws V 32GB DDR4', 149.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('G.Skill Ripjaws V 32GB DDR4', 149.99)">Buy Now</button>
        </div>

        <!-- Kingston Fury Beast 16GB DDR5 -->
        <div class="product">
            <img src="kingston-fury-beast-16gb.jpg" alt="Kingston Fury Beast 16GB DDR5 Memory">
            <h3>Kingston Fury Beast 16GB DDR5</h3>
            <p>DDR5, 5200MHz, CL40, Single Stick</p>
            <p class="price">$89.99</p>
            <button class="btn-primary" onclick="addToCart('Kingston Fury Beast 16GB DDR5', 89.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Kingston Fury Beast 16GB DDR5', 89.99)">Buy Now</button>
        </div>
    </div>
</section>

<?php include 'footer.php'; // Include the footer ?>

<script>
    // JavaScript function to add items to the cart
    function addToCart(product, price) {
        alert(product + " has been added to your cart. Price: $" + price);
    }

    // JavaScript function for the 'Buy Now' functionality
    function buyNow(product, price) {
        alert("Proceeding to checkout for: " + product + " with price $" + price);
        window.location.href = "checkout.php";
    }
</script>
