<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Default Title'; ?></title>
    <link rel="stylesheet" href="headercss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="header-left">
        <span class="company-name">Custom PC Creations</span>
    </div>
    
    <!-- Search Bar Centered -->
    <form class="search-bar" action="search.php" method="GET" style="width:40%;">
        <input type="text" name="query" placeholder="Search for products..." required>
        <button type="submit">&#128269;</button> <!-- Unicode for a search icon -->
    </form>

    <div class="header-right">
        <a href="index.php" class="active">Home</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">Products</a>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="category.php?category=processor">Processor</a></li>
                    <li><a href="category.php?category=motherboard">Motherboard</a></li>
                    <li><a href="category.php?category=graphics-card">Graphics Card</a></li>
                    <li><a href="category.php?category=memory">Memory</a></li>
                    <li><a href="category.php?category=ssd">Solid State Drives</a></li>
                    <li><a href="category.php?category=power-supply">Power Supply</a></li>
                    <li><a href="category.php?category=pc-case">PC Case</a></li>
                    <li><a href="category.php?category=laptops">Laptops</a></li>
                    <li><a href="category.php?category=monitor">Monitor</a></li>
                    <li><a href="category.php?category=keyboard">Keyboard</a></li>
                    <li><a href="category.php?category=mouse">Mouse</a></li>
                    <li><a href="category.php?category=ups">UPS & AVR</a></li>
                </ul>
            </div>
        </div>

        <!-- Cart Button -->
        <a href="cart.php" class="cart-button">
            <img src="cart-icon.png" alt="Cart" class="cart-icon"> <!-- Replace with your cart icon -->
            
        </a>
        <a href="signin.php">Sign-In</a>
    </div>
</div>
</body>
</html>
