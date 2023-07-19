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
      
        $sql = "select * from `admin` where username = '$username' and password = '$password'";  
       
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['username'] = $row['username'];
			

            echo '<script>alert("Login Successful")</script>';

            header('Refresh: 1; URL=../companiesform.php');
            exit();
        } else {
            header("Location: admin_login.php?error=Incorrect email or password");
        } 
    }
    
    mysqli_close($con);
?>  