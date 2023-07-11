<?php
session_start();
include('../config.php'); 

// Check if the user is already logged in
if (isset($_SESSION["username"])) {
    header("Location: admin_panel.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Credentials are valid, start the user session
            $_SESSION["username"] = $username;
            header("Location: admin_panel.php");
            exit();
        }
    }

    // Invalid credentials, display an error message
    $error = "Invalid username or password";

    // Close the database connection
    $stmt->close();
    $conn->close();
}

?>