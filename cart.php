<?php
include 'header.php';

// Start the session to track cart data
session_start();

// Initialize the cart if it's not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Handle adding items to the cart
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $product = $_GET['product'];  // Get product name
    $price = $_GET['price'];      // Get product price

    // Add product to session cart array
    $_SESSION['cart'][] = array('product' => $product, 'price' => $price);
}

// Handle removing items from the cart
if (isset($_GET['action']) && $_GET['action'] == 'remove') {
    $index = $_GET['index'];  // Get product index to remove

    // Remove product from cart
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);  // Reindex array
}

// Calculate total price
$totalPrice = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalPrice += $item['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="projstyle.css">
    <link rel="stylesheet" href="cartcss.css">
</head>
<body>

<div class="cart-container">
    <h2>Your Cart</h2>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <tr>
                        <td><?php echo $item['product']; ?></td>
                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                        <td>
                            <!-- Remove button -->
                            <a href="cart.php?action=remove&index=<?php echo $index; ?>" class="btn-remove">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="cart-summary">
            <p>Total: $<?php echo number_format($totalPrice, 2); ?></p>
            <a href="checkout.php" class="btn-checkout">Proceed to Checkout</a>
        </div>
    <?php endif; ?>
</div>


</body>
</html>
