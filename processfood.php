<?php
// Include the database configuration file
include 'config.php';

session_start();

// Define any error messages
$errors = [];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $foodtype = $_POST["foodtype"];
    $category = $_POST["category"];
    $quantity = $_POST["quantity"];
    $containertype = isset($_POST["containertype"]) ? $_POST["containertype"] : '';

    // Step 4: Sanitize and validate the data (example: using mysqli_real_escape_string)
    $foodtype = mysqli_real_escape_string($conn, $foodtype);
    $category = mysqli_real_escape_string($conn, $category);
    $quantity = mysqli_real_escape_string($conn, $quantity);
    $containertype = mysqli_real_escape_string($conn, $containertype);

    // Step 5: Insert the data into the database
    $sql = "INSERT INTO companies_food (food_item_name, food_category, food_quantity, container_type)
            VALUES ('$foodtype', '$category', '$quantity', '$containertype')";

    if ($conn->query($sql) === true) {
        echo "Data inserted successfully!";
        header('location: companyforms.php');
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
