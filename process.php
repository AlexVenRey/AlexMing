<?php
session_start();
require_once "connection.php";

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

if ($user === "" || $pass === "") {
    header("Location: login.php");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = SHA2(?, 256)");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['username'] = $user;
    header("Location: ./Dashboard/Dashboard.php");
    exit();
} else {
    $_SESSION['error'] = "Incorrect username or password";
    header("Location: login.php");
    exit();
}

$stmt->close();
$conn->close();
?>
