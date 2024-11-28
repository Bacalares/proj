<?php  
$pageTitle = "Monitors - Custom PC Creations"; // Page title for the monitor category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Monitor Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Monitors</h2>
    </div>

    <div class="product-grid">
        <!-- Dell UltraSharp U2723QE -->
        <div class="product">
            <img src="dell-ultrasharp-u2723qe.jpg" alt="Dell UltraSharp U2723QE Monitor">
            <h3>Dell UltraSharp U2723QE</h3>
            <p>27" 4K UHD, IPS, HDR 400, USB-C Hub</p>
            <p class="price">$649.99</p>
            <button class="btn-primary" onclick="addToCart('Dell UltraSharp U2723QE', 649.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Dell UltraSharp U2723QE', 649.99)">Buy Now</button>
        </div>

        <!-- ASUS TUF Gaming VG27AQ -->
        <div class="product">
            <img src="asus-tuf-gaming-vg27aq.jpg" alt="ASUS TUF Gaming VG27AQ Monitor">
            <h3>ASUS TUF Gaming VG27AQ</h3>
            <p>27" QHD, 165Hz, IPS, G-Sync Compatible</p>
            <p class="price">$399.99</p>
            <button class="btn-primary" onclick="addToCart('ASUS TUF Gaming VG27AQ', 399.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('ASUS TUF Gaming VG27AQ', 399.99)">Buy Now</button>
        </div>

        <!-- LG UltraGear 34GN850-B -->
        <div class="product">
            <img src="lg-ultragear-34gn850-b.jpg" alt="LG UltraGear 34GN850-B Monitor">
            <h3>LG UltraGear 34GN850-B</h3>
            <p>34" UltraWide QHD, 160Hz, Nano IPS, HDR 400</p>
            <p class="price">$999.99</p>
            <button class="btn-primary" onclick="addToCart('LG UltraGear 34GN850-B', 999.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('LG UltraGear 34GN850-B', 999.99)">Buy Now</button>
        </div>
    </div>
</section>

<?php include 'footer.php'; // Include the footer ?>

<script>
    // JavaScript function to add items to the cart
    function addToCart(product, price) {
        alert(product + " has been added to your cart. Pri
