<?php
// Establish database connection By Including the Connection File
include '../config/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $entered_password = $_POST['password'];

    // Fetch hashed password from the database based on the email
    $sql = "SELECT email, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, check the password
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Compare entered password with hashed password
        if (password_verify($entered_password, $hashed_password)) {
            // Passwords match, redirect to dashboard
            header("Location: ../views/dashboard.php");
        } else {
            // Passwords don't match, redirect to login with an alert
            header("Location: ../views/login.php?error=1");
        }
    } else {
        // User not found, redirect to login with an alert
        header("Location: ../views/login.php?error=2");
    }
}

$conn->close();
?>
