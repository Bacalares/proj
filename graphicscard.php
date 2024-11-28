<?php  
$pageTitle = "Graphics Cards - Custom PC Creations"; // Page title for the graphics card category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Graphics Cards Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Graphics Cards</h2>
    </div>

    <div class="product-grid">
        <!-- NVIDIA GeForce RTX 4090 -->
        <div class="product">
            <img src="rtx-4090.jpg" alt="NVIDIA GeForce RTX 4090 Graphics Card">
            <h3>NVIDIA GeForce RTX 4090</h3>
            <p>24GB GDDR6X, PCIe 4.0, Ray Tracing</p>
            <p class="price">$1599.99</p>
            <button class="btn-primary" onclick="addToCart('NVIDIA GeForce RTX 4090', 1599.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('NVIDIA GeForce RTX 4090', 1599.99)">Buy Now</button>
        </div>

        <!-- AMD Radeon RX 7900 XTX -->
        <div class="product">
            <img src="rx-7900-xtx.jpg" alt="AMD Radeon RX 7900 XTX Graphics Card">
            <h3>AMD Radeon RX 7900 XTX</h3>
            <p>24GB GDDR6, PCIe 4.0, Ray Tracing</p>
            <p class="price">$999.99</p>
            <button class="btn-primary" onclick="addToCart('AMD Radeon RX 7900 XTX', 999.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('AMD Radeon RX 7900 XTX', 999.99)">Buy Now</button>
        </div>

        <!-- NVIDIA GeForce RTX 3060 -->
        <div class="product">
            <img src="rtx-3060.jpg" alt="NVIDIA GeForce RTX 3060 Graphics Card">
            <h3>NVIDIA GeForce RTX 3060</h3>
            <p>12GB GDDR6, PCIe 4.0, Budget Gaming</p>
            <p class="price">$349.99</p>
            <button class="btn-primary" onclick="addToCart('NVIDIA GeForce RTX 3060', 349.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('NVIDIA GeForce RTX 3060', 349.99)">Buy Now</button>
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
