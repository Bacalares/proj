<?php  
$pageTitle = "Motherboards - Custom PC Creations"; // Page title for the motherboard category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Motherboard Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Motherboards</h2>
    </div>

    <div class="product-grid">
        <!-- ASRock X870E Taichi Motherboard -->
        <div class="product">
            <img src="asrock-x870e-taichi.jpg" alt="ASRock X870E Taichi Motherboard">
            <h3>ASRock X870E Taichi</h3>
            <p>Socket AM5, DDR5 support, ATX Form Factor</p>
            <p class="price">$499.99</p>
            <button class="btn-primary" onclick="addToCart('ASRock X870E Taichi', 499.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('ASRock X870E Taichi', 499.99)">Buy Now</button>
        </div>

        <!-- MSI A520m-A Pro AMD Am4 Motherboard -->
        <div class="product">
            <img src="msi-a520m-a-pro.jpg" alt="MSI A520m-A Pro AMD Am4 Motherboard">
            <h3>MSI A520m-A Pro</h3>
            <p>AMD AM4, DDR4, Micro-ATX PCB, Gaming Motherboard</p>
            <p class="price">$109.99</p>
            <button class="btn-primary" onclick="addToCart('MSI A520m-A Pro', 109.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('MSI A520m-A Pro', 109.99)">Buy Now</button>
        </div>

        <!-- Asus Prime A520M-K Motherboard -->
        <div class="product">
            <img src="asus-prime-a520m-k.jpg" alt="Asus Prime A520M-K Motherboard">
            <h3>Asus Prime A520M-K</h3>
            <p>Socket AM4, DDR4, Micro-ATX, Gaming Motherboard</p>
            <p class="price">$79.99</p>
            <button class="btn-primary" onclick="addToCart('Asus Prime A520M-K', 79.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Asus Prime A520M-K', 79.99)">Buy Now</button>
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
