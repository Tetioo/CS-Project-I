<?php      
    session_start();
    
    include('../config.php'); 

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];  
        $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  

        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if ($result === false) {
            // Check for SQL errors
            echo 'SQL Error: ' . mysqli_error($conn);
            exit();
        }
        
        $execution_results = mysqli_num_rows($result);
        
        if ($execution_results) {
            echo '<script>alert("Login Successful")</script>';
            header('Refresh: 1; URL=admin_panel.php');
            exit();
        }
    }
      
       
    
    
    mysqli_close($conn);

?>  