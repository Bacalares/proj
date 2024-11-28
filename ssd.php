<?php  
$pageTitle = "SSD - Custom PC Creations"; // Page title for the SSD category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- SSD Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>SSDs</h2>
    </div>

    <div class="product-grid">
        <!-- Samsung 970 EVO Plus 1TB NVMe SSD -->
        <div class="product">
            <img src="samsung-970-evo-plus-1tb.jpg" alt="Samsung 970 EVO Plus 1TB NVMe SSD">
            <h3>Samsung 970 EVO Plus 1TB</h3>
            <p>NVMe, M.2 2280, PCIe Gen 3.0 x4, Read Speed 3500MB/s</p>
            <p class="price">$99.99</p>
            <button class="btn-primary" onclick="addToCart('Samsung 970 EVO Plus 1TB', 99.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Samsung 970 EVO Plus 1TB', 99.99)">Buy Now</button>
        </div>

        <!-- Western Digital WD Blue 1TB SATA SSD -->
        <div class="product">
            <img src="wd-blue-1tb-ssd.jpg" alt="Western Digital WD Blue 1TB SATA SSD">
            <h3>Western Digital WD Blue 1TB</h3>
            <p>SATA III, 2.5-inch, 560MB/s Read Speed</p>
            <p class="price">$49.99</p>
            <button class="btn-primary" onclick="addToCart('Western Digital WD Blue 1TB', 49.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Western Digital WD Blue 1TB', 49.99)">Buy Now</button>
        </div>

        <!-- Crucial P5 Plus 500GB NVMe SSD -->
        <div class="product">
            <img src="crucial-p5-plus-500gb.jpg" alt="Crucial P5 Plus 500GB NVMe SSD">
            <h3>Crucial P5 Plus 500GB</h3>
            <p>NVMe, M.2 2280, PCIe Gen 4.0 x4, Read Speed 6600MB/s</p>
            <p class="price">$59.99</p>
            <button class="btn-primary" onclick="addToCart('Crucial P5 Plus 500GB', 59.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Crucial P5 Plus 500GB', 59.99)">Buy Now</button>
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
