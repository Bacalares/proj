<?php  
$pageTitle = "Laptops - Custom PC Creations"; // Page title for the laptop category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Laptop Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Laptops</h2>
    </div>

    <div class="product-grid">
        <!-- Dell XPS 13 -->
        <div class="product">
            <img src="dell-xps-13.jpg" alt="Dell XPS 13 Laptop">
            <h3>Dell XPS 13</h3>
            <p>13.4" FHD+, Intel Core i7, 16GB RAM, 512GB SSD</p>
            <p class="price">$1,199.99</p>
            <button class="btn-primary" onclick="addToCart('Dell XPS 13', 1199.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Dell XPS 13', 1199.99)">Buy Now</button>
        </div>

        <!-- Apple MacBook Air M2 -->
        <div class="product">
            <img src="macbook-air-m2.jpg" alt="Apple MacBook Air M2">
            <h3>Apple MacBook Air M2</h3>
            <p>13.6" Retina, M2 Chip, 8GB RAM, 256GB SSD</p>
            <p class="price">$1,049.99</p>
            <button class="btn-primary" onclick="addToCart('Apple MacBook Air M2', 1049.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Apple MacBook Air M2', 1049.99)">Buy Now</button>
        </div>

        <!-- ASUS ROG Zephyrus G14 -->
        <div class="product">
            <img src="asus-rog-zephyrus-g14.jpg" alt="ASUS ROG Zephyrus G14">
            <h3>ASUS ROG Zephyrus G14</h3>
            <p>14" QHD, AMD Ryzen 9, 16GB RAM, 1TB SSD</p>
            <p class="price">$1,499.99</p>
            <button class="btn-primary" onclick="addToCart('ASUS ROG Zephyrus G14', 1499.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('ASUS ROG Zephyrus G14', 1499.99)">Buy Now</button>
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
