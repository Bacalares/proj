<?php  
$pageTitle = "Processors - Custom PC Creations"; // Page title for the processor category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Processor Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Processors</h2>
    </div>

    <div class="product-grid">
        <!-- AMD Ryzen 5 5600G Processor -->
        <div class="product">
            <img src="amd-ryzen-5600g.jpg" alt="AMD Ryzen 5 5600G Processor">
            <h3>AMD Ryzen 5 5600G</h3>
            <p>Socket AM4, 3.9GHz, with Radeon Vega 7 Graphics</p>
            <p class="price">$220.00</p>
            <button class="btn-primary" onclick="addToCart('AMD Ryzen 5 5600G', 220)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('AMD Ryzen 5 5600G', 220)">Buy Now</button>
        </div>

        <!-- Intel Core i5-12400 Processor -->
        <div class="product">
            <img src="intel-i5-12400.jpg" alt="Intel Core i5-12400 Processor">
            <h3>Intel Core i5-12400</h3>
            <p>Alder Lake Socket 1700, 2.5GHz</p>
            <p class="price">$200.00</p>
            <button class="btn-primary" onclick="addToCart('Intel Core i5-12400', 200)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Intel Core i5-12400', 200)">Buy Now</button>
        </div>

        <!-- AMD Ryzen 7 9800X3D Processor -->
        <div class="product">
            <img src="amd-ryzen-9800x3d.jpg" alt="AMD Ryzen 7 9800X3D Processor">
            <h3>AMD Ryzen 7 9800X3D</h3>
            <p>High-end multi-core performance for extreme gaming and content creation</p>
            <p class="price">$799.00</p>
            <button class="btn-primary" onclick="addToCart('AMD Ryzen 7 9800X3D', 799)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('AMD Ryzen 7 9800X3D', 799)">Buy Now</button>
        </div>
    </div>
</section>

<?php include 'footer.php'; // Include the footer ?>

<script>
    // JavaScript function to add items to the cart
    function addToCart(product, price) {
        alert(product + " has been added to your cart. Price: $" + price);
        // Optionally, you can store the item in localStorage or use AJAX to update a shopping cart system.
    }

    // JavaScript function for the 'Buy Now' functionality
    function buyNow(product, price) {
        alert("Proceeding to checkout for: " + product + " with price $" + price);
        // Redirect to the checkout page, you can integrate with a payment system or cart.
        window.location.href = "checkout.php";
    }
</script>

<?php
// Your existing footer code
?>
