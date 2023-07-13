<?php
// Include the database configuration file
require('../config.php');

session_start();
// Define any error messages
$errors = [];

// Check if the form has been submitted
// if(isset($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "on submit";
   // Retrieve the form input values
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phoneNumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);

   // Check if the email already exists in the database
   $select = "SELECT * FROM users WHERE email = '$email'";
   $result = mysqli_query($conn, $select);
   
   if(mysqli_num_rows($result) > 0){
      $errors[] = 'User already exists!';
      echo "error";
   } else {
      // Check if the passwords match
      echo "success";
      if($password !== $cpassword){
         $errors[] = 'Passwords do not match!';
      } else {
         // Insert the user data into the database
         $insert = "INSERT INTO users (name, email, phonenumber, address, password) VALUES('$name', '$email', '$phoneNumber', '$address', '$password')";
         if(mysqli_query($conn, $insert)){
            header("Location: login.php?message=Registration Successful");
            exit();
         } else {
            $errors[] = 'Error inserting data into the database: ' . mysqli_error($conn);
         }
      }
   }
}

?>