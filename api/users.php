<?php

// Check if the form is submitted
if(isset($_POST['register_user'])){
    // Establish database connection By Including the Connection File
    include '../config/conn.php';
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $raw_password = $_POST['password'];
    // Hash the password
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
    // Prepare and execute SQL query to insert data into the database (Assuming you have a table named 'users')
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashed_password' , '$role')";

if ($conn->query($sql) === TRUE) {
    // If the query was successful, show a success message with a browser alert
    echo '<script type="text/javascript">';
    echo 'alert("User Created successfully");';
    echo 'window.location.href = "../views/register_user.php";';  // Redirect to the desired page
    echo '</script>';
} else {
    // If there was an error with the query, display the error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}



    // Close database connection
    $conn->close();
}

// Check if the form is submitted 
   if(isset($_POST['update_user'])){
    // Establish database connection By Including the Connection File
    include '../config/conn.php';
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $id = $_POST['id'];

    // Prepare and execute SQL query to insert data into the database (Assuming you have a table named 'users')
    $sql = "UPDATE users set name = '$name', email = '$email', role = '$role' where id = '$id'";

    if ($conn->query($sql) === TRUE) {
        // If the query was successful, show a success message with a browser alert
        echo '<script type="text/javascript">';
        echo 'alert("User Created successfully");';
        echo 'window.location.href = "../views/register_user.php";';  // Redirect to the desired page
        echo '</script>';
    } else {
        // If there was an error with the query, display the error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
