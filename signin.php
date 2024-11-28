<?php
include 'header.php';



// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user'])) {
    header('Location: index.php'); // Redirect to home page if already logged in
    exit();
}

// Handle form submission for login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sample validation (this should be replaced with a real database check)
    if ($username == 'admin' && $password == 'password123') {
        $_SESSION['user'] = $username;  // Store user info in session
        header('Location: index.php'); // Redirect to the homepage after successful login
        exit();
    } else {
        $error_message = "Invalid username or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Custom PC Creations</title>
    <link rel="stylesheet" href="signin.css"> <!-- Link to the sign-in CSS file -->
    <link rel="stylesheet" href="projstyle.css">
</head>
<body>

<div class="signin-container">
    <h2>Sign In</h2>

    <?php if (isset($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST" action="signin.php" class="signin-form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" name="submit" class="btn-submit">Sign In</button>

        <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</div>
<?php include 'footer.php'; // Include the footer ?>
</body>
</html>
