<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Login</title>
</head>
<body>
    <form action="process.php" method="POST" id="loginForm">
        <div class="login-container">
            <label for="username" class="username-label">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" class="username-input">
            <span class="error-message" id="username-error"></span>

            <br>

            <label for="password" class="username-label">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" class="username-input">
            <span class="error-message" id="password-error"></span>

            <br>

            <?php if (!empty($error)): ?>
                <p style="color:red; font-weight; margin-top: 0;"><?= htmlspecialchars($error) ?></p>

            <?php endif; ?>

            <input type="submit" value="Login" class="button">
        </div>
    </form>

    <script src="./JS/validation.js" defer></script>
</body>
</html>
