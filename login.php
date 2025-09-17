<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <form action="./dashboard.php">
        <div class="login-container">
            <label for="username" class="username-label">Username:</label>
            <br>
            <input type="text" placeholder="Enter your username" class="username-input">
            
            <br>

            <label for="password" class="username-label">Password:</label>
            <br>
            <input type="password" placeholder="Enter your password" class="password-input">
        </div>
    </form>
</body>
</html>