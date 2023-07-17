<?php
session_start();
include('config.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_item_name = $_POST["food_item_name"];
    $food_category = $_POST["food_category"];
    $food_quantity = $_POST["food_quantity"];
    
    // Check if the user is logged in
    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
        
        // Prepare and execute the query
        $stmt = $conn->prepare("INSERT INTO orders (food_item_name, food_category, food_quantity ) VALUES ($food_item_name, $food_category, $food_quantity )");
        $stmt->bind_param("ssi", $food_item_name, $food_category, $food_quantity );
        $stmt->execute();
        
        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            // Data inserted successfully
            echo "Order placed successfully!";
        } else {
            // Failed to insert data
            echo "Failed to place order.";
        }
        
        // Close the statement
        $stmt->close();
    } else {
        // User not logged in
        echo "Please log in before placing an order.";
    }
}

// Close the database connection
$conn->close();
?>
